<?php $searchType='search'; $pageTitle='엔드페이지'; $menu='challenge'; include 'inc/header_fixed.php'; ?>

	<div class="lnb">
		<div class="nv1">
			<ul>
			<li><a href="#">요일별</a></li>
			<li><a href="#">장르별</a></li>
			<li class="on"><a href="#">베스트도전</a></li>
			<li><a href="#">MY</a></li>
			<li><a href="#">스마트툰 <em>N</em></a></li>
			</ul>
			<h2 class="hc">베스트도전</h2>
		</div>
	</div>

	<!-- [D] 장르별 메뉴 선택한 경우 opn 클래스 추가 -->
	<div class="lnb_sub flt_tab">
		<ul>
		<li><a href="#">전체</a></li>
		<li class="on"><a href="#">에피소드</a></li>
		<li><a href="#">옴니버스</a></li>
		<li><a href="#">스토리</a></li>
		<li><a href="#">일상</a></li>
		<li><a href="#">개그</a></li>
		<li><a href="#">판타지</a></li>
		<li><a href="#">액션</a></li>
		<li><a href="#">드라마</a></li>
		<li><a href="#">순정</a></li>
		<li><a href="#">감성</a></li>
		<li><a href="#">스릴러</a></li>
		<li><a href="#">시대극</a></li>
		<li><a href="#">스포츠</a></li>
		<li>&nbsp;</li>
		<li>&nbsp;</li>
		</ul>
		<a href="#" class="more"><span>장르별 접기/펼치기</span></a>
		<h3 class="u_hc">에피소드</h3>
	</div>
	</div>
	<div class="chh">
		<h1><span>골방 환상곡</span></h1>
		<div class="pl"><a href="#" class="btn_bx"><span class="pv">목록</span></a></div>
		<div class="pr"><a href="#" class="btn_bx">책갈피 등록</a></div>
	</div>
	<!-- [D] [D] 배경음악 플레이 중에는 클래스 on 추가 후 '배경음악 끄기'로 대체텍스트 교체
		<button type="button" class="btn_bgm on" title="배경음악 끄기">배경음악 끄기</button> -->
	<div class="top_bgm"><button type="button" class="btn_bgm" title="배경음악 켜기">배경음악 켜기</button></div>
</div>

<!-- ct  -->
<hr />
<div id="ct">
	<!-- [D] 배경음악 플레이 중에는 클래스 on 추가 후 '배경음악 끄기'로 대체텍스트 교체
		<button type="button" class="btn_bgm on" title="배경음악 끄기">배경음악 끄기</button> -->
	<button type="button" class="btn_bgm" title="배경음악 켜기">배경음악 켜기</button>
	<div class="toon_view_lst" id="toonLayer">
		<ul>
		<li><p><img src="http://imgcomic.naver.com/mobileugcimg/380190/171/7d458b623e6cff45439b4aaa8574e900_001_002.jpg" id="toon_1" alt="" class="fx2"></p>
		</li>
		</ul>
	</div>
	<p class="rpt_area"><a href="#">신고하기</a></p>

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
							<span class="thmb"><img src="http://imgcomic.naver.com/product/20853/CHARACTER/MOBILE_WEB_280442357_doll_120.jpg" width="60" height="60" alt=""></span>
							<span class="store"><em class="ico_npay">네이버 페이</em></span>
							<strong class="tit">마음의 소리 인형</strong>
							<span class="pay">27,200원</span>
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
								<!-- [D] 아이콘이 있는 경우 v2 클래스 추가 -->
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
								<span class="im_br"><span class="im_inbr"><img src="im/@tmp/@top_toon.png" width="71" height="42" alt=""></span></strong></span>
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
							<span class="thumb"><img src="im/@tmp/@new_toon.png" width="63" height="51" alt="" /><span class="ico_break">휴재</span></span>
							<p class="author">
								<strong>기타맨기타맨기타맨기타맨기타맨기타맨기타맨기타맨기타맨</strong>
								<span>손규호손규손규호손규</span>
							</p>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="thumb"><img src="im/@tmp/@new_toon.png" width="63" height="51" alt="" /><span class="ico_smart">스마트툰</span></span>
							<p class="author">
								<strong>기타맨</strong>
								<span>손규호</span>
							</p>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="thumb"><img src="im/@tmp/@new_toon.png" width="63" height="51" alt="" /></span>
							<p class="author">
								<strong>기타맨</strong>
								<span>손규호</span>
							</p>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="thumb"><img src="im/@tmp/@new_toon.png" width="63" height="51" alt="" /></span>
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
<hr />
<!-- //ct -->
<?php include 'inc/footer.php' ?>
<!-- 사용자 script 파일 시작 -->
<script type="text/javascript" src="http://jindo.nhncorp.com/docs/jindo-mobile/archive/latest/source/jindo.m.Touch.js" charset="utf-8"></script>
<script type="text/javascript" src="http://jindo.nhncorp.com/docs/jindo-mobile/archive/latest/source/flicking/jindo.m._FlickingAnimation_.js" charset="utf-8"></script>
<script type="text/javascript" src="http://jindo.nhncorp.com/docs/jindo-mobile/archive/latest/source/flicking/jindo.m._SlideFlicking_.js" charset="utf-8"></script>
<script type="text/javascript" src="http://jindo.nhncorp.com/docs/jindo-mobile/archive/latest/source/jindo.m.Flicking.js" charset="utf-8"></script>
<!-- 사용자 script 파일 끝 -->

<!-- [D] 마크업 테스트 스크립트 -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
	var $dummy = true;
	$(document).ready(function() {
		$('.more').click(function() {
			$(this).parent().toggleClass('opn');

			return false;
		});
	})
</script>

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