<?php

// 基本信息
$lang['Domainnameapi.name']              = 'DomainNameApi';
$lang['Domainnameapi.description']       = 'DomainNameApi是一个域名注册模块，允许您注册和管理域名。';
$lang['Domainnameapi.module_row']        = '帐户';
$lang['Domainnameapi.module_row_plural'] = '帐户';

// 模块管理
$lang['Domainnameapi.add_module_row']                     = '添加帐户';
$lang['Domainnameapi.manage.module_rows_title']           = '帐户';
$lang['Domainnameapi.manage.module_rows_heading.user']    = 'API用户名';
$lang['Domainnameapi.manage.module_rows_heading.key']     = 'API密码';
$lang['Domainnameapi.manage.module_rows_heading.options'] = '选项';
$lang['Domainnameapi.manage.module_rows.edit']            = '编辑';
$lang['Domainnameapi.manage.module_rows.delete']          = '删除';
$lang['Domainnameapi.manage.module_rows.confirm_delete']  = '您确定要删除此帐户吗？';
$lang['Domainnameapi.manage.module_rows_no_results']      = '没有帐户。';
$lang['Domainnameapi.manage.sandbox_yes']                 = '是';
$lang['Domainnameapi.manage.sandbox_no']                  = '否';
$lang['Domainnameapi.manage.module_remote_info']          = '* 标记星号的项目来自DomainNameApi，如果显示"-"表示密码错误或无法建立连接。';

// 行元数据
$lang['Domainnameapi.row_meta.user'] = 'API用户名';
$lang['Domainnameapi.row_meta.key']  = 'API密码';
$lang['Domainnameapi.row_meta.sandbox'] = '测试模式';
$lang['Domainnameapi.row_meta.sandboxheader'] = '测试模式 / 沙盒模式';
$lang['Domainnameapi.row_meta.sandboxwarning'] = '对于测试模式，您需要从测试环境创建用户和密码。您可以管理特定的测试扩展名 ( com , net ,cc , xyz , info ,aero , org , tr , tc , blog, shop )。测试环境用户URL：';
$lang['Domainnameapi.row_meta.userId'] = '用户ID';
$lang['Domainnameapi.row_meta.userName'] = '用户称号';
$lang['Domainnameapi.row_meta.userbalances'] = '用户余额';

// 添加行
$lang['Domainnameapi.add_row.box_title']   = '添加Domain Name Api帐户';
$lang['Domainnameapi.add_row.basic_title'] = '认证设置';
$lang['Domainnameapi.add_row.add_btn']     = '添加帐户';

// 编辑行
$lang['Domainnameapi.edit_row.box_title']   = '编辑DomainNameApi帐户';
$lang['Domainnameapi.edit_row.basic_title'] = '基本设置';
$lang['Domainnameapi.edit_row.add_btn']     = '更新帐户';

// 包字段
$lang['Domainnameapi.package_fields.type']        = '类型';
$lang['Domainnameapi.package_fields.type_domain'] = '域名注册';
$lang['Domainnameapi.package_fields.type_ssl']    = 'SSL证书';
$lang['Domainnameapi.package_fields.tld_options'] = 'TLD';
$lang['Domainnameapi.package_fields.ns1']         = '域名服务器1';
$lang['Domainnameapi.package_fields.ns2']         = '域名服务器2';
$lang['Domainnameapi.package_fields.ns3']         = '域名服务器3';
$lang['Domainnameapi.package_fields.ns4']         = '域名服务器4';
$lang['Domainnameapi.package_fields.ns5']         = '域名服务器5';

// 服务管理
$lang['Domainnameapi.tab_whois.title']                  = 'Whois';
$lang['Domainnameapi.tab_whois.section_Registrant']     = '注册人';
$lang['Domainnameapi.tab_whois.section_Administrative'] = '管理员';
$lang['Domainnameapi.tab_whois.section_Technical']      = '技术';
$lang['Domainnameapi.tab_whois.section_Billing']        = '账单';
$lang['Domainnameapi.tab_whois.field_submit']           = '更新Whois信息';

$lang['Domainnameapi.tab_nameservers.title']        = '域名服务器';
$lang['Domainnameapi.tab_nameserver.field_ns']      = '域名服务器 %1$s'; // %1$s是域名服务器号码
$lang['Domainnameapi.tab_nameservers.field_submit'] = '更新域名服务器';

$lang['Domainnameapi.tab_settings.title']                         = '设置';
$lang['Domainnameapi.tab_settings.field_registrar_lock']          = '注册商锁定';
$lang['Domainnameapi.tab_settings.field_registrar_lock_yes']      = '设置注册商锁定。推荐使用以防止未授权转移。';
$lang['Domainnameapi.tab_settings.field_registrar_lock_no']       = '释放注册商锁定以便域名可以被转移。';
$lang['Domainnameapi.tab_settings.field_whois_privacy']           = 'WHOIS隐私';
$lang['Domainnameapi.tab_settings.field_whois_privacy_state_yes'] = '启用';
$lang['Domainnameapi.tab_settings.field_whois_privacy_state_no']  = '禁用';
$lang['Domainnameapi.tab_settings.field_epp_code']                = 'EPP代码';
$lang['Domainnameapi.tab_settings.field_request_epp']             = '请求EPP代码/转移密钥';
$lang['Domainnameapi.tab_settings.field_submit']                  = '更新设置';

// 错误
$lang['Domainnameapi.!error.user.valid']               = '请输入用户名';
$lang['Domainnameapi.!error.key.valid']                = '请输入密码';
$lang['Domainnameapi.!error.key.valid_connection']     = '用户名和密码组合似乎无效';
$lang['Domainnameapi.!error.registrant_type.format']   = '请选择注册人类型';
$lang['Domainnameapi.!error.registrant_vat_id.format'] = '请输入增值税号';
$lang['Domainnameapi.!error.siren_siret.format']       = '请输入SIREN/SIRET号码';
$lang['Domainnameapi.!error.trademark_number.format']  = '请输入商标号码';

// 域名转移字段
$lang['Domainnameapi.transfer.domain']    = '域名';
$lang['Domainnameapi.transfer.auth_info'] = 'EPP代码';

// 域名字段
$lang['Domainnameapi.domain.domain'] = '域名';

// 域名服务器字段
$lang['Domainnameapi.nameserver.ns1'] = '域名服务器1';
$lang['Domainnameapi.nameserver.ns2'] = '域名服务器2';
$lang['Domainnameapi.nameserver.ns3'] = '域名服务器3';
$lang['Domainnameapi.nameserver.ns4'] = '域名服务器4';

// Whois字段
$lang['Domainnameapi.whois.registrant.first_name']         = '名';
$lang['Domainnameapi.whois.registrant.last_name']          = '姓';
$lang['Domainnameapi.whois.registrant.company_name']       = '公司';
$lang['Domainnameapi.whois.registrant.address1']           = '地址1';
$lang['Domainnameapi.whois.registrant.address2']           = '地址2';
$lang['Domainnameapi.whois.registrant.city']               = '城市';
$lang['Domainnameapi.whois.registrant.state']              = '州/省';
$lang['Domainnameapi.whois.registrant.postal_code']        = '邮政编码';
$lang['Domainnameapi.whois.registrant.country']            = '国家';
$lang['Domainnameapi.whois.registrant.phone_country_code'] = '电话国家代码';
$lang['Domainnameapi.whois.registrant.phone']              = '电话';
$lang['Domainnameapi.whois.registrant.fax_country_code']   = '传真国家代码';
$lang['Domainnameapi.whois.registrant.fax']                = '传真';
$lang['Domainnameapi.whois.registrant.email']              = '电子邮件';

$lang['Domainnameapi.whois.technical.first_name']         = '名';
$lang['Domainnameapi.whois.technical.last_name']          = '姓';
$lang['Domainnameapi.whois.technical.company_name']       = '公司';
$lang['Domainnameapi.whois.technical.address1']           = '地址1';
$lang['Domainnameapi.whois.technical.address2']           = '地址2';
$lang['Domainnameapi.whois.technical.city']               = '城市';
$lang['Domainnameapi.whois.technical.state']              = '州/省';
$lang['Domainnameapi.whois.technical.postal_code']        = '邮政编码';
$lang['Domainnameapi.whois.technical.country']            = '国家';
$lang['Domainnameapi.whois.technical.phone_country_code'] = '电话国家代码';
$lang['Domainnameapi.whois.technical.phone']              = '电话';
$lang['Domainnameapi.whois.technical.fax_country_code']   = '传真国家代码';
$lang['Domainnameapi.whois.technical.fax']                = '传真';
$lang['Domainnameapi.whois.technical.email']              = '电子邮件';

$lang['Domainnameapi.whois.administrative.first_name']         = '名';
$lang['Domainnameapi.whois.administrative.last_name']          = '姓';
$lang['Domainnameapi.whois.administrative.company_name']       = '公司';
$lang['Domainnameapi.whois.administrative.address1']           = '地址1';
$lang['Domainnameapi.whois.administrative.address2']           = '地址2';
$lang['Domainnameapi.whois.administrative.city']               = '城市';
$lang['Domainnameapi.whois.administrative.state']              = '州/省';
$lang['Domainnameapi.whois.administrative.postal_code']        = '邮政编码';
$lang['Domainnameapi.whois.administrative.country']            = '国家';
$lang['Domainnameapi.whois.administrative.phone_country_code'] = '电话国家代码';
$lang['Domainnameapi.whois.administrative.phone']              = '电话';
$lang['Domainnameapi.whois.administrative.fax_country_code']   = '传真国家代码';
$lang['Domainnameapi.whois.administrative.fax']                = '传真';
$lang['Domainnameapi.whois.administrative.email']              = '电子邮件';

$lang['Domainnameapi.whois.billing.first_name']         = '名';
$lang['Domainnameapi.whois.billing.last_name']          = '姓';
$lang['Domainnameapi.whois.billing.company_name']       = '公司';
$lang['Domainnameapi.whois.billing.address1']           = '地址1';
$lang['Domainnameapi.whois.billing.address2']           = '地址2';
$lang['Domainnameapi.whois.billing.city']               = '城市';
$lang['Domainnameapi.whois.billing.state']              = '州/省';
$lang['Domainnameapi.whois.billing.postal_code']        = '邮政编码';
$lang['Domainnameapi.whois.billing.country']            = '国家';
$lang['Domainnameapi.whois.billing.phone_country_code'] = '电话国家代码';
$lang['Domainnameapi.whois.billing.phone']              = '电话';
$lang['Domainnameapi.whois.billing.fax_country_code']   = '传真国家代码';
$lang['Domainnameapi.whois.billing.fax']                = '传真';
$lang['Domainnameapi.whois.billing.email']              = '电子邮件';

// .UK域名字段
$lang['Domainnameapi.domain.registrant_type']        = '法律类型';
$lang['Domainnameapi.domain.registrant_type.ind']    = '英国个人';
$lang['Domainnameapi.domain.registrant_type.find']   = '非英国个人';
$lang['Domainnameapi.domain.registrant_type.ltd']    = '英国有限公司';
$lang['Domainnameapi.domain.registrant_type.plc']    = '英国公共有限公司';
$lang['Domainnameapi.domain.registrant_type.ptnr']   = '英国合伙企业';
$lang['Domainnameapi.domain.registrant_type.llp']    = '英国有限责任合伙企业';
$lang['Domainnameapi.domain.registrant_type.ip']     = '英国工业/合作注册公司';
$lang['Domainnameapi.domain.registrant_type.stra']   = '英国个体商人';
$lang['Domainnameapi.domain.registrant_type.sch']    = '英国学校';
$lang['Domainnameapi.domain.registrant_type.rchar']  = '英国注册慈善机构';
$lang['Domainnameapi.domain.registrant_type.gov']    = '英国政府机构';
$lang['Domainnameapi.domain.registrant_type.other']  = '英国实体（其他）';
$lang['Domainnameapi.domain.registrant_type.crc']    = '英国皇家特许公司';
$lang['Domainnameapi.domain.registrant_type.fcorp']  = '外国组织';
$lang['Domainnameapi.domain.registrant_type.stat']   = '英国法定机构FIND';
$lang['Domainnameapi.domain.registrant_type.fother'] = '其他外国组织';
$lang['Domainnameapi.domain.registration_number']    = '公司ID号码';
$lang['Domainnameapi.domain.trading_name']           = '注册人姓名'; 