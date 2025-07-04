<?php

// Temel Bilgiler
$lang['Domainnameapi.name']              = 'DomainNameApi';
$lang['Domainnameapi.description']       = 'DomainNameApi, alan adı kaydı yapmanızı ve yönetmenizi sağlayan bir alan adı kayıt modülüdür.';
$lang['Domainnameapi.module_row']        = 'Hesap';
$lang['Domainnameapi.module_row_plural'] = 'Hesaplar';

// Modül Yönetimi
$lang['Domainnameapi.add_module_row']                     = 'Hesap Ekle';
$lang['Domainnameapi.manage.module_rows_title']           = 'Hesaplar';
$lang['Domainnameapi.manage.module_rows_heading.user']    = 'API Kullanıcı Adı';
$lang['Domainnameapi.manage.module_rows_heading.key']     = 'API Şifresi';
$lang['Domainnameapi.manage.module_rows_heading.options'] = 'Seçenekler';
$lang['Domainnameapi.manage.module_rows.edit']            = 'Düzenle';
$lang['Domainnameapi.manage.module_rows.delete']          = 'Sil';
$lang['Domainnameapi.manage.module_rows.confirm_delete']  = 'Bu hesabı silmek istediğinizden emin misiniz?';
$lang['Domainnameapi.manage.module_rows_no_results']      = 'Hiç hesap yok.';
$lang['Domainnameapi.manage.sandbox_yes']                 = 'Evet';
$lang['Domainnameapi.manage.sandbox_no']                  = 'Hayır';
$lang['Domainnameapi.manage.module_remote_info']          = '* Olanlar DomainNameApi tarafından gelir, "-" gelirse şifre yanlış ya da bağlantı kurulamıyor anlamına gelir.';

// Satır Meta Verileri
$lang['Domainnameapi.row_meta.user'] = 'API Kullanıcı Adı';
$lang['Domainnameapi.row_meta.key']  = 'API Şifresi';
$lang['Domainnameapi.row_meta.sandbox'] = 'Test modu';
$lang['Domainnameapi.row_meta.sandboxheader'] = 'Test modu / Sandbox modu';
$lang['Domainnameapi.row_meta.sandboxwarning'] = 'Test modu için test ortamından kullanıcı ve şifre açmanız gereklidir. Test için belirli uzantıları yönetebilirsiniz ( com , net ,cc , xyz , info ,aero , org , tr , tc , blog, shop ). Test ortamı için kullanıcı URL :';
$lang['Domainnameapi.row_meta.userId'] = 'User ID';
$lang['Domainnameapi.row_meta.userName'] = 'User Ünvan';
$lang['Domainnameapi.row_meta.userbalances'] = 'User Bakiyesi';

// Satır Ekle
$lang['Domainnameapi.add_row.box_title']   = 'Domain Name Api Hesabı Ekle';
$lang['Domainnameapi.add_row.basic_title'] = 'Kimlik Doğrulama Ayarları';
$lang['Domainnameapi.add_row.add_btn']     = 'Hesap Ekle';

// Satır Düzenle
$lang['Domainnameapi.edit_row.box_title']   = 'DomainNameApi Hesabını Düzenle';
$lang['Domainnameapi.edit_row.basic_title'] = 'Temel Ayarlar';
$lang['Domainnameapi.edit_row.add_btn']     = 'Hesabı Güncelle';

// Paket Alanları
$lang['Domainnameapi.package_fields.type']        = 'Tür';
$lang['Domainnameapi.package_fields.type_domain'] = 'Alan Adı Kaydı';
$lang['Domainnameapi.package_fields.type_ssl']    = 'SSL Sertifikası';
$lang['Domainnameapi.package_fields.tld_options'] = 'TLD\'ler';
$lang['Domainnameapi.package_fields.ns1']         = 'Ad Sunucusu 1';
$lang['Domainnameapi.package_fields.ns2']         = 'Ad Sunucusu 2';
$lang['Domainnameapi.package_fields.ns3']         = 'Ad Sunucusu 3';
$lang['Domainnameapi.package_fields.ns4']         = 'Ad Sunucusu 4';
$lang['Domainnameapi.package_fields.ns5']         = 'Ad Sunucusu 5';

// Hizmet Yönetimi
$lang['Domainnameapi.tab_whois.title']                  = 'Whois';
$lang['Domainnameapi.tab_whois.section_Registrant']     = 'Kaydedici';
$lang['Domainnameapi.tab_whois.section_Administrative'] = 'Yönetici';
$lang['Domainnameapi.tab_whois.section_Technical']      = 'Teknik';
$lang['Domainnameapi.tab_whois.section_Billing']        = 'Faturalama';
$lang['Domainnameapi.tab_whois.field_submit']           = 'Whois Bilgilerini Güncelle';

$lang['Domainnameapi.tab_nameservers.title']        = 'Ad Sunucuları';
$lang['Domainnameapi.tab_nameserver.field_ns']      = 'Ad Sunucusu %1$s'; // %1$s, ad sunucusu numarasıdır
$lang['Domainnameapi.tab_nameservers.field_submit'] = 'Ad Sunucularını Güncelle';

$lang['Domainnameapi.tab_settings.title']                         = 'Ayarlar';
$lang['Domainnameapi.tab_settings.field_registrar_lock']          = 'Kayıt Kilidi';
$lang['Domainnameapi.tab_settings.field_registrar_lock_yes']      = 'Kayıt kilidini ayarla. Yetkisiz transferi önlemek için önerilir.';
$lang['Domainnameapi.tab_settings.field_registrar_lock_no']       = 'Kayıt kilidini kaldır, böylece alan adı transfer edilebilir.';
$lang['Domainnameapi.tab_settings.field_whois_privacy']           = 'WHOIS Gizliliği';
$lang['Domainnameapi.tab_settings.field_whois_privacy_state_yes'] = 'Etkin';
$lang['Domainnameapi.tab_settings.field_whois_privacy_state_no']  = 'Devre Dışı';
$lang['Domainnameapi.tab_settings.field_epp_code']                = 'EPP Kodu';
$lang['Domainnameapi.tab_settings.field_request_epp']             = 'EPP Kodu/Transfer Anahtarı Talep Et';
$lang['Domainnameapi.tab_settings.field_submit']                  = 'Ayarları Güncelle';

// Hatalar
$lang['Domainnameapi.!error.user.valid']               = 'Lütfen bir kullanıcı adı girin';
$lang['Domainnameapi.!error.key.valid']                = 'Lütfen bir şifre girin';
$lang['Domainnameapi.!error.key.valid_connection']     = 'Kullanıcı adı ve şifre kombinasyonu geçersiz görünüyor';
$lang['Domainnameapi.!error.registrant_type.format']   = 'Lütfen bir kaydedici türü seçin';
$lang['Domainnameapi.!error.registrant_vat_id.format'] = 'Lütfen bir KDV Kimlik Numarası girin';
$lang['Domainnameapi.!error.siren_siret.format']       = 'Lütfen bir SIREN/SIRET Numarası girin';
$lang['Domainnameapi.!error.trademark_number.format']  = 'Lütfen bir Ticari Marka Numarası girin';

// Alan Adı Transfer Alanları
$lang['Domainnameapi.transfer.domain']    = 'Alan Adı';
$lang['Domainnameapi.transfer.auth_info'] = 'EPP Kodu';

// Alan Adı Alanları
$lang['Domainnameapi.domain.domain'] = 'Alan Adı';

// Ad Sunucusu Alanları
$lang['Domainnameapi.nameserver.ns1'] = 'Ad Sunucusu 1';
$lang['Domainnameapi.nameserver.ns2'] = 'Ad Sunucusu 2';
$lang['Domainnameapi.nameserver.ns3'] = 'Ad Sunucusu 3';
$lang['Domainnameapi.nameserver.ns4'] = 'Ad Sunucusu 4';

// Whois Alanları
$lang['Domainnameapi.whois.registrant.first_name']         = 'Ad';
$lang['Domainnameapi.whois.registrant.last_name']          = 'Soyad';
$lang['Domainnameapi.whois.registrant.company_name']       = 'Şirket';
$lang['Domainnameapi.whois.registrant.address1']           = 'Adres 1';
$lang['Domainnameapi.whois.registrant.address2']           = 'Adres 2';
$lang['Domainnameapi.whois.registrant.city']               = 'Şehir';
$lang['Domainnameapi.whois.registrant.state']              = 'Eyalet/İl';
$lang['Domainnameapi.whois.registrant.postal_code']        = 'Posta Kodu';
$lang['Domainnameapi.whois.registrant.country']            = 'Ülke';
$lang['Domainnameapi.whois.registrant.phone_country_code'] = 'Telefon Ülke Kodu';
$lang['Domainnameapi.whois.registrant.phone']              = 'Telefon';
$lang['Domainnameapi.whois.registrant.fax_country_code']   = 'Faks Ülke Kodu';
$lang['Domainnameapi.whois.registrant.fax']                = 'Faks';
$lang['Domainnameapi.whois.registrant.email']              = 'E-posta';

$lang['Domainnameapi.whois.technical.first_name']         = 'Ad';
$lang['Domainnameapi.whois.technical.last_name']          = 'Soyad';
$lang['Domainnameapi.whois.technical.company_name']       = 'Şirket';
$lang['Domainnameapi.whois.technical.address1']           = 'Adres 1';
$lang['Domainnameapi.whois.technical.address2']           = 'Adres 2';
$lang['Domainnameapi.whois.technical.city']               = 'Şehir';
$lang['Domainnameapi.whois.technical.state']              = 'Eyalet/İl';
$lang['Domainnameapi.whois.technical.postal_code']        = 'Posta Kodu';
$lang['Domainnameapi.whois.technical.country']            = 'Ülke';
$lang['Domainnameapi.whois.technical.phone_country_code'] = 'Telefon Ülke Kodu';
$lang['Domainnameapi.whois.technical.phone']              = 'Telefon';
$lang['Domainnameapi.whois.technical.fax_country_code']   = 'Faks Ülke Kodu';
$lang['Domainnameapi.whois.technical.fax']                = 'Faks';
$lang['Domainnameapi.whois.technical.email']              = 'E-posta';

$lang['Domainnameapi.whois.administrative.first_name']         = 'Ad';
$lang['Domainnameapi.whois.administrative.last_name']          = 'Soyad';
$lang['Domainnameapi.whois.administrative.company_name']       = 'Şirket';
$lang['Domainnameapi.whois.administrative.address1']           = 'Adres 1';
$lang['Domainnameapi.whois.administrative.address2']           = 'Adres 2';
$lang['Domainnameapi.whois.administrative.city']               = 'Şehir';
$lang['Domainnameapi.whois.administrative.state']              = 'Eyalet/İl';
$lang['Domainnameapi.whois.administrative.postal_code']        = 'Posta Kodu';
$lang['Domainnameapi.whois.administrative.country']            = 'Ülke';
$lang['Domainnameapi.whois.administrative.phone_country_code'] = 'Telefon Ülke Kodu';
$lang['Domainnameapi.whois.administrative.phone']              = 'Telefon';
$lang['Domainnameapi.whois.administrative.fax_country_code']   = 'Faks Ülke Kodu';
$lang['Domainnameapi.whois.administrative.fax']                = 'Faks';
$lang['Domainnameapi.whois.administrative.email']              = 'E-posta';

$lang['Domainnameapi.whois.billing.first_name']         = 'Ad';
$lang['Domainnameapi.whois.billing.last_name']          = 'Soyad';
$lang['Domainnameapi.whois.billing.company_name']       = 'Şirket';
$lang['Domainnameapi.whois.billing.address1']           = 'Adres 1';
$lang['Domainnameapi.whois.billing.address2']           = 'Adres 2';
$lang['Domainnameapi.whois.billing.city']               = 'Şehir';
$lang['Domainnameapi.whois.billing.state']              = 'Eyalet/İl';
$lang['Domainnameapi.whois.billing.postal_code']        = 'Posta Kodu';
$lang['Domainnameapi.whois.billing.country']            = 'Ülke';
$lang['Domainnameapi.whois.billing.phone_country_code'] = 'Telefon Ülke Kodu';
$lang['Domainnameapi.whois.billing.phone']              = 'Telefon';
$lang['Domainnameapi.whois.billing.fax_country_code']   = 'Faks Ülke Kodu';
$lang['Domainnameapi.whois.billing.fax']                = 'Faks';
$lang['Domainnameapi.whois.billing.email']              = 'E-posta';

// .UK alan adı alanları
$lang['Domainnameapi.domain.registrant_type']        = 'Yasal Tür';
$lang['Domainnameapi.domain.registrant_type.ind']    = 'İngiltere bireysel';
$lang['Domainnameapi.domain.registrant_type.find']   = 'İngiltere dışı bireysel';
$lang['Domainnameapi.domain.registrant_type.ltd']    = 'İngiltere Limited Şirketi';
$lang['Domainnameapi.domain.registrant_type.plc']    = 'İngiltere Anonim Şirketi';
$lang['Domainnameapi.domain.registrant_type.ptnr']   = 'İngiltere Ortaklığı';
$lang['Domainnameapi.domain.registrant_type.llp']    = 'İngiltere Sınırlı Sorumluluk Ortaklığı';
$lang['Domainnameapi.domain.registrant_type.ip']     = 'İngiltere Endüstri/Kooperatif Tescilli Şirket';
$lang['Domainnameapi.domain.registrant_type.stra']   = 'İngiltere Tek Tüccar';
$lang['Domainnameapi.domain.registrant_type.sch']    = 'İngiltere Okulu';
$lang['Domainnameapi.domain.registrant_type.rchar']  = 'İngiltere Tescilli Hayır Kurumu';
$lang['Domainnameapi.domain.registrant_type.gov']    = 'İngiltere Hükümet Kuruluşu';
$lang['Domainnameapi.domain.registrant_type.other']  = 'İngiltere Kuruluşu (diğer)';
$lang['Domainnameapi.domain.registrant_type.crc']    = 'İngiltere Kraliyet Tüzüğü ile Kurulan Şirket';
$lang['Domainnameapi.domain.registrant_type.fcorp']  = 'Yabancı Organizasyon';
$lang['Domainnameapi.domain.registrant_type.stat']   = 'İngiltere Kanuni Kurum FIND';
$lang['Domainnameapi.domain.registrant_type.fother'] = 'Diğer Yabancı Organizasyonlar';
$lang['Domainnameapi.domain.registration_number']    = 'Şirket Kimlik Numarası';
$lang['Domainnameapi.domain.trading_name']           = 'Kayıtlı Ad';

