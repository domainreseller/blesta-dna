<?php

// Informações básicas
$lang['Domainnameapi.name']              = 'DomainNameApi';
$lang['Domainnameapi.description']       = 'DomainNameApi é um módulo de registro de domínios que permite registrar e gerenciar nomes de domínio.';
$lang['Domainnameapi.module_row']        = 'Conta';
$lang['Domainnameapi.module_row_plural'] = 'Contas';

// Gerenciamento do módulo
$lang['Domainnameapi.add_module_row']                     = 'Adicionar conta';
$lang['Domainnameapi.manage.module_rows_title']           = 'Contas';
$lang['Domainnameapi.manage.module_rows_heading.user']    = 'Nome de usuário da API';
$lang['Domainnameapi.manage.module_rows_heading.key']     = 'Senha da API';
$lang['Domainnameapi.manage.module_rows_heading.options'] = 'Opções';
$lang['Domainnameapi.manage.module_rows.edit']            = 'Editar';
$lang['Domainnameapi.manage.module_rows.delete']          = 'Excluir';
$lang['Domainnameapi.manage.module_rows.confirm_delete']  = 'Tem certeza de que deseja excluir esta conta?';
$lang['Domainnameapi.manage.module_rows_no_results']      = 'Não há contas.';
$lang['Domainnameapi.manage.sandbox_yes']                 = 'Sim';
$lang['Domainnameapi.manage.sandbox_no']                  = 'Não';
$lang['Domainnameapi.manage.module_remote_info']          = '* Os itens marcados com asterisco vêm do DomainNameApi, se "-" aparecer significa que a senha está incorreta ou a conexão não pode ser estabelecida.';

// Metadados da linha
$lang['Domainnameapi.row_meta.user'] = 'Nome de usuário da API';
$lang['Domainnameapi.row_meta.key']  = 'Senha da API';
$lang['Domainnameapi.row_meta.sandbox'] = 'Modo de teste';
$lang['Domainnameapi.row_meta.sandboxheader'] = 'Modo de teste / Modo sandbox';
$lang['Domainnameapi.row_meta.sandboxwarning'] = 'Para o modo de teste, você precisa criar um usuário e senha do ambiente de teste. Você pode gerenciar extensões específicas para testes ( com , net ,cc , xyz , info ,aero , org , tr , tc , blog, shop ). URL do usuário do ambiente de teste :';
$lang['Domainnameapi.row_meta.userId'] = 'ID do usuário';
$lang['Domainnameapi.row_meta.userName'] = 'Título do usuário';
$lang['Domainnameapi.row_meta.userbalances'] = 'Saldo do usuário';

// Adicionar linha
$lang['Domainnameapi.add_row.box_title']   = 'Adicionar conta Domain Name Api';
$lang['Domainnameapi.add_row.basic_title'] = 'Configurações de autenticação';
$lang['Domainnameapi.add_row.add_btn']     = 'Adicionar conta';

// Editar linha
$lang['Domainnameapi.edit_row.box_title']   = 'Editar conta DomainNameApi';
$lang['Domainnameapi.edit_row.basic_title'] = 'Configurações básicas';
$lang['Domainnameapi.edit_row.add_btn']     = 'Atualizar conta';

// Campos do pacote
$lang['Domainnameapi.package_fields.type']        = 'Tipo';
$lang['Domainnameapi.package_fields.type_domain'] = 'Registro de domínio';
$lang['Domainnameapi.package_fields.type_ssl']    = 'Certificado SSL';
$lang['Domainnameapi.package_fields.tld_options'] = 'TLDs';
$lang['Domainnameapi.package_fields.ns1']         = 'Servidor de nomes 1';
$lang['Domainnameapi.package_fields.ns2']         = 'Servidor de nomes 2';
$lang['Domainnameapi.package_fields.ns3']         = 'Servidor de nomes 3';
$lang['Domainnameapi.package_fields.ns4']         = 'Servidor de nomes 4';
$lang['Domainnameapi.package_fields.ns5']         = 'Servidor de nomes 5';

// Gerenciamento de serviços
$lang['Domainnameapi.tab_whois.title']                  = 'Whois';
$lang['Domainnameapi.tab_whois.section_Registrant']     = 'Registrante';
$lang['Domainnameapi.tab_whois.section_Administrative'] = 'Administrativo';
$lang['Domainnameapi.tab_whois.section_Technical']      = 'Técnico';
$lang['Domainnameapi.tab_whois.section_Billing']        = 'Faturamento';
$lang['Domainnameapi.tab_whois.field_submit']           = 'Atualizar informações Whois';

$lang['Domainnameapi.tab_nameservers.title']        = 'Servidores de nomes';
$lang['Domainnameapi.tab_nameserver.field_ns']      = 'Servidor de nomes %1$s'; // %1$s é o número do servidor de nomes
$lang['Domainnameapi.tab_nameservers.field_submit'] = 'Atualizar servidores de nomes';

$lang['Domainnameapi.tab_settings.title']                         = 'Configurações';
$lang['Domainnameapi.tab_settings.field_registrar_lock']          = 'Bloqueio do registrador';
$lang['Domainnameapi.tab_settings.field_registrar_lock_yes']      = 'Definir bloqueio do registrador. Recomendado para prevenir transferências não autorizadas.';
$lang['Domainnameapi.tab_settings.field_registrar_lock_no']       = 'Remover bloqueio do registrador para permitir transferência do domínio.';
$lang['Domainnameapi.tab_settings.field_whois_privacy']           = 'Privacidade WHOIS';
$lang['Domainnameapi.tab_settings.field_whois_privacy_state_yes'] = 'Habilitado';
$lang['Domainnameapi.tab_settings.field_whois_privacy_state_no']  = 'Desabilitado';
$lang['Domainnameapi.tab_settings.field_epp_code']                = 'Código EPP';
$lang['Domainnameapi.tab_settings.field_request_epp']             = 'Solicitar código EPP/Chave de transferência';
$lang['Domainnameapi.tab_settings.field_submit']                  = 'Atualizar configurações';

// Erros
$lang['Domainnameapi.!error.user.valid']               = 'Por favor, insira um nome de usuário';
$lang['Domainnameapi.!error.key.valid']                = 'Por favor, insira uma senha';
$lang['Domainnameapi.!error.key.valid_connection']     = 'A combinação de nome de usuário e senha parece ser inválida';
$lang['Domainnameapi.!error.registrant_type.format']   = 'Por favor, selecione um tipo de registrante';
$lang['Domainnameapi.!error.registrant_vat_id.format'] = 'Por favor, insira um número de IVA';
$lang['Domainnameapi.!error.siren_siret.format']       = 'Por favor, insira um número SIREN/SIRET';
$lang['Domainnameapi.!error.trademark_number.format']  = 'Por favor, insira um número de marca registrada';

// Campos de transferência de domínio
$lang['Domainnameapi.transfer.domain']    = 'Nome do domínio';
$lang['Domainnameapi.transfer.auth_info'] = 'Código EPP';

// Campos de domínio
$lang['Domainnameapi.domain.domain'] = 'Nome do domínio';

// Campos do servidor de nomes
$lang['Domainnameapi.nameserver.ns1'] = 'Servidor de nomes 1';
$lang['Domainnameapi.nameserver.ns2'] = 'Servidor de nomes 2';
$lang['Domainnameapi.nameserver.ns3'] = 'Servidor de nomes 3';
$lang['Domainnameapi.nameserver.ns4'] = 'Servidor de nomes 4';

// Campos Whois
$lang['Domainnameapi.whois.registrant.first_name']         = 'Nome';
$lang['Domainnameapi.whois.registrant.last_name']          = 'Sobrenome';
$lang['Domainnameapi.whois.registrant.company_name']       = 'Empresa';
$lang['Domainnameapi.whois.registrant.address1']           = 'Endereço 1';
$lang['Domainnameapi.whois.registrant.address2']           = 'Endereço 2';
$lang['Domainnameapi.whois.registrant.city']               = 'Cidade';
$lang['Domainnameapi.whois.registrant.state']              = 'Estado/Província';
$lang['Domainnameapi.whois.registrant.postal_code']        = 'Código postal';
$lang['Domainnameapi.whois.registrant.country']            = 'País';
$lang['Domainnameapi.whois.registrant.phone_country_code'] = 'Código do país do telefone';
$lang['Domainnameapi.whois.registrant.phone']              = 'Telefone';
$lang['Domainnameapi.whois.registrant.fax_country_code']   = 'Código do país do fax';
$lang['Domainnameapi.whois.registrant.fax']                = 'Fax';
$lang['Domainnameapi.whois.registrant.email']              = 'E-mail';

$lang['Domainnameapi.whois.technical.first_name']         = 'Nome';
$lang['Domainnameapi.whois.technical.last_name']          = 'Sobrenome';
$lang['Domainnameapi.whois.technical.company_name']       = 'Empresa';
$lang['Domainnameapi.whois.technical.address1']           = 'Endereço 1';
$lang['Domainnameapi.whois.technical.address2']           = 'Endereço 2';
$lang['Domainnameapi.whois.technical.city']               = 'Cidade';
$lang['Domainnameapi.whois.technical.state']              = 'Estado/Província';
$lang['Domainnameapi.whois.technical.postal_code']        = 'Código postal';
$lang['Domainnameapi.whois.technical.country']            = 'País';
$lang['Domainnameapi.whois.technical.phone_country_code'] = 'Código do país do telefone';
$lang['Domainnameapi.whois.technical.phone']              = 'Telefone';
$lang['Domainnameapi.whois.technical.fax_country_code']   = 'Código do país do fax';
$lang['Domainnameapi.whois.technical.fax']                = 'Fax';
$lang['Domainnameapi.whois.technical.email']              = 'E-mail';

$lang['Domainnameapi.whois.administrative.first_name']         = 'Nome';
$lang['Domainnameapi.whois.administrative.last_name']          = 'Sobrenome';
$lang['Domainnameapi.whois.administrative.company_name']       = 'Empresa';
$lang['Domainnameapi.whois.administrative.address1']           = 'Endereço 1';
$lang['Domainnameapi.whois.administrative.address2']           = 'Endereço 2';
$lang['Domainnameapi.whois.administrative.city']               = 'Cidade';
$lang['Domainnameapi.whois.administrative.state']              = 'Estado/Província';
$lang['Domainnameapi.whois.administrative.postal_code']        = 'Código postal';
$lang['Domainnameapi.whois.administrative.country']            = 'País';
$lang['Domainnameapi.whois.administrative.phone_country_code'] = 'Código do país do telefone';
$lang['Domainnameapi.whois.administrative.phone']              = 'Telefone';
$lang['Domainnameapi.whois.administrative.fax_country_code']   = 'Código do país do fax';
$lang['Domainnameapi.whois.administrative.fax']                = 'Fax';
$lang['Domainnameapi.whois.administrative.email']              = 'E-mail';

$lang['Domainnameapi.whois.billing.first_name']         = 'Nome';
$lang['Domainnameapi.whois.billing.last_name']          = 'Sobrenome';
$lang['Domainnameapi.whois.billing.company_name']       = 'Empresa';
$lang['Domainnameapi.whois.billing.address1']           = 'Endereço 1';
$lang['Domainnameapi.whois.billing.address2']           = 'Endereço 2';
$lang['Domainnameapi.whois.billing.city']               = 'Cidade';
$lang['Domainnameapi.whois.billing.state']              = 'Estado/Província';
$lang['Domainnameapi.whois.billing.postal_code']        = 'Código postal';
$lang['Domainnameapi.whois.billing.country']            = 'País';
$lang['Domainnameapi.whois.billing.phone_country_code'] = 'Código do país do telefone';
$lang['Domainnameapi.whois.billing.phone']              = 'Telefone';
$lang['Domainnameapi.whois.billing.fax_country_code']   = 'Código do país do fax';
$lang['Domainnameapi.whois.billing.fax']                = 'Fax';
$lang['Domainnameapi.whois.billing.email']              = 'E-mail';

// Campos de domínio .UK
$lang['Domainnameapi.domain.registrant_type']        = 'Tipo legal';
$lang['Domainnameapi.domain.registrant_type.ind']    = 'Indivíduo do Reino Unido';
$lang['Domainnameapi.domain.registrant_type.find']   = 'Indivíduo não do Reino Unido';
$lang['Domainnameapi.domain.registrant_type.ltd']    = 'Sociedade Limitada do Reino Unido';
$lang['Domainnameapi.domain.registrant_type.plc']    = 'Sociedade Anônima do Reino Unido';
$lang['Domainnameapi.domain.registrant_type.ptnr']   = 'Parceria do Reino Unido';
$lang['Domainnameapi.domain.registrant_type.llp']    = 'Parceria de Responsabilidade Limitada do Reino Unido';
$lang['Domainnameapi.domain.registrant_type.ip']     = 'Empresa Industrial/Cooperativa Registrada do Reino Unido';
$lang['Domainnameapi.domain.registrant_type.stra']   = 'Comerciante Individual do Reino Unido';
$lang['Domainnameapi.domain.registrant_type.sch']    = 'Escola do Reino Unido';
$lang['Domainnameapi.domain.registrant_type.rchar']  = 'Organização Beneficente Registrada do Reino Unido';
$lang['Domainnameapi.domain.registrant_type.gov']    = 'Órgão Governamental do Reino Unido';
$lang['Domainnameapi.domain.registrant_type.other']  = 'Entidade do Reino Unido (outra)';
$lang['Domainnameapi.domain.registrant_type.crc']    = 'Sociedade do Reino Unido por Carta Real';
$lang['Domainnameapi.domain.registrant_type.fcorp']  = 'Organização Estrangeira';
$lang['Domainnameapi.domain.registrant_type.stat']   = 'Órgão Estatutário do Reino Unido FIND';
$lang['Domainnameapi.domain.registrant_type.fother'] = 'Outras Organizações Estrangeiras';
$lang['Domainnameapi.domain.registration_number']    = 'Número de ID da empresa';
$lang['Domainnameapi.domain.trading_name']           = 'Nome do registrante';
