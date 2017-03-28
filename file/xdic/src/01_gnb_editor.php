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
<hr>
<!-- content -->
<div id="container">
    <!-- 입력기 -->
    <div class="write_lstw type" style="width:100%">
        <ul>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">A</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">Б</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">В</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">Г</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">Д</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">Е</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">Ё</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">Ж</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">З</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">И</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">Й</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">К</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">Л</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">М</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">Н</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">О</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">Ө</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">П</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">Р</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">С</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">Т</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">У</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">Ү</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">Ф</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">Х</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">Ц</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">Ч</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">Ш</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">Щ</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ъ</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">Ы</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">ь</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">Э</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">Ю</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk">Я</a></li>
            <li class="editor_lst"><a href="#" onclick="return false;" class="edit_lk"></a></li>
        </ul>
        <div class="write_lstw_rgt">
            <!-- [D] 버튼 활성화시 on추가 -->
            <a href="#" class="btn_edit"><span class="ico"></span><span class="u_hc">삭제</span></a>
            <a href="#" class="btn_edit2"><span class="ico"></span><span class="u_hc">대문자</span></a>
            <a href="#" class="btn_edit3"><span class="ico"></span><span class="u_hc">띄어쓰기</span></a>
            <a href="#" class="btn_srch">검색</a>
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