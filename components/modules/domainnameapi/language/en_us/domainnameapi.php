<?php

// Basics
$lang['Domainnameapi.name']              = 'DomainNameApi';
$lang['Domainnameapi.description']       = 'DomainNameApi is a domain registration module that allows you to register and manage domain names.';
$lang['Domainnameapi.module_row']        = 'Account';
$lang['Domainnameapi.module_row_plural'] = 'Accounts';


// Module management
$lang['Domainnameapi.add_module_row']                     = 'Add Account';
$lang['Domainnameapi.manage.module_rows_title']           = 'Accounts';
$lang['Domainnameapi.manage.module_rows_heading.user']    = 'Api Username';
$lang['Domainnameapi.manage.module_rows_heading.key']     = 'API Password';
$lang['Domainnameapi.manage.module_rows_heading.options'] = 'Options';
$lang['Domainnameapi.manage.module_rows.edit']            = 'Edit';
$lang['Domainnameapi.manage.module_rows.delete']          = 'Delete';
$lang['Domainnameapi.manage.module_rows.confirm_delete']  = 'Are you sure you want to delete this account?';
$lang['Domainnameapi.manage.module_rows_no_results']      = 'There are no accounts.';
$lang['Domainnameapi.manage.sandbox_yes']                 = 'Yes';
$lang['Domainnameapi.manage.sandbox_no']                  = 'No';
$lang['Domainnameapi.manage.module_remote_info']          = '* Items marked with asterisk come from DomainNameApi, if "-" appears it means the password is wrong or connection cannot be established.';

// Row Meta
$lang['Domainnameapi.row_meta.user'] = 'Api Username';
$lang['Domainnameapi.row_meta.key']  = 'Api Password';
$lang['Domainnameapi.row_meta.sandbox'] = 'Test mode';
$lang['Domainnameapi.row_meta.sandboxheader'] = 'Test mode / Sandbox mode';
$lang['Domainnameapi.row_meta.sandboxwarning'] = 'For test mode, you need to create a user and password from the test environment. You can manage specific extensions for testing ( com , net ,cc , xyz , info ,aero , org , tr , tc , blog, shop ). Test environment user URL :';
$lang['Domainnameapi.row_meta.userId'] = 'User ID';
$lang['Domainnameapi.row_meta.userName'] = 'User Title';
$lang['Domainnameapi.row_meta.userbalances'] = 'User Balance';

// Add row
$lang['Domainnameapi.add_row.box_title']   = 'Add Domain Name Api Account';
$lang['Domainnameapi.add_row.basic_title'] = 'Authentication Settings';
$lang['Domainnameapi.add_row.add_btn']     = 'Add Account';

// Edit row
$lang['Domainnameapi.edit_row.box_title']   = 'Edit DomainNameApi Account';
$lang['Domainnameapi.edit_row.basic_title'] = 'Basic Settings';
$lang['Domainnameapi.edit_row.add_btn']     = 'Update Account';

// Package fields
$lang['Domainnameapi.package_fields.type']        = 'Type';
$lang['Domainnameapi.package_fields.type_domain'] = 'Domain Registration';
$lang['Domainnameapi.package_fields.type_ssl']    = 'SSL Certificate';
$lang['Domainnameapi.package_fields.tld_options'] = 'TLDs';
$lang['Domainnameapi.package_fields.ns1']         = 'Name Server 1';
$lang['Domainnameapi.package_fields.ns2']         = 'Name Server 2';
$lang['Domainnameapi.package_fields.ns3']         = 'Name Server 3';
$lang['Domainnameapi.package_fields.ns4']         = 'Name Server 4';
$lang['Domainnameapi.package_fields.ns5']         = 'Name Server 5';

// Service management
$lang['Domainnameapi.tab_whois.title']                  = 'Whois';
$lang['Domainnameapi.tab_whois.section_Registrant']     = 'Registrant';
$lang['Domainnameapi.tab_whois.section_Administrative'] = 'Administrative';
$lang['Domainnameapi.tab_whois.section_Technical']      = 'Technical';
$lang['Domainnameapi.tab_whois.section_Billing']        = 'Billing';
$lang['Domainnameapi.tab_whois.field_submit']           = 'Update Whois Info';

$lang['Domainnameapi.tab_nameservers.title']        = 'Name Servers';
$lang['Domainnameapi.tab_nameserver.field_ns']      = 'Name Server %1$s'; // %1$s is the name server number
$lang['Domainnameapi.tab_nameservers.field_submit'] = 'Update Name Servers';

$lang['Domainnameapi.tab_settings.title']                         = 'Settings';
$lang['Domainnameapi.tab_settings.field_registrar_lock']          = 'Registrar Lock';
$lang['Domainnameapi.tab_settings.field_registrar_lock_yes']      = 'Set the registrar lock. Recommended to prevent unauthorized transfer.';
$lang['Domainnameapi.tab_settings.field_registrar_lock_no']       = 'Release the registrar lock so the domain can be transferred.';
$lang['Domainnameapi.tab_settings.field_whois_privacy']           = 'WHOIS Privacy';
$lang['Domainnameapi.tab_settings.field_whois_privacy_state_yes'] = 'Enabled';
$lang['Domainnameapi.tab_settings.field_whois_privacy_state_no']  = 'Disabled';
$lang['Domainnameapi.tab_settings.field_epp_code']                = 'EPP Code';
$lang['Domainnameapi.tab_settings.field_request_epp']             = 'Request EPP Code/Transfer Key';
$lang['Domainnameapi.tab_settings.field_submit']                  = 'Update Settings';

// Errors
$lang['Domainnameapi.!error.user.valid']               = 'Please enter a user';
$lang['Domainnameapi.!error.key.valid']                = 'Please enter a key';
$lang['Domainnameapi.!error.key.valid_connection']     = 'The user and password combination appear to be invalid';
$lang['Domainnameapi.!error.registrant_type.format']   = 'Please select a registrant type';
$lang['Domainnameapi.!error.registrant_vat_id.format'] = 'Please enter a VAT ID';
$lang['Domainnameapi.!error.siren_siret.format']       = 'Please enter a SIREN/SIRET Number';
$lang['Domainnameapi.!error.trademark_number.format']  = 'Please enter a Trademark Number';

// Domain Transfer Fields
$lang['Domainnameapi.transfer.domain']    = 'Domain Name';
$lang['Domainnameapi.transfer.auth_info'] = 'EPP Code';

// Domain Fields
$lang['Domainnameapi.domain.domain'] = 'Domain Name';

// Nameserver Fields
$lang['Domainnameapi.nameserver.ns1'] = 'Name Server 1';
$lang['Domainnameapi.nameserver.ns2'] = 'Name Server 2';
$lang['Domainnameapi.nameserver.ns3'] = 'Name Server 3';
$lang['Domainnameapi.nameserver.ns4'] = 'Name Server 4';


// Whois Fields
$lang['Domainnameapi.whois.registrant.first_name']         = 'First Name';
$lang['Domainnameapi.whois.registrant.last_name']          = 'Last Name';
$lang['Domainnameapi.whois.registrant.company_name']       = 'Company';
$lang['Domainnameapi.whois.registrant.address1']           = 'Address 1';
$lang['Domainnameapi.whois.registrant.address2']           = 'Address 2';
$lang['Domainnameapi.whois.registrant.city']               = 'City';
$lang['Domainnameapi.whois.registrant.state']              = 'State/Province';
$lang['Domainnameapi.whois.registrant.postal_code']        = 'Postal Code';
$lang['Domainnameapi.whois.registrant.country']            = 'Country';
$lang['Domainnameapi.whois.registrant.phone_country_code'] = 'Phone Country Code';
$lang['Domainnameapi.whois.registrant.phone']              = 'Phone';
$lang['Domainnameapi.whois.registrant.fax_country_code']   = 'Fax Country Code';
$lang['Domainnameapi.whois.registrant.fax']                = 'Fax';
$lang['Domainnameapi.whois.registrant.email']              = 'Email';

$lang['Domainnameapi.whois.technical.first_name']         = 'First Name';
$lang['Domainnameapi.whois.technical.last_name']          = 'Last Name';
$lang['Domainnameapi.whois.technical.company_name']       = 'Company';
$lang['Domainnameapi.whois.technical.address1']           = 'Address 1';
$lang['Domainnameapi.whois.technical.address2']           = 'Address 2';
$lang['Domainnameapi.whois.technical.city']               = 'City';
$lang['Domainnameapi.whois.technical.state']              = 'State/Province';
$lang['Domainnameapi.whois.technical.postal_code']        = 'Postal Code';
$lang['Domainnameapi.whois.technical.country']            = 'Country';
$lang['Domainnameapi.whois.technical.phone_country_code'] = 'Phone Country Code';
$lang['Domainnameapi.whois.technical.phone']              = 'Phone';
$lang['Domainnameapi.whois.technical.fax_country_code']   = 'Fax Country Code';
$lang['Domainnameapi.whois.technical.fax']                = 'Fax';
$lang['Domainnameapi.whois.technical.email']              = 'Email';

$lang['Domainnameapi.whois.administrative.first_name']         = 'First Name';
$lang['Domainnameapi.whois.administrative.last_name']          = 'Last Name';
$lang['Domainnameapi.whois.administrative.company_name']       = 'Company';
$lang['Domainnameapi.whois.administrative.address1']           = 'Address 1';
$lang['Domainnameapi.whois.administrative.address2']           = 'Address 2';
$lang['Domainnameapi.whois.administrative.city']               = 'City';
$lang['Domainnameapi.whois.administrative.state']              = 'State/Province';
$lang['Domainnameapi.whois.administrative.postal_code']        = 'Postal Code';
$lang['Domainnameapi.whois.administrative.country']            = 'Country';
$lang['Domainnameapi.whois.administrative.phone_country_code'] = 'Phone Country Code';
$lang['Domainnameapi.whois.administrative.phone']              = 'Phone';
$lang['Domainnameapi.whois.administrative.fax_country_code']   = 'Fax Country Code';
$lang['Domainnameapi.whois.administrative.fax']                = 'Fax';
$lang['Domainnameapi.whois.administrative.email']              = 'Email';

$lang['Domainnameapi.whois.billing.first_name']         = 'First Name';
$lang['Domainnameapi.whois.billing.last_name']          = 'Last Name';
$lang['Domainnameapi.whois.billing.company_name']       = 'Company';
$lang['Domainnameapi.whois.billing.address1']           = 'Address 1';
$lang['Domainnameapi.whois.billing.address2']           = 'Address 2';
$lang['Domainnameapi.whois.billing.city']               = 'City';
$lang['Domainnameapi.whois.billing.state']              = 'State/Province';
$lang['Domainnameapi.whois.billing.postal_code']        = 'Postal Code';
$lang['Domainnameapi.whois.billing.country']            = 'Country';
$lang['Domainnameapi.whois.billing.phone_country_code'] = 'Phone Country Code';
$lang['Domainnameapi.whois.billing.phone']              = 'Phone';
$lang['Domainnameapi.whois.billing.fax_country_code']   = 'Fax Country Code';
$lang['Domainnameapi.whois.billing.fax']                = 'Fax';
$lang['Domainnameapi.whois.billing.email']              = 'Email';


// .UK domain fields
$lang['Domainnameapi.domain.registrant_type']        = 'Legal Type';
$lang['Domainnameapi.domain.registrant_type.ind']    = 'UK individual';
$lang['Domainnameapi.domain.registrant_type.find']   = 'Non-UK individual';
$lang['Domainnameapi.domain.registrant_type.ltd']    = 'UK Limited Company';
$lang['Domainnameapi.domain.registrant_type.plc']    = 'UK Public Limited Company';
$lang['Domainnameapi.domain.registrant_type.ptnr']   = 'UK Partnership';
$lang['Domainnameapi.domain.registrant_type.llp']    = 'UK Limited Liability Partnership';
$lang['Domainnameapi.domain.registrant_type.ip']     = 'UK Industrial/Provident Registered Company';
$lang['Domainnameapi.domain.registrant_type.stra']   = 'UK Sole Trader';
$lang['Domainnameapi.domain.registrant_type.sch']    = 'UK School';
$lang['Domainnameapi.domain.registrant_type.rchar']  = 'UK Registered Charity';
$lang['Domainnameapi.domain.registrant_type.gov']    = 'UK Government Body';
$lang['Domainnameapi.domain.registrant_type.other']  = 'UK Entity (other)';
$lang['Domainnameapi.domain.registrant_type.crc']    = 'UK Corporation by Royal Charter';
$lang['Domainnameapi.domain.registrant_type.fcorp']  = 'Foreign Organization';
$lang['Domainnameapi.domain.registrant_type.stat']   = 'UK Statutory Body FIND';
$lang['Domainnameapi.domain.registrant_type.fother'] = 'Other Foreign Organizations';
$lang['Domainnameapi.domain.registration_number']    = 'Company ID Number';
$lang['Domainnameapi.domain.trading_name']           = 'Registrant Name';

