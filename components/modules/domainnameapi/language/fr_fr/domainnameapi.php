<?php


// Bases
$lang['Domainnameapi.name']              = 'DomainNameApi';
$lang['Domainnameapi.description']       = 'DomainNameApi est un module d\'enregistrement de domaine qui vous permet de gérer et enregistrer des noms de domaine.';
$lang['Domainnameapi.module_row']        = 'Compte';
$lang['Domainnameapi.module_row_plural'] = 'Comptes';

// Gestion du module
$lang['Domainnameapi.add_module_row']                     = 'Ajouter un compte';
$lang['Domainnameapi.manage.module_rows_title']           = 'Comptes';
$lang['Domainnameapi.manage.module_rows_heading.user']    = 'Nom d\'utilisateur API';
$lang['Domainnameapi.manage.module_rows_heading.key']     = 'Mot de passe API';
$lang['Domainnameapi.manage.module_rows_heading.options'] = 'Options';
$lang['Domainnameapi.manage.module_rows.edit']            = 'Modifier';
$lang['Domainnameapi.manage.module_rows.delete']          = 'Supprimer';
$lang['Domainnameapi.manage.module_rows.confirm_delete']  = 'Êtes-vous sûr de vouloir supprimer ce compte ?';
$lang['Domainnameapi.manage.module_rows_no_results']      = 'Aucun compte disponible.';

// Métadonnées de la ligne
$lang['Domainnameapi.row_meta.user'] = 'Nom d\'utilisateur API';
$lang['Domainnameapi.row_meta.key']  = 'Mot de passe API';

// Ajouter une ligne
$lang['Domainnameapi.add_row.box_title']   = 'Ajouter un compte Domain Name Api';
$lang['Domainnameapi.add_row.basic_title'] = 'Paramètres d\'authentification';
$lang['Domainnameapi.add_row.add_btn']     = 'Ajouter un compte';

// Modifier une ligne
$lang['Domainnameapi.edit_row.box_title']   = 'Modifier le compte DomainNameApi';
$lang['Domainnameapi.edit_row.basic_title'] = 'Paramètres de base';
$lang['Domainnameapi.edit_row.add_btn']     = 'Mettre à jour le compte';

// Champs du package
$lang['Domainnameapi.package_fields.type']        = 'Type';
$lang['Domainnameapi.package_fields.type_domain'] = 'Enregistrement de domaine';
$lang['Domainnameapi.package_fields.type_ssl']    = 'Certificat SSL';
$lang['Domainnameapi.package_fields.tld_options'] = 'TLDs';
$lang['Domainnameapi.package_fields.ns1']         = 'Serveur de noms 1';
$lang['Domainnameapi.package_fields.ns2']         = 'Serveur de noms 2';
$lang['Domainnameapi.package_fields.ns3']         = 'Serveur de noms 3';
$lang['Domainnameapi.package_fields.ns4']         = 'Serveur de noms 4';
$lang['Domainnameapi.package_fields.ns5']         = 'Serveur de noms 5';

// Gestion des services
$lang['Domainnameapi.tab_whois.title']                  = 'Whois';
$lang['Domainnameapi.tab_whois.section_Registrant']     = 'Enregistrement';
$lang['Domainnameapi.tab_whois.section_Administrative'] = 'Administratif';
$lang['Domainnameapi.tab_whois.section_Technical']      = 'Technique';
$lang['Domainnameapi.tab_whois.section_Billing']        = 'Facturation';
$lang['Domainnameapi.tab_whois.field_submit']           = 'Mettre à jour les informations Whois';

$lang['Domainnameapi.tab_nameservers.title']        = 'Serveurs de noms';
$lang['Domainnameapi.tab_nameserver.field_ns']      = 'Serveur de noms %1$s'; // %1$s est le numéro du serveur de noms
$lang['Domainnameapi.tab_nameservers.field_submit'] = 'Mettre à jour les serveurs de noms';

$lang['Domainnameapi.tab_settings.title']                         = 'Paramètres';
$lang['Domainnameapi.tab_settings.field_registrar_lock']          = 'Verrouillage du registraire';
$lang['Domainnameapi.tab_settings.field_registrar_lock_yes']      = 'Activer le verrouillage du registraire. Recommandé pour empêcher les transferts non autorisés.';
$lang['Domainnameapi.tab_settings.field_registrar_lock_no']       = 'Désactiver le verrouillage du registraire pour permettre le transfert du domaine.';
$lang['Domainnameapi.tab_settings.field_whois_privacy']           = 'Confidentialité WHOIS';
$lang['Domainnameapi.tab_settings.field_whois_privacy_state_yes'] = 'Activé';
$lang['Domainnameapi.tab_settings.field_whois_privacy_state_no']  = 'Désactivé';
$lang['Domainnameapi.tab_settings.field_epp_code']                = 'Code EPP';
$lang['Domainnameapi.tab_settings.field_request_epp']             = 'Demander le code EPP/Clé de transfert';
$lang['Domainnameapi.tab_settings.field_submit']                  = 'Mettre à jour les paramètres';

// Erreurs
$lang['Domainnameapi.!error.user.valid']               = 'Veuillez entrer un nom d\'utilisateur';
$lang['Domainnameapi.!error.key.valid']                = 'Veuillez entrer un mot de passe';
$lang['Domainnameapi.!error.key.valid_connection']     = 'La combinaison du nom d\'utilisateur et du mot de passe semble être invalide';
$lang['Domainnameapi.!error.registrant_type.format']   = 'Veuillez sélectionner un type d\'enregistrement';
$lang['Domainnameapi.!error.registrant_vat_id.format'] = 'Veuillez entrer un numéro de TVA';
$lang['Domainnameapi.!error.siren_siret.format']       = 'Veuillez entrer un numéro SIREN/SIRET';
$lang['Domainnameapi.!error.trademark_number.format']  = 'Veuillez entrer un numéro de marque';

$lang['Domainnameapi.transfer.domain']    = 'Nom de domaine';
$lang['Domainnameapi.transfer.auth_info'] = 'Code EPP';

// Champs de domaine
$lang['Domainnameapi.domain.domain'] = 'Nom de domaine';

// Champs du serveur de noms
$lang['Domainnameapi.nameserver.ns1'] = 'Serveur de noms 1';
$lang['Domainnameapi.nameserver.ns2'] = 'Serveur de noms 2';
$lang['Domainnameapi.nameserver.ns3'] = 'Serveur de noms 3';
$lang['Domainnameapi.nameserver.ns4'] = 'Serveur de noms 4';

// Champs Whois
$lang['Domainnameapi.whois.registrant.first_name']         = 'Prénom';
$lang['Domainnameapi.whois.registrant.last_name']          = 'Nom de famille';
$lang['Domainnameapi.whois.registrant.company_name']       = 'Société';
$lang['Domainnameapi.whois.registrant.address1']           = 'Adresse 1';
$lang['Domainnameapi.whois.registrant.address2']           = 'Adresse 2';
$lang['Domainnameapi.whois.registrant.city']               = 'Ville';
$lang['Domainnameapi.whois.registrant.state']              = 'État/Province';
$lang['Domainnameapi.whois.registrant.postal_code']        = 'Code postal';
$lang['Domainnameapi.whois.registrant.country']            = 'Pays';
$lang['Domainnameapi.whois.registrant.phone_country_code'] = 'Indicatif téléphonique';
$lang['Domainnameapi.whois.registrant.phone']              = 'Téléphone';
$lang['Domainnameapi.whois.registrant.fax_country_code']   = 'Indicatif du fax';
$lang['Domainnameapi.whois.registrant.fax']                = 'Fax';
$lang['Domainnameapi.whois.registrant.email']              = 'E-mail';

$lang['Domainnameapi.whois.technical.first_name']         = 'Prénom';
$lang['Domainnameapi.whois.technical.last_name']          = 'Nom de famille';
$lang['Domainnameapi.whois.technical.company_name']       = 'Société';
$lang['Domainnameapi.whois.technical.address1']           = 'Adresse 1';
$lang['Domainnameapi.whois.technical.address2']           = 'Adresse 2';
$lang['Domainnameapi.whois.technical.city']               = 'Ville';
$lang['Domainnameapi.whois.technical.state']              = 'État/Province';
$lang['Domainnameapi.whois.technical.postal_code']        = 'Code postal';
$lang['Domainnameapi.whois.technical.country']            = 'Pays';
$lang['Domainnameapi.whois.technical.phone_country_code'] = 'Indicatif téléphonique';
$lang['Domainnameapi.whois.technical.phone']              = 'Téléphone';
$lang['Domainnameapi.whois.technical.fax_country_code']   = 'Indicatif du fax';
$lang['Domainnameapi.whois.technical.fax']                = 'Fax';
$lang['Domainnameapi.whois.technical.email']              = 'E-mail';

$lang['Domainnameapi.whois.administrative.first_name']         = 'Prénom';
$lang['Domainnameapi.whois.administrative.last_name']          = 'Nom de famille';
$lang['Domainnameapi.whois.administrative.company_name']       = 'Société';
$lang['Domainnameapi.whois.administrative.address1']           = 'Adresse 1';
$lang['Domainnameapi.whois.administrative.address2']           = 'Adresse 2';
$lang['Domainnameapi.whois.administrative.city']               = 'Ville';
$lang['Domainnameapi.whois.administrative.state']              = 'État/Province';
$lang['Domainnameapi.whois.administrative.postal_code']        = 'Code postal';
$lang['Domainnameapi.whois.administrative.country']            = 'Pays';
$lang['Domainnameapi.whois.administrative.phone_country_code'] = 'Indicatif téléphonique';
$lang['Domainnameapi.whois.administrative.phone']              = 'Téléphone';
$lang['Domainnameapi.whois.administrative.fax_country_code']   = 'Indicatif du fax';
$lang['Domainnameapi.whois.administrative.fax']                = 'Fax';
$lang['Domainnameapi.whois.administrative.email']              = 'E-mail';

$lang['Domainnameapi.whois.billing.first_name']         = 'Prénom';
$lang['Domainnameapi.whois.billing.last_name']          = 'Nom de famille';
$lang['Domainnameapi.whois.billing.company_name']       = 'Société';
$lang['Domainnameapi.whois.billing.address1']           = 'Adresse 1';
$lang['Domainnameapi.whois.billing.address2']           = 'Adresse 2';
$lang['Domainnameapi.whois.billing.city']               = 'Ville';
$lang['Domainnameapi.whois.billing.state']              = 'État/Province';
$lang['Domainnameapi.whois.billing.postal_code']        = 'Code postal';
$lang['Domainnameapi.whois.billing.country']            = 'Pays';
$lang['Domainnameapi.whois.billing.phone_country_code'] = 'Indicatif téléphonique';
$lang['Domainnameapi.whois.billing.phone']              = 'Téléphone';
$lang['Domainnameapi.whois.billing.fax_country_code']   = 'Indicatif du fax';
$lang['Domainnameapi.whois.billing.fax']                = 'Fax';
$lang['Domainnameapi.whois.billing.email']              = 'E-mail';

// Champs de domaine .UK
$lang['Domainnameapi.domain.registrant_type']        = 'Type juridique';
$lang['Domainnameapi.domain.registrant_type.ind']    = 'Individu du Royaume-Uni';
$lang['Domainnameapi.domain.registrant_type.find']   = 'Individu hors du Royaume-Uni';
$lang['Domainnameapi.domain.registrant_type.ltd']    = 'Société à responsabilité limitée du Royaume-Uni';
$lang['Domainnameapi.domain.registrant_type.plc']    = 'Société anonyme du Royaume-Uni';
$lang['Domainnameapi.domain.registrant_type.ptnr']   = 'Partenariat au Royaume-Uni';
$lang['Domainnameapi.domain.registrant_type.llp']    = 'Partenariat à responsabilité limitée au Royaume-Uni';
$lang['Domainnameapi.domain.registrant_type.ip']     = 'Entreprise industrielle/cooperative enregistrée au Royaume-Uni';
$lang['Domainnameapi.domain.registrant_type.stra']   = 'Commerçant individuel du Royaume-Uni';
$lang['Domainnameapi.domain.registrant_type.sch']    = 'École au Royaume-Uni';
$lang['Domainnameapi.domain.registrant_type.rchar']  = 'Organisation caritative enregistrée au Royaume-Uni';
$lang['Domainnameapi.domain.registrant_type.gov']    = 'Organisme gouvernemental du Royaume-Uni';
$lang['Domainnameapi.domain.registrant_type.other']  = 'Entité au Royaume-Uni (autre)';
$lang['Domainnameapi.domain.registrant_type.crc']    = 'Société britannique par charte royale';
$lang['Domainnameapi.domain.registrant_type.fcorp']  = 'Organisation étrangère';
$lang['Domainnameapi.domain.registrant_type.stat']   = 'Organisme statutaire du Royaume-Uni FIND';
$lang['Domainnameapi.domain.registrant_type.fother'] = 'Autres organisations étrangères';
$lang['Domainnameapi.domain.registration_number']    = 'Numéro d\'identification de l\'entreprise';
$lang['Domainnameapi.domain.trading_name']           = 'Nom du titulaire';

