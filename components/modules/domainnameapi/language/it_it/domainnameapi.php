<?php

// Informazioni di base
$lang['Domainnameapi.name']              = 'DomainNameApi';
$lang['Domainnameapi.description']       = 'DomainNameApi è un modulo di registrazione di domini che ti permette di registrare e gestire nomi di dominio.';
$lang['Domainnameapi.module_row']        = 'Account';
$lang['Domainnameapi.module_row_plural'] = 'Account';

// Gestione del modulo
$lang['Domainnameapi.add_module_row']                     = 'Aggiungi account';
$lang['Domainnameapi.manage.module_rows_title']           = 'Account';
$lang['Domainnameapi.manage.module_rows_heading.user']    = 'Nome utente API';
$lang['Domainnameapi.manage.module_rows_heading.key']     = 'Password API';
$lang['Domainnameapi.manage.module_rows_heading.options'] = 'Opzioni';
$lang['Domainnameapi.manage.module_rows.edit']            = 'Modifica';
$lang['Domainnameapi.manage.module_rows.delete']          = 'Elimina';
$lang['Domainnameapi.manage.module_rows.confirm_delete']  = 'Sei sicuro di voler eliminare questo account?';
$lang['Domainnameapi.manage.module_rows_no_results']      = 'Non ci sono account.';
$lang['Domainnameapi.manage.sandbox_yes']                 = 'Sì';
$lang['Domainnameapi.manage.sandbox_no']                  = 'No';
$lang['Domainnameapi.manage.module_remote_info']          = '* Gli elementi contrassegnati con asterisco provengono da DomainNameApi, se appare "-" significa che la password è errata o non è possibile stabilire la connessione.';

// Metadati della riga
$lang['Domainnameapi.row_meta.user'] = 'Nome utente API';
$lang['Domainnameapi.row_meta.key']  = 'Password API';
$lang['Domainnameapi.row_meta.sandbox'] = 'Modalità test';
$lang['Domainnameapi.row_meta.sandboxheader'] = 'Modalità test / Modalità sandbox';
$lang['Domainnameapi.row_meta.sandboxwarning'] = 'Per la modalità test, devi creare un utente e una password dall\'ambiente di test. Puoi gestire estensioni specifiche per i test ( com , net ,cc , xyz , info ,aero , org , tr , tc , blog, shop ). URL utente ambiente di test :';
$lang['Domainnameapi.row_meta.userId'] = 'ID utente';
$lang['Domainnameapi.row_meta.userName'] = 'Titolo utente';
$lang['Domainnameapi.row_meta.userbalances'] = 'Saldo utente';

// Aggiungi riga
$lang['Domainnameapi.add_row.box_title']   = 'Aggiungi account Domain Name Api';
$lang['Domainnameapi.add_row.basic_title'] = 'Impostazioni di autenticazione';
$lang['Domainnameapi.add_row.add_btn']     = 'Aggiungi account';

// Modifica riga
$lang['Domainnameapi.edit_row.box_title']   = 'Modifica account DomainNameApi';
$lang['Domainnameapi.edit_row.basic_title'] = 'Impostazioni di base';
$lang['Domainnameapi.edit_row.add_btn']     = 'Aggiorna account';

// Campi del pacchetto
$lang['Domainnameapi.package_fields.type']        = 'Tipo';
$lang['Domainnameapi.package_fields.type_domain'] = 'Registrazione dominio';
$lang['Domainnameapi.package_fields.type_ssl']    = 'Certificato SSL';
$lang['Domainnameapi.package_fields.tld_options'] = 'TLD';
$lang['Domainnameapi.package_fields.ns1']         = 'Server dei nomi 1';
$lang['Domainnameapi.package_fields.ns2']         = 'Server dei nomi 2';
$lang['Domainnameapi.package_fields.ns3']         = 'Server dei nomi 3';
$lang['Domainnameapi.package_fields.ns4']         = 'Server dei nomi 4';
$lang['Domainnameapi.package_fields.ns5']         = 'Server dei nomi 5';

// Gestione dei servizi
$lang['Domainnameapi.tab_whois.title']                  = 'Whois';
$lang['Domainnameapi.tab_whois.section_Registrant']     = 'Registrante';
$lang['Domainnameapi.tab_whois.section_Administrative'] = 'Amministrativo';
$lang['Domainnameapi.tab_whois.section_Technical']      = 'Tecnico';
$lang['Domainnameapi.tab_whois.section_Billing']        = 'Fatturazione';
$lang['Domainnameapi.tab_whois.field_submit']           = 'Aggiorna informazioni Whois';

$lang['Domainnameapi.tab_nameservers.title']        = 'Server dei nomi';
$lang['Domainnameapi.tab_nameserver.field_ns']      = 'Server dei nomi %1$s'; // %1$s è il numero del server dei nomi
$lang['Domainnameapi.tab_nameservers.field_submit'] = 'Aggiorna server dei nomi';

$lang['Domainnameapi.tab_settings.title']                         = 'Impostazioni';
$lang['Domainnameapi.tab_settings.field_registrar_lock']          = 'Blocco registrar';
$lang['Domainnameapi.tab_settings.field_registrar_lock_yes']      = 'Imposta il blocco registrar. Consigliato per prevenire trasferimenti non autorizzati.';
$lang['Domainnameapi.tab_settings.field_registrar_lock_no']       = 'Rimuovi il blocco registrar per permettere il trasferimento del dominio.';
$lang['Domainnameapi.tab_settings.field_whois_privacy']           = 'Privacy WHOIS';
$lang['Domainnameapi.tab_settings.field_whois_privacy_state_yes'] = 'Abilitato';
$lang['Domainnameapi.tab_settings.field_whois_privacy_state_no']  = 'Disabilitato';
$lang['Domainnameapi.tab_settings.field_epp_code']                = 'Codice EPP';
$lang['Domainnameapi.tab_settings.field_request_epp']             = 'Richiedi codice EPP/Chiave di trasferimento';
$lang['Domainnameapi.tab_settings.field_submit']                  = 'Aggiorna impostazioni';

// Errori
$lang['Domainnameapi.!error.user.valid']               = 'Inserisci un nome utente';
$lang['Domainnameapi.!error.key.valid']                = 'Inserisci una password';
$lang['Domainnameapi.!error.key.valid_connection']     = 'La combinazione di nome utente e password sembra essere non valida';
$lang['Domainnameapi.!error.registrant_type.format']   = 'Seleziona un tipo di registrante';
$lang['Domainnameapi.!error.registrant_vat_id.format'] = 'Inserisci un numero IVA';
$lang['Domainnameapi.!error.siren_siret.format']       = 'Inserisci un numero SIREN/SIRET';
$lang['Domainnameapi.!error.trademark_number.format']  = 'Inserisci un numero di marchio';

// Campi di trasferimento dominio
$lang['Domainnameapi.transfer.domain']    = 'Nome dominio';
$lang['Domainnameapi.transfer.auth_info'] = 'Codice EPP';

// Campi dominio
$lang['Domainnameapi.domain.domain'] = 'Nome dominio';

// Campi server dei nomi
$lang['Domainnameapi.nameserver.ns1'] = 'Server dei nomi 1';
$lang['Domainnameapi.nameserver.ns2'] = 'Server dei nomi 2';
$lang['Domainnameapi.nameserver.ns3'] = 'Server dei nomi 3';
$lang['Domainnameapi.nameserver.ns4'] = 'Server dei nomi 4';

// Campi Whois
$lang['Domainnameapi.whois.registrant.first_name']         = 'Nome';
$lang['Domainnameapi.whois.registrant.last_name']          = 'Cognome';
$lang['Domainnameapi.whois.registrant.company_name']       = 'Azienda';
$lang['Domainnameapi.whois.registrant.address1']           = 'Indirizzo 1';
$lang['Domainnameapi.whois.registrant.address2']           = 'Indirizzo 2';
$lang['Domainnameapi.whois.registrant.city']               = 'Città';
$lang['Domainnameapi.whois.registrant.state']              = 'Stato/Provincia';
$lang['Domainnameapi.whois.registrant.postal_code']        = 'Codice postale';
$lang['Domainnameapi.whois.registrant.country']            = 'Paese';
$lang['Domainnameapi.whois.registrant.phone_country_code'] = 'Prefisso telefonico';
$lang['Domainnameapi.whois.registrant.phone']              = 'Telefono';
$lang['Domainnameapi.whois.registrant.fax_country_code']   = 'Prefisso fax';
$lang['Domainnameapi.whois.registrant.fax']                = 'Fax';
$lang['Domainnameapi.whois.registrant.email']              = 'Email';

$lang['Domainnameapi.whois.technical.first_name']         = 'Nome';
$lang['Domainnameapi.whois.technical.last_name']          = 'Cognome';
$lang['Domainnameapi.whois.technical.company_name']       = 'Azienda';
$lang['Domainnameapi.whois.technical.address1']           = 'Indirizzo 1';
$lang['Domainnameapi.whois.technical.address2']           = 'Indirizzo 2';
$lang['Domainnameapi.whois.technical.city']               = 'Città';
$lang['Domainnameapi.whois.technical.state']              = 'Stato/Provincia';
$lang['Domainnameapi.whois.technical.postal_code']        = 'Codice postale';
$lang['Domainnameapi.whois.technical.country']            = 'Paese';
$lang['Domainnameapi.whois.technical.phone_country_code'] = 'Prefisso telefonico';
$lang['Domainnameapi.whois.technical.phone']              = 'Telefono';
$lang['Domainnameapi.whois.technical.fax_country_code']   = 'Prefisso fax';
$lang['Domainnameapi.whois.technical.fax']                = 'Fax';
$lang['Domainnameapi.whois.technical.email']              = 'Email';

$lang['Domainnameapi.whois.administrative.first_name']         = 'Nome';
$lang['Domainnameapi.whois.administrative.last_name']          = 'Cognome';
$lang['Domainnameapi.whois.administrative.company_name']       = 'Azienda';
$lang['Domainnameapi.whois.administrative.address1']           = 'Indirizzo 1';
$lang['Domainnameapi.whois.administrative.address2']           = 'Indirizzo 2';
$lang['Domainnameapi.whois.administrative.city']               = 'Città';
$lang['Domainnameapi.whois.administrative.state']              = 'Stato/Provincia';
$lang['Domainnameapi.whois.administrative.postal_code']        = 'Codice postale';
$lang['Domainnameapi.whois.administrative.country']            = 'Paese';
$lang['Domainnameapi.whois.administrative.phone_country_code'] = 'Prefisso telefonico';
$lang['Domainnameapi.whois.administrative.phone']              = 'Telefono';
$lang['Domainnameapi.whois.administrative.fax_country_code']   = 'Prefisso fax';
$lang['Domainnameapi.whois.administrative.fax']                = 'Fax';
$lang['Domainnameapi.whois.administrative.email']              = 'Email';

$lang['Domainnameapi.whois.billing.first_name']         = 'Nome';
$lang['Domainnameapi.whois.billing.last_name']          = 'Cognome';
$lang['Domainnameapi.whois.billing.company_name']       = 'Azienda';
$lang['Domainnameapi.whois.billing.address1']           = 'Indirizzo 1';
$lang['Domainnameapi.whois.billing.address2']           = 'Indirizzo 2';
$lang['Domainnameapi.whois.billing.city']               = 'Città';
$lang['Domainnameapi.whois.billing.state']              = 'Stato/Provincia';
$lang['Domainnameapi.whois.billing.postal_code']        = 'Codice postale';
$lang['Domainnameapi.whois.billing.country']            = 'Paese';
$lang['Domainnameapi.whois.billing.phone_country_code'] = 'Prefisso telefonico';
$lang['Domainnameapi.whois.billing.phone']              = 'Telefono';
$lang['Domainnameapi.whois.billing.fax_country_code']   = 'Prefisso fax';
$lang['Domainnameapi.whois.billing.fax']                = 'Fax';
$lang['Domainnameapi.whois.billing.email']              = 'Email';

// Campi dominio .UK
$lang['Domainnameapi.domain.registrant_type']        = 'Tipo legale';
$lang['Domainnameapi.domain.registrant_type.ind']    = 'Individuo del Regno Unito';
$lang['Domainnameapi.domain.registrant_type.find']   = 'Individuo non del Regno Unito';
$lang['Domainnameapi.domain.registrant_type.ltd']    = 'Società a responsabilità limitata del Regno Unito';
$lang['Domainnameapi.domain.registrant_type.plc']    = 'Società per azioni del Regno Unito';
$lang['Domainnameapi.domain.registrant_type.ptnr']   = 'Partnership del Regno Unito';
$lang['Domainnameapi.domain.registrant_type.llp']    = 'Partnership a responsabilità limitata del Regno Unito';
$lang['Domainnameapi.domain.registrant_type.ip']     = 'Società industriale/cooperativa registrata del Regno Unito';
$lang['Domainnameapi.domain.registrant_type.stra']   = 'Commerciante individuale del Regno Unito';
$lang['Domainnameapi.domain.registrant_type.sch']    = 'Scuola del Regno Unito';
$lang['Domainnameapi.domain.registrant_type.rchar']  = 'Organizzazione benefica registrata del Regno Unito';
$lang['Domainnameapi.domain.registrant_type.gov']    = 'Organismo governativo del Regno Unito';
$lang['Domainnameapi.domain.registrant_type.other']  = 'Entità del Regno Unito (altra)';
$lang['Domainnameapi.domain.registrant_type.crc']    = 'Società del Regno Unito per Carta Reale';
$lang['Domainnameapi.domain.registrant_type.fcorp']  = 'Organizzazione straniera';
$lang['Domainnameapi.domain.registrant_type.stat']   = 'Organismo statutario del Regno Unito FIND';
$lang['Domainnameapi.domain.registrant_type.fother'] = 'Altre organizzazioni straniere';
$lang['Domainnameapi.domain.registration_number']    = 'Numero ID azienda';
$lang['Domainnameapi.domain.trading_name']           = 'Nome del registrante';
