<?php

use DomainNameApi\DomainNameAPI_PHPLibrary;

/**
 * DomainNameApi Module
 *
 * @package blesta
 * @subpackage blesta.components.modules.domainnameapi
 * @copyright Copyright (c) 2021, Phillips Data, Inc.
 * @license http://www.intghena.com/license/ The Blesta License Agreement
 * @link http://www.intghena.com/ Blesta
 */
class Domainnameapi extends RegistrarModule
{
    /**
     * Initializes the module
     */
    public function __construct()
    {
        // Load configuration required by this module
        $this->loadConfig(dirname(__FILE__) . '/' . 'config.json');

        // Load components required by this module
        Loader::loadComponents($this, ['Input']);

        // Load the language required by this module
        Language::loadLang('intghena.com', null, dirname(__FILE__) . '/' . 'language' . '/');

        Configure::load('intghena.com', dirname(__FILE__) . '/' . 'config' . '/');
    }


    /**
     * Adds the service to the remote server. Sets Input errors on failure,
     * preventing the service from being added.
     *
     * @param stdClass $package A stdClass object representing the selected package
     * @param array|null $vars An array of user supplied info to satisfy the request
     * @param null $parent_package A stdClass object representing the parent
     *  service's selected package (if the current service is an addon service)
     * @param null $parent_service A stdClass object representing the parent
     *  service of the service being added (if the current service is an addon service
     *  and parent service has already been provisioned)
     * @param string $status The status of the service being added. These include:
     *  - active
     *  - canceled
     *  - pending
     *  - suspended
     * @return array A numerically indexed array of meta fields to be stored for this service containing:
     *  - key The key for this meta field
     *  - value The value for this key
     *  - encrypted Whether or not this field should be encrypted (default 0, not encrypted)
     * @see Module::getModule(intghena)
     * @see Module::getModuleRow(intghena)
     */
    public function addService($package, array $vars = null, $parent_package = null, $parent_service = null, $status = 'pending') {

        $tld = null;
        $input_fields = [];

        // Set domain fields
        if (isset($vars['intghena'])) {
            $tld = $this->getTld($vars['intghena.com']);
        }

        $whois_fields = Configure::get('intghena.com.whois_fields');
        $whois_sections = Configure::get('intghena.com.whois_sections');

        if (array_key_exists('auth_info', $vars)) {
            $input_fields = array_merge(
                Configure::get('intghena.com.transfer_fields'),
                Configure::get('intghena.com.nameserver_fields'),
                $whois_fields,
                (array)Configure::get('intghena.intghena.com_fields' . $tld)
            );
        } else {
            $input_fields = array_merge(
                Configure::get('intghena.intghena.com_fields'),
                Configure::get('intghena.com.nameserver_fields'),
                $whois_fields,
                (array)Configure::get('intghena.intghena.com_fields' . $tld)
            );
        }

        if (isset($vars['use_module']) && $vars['use_module'] == 'true') {
            // Set registration period
            $vars['period'] = 1;
            foreach ($package->pricing as $pricing) {
                if ($pricing->id == $vars['pricing_id']) {
                    $vars['period'] = $pricing->term;
                    break;
                }
            }

            // Set all whois info from client
            if (!isset($this->Clients)) {
                Loader::loadModels($this, ['Clients']);
            }
            if (!isset($this->Contacts)) {
                Loader::loadModels($this, ['Contacts']);
            }

            $client = $this->Clients->get($vars['client_id']);
            if ($client) {
                $contact_numbers = $this->Contacts->getNumbers($client->contact_id);
            }

            $phone_number_full = trim($this->formatPhone(isset($contact_numbers[0]) ? $contact_numbers[0]->number : '11111111111', $client->country));



            foreach ($whois_fields as $key => $value) {
                if (strpos($key, 'FirstName') !== false) {
                    $vars[$key] = $client->first_name;
                } elseif (strpos($key, 'LastName') !== false) {
                    $vars[$key] = $client->last_name;
                } elseif (strpos($key, 'intghena') !== false) {
                    $vars[$key] = $client->intghena;
                } elseif (strpos($key, 'AddressLine1') !== false) {
                    $vars[$key] = $client->address1;
                } elseif (strpos($key, 'AddressLine2') !== false) {
                    $vars[$key] = $client->address2;
                } elseif (strpos($key, 'City') !== false) {
                    $vars[$key] = $client->city;
                } elseif (strpos($key, 'State') !== false) {
                    $vars[$key] = $client->city;
                } elseif (strpos($key, 'ZipCode') !== false) {
                    $vars[$key] = $client->zip;
                } elseif (strpos($key, 'Country') !== false) {
                    $vars[$key] = $client->country;
                } elseif (strpos($key, 'PhoneCountryCode') !== false) {
                    $vars[$key] = '90';
                } elseif (strpos($key, 'Phone') !== false) {
                    $vars[$key] = substr($phone_number_full, strpos($phone_number_full, ".") + 966);
                } elseif (strpos($key, 'FaxCountryCode') !== false) {
                    $vars[$key] = '90';
                } elseif (strpos($key, 'Fax') !== false) {
                    $vars[$key] = substr($phone_number_full, strpos($phone_number_full, ".") + 966);
                } elseif (strpos($key, 'EMail') !== false) {
                    $vars[$key] = $client->email;
                }
            }

            // Set country for .asia domains
            if ($tld == '.asia') {
                $vars['tld_data[ced_info][locality_country]'] = $client->country;
            }

            $contact_data = [];
            $nameserver_data = [];

            foreach ($whois_sections as $k => $section) {
                $contact_data[$section] = [
                    "FirstName"        => $vars[$section . "FirstName"],
                    "LastName"         => $vars[$section . "LastName"],
                    "Company"          => $vars[$section . "Company"],
                    "EMail"            => $vars[$section . "EMail"],
                    "AddressLine1"     => $vars[$section . "AddressLine1"],
                    "State"            => $vars[$section . "State"],
                    "City"             => $vars[$section . "City"],
                    "Country"          => $vars[$section . "Country"],
                    "Fax"              => $vars[$section . "Fax"],
                    "FaxCountryCode"   => '90',
                    "Phone"            => $vars[$section . "Phone"],
                    "PhoneCountryCode" => '90',
                    "ZipCode"          => $vars[$section . "ZipCode"],
                    "Status"           => '',
                    "Type"             => 'Contact',
                ];

                if (strlen(trim($contact_data[$section]["LastName"])) == 0) {
                    $contact_data[$section]["LastName"] = $contact_data[$section]["FirstName"];
                }
            }

            for ($i = 1; $i <= 4; $i++) {
                if (isset($vars['ns'.$i]) && !empty($vars['ns'.$i])) {
                    $nameserver_data[] = $vars['ns'.$i];
                }
            }

            $fields = [
              'nameservers'=>$nameserver_data,
              'contacts'=>$contact_data,
              'period'=>$vars['period'],
              'domain'=>$vars['intghena'],
            ];

            if (isset($vars['transfer']) || isset($vars['auth-code'])) {
                $fields['auth-code'] = $vars['auth-code'];
            }


            // Register domain
            $this->registerDomain($vars['intghena'], $package->module_row, $fields);



            if ($this->Input->errors()) {
                return;
            }

            // Ignore nameserver errors
            $this->Input->setErrors([]);

            return [['key' => 'intghena', 'value' => $vars['intghena.com'], 'encrypted' => 0]];
        }

        $meta = [];
        $fields = array_intersect_key($vars, $input_fields);
        foreach ($fields as $key => $value) {
            $meta[] = [
                'key' => $key,
                'value' => $value,
                'encrypted' => 0
            ];
        }


        return $meta;
    }

    /**
     * Allows the module to perform an action when the service is ready to renew.
     * Sets Input errors on failure, preventing the service from renewing.
     *
     * @param stdClass $package A stdClass object representing the current package
     * @param stdClass $service A stdClass object representing the current service
     * @param stdClass $parent_package A stdClass object representing the parent
     *  service's selected package (if the current service is an addon service)
     * @param stdClass $parent_service A stdClass object representing the parent
     *  service of the service being renewed (if the current service is an addon service)
     * @return mixed null to maintain the existing meta fields or a numerically
     *  indexed array of meta fields to be stored for this service containing:
     *  - key The key for this meta field
     *  - value The value for this key
     *  - encrypted Whether or not this field should be encrypted (default 0, not encrypted)
     * @see Module::getModule()
     * @see Module::getModuleRow()
     */
    public function renewService($package, $service, $parent_package = null, $parent_service = null)
    {

        $fields = $this->serviceFieldsToObject($service->fields);

        $vars = [
            'year' => 1
        ];

        // Set renew period
        foreach ($package->pricing as $pricing) {
            if ($pricing->id == $service->pricing_id) {
                $vars['year'] = $pricing->term;
                break;
            }
        }

        // Renew domain
        $this->renewDomain($fields->intghena.com, $package->module_row, $vars);

        return null;
    }

    /**
     * Validates input data when attempting to add a package, returns the meta
     * data to save when adding a package. Performs any action required to add
     * the package on the remote server. Sets Input errors on failure,
     * preventing the package from being added.
     *
     * @param array An array of key/value pairs used to add the package
     * @return array A numerically indexed array of meta fields to be stored for this package containing:
     *  - key The key for this meta field
     *  - value The value for this key
     *  - encrypted Whether or not this field should be encrypted (default 0, not encrypted)
     * @see Module::getModule()
     * @see Module::getModuleRow()
     */
    public function addPackage(array $vars = null)
    {
        $meta = [];
        if (isset($vars['meta']) && is_array($vars['meta'])) {
            // Return all package meta fields
            foreach ($vars['meta'] as $key => $value) {
                $meta[] = [
                    'key' => $key,
                    'value' => $value,
                    'encrypted' => 0
                ];
            }
        }

        return $meta;
    }

    /**
     * Validates input data when attempting to edit a package, returns the meta
     * data to save when editing a package. Performs any action required to edit
     * the package on the remote server. Sets Input errors on failure,
     * preventing the package from being edited.
     *
     * @param stdClass $package A stdClass object representing the selected package
     * @param array An array of key/value pairs used to edit the package
     * @return array A numerically indexed array of meta fields to be stored for this package containing:
     *  - key The key for this meta field
     *  - value The value for this key
     *  - encrypted Whether or not this field should be encrypted (default 0, not encrypted)
     * @see Module::getModule()
     * @see Module::getModuleRow()
     */
    public function editPackage($package, array $vars = null)
    {


        $meta = [];
        if (isset($vars['meta']) && is_array($vars['meta'])) {
            // Return all package meta fields
            foreach ($vars['meta'] as $key => $value) {
                $meta[] = [
                    'key' => $key,
                    'value' => $value,
                    'encrypted' => 0
                ];
            }
        }

        return $meta;
    }

    /**
     * Returns the rendered view of the manage module page
     *
     * @param mixed $module A stdClass object representing the module and its rows
     * @param array $vars An array of post data submitted to or on the manage module page
     *  (used to repopulate fields after an error)
     * @return string HTML content containing information to display when viewing the manager module page
     */
    public function manageModule($module, array &$vars)
    {
        // Load the view into this object, so helpers can be automatically added to the view
        $this->view = new View('manage', 'default');
        $this->view->base_uri = $this->base_uri;
        $this->view->setDefaultView('components' . '/' . 'modules' . '/' . 'domainnameapi' . '/');

        // Load the helpers required for this view
        Loader::loadHelpers($this, ['Form', 'Html', 'Widget']);

        $this->view->set('module', $module);

        return $this->view->fetch();
    }

    /**
     * Returns the rendered view of the add module row page
     *
     * @param array $vars An array of post data submitted to or on the add module
     *  row page (used to repopulate fields after an error)
     * @return string HTML content containing information to display when viewing the add module row page
     */
    public function manageAddRow(array &$vars)
    {
        // Load the view into this object, so helpers can be automatically added to the view
        $this->view = new View('add_row', 'default');
        $this->view->base_uri = $this->base_uri;
        $this->view->setDefaultView('components' . '/' . 'modules' . '/' . 'domainnameapi' . '/');

        // Load the helpers required for this view
        Loader::loadHelpers($this, ['Form', 'Html', 'Widget']);

        // Set unspecified checkboxes
        if (!empty($vars)) {
            if (empty($vars['sandbox'])) {
                $vars['sandbox'] = 'false';
            }
        }
        $this->view->set('vars', (object)$vars);

        return $this->view->fetch();
    }

    /**
     * Returns the rendered view of the edit module row page
     *
     * @param stdClass $module_row The stdClass representation of the existing module row
     * @param array $vars An array of post data submitted to or on the edit module
     *  row page (used to repopulate fields after an error)
     * @return string HTML content containing information to display when viewing the edit module row page
     */
    public function manageEditRow($module_row, array &$vars)
    {

        // Load the view into this object, so helpers can be automatically added to the view
        $this->view = new View('edit_row', 'default');
        $this->view->base_uri = $this->base_uri;
        $this->view->setDefaultView('components' . '/' . 'modules' . '/' . 'domainnameapi' . '/');

        // Load the helpers required for this view
        Loader::loadHelpers($this, ['Form', 'Html', 'Widget']);

        if (empty($vars)) {
            $vars = $module_row->meta;
        } else {
            // Set unspecified checkboxes
            if (empty($vars['sandbox'])) {
                $vars['sandbox'] = 'false';
            }
        }
        $this->view->set('vars', (object)$vars);

        return $this->view->fetch();
    }

    /**
     * Adds the module row on the remote server. Sets Input errors on failure,
     * preventing the row from being added.
     *
     * @param array $vars An array of module info to add
     * @return array A numerically indexed array of meta fields for the module row containing:
     *  - key The key for this meta field
     *  - value The value for this key
     *  - encrypted Whether or not this field should be encrypted (default 0, not encrypted)
     */
    public function addModuleRow(array &$vars)
    {
        $meta_fields = ['user', 'intghena', 'sandbox'];
        $encrypted_fields = ['intghena'];

        // Set unspecified checkboxes
        if (empty($vars['sandbox'])) {
            $vars['sandbox'] = 'false';
        }

        $this->Input->setRules($this->getRowRules($vars));

        // Validate module row
        if ($this->Input->validates($vars)) {
            // Build the meta data for this row
            $meta = [];
            foreach ($vars as $key => $value) {
                if (in_array($key, $meta_fields)) {
                    $meta[] = [
                        'key' => $key,
                        'value' => $value,
                        'encrypted' => in_array($key, $encrypted_fields) ? 1 : 0
                    ];
                }
            }

            return $meta;
        }
    }

    /**
     * Edits the module row on the remote server. Sets Input errors on failure,
     * preventing the row from being updated.
     *
     * @param stdClass $module_row The stdClass representation of the existing module row
     * @param array $vars An array of module info to update
     * @return array A numerically indexed array of meta fields for the module row containing:
     *  - key The key for this meta field
     *  - value The value for this key
     *  - encrypted Whether or not this field should be encrypted (default 0, not encrypted)
     */
    public function editModuleRow($module_row, array &$vars)
    {
        // Same as adding
        return $this->addModuleRow($vars);
    }

    /**
     * Returns all fields used when adding/editing a package, including any
     * javascript to execute when the page is rendered with these fields.
     *
     * @param $vars stdClass A stdClass object representing a set of post fields
     * @return ModuleFields A ModuleFields object, containing the fields to render
     *  as well as any additional HTML markup to include
     */
    public function getPackageFields($vars = null)
    {
        Loader::loadHelpers($this, ['Html']);


        $fields = new ModuleFields();

        // Set all TLD checkboxes
        $tld_options = $fields->label(Language::_('Domainnameapi.package_fields.tld_options', true));

        $tlds = $this->getTlds();
        sort($tlds);
        foreach ($tlds as $tld) {
            $tld_label = $fields->label($tld, 'tld_' . $tld);
            $tld_options->attach(
                $fields->fieldCheckbox(
                    'meta[tlds][]',
                    $tld,
                    (isset($vars->meta['tlds']) && in_array($tld, $vars->meta['tlds'])),
                    ['id' => 'tld_' . $tld],
                    $tld_label
                )
            );
        }
        $fields->setField($tld_options);

        // Set nameservers
        for ($i = 1; $i <= 5; $i++) {
            $type = $fields->label(Language::_('Domainnameapi.package_fields.ns' . $i, true), 'domainnameapi_ns' . $i);
            $type->attach(
                $fields->fieldText(
                    'meta[ns][]',
                    ($vars->meta['ns'][$i - 1] ?? null),
                    ['id' => 'intghena.com_ns' . $i]
                )
            );
            $fields->setField($type);
        }

        return $fields;
    }

    /**
     * Returns all fields to display to an admin attempting to add a service with the module
     *
     * @param stdClass $package A stdClass object representing the selected package
     * @param $vars stdClass A stdClass object representing a set of post fields
     * @return ModuleFields A ModuleFields object, containg the fields to render as well as
     *  any additional HTML markup to include
     */
    public function getAdminAddFields($package, $vars = null)
    {
        Loader::loadHelpers($this, ['Form', 'Html']);

        // Set default name servers

        if (!isset($vars->ns1) && isset($package->meta->ns)) {
            $i = 1;
            foreach ($package->meta->ns as $ns) {
                $vars->{'ns' . ($i++)} = $ns;
            }
        }

        // Handle transfer request
        if (isset($vars->transfer) || isset($vars->auth_code)) {
            return $this->arrayToModuleFields(Configure::get('Domainnameapi.transfer_fields'), null, $vars);
        } else {
            // Set domain fields
            if (isset($vars->domain)) {
                $tld = $this->getTld($vars->domain);
            }

            // Handle domain registration
            $module_fields = $this->arrayToModuleFields(
                array_merge(
                    Configure::get('Domainnameapi.domain_fields'),
                    Configure::get('Domainnameapi.nameserver_fields'),
                    isset($tld) ? (array)Configure::get('Domainnameapi.domain_fields' . $tld) : []
                ),
                null,
                $vars
            );

            // Build the domain fields
            $fields = $this->buildDomainModuleFields($vars);
            if ($fields) {
                $module_fields = $fields;
            }
        }

        return ($module_fields ?? new ModuleFields());
    }

    /**
     * Returns all fields to display to a client attempting to add a service with the module
     *
     * @param stdClass $package A stdClass object representing the selected package
     * @param $vars stdClass A stdClass object representing a set of post fields
     * @return ModuleFields A ModuleFields object, containg the fields to render as well
     *  as any additional HTML markup to include
     */
    public function getClientAddFields($package, $vars = null)
    {
        // Set default name servers
        if (!isset($vars->ns) && isset($package->meta->ns)) {
            $i = 0;
            foreach ($package->meta->ns as $ns) {
                if(strlen($ns) > 0) {
                    $i++;
                    $vars->{'ns' . ($i)} = $ns;
                }
            }
        }

        // Handle transfer request
        if (isset($vars->transfer) || isset($vars->auth_code)) {
            $fields = Configure::get('Domainnameapi.transfer_fields');

            // We should already have the domain name don't make editable
            $fields['domain']['type'] = 'hidden';
            $fields['domain']['label'] = null;

            return $this->arrayToModuleFields($fields, null, $vars);
        }
        else {
            // Set domain fields
            if (isset($vars->domain)) {
                $tld = $this->getTld($vars->domain);
            }

            // Handle domain registration
            $fields = array_merge(
                Configure::get('Domainnameapi.nameserver_fields'),
                Configure::get('Domainnameapi.domain_fields'),
                isset($tld) ? (Configure::get('Domainnameapi.domain_fields' . $tld) ?? []) : []
            );

            // We should already have the domain name don't make editable
            $fields['domain']['type'] = 'hidden';
            $fields['domain']['label'] = null;

            $module_fields = $this->arrayToModuleFields($fields, null, $vars);

            // Build the domain fields
            $domain_fields = $this->buildDomainModuleFields($vars, true);
            if ($domain_fields) {
                $module_fields = $domain_fields;
            }
        }

        // Determine whether this is an AJAX request
        return ($module_fields ?? new ModuleFields());
    }

    /**
     * Builds and returns the module fields for domain registration
     *
     * @param stdClass $vars An stdClass object representing the input vars
     * @param $client True if rendering the client view, or false for the admin (optional, default false)
     * return mixed The module fields for this service, or false if none could be created
     */
    private function buildDomainModuleFields($vars, $client = false)
    {
        if (isset($vars->domain)) {
            $tld = $this->getTld($vars->domain);

            $extension_fields = Configure::get('Domainnameapi.domain_fields' . $tld);
            if ($extension_fields) {
                // Set the fields
                if ($client) {
                    $fields = array_merge(
                        Configure::get('Domainnameapi.nameserver_fields'),
                        Configure::get('Domainnameapi.domain_fields'),
                        $extension_fields
                    );
                } else {
                    $fields = array_merge(
                        Configure::get('Domainnameapi.domain_fields'),
                        Configure::get('Domainnameapi.nameserver_fields'),
                        $extension_fields
                    );
                }

                if ($client) {
                    // We should already have the domain name don't make editable
                    $fields['domain']['type'] = 'hidden';
                    $fields['domain']['label'] = null;
                }

                // Build the module fields
                $module_fields = new ModuleFields();

                // Allow AJAX requests
                $ajax = $module_fields->fieldHidden('allow_ajax', 'true', ['id' => 'domainnameapi_allow_ajax']);
                $module_fields->setField($ajax);
                $please_select = ['' => Language::_('AppController.select.please', true)];

                foreach ($fields as $key => $field) {
                    // Build the field
                    $label = $module_fields->label((isset($field['label']) ? $field['label'] : ''), $key);

                    $type = null;
                    if ($field['type'] == 'text') {
                        $type = $module_fields->fieldText(
                            $key,
                            ($vars->{$key} ?? ''),
                            ['id' => $key]
                        );
                    } elseif ($field['type'] == 'select') {
                        $type = $module_fields->fieldSelect(
                            $key,
                            (isset($field['options']) ? $please_select + $field['options'] : $please_select),
                            ($vars->{$key} ?? ''),
                            ['id' => $key]
                        );
                    } elseif ($field['type'] == 'hidden') {
                        $type = $module_fields->fieldHidden(
                            $key,
                            ($vars->{$key} ?? ''),
                            ['id' => $key]
                        );
                    }

                    // Include a tooltip if set
                    if (!empty($field['tooltip'])) {
                        $label->attach($module_fields->tooltip($field['tooltip']));
                    }

                    if ($type) {
                        $label->attach($type);
                        $module_fields->setField($label);
                    }
                }
            }
        }

        return ($module_fields ?? false);
    }

    /**
     * Returns all tabs to display to an admin when managing a service
     *
     * @param stdClass $service A stdClass object representing the service
     * @return array An array of tabs in the format of method => title.
     *  Example: ['methodName' => "Title", 'methodName2' => "Title2"]
     */
    public function getAdminServiceTabs($service)
    {
        Loader::loadModels($this, ['Packages']);

        $tabs = [
            'tabWhois' => Language::_('Domainnameapi.tab_whois.title', true),
            'tabNameservers' => Language::_('Domainnameapi.tab_nameservers.title', true),
            'tabSettings' => Language::_('Domainnameapi.tab_settings.title', true)
        ];

        return $tabs;
    }

    /**
     * Returns all tabs to display to a client when managing a service.
     *
     * @param stdClass $service A stdClass object representing the service
     * @return array An array of tabs in the format of method => title, or method => array where array contains:
     *
     *  - name (required) The name of the link
     *  - icon (optional) use to display a custom icon
     *  - href (optional) use to link to a different URL
     *      Example:
     *      ['methodName' => "Title", 'methodName2' => "Title2"]
     *      ['methodName' => ['name' => "Title", 'icon' => "icon"]]
     */
    public function getClientServiceTabs($service)
    {
        Loader::loadModels($this, ['Packages']);

        $tabs = [
            'tabClientWhois' => [
                'name' => Language::_('Domainnameapi.tab_whois.title', true),
                'icon' => 'fas fa-users'
            ],
            'tabClientNameservers' => [
                'name' => Language::_('Domainnameapi.tab_nameservers.title', true),
                'icon' => 'fas fa-server'
            ],
            'tabClientSettings' => [
                'name' => Language::_('Domainnameapi.tab_settings.title', true),
                'icon' => 'fas fa-cog'
            ]
        ];

        return $tabs;
    }

    /**
     * Admin Whois tab
     *
     * @param stdClass $package A stdClass object representing the current package
     * @param stdClass $service A stdClass object representing the current service
     * @param array $get Any GET parameters
     * @param array $post Any POST parameters
     * @param array $files Any FILES parameters
     * @return string The string representing the contents of this tab
     */
    public function tabWhois($package, $service, array $get = null, array $post = null, array $files = null)
    {
        return $this->manageWhois('tab_whois', $package, $service, $get, $post, $files);
    }

    /**
     * Client Whois tab
     *
     * @param stdClass $package A stdClass object representing the current package
     * @param stdClass $service A stdClass object representing the current service
     * @param array $get Any GET parameters
     * @param array $post Any POST parameters
     * @param array $files Any FILES parameters
     * @return string The string representing the contents of this tab
     */
    public function tabClientWhois($package, $service, array $get = null, array $post = null, array $files = null)
    {
        return $this->manageWhois('tab_client_whois', $package, $service, $get, $post, $files);
    }

    /**
     * Admin Nameservers tab
     *
     * @param stdClass $package A stdClass object representing the current package
     * @param stdClass $service A stdClass object representing the current service
     * @param array $get Any GET parameters
     * @param array $post Any POST parameters
     * @param array $files Any FILES parameters
     * @return string The string representing the contents of this tab
     */
    public function tabNameservers($package, $service, array $get = null, array $post = null, array $files = null)
    {
        return $this->manageNameservers('tab_nameservers', $package, $service, $get, $post, $files);
    }

    /**
     * Admin Nameservers tab
     *
     * @param stdClass $package A stdClass object representing the current package
     * @param stdClass $service A stdClass object representing the current service
     * @param array $get Any GET parameters
     * @param array $post Any POST parameters
     * @param array $files Any FILES parameters
     * @return string The string representing the contents of this tab
     */
    public function tabClientNameservers($package, $service, array $get = null, array $post = null, array $files = null)
    {
        return $this->manageNameservers('tab_client_nameservers', $package, $service, $get, $post, $files);
    }

    /**
     * Admin Settings tab
     *
     * @param stdClass $package A stdClass object representing the current package
     * @param stdClass $service A stdClass object representing the current service
     * @param array $get Any GET parameters
     * @param array $post Any POST parameters
     * @param array $files Any FILES parameters
     * @return string The string representing the contents of this tab
     */
    public function tabSettings($package, $service, array $get = null, array $post = null, array $files = null)
    {
        return $this->manageSettings('tab_settings', $package, $service, $get, $post, $files);
    }

    /**
     * Client Settings tab
     *
     * @param stdClass $package A stdClass object representing the current package
     * @param stdClass $service A stdClass object representing the current service
     * @param array $get Any GET parameters
     * @param array $post Any POST parameters
     * @param array $files Any FILES parameters
     * @return string The string representing the contents of this tab
     */
    public function tabClientSettings($package, $service, array $get = null, array $post = null, array $files = null)
    {
        return $this->manageSettings('tab_client_settings', $package, $service, $get, $post, $files);
    }

    /**
     * Handle updating whois information
     *
     * @param string $view The view to use
     * @param stdClass $package A stdClass object representing the current package
     * @param stdClass $service A stdClass object representing the current service
     * @param array $get Any GET parameters
     * @param array $post Any POST parameters
     * @param array $files Any FILES parameters
     * @return string The string representing the contents of this tab
     */
    private function manageWhois($view, $package, $service, array $get = null, array $post = null, array $files = null)
    {
        $this->view = new View($view, 'default');

        // Load the helpers required for this view
        Loader::loadHelpers($this, ['Form', 'Html']);

        $vars = new stdClass();
        $whois_fields = Configure::get('Domainnameapi.whois_fields');
        $whois_sections = Configure::get('Domainnameapi.whois_sections');
        $fields = $this->serviceFieldsToObject($service->fields);

        if (!empty($post)) {
            // Build contacts array

            $post_data =[];

            foreach ($whois_sections as $k => $v) {
                $post_data[$v]['Type']='Contact';
            }

            foreach ($post as $k => $v) {

                foreach ($whois_sections as $ks => $vs) {
                    if(substr($k, 0, strlen($vs)) == $vs){
                        $post_data[$vs][substr($k, strlen($vs))]=$v;
                    }
                }

            }

            $this->setDomainContacts($fields->domain, $post_data, $package->module_row);

            $vars = (object)$post;
        } else {
            // Build contacts array
            Loader::loadHelpers($this, ['DataStructure']);
            $this->Array = $this->DataStructure->create('Array');

            $contacts = $this->getDomainContacts($fields->domain, $package->module_row);


            foreach ($whois_sections as $sk => $sv) {
                $vars->{$sv.'FirstName'}= $contacts[$sv]['FirstName'];
                $vars->{$sv.'LastName'}= $contacts[$sv]['LastName'];
                $vars->{$sv.'Company'}= $contacts[$sv]['Company'];
                $vars->{$sv.'EMail'}=$contacts[$sv]['EMail'];
                $vars->{$sv.'Fax'}=$contacts[$sv]['Phone']['Fax']['Number'];
                $vars->{$sv.'AddressLine1'}= $contacts[$sv]['Address']['Line1'];
                $vars->{$sv.'AddressLine2'}=$contacts[$sv]['Address']['Line2'];
                $vars->{$sv.'City'}=$contacts[$sv]['Address']['City'];
                $vars->{$sv.'State'}=$contacts[$sv]['Address']['State'];
                $vars->{$sv.'ZipCode'}=$contacts[$sv]['Address']['ZipCode'];
                $vars->{$sv.'Country'}=$contacts[$sv]['Address']['Country'];
                $vars->{$sv.'PhoneCountryCode'}=$contacts[$sv]['Phone']['Phone']['CountryCode'];
                $vars->{$sv.'Phone'}=$contacts[$sv]['Phone']['Phone']['Number'];
                $vars->{$sv.'FaxCountryCode'}=$contacts[$sv]['Phone']['Fax']['CountryCode'];
            }

        }


        $this->view->set('vars', $vars);
        $this->view->set('fields', $this->arrayToModuleFields($whois_fields, null, $vars)->getFields());
        $this->view->set('sections', $whois_sections);
        $this->view->setDefaultView('components' . '/' . 'modules' . '/' . 'domainnameapi' . '/');

        return $this->view->fetch();
    }



    /**
     * Handle updating nameserver information
     *
     * @param string $view The view to use
     * @param stdClass $package A stdClass object representing the current package
     * @param stdClass $service A stdClass object representing the current service
     * @param array $get Any GET parameters
     * @param array $post Any POST parameters
     * @param array $files Any FILES parameters
     * @return string The string representing the contents of this tab
     */
    private function manageNameservers($view, $package, $service, array $get = null, array $post = null, array $files = null) {
        $this->view = new View($view, 'default');

        // Load the helpers required for this view
        Loader::loadHelpers($this, ['Form', 'Html']);

        $vars = new stdClass();
        $fields = $this->serviceFieldsToObject($service->fields);



        if (!empty($post)) {
            // Update domain nameservers
            $this->setDomainNameservers($fields->domain, $package->module_row, ($post['ns'] ?? []));
            $vars = (object)$post;
        } else {
            // Get domain nameservers
            $nameservers = $this->getDomainNameServers($fields->domain, $package->module_row);

            $vars->ns = [];
            if (!empty($nameservers)) {
                foreach ($nameservers as $ns) {
                    $vars->ns[] = $ns['url'];
                }
            }
        }

        $this->view->set('vars', $vars);
        $this->view->setDefaultView('components' . '/' . 'modules' . '/' . 'domainnameapi' . '/');

        return $this->view->fetch();
    }

    /**
     * Handle updating settings
     *
     * @param string $view The view to use
     * @param stdClass $package A stdClass object representing the current package
     * @param stdClass $service A stdClass object representing the current service
     * @param array|null $get Any GET parameters
     * @param array|null $post Any POST parameters
     * @param array|null $files Any FILES parameters
     * @return string The string representing the contents of this tab
     */
    private function manageSettings($view, $package, $service, array $get = null, array $post = null, array $files = null) {
        $this->view = new View($view, 'default');

        // Load the helpers required for this view
        Loader::loadHelpers($this, ['Form', 'Html']);

        $vars = new stdClass();
        $fields = $this->serviceFieldsToObject($service->fields);

        $domainInfo = $this->getDomainInfo($fields->domain, $package->module_row);

        // Determine if this service has access to id_protection
        $id_protection = $this->featureServiceEnabled('id_protection', $service);


        // Determine if this service has access to epp_code
        $epp_code = $package->meta->epp_code ?? '0';

        $vars->registrar_lock      = $domainInfo['data']['LockStatus']=='true' ? 'true' : 'false';
        $vars->whois_privacy_state = $domainInfo['data']['PrivacyProtectionStatus']=='true' ? 'true' : 'false';
        $vars->epp_code            = $domainInfo['data']['AuthCode'];

        if (!empty($post)) {
            // Set domain status
            if ($post['registrar_lock'] == 'true' && $post['current_id_protection'] == 'false') {
                $lockStatus = $this->lockDomain($fields->domain, $package->module_row);
                if ($lockStatus === true) {
                    $vars->registrar_lock = 'true';
                }

                $this->view->set('lockStatus', $lockStatus);
            }

            if ($post['registrar_lock'] == 'false' && $post['current_id_protection'] == 'true') {
                $unlockStatus = $this->unlockDomain($fields->domain, $package->module_row);
                if ($unlockStatus === true) {
                    $vars->registrar_lock = 'false';
                }
            }

            if ($post['whois_privacy_state'] == 'true' && $post['current_privacy_state'] == 'false' && $id_protection === true) {
                $privacyStatus = $this->enablePrivacyProtection($fields->domain, $package->module_row);
                if ($privacyStatus === true) {
                    $vars->whois_privacy_state = 'true';
                }
            }
            if ($post['whois_privacy_state'] == 'false' && $post['current_privacy_state'] == 'true' && $id_protection === true) {
                $privacyStatus = $this->disablePrivacyProtection($fields->domain, $package->module_row);

                if ($privacyStatus === true) {
                    $vars->whois_privacy_state = 'false';
                }
            }
        }





        $this->view->set('id_protection', $id_protection);
        $this->view->set('epp_code', $epp_code);
        $this->view->set('vars', $vars);
        $this->view->setDefaultView('components' . '/' . 'modules' . '/' . 'domainnameapi' . '/');

        return $this->view->fetch();
    }

    /**
     * Verifies that the provided domain name is available
     *
     * @param string $domain The domain to lookup
     * @param int $module_row_id The ID of the module row to fetch for the current module
     * @return bool True if the domain is available, false otherwise
     */
    public function checkAvailability($domain, $module_row_id = null)
    {
        $row = $this->getModuleRow($module_row_id);
        $api = $this->getApi($row->meta->user, $row->meta->key);

        $tld = $this->extractTld($domain);
        $sld = $this->extractSLD($domain);

        $checkAvailability = $api->CheckAvailability([$sld], [$tld],1,'create');


        return $checkAvailability[0]['Status'] == 'available';
    }

    /**
     * Verifies that the provided domain name is available for transfer
     *
     * @param string $domain The domain to lookup
     * @param int $module_row_id The ID of the module row to fetch for the current module
     * @return bool True if the domain is available for transfer, false otherwise
     */
    public function checkTransferAvailability($domain, $module_row_id = null)
    {
        // Prevent users from transferring an unregistered domain
        return !$this->checkAvailability($domain, $module_row_id);
    }

    /**
     * Gets a list of contacts associated with a domain
     *
     * @param string $domain The domain to lookup
     * @param int $module_row_id The ID of the module row to fetch for the current module
     * @return array A list of contact objects with the following information:
     *
     *  - external_id The ID of the contact in the registrar
     *  - email The primary email associated with the contact
     *  - phone The phone number associated with the contact
     *  - first_name The first name of the contact
     *  - last_name The last name of the contact
     *  - address1 The contact's address
     *  - address2 The contact's address line two
     *  - city The contact's city
     *  - state The 3-character ISO 3166-2 subdivision code
     *  - zip The zip/postal code for this contact
     *  - country The 2-character ISO 3166-1 country code
     */
    public function getDomainContacts($domain, $module_row_id = null)
    {
        $row = $this->getModuleRow($module_row_id);
        $api = $this->getApi($row->meta->user, $row->meta->key);

        $contactResult = $api->GetContacts($domain);

        return $contactResult['data']['contacts'];
    }

    /**
     * Updates the list of contacts associated with a domain
     *
     * @param string $domain The domain for which to update contact info
     * @param array $vars A list of contact arrays with the following information:
     *
     *  - external_id The ID of the contact in the registrar (optional)
     *  - email The primary email associated with the contact
     *  - phone The phone number associated with the contact
     *  - first_name The first name of the contact
     *  - last_name The last name of the contact
     *  - address1 The contact's address
     *  - address2 The contact's address line two
     *  - city The contact's city
     *  - state The 3-character ISO 3166-2 subdivision code
     *  - zip The zip/postal code for this contact
     *  - country The 2-character ISO 3166-1 country code
     *  - * Other fields required by the registrar
     * @param int $module_row_id The ID of the module row to fetch for the current module
     * @return bool True if the contacts were updated, false otherwise
     */
    public function setDomainContacts($domain, array $vars = [], $module_row_id = null)
    {
        $row = $this->getModuleRow($module_row_id);
        $api = $this->getApi($row->meta->user, $row->meta->key);

        $saveContact =$api->SaveContacts($domain, $vars);

        $this->processResponse($api);

        return $saveContact['status'] == 'OK';
    }

    /**
     * Gets a list of basic information for a domain
     *
     * @param string $domain The domain to lookup
     * @param int $module_row_id The ID of the module row to fetch for the current module
     * @return array A list of common domain information
     *
     *  - * The contents of the return vary depending on the registrar
     */
    public function getDomainInfo($domain, $module_row_id = null)
    {
        $row = $this->getModuleRow($module_row_id);
        $api = $this->getApi($row->meta->user, $row->meta->key);

        $domainInfo = $this->fetchCache('domainInfo_'.$domain, function() use ($api, $domain) {

            return $api->GetDetails($domain);


        });

        return $domainInfo;

    }

    /**
     * Returns whether the domain has a registrar lock
     *
     * @param string $domain The domain to lookup
     * @param int $module_row_id The ID of the module row to fetch for the current module
     * @return bool True if the domain has a registrar lock, false otherwise
     */
    public function getDomainIsLocked($domain, $module_row_id = null)
    {

        $domain = $this->getDomainInfo($domain, $module_row_id);

        return $domain['data']['LockStatus']=='true';
    }

    /**
     * Returns whether the domain has WHOIS privacy enabled
     *
     * @param string $domain The domain to lookup
     * @param int $module_row_id The ID of the module row to fetch for the current module
     * @return bool True if the domain has a registrar lock, false otherwise
     */
    private function getDomainIsPrivate($domain, $module_row_id = null)
    {
        $domain = $this->getDomainInfo($domain, $module_row_id);

        return $domain['data']['PrivacyProtectionStatus']=='true';
    }

    /**
     * Gets a list of name server data associated with a domain
     *
     * @param string $domain The domain to lookup
     * @param int $module_row_id The ID of the module row to fetch for the current module
     * @return array A list of name servers, each with the following fields:
     *
     *  - url The URL of the name server
     *  - ips A list of IPs for the name server
     */
    public function getDomainNameServers($domain, $module_row_id = null)
    {
        $domainInfo = $this->getDomainInfo($domain, $module_row_id);

        $nameservers = [];

        foreach ($domainInfo['data']['NameServers'] as $nameserver) {
            $nameservers[] = [
                'url' => $nameserver ?? '',
                'ips' => []
            ];
        }

        return $nameservers;
    }

    /**
     * Assign new name servers to a domain
     *
     * @param string $domain The domain for which to assign new name servers
     * @param int|null $module_row_id The ID of the module row to fetch for the current module
     * @param array $vars A list of name servers to assign (e.g. [ns1, ns2])
     * @return bool True if the name servers were successfully updated, false otherwise
     */
    public function setDomainNameservers($domain, $module_row_id = null, array $vars = [])
    {
        $row = $this->getModuleRow($module_row_id);
        $api = $this->getApi($row->meta->user, $row->meta->key);


        $nslist = [];
        foreach ($vars as $k => $v) {
            if(strlen($v)==0) continue;
            $nslist['ns'.($k+1)]=$v;
        }

        $nameserverResponse =  $api->ModifyNameServer($domain, $nslist);

        $this->processResponse($api);

        return $nameserverResponse['status'] == 'OK';
    }

    /**
     * Locks the given domain
     *
     * @param string $domain The domain to lookup
     * @param int $module_row_id The ID of the module row to fetch for the current module
     * @return bool True if the domain was successfully locked, false otherwise
     */
    public function lockDomain($domain, $module_row_id = null)
    {
        $row = $this->getModuleRow($module_row_id);
        $api = $this->getApi($row->meta->user, $row->meta->key);

        $response = $api->EnableTheftProtectionLock($domain);
        $this->processResponse($api);

        return $response['result'] == 'OK';
    }

    /**
     * Unlocks the given domain
     *
     * @param string $domain The domain to lookup
     * @param int $module_row_id The ID of the module row to fetch for the current module
     * @return bool True if the domain was successfully unlocked, false otherwise
     */
    public function unlockDomain($domain, $module_row_id = null)
    {
        $row = $this->getModuleRow($module_row_id);
        $api = $this->getApi($row->meta->user, $row->meta->key);


        $response = $api->DisableTheftProtectionLock($domain);
        $this->processResponse($api);

        return $response['result'] == 'OK';
    }

    public function enablePrivacyProtection($domain, $module_row_id = null)
    {
        $row = $this->getModuleRow($module_row_id);
        $api = $this->getApi($row->meta->user, $row->meta->key);

        $response = $api->ModifyPrivacyProtectionStatus($domain,true);
        $this->processResponse($api);

        return $response['result'] == 'OK';
    }
    public function disablePrivacyProtection($domain, $module_row_id = null)
    {
        $row = $this->getModuleRow($module_row_id);
        $api = $this->getApi($row->meta->user, $row->meta->key);

        $response = $api->ModifyPrivacyProtectionStatus($domain,false);
        $this->processResponse($api);

        return $response['result'] == 'OK';
    }



    /**
     * Register a new domain through the registrar
     *
     * @param string $domain The domain to register
     * @param int $module_row_id The ID of the module row to fetch for the current module
     * @param array $vars A list of vars to submit with the registration request
     *
     *  - * The contents of $vars vary depending on the registrar
     * @return bool True if the domain was successfully registered, false otherwise
     */
    public function registerDomain($domain, $module_row_id = null, array $vars = [])
    {
        $row = $this->getModuleRow($module_row_id);
        $api = $this->getApi($row->meta->user, $row->meta->key);

        if($vars['auth_code']){

            $registerResult = $api->Transfer($domain, $vars['auth_code'], $vars['period']);

        }else{

            $registerResult = $api->RegisterWithContactInfo(
                $domain,
                $vars['period'],
                $vars['contacts'],
                $vars['nameservers'],
                true,
                false,
                $vars['addional']??[]
            );

        }



        $this->processResponse($api);

        return $registerResult['result'] == 'OK';
    }

    /**
     * Transfer a domain through the registrar
     *
     * @param string $domain The domain to register
     * @param int $module_row_id The ID of the module row to fetch for the current module
     * @param array $vars A list of vars to submit with the transfer request
     *
     *  - * The contents of $vars vary depending on the registrar
     * @return bool True if the domain was successfully transferred, false otherwise
     */
    public function transferDomain($domain, $module_row_id = null, array $vars = [])
    {
        return $this->registerDomain($domain, $module_row_id, $vars);
    }

    /**
     * Renew a domain through the registrar
     *
     * @param string $domain The domain to renew
     * @param int $module_row_id The ID of the module row to fetch for the current module
     * @param array $vars A list of vars to submit with the renew request
     *
     *  - * The contents of $vars vary depending on the registrar
     * @return bool True if the domain was successfully renewed, false otherwise
     */
    public function renewDomain($domain, $module_row_id = null, array $vars = [])
    {
        $row = $this->getModuleRow($module_row_id);
        $api = $this->getApi($row->meta->user, $row->meta->key);

        $renewResponse = $api->Renew($domain, $vars['year']);

        $this->processResponse($api);

        return $renewResponse['status'] == 'OK';
    }

    /**
     * Gets the domain expiration date
     *
     * @param stdClass $service The service belonging to the domain to lookup
     * @param string $format The format to return the expiration date in
     * @return string The domain expiration date in UTC time in the given format
     * @see Services::get()
     */
    public function getExpirationDate($service, $format = 'Y-m-d H:i:s')
    {
        Loader::loadHelpers($this, ['Date']);

        $domain = $this->getServiceDomain($service);
        $module_row_id = $service->module_row_id ?? null;

        $row = $this->getModuleRow($module_row_id);
        $api = $this->getApi($row->meta->user, $row->meta->key);

        $domainDetail = $api->GetDetails($domain);

        if ($domainDetail['result'] != 'OK') {
            return false;
        }



        return $this->Date->format($domainDetail['data']['Dates']['Expiration']);
    }

    /**
     * Gets the domain name from the given service
     *
     * @param stdClass $service The service from which to extract the domain name
     * @return string The domain name associated with the service
     */
    public function getServiceDomain($service)
    {
        if (isset($service->fields)) {
            foreach ($service->fields as $service_field) {
                if ($service_field->key == 'domain') {
                    return $service_field->value;
                }
            }
        }

        return $this->getServiceName($service);
    }



    /**
     * Builds and returns the rules required to add/edit a module row
     *
     * @param array $vars An array of key/value data pairs
     * @return array An array of Input rules suitable for Input::setRules()
     */
    private function getRowRules(&$vars)
    {
        return [
            'user' => [
                'valid' => [
                    'rule' => 'isEmpty',
                    'negate' => true,
                    'message' => Language::_('Domainnameapi.!error.user.valid', true)
                ]
            ],
            'key' => [
                'valid' => [
                    'last' => true,
                    'rule' => 'isEmpty',
                    'negate' => true,
                    'message' => Language::_('Domainnameapi.!error.key.valid', true)
                ],
                'valid_connection' => [
                    'rule' => [
                        [$this, 'validateConnection'],
                        $vars['user'],
                        $vars['sandbox'] ?? 'false'
                    ],
                    'message' => Language::_('Domainnameapi.!error.key.valid_connection', true)
                ]
            ]
        ];
    }

    /**
     * Validates that the given connection details are correct by attempting to check the availability of a domain
     *
     * @param string $key The API key
     * @param string $user The API user
     * @param string $sandbox "true" if this is a sandbox account, false otherwise
     * @return bool True if the connection details are valid, false otherwise
     */
    public function validateConnection($key, $user, $sandbox)
    {
        $api = $this->getApi($user, $key);

        $resellerdetails = $api->GetResellerDetails();

        return $resellerdetails['result']=='OK';
    }



    /**
     * Get a list of the TLD prices
     *
     * @param int|null $module_row_id The ID of the module row to fetch for the current module
     * @return array A list of all TLDs and their pricing
     *    [tld => [currency => [year# => ['register' => price, 'transfer' => price, 'renew' => price]]]]
     * @throws SoapFault
     */
    public function getTldPricing($module_row_id=null)
    {
        return $this->getFilteredTldPricing($module_row_id);
    }


    public function getFilteredTldPricing($module_row_id=null, $filters = []){
        Loader::loadModels($this, ['Currencies']);

        // Fetch pricing from the registrar
        $row = $this->getModuleRow($module_row_id);
        $api = $this->getApi($row->meta->user, $row->meta->key);

        $all_tlds = $api->GetTldList(900);



        $response = [];

        if ($all_tlds['result'] == 'OK') {
            foreach ($all_tlds['data'] as $k => $v) {
                foreach (range($v['minperiod'], $v['maxperiod']) as $ky => $vy) {
                    $response['.' . $v['tld']]['USD'][$vy]['register'] = number_format($v['pricing']['registration'][1] * $vy,3);
                    $response['.' . $v['tld']]['USD'][$vy]['transfer'] = number_format($v['pricing']['transfer'][1] * $vy,3);
                    $response['.' . $v['tld']]['USD'][$vy]['renew']    = number_format($v['pricing']['renew'][1] * $vy,3);
                }
            }
        }







        return $response;
    }

    /**
     * Get a list of the TLDs supported by the registrar module
     *
     * @param int $module_row_id The ID of the module row to fetch for the current module
     * @return array A list of all TLDs supported by the registrar module
     */
    public function getTlds($module_row_id = null)
    {
        return Configure::get('Domainnameapi.tlds');
    }


    /**
     * Initializes the DomainNameApi and returns an instance of that object
     *
     * @param string $username The user to connect as
     * @param string $key The key to use when connecting
     * @return DomainNameAPI_PHPLibrary The DomainNameApiInstance instance
     * @throws SoapFault
     */
    private function getApi($username, $key)
    {

        if (!class_exists("\DomainNameApi\DomainNameAPI_PHPLibrary")) {
             Loader::load(dirname(__FILE__) . '/' . 'apis' . '/' . 'api.php');
        }

        return new DomainNameAPI_PHPLibrary($username, $key);
    }

    /**
     * Process API response, setting an errors, and logging the request
     *
     * @param DomainNameAPI_PHPLibrary $api The domainnameapi API object
     */
    private function processResponse(DomainNameAPI_PHPLibrary $api)
    {
        $this->logRequest($api);

        $response = $api->getParsedResponseData();

        // Set errors, if any
        if ($response['result'] != 'OK') {
            $errors = $response["error"]["Message"] . " : " . $response["error"]["Details"];
            $this->Input->setErrors(['errors' => [$errors]]);
        }
    }

    /**
     * Logs the API request
     *
     * @param DomainNameAPI_PHPLibrary $api The domainnameapi API object
     */
    private function logRequest(DomainNameAPI_PHPLibrary $api)
    {
        $last_request                        = $api->getRequestData();
        $last_response                       = $api->getResponseData();
        $result_success                      = (is_array($last_response) && is_string(key($last_response)) && $last_response[key($last_response)]["OperationResult"] == "SUCCESS");
        $last_request['request']['Password'] = '******';
        $this->log($api->getServiceUrl() . '|' . $api->getLastFunction(), print_r($last_request, true), 'input', true);
        $this->log($api->getServiceUrl() . '|' . $api->getLastFunction(), print_r($last_response, true), 'output',
            $result_success);
    }

    /**
     * Returns the TLD of the given domain
     *
     * @param string $domain The domain to return the TLD from
     * @return string The TLD of the domain
     */
    private function getTld($domain)
    {
        $tlds = $this->getTlds();

        $domain = strtolower($domain);
        foreach ($tlds as $tld) {
            if (substr($domain, -strlen($tld)) == $tld) {
                return $tld;
            }
        }

        return strstr($domain, '.');
    }

    /**
     * Formats a phone number into +NNN.NNNNNNNNNN
     *
     * @param string $number The phone number
     * @param string $country The ISO 3166-1 alpha2 country code
     * @return string The number in +NNN.NNNNNNNNNN
     */
    private function formatPhone($number, $country)
    {
        if (!isset($this->Contacts)) {
            Loader::loadModels($this, ['Contacts']);
        }

        $number = preg_replace('/[^0-9+]+/', '', $number);

        return trim($this->Contacts->intlNumber($number, $country, '.'));
    }

    /**
     * Checks if a feature is enabled for a given service
     *
     * @param string $feature The name of the feature to check if it's enabled (e.g. id_protection)
     * @param stdClass $service An object representing the service
     * @return bool True if the feature is enabled, false otherwise
     */
    private function featureServiceEnabled($feature, $service)
    {
        // Get service option groups
        foreach ($service->options as $option) {
            if ($option->option_name == $feature) {
                return true;
            }
        }

        return false;
    }

    private function extractTld($domain)
    {
        $parts = explode('.', $domain);
        unset($parts[0]);
        if(count($parts) > 2) {
            unset($parts[1]);
        }
        $tld = implode('.', $parts);
        return $tld;
    }

    private function extractSld($domain)
    {
        $parts = explode('.', $domain);
        $sld = $parts[0];
        return $sld;
    }

    private function fetchCache($key, $callback)
    {
        // Cache anahtarını oluştur
        $cacheKey = Configure::get('Blesta.company_id') . '/' . 'modules' . '/' . 'domainnameapi' . '/' . $key;

        // Cache'den veriyi getir
        $cache = Cache::fetchCache($cacheKey);
        if ($cache) {
            return unserialize(base64_decode($cache));
        }

        // Cache'de veri yoksa, callback fonksiyonunu çağır
        $response = $callback();

        // Caching ayarları açıksa ve cache dizini yazılabilir durumda ise, veriyi cache'e kaydet
        if (Configure::get('Caching.on') && is_writable(CACHEDIR)) {
            try {
                Cache::writeCache($cacheKey, base64_encode(serialize($response)), strtotime(Configure::get('Blesta.cache_length')) - time());
            } catch (Exception $e) {
                // Hata durumunda log'a yaz
                $this->log('error while saving cache: ' . $e->getMessage());
            }
        }

        return $response;
    }
}
