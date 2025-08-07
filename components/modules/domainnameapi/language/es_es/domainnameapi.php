<?php

// Básicos
$lang['Domainnameapi.name']              = 'DomainNameApi';
$lang['Domainnameapi.description']       = 'DomainNameApi es un módulo de registro de dominios que le permite registrar y gestionar nombres de dominio.';
$lang['Domainnameapi.module_row']        = 'Cuenta';
$lang['Domainnameapi.module_row_plural'] = 'Cuentas';

// Gestión del módulo
$lang['Domainnameapi.add_module_row']                     = 'Agregar cuenta';
$lang['Domainnameapi.manage.module_rows_title']           = 'Cuentas';
$lang['Domainnameapi.manage.module_rows_heading.user']    = 'Nombre de usuario API';
$lang['Domainnameapi.manage.module_rows_heading.key']     = 'Contraseña API';
$lang['Domainnameapi.manage.module_rows_heading.options'] = 'Opciones';
$lang['Domainnameapi.manage.module_rows.edit']            = 'Editar';
$lang['Domainnameapi.manage.module_rows.delete']          = 'Eliminar';
$lang['Domainnameapi.manage.module_rows.confirm_delete']  = '¿Está seguro de que desea eliminar esta cuenta?';
$lang['Domainnameapi.manage.module_rows_no_results']      = 'No hay cuentas.';
$lang['Domainnameapi.manage.sandbox_yes']                 = 'Sí';
$lang['Domainnameapi.manage.sandbox_no']                  = 'No';
$lang['Domainnameapi.manage.module_remote_info']          = '* Los elementos marcados con asterisco provienen de DomainNameApi, si aparece "-" significa que la contraseña es incorrecta o no se puede establecer la conexión.';

// Metadatos de fila
$lang['Domainnameapi.row_meta.user'] = 'Nombre de usuario API';
$lang['Domainnameapi.row_meta.key']  = 'Contraseña API';
$lang['Domainnameapi.row_meta.sandbox'] = 'Modo de prueba';
$lang['Domainnameapi.row_meta.sandboxheader'] = 'Modo de prueba / Modo sandbox';
$lang['Domainnameapi.row_meta.sandboxwarning'] = 'Para el modo de prueba, necesita crear un usuario y contraseña desde el entorno de prueba. Puede gestionar extensiones específicas para pruebas ( com , net ,cc , xyz , info ,aero , org , tr , tc , blog, shop ). URL del usuario del entorno de prueba :';
$lang['Domainnameapi.row_meta.userId'] = 'ID de usuario';
$lang['Domainnameapi.row_meta.userName'] = 'Título de usuario';
$lang['Domainnameapi.row_meta.userbalances'] = 'Saldo de usuario';

// Agregar fila
$lang['Domainnameapi.add_row.box_title']   = 'Agregar cuenta Domain Name Api';
$lang['Domainnameapi.add_row.basic_title'] = 'Configuración de autenticación';
$lang['Domainnameapi.add_row.add_btn']     = 'Agregar cuenta';

// Editar fila
$lang['Domainnameapi.edit_row.box_title']   = 'Editar cuenta DomainNameApi';
$lang['Domainnameapi.edit_row.basic_title'] = 'Configuración básica';
$lang['Domainnameapi.edit_row.add_btn']     = 'Actualizar cuenta';

// Campos del paquete
$lang['Domainnameapi.package_fields.type']        = 'Tipo';
$lang['Domainnameapi.package_fields.type_domain'] = 'Registro de dominio';
$lang['Domainnameapi.package_fields.type_ssl']    = 'Certificado SSL';
$lang['Domainnameapi.package_fields.tld_options'] = 'TLDs';
$lang['Domainnameapi.package_fields.ns1']         = 'Servidor de nombres 1';
$lang['Domainnameapi.package_fields.ns2']         = 'Servidor de nombres 2';
$lang['Domainnameapi.package_fields.ns3']         = 'Servidor de nombres 3';
$lang['Domainnameapi.package_fields.ns4']         = 'Servidor de nombres 4';
$lang['Domainnameapi.package_fields.ns5']         = 'Servidor de nombres 5';

// Gestión de servicios
$lang['Domainnameapi.tab_whois.title']                  = 'Whois';
$lang['Domainnameapi.tab_whois.section_Registrant']     = 'Registrante';
$lang['Domainnameapi.tab_whois.section_Administrative'] = 'Administrativo';
$lang['Domainnameapi.tab_whois.section_Technical']      = 'Técnico';
$lang['Domainnameapi.tab_whois.section_Billing']        = 'Facturación';
$lang['Domainnameapi.tab_whois.field_submit']           = 'Actualizar información Whois';

$lang['Domainnameapi.tab_nameservers.title']        = 'Servidores de nombres';
$lang['Domainnameapi.tab_nameserver.field_ns']      = 'Servidor de nombres %1$s'; // %1$s es el número del servidor de nombres
$lang['Domainnameapi.tab_nameservers.field_submit'] = 'Actualizar servidores de nombres';

$lang['Domainnameapi.tab_settings.title']                         = 'Configuración';
$lang['Domainnameapi.tab_settings.field_registrar_lock']          = 'Bloqueo del registrador';
$lang['Domainnameapi.tab_settings.field_registrar_lock_yes']      = 'Establecer el bloqueo del registrador. Recomendado para prevenir transferencias no autorizadas.';
$lang['Domainnameapi.tab_settings.field_registrar_lock_no']       = 'Liberar el bloqueo del registrador para que el dominio pueda ser transferido.';
$lang['Domainnameapi.tab_settings.field_whois_privacy']           = 'Privacidad WHOIS';
$lang['Domainnameapi.tab_settings.field_whois_privacy_state_yes'] = 'Habilitado';
$lang['Domainnameapi.tab_settings.field_whois_privacy_state_no']  = 'Deshabilitado';
$lang['Domainnameapi.tab_settings.field_epp_code']                = 'Código EPP';
$lang['Domainnameapi.tab_settings.field_request_epp']             = 'Solicitar código EPP/Clave de transferencia';
$lang['Domainnameapi.tab_settings.field_submit']                  = 'Actualizar configuración';

// Errores
$lang['Domainnameapi.!error.user.valid']               = 'Por favor, ingrese un nombre de usuario';
$lang['Domainnameapi.!error.key.valid']                = 'Por favor, ingrese una contraseña';
$lang['Domainnameapi.!error.key.valid_connection']     = 'La combinación de nombre de usuario y contraseña parece ser inválida';
$lang['Domainnameapi.!error.registrant_type.format']   = 'Por favor, seleccione un tipo de registrante';
$lang['Domainnameapi.!error.registrant_vat_id.format'] = 'Por favor, ingrese un número de IVA';
$lang['Domainnameapi.!error.siren_siret.format']       = 'Por favor, ingrese un número SIREN/SIRET';
$lang['Domainnameapi.!error.trademark_number.format']  = 'Por favor, ingrese un número de marca comercial';

// Campos de transferencia de dominio
$lang['Domainnameapi.transfer.domain']    = 'Nombre de dominio';
$lang['Domainnameapi.transfer.auth_info'] = 'Código EPP';

// Campos de dominio
$lang['Domainnameapi.domain.domain'] = 'Nombre de dominio';

// Campos de servidor de nombres
$lang['Domainnameapi.nameserver.ns1'] = 'Servidor de nombres 1';
$lang['Domainnameapi.nameserver.ns2'] = 'Servidor de nombres 2';
$lang['Domainnameapi.nameserver.ns3'] = 'Servidor de nombres 3';
$lang['Domainnameapi.nameserver.ns4'] = 'Servidor de nombres 4';

// Campos Whois
$lang['Domainnameapi.whois.registrant.first_name']         = 'Nombre';
$lang['Domainnameapi.whois.registrant.last_name']          = 'Apellido';
$lang['Domainnameapi.whois.registrant.company_name']       = 'Empresa';
$lang['Domainnameapi.whois.registrant.address1']           = 'Dirección 1';
$lang['Domainnameapi.whois.registrant.address2']           = 'Dirección 2';
$lang['Domainnameapi.whois.registrant.city']               = 'Ciudad';
$lang['Domainnameapi.whois.registrant.state']              = 'Estado/Provincia';
$lang['Domainnameapi.whois.registrant.postal_code']        = 'Código postal';
$lang['Domainnameapi.whois.registrant.country']            = 'País';
$lang['Domainnameapi.whois.registrant.phone_country_code'] = 'Código de país del teléfono';
$lang['Domainnameapi.whois.registrant.phone']              = 'Teléfono';
$lang['Domainnameapi.whois.registrant.fax_country_code']   = 'Código de país del fax';
$lang['Domainnameapi.whois.registrant.fax']                = 'Fax';
$lang['Domainnameapi.whois.registrant.email']              = 'Correo electrónico';

$lang['Domainnameapi.whois.technical.first_name']         = 'Nombre';
$lang['Domainnameapi.whois.technical.last_name']          = 'Apellido';
$lang['Domainnameapi.whois.technical.company_name']       = 'Empresa';
$lang['Domainnameapi.whois.technical.address1']           = 'Dirección 1';
$lang['Domainnameapi.whois.technical.address2']           = 'Dirección 2';
$lang['Domainnameapi.whois.technical.city']               = 'Ciudad';
$lang['Domainnameapi.whois.technical.state']              = 'Estado/Provincia';
$lang['Domainnameapi.whois.technical.postal_code']        = 'Código postal';
$lang['Domainnameapi.whois.technical.country']            = 'País';
$lang['Domainnameapi.whois.technical.phone_country_code'] = 'Código de país del teléfono';
$lang['Domainnameapi.whois.technical.phone']              = 'Teléfono';
$lang['Domainnameapi.whois.technical.fax_country_code']   = 'Código de país del fax';
$lang['Domainnameapi.whois.technical.fax']                = 'Fax';
$lang['Domainnameapi.whois.technical.email']              = 'Correo electrónico';

$lang['Domainnameapi.whois.administrative.first_name']         = 'Nombre';
$lang['Domainnameapi.whois.administrative.last_name']          = 'Apellido';
$lang['Domainnameapi.whois.administrative.company_name']       = 'Empresa';
$lang['Domainnameapi.whois.administrative.address1']           = 'Dirección 1';
$lang['Domainnameapi.whois.administrative.address2']           = 'Dirección 2';
$lang['Domainnameapi.whois.administrative.city']               = 'Ciudad';
$lang['Domainnameapi.whois.administrative.state']              = 'Estado/Provincia';
$lang['Domainnameapi.whois.administrative.postal_code']        = 'Código postal';
$lang['Domainnameapi.whois.administrative.country']            = 'País';
$lang['Domainnameapi.whois.administrative.phone_country_code'] = 'Código de país del teléfono';
$lang['Domainnameapi.whois.administrative.phone']              = 'Teléfono';
$lang['Domainnameapi.whois.administrative.fax_country_code']   = 'Código de país del fax';
$lang['Domainnameapi.whois.administrative.fax']                = 'Fax';
$lang['Domainnameapi.whois.administrative.email']              = 'Correo electrónico';

$lang['Domainnameapi.whois.billing.first_name']         = 'Nombre';
$lang['Domainnameapi.whois.billing.last_name']          = 'Apellido';
$lang['Domainnameapi.whois.billing.company_name']       = 'Empresa';
$lang['Domainnameapi.whois.billing.address1']           = 'Dirección 1';
$lang['Domainnameapi.whois.billing.address2']           = 'Dirección 2';
$lang['Domainnameapi.whois.billing.city']               = 'Ciudad';
$lang['Domainnameapi.whois.billing.state']              = 'Estado/Provincia';
$lang['Domainnameapi.whois.billing.postal_code']        = 'Código postal';
$lang['Domainnameapi.whois.billing.country']            = 'País';
$lang['Domainnameapi.whois.billing.phone_country_code'] = 'Código de país del teléfono';
$lang['Domainnameapi.whois.billing.phone']              = 'Teléfono';
$lang['Domainnameapi.whois.billing.fax_country_code']   = 'Código de país del fax';
$lang['Domainnameapi.whois.billing.fax']                = 'Fax';
$lang['Domainnameapi.whois.billing.email']              = 'Correo electrónico';

// Campos de dominio .UK
$lang['Domainnameapi.domain.registrant_type']        = 'Tipo legal';
$lang['Domainnameapi.domain.registrant_type.ind']    = 'Individuo del Reino Unido';
$lang['Domainnameapi.domain.registrant_type.find']   = 'Individuo no del Reino Unido';
$lang['Domainnameapi.domain.registrant_type.ltd']    = 'Sociedad Limitada del Reino Unido';
$lang['Domainnameapi.domain.registrant_type.plc']    = 'Sociedad Anónima del Reino Unido';
$lang['Domainnameapi.domain.registrant_type.ptnr']   = 'Sociedad del Reino Unido';
$lang['Domainnameapi.domain.registrant_type.llp']    = 'Sociedad de Responsabilidad Limitada del Reino Unido';
$lang['Domainnameapi.domain.registrant_type.ip']     = 'Empresa Industrial/Cooperativa Registrada del Reino Unido';
$lang['Domainnameapi.domain.registrant_type.stra']   = 'Comerciante Individual del Reino Unido';
$lang['Domainnameapi.domain.registrant_type.sch']    = 'Escuela del Reino Unido';
$lang['Domainnameapi.domain.registrant_type.rchar']  = 'Organización Benéfica Registrada del Reino Unido';
$lang['Domainnameapi.domain.registrant_type.gov']    = 'Organismo Gubernamental del Reino Unido';
$lang['Domainnameapi.domain.registrant_type.other']  = 'Entidad del Reino Unido (otra)';
$lang['Domainnameapi.domain.registrant_type.crc']    = 'Sociedad del Reino Unido por Carta Real';
$lang['Domainnameapi.domain.registrant_type.fcorp']  = 'Organización Extranjera';
$lang['Domainnameapi.domain.registrant_type.stat']   = 'Organismo Estatutario del Reino Unido FIND';
$lang['Domainnameapi.domain.registrant_type.fother'] = 'Otras Organizaciones Extranjeras';
$lang['Domainnameapi.domain.registration_number']    = 'Número de ID de la empresa';
$lang['Domainnameapi.domain.trading_name']           = 'Nombre del registrante'; 