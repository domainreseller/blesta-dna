<?php

// Basis
$lang['Domainnameapi.name']              = 'DomainNameApi';
$lang['Domainnameapi.description']       = 'DomainNameApi is een domeinregistratiemodule waarmee u domeinnamen kunt registreren en beheren.';
$lang['Domainnameapi.module_row']        = 'Account';
$lang['Domainnameapi.module_row_plural'] = 'Accounts';

// Modulebeheer
$lang['Domainnameapi.add_module_row']                     = 'Account toevoegen';
$lang['Domainnameapi.manage.module_rows_title']           = 'Accounts';
$lang['Domainnameapi.manage.module_rows_heading.user']    = 'API-gebruikersnaam';
$lang['Domainnameapi.manage.module_rows_heading.key']     = 'API-wachtwoord';
$lang['Domainnameapi.manage.module_rows_heading.options'] = 'Opties';
$lang['Domainnameapi.manage.module_rows.edit']            = 'Bewerken';
$lang['Domainnameapi.manage.module_rows.delete']          = 'Verwijderen';
$lang['Domainnameapi.manage.module_rows.confirm_delete']  = 'Weet u zeker dat u dit account wilt verwijderen?';
$lang['Domainnameapi.manage.module_rows_no_results']      = 'Er zijn geen accounts.';
$lang['Domainnameapi.manage.sandbox_yes']                 = 'Ja';
$lang['Domainnameapi.manage.sandbox_no']                  = 'Nee';
$lang['Domainnameapi.manage.module_remote_info']          = '* Items gemarkeerd met een asterisk komen van DomainNameApi, als "-" verschijnt betekent dit dat het wachtwoord verkeerd is of er geen verbinding kan worden gemaakt.';

// Rijmeta
$lang['Domainnameapi.row_meta.user'] = 'API-gebruikersnaam';
$lang['Domainnameapi.row_meta.key']  = 'API-wachtwoord';
$lang['Domainnameapi.row_meta.sandbox'] = 'Testmodus';
$lang['Domainnameapi.row_meta.sandboxheader'] = 'Testmodus / Sandbox-modus';
$lang['Domainnameapi.row_meta.sandboxwarning'] = 'Voor testmodus moet u een gebruiker en wachtwoord aanmaken vanuit de testomgeving. U kunt specifieke extensies beheren voor testen ( com , net ,cc , xyz , info ,aero , org , tr , tc , blog, shop ). Testomgeving gebruiker URL :';
$lang['Domainnameapi.row_meta.userId'] = 'Gebruiker ID';
$lang['Domainnameapi.row_meta.userName'] = 'Gebruikerstitel';
$lang['Domainnameapi.row_meta.userbalances'] = 'Gebruikerssaldo';

// Rij toevoegen
$lang['Domainnameapi.add_row.box_title']   = 'Domain Name Api-account toevoegen';
$lang['Domainnameapi.add_row.basic_title'] = 'Authenticatie-instellingen';
$lang['Domainnameapi.add_row.add_btn']     = 'Account toevoegen';

// Rij bewerken
$lang['Domainnameapi.edit_row.box_title']   = 'DomainNameApi-account bewerken';
$lang['Domainnameapi.edit_row.basic_title'] = 'Basisinstellingen';
$lang['Domainnameapi.edit_row.add_btn']     = 'Account bijwerken';

// Pakketvelden
$lang['Domainnameapi.package_fields.type']        = 'Type';
$lang['Domainnameapi.package_fields.type_domain'] = 'Domeinregistratie';
$lang['Domainnameapi.package_fields.type_ssl']    = 'SSL-certificaat';
$lang['Domainnameapi.package_fields.tld_options'] = 'TLD\'s';
$lang['Domainnameapi.package_fields.ns1']         = 'Naamserver 1';
$lang['Domainnameapi.package_fields.ns2']         = 'Naamserver 2';
$lang['Domainnameapi.package_fields.ns3']         = 'Naamserver 3';
$lang['Domainnameapi.package_fields.ns4']         = 'Naamserver 4';
$lang['Domainnameapi.package_fields.ns5']         = 'Naamserver 5';

// Dienstenbeheer
$lang['Domainnameapi.tab_whois.title']                  = 'Whois';
$lang['Domainnameapi.tab_whois.section_Registrant']     = 'Registrant';
$lang['Domainnameapi.tab_whois.section_Administrative'] = 'Administratief';
$lang['Domainnameapi.tab_whois.section_Technical']      = 'Technisch';
$lang['Domainnameapi.tab_whois.section_Billing']        = 'Facturering';
$lang['Domainnameapi.tab_whois.field_submit']           = 'Whois-informatie bijwerken';

$lang['Domainnameapi.tab_nameservers.title']        = 'Naamservers';
$lang['Domainnameapi.tab_nameserver.field_ns']      = 'Naamserver %1$s'; // %1$s is het nummer van de naamserver
$lang['Domainnameapi.tab_nameservers.field_submit'] = 'Naamservers bijwerken';

$lang['Domainnameapi.tab_settings.title']                         = 'Instellingen';
$lang['Domainnameapi.tab_settings.field_registrar_lock']          = 'Registrar Lock';
$lang['Domainnameapi.tab_settings.field_registrar_lock_yes']      = 'Registrar Lock instellen. Aanbevolen om ongeoorloofde overdracht te voorkomen.';
$lang['Domainnameapi.tab_settings.field_registrar_lock_no']       = 'Registrar Lock opheffen zodat het domein kan worden overgedragen.';
$lang['Domainnameapi.tab_settings.field_whois_privacy']           = 'WHOIS-privacy';
$lang['Domainnameapi.tab_settings.field_whois_privacy_state_yes'] = 'Ingeschakeld';
$lang['Domainnameapi.tab_settings.field_whois_privacy_state_no']  = 'Uitgeschakeld';
$lang['Domainnameapi.tab_settings.field_epp_code']                = 'EPP-code';
$lang['Domainnameapi.tab_settings.field_request_epp']             = 'EPP-code/overdrachtsleutel aanvragen';
$lang['Domainnameapi.tab_settings.field_submit']                  = 'Instellingen bijwerken';

// Fouten
$lang['Domainnameapi.!error.user.valid']               = 'Voer een gebruikersnaam in';
$lang['Domainnameapi.!error.key.valid']                = 'Voer een wachtwoord in';
$lang['Domainnameapi.!error.key.valid_connection']     = 'De combinatie van gebruikersnaam en wachtwoord lijkt ongeldig te zijn';
$lang['Domainnameapi.!error.registrant_type.format']   = 'Selecteer een registranttype';
$lang['Domainnameapi.!error.registrant_vat_id.format'] = 'Voer een btw-nummer in';
$lang['Domainnameapi.!error.siren_siret.format']       = 'Voer een SIREN/SIRET-nummer in';
$lang['Domainnameapi.!error.trademark_number.format']  = 'Voer een handelsmerknummer in';

// Domeinoverdrachtvelden
$lang['Domainnameapi.transfer.domain']    = 'Domeinnaam';
$lang['Domainnameapi.transfer.auth_info'] = 'EPP-code';

// Domeinvelden
$lang['Domainnameapi.domain.domain'] = 'Domeinnaam';

// Naamservervelden
$lang['Domainnameapi.nameserver.ns1'] = 'Naamserver 1';
$lang['Domainnameapi.nameserver.ns2'] = 'Naamserver 2';
$lang['Domainnameapi.nameserver.ns3'] = 'Naamserver 3';
$lang['Domainnameapi.nameserver.ns4'] = 'Naamserver 4';

// Whois-velden
$lang['Domainnameapi.whois.registrant.first_name']         = 'Voornaam';
$lang['Domainnameapi.whois.registrant.last_name']          = 'Achternaam';
$lang['Domainnameapi.whois.registrant.company_name']       = 'Bedrijf';
$lang['Domainnameapi.whois.registrant.address1']           = 'Adres 1';
$lang['Domainnameapi.whois.registrant.address2']           = 'Adres 2';
$lang['Domainnameapi.whois.registrant.city']               = 'Stad';
$lang['Domainnameapi.whois.registrant.state']              = 'Provincie';
$lang['Domainnameapi.whois.registrant.postal_code']        = 'Postcode';
$lang['Domainnameapi.whois.registrant.country']            = 'Land';
$lang['Domainnameapi.whois.registrant.phone_country_code'] = 'Landcode telefoon';
$lang['Domainnameapi.whois.registrant.phone']              = 'Telefoon';
$lang['Domainnameapi.whois.registrant.fax_country_code']   = 'Landcode fax';
$lang['Domainnameapi.whois.registrant.fax']                = 'Fax';
$lang['Domainnameapi.whois.registrant.email']              = 'E-mail';

$lang['Domainnameapi.whois.technical.first_name']         = 'Voornaam';
$lang['Domainnameapi.whois.technical.last_name']          = 'Achternaam';
$lang['Domainnameapi.whois.technical.company_name']       = 'Bedrijf';
$lang['Domainnameapi.whois.technical.address1']           = 'Adres 1';
$lang['Domainnameapi.whois.technical.address2']           = 'Adres 2';
$lang['Domainnameapi.whois.technical.city']               = 'Stad';
$lang['Domainnameapi.whois.technical.state']              = 'Provincie';
$lang['Domainnameapi.whois.technical.postal_code']        = 'Postcode';
$lang['Domainnameapi.whois.technical.country']            = 'Land';
$lang['Domainnameapi.whois.technical.phone_country_code'] = 'Landcode telefoon';
$lang['Domainnameapi.whois.technical.phone']              = 'Telefoon';
$lang['Domainnameapi.whois.technical.fax_country_code']   = 'Landcode fax';
$lang['Domainnameapi.whois.technical.fax']                = 'Fax';
$lang['Domainnameapi.whois.technical.email']              = 'E-mail';

$lang['Domainnameapi.whois.administrative.first_name']         = 'Voornaam';
$lang['Domainnameapi.whois.administrative.last_name']          = 'Achternaam';
$lang['Domainnameapi.whois.administrative.company_name']       = 'Bedrijf';
$lang['Domainnameapi.whois.administrative.address1']           = 'Adres 1';
$lang['Domainnameapi.whois.administrative.address2']           = 'Adres 2';
$lang['Domainnameapi.whois.administrative.city']               = 'Stad';
$lang['Domainnameapi.whois.administrative.state']              = 'Provincie';
$lang['Domainnameapi.whois.administrative.postal_code']        = 'Postcode';
$lang['Domainnameapi.whois.administrative.country']            = 'Land';
$lang['Domainnameapi.whois.administrative.phone_country_code'] = 'Landcode telefoon';
$lang['Domainnameapi.whois.administrative.phone']              = 'Telefoon';
$lang['Domainnameapi.whois.administrative.fax_country_code']   = 'Landcode fax';
$lang['Domainnameapi.whois.administrative.fax']                = 'Fax';
$lang['Domainnameapi.whois.administrative.email']              = 'E-mail';

$lang['Domainnameapi.whois.billing.first_name']         = 'Voornaam';
$lang['Domainnameapi.whois.billing.last_name']          = 'Achternaam';
$lang['Domainnameapi.whois.billing.company_name']       = 'Bedrijf';
$lang['Domainnameapi.whois.billing.address1']           = 'Adres 1';
$lang['Domainnameapi.whois.billing.address2']           = 'Adres 2';
$lang['Domainnameapi.whois.billing.city']               = 'Stad';
$lang['Domainnameapi.whois.billing.state']              = 'Provincie';
$lang['Domainnameapi.whois.billing.postal_code']        = 'Postcode';
$lang['Domainnameapi.whois.billing.country']            = 'Land';
$lang['Domainnameapi.whois.billing.phone_country_code'] = 'Landcode telefoon';
$lang['Domainnameapi.whois.billing.phone']              = 'Telefoon';
$lang['Domainnameapi.whois.billing.fax_country_code']   = 'Landcode fax';
$lang['Domainnameapi.whois.billing.fax']                = 'Fax';
$lang['Domainnameapi.whois.billing.email']              = 'E-mail';

// .UK domeinvelden
$lang['Domainnameapi.domain.registrant_type']        = 'Juridisch type';
$lang['Domainnameapi.domain.registrant_type.ind']    = 'Verenigd Koninkrijk individu';
$lang['Domainnameapi.domain.registrant_type.find']   = 'Niet-Verenigd Koninkrijk individu';
$lang['Domainnameapi.domain.registrant_type.ltd']    = 'Verenigd Koninkrijk Limited Company';
$lang['Domainnameapi.domain.registrant_type.plc']    = 'Verenigd Koninkrijk Publieke Limited Company';
$lang['Domainnameapi.domain.registrant_type.ptnr']   = 'Verenigd Koninkrijk Partnerschap';
$lang['Domainnameapi.domain.registrant_type.llp']    = 'Verenigd Koninkrijk Limited Liability Partnerschap';
$lang['Domainnameapi.domain.registrant_type.ip']     = 'Verenigd Koninkrijk Industrie/Coöperatieve Vennootschap';
$lang['Domainnameapi.domain.registrant_type.stra']   = 'Verenigd Koninkrijk Zelfstandige';
$lang['Domainnameapi.domain.registrant_type.sch']    = 'Verenigd Koninkrijk School';
$lang['Domainnameapi.domain.registrant_type.rchar']  = 'Verenigd Koninkrijk Geregistreerde Liefdadigheidsinstelling';
$lang['Domainnameapi.domain.registrant_type.gov']    = 'Verenigd Koninkrijk Overheidsinstantie';
$lang['Domainnameapi.domain.registrant_type.other']  = 'Verenigd Koninkrijk Entiteit (anders)';
$lang['Domainnameapi.domain.registrant_type.crc']    = 'Verenigd Koninkrijk Vennootschap bij Koninklijk Charter';
$lang['Domainnameapi.domain.registrant_type.fcorp']  = 'Buitenlandse Organisatie';
$lang['Domainnameapi.domain.registrant_type.stat']   = 'Verenigd Koninkrijk Wettelijke Instantie FIND';
$lang['Domainnameapi.domain.registrant_type.fother'] = 'Andere Buitenlandse Organisaties';
$lang['Domainnameapi.domain.registration_number']    = 'Bedrijfs-ID Nummer';
$lang['Domainnameapi.domain.trading_name']           = 'Naam Registrant';

