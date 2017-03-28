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
	<!-- <div class="im_c"><img src="im/@tmp/@toon.gif" alt="" class="fx"></div> -->
	<!--div class="im_c"><img src="http://mwig.naver.com/alcatraz_mig/m.jsp?src=http://static.comic.naver.com/staticImages/COMICWEB/NAVER/img/mobile/w_1_1.jpg&type=w1" alt="" class="fx2"></div-->

	<div class="toon_view_lst" id="toonLayer">
		<ul>
		<li><p><img src="http://imgcomic.naver.com/mobileugcimg/380190/171/7d458b623e6cff45439b4aaa8574e900_001_002.jpg" id="toon_1" alt="" class="fx2"></p>
		</li>
		</ul>
	</div>

	<!-- 동영상 광고 > 모바일 비확장,재생(스크롤형) -->
	<!-- [D] 비디오 확장인 경우 body에 video_full 클래스 추가 -->
	<div class="ads_sc video">
		<div class="ads_image_area">
			<a href="#" target="_blank">
				<img src="im/ad_image.jpg" width="100%" height="auto" alt="AD Image">
			</a>
		</div>
		<div class="ads_video_area">
			<div class="ads_video_inner">
				<!-- [D] 비 지원 환경시 노출(노출시 on 클래스 추가) -->
				<div class="support_no"><a href="#"><img src="im/ad_video.jpg" width="100%" height="100%" alt="AD"></a></div>
				<div class="support">
					<video id="video" class="ads_video" width="100%" height="100%" poster="im/ad_video.jpg" src="videos/mikethefrog.mp4">
						<source src="videos/mikethefrog.mp4" type="video/mp4">
						<source src="videos/mikethefrog.webm" type="video/webm">
						<source src="videos/mikethefrog.ogv" type="video/ogv">
					</video>

					<div class="video_btn_area">
					<a href="#" class="btn_replay"><em class="ico_replay"></em><span>이어 보기</span></a>
					<!--<a href="#" class="btn_replay"><em class="ico_replay"></em><span>다시 보기</span></a>-->
					<a href="#" class="btn_event2"><em class="ico_event"></em><span>이벤트 참여</span></a>
					<!--<a href="#" class="btn_dnld"><em class="ico_dnld"></em><span>다운로드</span></a>
					<a href="#" class="btn_info"><em class="ico_info"></em><span>더보기</span></a>-->
				</div>

					<!--<span class="video_mask"></span>-->
					<span class="video_shadow"></span>
					<span class="video_outline"></span>
				</div>
			</div>

			<!-- 확장 버튼 -->
			<!--<div class="full_area">
				<a href="#none" class="btn_clse" target="_balnk" title="전체화면 닫기">전체화면 닫기</a>
			</div>
			<a href="#" class="btn_event">이벤트 참여</a>-->

			<!-- [D] 딤드 활성화시 on 클래스 추가 -->
			<div class="ly_dim_video_full on"></div>
		</div>

		<a href="#" class="adsby"><img src="im/txt_ads.png" width="100" height="9" alt="Ads by Naver WEBTOON 네이버 홈으로 이동"></a>
	</div>
	<!-- //광고가 있는 경우 -->

	<!-- [D] 스토어에 연동된 작품인 경우 노출 -->
	<div class="toon_notice">
		<span class="ico_store">store</span>
		<span class="txt">이 작품은 스토어에서 더 즐길 수 있습니다.</span>
        <a href="#"><span class="ico_go">스토어 바로가기</span></a>
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