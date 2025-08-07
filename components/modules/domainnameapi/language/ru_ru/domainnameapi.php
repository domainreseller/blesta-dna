<?php

// Основные сведения
$lang['Domainnameapi.name']              = 'DomainNameApi';
$lang['Domainnameapi.description']       = 'DomainNameApi - это модуль регистрации доменов, который позволяет регистрировать и управлять доменными именами.';
$lang['Domainnameapi.module_row']        = 'Аккаунт';
$lang['Domainnameapi.module_row_plural'] = 'Аккаунты';

// Управление модулем
$lang['Domainnameapi.add_module_row']                     = 'Добавить аккаунт';
$lang['Domainnameapi.manage.module_rows_title']           = 'Аккаунты';
$lang['Domainnameapi.manage.module_rows_heading.user']    = 'Имя пользователя API';
$lang['Domainnameapi.manage.module_rows_heading.key']     = 'Пароль API';
$lang['Domainnameapi.manage.module_rows_heading.options'] = 'Опции';
$lang['Domainnameapi.manage.module_rows.edit']            = 'Редактировать';
$lang['Domainnameapi.manage.module_rows.delete']          = 'Удалить';
$lang['Domainnameapi.manage.module_rows.confirm_delete']  = 'Вы уверены, что хотите удалить этот аккаунт?';
$lang['Domainnameapi.manage.module_rows_no_results']      = 'Нет аккаунтов.';
$lang['Domainnameapi.manage.sandbox_yes']                 = 'Да';
$lang['Domainnameapi.manage.sandbox_no']                  = 'Нет';
$lang['Domainnameapi.manage.module_remote_info']          = '* Элементы, отмеченные звездочкой, поступают от DomainNameApi, если появляется "-", это означает, что пароль неправильный или соединение не может быть установлено.';

// Метаданные строки
$lang['Domainnameapi.row_meta.user'] = 'Имя пользователя API';
$lang['Domainnameapi.row_meta.key']  = 'Пароль API';
$lang['Domainnameapi.row_meta.sandbox'] = 'Тестовый режим';
$lang['Domainnameapi.row_meta.sandboxheader'] = 'Тестовый режим / Песочница';
$lang['Domainnameapi.row_meta.sandboxwarning'] = 'Для тестового режима необходимо создать пользователя и пароль из тестовой среды. Вы можете управлять определенными расширениями для тестирования ( com , net ,cc , xyz , info ,aero , org , tr , tc , blog, shop ). URL пользователя тестовой среды :';
$lang['Domainnameapi.row_meta.userId'] = 'ID пользователя';
$lang['Domainnameapi.row_meta.userName'] = 'Звание пользователя';
$lang['Domainnameapi.row_meta.userbalances'] = 'Баланс пользователя';

// Добавить строку
$lang['Domainnameapi.add_row.box_title']   = 'Добавить аккаунт Domain Name Api';
$lang['Domainnameapi.add_row.basic_title'] = 'Настройки аутентификации';
$lang['Domainnameapi.add_row.add_btn']     = 'Добавить аккаунт';

// Редактировать строку
$lang['Domainnameapi.edit_row.box_title']   = 'Редактировать аккаунт DomainNameApi';
$lang['Domainnameapi.edit_row.basic_title'] = 'Основные настройки';
$lang['Domainnameapi.edit_row.add_btn']     = 'Обновить аккаунт';

// Поля пакета
$lang['Domainnameapi.package_fields.type']        = 'Тип';
$lang['Domainnameapi.package_fields.type_domain'] = 'Регистрация домена';
$lang['Domainnameapi.package_fields.type_ssl']    = 'SSL-сертификат';
$lang['Domainnameapi.package_fields.tld_options'] = 'TLD';
$lang['Domainnameapi.package_fields.ns1']         = 'Сервер имен 1';
$lang['Domainnameapi.package_fields.ns2']         = 'Сервер имен 2';
$lang['Domainnameapi.package_fields.ns3']         = 'Сервер имен 3';
$lang['Domainnameapi.package_fields.ns4']         = 'Сервер имен 4';
$lang['Domainnameapi.package_fields.ns5']         = 'Сервер имен 5';

// Управление услугами
$lang['Domainnameapi.tab_whois.title']                  = 'Whois';
$lang['Domainnameapi.tab_whois.section_Registrant']     = 'Регистрант';
$lang['Domainnameapi.tab_whois.section_Administrative'] = 'Административный';
$lang['Domainnameapi.tab_whois.section_Technical']      = 'Технический';
$lang['Domainnameapi.tab_whois.section_Billing']        = 'Биллинг';
$lang['Domainnameapi.tab_whois.field_submit']           = 'Обновить информацию Whois';

$lang['Domainnameapi.tab_nameservers.title']        = 'Серверы имен';
$lang['Domainnameapi.tab_nameserver.field_ns']      = 'Сервер имен %1$s'; // %1$s - номер сервера имен
$lang['Domainnameapi.tab_nameservers.field_submit'] = 'Обновить серверы имен';

$lang['Domainnameapi.tab_settings.title']                         = 'Настройки';
$lang['Domainnameapi.tab_settings.field_registrar_lock']          = 'Блокировка регистратора';
$lang['Domainnameapi.tab_settings.field_registrar_lock_yes']      = 'Установить блокировку регистратора. Рекомендуется для предотвращения несанкционированного трансфера.';
$lang['Domainnameapi.tab_settings.field_registrar_lock_no']       = 'Снять блокировку регистратора, чтобы домен мог быть переведен.';
$lang['Domainnameapi.tab_settings.field_whois_privacy']           = 'Приватность WHOIS';
$lang['Domainnameapi.tab_settings.field_whois_privacy_state_yes'] = 'Включено';
$lang['Domainnameapi.tab_settings.field_whois_privacy_state_no']  = 'Отключено';
$lang['Domainnameapi.tab_settings.field_epp_code']                = 'Код EPP';
$lang['Domainnameapi.tab_settings.field_request_epp']             = 'Запросить код EPP/Ключ трансфера';
$lang['Domainnameapi.tab_settings.field_submit']                  = 'Обновить настройки';

// Ошибки
$lang['Domainnameapi.!error.user.valid']               = 'Пожалуйста, введите имя пользователя';
$lang['Domainnameapi.!error.key.valid']                = 'Пожалуйста, введите пароль';
$lang['Domainnameapi.!error.key.valid_connection']     = 'Комбинация имени пользователя и пароля кажется недействительной';
$lang['Domainnameapi.!error.registrant_type.format']   = 'Пожалуйста, выберите тип регистранта';
$lang['Domainnameapi.!error.registrant_vat_id.format'] = 'Пожалуйста, введите номер НДС';
$lang['Domainnameapi.!error.siren_siret.format']       = 'Пожалуйста, введите номер SIREN/SIRET';
$lang['Domainnameapi.!error.trademark_number.format']  = 'Пожалуйста, введите номер торговой марки';

// Поля трансфера домена
$lang['Domainnameapi.transfer.domain']    = 'Доменное имя';
$lang['Domainnameapi.transfer.auth_info'] = 'Код EPP';

// Поля домена
$lang['Domainnameapi.domain.domain'] = 'Доменное имя';

// Поля сервера имен
$lang['Domainnameapi.nameserver.ns1'] = 'Сервер имен 1';
$lang['Domainnameapi.nameserver.ns2'] = 'Сервер имен 2';
$lang['Domainnameapi.nameserver.ns3'] = 'Сервер имен 3';
$lang['Domainnameapi.nameserver.ns4'] = 'Сервер имен 4';

// Поля Whois
$lang['Domainnameapi.whois.registrant.first_name']         = 'Имя';
$lang['Domainnameapi.whois.registrant.last_name']          = 'Фамилия';
$lang['Domainnameapi.whois.registrant.company_name']       = 'Компания';
$lang['Domainnameapi.whois.registrant.address1']           = 'Адрес 1';
$lang['Domainnameapi.whois.registrant.address2']           = 'Адрес 2';
$lang['Domainnameapi.whois.registrant.city']               = 'Город';
$lang['Domainnameapi.whois.registrant.state']              = 'Штат/Область';
$lang['Domainnameapi.whois.registrant.postal_code']        = 'Почтовый индекс';
$lang['Domainnameapi.whois.registrant.country']            = 'Страна';
$lang['Domainnameapi.whois.registrant.phone_country_code'] = 'Код страны телефона';
$lang['Domainnameapi.whois.registrant.phone']              = 'Телефон';
$lang['Domainnameapi.whois.registrant.fax_country_code']   = 'Код страны факса';
$lang['Domainnameapi.whois.registrant.fax']                = 'Факс';
$lang['Domainnameapi.whois.registrant.email']              = 'Электронная почта';

$lang['Domainnameapi.whois.technical.first_name']         = 'Имя';
$lang['Domainnameapi.whois.technical.last_name']          = 'Фамилия';
$lang['Domainnameapi.whois.technical.company_name']       = 'Компания';
$lang['Domainnameapi.whois.technical.address1']           = 'Адрес 1';
$lang['Domainnameapi.whois.technical.address2']           = 'Адрес 2';
$lang['Domainnameapi.whois.technical.city']               = 'Город';
$lang['Domainnameapi.whois.technical.state']              = 'Штат/Область';
$lang['Domainnameapi.whois.technical.postal_code']        = 'Почтовый индекс';
$lang['Domainnameapi.whois.technical.country']            = 'Страна';
$lang['Domainnameapi.whois.technical.phone_country_code'] = 'Код страны телефона';
$lang['Domainnameapi.whois.technical.phone']              = 'Телефон';
$lang['Domainnameapi.whois.technical.fax_country_code']   = 'Код страны факса';
$lang['Domainnameapi.whois.technical.fax']                = 'Факс';
$lang['Domainnameapi.whois.technical.email']              = 'Электронная почта';

$lang['Domainnameapi.whois.administrative.first_name']         = 'Имя';
$lang['Domainnameapi.whois.administrative.last_name']          = 'Фамилия';
$lang['Domainnameapi.whois.administrative.company_name']       = 'Компания';
$lang['Domainnameapi.whois.administrative.address1']           = 'Адрес 1';
$lang['Domainnameapi.whois.administrative.address2']           = 'Адрес 2';
$lang['Domainnameapi.whois.administrative.city']               = 'Город';
$lang['Domainnameapi.whois.administrative.state']              = 'Штат/Область';
$lang['Domainnameapi.whois.administrative.postal_code']        = 'Почтовый индекс';
$lang['Domainnameapi.whois.administrative.country']            = 'Страна';
$lang['Domainnameapi.whois.administrative.phone_country_code'] = 'Код страны телефона';
$lang['Domainnameapi.whois.administrative.phone']              = 'Телефон';
$lang['Domainnameapi.whois.administrative.fax_country_code']   = 'Код страны факса';
$lang['Domainnameapi.whois.administrative.fax']                = 'Факс';
$lang['Domainnameapi.whois.administrative.email']              = 'Электронная почта';

$lang['Domainnameapi.whois.billing.first_name']         = 'Имя';
$lang['Domainnameapi.whois.billing.last_name']          = 'Фамилия';
$lang['Domainnameapi.whois.billing.company_name']       = 'Компания';
$lang['Domainnameapi.whois.billing.address1']           = 'Адрес 1';
$lang['Domainnameapi.whois.billing.address2']           = 'Адрес 2';
$lang['Domainnameapi.whois.billing.city']               = 'Город';
$lang['Domainnameapi.whois.billing.state']              = 'Штат/Область';
$lang['Domainnameapi.whois.billing.postal_code']        = 'Почтовый индекс';
$lang['Domainnameapi.whois.billing.country']            = 'Страна';
$lang['Domainnameapi.whois.billing.phone_country_code'] = 'Код страны телефона';
$lang['Domainnameapi.whois.billing.phone']              = 'Телефон';
$lang['Domainnameapi.whois.billing.fax_country_code']   = 'Код страны факса';
$lang['Domainnameapi.whois.billing.fax']                = 'Факс';
$lang['Domainnameapi.whois.billing.email']              = 'Электронная почта';

// Поля домена .UK
$lang['Domainnameapi.domain.registrant_type']        = 'Правовой тип';
$lang['Domainnameapi.domain.registrant_type.ind']    = 'Частное лицо Великобритании';
$lang['Domainnameapi.domain.registrant_type.find']   = 'Частное лицо не из Великобритании';
$lang['Domainnameapi.domain.registrant_type.ltd']    = 'Частная компания с ограниченной ответственностью Великобритании';
$lang['Domainnameapi.domain.registrant_type.plc']    = 'Публичная компания с ограниченной ответственностью Великобритании';
$lang['Domainnameapi.domain.registrant_type.ptnr']   = 'Партнерство Великобритании';
$lang['Domainnameapi.domain.registrant_type.llp']    = 'Партнерство с ограниченной ответственностью Великобритании';
$lang['Domainnameapi.domain.registrant_type.ip']     = 'Промышленная/Кооперативная зарегистрированная компания Великобритании';
$lang['Domainnameapi.domain.registrant_type.stra']   = 'Индивидуальный предприниматель Великобритании';
$lang['Domainnameapi.domain.registrant_type.sch']    = 'Школа Великобритании';
$lang['Domainnameapi.domain.registrant_type.rchar']  = 'Зарегистрированная благотворительная организация Великобритании';
$lang['Domainnameapi.domain.registrant_type.gov']    = 'Правительственный орган Великобритании';
$lang['Domainnameapi.domain.registrant_type.other']  = 'Образование Великобритании (другое)';
$lang['Domainnameapi.domain.registrant_type.crc']    = 'Корпорация Великобритании по Королевской хартии';
$lang['Domainnameapi.domain.registrant_type.fcorp']  = 'Иностранная организация';
$lang['Domainnameapi.domain.registrant_type.stat']   = 'Статутный орган Великобритании FIND';
$lang['Domainnameapi.domain.registrant_type.fother'] = 'Другие иностранные организации';
$lang['Domainnameapi.domain.registration_number']    = 'Идентификационный номер компании';
$lang['Domainnameapi.domain.trading_name']           = 'Имя регистранта'; 