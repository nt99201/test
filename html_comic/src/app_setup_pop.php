<?php $pageTitle='MY웹툰>책갈피';$menu='my comic';$searchType='search';include 'inc/header.php'; ?>

<div class="lnb_sub bx_tab">
	<ul>
	<li><a href="#none">최근 본 웹툰</a></li>
	<li><a href="#none">관심웹툰</a></li>
	<li class="on"><a href="#none">책갈피</a></li>
	</ul>
	<h3 class="u_hc">책갈피</h3>
</div>
<!-- ct  -->
<hr />
<div id="ct">
	<div class="option_sc">
		<div class="pl"><a href="#" class="btn_bx"><span class="all">전체선택</span></a><a href="#" class="btn_bx">삭제</a></div>
	</div>

	<ul class="toon_lst lst2">
	<li>
		<input type="checkbox" class="ckbox">
		<div class="lst">
			<a href="#">
				<span class="im_br"><span class="im_inbr"><img src="im/@tmp/@top_toon.png" width="71" height="42" alt="" /></span></span>

				<div class="toon_info">
					<h4>
						<span class="toon_name"><strong><span>신의탑신의탑신의신의탑신의탑신의 탑신의</span></strong></span>
						<span class="aside_info"><span class="ico_adult2">19세 이상 이용가</span><span class="ico_smart">스마트툰</span></span>
					</h4>
					<span class="sub_info">와난<span class="bar">|</span><strong>어서오세요. 305호에! [1화] 안녕하세요!</strong></span>
				</div>
			</a>
		</div>
	</li>
	<li>
		<input type="checkbox" class="ckbox">
		<div class="lst">
			<a href="#">
				<span class="im_br"><span class="im_inbr"><img src="im/@tmp/@top_toon.png" width="71" height="42" alt="" /></span></span>
				<div class="toon_info">
					<h4>
						<span class="toon_name"><strong><span>내 어린고양이와 늙은개</span></strong></span>
					</h4>
					<span class="sub_info">SUI<span class="bar">|</span><strong>2부 1화</strong></span>
				</div>
			</a>
		</div>
	</li>
	<li>
		<input type="checkbox" class="ckbox">
		<div class="lst">
			<a href="#">
				<span class="im_br"><span class="im_inbr"><img src="im/@tmp/@top_toon.png" width="71" height="42" alt="" /></span></span>
				<div class="toon_info">
					<h4>
						<span class="toon_name"><strong><span>유치원의 하루</span></strong></span>
						<span class="aside_info"><span class="bar">|</span><span class="best">베스트도전</span></span>
					</h4>
					<span class="sub_info">guswjddl42<span class="bar">|</span><strong>1. 하트</strong></span>
				</div>
			</a>
		</div>
	</li>
	<li>
		<input type="checkbox" class="ckbox">
		<div class="lst">
			<a href="#">
				<span class="im_br"><span class="im_inbr"><img src="im/@tmp/@top_toon.png" width="71" height="42" alt="" /></span></span>
				<div class="toon_info">
					<h4>
						<span class="toon_name"><strong><span>신의탑</span></strong></span>
					</h4>
					<span class="sub_info">SUI<span class="bar">|</span><strong>2부 1화</strong></span>
				</div>
			</a>
		</div>
	</li>
	<li>
		<input type="checkbox" class="ckbox">
		<div class="lst">
			<a href="#">
				<span class="im_br"><span class="im_inbr"><img src="im/@tmp/@top_toon.png" width="71" height="42" alt="" /></span></span>
				<div class="toon_info">
					<h4>
						<span class="toon_name"><strong><span>신의탑</span></strong></span>
					</h4>
					<span class="sub_info">SUISUISUISUISUISUISUISUISUISUISUISUISUISUISUISUISUISUISUISUISUI<span class="bar">|</span><strong>2부 1화</strong></span>
				</div>
			</a>
		</div>
	</li>
	</ul>

	<div class="u_pg2">
		<a href="#" class="prev">이전</a>
		<em class="u_pg2_pg">2 <span>/ 3</span></em>
		<a href="#" class="next">다음</a>
	</div>
</div>

<!-- [D] 팝업 오픈시 on 클래스 추가 -->
<div class="ly_dim on">
	<div class="bg"></div>
</div>

<!-- [D] 앱 설치 유도 팝업 : 안드로이드일 경우에만 노출 -->
<div class="ly_app_setup" style="display:block">
	<div class="ly_cont">
		<img src="http://static.naver.com/m/comic/im/toon_app_pop.png" width="212" height="289" alt="웹툰 앱 설치">
		<h2 class="u_hc">지금 네이버 앱스토어에서 웹툰 앱을 설치하세요</h2>

		<ul class="btn_app">
		<li><a href="#"><span class="u_hc">네이버 앱스토어에서 설치하기</span></a></li>
		<li><a href="#"><span class="u_hc">구글플에이에서 설치하기</span></a></li>
		</ul>
		<a href="#none" class="btn_clse"><span class="u_hc">레이어 창 닫기</span></a>
	</div>
</div>
<!-- //[D] 레이어 팝업 -->

<hr />
<!-- //ct -->
<?php $footer_line='Y';include 'inc/footer.php' ?>
</body>
</html>