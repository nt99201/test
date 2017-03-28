<?php
$php_self = basename($_SERVER["PHP_SELF"]);
$file_name = basename(__FILE__);

if($php_self == $file_name){
	$search_none = hide;
	$people_result = hide;
	$btn_area = hide;
	echo('<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no,target-densitydpi=medium-dpi">
<title>풋터영역</title>
<link rel="stylesheet" href="../css/w.css">
</head>
<body>');
}
?>

<?php if($footer_line !=''){ ?>
	<div class="u_ft">
<?}else{ ?>
	<div class="u_ft u_ft_none">
<?} ?>

	<div class="u_hsft">
		<!-- 검색 -->
		<form action="#" role="search">
			<!-- [D] 통합검색 버튼 유무에 따라,
				 * 통합검색 버튼이 있는 경우: class="u_hs"
				 * 통합검색 버튼이 없는 경우: class="u_hs u_hs_nous" -->
			<fieldset class="u_hs">
				<legend class="u_hc">검색</legend>
				<div class="u_hsw">
					<div class="u_itw">
						<div class="u_itwi">
							<input type="text" name="msearch" class="u_it" placeholder="제목 또는 작가명 검색">
							<button type="button" class="u_clrt">입력 내용 삭제</button>
						</div>
					</div>
					<button type="submit" class="u_hssbt u_hssbt_ss"><span class="u_vc">카페검색</span></button>
					<button type="submit" class="u_hssbt u_hssbt_us">통합검색</button>
				</div>
			</fieldset>
		</form>
		<!-- //검색 -->

		<div class="u_ftsw">
			<?
				if($menu=='store'){
					echo'<a href="#" class="u_ftsa u_ftsa2"><span class="u_ico"></span>북스 앱 설치</a>';
				}else{
					echo '<a href="#" class="u_ftsa"><span class="u_ico"></span>웹툰 앱 설치</a>';
				}
			?>
			<a href="#" class="u_ftst"><span class="u_ico"></span>맨위로</a>
		</div>
	</div>

	<?php if($menu =='store'){ ?>
		<footer role="contentinfo">
			<p id="u_ftlkw" class="u_ftlkw">
				<a href="#" class="u_ftlk">로그인</a>
				<a href="#" class="u_ftlk">전체 앱</a>
				<a href="#u_gnbuw2" class="u_ftlkbt">전체서비스</a>
			</p>

			<div class="ft_info">
				<div class="ft_box">
					<p class="copyright_info">스토어에서 판매되는 콘텐츠의 저작권은 저자 또는 제공처에 있으며, 이를 무단 이용하는 경우 저작권법 등에 따라 법적책임을 질 수 있습니다.</p>
					<dl class="business_info">
					<dt>사업자등록번호 :</dt>
					<dd><em>220-81-62517</em></dd>
					<dt>통신판매업 신고번호 :</dt>
					<dd>경기성남 제 <em>2006-692</em>호</dd>
					<dt>대표이사 :</dt>
					<dd>김상헌</dd>
					<dt>주소 :</dt>
					<dd>경기도 성남시 분당구 불정로 6 네이버 그린팩토리</dd>
					<dt>고객센터 :</dt>
					<dd><em>1588-3820</em></dd>
					</dl>
					<ul class="if_lnk">
					<li><a href="http://www.ftc.go.kr/info/bizinfo/communicationView.jsp?apv_perm_no=2006378010630200692&amp;area1=&amp;area2=&amp;currpage=1&amp;searchKey=01&amp;searchVal=%EC%97%94%EC%97%90%EC%9D%B4%EC%B9%98%EC%97%94&amp;stdate=&amp;enddate=" onclick="nclk(this,'fot.bizinfo','','')" target="_blank">사업자등록정보 확인</a></li>
					<li><a href="http://www.naver.com/rules/privacy.html" target="_blank">개인정보 취급방침 보기</a></li>
					<li><a href="http://mobile.naver.com/rules/mobile-privacy.nhn" onclick="nclk(this,'fot.mprivacy','','')" target="_blank">네이버 모바일 개인정보 보호정책 보기</a></li>
					</ul>
				</div>
			</div>
			<p class="u_crt">
				<span class="u_cri"><a class="u_cra" href="#">도움말</a></span>
				<span class="u_cri u_cri_v1"><a class="u_cra" href="#">이용약관</a></span>
				<span class="u_cri u_cri_v1"><a class="u_cra" href="#">문의 및 신고</a></span>
				<span class="u_cri u_cri_v1"><a class="u_cra" href="#">결제도용신고</a></span>

			</p>
	<? }else{ ?>
		<footer role="contentinfo">
			<p id="u_ftlkw" class="u_ftlkw">
				<a href="#" class="u_ftlk">로그인</a>
				<a href="#" class="u_ftlk">PC버전</a>
				<a href="#" class="u_ftlk">전체 앱</a>
				<a href="#u_gnbuw2" class="u_ftlkbt">전체서비스</a>
			</p>

			<p class="ccl">본 콘텐츠의 저작권은 저자 또는 제공처에 있으며, 이를 무단 이용하는 경우 저작권법 등에 따라 법척책임을 질 수 있습니다.</p>
			<p class="u_crt">
				<span class="u_cri"><a class="u_cra" href="#">웹툰 고객센터</a></span>
				<span class="u_cri u_cri_v1"><a class="u_cra" href="#">오류신고</a></span>
			</p>
	<? } ?>
			<p class="u_cr">
				<span class="u_cri">© <a href="#" class="u_cra u_cra_v1">NAVER Corp.</a></span>
			</p>
			<div class="goto_area">
			<a href="#" class="goto"><span class="app_comic">웹툰</span><em>네이버앱의</em><strong>웹툰</strong> 홈화면에 바로가기 추가<span class="ico_add"></span></a>
		</div>
	   </footer>
</div>
<!-- QP예외코드 -->
<!-- [D] 마크업 확인용 분기 스크립트 (개발 시 삭제해주세요) -->
<script type="text/javascript" src="http://jindo.dev.naver.com/docs/jindo-mobile/archive/latest/source/jindo.m.Touch.js" charset="uft-8"></script>
<script type="text/javascript" src="http://jindo.dev.naver.com/docs/jindo-mobile/archive/latest/source/animation/jindo.m.Effect.js" charset="uft-8"></script>
<script type="text/javascript" src="http://jindo.dev.naver.com/docs/jindo-mobile/archive/latest/source/jindo.m.Scroll.js" charset="uft-8"></script>

<script type="text/javascript">
$('.chh h1 a').click(function(){
	$("#profile").toggle();
});
$('#toonLayer img').click(function(){
	$("#fixedHeader").toggle();
});
$('.btn_bgm').click(function(){
	$(this).toggleClass("on");
});

</script>
<?php
if($php_self == $file_name){
	echo('</body></html>');
}
?>