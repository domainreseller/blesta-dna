<?php

// الأساسيات
$lang['Domainnameapi.name']              = 'DomainNameApi';
$lang['Domainnameapi.description']       = 'DomainNameApi هو وحدة تسجيل النطاقات التي تتيح لك تسجيل وإدارة أسماء النطاقات.';
$lang['Domainnameapi.module_row']        = 'حساب';
$lang['Domainnameapi.module_row_plural'] = 'حسابات';

// إدارة الوحدة
$lang['Domainnameapi.add_module_row']                     = 'إضافة حساب';
$lang['Domainnameapi.manage.module_rows_title']           = 'الحسابات';
$lang['Domainnameapi.manage.module_rows_heading.user']    = 'اسم المستخدم لـ API';
$lang['Domainnameapi.manage.module_rows_heading.key']     = 'كلمة مرور API';
$lang['Domainnameapi.manage.module_rows_heading.options'] = 'الخيارات';
$lang['Domainnameapi.manage.module_rows.edit']            = 'تحرير';
$lang['Domainnameapi.manage.module_rows.delete']          = 'حذف';
$lang['Domainnameapi.manage.module_rows.confirm_delete']  = 'هل أنت متأكد من أنك تريد حذف هذا الحساب؟';
$lang['Domainnameapi.manage.module_rows_no_results']      = 'لا توجد حسابات.';

// بيانات الصف
$lang['Domainnameapi.row_meta.user'] = 'اسم المستخدم لـ API';
$lang['Domainnameapi.row_meta.key']  = 'كلمة مرور API';

// إضافة صف
$lang['Domainnameapi.add_row.box_title']   = 'إضافة حساب Domain Name Api';
$lang['Domainnameapi.add_row.basic_title'] = 'إعدادات التحقق';
$lang['Domainnameapi.add_row.add_btn']     = 'إضافة حساب';

// تحرير الصف
$lang['Domainnameapi.edit_row.box_title']   = 'تحرير حساب DomainNameApi';
$lang['Domainnameapi.edit_row.basic_title'] = 'الإعدادات الأساسية';
$lang['Domainnameapi.edit_row.add_btn']     = 'تحديث الحساب';

// حقول الحزمة
$lang['Domainnameapi.package_fields.type']        = 'النوع';
$lang['Domainnameapi.package_fields.type_domain'] = 'تسجيل النطاق';
$lang['Domainnameapi.package_fields.type_ssl']    = 'شهادة SSL';
$lang['Domainnameapi.package_fields.tld_options'] = 'النطاقات العليا (TLDs)';
$lang['Domainnameapi.package_fields.ns1']         = 'الخادم 1';
$lang['Domainnameapi.package_fields.ns2']         = 'الخادم 2';
$lang['Domainnameapi.package_fields.ns3']         = 'الخادم 3';
$lang['Domainnameapi.package_fields.ns4']         = 'الخادم 4';
$lang['Domainnameapi.package_fields.ns5']         = 'الخادم 5';

// إدارة الخدمة
$lang['Domainnameapi.tab_whois.title']                  = 'Whois';
$lang['Domainnameapi.tab_whois.section_Registrant']     = 'المسجل';
$lang['Domainnameapi.tab_whois.section_Administrative'] = 'الإداري';
$lang['Domainnameapi.tab_whois.section_Technical']      = 'التقني';
$lang['Domainnameapi.tab_whois.section_Billing']        = 'الفوترة';
$lang['Domainnameapi.tab_whois.field_submit']           = 'تحديث معلومات Whois';

$lang['Domainnameapi.tab_nameservers.title']        = 'خوادم الأسماء';
$lang['Domainnameapi.tab_nameserver.field_ns']      = 'الخادم %1$s'; // %1$s هو رقم الخادم
$lang['Domainnameapi.tab_nameservers.field_submit'] = 'تحديث خوادم الأسماء';

$lang['Domainnameapi.tab_settings.title']                         = 'الإعدادات';
$lang['Domainnameapi.tab_settings.field_registrar_lock']          = 'قفل المسجل';
$lang['Domainnameapi.tab_settings.field_registrar_lock_yes']      = 'تفعيل قفل المسجل. يُوصى به لمنع النقل غير المصرح به.';
$lang['Domainnameapi.tab_settings.field_registrar_lock_no']       = 'إلغاء قفل المسجل للسماح بنقل النطاق.';
$lang['Domainnameapi.tab_settings.field_whois_privacy']           = 'خصوصية Whois';
$lang['Domainnameapi.tab_settings.field_whois_privacy_state_yes'] = 'ممكّن';
$lang['Domainnameapi.tab_settings.field_whois_privacy_state_no']  = 'معطّل';
$lang['Domainnameapi.tab_settings.field_epp_code']                = 'كود EPP';
$lang['Domainnameapi.tab_settings.field_request_epp']             = 'طلب كود EPP / مفتاح النقل';
$lang['Domainnameapi.tab_settings.field_submit']                  = 'تحديث الإعدادات';

// الأخطاء
$lang['Domainnameapi.!error.user.valid']               = 'يرجى إدخال اسم مستخدم';
$lang['Domainnameapi.!error.key.valid']                = 'يرجى إدخال كلمة مرور';
$lang['Domainnameapi.!error.key.valid_connection']     = 'يبدو أن مزيج اسم المستخدم وكلمة المرور غير صالح';
$lang['Domainnameapi.!error.registrant_type.format']   = 'يرجى اختيار نوع المسجل';
$lang['Domainnameapi.!error.registrant_vat_id.format'] = 'يرجى إدخال رقم تعريف ضريبة القيمة المضافة (VAT ID)';
$lang['Domainnameapi.!error.siren_siret.format']       = 'يرجى إدخال رقم SIREN/SIRET';
$lang['Domainnameapi.!error.trademark_number.format']  = 'يرجى إدخال رقم العلامة التجارية';

// حقول نقل النطاق
$lang['Domainnameapi.transfer.domain']    = 'اسم النطاق';
$lang['Domainnameapi.transfer.auth_info'] = 'كود EPP';

// حقول النطاق
$lang['Domainnameapi.domain.domain'] = 'اسم النطاق';

// حقول خادم الأسماء
$lang['Domainnameapi.nameserver.ns1'] = 'الخادم 1';
$lang['Domainnameapi.nameserver.ns2'] = 'الخادم 2';
$lang['Domainnameapi.nameserver.ns3'] = 'الخادم 3';
$lang['Domainnameapi.nameserver.ns4'] = 'الخادم 4';

// حقول Whois
$lang['Domainnameapi.whois.registrant.first_name']         = 'الاسم الأول';
$lang['Domainnameapi.whois.registrant.last_name']          = 'اسم العائلة';
$lang['Domainnameapi.whois.registrant.company_name']       = 'الشركة';
$lang['Domainnameapi.whois.registrant.address1']           = 'العنوان 1';
$lang['Domainnameapi.whois.registrant.address2']           = 'العنوان 2';
$lang['Domainnameapi.whois.registrant.city']               = 'المدينة';
$lang['Domainnameapi.whois.registrant.state']              = 'الولاية/المقاطعة';
$lang['Domainnameapi.whois.registrant.postal_code']        = 'الرمز البريدي';
$lang['Domainnameapi.whois.registrant.country']            = 'البلد';
$lang['Domainnameapi.whois.registrant.phone_country_code'] = 'كود الدولة للهاتف';
$lang['Domainnameapi.whois.registrant.phone']              = 'الهاتف';
$lang['Domainnameapi.whois.registrant.fax_country_code']   = 'كود الدولة للفكس';
$lang['Domainnameapi.whois.registrant.fax']                = 'الفاكس';
$lang['Domainnameapi.whois.registrant.email']              = 'البريد الإلكتروني';

$lang['Domainnameapi.whois.technical.first_name']         = 'الاسم الأول';
$lang['Domainnameapi.whois.technical.last_name']          = 'اسم العائلة';
$lang['Domainnameapi.whois.technical.company_name']       = 'الشركة';
$lang['Domainnameapi.whois.technical.address1']           = 'العنوان 1';
$lang['Domainnameapi.whois.technical.address2']           = 'العنوان 2';
$lang['Domainnameapi.whois.technical.city']               = 'المدينة';
$lang['Domainnameapi.whois.technical.state']              = 'الولاية/المقاطعة';
$lang['Domainnameapi.whois.technical.postal_code']        = 'الرمز البريدي';
$lang['Domainnameapi.whois.technical.country']            = 'البلد';
$lang['Domainnameapi.whois.technical.phone_country_code'] = 'كود الدولة للهاتف';
$lang['Domainnameapi.whois.technical.phone']              = 'الهاتف';
$lang['Domainnameapi.whois.technical.fax_country_code']   = 'كود الدولة للفكس';
$lang['Domainnameapi.whois.technical.fax']                = 'الفاكس';
$lang['Domainnameapi.whois.technical.email']              = 'البريد الإلكتروني';

$lang['Domainnameapi.whois.administrative.first_name']         = 'الاسم الأول';
$lang['Domainnameapi.whois.administrative.last_name']          = 'اسم العائلة';
$lang['Domainnameapi.whois.administrative.company_name']       = 'الشركة';
$lang['Domainnameapi.whois.administrative.address1']           = 'العنوان 1';
$lang['Domainnameapi.whois.administrative.address2']           = 'العنوان 2';
$lang['Domainnameapi.whois.administrative.city']               = 'المدينة';
$lang['Domainnameapi.whois.administrative.state']              = 'الولاية/المقاطعة';
$lang['Domainnameapi.whois.administrative.postal_code']        = 'الرمز البريدي';
$lang['Domainnameapi.whois.administrative.country']            = 'البلد';
$lang['Domainnameapi.whois.administrative.phone_country_code'] = 'كود الدولة للهاتف';
$lang['Domainnameapi.whois.administrative.phone']              = 'الهاتف';
$lang['Domainnameapi.whois.administrative.fax_country_code']   = 'كود الدولة للفكس';
$lang['Domainnameapi.whois.administrative.fax']                = 'الفاكس';
$lang['Domainnameapi.whois.administrative.email']              = 'البريد الإلكتروني';

$lang['Domainnameapi.whois.billing.first_name']         = 'الاسم الأول';
$lang['Domainnameapi.whois.billing.last_name']          = 'اسم العائلة';
$lang['Domainnameapi.whois.billing.company_name']       = 'الشركة';
$lang['Domainnameapi.whois.billing.address1']           = 'العنوان 1';
$lang['Domainnameapi.whois.billing.address2']           = 'العنوان 2';
$lang['Domainnameapi.whois.billing.city']               = 'المدينة';
$lang['Domainnameapi.whois.billing.state']              = 'الولاية/المقاطعة';
$lang['Domainnameapi.whois.billing.postal_code']        = 'الرمز البريدي';
$lang['Domainnameapi.whois.billing.country']            = 'البلد';
$lang['Domainnameapi.whois.billing.phone_country_code'] = 'كود الدولة للهاتف';
$lang['Domainnameapi.whois.billing.phone']              = 'الهاتف';
$lang['Domainnameapi.whois.billing.fax_country_code']   = 'كود الدولة للفكس';
$lang['Domainnameapi.whois.billing.fax']                = 'الفاكس';
$lang['Domainnameapi.whois.billing.email']              = 'البريد الإلكتروني';

// .UK حقول النطاق
$lang['Domainnameapi.domain.registrant_type']        = 'النوع القانوني';
$lang['Domainnameapi.domain.registrant_type.ind']    = 'فرد من المملكة المتحدة';
$lang['Domainnameapi.domain.registrant_type.find']   = 'فرد من خارج المملكة المتحدة';
$lang['Domainnameapi.domain.registrant_type.ltd']    = 'شركة محدودة من المملكة المتحدة';
$lang['Domainnameapi.domain.registrant_type.plc']    = 'شركة عامة محدودة من المملكة المتحدة';
$lang['Domainnameapi.domain.registrant_type.ptnr']   = 'شراكة في المملكة المتحدة';
$lang['Domainnameapi.domain.registrant_type.llp']    = 'شراكة محدودة المسؤولية في المملكة المتحدة';
$lang['Domainnameapi.domain.registrant_type.ip']     = 'شركة صناعية/تعاونية مسجلة في المملكة المتحدة';
$lang['Domainnameapi.domain.registrant_type.stra']   = 'تاجر فردي من المملكة المتحدة';
$lang['Domainnameapi.domain.registrant_type.sch']    = 'مدرسة في المملكة المتحدة';
$lang['Domainnameapi.domain.registrant_type.rchar']  = 'جمعية خيرية مسجلة في المملكة المتحدة';
$lang['Domainnameapi.domain.registrant_type.gov']    = 'هيئة حكومية في المملكة المتحدة';
$lang['Domainnameapi.domain.registrant_type.other']  = 'كيان في المملكة المتحدة (آخر)';
$lang['Domainnameapi.domain.registrant_type.crc']    = 'شركة بريطانية بموجب ميثاق ملكي';
$lang['Domainnameapi.domain.registrant_type.fcorp']  = 'منظمة أجنبية';
$lang['Domainnameapi.domain.registrant_type.stat']   = 'هيئة قانونية في المملكة المتحدة FIND';
$lang['Domainnameapi.domain.registrant_type.fother'] = 'منظمات أجنبية أخرى';
$lang['Domainnameapi.domain.registration_number']    = 'رقم تعريف الشركة';
$lang['Domainnameapi.domain.trading_name']           = 'اسم المسجل';

