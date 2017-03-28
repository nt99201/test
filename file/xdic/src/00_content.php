<?php if(!$page) { ?>
<style type="text/css">
	.file_list{width:300px;margin:30px auto;border-top:1px solid #1c1c1c}
	.file_list li{border:1px solid #000;border-top:0;background:#009966}
	.file_list li.noti{padding:5px 0 5px 10px;color:#fff;font-size:11px;}
	.file_list li a{display:block;padding:5px 0 5px 10px;color:#fff}
    .file_list li:nth-child(2){background:#3300FF}
    .file_list li:nth-child(3),.file_list li:nth-child(4),.file_list li:nth-child(5){background:#3366FF}
    .file_list li:nth-child(6),.file_list li:nth-child(7),.file_list li:nth-child(8),
    .file_list li:nth-child(9),.file_list li:nth-child(10),.file_list li:nth-child(11){background:#3366CC}
    .file_list li:nth-child(12),.file_list li:nth-child(13),.file_list li:nth-child(14),
    .file_list li:nth-child(15),.file_list li:nth-child(16),.file_list li:nth-child(17),
	.file_list li:nth-child(18),.file_list li:nth-child(19),.file_list li:nth-child(20),
	.file_list li:nth-child(21),.file_list li:nth-child(22),.file_list li:nth-child(23){background:#660099}
	.file_list li:nth-child(24),.file_list li:nth-child(25),.file_list li:nth-child(26),
	.file_list li:nth-child(27),.file_list li:nth-child(28),.file_list li:nth-child(29),
    .file_list li:nth-child(30),.file_list li:nth-child(31),.file_list li:nth-child(32),
    .file_list li:nth-child(33),.file_list li:nth-child(34),.file_list li:nth-child(35){background:#663366}
    .file_list li:nth-child(36),.file_list li:nth-child(37){background:#666633}
    .file_list li:nth-child(38),.file_list li:nth-child(39),.file_list li:nth-child(40),
    .file_list li:nth-child(41),.file_list li:nth-child(42),.file_list li:nth-child(43){background:#CC6600}
	.file_list li:nth-child(44),.file_list li:nth-child(45),.file_list li:nth-child(46),
	.file_list li:nth-child(47),.file_list li:nth-child(48),.file_list li:nth-child(49),
	.file_list li:nth-child(50),.file_list li:nth-child(51),.file_list li:nth-child(52),
	.file_list li:nth-child(53){background:#CC9933}
</style>
<ul class="file_list">
<li class="noti">모바일 레이아웃입니다.<br> PC버전은 우측하단 버튼을 클릭하세요.</li>
<?php
	$fileNames = array(
	    '03_main.php' => '메인',
	    '03_main_banner.php' => '레이어 : 즐겨찾기',
	    '03_main_language_ly.php' => '레이어 : 신규 언어 설정',
	    '03_main_kh_ly.php' => '레이어 : 캄보디아 웹폰트설정',
	    '03_main_intro_new.php' => '사전이용 tip',
	    '02_entry.php' => '엔트리 : 초기진입',
	    '02_entry2.php' => '엔트리 : 예문더보기 - 폰트사이즈 기본',
	    '02_entry3.php' => '엔트리 : 단어더보기',
	    '02_entry4.php' => '엔트리 : 동일 표제어 있음',
	    '02_entry4_2.php' => '엔트리 : 동일 표제어 없음',
	    '02_entry5.php' => '엔트리 : 표제어 - 오픈사전 있음',
	    '02_entry5_2.php' => '엔트리 : 표제어 - 오픈사전 없음',
	    '02_entry6.php' => '엔트리 : 파생어',
	    '02_entry7.php' => '엔트리 : 이용자 참여번역 - 뜻 하나',
	    '02_entry8.php' => '엔트리 : 이용자 참여번역 - 뜻 여러개',
	    '02_entry_kr.php' => '엔트리 : 한글 키워드',
	    '02_entry_tmp.php' => '엔트리 : 활용형 템플릿',
	    '04_srch.php' => '검색결과',
	    '04_srch_kr.php' => '검색결과 : 한러',
	    '04_srch2.php' => '검색결과 : 탭별',
	    '04_srch_nodata.php' => '검색결과 : 검색결과 없음',
	    '04_srch_nodata2.php' => '검색결과 : 단어검색 결과 없음',
	    '04_srch_recom.php' => '검색결과 : 추천어',
	    '04_srch_recom2.php' => '검색결과 : 추천어 - 오픈사전',
	    '04_srch_recom3.php' => '검색결과 : 추천어 - 외부 사전 검색',
	    '04_srch_proof.php' => '검색결과 : 교정어',
	    '04_srch_proof2.php' => '검색결과 : 교정어2',
	    '04_srch3.php' => '검색결과 : 이용자 참여 표제어',
	    '04_srch4.php' => '검색결과 : 오픈사전 검색결과 노출',
	    '05_helpdic.php' => '보조사전',
	    '05_helpdic_ly.php' => '보조사전 : 레이어',
	    '06_noti.php' => '서비스점검 : 접속불가',
	    '06_noti2.php' => '서비스점검 : 정기점검',
	    '06_noti3.php' => '서비스점검 : 임시점검',
	    '06_noti4.php' => '서비스점검 : 오픈점검',
	    '06_noti5.php' => '서비스점검 : 페이지를 찾을 수 없음',
	    '06_noti6.php' => '서비스점검 : 데이터 전송지연',
	    '08_cmt.php' => '내용오류신고 - 모바일',
	    '08_pc_cmt2.php' => '내용오류신고 - PC',
	    '08_report_w.php' => '의견 및 내용오류신고 : 내용오류신고 - 등록',
	    '08_report_w2.php' => '의견 및 내용오류신고 : 반영이력',
	    '08_report_w_none.php' => '의견 및 내용오류신고 : 반영이력 없음',
	    '08_report_w3.php' => '의견 및 내용오류신고 : 접속불가',
	    '08_report_w4.php' => '의견 및 내용오류신고 : 로딩화',
	    'pop_claim.html' => '[팝업] 내용 오류 신고 - 등록',
	    'pop_claim2.html' => '[팝업] 내용 오류 신고 - 반영이력 보기',
	    'pop_claim3.html' => '[팝업] 내용 오류 신고 - 내역 없음',
	    'pop_cmt_all.html' => '[팝업] 의견 및 내용오류신고 : 내 의견모음',
	    'pop_cmt_all2.html' => '[팝업] 의견 및 내용오류신고 : 내 의견모음 - 도움말 레이어',
	    'pop_cmt_all3.html' => '[팝업] 의견 및 내용오류신고 : 내 의견모음 - 등록된 의견 없음',
	    'pop_abbr.html' => '[팝업] 라틴어 사전 약호표',
	    'pop_win.html' => '[팝업] Windows 한국어 입력 설정'
	);
	foreach ($fileNames as $key => $val) {
	    if($key == "03_main_banner.php" || $key == "03_main_language_ly.php" || $key == "03_main_kh_ly.php") { ?>
    <li><a href="?page=03_main.php&layer=<?= $key ?>"><?= $val ?></a></li>
<?php } else if($key == "05_helpdic_ly.php") { ?>
    <li><a href="?page=05_helpdic.php&layer=<?= $key ?>"><?= $val ?></a></li>
<?php } else if(strpos($key,"pop_") !== false) { ?>
    <li><a href="<?= $key ?>" target="_blank"><?= $val ?></a></li>
<?php } else { ?>
    <li><a href="?page=<?= $key ?>"><?= $val ?></a></li>
<?php }}} else { include $page;	} ?>
</ul>
