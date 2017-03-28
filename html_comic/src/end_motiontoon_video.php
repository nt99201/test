	<?php $pageTitle='모션툰> 엔드페이지'; $menu='challenge';$searchType='search'; include 'inc/header_fixed.php'; ?>

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
</div>
<!-- ct  -->
<hr>
<div id="ct">
	<div class="motiontoon_cont">
		<div class="toon_view_lst" id="toonLayer">
			<ul>
			<li><p><img src="http://imgcomic.naver.com/mobilewebimg/22045/494/23b5e82e387bee83dc1968d757828d52_001.jpg" id="toon_0" alt="" class="fx2" fixedheight="2204"></p></li>
			<li><p><img src="http://imgcomic.naver.com/mobilewebimg/22045/494/23b5e82e387bee83dc1968d757828d52_002.jpg" data-lazy-src="http://imgcomic.naver.com/mobilewebimg/22045/494/23b5e82e387bee83dc1968d757828d52_002.jpg" id="toon_1" alt="" class="fx2" fixedheight="1936" data-lazy-org="http://static.naver.net/m/comic/im/2012/bg_transparency.png" data-lazy-loaded="true" data-lazy-resized="true"></p>
			</li>
			<li><p><img src="http://imgcomic.naver.com/mobilewebimg/22045/494/23b5e82e387bee83dc1968d757828d52_008.jpg" id="toon_7" alt="" class="fx2" fixedheight="1224"></p></li>
			</ul>
		</div>
	</div>
	<div class="motiontoon_cont_etc">
		<!-- 동영상 광고 > 모바일 비확장,재생(스크롤형) -->
		<!-- [D] 비디오 확장인 경우 body에 video_full 클래스 추가 -->
		<div class="ads_sc video">
			<div class="ads_image_area">
				<a href="#" target="_blank">
					<img src="im/ad_image.jpg" width="100%" height="100%" alt="AD Image">
				</a>
			</div>
			<div class="ads_video_area">
				<div class="ads_video_inner">
					<video id="video" class="ads_video" width="100%" height="100%" autoplay poster="im/ad_video.jpg">
						<source src="videos/mikethefrog.mp4" type="video/mp4">
						<source src="videos/mikethefrog.webm" type="video/webm">
						<source src="videos/mikethefrog.ogv" type="video/ogv">
						<p class="no_support"><a href="#"><img src="im/ad_video.jpg" width="100%" height="100%" alt="AD"></a></p>
					</video>

					<div class="player_func_area">
						<!-- 재생시간 -->
						<!--<span class="play_time">
							<em class="time_current">00:12</em>
							<span class="time_separator">|</span>
							<em class="time_duration">03:45</em>
						</span>-->
						<!-- //재생시간 -->

						<!-- 프로그레스 바 -->
						<!--<div class="progress_bar_area">
							<div class="progress_play" style="left:0;width:18.3%"></div>
							<div class="progress_load" style="left:0;width:46.4%"></div>
						</div>-->
						<!-- //프로그레스 바 -->

						<!-- 버튼영역 -->
						<div class="progress_controls">
							<!-- 재생/일시정지 버튼 -->
							<!--<div class="play_area">
								<a href="#none" class="btn_play" title="재생"><em class="u_hc">재생</em></a>
								<a href="#none" class="btn_pause" style="display:none"><em class="u_hc">일시정지</em></a>
							</div>-->
							<!-- //재생/일시정지 버튼 -->

							<!-- 볼륨 버튼 -->
							<div class="volume_area">
								<a href="#none" class="btn_volume" style="display:none" title="Sound on"><span class="ico_volume">Sound on</span></a>
								<!-- [D] 소리 끌 경우 off 클래스 추가 -->
								<a href="#none" class="btn_volume" title="Sound off"><span class="ico_volume off">Sound off</span></a>
							</div>
							<!-- //볼륨 버튼 -->
						</div>
						<!-- //버튼영역 -->
					</div>

					<!--<span class="video_mask"></span>-->
					<span class="video_shadow"></span>
					<span class="video_outline"></span>
				</div>

				<!-- 확장 버튼 -->
				<!--<div class="full_area">
					<a href="#none" class="btn_clse" target="_balnk" title="전체화면 닫기">전체화면 닫기</a>
				</div>
				<a href="#" class="btn_event">이벤트 참여</a>-->
			</div>

			<a href="#" class="adsby"><img src="im/txt_ads.png" width="100" height="9" alt="Ads by Naver WEBTOON 네이버 홈으로 이동"></a>
		</div>
		<!-- //광고가 있는 경우 -->
		<div class="toon_notice">
			<span class="ico_notice">공지</span>
			<span class="txt"><em>6</em>월 <em>28</em>일 연재 재개 예정입니다. 예정입니다. 예정입니다. 예정입니다. 예정입니다. 예정입니다. 예정입니다. 예정입니다. 예정입니다.</span>
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
</div>
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