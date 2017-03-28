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
<!--<link rel="stylesheet" type="text/css" href="../css/comment.css">-->
<link rel="stylesheet" type="text/css" href="../css/comment_comic_w.css">
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="../js/behavior.js"></script>
</head>

<!-- [D] 앱> 뷰어 댓글 페이지의 경우 body에 class="viewer_cmnt" 추가 -->
<body naver_screen_capture_injected="true">
    <div class="viewer cuttoon">
        <header class="viewer_gnb" style="position:fixed">
            <h1 class="tit">댓글 (<em>97,463</em>)</h1>
            <a href="#" class="btn_prev" title="이전"><span>이전</span></a>
            <a href="#" class="btn_fresh" title="새로고침"><span>새로고침</span></a>
        </header>
<!--
        <nav class="comment_nav">
            <a href="#" id="bestTab" class="on"><em>BEST</em> 댓글</a><a href="#" id="newTab" class="">전체 댓글</a>
            <h2 class="u_hc">BEST 댓글</h2>
        </nav>
-->
        <!-- ct  -->
        <div id="ct">
            <div class="commentDiv">
                <!-- 공통댓글 2.0 -->
                <!-- [D] 베스트 댓글 최대 15개 -->
                <?php include '../inc/comment2.0_v2.php'; ?>
                <!-- //공통댓글 2.0 -->
            </div>
        </div>
        <!-- //ct -->
    </div>
</body>
</html>