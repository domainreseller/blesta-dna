<?php

// Transfer fields
Configure::set('Domainnameapi.transfer_fields', [
    'domain' => [
        'label' => Language::_('Domainnameapi.transfer.domain', true),
        'type' => 'text'
    ],
    'auth_info' => [
        'label' => Language::_('Domainnameapi.transfer.auth_info', true),
        'type' => 'text'
    ]
]);

// Domain fields
Configure::set('Domainnameapi.domain_fields', [
    'domain' => [
        'label' => Language::_('Domainnameapi.domain.domain', true),
        'type' => 'text'
    ],
]);

// Nameserver fields
Configure::set('Domainnameapi.nameserver_fields', [
    'ns1' => [
        'label' => Language::_('Domainnameapi.nameserver.ns1', true),
        'type' => 'text'
    ],
    'ns2' => [
        'label' => Language::_('Domainnameapi.nameserver.ns2', true),
        'type' => 'text'
    ],
    'ns3' => [
        'label' => Language::_('Domainnameapi.nameserver.ns3', true),
        'type' => 'text'
    ],
    'ns4' => [
        'label' => Language::_('Domainnameapi.nameserver.ns4', true),
        'type' => 'text'
    ]
]);

// Whois fields
Configure::set('Domainnameapi.whois_sections', [
    'Administrative',
    'Technical',
    'Registrant',
    'Billing'
]);

// Whois fields
Configure::set('Domainnameapi.whois_fields', [
    'AdministrativeFirstName'        => [
        'label' => Language::_('Domainnameapi.whois.administrative.first_name', true),
        'type'  => 'text'
    ],
    'AdministrativeLastName'         => [
        'label' => Language::_('Domainnameapi.whois.administrative.last_name', true),
        'type'  => 'text'
    ],
    'AdministrativeCompany'          => [
        'label' => Language::_('Domainnameapi.whois.administrative.company_name', true),
        'type'  => 'text'
    ],
    'AdministrativeAddressLine1'     => [
        'label' => Language::_('Domainnameapi.whois.administrative.address1', true),
        'type'  => 'text'
    ],
    'AdministrativeAddressLine2'     => [
        'label' => Language::_('Domainnameapi.whois.administrative.address2', true),
        'type'  => 'text'
    ],
    'AdministrativeCity'             => [
        'label' => Language::_('Domainnameapi.whois.administrative.city', true),
        'type'  => 'text'
    ],
    'AdministrativeState'            => [
        'label' => Language::_('Domainnameapi.whois.administrative.state', true),
        'type'  => 'text'
    ],
    'AdministrativeZipCode'          => [
        'label' => Language::_('Domainnameapi.whois.administrative.postal_code', true),
        'type'  => 'text'
    ],
    'AdministrativeCountry'          => [
        'label' => Language::_('Domainnameapi.whois.administrative.country', true),
        'type'  => 'text'
    ],
    'AdministrativePhoneCountryCode' => [
        'label' => Language::_('Domainnameapi.whois.administrative.phone_country_code', true),
        'type'  => 'text'
    ],
    'AdministrativePhone'            => [
        'label' => Language::_('Domainnameapi.whois.administrative.phone', true),
        'type'  => 'text'
    ],
    'AdministrativeFaxCountryCode'   => [
        'label' => Language::_('Domainnameapi.whois.administrative.fax_country_code', true),
        'type'  => 'text'
    ],
    'AdministrativeFax'              => [
        'label' => Language::_('Domainnameapi.whois.administrative.fax', true),
        'type'  => 'text'
    ],
    'AdministrativeEMail'            => [
        'label' => Language::_('Domainnameapi.whois.administrative.email', true),
        'type'  => 'text'
    ],
    'TechnicalFirstName'             => [
        'label' => Language::_('Domainnameapi.whois.technical.first_name', true),
        'type'  => 'text'
    ],
    'TechnicalLastName'              => [
        'label' => Language::_('Domainnameapi.whois.technical.last_name', true),
        'type'  => 'text'
    ],
    'TechnicalCompany'               => [
        'label' => Language::_('Domainnameapi.whois.technical.company_name', true),
        'type'  => 'text'
    ],
    'TechnicalAddressLine1'          => [
        'label' => Language::_('Domainnameapi.whois.technical.address1', true),
        'type'  => 'text'
    ],
    'TechnicalAddressLine2'          => [
        'label' => Language::_('Domainnameapi.whois.technical.address2', true),
        'type'  => 'text'
    ],
    'TechnicalCity'                  => [
        'label' => Language::_('Domainnameapi.whois.technical.city', true),
        'type'  => 'text'
    ],
    'TechnicalState'                 => [
        'label' => Language::_('Domainnameapi.whois.technical.state', true),
        'type'  => 'text'
    ],
    'TechnicalZipCode'               => [
        'label' => Language::_('Domainnameapi.whois.technical.postal_code', true),
        'type'  => 'text'
    ],
    'TechnicalCountry'               => [
        'label' => Language::_('Domainnameapi.whois.technical.country', true),
        'type'  => 'text'
    ],
    'TechnicalPhoneCountryCode'      => [
        'label' => Language::_('Domainnameapi.whois.technical.phone_country_code', true),
        'type'  => 'text'
    ],
    'TechnicalPhone'                 => [
        'label' => Language::_('Domainnameapi.whois.technical.phone', true),
        'type'  => 'text'
    ],
    'TechnicalFaxCountryCode'        => [
        'label' => Language::_('Domainnameapi.whois.technical.fax_country_code', true),
        'type'  => 'text'
    ],
    'TechnicalFax'                   => [
        'label' => Language::_('Domainnameapi.whois.technical.fax', true),
        'type'  => 'text'
    ],
    'TechnicalEMail'                 => [
        'label' => Language::_('Domainnameapi.whois.technical.email', true),
        'type'  => 'text'
    ],
    'RegistrantFirstName'            => [
        'label' => Language::_('Domainnameapi.whois.registrant.first_name', true),
        'type'  => 'text'
    ],
    'RegistrantLastName'             => [
        'label' => Language::_('Domainnameapi.whois.registrant.last_name', true),
        'type'  => 'text'
    ],
    'RegistrantCompany'              => [
        'label' => Language::_('Domainnameapi.whois.registrant.company_name', true),
        'type'  => 'text'
    ],
    'RegistrantAddressLine1'         => [
        'label' => Language::_('Domainnameapi.whois.registrant.address1', true),
        'type'  => 'text'
    ],
    'RegistrantAddressLine2'         => [
        'label' => Language::_('Domainnameapi.whois.registrant.address2', true),
        'type'  => 'text'
    ],
    'RegistrantCity'                 => [
        'label' => Language::_('Domainnameapi.whois.registrant.city', true),
        'type'  => 'text'
    ],
    'RegistrantState'                => [
        'label' => Language::_('Domainnameapi.whois.registrant.state', true),
        'type'  => 'text'
    ],
    'RegistrantZipCode'              => [
        'label' => Language::_('Domainnameapi.whois.registrant.postal_code', true),
        'type'  => 'text'
    ],
    'RegistrantCountry'              => [
        'label' => Language::_('Domainnameapi.whois.registrant.country', true),
        'type'  => 'text'
    ],
    'RegistrantPhoneCountryCode'     => [
        'label' => Language::_('Domainnameapi.whois.registrant.phone_country_code', true),
        'type'  => 'text'
    ],
    'RegistrantPhone'                => [
        'label' => Language::_('Domainnameapi.whois.registrant.phone', true),
        'type'  => 'text'
    ],
    'RegistrantFaxCountryCode'       => [
        'label' => Language::_('Domainnameapi.whois.registrant.fax_country_code', true),
        'type'  => 'text'
    ],
    'RegistrantFax'                  => [
        'label' => Language::_('Domainnameapi.whois.registrant.fax', true),
        'type'  => 'text'
    ],
    'RegistrantEMail'                => [
        'label' => Language::_('Domainnameapi.whois.registrant.email', true),
        'type'  => 'text'
    ],
    'BillingFirstName'               => [
        'label' => Language::_('Domainnameapi.whois.billing.first_name', true),
        'type'  => 'text'
    ],
    'BillingLastName'                => [
        'label' => Language::_('Domainnameapi.whois.billing.last_name', true),
        'type'  => 'text'
    ],
    'BillingCompany'                 => [
        'label' => Language::_('Domainnameapi.whois.billing.company_name', true),
        'type'  => 'text'
    ],
    'BillingAddressLine1'            => [
        'label' => Language::_('Domainnameapi.whois.billing.address1', true),
        'type'  => 'text'
    ],
    'BillingAddressLine2'            => [
        'label' => Language::_('Domainnameapi.whois.billing.address2', true),
        'type'  => 'text'
    ],
    'BillingCity'                    => [
        'label' => Language::_('Domainnameapi.whois.billing.city', true),
        'type'  => 'text'
    ],
    'BillingState'                   => [
        'label' => Language::_('Domainnameapi.whois.billing.state', true),
        'type'  => 'text'
    ],
    'BillingZipCode'                 => [
        'label' => Language::_('Domainnameapi.whois.billing.postal_code', true),
        'type'  => 'text'
    ],
    'BillingCountry'                 => [
        'label' => Language::_('Domainnameapi.whois.billing.country', true),
        'type'  => 'text'
    ],
    'BillingPhoneCountryCode'        => [
        'label' => Language::_('Domainnameapi.whois.billing.phone_country_code', true),
        'type'  => 'text'
    ],
    'BillingPhone'                   => [
        'label' => Language::_('Domainnameapi.whois.billing.phone', true),
        'type'  => 'text'
    ],
    'BillingFaxCountryCode'          => [
        'label' => Language::_('Domainnameapi.whois.billing.fax_country_code', true),
        'type'  => 'text'
    ],
    'BillingFax'                     => [
        'label' => Language::_('Domainnameapi.whois.billing.fax', true),
        'type'  => 'text'
    ],
    'BillingEMail'                   => [
        'label' => Language::_('Domainnameapi.whois.billing.email', true),
        'type'  => 'text'
    ]
]);


// .TR
Configure::set('Domainnameapi.domain_fields.uk', [
    'registrant_extra_info[registrant_type]' => [
        'label' => Language::_('Domainnameapi.domain.registrant_type', true),
        'type' => 'select',
        'options' => [
            'IND' => Language::_('Domainnameapi.domain.registrant_type.ind', true),
            'FIND' => Language::_('Domainnameapi.domain.registrant_type.find', true),
            'LTD' => Language::_('Domainnameapi.domain.registrant_type.ltd', true),
            'PLC' => Language::_('Domainnameapi.domain.registrant_type.plc', true),
            'PTNR' => Language::_('Domainnameapi.domain.registrant_type.ptnr', true),
            'LLP' => Language::_('Domainnameapi.domain.registrant_type.llp', true),
            'IP' => Language::_('Domainnameapi.domain.registrant_type.ip', true),
            'STRA' => Language::_('Domainnameapi.domain.registrant_type.stra', true),
            'SCH' => Language::_('Domainnameapi.domain.registrant_type.sch', true),
            'RCHAR' => Language::_('Domainnameapi.domain.registrant_type.rchar', true),
            'GOV' => Language::_('Domainnameapi.domain.registrant_type.gov', true),
            'OTHER' => Language::_('Domainnameapi.domain.registrant_type.other', true),
            'CRC' => Language::_('Domainnameapi.domain.registrant_type.crc', true),
            'FCORP' => Language::_('Domainnameapi.domain.registrant_type.fcorp', true),
            'STAT' => Language::_('Domainnameapi.domain.registrant_type.stat', true),
            'FOTHER' => Language::_('Domainnameapi.domain.registrant_type.fother', true)
        ]
    ],
    'registrant_extra_info[registration_number]' => [
        'label' => Language::_('Domainnameapi.domain.registration_number', true),
        'type' => 'text'
    ],
    'registrant_extra_info[trading_name]' => [
        'label' => Language::_('Domainnameapi.domain.trading_name', true),
        'type' => 'text'
    ]
]);


// Email templates
Configure::set('Domainnameapi.email_templates', [
    'en_us' => [
        'lang' => 'en_us',
        'text' => 'Your new domain has been successfully registered!

Domain: {service.domain}

Thank you for your business!',
        'html' => '<p>Your new domain has been successfully registered!</p>
<p>Domain: {service.domain}</p>
<p>Thank you for your business!</p>'
    ]
]);
