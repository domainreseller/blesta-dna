<?php

// 기본 정보
$lang['Domainnameapi.name']              = 'DomainNameApi';
$lang['Domainnameapi.description']       = 'DomainNameApi는 도메인 이름을 등록하고 관리할 수 있게 해주는 도메인 등록 모듈입니다.';
$lang['Domainnameapi.module_row']        = '계정';
$lang['Domainnameapi.module_row_plural'] = '계정';

// 모듈 관리
$lang['Domainnameapi.add_module_row']                     = '계정 추가';
$lang['Domainnameapi.manage.module_rows_title']           = '계정';
$lang['Domainnameapi.manage.module_rows_heading.user']    = 'API 사용자명';
$lang['Domainnameapi.manage.module_rows_heading.key']     = 'API 비밀번호';
$lang['Domainnameapi.manage.module_rows_heading.options'] = '옵션';
$lang['Domainnameapi.manage.module_rows.edit']            = '편집';
$lang['Domainnameapi.manage.module_rows.delete']          = '삭제';
$lang['Domainnameapi.manage.module_rows.confirm_delete']  = '이 계정을 삭제하시겠습니까?';
$lang['Domainnameapi.manage.module_rows_no_results']      = '계정이 없습니다.';
$lang['Domainnameapi.manage.sandbox_yes']                 = '예';
$lang['Domainnameapi.manage.sandbox_no']                  = '아니오';
$lang['Domainnameapi.manage.module_remote_info']          = '* 별표로 표시된 항목은 DomainNameApi에서 제공되며, "-"가 나타나면 비밀번호가 잘못되었거나 연결을 설정할 수 없음을 의미합니다.';

// 행 메타데이터
$lang['Domainnameapi.row_meta.user'] = 'API 사용자명';
$lang['Domainnameapi.row_meta.key']  = 'API 비밀번호';
$lang['Domainnameapi.row_meta.sandbox'] = '테스트 모드';
$lang['Domainnameapi.row_meta.sandboxheader'] = '테스트 모드 / 샌드박스 모드';
$lang['Domainnameapi.row_meta.sandboxwarning'] = '테스트 모드의 경우 테스트 환경에서 사용자와 비밀번호를 생성해야 합니다. 테스트용 특정 확장자를 관리할 수 있습니다 ( com , net ,cc , xyz , info ,aero , org , tr , tc , blog, shop ). 테스트 환경 사용자 URL :';
$lang['Domainnameapi.row_meta.userId'] = '사용자 ID';
$lang['Domainnameapi.row_meta.userName'] = '사용자 제목';
$lang['Domainnameapi.row_meta.userbalances'] = '사용자 잔액';

// 행 추가
$lang['Domainnameapi.add_row.box_title']   = 'Domain Name Api 계정 추가';
$lang['Domainnameapi.add_row.basic_title'] = '인증 설정';
$lang['Domainnameapi.add_row.add_btn']     = '계정 추가';

// 행 편집
$lang['Domainnameapi.edit_row.box_title']   = 'DomainNameApi 계정 편집';
$lang['Domainnameapi.edit_row.basic_title'] = '기본 설정';
$lang['Domainnameapi.edit_row.add_btn']     = '계정 업데이트';

// 패키지 필드
$lang['Domainnameapi.package_fields.type']        = '유형';
$lang['Domainnameapi.package_fields.type_domain'] = '도메인 등록';
$lang['Domainnameapi.package_fields.type_ssl']    = 'SSL 인증서';
$lang['Domainnameapi.package_fields.tld_options'] = 'TLD';
$lang['Domainnameapi.package_fields.ns1']         = '네임서버 1';
$lang['Domainnameapi.package_fields.ns2']         = '네임서버 2';
$lang['Domainnameapi.package_fields.ns3']         = '네임서버 3';
$lang['Domainnameapi.package_fields.ns4']         = '네임서버 4';
$lang['Domainnameapi.package_fields.ns5']         = '네임서버 5';

// 서비스 관리
$lang['Domainnameapi.tab_whois.title']                  = 'Whois';
$lang['Domainnameapi.tab_whois.section_Registrant']     = '등록자';
$lang['Domainnameapi.tab_whois.section_Administrative'] = '관리자';
$lang['Domainnameapi.tab_whois.section_Technical']      = '기술자';
$lang['Domainnameapi.tab_whois.section_Billing']        = '청구';
$lang['Domainnameapi.tab_whois.field_submit']           = 'Whois 정보 업데이트';

$lang['Domainnameapi.tab_nameservers.title']        = '네임서버';
$lang['Domainnameapi.tab_nameserver.field_ns']      = '네임서버 %1$s'; // %1$s는 네임서버 번호
$lang['Domainnameapi.tab_nameservers.field_submit'] = '네임서버 업데이트';

$lang['Domainnameapi.tab_settings.title']                         = '설정';
$lang['Domainnameapi.tab_settings.field_registrar_lock']          = '레지스트라 잠금';
$lang['Domainnameapi.tab_settings.field_registrar_lock_yes']      = '레지스트라 잠금 설정. 무단 전송을 방지하기 위해 권장됩니다.';
$lang['Domainnameapi.tab_settings.field_registrar_lock_no']       = '도메인이 전송될 수 있도록 레지스트라 잠금 해제.';
$lang['Domainnameapi.tab_settings.field_whois_privacy']           = 'WHOIS 개인정보 보호';
$lang['Domainnameapi.tab_settings.field_whois_privacy_state_yes'] = '활성화';
$lang['Domainnameapi.tab_settings.field_whois_privacy_state_no']  = '비활성화';
$lang['Domainnameapi.tab_settings.field_epp_code']                = 'EPP 코드';
$lang['Domainnameapi.tab_settings.field_request_epp']             = 'EPP 코드/전송 키 요청';
$lang['Domainnameapi.tab_settings.field_submit']                  = '설정 업데이트';

// 오류
$lang['Domainnameapi.!error.user.valid']               = '사용자명을 입력하세요';
$lang['Domainnameapi.!error.key.valid']                = '비밀번호를 입력하세요';
$lang['Domainnameapi.!error.key.valid_connection']     = '사용자명과 비밀번호 조합이 유효하지 않은 것 같습니다';
$lang['Domainnameapi.!error.registrant_type.format']   = '등록자 유형을 선택하세요';
$lang['Domainnameapi.!error.registrant_vat_id.format'] = 'VAT 번호를 입력하세요';
$lang['Domainnameapi.!error.siren_siret.format']       = 'SIREN/SIRET 번호를 입력하세요';
$lang['Domainnameapi.!error.trademark_number.format']  = '상표 번호를 입력하세요';

// 도메인 전송 필드
$lang['Domainnameapi.transfer.domain']    = '도메인 이름';
$lang['Domainnameapi.transfer.auth_info'] = 'EPP 코드';

// 도메인 필드
$lang['Domainnameapi.domain.domain'] = '도메인 이름';

// 네임서버 필드
$lang['Domainnameapi.nameserver.ns1'] = '네임서버 1';
$lang['Domainnameapi.nameserver.ns2'] = '네임서버 2';
$lang['Domainnameapi.nameserver.ns3'] = '네임서버 3';
$lang['Domainnameapi.nameserver.ns4'] = '네임서버 4';

// Whois 필드
$lang['Domainnameapi.whois.registrant.first_name']         = '이름';
$lang['Domainnameapi.whois.registrant.last_name']          = '성';
$lang['Domainnameapi.whois.registrant.company_name']       = '회사';
$lang['Domainnameapi.whois.registrant.address1']           = '주소 1';
$lang['Domainnameapi.whois.registrant.address2']           = '주소 2';
$lang['Domainnameapi.whois.registrant.city']               = '도시';
$lang['Domainnameapi.whois.registrant.state']              = '주/도';
$lang['Domainnameapi.whois.registrant.postal_code']        = '우편번호';
$lang['Domainnameapi.whois.registrant.country']            = '국가';
$lang['Domainnameapi.whois.registrant.phone_country_code'] = '전화 국가 코드';
$lang['Domainnameapi.whois.registrant.phone']              = '전화';
$lang['Domainnameapi.whois.registrant.fax_country_code']   = '팩스 국가 코드';
$lang['Domainnameapi.whois.registrant.fax']                = '팩스';
$lang['Domainnameapi.whois.registrant.email']              = '이메일';

$lang['Domainnameapi.whois.technical.first_name']         = '이름';
$lang['Domainnameapi.whois.technical.last_name']          = '성';
$lang['Domainnameapi.whois.technical.company_name']       = '회사';
$lang['Domainnameapi.whois.technical.address1']           = '주소 1';
$lang['Domainnameapi.whois.technical.address2']           = '주소 2';
$lang['Domainnameapi.whois.technical.city']               = '도시';
$lang['Domainnameapi.whois.technical.state']              = '주/도';
$lang['Domainnameapi.whois.technical.postal_code']        = '우편번호';
$lang['Domainnameapi.whois.technical.country']            = '국가';
$lang['Domainnameapi.whois.technical.phone_country_code'] = '전화 국가 코드';
$lang['Domainnameapi.whois.technical.phone']              = '전화';
$lang['Domainnameapi.whois.technical.fax_country_code']   = '팩스 국가 코드';
$lang['Domainnameapi.whois.technical.fax']                = '팩스';
$lang['Domainnameapi.whois.technical.email']              = '이메일';

$lang['Domainnameapi.whois.administrative.first_name']         = '이름';
$lang['Domainnameapi.whois.administrative.last_name']          = '성';
$lang['Domainnameapi.whois.administrative.company_name']       = '회사';
$lang['Domainnameapi.whois.administrative.address1']           = '주소 1';
$lang['Domainnameapi.whois.administrative.address2']           = '주소 2';
$lang['Domainnameapi.whois.administrative.city']               = '도시';
$lang['Domainnameapi.whois.administrative.state']              = '주/도';
$lang['Domainnameapi.whois.administrative.postal_code']        = '우편번호';
$lang['Domainnameapi.whois.administrative.country']            = '국가';
$lang['Domainnameapi.whois.administrative.phone_country_code'] = '전화 국가 코드';
$lang['Domainnameapi.whois.administrative.phone']              = '전화';
$lang['Domainnameapi.whois.administrative.fax_country_code']   = '팩스 국가 코드';
$lang['Domainnameapi.whois.administrative.fax']                = '팩스';
$lang['Domainnameapi.whois.administrative.email']              = '이메일';

$lang['Domainnameapi.whois.billing.first_name']         = '이름';
$lang['Domainnameapi.whois.billing.last_name']          = '성';
$lang['Domainnameapi.whois.billing.company_name']       = '회사';
$lang['Domainnameapi.whois.billing.address1']           = '주소 1';
$lang['Domainnameapi.whois.billing.address2']           = '주소 2';
$lang['Domainnameapi.whois.billing.city']               = '도시';
$lang['Domainnameapi.whois.billing.state']              = '주/도';
$lang['Domainnameapi.whois.billing.postal_code']        = '우편번호';
$lang['Domainnameapi.whois.billing.country']            = '국가';
$lang['Domainnameapi.whois.billing.phone_country_code'] = '전화 국가 코드';
$lang['Domainnameapi.whois.billing.phone']              = '전화';
$lang['Domainnameapi.whois.billing.fax_country_code']   = '팩스 국가 코드';
$lang['Domainnameapi.whois.billing.fax']                = '팩스';
$lang['Domainnameapi.whois.billing.email']              = '이메일';

// .UK 도메인 필드
$lang['Domainnameapi.domain.registrant_type']        = '법적 유형';
$lang['Domainnameapi.domain.registrant_type.ind']    = '영국 개인';
$lang['Domainnameapi.domain.registrant_type.find']   = '영국 외 개인';
$lang['Domainnameapi.domain.registrant_type.ltd']    = '영국 유한회사';
$lang['Domainnameapi.domain.registrant_type.plc']    = '영국 공개유한회사';
$lang['Domainnameapi.domain.registrant_type.ptnr']   = '영국 파트너십';
$lang['Domainnameapi.domain.registrant_type.llp']    = '영국 유한책임파트너십';
$lang['Domainnameapi.domain.registrant_type.ip']     = '영국 산업/협동조합 등록 회사';
$lang['Domainnameapi.domain.registrant_type.stra']   = '영국 개인 상인';
$lang['Domainnameapi.domain.registrant_type.sch']    = '영국 학교';
$lang['Domainnameapi.domain.registrant_type.rchar']  = '영국 등록 자선단체';
$lang['Domainnameapi.domain.registrant_type.gov']    = '영국 정부 기관';
$lang['Domainnameapi.domain.registrant_type.other']  = '영국 엔티티 (기타)';
$lang['Domainnameapi.domain.registrant_type.crc']    = '영국 왕실 헌장에 의한 회사';
$lang['Domainnameapi.domain.registrant_type.fcorp']  = '외국 조직';
$lang['Domainnameapi.domain.registrant_type.stat']   = '영국 법정 기관 FIND';
$lang['Domainnameapi.domain.registrant_type.fother'] = '기타 외국 조직';
$lang['Domainnameapi.domain.registration_number']    = '회사 ID 번호';
$lang['Domainnameapi.domain.trading_name']           = '등록자 이름';
