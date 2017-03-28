<?php $searchType='search'; $pageTitle='회차 리스트&#62; 요일웹툰'; $menu='week'; include 'inc/header.php'; ?>

<div class="lnb_sub bx_tab">
	<ul>
	<li><a href="#none">월</a></li>
	<li><a href="#none">화</a></li>
	<li><a href="#none">수</a></li>
	<li><a href="#none">목</a></li>
	<li><a href="#none">금</a></li>
	<li><a href="#none">토</a></li>
	<li><a href="#none">일</a></li>
	<li class="on"><a href="#none">완결</a></li>
	</ul>
	<h3 class="u_hc">완결</h3>
</div>
<!-- ct  -->
<hr />
<div id="ct">
	<div class="chh toon_info">
		<span class="im_br">
			<span class="im_inbr"><img src="http://thumb.comic.naver.net/webtoon/20853/thumbnail/thumbnail_title_20853_125x101.gif" width="63" height="51" alt="프로필 이미지"></span>
		</span>
		<div class="info_in">
			<dl>
			<dt><span class="title"><strong>최강전설 강해요</strong></span>
				<span class="aside_info"><span class="ico_end v2">스마트툰</span></span>
			</dt>
			<dd class="info_name">
				<span class="nm"><span>글작가명 / 그림작품</span></span><span><a href="#">첫회보기</a></span>
			</dd>
			</dl>
		</div>

		<!-- 좋아요 기능 -->
		<?php $pageType='episode_lst'; include 'inc/likeit.php' ?>
		<!-- //좋아요 기능 -->
	</div>

	<!-- [D] 스토어에 연동된 작품인 경우 노출(텍스트 형) -->
	<div class="toon_notice">
        <span class="ico_store">store</span>
		<a href="#" class="notice_lnk"><span class="txt">스토어에서 다음 화를 <strong class="spot_txt">미리</strong> 만나보세요</span></a>
	</div>
	<!-- [D] 스토어에 연동된 작품인 경우 노출(이미지 형) -->
	<div class="toon_notice type_img" style="background:#f5da54">
		<a href="#" class="notice_lnk"><img src="im/store_banner.png" width="320" height="50" alt="만화를 찢고 나온 치즈인더트랩 드라마 방영 기념 할인!"></a>
	</div>
	<div class="toon_notice">
		<span class="ico_notice">공지</span>
		<span class="txt"><em>6</em>월 <em>28</em>일 연재 재개 예정입니다. 예정입니다. 예정입니다. 예정입니다. 예정입니다. 예정입니다. 예정입니다. 예정입니다. 예정입니다.</span>
	</div>

	<ul class="toon_lst lst2">
	<li>
		<div class="lst">
			<a href="#">
			<span class="im_br"><span class="im_inbr"><img src="im/@tmp/@top_toon.png" width="71" height="42" alt="웹툰 제목"></span>
			</span>
			<!-- [D] 아이콘이 있는 경우 v2 클래스 추가 -->
			<div class="toon_info">
				<h4>
					<span class="toon_name"><strong><span>신의탑신의탑신의신의탑신의탑신의 탑신의</span></strong></span>
					<span class="aside_info">
						<span class="ico_up">UP</span>
					</span>
				</h4>
				<p class="sub_info">
					<span class="st1"><span class="u_grp"><span class="u_grp_v" style="width:60%"></span></span></span>
					<span class="if1 st_r">8.2</span><span class="bar">|</span><span class="if1">12.05.25</span>
				</p>
			</div>
			</a>
		</div>
	</li>
	<li>
		<div class="lst">
			<a href="#">
			<span class="im_br"><span class="im_inbr"><img src="im/@tmp/@top_toon.png" width="71" height="42" alt="웹툰 제목"></span>
			</span>
			<div class="toon_info">
				<h4>
					<span class="toon_name"><strong><span>내 어린고양이와 늙은개</span></strong></span>
					<span class="aside_info">
						<span class="ico_break">휴재</span>
					</span>
				</h4>
				<p class="sub_info">
					<span class="st1"><span class="u_grp"><span class="u_grp_v" style="width:60%"></span></span></span>
					<span class="if1 st_r">8.2</span><span class="bar">|</span><span class="if1">12.05.25</span>
				</p>
			</div>
			</a>
		</div>
	</li>
	<li>
		<div class="lst">
			<a href="#">
				<span class="im_br"><span class="im_inbr"><img src="http://static.naver.net/m/comic/im/2012/img_stop_thumb.gif" width="71" height="42" alt="게시중단"></span>
				</span>
				<div class="toon_info">
					 <p class="stop_notice">신고에 의해 일시적으로<br>게시보류되어 내용 확인중입니다.</p>
				</div>
			</a>
		</div>
	</li>
	<li>
		<div class="lst">
			<a href="#">
			<span class="im_br"><span class="im_inbr"><img src="im/@tmp/@top_toon.png" width="71" height="42" alt="웹툰 제목"><span class="ico_store v2">스토어 콘텐츠</span></span></span>
			<div class="toon_info">
				<h4>
					<span class="toon_name"><strong><span>가나다라마바사<span class="msg_store">(<span class="spot_txt">스토어</span>에서 만나보세요)</span></span></strong></span>
				</h4>
				<p class="sub_info">
					<span class="st1"><span class="u_grp"><span class="u_grp_v" style="width:60%"></span></span></span>
					<span class="if1 st_r">8.2</span><span class="bar">|</span><span class="if1">12.05.25</span>
				</p>
			</div>
			</a>
		</div>
	</li>
	<li>
		<div class="lst">
			<a href="#">
			<span class="im_br"><span class="im_inbr"><img src="im/@tmp/@top_toon.png" width="71" height="42" alt="웹툰 제목"><span class="ico_store v2">스토어 콘텐츠</span></span></span>
			<div class="toon_info">
				<h4>
					<span class="toon_name"><strong><span>신의탑<span class="msg_store">(<span class="spot_txt">스토어</span>에서 만나보세요)</span></span></strong></span>
				</h4>
				<p class="sub_info">
					<span class="st1"><span class="u_grp"><span class="u_grp_v" style="width:60%"></span></span></span>
					<span class="if1 st_r">8.2</span><span class="bar">|</span><span class="if1">12.05.25</span>
				</p>
			</div>
			</a>
		</div>
	</li>
	</ul>
	<div class="u_pg3">
		<a href="#" class="prev">이전</a>
		<em class="u_pg3_pg">1 <span>/ 5</span></em>
		<a href="#" class="next">다음</a>
	</div>
</div>
<hr />
<!-- //ct -->
<?php include 'inc/footer.php' ?>

</body>
</html>