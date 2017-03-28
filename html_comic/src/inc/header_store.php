<?php include 'inc/ua.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="<?php echo $uametaValue; ?>">
<meta name="format-detection" content="telephone=no">
<title><?php echo $pageTitle;?> : 네이버 웹툰</title>

<!-- [D] 리뷰 페이지에서만 comment.css 사용 -->
<link rel="stylesheet" type="text/css" href="../css/comment.css">
<link rel="stylesheet" type="text/css" href="../css/wt_store_common.css">
<link rel="stylesheet" type="text/css" href="../css/wt_store.css">
<link charset="utf-8" rel="stylesheet" type="text/css" href="http://m.like.naver.com/css/likeIt.css">
<link type="text/css" rel="stylesheet" href="http://m.like.naver.com/css/likeIt_COMICSTORE.css?v=2014072418" charset="utf-8">
<link charset="utf-8" rel="stylesheet" type="text/css" href="http://m.like.naver.com/css/likeItButton_COMICSTORE.css?v=20140722091017">

<!-- 마크업 확인용 스크립트 -->
<script type="text/javascript" charset="utf-8" src="../js/jindo.desktop.min.js"></script>
<script type="text/javascript" charset="utf-8" src="../js/jindo_mobile_component.js"></script>
<script type="text/javascript" charset="utf-8" src="../js/jquery-ui.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="../js/behavior.js"></script>
<!-- //마크업확인용 스크립트 -->

<script type="text/javascript">
	function init_socialplugin() {
		var d = document.head ? document.head : document.getElementsByTagName("head")[0];
		var s = document.createElement("script");
		var today = new Date();
		var dd = today.getDate();
		var mm = today.getMonth()+1;
		var yyyy = today.getFullYear();
		if (dd < 10) { dd = '0' + dd; }
		if (mm < 10) { mm = '0' + mm; }
		s.src = ("http://spi.naver.net/r/release/socialplugin_m_v1.js?" + yyyy + mm + dd);
		/*s.src = ("http://spi.naver.net/js/release/socialplugin_unity_m_v1.js?" + yyyy + mm + dd);*/
		s.charset = "utf-8";
		d.appendChild(s);
	}

	function draw_socialplugin() {
		var spi1 = new SocialPlugIn();
		spi1.drawSpiLayer(htInitData1, 'spiLayer1');
	}

	var htInitData1 = {
		style  : "m_standard",
		evkey  : "news",
		servicename : "네이버 뉴스",
		title  : "NHN, 모바일게임 '라인팝' 1000만 다운로드 돌파",
		source : "http://news.naver.com/main/read.nhn?mode=LSD&mid=shm&sid1=105&oid=018&aid=0002695872",
		me2key : "br87oEH9Qw6UlQ2Uysn6ZA",
		tags   : ["태그1", "태그2", "태그3"]
		,me : {
			//display : "off",
			feedInfo        : "뉴스가", // 이 ###이/가 마음에 드셨다면
			popupType 		: "B",
			callbackUrl     : "/popupSample_js.html",
			targetUrl       : "/subscribe/applyFeedRelation.nhn",
			serviceId 		: "navercast",
			feedGroupId		: "004",
			feedGroupName 	: "오늘의 미술",
			feedId 			: ["001","002"],
			feedName 		: ["걸작1","걸작2"],
			//feedId 			: ["001"],
			//feedName 		: ["걸작1"],
			selected 		: ["Y"]
			//feedType      : [] // optional in cafe service
		}
		//,bookmark : { display : "off" }
		//,me2day : { display : "off" }
		//,postbtn : {display: "off"}
		,mail : {
			//display : "off",
			srvid   : "news",
			srvurl  : "http://news.naver.com/main/tool/mailContents.nhn?oid=092&aid=0001990166"
		}
		,cafe : {
			//display : "off",
			sourceType : "3",
			sourceTitle : "출처"
		}
		,blog : {
			//display : "off",
			blogId : "naver",
			sourceType : "3",
			sourceTitle : "출처"
		}
		//,memo : { display : "off" }
		//,calendar : { display : "off" }
		,me2post : {
			//display : "off",
			//shortUrl : "off"
		}
		//,facebook : { display : "off" }
		//,twitter : { display : "off" }
		//,yozm : { display : "off" }
		,band : { display : "on" }
	};
</script>

</head>
<body class="<?php echo $uacssValue; ?>" onload="init_socialplugin();">
<div id="u_skip" class="u_skip">
	<a href="#ct">본문 바로가기</a>
</div>

<div id="AD_WEBTOON_MOBILEWEB_UP" class="da_sec">
	<a href="#" style="background:url(http://adcreative.naver.com/ad3/1124/1124771/20160121033820-OmeJ2UWK_1.jpg) repeat-x;">
		<span id="nbp_da_img" style="display:block;width:100%;height:50px;background:url(http://adcreative.naver.com/ad3/1124/1124771/20160121033820-OmeJ2UWK_1.jpg) repeat-x;background-size:auto 50px;-webkit-background-size:1px 50px;text-decoration:none;text-align:center;">
			<img src="http://adcreative.naver.com/ad3/1124/1124771/20160121033820-7NXU3KGK_1.jpg" width="320" height="50" alt="신의탑 게임 소문 들었어? 사전등록하면 한정판 아이템 지급!" style="vertical-align:top;border:none">
		</span>
	</a>
</div>

<header>
	<!-- 로고 -->
	<h1 class="u_ts">
		<a href="#"><span>웹툰</span></a><a href="#"><span>웹소설</span></a>
	</h1>
	<!-- //로고 -->

	<!-- 네이버 홈 -->
	<a href="#" class="u_gnbh"><span>네이버</span></a>
	<!-- //네이버 홈 -->

	<!-- 검색 -->
	<!--[D] u_hsbt_smart 추가로 검색 버튼 위치 스마트 툰 페이지에 맞게 조정 -->
	<?php $search_txt = strpos($searchType,'search');
	if($search_txt !== false){ ?>
		<!-- [D] 검색창 접기: <a href="#u_gnbw" class="u_hsbt u_hsbt_fd"><div><span class="u_vc">검색창 접기</span></div></a> -->
		<a href="#u_hs" class="u_hsbt u_hsbt_op"><div><span class="u_vc">검색창 펼치기</span></div></a>
	<?php } ?>
	<form action="#">
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
								<input type="text" name="msearch" title="" class="u_it"  placeholder="제목 또는 작가명 검색">
								<button type="button" class="u_clrt">입력 내용 삭제</button>
							</div>
						</div>
				<button type="submit" class="u_hssbt u_hssbt_ss"><span class="u_vc">검색</span></button>
				<button type="submit" class="u_hssbt u_hssbt_us">통합검색</button>
			</div>
		</fieldset>
	</form>

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
	<nav>
	<?php
		$search_txt = strpos($menu,'my');
		if($menu != ''){
			if($search_txt !== false){
	?>
				<div class="lnb">
					<?php

						$search_txt = strpos($menu,"detail");
						$search_txt2 = strpos($menu,"end");
						$search_txt3 = strpos($menu,"ticket");
						if($search_txt){
							// 작품별 보기 상세인 경우
							echo '<a href="#" class="btn_prev"><span>이전</span></a>
							<h2 class="ells">W.I.T.C.H - 마법소녀 위치 W.I.T.C.H - 마법소녀 위치 W.I.T.C.H - 마법소녀 위치 W.I.T.C.H - 마법소녀 위치 W.I.T.C.H - 마법소녀 위치</h2>';
						}else if($search_txt2){
							echo '<h2>' . $pageTitle .'</h2>';
						}else if($search_txt3){
							echo '<a href="#" class="btn_prev"><span>이전</span></a>
							<h2>자유이용권 구매</h2>';
						}else{

							if(strpos($menu,"comic")){
							echo '<span class="my_lnb">
								<a href="#" class="on">MY 웹툰</a>
								<a href="#">MY 스토어</a>
								</span>';
							}else{
								echo '<span class="my_lnb">
								<a href="#">MY 웹툰</a>
								<a href="#" class="on">MY 스토어</a>
								</span>
								<a href="#" class="btn_lnk"><span>스토어<em class="u_hc">이동</em></span></a>';
							}
							echo '<h2 class="u_hc">선택한 메뉴명</h2>';
						}
					?>
				</div>
			<? } else {?>

			<div class="lnb bx_tab">
				<ul>
					<?php switch ($menu) {
						case 'main':
							echo'<li class="on"><a href="#">홈</a></li>
								<li><a href="#">웹툰</a></li>
								<li><a href="#">베스트도전</a></li>
								<li><a href="#">게임<span class="ico_new">신규</span></a></li>
								<li><a href="#">스토어</a></li>';
							break;
						case 'week':
							echo'<li><a href="#">홈</a></li>
								<li class="on"><a href="#">웹툰</a></li>
								<li><a href="#">베스트도전</a></li>
								<li><a href="#">게임<span class="ico_new">신규</span></a></li>
								<li><a href="#">스토어</a></li>';
							break;
						case 'challenge':
							echo'<li><a href="#">홈</a></li>
								<li><a href="#">웹툰</a></li>
								<li class="on"><a href="#">베스트도전</a></li>
								<li><a href="#">게임<span class="ico_new">신규</span></a></li>
								<li><a href="#">스토어</a></li>';
							break;
						case 'store':
							echo'<li><a href="#">홈</a></li>
								<li><a href="#">웹툰</a></li>
								<li><a href="#">베스트도전</a></li>
								<li><a href="#">게임</a></li>
								<li class="on"><a href="#">스토어<span>신규</span></a></li>';
							break;
						case 'my':
							echo'<li><a href="#">홈</a></li>
								<li><a href="#">웹툰</a></li>
								<li><a href="#">베스트도전</a></li>
								<li><a href="#">게임<span class="ico_new">신규</span></a></li>
								<li><a href="#">스토어</a></li>';
							break;
						default:
							echo'';
							break;
					} ?>
				</ul>
				<h2 class="u_hc">선택한 메뉴명</h2>
			</div>
		<? }}else{ ?>

		<? } ?>
	</nav>
</header>