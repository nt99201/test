<?php include '../inc/ua.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="<?php echo $uametaValue; ?>">
<title>네이버 웹툰</title>
<link rel="stylesheet" type="text/css" href="../css/<?php echo $ualinkValue; ?>">
<?php if($ualinkDefaultValue) echo '<link rel="stylesheet" type="text/css" href="css/'.$ualinkDefaultValue.'">';?>
<link rel="stylesheet" type="text/css" href="../css/comment.css">
<link rel="stylesheet" type="text/css" href="../css/viewer_app.css">
<link rel="stylesheet" type="text/css" href="../css/mediaScreen_app.css">
<!--<link charset="utf-8" rel="stylesheet" type="text/css" href="http://m.like.naver.com/css/likeIt.css">-->
<link type="text/css" rel="stylesheet" href="http://comic.like.naver.com/static20150723122953/css/likeIt.css" charset="utf-8">
<link type="text/css" rel="stylesheet" href="http://comic.like.naver.com/static20150723122953/css/likeIt_COMIC.css" charset="utf-8">

</head>

<? if($page='comment'){?>
<body class="viewer_cmnt">
<?}else{?>
<!-- [D] 안내 팝업 노출시 body에 class="popup_bg" 추가 -->
<body class="<?php echo $uacssValue; ?>">
<?}?>
<div id="u_skip" class="u_skip">
    <a href="#ct">본문 바로가기</a>
</div>

<div class="viewer">
<!--[D] viewer_main 페이지 -->
<?php if($page == 'main'){ ?>
    <header class="viewer_gnb">
        <h1 class="tit">8화 시타를 위하여</h1>
        <a href="#" class="btn_prev" title="이전"><span>이전</span></a>
        <a href="#" class="btn_info" title="댓글"><span>댓글</span></a>
    </header>
<? } ?>

<!-- [D] viewer_full 페이지 -->
<?php if($page == 'view_full'){ ?>
    <header class="viewer_gnb">
        <h1 class="tit">전체보기<em>(142)</em></h1>
        <a href="#" class="btn_clse" title="닫기"><span>닫기</span></a>
        <!--span class="bgl"></span>
        <span class="bgr"></span>
        <span class="top_bg"></span-->
    </header>
<? } ?>

<!-- [D] viewer_comment 페이지 -->
<?php if($page == 'comment'){ ?>
    <header class="viewer_gnb" style="position:fixed">
        <h1 class="tit">별점·댓글</h1>
        <a href="#" class="btn_prev" title="이전"><span>이전</span></a>
        <a href="#" class="btn_replay" title="다시보기"><span>다시보기</span></a>
        <!--span class="bgl"></span>
        <span class="bgr"></span>
        <span class="top_bg"></span-->
    </header>
<? } ?>
<!-- [D] viewer_comment2 페이지 -->
<?php if($page == 'comment2'){ ?>
    <header class="viewer_gnb">
        <h1 class="tit">댓글 <em>(142)</em></h1>
        <a href="#" class="btn_prev" title="이전"><span>이전</span></a>
        <a href="#" class="btn_clse" title="닫기"><span>닫기</span></a>
        <!--span class="bgl"></span>
        <span class="bgr"></span>
        <span class="top_bg"></span-->
    </header>
<? } ?>
