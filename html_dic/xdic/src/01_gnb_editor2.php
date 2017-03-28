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
</div>
<!-- //content -->
<hr>
<?php $goTop='hide';
include '00_footer_incl.php'; ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://view.gitlab.uit.nhncorp.com/SJong/ibjs/raw/master/js/ibjs.js"></script>
<script type="text/javascript" src="js/lnb.js"></script>
<script type="text/javascript">
    var aAutoComplet  = $(".write_lstw3");
    aAutoComplet[0].style.display = "block";
</script>
</body>
</html>