<?php $searchType='search'; $pageTitle='엔드페이지> 베스트 도전'; $menu='challenge'; include 'inc/header.php'; ?>

<!-- [D] 장르별 메뉴 선택한 경우 opn 클래스 추가 -->
<div class="lnb_sub flt_tab">
	<ul>
	<li><a href="#">전체</a></li>
	<li><a href="#">에피소드</a></li>
	<li><a href="#">옴니버스</a></li>
	<li class="on"><a href="#">스토리</a></li>
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
	<h3 class="u_hc">스토리</h3>
</div>
<!-- ct  -->
<hr />
<div id="ct">
	<div class="chh">
		<h1><span>골방 환상곡</span></h1>
		<div class="pl"><a href="#" class="btn_bx"><span class="pv">목록</span></a></div>
		<div class="pr"><a href="#" class="btn_bx">책갈피 등록</a></div>
	</div>
	<!-- <div class="im_c"><img src="im/@tmp/@toon.gif" alt="" class="fx"></div> -->
	<div class="im_c"><img src="http://mwig.naver.com/alcatraz_mig/m.jsp?src=http://static.comic.naver.com/staticImages/COMICWEB/NAVER/img/mobile/w_1_1.jpg&type=w1" alt="" class="fx2"></div>
	<!-- [D] 완결인 경우 frst_view에 end 클래스 추가 -->
	<a href="#" class="frst_view v1">다음화 먼저 보기</a>
	<p class="rpt_area"><a href="JavaScript:doReport();">신고하기</a></p>
	<?php include 'inc/comment.php'; ?>
</div>
<hr />
<!-- [D] 마크업 테스트 스크립트 -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
	var $dummy = true;
	$(document).ready(function() {
		$('.more').click(function() {
			$(this).parent().toggleClass('opn');

			return false;
		});
	});
</script>

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