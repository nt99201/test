<?php $pageTitle='MY 웹툰>최근본 웹툰';$menu='my comic';$searchType='search';include 'inc/header.php'; ?>

<div class="lnb_sub bx_tab">
	<ul>
	<li class="on"><a href="#none">최근 본 웹툰</a></li>
	<li><a href="#none">관심웹툰</a></li>
	<li><a href="#none">책갈피</a></li>
	</ul>
	<h3 class="u_hc">최근 본 웹툰</h3>
</div>

<!-- ct  -->
<hr />
<div id="ct">
	<div class="option_sc">
		<div class="pl"><a href="#" class="btn_bx"><span class="all">전체선택</span></a><a href="#" class="btn_bx">삭제</a></div>
		<p class="txt">최근 일주일 기준</p>
	</div>

	<ul class="toon_lst lst2">
	<li>
		<input type="checkbox" class="ckbox" />
		<div class="lst">
			<a href="#">
				<span class="im_br"><span class="im_inbr"><img src="im/@tmp/@top_toon.png" width="71" height="42" alt="fiction or nonfiction">
					<!-- [D] 정식연재인 경우: mark_serial, 포텐업인 경우: mark_poten -->
					<span class="mark_serial">정식연재 작품</span>
					<span class="mark_bg"></span>
				</span></span>
				<div class="toon_info">
					<h4>
						<!--span class="toon_name"><span>fiction or nonfiction</span></span><span class="name_bar">|</span><span class="best">베스트도전</span-->
						<span class="toon_name"><strong><span>fiction or nonfiction</span></strong></span>
						<span class="aside_info"><span class="bar">|</span><span class="best">베스트도전</span></span>
					</h4>
					<p class="sub_info">forn0319<span class="bar">|</span><strong>앞으로 나란히_각주_난 남자다</strong></p>
				</div>
			</a>
		</div>
	</li>
	<li>
		<input type="checkbox" class="ckbox" />
		<div class="lst">
			<a href="#">
				<span class="im_br"><span class="im_inbr"><img src="im/@tmp/@top_toon.png" width="71" height="42" alt="내 어린고양이와 늙은개"></span></span>

				<div class="toon_info">
					<h4>
						<span class="toon_name"><strong><span>내 어린고양이와 늙은개 내 어린고양이와 늙은개 내 어린고양이와 늙은개</span></strong></span>
		                <span class="aside_info"><span class="ico_smart">스마트툰</span><span class="ico_store2">스토어</span></span>
					</h4>
					<p class="sub_info">SUI<span class="bar">|</span><strong>2부 1화</strong></p>
				</div>
			</a>
		</div>
	</li>
	<li>
		<input type="checkbox" class="ckbox" />
		<div class="lst">
			<a href="#">
				<span class="im_br"><span class="im_inbr"><img src="im/@tmp/@top_toon.png" width="71" height="42" alt="신의탑">
					<!-- [D] 정식연재인 경우: mark_serial, 포텐업인 경우: mark_poten -->
					<span class="mark_poten">포텐업 작품</span>
					<span class="mark_bg"></span>
				</span></span>
				<div class="toon_info">
					<h4>
						<span class="toon_name"><strong><span>신의탑</span></strong></span>
						<span class="aside_info"><span class="bar">|</span><span class="best">베스트도전</span></span>
					</h4>
					<p class="sub_info">SUI<span class="bar">|</span><strong>2부 1화</strong></p>
				</div>
			</a>
		</div>
	</li>
	<li>
		<input type="checkbox" class="ckbox" />
		<div class="lst">
			<a href="#">
				<span class="im_br"><span class="im_inbr"><img src="im/@tmp/@top_toon.png" width="71" height="42" alt="신의탑"></span></span>
				<div class="toon_info">
					<h4>
						<span class="toon_name"><strong><span>신의탑신의탑신의신의탑신의탑신의 탑신의</span></strong></span>
						<span class="aside_info"><span class="ico_adult2">19세 이상 이용가</span><span class="ico_smart">스마트툰</span></span>
					</h4>
					<p class="sub_info">SUISUISUISUISUISUISUISUISUISUISUISUISUISUISUISUISUISUISUISUISUI<span class="bar">|</span><strong>2부 1화</strong></p>
				</div>
			</a>
		</div>
	</li>
	<li>
		<input type="checkbox" class="ckbox" />
		<div class="lst">
			<a href="#">
				<span class="im_br"><span class="im_inbr"><img src="http://thumb.comic.naver.net/webtoon/183559/thumbnail/title_thumbnail_20140810204630_t125x101.JPG" width="71" height="42" alt="신의 탑"><span class="ico_game">채널링 작품</span></span></span>
				<div class="toon_info">
					<h4>
						<span class="toon_name"><strong><span>신의 탑</span></strong></span>
					</h4>
					<p class="sub_info">컷부<span class="bar">|</span><strong>2부 185화</strong></p>
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
<hr />
<!-- //ct -->
<?php $footer_line='Y';include 'inc/footer.php' ?>
</body>
</html>