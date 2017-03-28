<?php include '00_ua_incl.php'; ?>
<!doctype html>
<html lang="ko">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="<?php echo $uametaValue; ?>">
<!-- [D] 별도의 title UX 가이드가 없는 경우, 다음과 같이 title을 작성해주세요.
     * 메뉴: 현재 페이지의 제목
     * 브랜드명 서비스: 서비스명 -->
<title><?php echo $pageTitle; ?></title>
<link rel="stylesheet" type="text/css" href="include/css/gnb.css">
<link rel="stylesheet" type="text/css" href="css/comment.css">
<link rel="stylesheet" type="text/css" href="css/common.css">
<link id="spi_style_m_standard" rel="stylesheet" type="text/css" href="http://spi.naver.net/css/20130725/spi_unity_m_20130725.css">

</head>
<body class="<?php echo $uacssValue; ?>"><!-- [M] 모바일경우 클래스 없음 , 작은창 : mini, 일반 pc : pc , style="min-width:980px"-->
<a href="#container" class="skip_to_content" tabindex="2">본문 바로가기</a>
<div id="wrap" role="banner" class="header_wrap">
<?php include '00_header_incl_input.php'; ?>
<?php include '00_lnb.php'; ?>
</div>
<!-- 햄버거 메뉴 영역 -->
<!-- [D] 햄버거 영역 display:block으로 변경시, dmm 클래스 영역도 display:block으로 변경 -->
<div id="side_menu_nav" style="display:none">
    <nav class="sidenav"></nav>
</div>
<div id="dmm" class="dmm" style="display:none"></div>
</div>
<hr>
<!-- content -->
<div id="container">
    <!-- 입력기 -->
    <div class="write_lstw keybd thdic"  style="position: fixed; vertical-align: bottom;left: 0px;bottom: 0px;width: 100%;z-index: 200;" >
        <ul class="page1">
            <!-- 태국어 입력기 이슈 : 문자앞뒤로 &nbsp; 삽입또는 공간을 삽입시 pc용 크롬에서 깨짐, 일부 기기에서 꺠짐 현상 발견 -->
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ๅ</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">/</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">_</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ภ</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ถ</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ุ</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ึ</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ค</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ต</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">จ</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ข</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ช</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ๆ</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ไ</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ำ</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">พ</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ะ</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ั</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ี</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ร</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">น</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ย</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">บ</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ล</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ฟ</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ห</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ก</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ด</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">เ</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">้</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">่</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ส</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">า</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ว</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ง</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ฃ</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ผ</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ป</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">แ</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">อ</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ิ</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ื</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ท</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ม</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ใ</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ฝ</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk"></a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk"></a></li>
        </ul>
        <ul class="page2" style="display:none;">
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">+</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">๑</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">๒</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">๓</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">๔</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ู</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">฿</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">๕</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">๖</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">๗</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">๘</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">๙</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">๐</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">"</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ฎ</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ฑ</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ธ</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ํ</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">๊</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ณ</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ฯ</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ญ</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ฐ</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">,</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ฤ</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ฆ</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ฏ</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">โ</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ฌ</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">็</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">๋</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ษ</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ศ</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ซ</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">.</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ฅ</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">(</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">)</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ฉ</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ฮ</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ฺ</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">์</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">?</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ฒ</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ฬ</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ฦ</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk"></a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk"></a></li>
        </ul>
        <div class="write_lstw_rgt">
            <!-- [D] 버튼 활성화시 on추가 -->
            <a href="#" class="btn_edit"><span class="ico"></span><span class="u_hc">대문자</span></a>
            <a href="#" class="btn_edit2"><span class="ico"></span><span class="u_hc">띄어쓰기</span></a>
            <a href="#" class="btn_edit3"><span class="ico"></span><span class="u_hc">삭제</span></a>
        </div>
    </div>
    <!-- //입력기 -->
</div>
<!-- //content -->
<hr>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://view.gitlab.uit.nhncorp.com/SJong/ibjs/raw/master/js/ibjs.js"></script>
<script type="text/javascript" src="js/textInput.js"></script>
<script type="text/javascript">
    var aTextInputsBottom  = $(".write_lstw");
    for(var index=0; index<aTextInputsBottom.length;index++){
        aTextInputsBottom[index].style.display = "block";
    }
</script>
</body>
</html>