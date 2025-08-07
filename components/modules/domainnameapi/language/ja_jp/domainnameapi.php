<?php

// 基本情報
$lang['Domainnameapi.name']              = 'DomainNameApi';
$lang['Domainnameapi.description']       = 'DomainNameApiは、ドメイン名の登録と管理を可能にするドメイン登録モジュールです。';
$lang['Domainnameapi.module_row']        = 'アカウント';
$lang['Domainnameapi.module_row_plural'] = 'アカウント';

// モジュール管理
$lang['Domainnameapi.add_module_row']                     = 'アカウントを追加';
$lang['Domainnameapi.manage.module_rows_title']           = 'アカウント';
$lang['Domainnameapi.manage.module_rows_heading.user']    = 'APIユーザー名';
$lang['Domainnameapi.manage.module_rows_heading.key']     = 'APIパスワード';
$lang['Domainnameapi.manage.module_rows_heading.options'] = 'オプション';
$lang['Domainnameapi.manage.module_rows.edit']            = '編集';
$lang['Domainnameapi.manage.module_rows.delete']          = '削除';
$lang['Domainnameapi.manage.module_rows.confirm_delete']  = 'このアカウントを削除してもよろしいですか？';
$lang['Domainnameapi.manage.module_rows_no_results']      = 'アカウントがありません。';
$lang['Domainnameapi.manage.sandbox_yes']                 = 'はい';
$lang['Domainnameapi.manage.sandbox_no']                  = 'いいえ';
$lang['Domainnameapi.manage.module_remote_info']          = '* アスタリスクでマークされた項目はDomainNameApiから来ており、"-"が表示される場合はパスワードが間違っているか、接続を確立できないことを意味します。';

// 行メタデータ
$lang['Domainnameapi.row_meta.user'] = 'APIユーザー名';
$lang['Domainnameapi.row_meta.key']  = 'APIパスワード';
$lang['Domainnameapi.row_meta.sandbox'] = 'テストモード';
$lang['Domainnameapi.row_meta.sandboxheader'] = 'テストモード / サンドボックスモード';
$lang['Domainnameapi.row_meta.sandboxwarning'] = 'テストモードでは、テスト環境からユーザーとパスワードを作成する必要があります。テスト用の特定の拡張子を管理できます（ com , net ,cc , xyz , info ,aero , org , tr , tc , blog, shop ）。テスト環境ユーザーURL：';
$lang['Domainnameapi.row_meta.userId'] = 'ユーザーID';
$lang['Domainnameapi.row_meta.userName'] = 'ユーザータイトル';
$lang['Domainnameapi.row_meta.userbalances'] = 'ユーザー残高';

// 行を追加
$lang['Domainnameapi.add_row.box_title']   = 'Domain Name Apiアカウントを追加';
$lang['Domainnameapi.add_row.basic_title'] = '認証設定';
$lang['Domainnameapi.add_row.add_btn']     = 'アカウントを追加';

// 行を編集
$lang['Domainnameapi.edit_row.box_title']   = 'DomainNameApiアカウントを編集';
$lang['Domainnameapi.edit_row.basic_title'] = '基本設定';
$lang['Domainnameapi.edit_row.add_btn']     = 'アカウントを更新';

// パッケージフィールド
$lang['Domainnameapi.package_fields.type']        = 'タイプ';
$lang['Domainnameapi.package_fields.type_domain'] = 'ドメイン登録';
$lang['Domainnameapi.package_fields.type_ssl']    = 'SSL証明書';
$lang['Domainnameapi.package_fields.tld_options'] = 'TLD';
$lang['Domainnameapi.package_fields.ns1']         = 'ネームサーバー1';
$lang['Domainnameapi.package_fields.ns2']         = 'ネームサーバー2';
$lang['Domainnameapi.package_fields.ns3']         = 'ネームサーバー3';
$lang['Domainnameapi.package_fields.ns4']         = 'ネームサーバー4';
$lang['Domainnameapi.package_fields.ns5']         = 'ネームサーバー5';

// サービス管理
$lang['Domainnameapi.tab_whois.title']                  = 'Whois';
$lang['Domainnameapi.tab_whois.section_Registrant']     = '登録者';
$lang['Domainnameapi.tab_whois.section_Administrative'] = '管理者';
$lang['Domainnameapi.tab_whois.section_Technical']      = '技術者';
$lang['Domainnameapi.tab_whois.section_Billing']        = '請求';
$lang['Domainnameapi.tab_whois.field_submit']           = 'Whois情報を更新';

$lang['Domainnameapi.tab_nameservers.title']        = 'ネームサーバー';
$lang['Domainnameapi.tab_nameserver.field_ns']      = 'ネームサーバー %1$s'; // %1$sはネームサーバー番号
$lang['Domainnameapi.tab_nameservers.field_submit'] = 'ネームサーバーを更新';

$lang['Domainnameapi.tab_settings.title']                         = '設定';
$lang['Domainnameapi.tab_settings.field_registrar_lock']          = 'レジストラーロック';
$lang['Domainnameapi.tab_settings.field_registrar_lock_yes']      = 'レジストラーロックを設定。不正な転送を防ぐために推奨。';
$lang['Domainnameapi.tab_settings.field_registrar_lock_no']       = 'ドメインが転送できるようにレジストラーロックを解除。';
$lang['Domainnameapi.tab_settings.field_whois_privacy']           = 'WHOISプライバシー';
$lang['Domainnameapi.tab_settings.field_whois_privacy_state_yes'] = '有効';
$lang['Domainnameapi.tab_settings.field_whois_privacy_state_no']  = '無効';
$lang['Domainnameapi.tab_settings.field_epp_code']                = 'EPPコード';
$lang['Domainnameapi.tab_settings.field_request_epp']             = 'EPPコード/転送キーを要求';
$lang['Domainnameapi.tab_settings.field_submit']                  = '設定を更新';

// エラー
$lang['Domainnameapi.!error.user.valid']               = 'ユーザー名を入力してください';
$lang['Domainnameapi.!error.key.valid']                = 'パスワードを入力してください';
$lang['Domainnameapi.!error.key.valid_connection']     = 'ユーザー名とパスワードの組み合わせが無効のようです';
$lang['Domainnameapi.!error.registrant_type.format']   = '登録者タイプを選択してください';
$lang['Domainnameapi.!error.registrant_vat_id.format'] = 'VAT番号を入力してください';
$lang['Domainnameapi.!error.siren_siret.format']       = 'SIREN/SIRET番号を入力してください';
$lang['Domainnameapi.!error.trademark_number.format']  = '商標番号を入力してください';

// ドメイン転送フィールド
$lang['Domainnameapi.transfer.domain']    = 'ドメイン名';
$lang['Domainnameapi.transfer.auth_info'] = 'EPPコード';

// ドメインフィールド
$lang['Domainnameapi.domain.domain'] = 'ドメイン名';

// ネームサーバーフィールド
$lang['Domainnameapi.nameserver.ns1'] = 'ネームサーバー1';
$lang['Domainnameapi.nameserver.ns2'] = 'ネームサーバー2';
$lang['Domainnameapi.nameserver.ns3'] = 'ネームサーバー3';
$lang['Domainnameapi.nameserver.ns4'] = 'ネームサーバー4';

// Whoisフィールド
$lang['Domainnameapi.whois.registrant.first_name']         = '名';
$lang['Domainnameapi.whois.registrant.last_name']          = '姓';
$lang['Domainnameapi.whois.registrant.company_name']       = '会社';
$lang['Domainnameapi.whois.registrant.address1']           = '住所1';
$lang['Domainnameapi.whois.registrant.address2']           = '住所2';
$lang['Domainnameapi.whois.registrant.city']               = '市区町村';
$lang['Domainnameapi.whois.registrant.state']              = '都道府県';
$lang['Domainnameapi.whois.registrant.postal_code']        = '郵便番号';
$lang['Domainnameapi.whois.registrant.country']            = '国';
$lang['Domainnameapi.whois.registrant.phone_country_code'] = '電話国コード';
$lang['Domainnameapi.whois.registrant.phone']              = '電話';
$lang['Domainnameapi.whois.registrant.fax_country_code']   = 'FAX国コード';
$lang['Domainnameapi.whois.registrant.fax']                = 'FAX';
$lang['Domainnameapi.whois.registrant.email']              = 'メール';

$lang['Domainnameapi.whois.technical.first_name']         = '名';
$lang['Domainnameapi.whois.technical.last_name']          = '姓';
$lang['Domainnameapi.whois.technical.company_name']       = '会社';
$lang['Domainnameapi.whois.technical.address1']           = '住所1';
$lang['Domainnameapi.whois.technical.address2']           = '住所2';
$lang['Domainnameapi.whois.technical.city']               = '市区町村';
$lang['Domainnameapi.whois.technical.state']              = '都道府県';
$lang['Domainnameapi.whois.technical.postal_code']        = '郵便番号';
$lang['Domainnameapi.whois.technical.country']            = '国';
$lang['Domainnameapi.whois.technical.phone_country_code'] = '電話国コード';
$lang['Domainnameapi.whois.technical.phone']              = '電話';
$lang['Domainnameapi.whois.technical.fax_country_code']   = 'FAX国コード';
$lang['Domainnameapi.whois.technical.fax']                = 'FAX';
$lang['Domainnameapi.whois.technical.email']              = 'メール';

$lang['Domainnameapi.whois.administrative.first_name']         = '名';
$lang['Domainnameapi.whois.administrative.last_name']          = '姓';
$lang['Domainnameapi.whois.administrative.company_name']       = '会社';
$lang['Domainnameapi.whois.administrative.address1']           = '住所1';
$lang['Domainnameapi.whois.administrative.address2']           = '住所2';
$lang['Domainnameapi.whois.administrative.city']               = '市区町村';
$lang['Domainnameapi.whois.administrative.state']              = '都道府県';
$lang['Domainnameapi.whois.administrative.postal_code']        = '郵便番号';
$lang['Domainnameapi.whois.administrative.country']            = '国';
$lang['Domainnameapi.whois.administrative.phone_country_code'] = '電話国コード';
$lang['Domainnameapi.whois.administrative.phone']              = '電話';
$lang['Domainnameapi.whois.administrative.fax_country_code']   = 'FAX国コード';
$lang['Domainnameapi.whois.administrative.fax']                = 'FAX';
$lang['Domainnameapi.whois.administrative.email']              = 'メール';

$lang['Domainnameapi.whois.billing.first_name']         = '名';
$lang['Domainnameapi.whois.billing.last_name']          = '姓';
$lang['Domainnameapi.whois.billing.company_name']       = '会社';
$lang['Domainnameapi.whois.billing.address1']           = '住所1';
$lang['Domainnameapi.whois.billing.address2']           = '住所2';
$lang['Domainnameapi.whois.billing.city']               = '市区町村';
$lang['Domainnameapi.whois.billing.state']              = '都道府県';
$lang['Domainnameapi.whois.billing.postal_code']        = '郵便番号';
$lang['Domainnameapi.whois.billing.country']            = '国';
$lang['Domainnameapi.whois.billing.phone_country_code'] = '電話国コード';
$lang['Domainnameapi.whois.billing.phone']              = '電話';
$lang['Domainnameapi.whois.billing.fax_country_code']   = 'FAX国コード';
$lang['Domainnameapi.whois.billing.fax']                = 'FAX';
$lang['Domainnameapi.whois.billing.email']              = 'メール';

// .UKドメインフィールド
$lang['Domainnameapi.domain.registrant_type']        = '法的タイプ';
$lang['Domainnameapi.domain.registrant_type.ind']    = 'イギリス個人';
$lang['Domainnameapi.domain.registrant_type.find']   = 'イギリス以外の個人';
$lang['Domainnameapi.domain.registrant_type.ltd']    = 'イギリス有限会社';
$lang['Domainnameapi.domain.registrant_type.plc']    = 'イギリス公開有限会社';
$lang['Domainnameapi.domain.registrant_type.ptnr']   = 'イギリスパートナーシップ';
$lang['Domainnameapi.domain.registrant_type.llp']    = 'イギリス有限責任パートナーシップ';
$lang['Domainnameapi.domain.registrant_type.ip']     = 'イギリス産業/協同組合登録会社';
$lang['Domainnameapi.domain.registrant_type.stra']   = 'イギリス個人事業主';
$lang['Domainnameapi.domain.registrant_type.sch']    = 'イギリス学校';
$lang['Domainnameapi.domain.registrant_type.rchar']  = 'イギリス登録慈善団体';
$lang['Domainnameapi.domain.registrant_type.gov']    = 'イギリス政府機関';
$lang['Domainnameapi.domain.registrant_type.other']  = 'イギリスエンティティ（その他）';
$lang['Domainnameapi.domain.registrant_type.crc']    = 'イギリス王室憲章による会社';
$lang['Domainnameapi.domain.registrant_type.fcorp']  = '外国組織';
$lang['Domainnameapi.domain.registrant_type.stat']   = 'イギリス法定機関FIND';
$lang['Domainnameapi.domain.registrant_type.fother'] = 'その他の外国組織';
$lang['Domainnameapi.domain.registration_number']    = '会社ID番号';
$lang['Domainnameapi.domain.trading_name']           = '登録者名';
