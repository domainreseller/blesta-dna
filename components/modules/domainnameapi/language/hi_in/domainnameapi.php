<?php

// मूल जानकारी
$lang['Domainnameapi.name']              = 'DomainNameApi';
$lang['Domainnameapi.description']       = 'DomainNameApi एक डोमेन पंजीकरण मॉड्यूल है जो आपको डोमेन नाम पंजीकृत और प्रबंधित करने की अनुमति देता है।';
$lang['Domainnameapi.module_row']        = 'खाता';
$lang['Domainnameapi.module_row_plural'] = 'खाते';

// मॉड्यूल प्रबंधन
$lang['Domainnameapi.add_module_row']                     = 'खाता जोड़ें';
$lang['Domainnameapi.manage.module_rows_title']           = 'खाते';
$lang['Domainnameapi.manage.module_rows_heading.user']    = 'API उपयोगकर्ता नाम';
$lang['Domainnameapi.manage.module_rows_heading.key']     = 'API पासवर्ड';
$lang['Domainnameapi.manage.module_rows_heading.options'] = 'विकल्प';
$lang['Domainnameapi.manage.module_rows.edit']            = 'संपादित करें';
$lang['Domainnameapi.manage.module_rows.delete']          = 'हटाएं';
$lang['Domainnameapi.manage.module_rows.confirm_delete']  = 'क्या आप वाकई इस खाते को हटाना चाहते हैं?';
$lang['Domainnameapi.manage.module_rows_no_results']      = 'कोई खाते नहीं हैं।';
$lang['Domainnameapi.manage.sandbox_yes']                 = 'हाँ';
$lang['Domainnameapi.manage.sandbox_no']                  = 'नहीं';
$lang['Domainnameapi.manage.module_remote_info']          = '* तारांकित आइटम DomainNameApi से आते हैं, यदि "-" दिखाई देता है तो इसका मतलब है कि पासवर्ड गलत है या कनेक्शन स्थापित नहीं किया जा सकता।';

// पंक्ति मेटा डेटा
$lang['Domainnameapi.row_meta.user'] = 'API उपयोगकर्ता नाम';
$lang['Domainnameapi.row_meta.key']  = 'API पासवर्ड';
$lang['Domainnameapi.row_meta.sandbox'] = 'परीक्षण मोड';
$lang['Domainnameapi.row_meta.sandboxheader'] = 'परीक्षण मोड / सैंडबॉक्स मोड';
$lang['Domainnameapi.row_meta.sandboxwarning'] = 'परीक्षण मोड के लिए, आपको परीक्षण वातावरण से उपयोगकर्ता और पासवर्ड बनाने की आवश्यकता है। आप परीक्षण के लिए विशिष्ट एक्सटेंशन प्रबंधित कर सकते हैं ( com , net ,cc , xyz , info ,aero , org , tr , tc , blog, shop )। परीक्षण वातावरण उपयोगकर्ता URL :';
$lang['Domainnameapi.row_meta.userId'] = 'उपयोगकर्ता ID';
$lang['Domainnameapi.row_meta.userName'] = 'उपयोगकर्ता शीर्षक';
$lang['Domainnameapi.row_meta.userbalances'] = 'उपयोगकर्ता शेष राशि';

// पंक्ति जोड़ें
$lang['Domainnameapi.add_row.box_title']   = 'Domain Name Api खाता जोड़ें';
$lang['Domainnameapi.add_row.basic_title'] = 'प्रमाणीकरण सेटिंग्स';
$lang['Domainnameapi.add_row.add_btn']     = 'खाता जोड़ें';

// पंक्ति संपादित करें
$lang['Domainnameapi.edit_row.box_title']   = 'DomainNameApi खाता संपादित करें';
$lang['Domainnameapi.edit_row.basic_title'] = 'बुनियादी सेटिंग्स';
$lang['Domainnameapi.edit_row.add_btn']     = 'खाता अपडेट करें';

// पैकेज फ़ील्ड
$lang['Domainnameapi.package_fields.type']        = 'प्रकार';
$lang['Domainnameapi.package_fields.type_domain'] = 'डोमेन पंजीकरण';
$lang['Domainnameapi.package_fields.type_ssl']    = 'SSL प्रमाणपत्र';
$lang['Domainnameapi.package_fields.tld_options'] = 'TLD';
$lang['Domainnameapi.package_fields.ns1']         = 'नेम सर्वर 1';
$lang['Domainnameapi.package_fields.ns2']         = 'नेम सर्वर 2';
$lang['Domainnameapi.package_fields.ns3']         = 'नेम सर्वर 3';
$lang['Domainnameapi.package_fields.ns4']         = 'नेम सर्वर 4';
$lang['Domainnameapi.package_fields.ns5']         = 'नेम सर्वर 5';

// सेवा प्रबंधन
$lang['Domainnameapi.tab_whois.title']                  = 'Whois';
$lang['Domainnameapi.tab_whois.section_Registrant']     = 'पंजीकरणकर्ता';
$lang['Domainnameapi.tab_whois.section_Administrative'] = 'प्रशासकीय';
$lang['Domainnameapi.tab_whois.section_Technical']      = 'तकनीकी';
$lang['Domainnameapi.tab_whois.section_Billing']        = 'बिलिंग';
$lang['Domainnameapi.tab_whois.field_submit']           = 'Whois जानकारी अपडेट करें';

$lang['Domainnameapi.tab_nameservers.title']        = 'नेम सर्वर';
$lang['Domainnameapi.tab_nameserver.field_ns']      = 'नेम सर्वर %1$s'; // %1$s नेम सर्वर संख्या है
$lang['Domainnameapi.tab_nameservers.field_submit'] = 'नेम सर्वर अपडेट करें';

$lang['Domainnameapi.tab_settings.title']                         = 'सेटिंग्स';
$lang['Domainnameapi.tab_settings.field_registrar_lock']          = 'पंजीकरणकर्ता लॉक';
$lang['Domainnameapi.tab_settings.field_registrar_lock_yes']      = 'पंजीकरणकर्ता लॉक सेट करें। अनधिकृत स्थानांतरण को रोकने के लिए अनुशंसित।';
$lang['Domainnameapi.tab_settings.field_registrar_lock_no']       = 'डोमेन स्थानांतरित किया जा सके इसलिए पंजीकरणकर्ता लॉक हटाएं।';
$lang['Domainnameapi.tab_settings.field_whois_privacy']           = 'WHOIS गोपनीयता';
$lang['Domainnameapi.tab_settings.field_whois_privacy_state_yes'] = 'सक्षम';
$lang['Domainnameapi.tab_settings.field_whois_privacy_state_no']  = 'अक्षम';
$lang['Domainnameapi.tab_settings.field_epp_code']                = 'EPP कोड';
$lang['Domainnameapi.tab_settings.field_request_epp']             = 'EPP कोड/स्थानांतरण कुंजी अनुरोध करें';
$lang['Domainnameapi.tab_settings.field_submit']                  = 'सेटिंग्स अपडेट करें';

// त्रुटियां
$lang['Domainnameapi.!error.user.valid']               = 'कृपया एक उपयोगकर्ता नाम दर्ज करें';
$lang['Domainnameapi.!error.key.valid']                = 'कृपया एक पासवर्ड दर्ज करें';
$lang['Domainnameapi.!error.key.valid_connection']     = 'उपयोगकर्ता नाम और पासवर्ड संयोजन अमान्य प्रतीत होता है';
$lang['Domainnameapi.!error.registrant_type.format']   = 'कृपया एक पंजीकरणकर्ता प्रकार चुनें';
$lang['Domainnameapi.!error.registrant_vat_id.format'] = 'कृपया एक VAT संख्या दर्ज करें';
$lang['Domainnameapi.!error.siren_siret.format']       = 'कृपया एक SIREN/SIRET संख्या दर्ज करें';
$lang['Domainnameapi.!error.trademark_number.format']  = 'कृपया एक ट्रेडमार्क संख्या दर्ज करें';

// डोमेन स्थानांतरण फ़ील्ड
$lang['Domainnameapi.transfer.domain']    = 'डोमेन नाम';
$lang['Domainnameapi.transfer.auth_info'] = 'EPP कोड';

// डोमेन फ़ील्ड
$lang['Domainnameapi.domain.domain'] = 'डोमेन नाम';

// नेम सर्वर फ़ील्ड
$lang['Domainnameapi.nameserver.ns1'] = 'नेम सर्वर 1';
$lang['Domainnameapi.nameserver.ns2'] = 'नेम सर्वर 2';
$lang['Domainnameapi.nameserver.ns3'] = 'नेम सर्वर 3';
$lang['Domainnameapi.nameserver.ns4'] = 'नेम सर्वर 4';

// Whois फ़ील्ड
$lang['Domainnameapi.whois.registrant.first_name']         = 'पहला नाम';
$lang['Domainnameapi.whois.registrant.last_name']          = 'अंतिम नाम';
$lang['Domainnameapi.whois.registrant.company_name']       = 'कंपनी';
$lang['Domainnameapi.whois.registrant.address1']           = 'पता 1';
$lang['Domainnameapi.whois.registrant.address2']           = 'पता 2';
$lang['Domainnameapi.whois.registrant.city']               = 'शहर';
$lang['Domainnameapi.whois.registrant.state']              = 'राज्य/प्रांत';
$lang['Domainnameapi.whois.registrant.postal_code']        = 'पिन कोड';
$lang['Domainnameapi.whois.registrant.country']            = 'देश';
$lang['Domainnameapi.whois.registrant.phone_country_code'] = 'फोन देश कोड';
$lang['Domainnameapi.whois.registrant.phone']              = 'फोन';
$lang['Domainnameapi.whois.registrant.fax_country_code']   = 'फैक्स देश कोड';
$lang['Domainnameapi.whois.registrant.fax']                = 'फैक्स';
$lang['Domainnameapi.whois.registrant.email']              = 'ईमेल';

$lang['Domainnameapi.whois.technical.first_name']         = 'पहला नाम';
$lang['Domainnameapi.whois.technical.last_name']          = 'अंतिम नाम';
$lang['Domainnameapi.whois.technical.company_name']       = 'कंपनी';
$lang['Domainnameapi.whois.technical.address1']           = 'पता 1';
$lang['Domainnameapi.whois.technical.address2']           = 'पता 2';
$lang['Domainnameapi.whois.technical.city']               = 'शहर';
$lang['Domainnameapi.whois.technical.state']              = 'राज्य/प्रांत';
$lang['Domainnameapi.whois.technical.postal_code']        = 'पिन कोड';
$lang['Domainnameapi.whois.technical.country']            = 'देश';
$lang['Domainnameapi.whois.technical.phone_country_code'] = 'फोन देश कोड';
$lang['Domainnameapi.whois.technical.phone']              = 'फोन';
$lang['Domainnameapi.whois.technical.fax_country_code']   = 'फैक्स देश कोड';
$lang['Domainnameapi.whois.technical.fax']                = 'फैक्स';
$lang['Domainnameapi.whois.technical.email']              = 'ईमेल';

$lang['Domainnameapi.whois.administrative.first_name']         = 'पहला नाम';
$lang['Domainnameapi.whois.administrative.last_name']          = 'अंतिम नाम';
$lang['Domainnameapi.whois.administrative.company_name']       = 'कंपनी';
$lang['Domainnameapi.whois.administrative.address1']           = 'पता 1';
$lang['Domainnameapi.whois.administrative.address2']           = 'पता 2';
$lang['Domainnameapi.whois.administrative.city']               = 'शहर';
$lang['Domainnameapi.whois.administrative.state']              = 'राज्य/प्रांत';
$lang['Domainnameapi.whois.administrative.postal_code']        = 'पिन कोड';
$lang['Domainnameapi.whois.administrative.country']            = 'देश';
$lang['Domainnameapi.whois.administrative.phone_country_code'] = 'फोन देश कोड';
$lang['Domainnameapi.whois.administrative.phone']              = 'फोन';
$lang['Domainnameapi.whois.administrative.fax_country_code']   = 'फैक्स देश कोड';
$lang['Domainnameapi.whois.administrative.fax']                = 'फैक्स';
$lang['Domainnameapi.whois.administrative.email']              = 'ईमेल';

$lang['Domainnameapi.whois.billing.first_name']         = 'पहला नाम';
$lang['Domainnameapi.whois.billing.last_name']          = 'अंतिम नाम';
$lang['Domainnameapi.whois.billing.company_name']       = 'कंपनी';
$lang['Domainnameapi.whois.billing.address1']           = 'पता 1';
$lang['Domainnameapi.whois.billing.address2']           = 'पता 2';
$lang['Domainnameapi.whois.billing.city']               = 'शहर';
$lang['Domainnameapi.whois.billing.state']              = 'राज्य/प्रांत';
$lang['Domainnameapi.whois.billing.postal_code']        = 'पिन कोड';
$lang['Domainnameapi.whois.billing.country']            = 'देश';
$lang['Domainnameapi.whois.billing.phone_country_code'] = 'फोन देश कोड';
$lang['Domainnameapi.whois.billing.phone']              = 'फोन';
$lang['Domainnameapi.whois.billing.fax_country_code']   = 'फैक्स देश कोड';
$lang['Domainnameapi.whois.billing.fax']                = 'फैक्स';
$lang['Domainnameapi.whois.billing.email']              = 'ईमेल';

// .UK डोमेन फ़ील्ड
$lang['Domainnameapi.domain.registrant_type']        = 'कानूनी प्रकार';
$lang['Domainnameapi.domain.registrant_type.ind']    = 'यूके व्यक्ति';
$lang['Domainnameapi.domain.registrant_type.find']   = 'गैर-यूके व्यक्ति';
$lang['Domainnameapi.domain.registrant_type.ltd']    = 'यूके लिमिटेड कंपनी';
$lang['Domainnameapi.domain.registrant_type.plc']    = 'यूके पब्लिक लिमिटेड कंपनी';
$lang['Domainnameapi.domain.registrant_type.ptnr']   = 'यूके साझेदारी';
$lang['Domainnameapi.domain.registrant_type.llp']    = 'यूके लिमिटेड लायबिलिटी साझेदारी';
$lang['Domainnameapi.domain.registrant_type.ip']     = 'यूके औद्योगिक/सहकारी पंजीकृत कंपनी';
$lang['Domainnameapi.domain.registrant_type.stra']   = 'यूके एकल व्यापारी';
$lang['Domainnameapi.domain.registrant_type.sch']    = 'यूके स्कूल';
$lang['Domainnameapi.domain.registrant_type.rchar']  = 'यूके पंजीकृत धर्मार्थ संगठन';
$lang['Domainnameapi.domain.registrant_type.gov']    = 'यूके सरकारी निकाय';
$lang['Domainnameapi.domain.registrant_type.other']  = 'यूके इकाई (अन्य)';
$lang['Domainnameapi.domain.registrant_type.crc']    = 'यूके रॉयल चार्टर द्वारा कंपनी';
$lang['Domainnameapi.domain.registrant_type.fcorp']  = 'विदेशी संगठन';
$lang['Domainnameapi.domain.registrant_type.stat']   = 'यूके वैधानिक निकाय FIND';
$lang['Domainnameapi.domain.registrant_type.fother'] = 'अन्य विदेशी संगठन';
$lang['Domainnameapi.domain.registration_number']    = 'कंपनी ID संख्या';
$lang['Domainnameapi.domain.trading_name']           = 'पंजीकरणकर्ता का नाम';
