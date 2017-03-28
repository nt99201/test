<?php include '../inc/ua.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="<?php echo $uametaValue; ?>">
<title>네이버 웹툰</title>
<!--<link rel="stylesheet" type="text/css" href="../css/<?php echo $ualinkValue; ?>">-->
<!--<link rel="stylesheet" type="text/css" href="../css/<?php echo $ualinkDefaultValue; ?>">-->
<link rel="stylesheet" type="text/css" href="../css/viewer.css">
<link rel="stylesheet" type="text/css" href="../css/comment_comic_w.css">
<style type="text/css">
@media screen and (orientation:landscape){
    .cut_img img{width:auto !important}
}
@media screen and (min-width:768px){
    .cut_img img{height:100% !important}
}
</style>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="../js/behavior.js"></script>
</head>
<!-- [D] 앱> 뷰어 댓글 페이지의 경우 body에 class="viewer_cmnt" 추가 -->
<body naver_screen_capture_injected="true">
    <div class="viewer cuttoon">
        <header class="viewer_gnb" style="position:fixed">
            <h1 class="tit">컷댓글 (<em>97,463</em>)</h1>
            <a href="#" class="btn_prev" title="이전"><span>이전</span></a>
            <a href="#" class="btn_fresh" title="새로고침"><span>새로고침</span></a>
        </header>
        <!-- ct  -->
        <div id="ct">
            <div class="commentDiv">
                <div class="cut_img">
                    <!-- [D] 이곳에 배경색 칼라를 넣어주세요 -->
                    <span class="align_middle" style="background:#000"><span class="align_cont"><img src="http://alpha.imgcomic.naver.com/mobilewebimg/484159/1/a4141f4607f1fb74a1349baf6d14fa8f_008.jpg" width="100%" alt="컷툰 이미지"></span></span>
                </div>

                <!-- 공통댓글 2.0 -->
                <?php include '../inc/comment2.0_v2.php'; ?>
                <!-- //공통댓글 2.0 -->
            </div>
        </div>
        <!-- //ct -->
    </div>
</body>
</html>