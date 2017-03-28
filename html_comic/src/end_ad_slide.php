<?php $pageTitle='엔드페이지'; $menu='week';$searchType='search'; include 'inc/header.php'; ?>

<div class="lnb_sub bx_tab">
	<ul>
	<li class="on"><a href="#none">월</a></li>
	<li><a href="#none">화</a></li>
	<li><a href="#none">수</a></li>
	<li><a href="#none">목</a></li>
	<li><a href="#none">금</a></li>
	<li><a href="#none">토</a></li>
	<li><a href="#none">일</a></li>
	<li><a href="#none">완결</a></li>
	</ul>
	<h3 class="u_hc">월</h3>
</div>

<div class="chh">
	<h1><span>골방 환상곡 골방 환상곡 골방 환상곡 골방 환상곡</span></h1>
	<div class="pl"><a href="#" class="btn_bx"><span class="pv">목록</span></a></div>
	<div class="pr"><a href="#" class="btn_bx">책갈피 등록</a></div>
</div>
<!-- ct  -->
<hr>
<div id="ct">
	<div class="toon_view_lst" id="toonLayer">
		<ul>
		<li><p><img src="http://imgcomic.naver.com/mobileugcimg/380190/171/7d458b623e6cff45439b4aaa8574e900_001_002.jpg" id="toon_1" alt="" class="fx2"></p>
		</li>
		</ul>
	</div>

	<!-- 슬라이드 형 광고 -->
	<div class="ads_sc slide">
		<!-- [D] 각 슬라이드의 너비 및 여백 정보를 합산하여 style의 width에 대입, 슬라이드 위치 값은 개발에서 구현 필요(다른코드는 마크업 확인용) -->
		<div class="slide_wrap">
			<div id="webtoonAd" class="slide_item" style="position:relative;width:50%">
				<div class="eg-flick-container" style="width:500%">
					<div class="eg-flick-panel" style="width:33.33%">
						<a href="#appLink" class="ad_link"><img src="im/@tmp/@thumb550x550.jpg" width="100%" alt="AD"></a>
						<div class="item_dsc">
							<a href="#none" class="item_txt"><span>빅뱅콘서트를실시간라이브가나다라마바사아자차카타호잇</span></a>
							<a href="#none" class="item_btn"><span>앱 설치하기</span></a>
						</div>
					</div>
					<div class="eg-flick-panel" style="width:33.33%">
						<!--<a href="#appLink" class="ad_link"><img src="im/@tmp/@thumb550x550_v2.jpg" width="100%" height="100%" alt="AD"></a>-->
						<a href="#appLink" class="ad_link"><img src="im/@tmp/@tmp_line.jpg" width="100%" alt="AD"></a>
						<div class="item_dsc">
							<a href="#none" class="item_txt"><span>선미X포토그래퍼 폴라 앨범</span></a>
							<a href="#none" class="item_btn"><span>지금 예약하기</span></a>
						</div>
					</div>
					<div class="eg-flick-panel" style="width:33.33%">
						<a href="#appLink" class="ad_link"><img src="im/@tmp/@thumb550x550_v3.jpg" width="100%" alt="AD"></a>
						<div class="item_dsc">
							<a href="#none" class="item_txt"><span></span></a>
							<a href="#none" class="item_btn"><span>앱 설치하기</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a href="#" class="adsby"><img src="im/txt_ads.png" width="100" height="9" alt="Ads by Naver WEBTOON 네이버 홈으로 이동"></a>
	</div>
	<!-- //슬라이드 형 광고 -->

	<!-- [D] 스토어에 연동된 작품인 경우 노출 -->
	<div class="toon_notice">
        <span class="ico_store">store</span>
		<a href="#" class="notice_lnk"><span class="txt">스토어에서 다음 화를 <strong class="spot_txt">미리</strong> 만나보세요</span></a>
	</div>

	<?php include 'inc/comment.php'; ?>

	<!-- 파생상품 -->
	<div class="other_webtoon">
		<h3><span class="tit1"><em>놓지마 정신줄</em> 관련 상품</span></h3>
		<!-- [D]상품 리스트 플리킹 영역 -->
		<div id="mflick" style="overflow:hidden;height:178px">
			<div class="flick-container">
				<div class="flick-ct">
					<ul class="product_lst2">
					<li>
						<a href="#">
							<span class="thmb thmb_book"><img src="http://dev.ui.naver.com/tmp/?118x178_default_y_FFB4B4_50" width="59" height="89" alt=""></span>
							<span class="store">책</span>
							<strong class="tit">1놓지마 정신줄 명랑철학놓지마 정신줄 명랑철학</strong>
							<span class="etc">예담프렌드</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="thmb thmb_ost"><img src="http://dev.ui.naver.com/tmp/?120x120_default_y_FFB4B4_50" width="60" height="60" alt=""></span>
							<span class="store">뮤직</span>
							<strong class="tit">여왕의 교실 OST</strong>
							<span class="etc">이영현</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="thmb"><img src="http://dev.ui.naver.com/tmp/?120x120_default_y_FFB4B4_50" width="60" height="60" alt=""></span>
							<span class="store">N스토어</span>
							<strong class="tit">놓지마</strong>
							<span class="pay">무료</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="thmb"><img src="http://dev.ui.naver.com/tmp/?120x120_default_y_FFB4B4_50" width="60" height="60" alt=""></span>
							<span class="store"><em class="ico_npay">네이버 페이</em></span>
							<strong class="tit">놓지마</strong>
							<span class="pay">무료</span>
						</a>
					</li>
					</ul>
				</div>
				<div class="flick-ct">
					<ul class="product_lst2">
					<li>
						<a href="#">
							<span class="thmb thmb_book"><img src="http://dev.ui.naver.com/tmp/?118x178_default_y_FFB4B4_50" width="59" height="89" alt=""></span>
							<span class="store">책</span>
							<strong class="tit">2놓지마 정신줄 명랑철학놓지마 정신줄 명랑철학</strong>
							<span class="etc">예담프렌드</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="thmb thmb_ost"><img src="http://dev.ui.naver.com/tmp/?120x120_default_y_FFB4B4_50" width="60" height="60" alt=""></span>
							<span class="store">뮤직</span>
							<strong class="tit">여왕의 교실 OST</strong>
							<span class="etc">이영현</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="thmb"><img src="http://dev.ui.naver.com/tmp/?120x120_default_y_FFB4B4_50" width="60" height="60" alt=""></span>
							<span class="store">N스토어</span>
							<strong class="tit">놓지마</strong>
							<span class="pay">무료</span>
						</a>
					</li>
					</ul>
				</div>
				<div class="flick-ct">
					<ul class="product_lst2">
					<li>
						<a href="#">
							<span class="thmb thmb_book"><img src="http://dev.ui.naver.com/tmp/?118x178_default_y_FFB4B4_50" width="59" height="89" alt=""></span>
							<span class="store">책</span>
							<strong class="tit">3놓지마 정신줄 명랑철학놓지마 정신줄 명랑철학</strong>
							<span class="etc">예담프렌드</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="thmb thmb_ost"><img src="http://dev.ui.naver.com/tmp/?120x120_default_y_FFB4B4_50" width="60" height="60" alt=""></span>
							<span class="store">뮤직</span>
							<strong class="tit">여왕의 교실 OST</strong>
							<span class="etc">이영현</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="thmb"><img src="http://dev.ui.naver.com/tmp/?120x120_default_y_FFB4B4_50" width="60" height="60" alt=""></span>
							<span class="store">N스토어</span>
							<strong class="tit">놓지마</strong>
							<span class="pay">무료</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="thmb"><img src="http://dev.ui.naver.com/tmp/?120x120_default_y_FFB4B4_50" width="60" height="60" alt=""></span>
							<span class="store"><em class="ico_npay">네이버 페이</em></span>
							<strong class="tit">놓지마</strong>
							<span class="pay">무료</span>
						</a>
					</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- //[D]상품 리스트 플리킹 영역 -->
		<div class="u_pg3">
			<a href="#" class="prev">이전</a>
			<em class="u_pg3_pg">1 <span>/ 5</span></em>
			<a href="#" class="next">다음</a>
		</div>
	</div>
	<!-- //파생상품 -->

	<!-- 최신 업데이트 웹툰 -->
	<div class="other_webtoon">
		<h3><span class="tit1">최신 업데이트 웹툰</span></h3>
		<div id="recentlyTitleflick" class="flick_wrap">
			<div class="recentlyTitleflick-container">
				<div id="layer1" class="recentlyTitleflick-panel" style="position:absolute;-webkit-transition:-webkit-transform;left:0;z-index:10">
					<ul class="toon_lst lst2">
					<li>
						<div class="lst">
							<a href="#">
								<span class="im_br"><span class="im_inbr"><img src="im/@tmp/@top_toon.png" width="71" height="42" alt=""></span></span>
								<div class="toon_info">
									<h4>
										<span class="toon_name"><strong><span>신의탑신의탑신의신의탑신의탑신의 탑신의</span></strong></span>
										<span class="aside_info"><span class="ico_adult2">19세 이상 이용가</span><span class="ico_smart">스마트툰</span></span>
									</h4>
									<p class="sub_info">SUI<span class="bar">|</span>2부 1화</p>
								</div>
							</a>
						</div>
					</li>
					<li>
						<div class="lst">
							<a href="#">
								<span class="im_br"><span class="im_inbr"><img src="im/@tmp/@top_toon.png" width="71" height="42" alt=""></span></span>
								<div class="toon_info">
									<h4>
										<span class="toon_name"><strong><span>신의탑</span></strong></span>
									</h4>
									<p class="sub_info">SUI<span class="bar">|</span>2부 1화</p>
								</div>
							</a>
						</div>
					</li>
					<li>
						<div class="lst">
							<a href="#">
								<span class="im_br"><span class="im_inbr"><img src="im/@tmp/@top_toon.png" width="71" height="42" alt=""></span></span>
								<div class="toon_info">
									<h4>
										<span class="toon_name"><strong><span>치즈인더트랩 치즈인더트랩 치즈인더트랩 치즈인더트랩</span></strong></span>
									</h4>
									<p class="sub_info">순끼<span class="bar">|</span>3부 61화 관계의 방향(5) 3부 61화 관계의 방향(5)</p>
								</div>
							</a>
						</div>
					</li>
					</ul>
				</div>
			</div>
			<div style="position:absolute;width:1px;height:100%;left:500px;z-index:100;"></div>
			<div style="position:absolute;width:1px;height:100%;left:1000px;z-index:100;"></div>
		</div>
		<div class="u_pg3">
			<a href="#" class="prev">이전</a>
			<em class="u_pg3_pg">1 <span>/ 5</span></em>
			<a href="#" class="next">다음</a>
		</div>
	</div>
	<!-- //최신 업데이트 웹툰 -->

	<!-- 이 웹툰 독자들이 많이 본 웹툰 -->
	<div class="other_webtoon">
		<h3><span class="tit2">이 웹툰 독자들이 많이 본 웹툰</span></h3>
		<div id="recommendGenreflick">
			<div class="recommendGenreflick-container">
				<div id="layer1" class="recommendGenreflick-panel" style="position:absolute;-webkit-transition:-webkit-transform;left:0;z-index:10">
					<ul class="toon_lst2">
					<li>
						<a href="#">
							<span class="thumb"><img src="im/@tmp/@new_toon.png" width="63" height="51" alt=""><span class="ico_break">휴재</span></span>
							<p class="author">
								<strong>기타맨기타맨기타맨기타맨기타맨기타맨기타맨기타맨기타맨</strong>
								<span>손규호손규손규호손규</span>
							</p>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="thumb"><img src="im/@tmp/@new_toon.png" width="63" height="51" alt=""><span class="ico_smart">스마트툰</span></span>
							<p class="author">
								<strong>기타맨</strong>
								<span>손규호</span>
							</p>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="thumb"><img src="im/@tmp/@new_toon.png" width="63" height="51" alt=""></span>
							<p class="author">
								<strong>기타맨</strong>
								<span>손규호</span>
							</p>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="thumb"><img src="im/@tmp/@new_toon.png" width="63" height="51" alt=""></span>
							<p class="author">
								<strong>기타맨</strong>
								<span>손규호</span>
							</p>
						</a>
					</li>
					</ul>
				</div>
			</div>
			<div style="position:absolute;width:1px;height:100%;left:500px;z-index:100;"></div>
			<div style="position:absolute;width:1px;height:100%;left:1000px;z-index:100;"></div>
		</div>
		<div class="u_pg3">
			<a href="#" class="prev">이전</a>
			<em class="u_pg3_pg">1 <span>/ 5</span></em>
			<a href="#" class="next">다음</a>
		</div>
	</div>
	<!-- //이 웹툰 독자들이 많이 본 웹툰 -->
</div>
<hr>
<!-- //ct -->
<?php include 'inc/footer.php' ?>
<!-- 사용자 script 파일 시작 -->
<script type="text/javascript" src="http://jindo.nhncorp.com/docs/jindo-mobile/archive/latest/source/jindo.m.Touch.js" charset="utf-8"></script>
<script type="text/javascript" src="http://jindo.nhncorp.com/docs/jindo-mobile/archive/latest/source/flicking/jindo.m._FlickingAnimation_.js" charset="utf-8"></script>
<script type="text/javascript" src="http://jindo.nhncorp.com/docs/jindo-mobile/archive/latest/source/flicking/jindo.m._SlideFlicking_.js" charset="utf-8"></script>
<script type="text/javascript" src="http://jindo.nhncorp.com/docs/jindo-mobile/archive/latest/source/jindo.m.Flicking.js" charset="utf-8"></script>
<!-- 사용자 script 파일 끝 -->

<!-- Sample 실행 script 코드 -->
<script type="text/javascript">
var nDelay = jindo.m.getDeviceInfo().android? 1000: 0;
window.onload = function(){
	setTimeout(function(){
		/*@code title="JavaScript"*/
		oFlicking = new jindo.m.Flicking('mflick',{
				nDefaultIndex:0,
				sContentClass : 'ct',
				nDuration : 1000
		});
	}, nDelay);
}
</script>
<!-- // Sample 실행 script 코드 끝 -->
</body>
</html>