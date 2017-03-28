<?php include '../inc/ua.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="<?php echo $uametaValue; ?>">
<title>네이버 웹툰</title>
<!--<link rel="stylesheet" type="text/css" href="css/<?php echo $ualinkValue; ?>">-->
<link rel="stylesheet" type="text/css" href="../css/<?php echo $ualinkValue; ?>">
<!--<?php if($ualinkDefaultValue) echo '<link rel="stylesheet" type="text/css" href="css/'.$ualinkDefaultValue.'">';?>-->
<link rel="stylesheet" type="text/css" href="../css/comment.css">
<link rel="stylesheet" type="text/css" href="../css/viewer.css">
<link rel="stylesheet" type="text/css" href="../css/mediaScreen.css">
<!--<link charset="utf-8" rel="stylesheet" type="text/css" href="http://m.like.naver.com/css/likeIt.css">
<link type="text/css" rel="stylesheet" href="http://m.webtoon.like.naver.com/css/likeIt_COMIC.css?v=2014072418" charset="utf-8">
<link rel="stylesheet" type="text/css" href="http://m.webtoon.like.naver.com/css/likeItButton_COMIC.css">-->
<link type="text/css" rel="stylesheet" href="http://comic.like.naver.com/static20160428193013/css/list/mobile/likeit.css" charset="utf-8">
<!--<link type="text/css" rel="stylesheet" href="http://comic.like.naver.com/static20160428193013/css/list/mobile/likeit_comic.css" charset="utf-8">-->
<link type="text/css" rel="stylesheet" href="../css/likeItList_COMIC.css" charset="utf-8">
</head>

<?php
    $search_txt = strpos($page,"comment");
    $search_txt2 = strpos($page,"cut_viewer");

    if(($search_txt !== false) && ($search_txt2 == false)){?>
        <!-- [D] 안내 팝업 노출시 body에 class="popup_bg" 추가 -->
        <body class="<?php echo $uacssValue; ?>">
    <? }?>

    <div id="u_skip" class="u_skip">
        <a href="#ct">본문 바로가기</a>
    </div>

    <div class="viewer">
    <!--[D] viewer_main 페이지 -->
    <?php if(($page == 'main') || ($page == strpos($page,"comment"))) { ?>
        <header class="viewer_gnb">
            <h1 class="tit">8화 시타를 위하여</h1>
            <a href="#" class="btn_prev" title="이전"><span>이전</span></a>
            <a href="#" class="btn_info" title="댓글"><span>댓글</span></a>
        </header>
    <? }else if($page == 'view_full'){ ?>
        <!-- [D] viewer_full 페이지 -->
        <div class="viewer_gnb">
            <h1 class="tit">전체보기<em>(142)</em></h1>
            <a href="#" class="btn_clse" title="닫기"><span>닫기</span></a>
            <!--span class="bgl"></span>
            <span class="bgr"></span>
            <span class="top_bg"></span-->
        </div>
    <?}?>
    <header>
        <!-- 로고 -->
        <h1 class="u_ts">
            <a href="#"><span>웹툰</span></a><a href="#"><span>웹소설</span></a>
        </h1>
        <!-- //로고 -->

        <!-- 네이버 홈 -->
        <a href="#" class="u_gnbh"><span class="u_vc">네이버</span></a>
        <!-- //네이버 홈 -->

	    <!-- 검색 -->
	    <!-- [D] u_hsbt_smart 추가로 검색 버튼 위치 스마트 툰 페이지에 맞게 조정 -->
        <?php $search_txt = strpos($searchType,'search');
        if($search_txt !== false){ ?>
            <!-- [D] 검색창 접기: <a href="#u_gnbw" class="u_hsbt u_hsbt_fd"><div><span class="u_vc">검색창 접기</span></div></a> -->
            <a href="#none" class="u_hsbt u_hsbt_op"><div><span class="u_vc">검색창 펼치기</span></div></a>
        <?php } ?>

        <!-- [D] 통합검색 버튼 유무에 따라,
             * 통합검색 버튼이 있는 경우: class="u_hs"
             * 통합검색 버튼이 없는 경우: class="u_hs u_hs_nous" -->
        <fieldset id="u_hs" class="u_hs" style="display:none;">
            <legend class="u_hc">검색</legend>
            <div class="u_hsw">
                <!-- [D] placeholder는 HTML5 DTD에서만 사용 가능. 그 외 DTD에서는 스크립트로 처리.
                     * HTML5 : <input ... placeholder="안내메시지" class="u_it">
                     * 그 외 : <input ... value="안내메시지" class="u_it u_sd"> -->
                        <div class="u_itw">
                            <div class="u_itwi">
                                <input type="text" name="msearch" title="" class="u_it" placeholder="제목 또는 작가명 검색">
                                <button type="button" class="u_clrt">입력 내용 삭제</button>
                            </div>
                        </div>
                <button type="submit" class="u_hssbt u_hssbt_ss"><span class="u_vc">검색</span></button>
                <button type="submit" class="u_hssbt u_hssbt_us">통합검색</button>
            </div>
        </fieldset>

        <!-- 자동완성 기능 -->
        <div id="autocompleteArea" class="atcp atcpt" style="display:none">
		<div class="atcpw">
			<div class="atcpw2">
			    <ul>
				    <li class="atcpli"><a href="#none" class="atcpa"><em>돌아온</em> 액션 퍼즐 패밀리</a>
						<input id="hidden_input" type="hidden" value="돌아온 액션 퍼즐 패밀리">
						<span class="tp">웹툰</span>
					</li>

				    <li class="atcpli"><a href="#none" class="atcpa"><em>돌아온</em> 액션 퍼즐 패밀리 공략</a>
						<input id="hidden_input1" type="hidden" value="돌아온 액션 퍼즐 패밀리 공략">
						<span class="tp">베스트도전</span>
					</li>

				    <li class="atcpli"><a href="#none" class="atcpa"><em>돌아온</em> 럭키짱</a>
						<input id="hidden_input2" type="hidden" value="돌아온 럭키짱">
						<span class="tp">만화</span>
					</li>

				    <li class="atcpli"><a href="#none" class="atcpa"><em>돌아온</em> 탕자</a>
						<input id="hidden_input3" type="hidden" value="돌아온 탕자">
						<span class="tp">만화</span>
					</li>

				    <li class="atcpli"><a href="#none" class="atcpa"><em>돌아온</em> 일지매</a>
						<input id="hidden_input4" type="hidden" value="돌아온 일지매">
						<span class="tp">만화</span>
					</li>
			    </ul>
			    <p class="atbt"><button id="closeAutocomplete" type="button" class="atbt_b">닫기</button></p>
			</div>
		</div>
	</div>
        <!-- //자동완성 기능 -->

        <!-- MY -->
        <div class="my_page"><a href="#"><span>MY</span></a></div>
        <!-- //MY -->

	    <!-- 검색결과 헤더 -->
        <?php if($searchType == 'search rult'){ ?>
        <!-- [D] 검색결과 헤더인 경우 v2 클래스 추가 -->
		<div class="lnb v2">
        <?
            echo '<a href="#" class="btn_prev"><span>이전</span></a>
            <h2>검색 결과 <em>56</em>건</h2>';
        ?>
		</div>
        <? } ?>
        <!-- //검색결과 -->
    </header>