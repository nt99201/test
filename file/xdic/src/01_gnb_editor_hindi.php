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
    <div class="write_lstw keybd hidic"  style="position: fixed; vertical-align: bottom;left: 0px;bottom: 0px;width: 100%;z-index: 200;" >
        <ul class="page1">
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; ौ &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; ै &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; ा &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; ी &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; ू &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; ब &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; ह &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; ग &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; द &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; ज &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; ड &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; ो &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; े &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; ् &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; ि &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; ु &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; प &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; र &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; क &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; त &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; च &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; ट &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; ं &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; म &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; न &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; व &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; ल &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; स &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; य &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; ़ &nbsp;</a></li>
        </ul>
        <ul class="page2" style="display:none;">
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; औ &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; ऐ &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; आ &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; ई &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; ऊ &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; भ &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; ः &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; घ &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; ध &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; झ &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; ढ &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; ओ &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; ए &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; अ &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; इ &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; उ &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; फ &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; ृ &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; ख &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; थ &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; छ &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; ठ &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; ँ &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; ज &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; ण &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; क &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; ऋ &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; श &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; ष &nbsp;</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">&nbsp; ॅ &nbsp;</a></li>
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