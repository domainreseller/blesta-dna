<?php
<?php

// Grundlagen
$lang['Domainnameapi.name']              = 'DomainNameApi';
$lang['Domainnameapi.description']       = 'DomainNameApi ist ein Domain-Registrierungsmodul, das es Ihnen ermöglicht, Domainnamen zu registrieren und zu verwalten.';
$lang['Domainnameapi.module_row']        = 'Konto';
$lang['Domainnameapi.module_row_plural'] = 'Konten';

// Modulverwaltung
$lang['Domainnameapi.add_module_row']                     = 'Konto hinzufügen';
$lang['Domainnameapi.manage.module_rows_title']           = 'Konten';
$lang['Domainnameapi.manage.module_rows_heading.user']    = 'API-Benutzername';
$lang['Domainnameapi.manage.module_rows_heading.key']     = 'API-Passwort';
$lang['Domainnameapi.manage.module_rows_heading.options'] = 'Optionen';
$lang['Domainnameapi.manage.module_rows.edit']            = 'Bearbeiten';
$lang['Domainnameapi.manage.module_rows.delete']          = 'Löschen';
$lang['Domainnameapi.manage.module_rows.confirm_delete']  = 'Sind Sie sicher, dass Sie dieses Konto löschen möchten?';
$lang['Domainnameapi.manage.module_rows_no_results']      = 'Es gibt keine Konten.';

// Zeilen-Metadaten
$lang['Domainnameapi.row_meta.user'] = 'API-Benutzername';
$lang['Domainnameapi.row_meta.key']  = 'API-Passwort';

// Zeile hinzufügen
$lang['Domainnameapi.add_row.box_title']   = 'Domain Name Api-Konto hinzufügen';
$lang['Domainnameapi.add_row.basic_title'] = 'Authentifizierungseinstellungen';
$lang['Domainnameapi.add_row.add_btn']     = 'Konto hinzufügen';

// Zeile bearbeiten
$lang['Domainnameapi.edit_row.box_title']   = 'DomainNameApi-Konto bearbeiten';
$lang['Domainnameapi.edit_row.basic_title'] = 'Grundeinstellungen';
$lang['Domainnameapi.edit_row.add_btn']     = 'Konto aktualisieren';

// Paketfelder
$lang['Domainnameapi.package_fields.type']        = 'Typ';
$lang['Domainnameapi.package_fields.type_domain'] = 'Domain-Registrierung';
$lang['Domainnameapi.package_fields.type_ssl']    = 'SSL-Zertifikat';
$lang['Domainnameapi.package_fields.tld_options'] = 'TLDs';
$lang['Domainnameapi.package_fields.ns1']         = 'Nameserver 1';
$lang['Domainnameapi.package_fields.ns2']         = 'Nameserver 2';
$lang['Domainnameapi.package_fields.ns3']         = 'Nameserver 3';
$lang['Domainnameapi.package_fields.ns4']         = 'Nameserver 4';
$lang['Domainnameapi.package_fields.ns5']         = 'Nameserver 5';

// Serviceverwaltung
$lang['Domainnameapi.tab_whois.title']                  = 'Whois';
$lang['Domainnameapi.tab_whois.section_Registrant']     = 'Registrierungsstelle';
$lang['Domainnameapi.tab_whois.section_Administrative'] = 'Administrativ';
$lang['Domainnameapi.tab_whois.section_Technical']      = 'Technisch';
$lang['Domainnameapi.tab_whois.section_Billing']        = 'Abrechnung';
$lang['Domainnameapi.tab_whois.field_submit']           = 'Whois-Informationen aktualisieren';

$lang['Domainnameapi.tab_nameservers.title']        = 'Nameserver';
$lang['Domainnameapi.tab_nameserver.field_ns']      = 'Nameserver %1$s'; // %1$s ist die Nummer des Nameservers
$lang['Domainnameapi.tab_nameservers.field_submit'] = 'Nameserver aktualisieren';

$lang['Domainnameapi.tab_settings.title']                         = 'Einstellungen';
$lang['Domainnameapi.tab_settings.field_registrar_lock']          = 'Registrar-Sperre';
$lang['Domainnameapi.tab_settings.field_registrar_lock_yes']      = 'Registrar-Sperre setzen. Empfohlen, um unbefugte Übertragungen zu verhindern.';
$lang['Domainnameapi.tab_settings.field_registrar_lock_no']       = 'Registrar-Sperre aufheben, damit die Domain übertragen werden kann.';
$lang['Domainnameapi.tab_settings.field_whois_privacy']           = 'WHOIS-Datenschutz';
$lang['Domainnameapi.tab_settings.field_whois_privacy_state_yes'] = 'Aktiviert';
$lang['Domainnameapi.tab_settings.field_whois_privacy_state_no']  = 'Deaktiviert';
$lang['Domainnameapi.tab_settings.field_epp_code']                = 'EPP-Code';
$lang['Domainnameapi.tab_settings.field_request_epp']             = 'EPP-Code/Übertragungsschlüssel anfordern';
$lang['Domainnameapi.tab_settings.field_submit']                  = 'Einstellungen aktualisieren';

// Fehler
$lang['Domainnameapi.!error.user.valid']               = 'Bitte geben Sie einen Benutzernamen ein';
$lang['Domainnameapi.!error.key.valid']                = 'Bitte geben Sie ein Passwort ein';
$lang['Domainnameapi.!error.key.valid_connection']     = 'Die Kombination aus Benutzername und Passwort scheint ungültig zu sein';
$lang['Domainnameapi.!error.registrant_type.format']   = 'Bitte wählen Sie einen Registrantentyp';
$lang['Domainnameapi.!error.registrant_vat_id.format'] = 'Bitte geben Sie eine USt-IdNr. ein';
$lang['Domainnameapi.!error.siren_siret.format']       = 'Bitte geben Sie eine SIREN/SIRET-Nummer ein';
$lang['Domainnameapi.!error.trademark_number.format']  = 'Bitte geben Sie eine Marken-Nummer ein';

// Domain-Transfer-Felder
$lang['Domainnameapi.transfer.domain']    = 'Domain-Name';
$lang['Domainnameapi.transfer.auth_info'] = 'EPP-Code';

// Domain-Felder
$lang['Domainnameapi.domain.domain'] = 'Domain-Name';

// Nameserver-Felder
$lang['Domainnameapi.nameserver.ns1'] = 'Nameserver 1';
$lang['Domainnameapi.nameserver.ns2'] = 'Nameserver 2';
$lang['Domainnameapi.nameserver.ns3'] = 'Nameserver 3';
$lang['Domainnameapi.nameserver.ns4'] = 'Nameserver 4';

// Whois-Felder
$lang['Domainnameapi.whois.registrant.first_name']         = 'Vorname';
$lang['Domainnameapi.whois.registrant.last_name']          = 'Nachname';
$lang['Domainnameapi.whois.registrant.company_name']       = 'Unternehmen';
$lang['Domainnameapi.whois.registrant.address1']           = 'Adresse 1';
$lang['Domainnameapi.whois.registrant.address2']           = 'Adresse 2';
$lang['Domainnameapi.whois.registrant.city']               = 'Stadt';
$lang['Domainnameapi.whois.registrant.state']              = 'Staat/Provinz';
$lang['Domainnameapi.whois.registrant.postal_code']        = 'Postleitzahl';
$lang['Domainnameapi.whois.registrant.country']            = 'Land';
$lang['Domainnameapi.whois.registrant.phone_country_code'] = 'Telefon-Ländervorwahl';
$lang['Domainnameapi.whois.registrant.phone']              = 'Telefon';
$lang['Domainnameapi.whois.registrant.fax_country_code']   = 'Fax-Ländervorwahl';
$lang['Domainnameapi.whois.registrant.fax']                = 'Fax';
$lang['Domainnameapi.whois.registrant.email']              = 'E-Mail';

$lang['Domainnameapi.whois.technical.first_name']         = 'Vorname';
$lang['Domainnameapi.whois.technical.last_name']          = 'Nachname';
$lang['Domainnameapi.whois.technical.company_name']       = 'Unternehmen';
$lang['Domainnameapi.whois.technical.address1']           = 'Adresse 1';
$lang['Domainnameapi.whois.technical.address2']           = 'Adresse 2';
$lang['Domainnameapi.whois.technical.city']               = 'Stadt';
$lang['Domainnameapi.whois.technical.state']              = 'Staat/Provinz';
$lang['Domainnameapi.whois.technical.postal_code']        = 'Postleitzahl';
$lang['Domainnameapi.whois.technical.country']            = 'Land';
$lang['Domainnameapi.whois.technical.phone_country_code'] = 'Telefon-Ländervorwahl';
$lang['Domainnameapi.whois.technical.phone']              = 'Telefon';
$lang['Domainnameapi.whois.technical.fax_country_code']   = 'Fax-Ländervorwahl';
$lang['Domainnameapi.whois.technical.fax']                = 'Fax';
$lang['Domainnameapi.whois.technical.email']              = 'E-Mail';

$lang['Domainnameapi.whois.administrative.first_name']         = 'Vorname';
$lang['Domainnameapi.whois.administrative.last_name']          = 'Nachname';
$lang['Domainnameapi.whois.administrative.company_name']       = 'Unternehmen';
$lang['Domainnameapi.whois.administrative.address1']           = 'Adresse 1';
$lang['Domainnameapi.whois.administrative.address2']           = 'Adresse 2';
$lang['Domainnameapi.whois.administrative.city']               = 'Stadt';
$lang['Domainnameapi.whois.administrative.state']              = 'Staat/Provinz';
$lang['Domainnameapi.whois.administrative.postal_code']        = 'Postleitzahl';
$lang['Domainnameapi.whois.administrative.country']            = 'Land';
$lang['Domainnameapi.whois.administrative.phone_country_code'] = 'Telefon-Ländervorwahl';
$lang['Domainnameapi.whois.administrative.phone']              = 'Telefon';
$lang['Domainnameapi.whois.administrative.fax_country_code']   = 'Fax-Ländervorwahl';
$lang['Domainnameapi.whois.administrative.fax']                = 'Fax';
$lang['Domainnameapi.whois.administrative.email']              = 'E-Mail';

$lang['Domainnameapi.whois.billing.first_name']         = 'Vorname';
$lang['Domainnameapi.whois.billing.last_name']          = 'Nachname';
$lang['Domainnameapi.whois.billing.company_name']       = 'Unternehmen';
$lang['Domainnameapi.whois.billing.address1']           = 'Adresse 1';
$lang['Domainnameapi.whois.billing.address2']           = 'Adresse 2';
$lang['Domainnameapi.whois.billing.city']               = 'Stadt';
$lang['Domainnameapi.whois.billing.state']              = 'Staat/Provinz';
$lang['Domainnameapi.whois.billing.postal_code']        = 'Postleitzahl';
$lang['Domainnameapi.whois.billing.country']            = 'Land';
$lang['Domainnameapi.whois.billing.phone_country_code'] = 'Telefon-Ländervorwahl';
$lang['Domainnameapi.whois.billing.phone']              = 'Telefon';
$lang['Domainnameapi.whois.billing.fax_country_code']   = 'Fax-Ländervorwahl';
$lang['Domainnameapi.whois.billing.fax']                = 'Fax';
$lang['Domainnameapi.whois.billing.email']              = 'E-Mail';

// .UK Domain-Felder
$lang['Domainnameapi.domain.registrant_type']        = 'Rechtstyp';
$lang['Domainnameapi.domain.registrant_type.ind']    = 'Britischer Einzelperson';
$lang['Domainnameapi.domain.registrant_type.find']   = 'Nicht-britischer Einzelperson';
$lang['Domainnameapi.domain.registrant_type.ltd']    = 'Britische Limited Company';
$lang['Domainnameapi.domain.registrant_type.plc']    = 'Britische Aktiengesellschaft';
$lang['Domainnameapi.domain.registrant_type.ptnr']   = 'Britische Partnerschaft';
$lang['Domainnameapi.domain.registrant_type.llp']    = 'Britische Limited Liability Partnerschaft';
$lang['Domainnameapi.domain.registrant_type.ip']     = 'Britische Industrie-/Genossenschaftsunternehmen';
$lang['Domainnameapi.domain.registrant_type.stra']   = 'Britischer Einzelhändler';
$lang['Domainnameapi.domain.registrant_type.sch']    = 'Britische Schule';
$lang['Domainnameapi.domain.registrant_type.rchar']  = 'Britische Wohltätigkeitsorganisation';
$lang['Domainnameapi.domain.registrant_type.gov']    = 'Britische Regierungsbehörde';
$lang['Domainnameapi.domain.registrant_type.other']  = 'Britische Einheit (andere)';
$lang['Domainnameapi.domain.registrant_type.crc']    = 'Britische Körperschaft durch Royal Charter';
$lang['Domainnameapi.domain.registrant_type.fcorp']  = 'Ausländische Organisation';
$lang['Domainnameapi.domain.registrant_type.stat']   = 'Britische Gesetzliche Organisation FIND';
$lang['Domainnameapi.domain.registrant_type.fother'] = 'Andere ausländische Organisationen';
$lang['Domainnameapi.domain.registration_number']    = 'Unternehmens-ID-Nummer';
$lang['Domainnameapi.domain.trading_name']           = 'Registrierungsname';

