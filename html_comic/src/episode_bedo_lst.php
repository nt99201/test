<?php $pageTitle='회차 리스트&#62; 베스트 도전'; $menu='challenge';$searchType='search'; include 'inc/header.php'; ?>

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
<hr>
<div id="ct">
	<div class="chh toon_info">
		<span class="im_br">
			<span class="im_inbr">
				<img src="http://thumb.comic.naver.net/webtoon/20853/thumbnail/thumbnail_title_20853_125x101.gif" width="63" height="51" alt="프로필 이미지">
			</span>
		</span>
		<div class="info_in">
			<dl>
			<dt><span><strong>최강전설 강해요 최강전설 강해요 최강전설 강해요 최강전설 강해요</strong></span></dt>
			<dd class="info_name">
				<span class="nm"><span>글작가명/그림작품그림작품그림작품</span></span><span><a href="#">첫회보기</a></span>
			</dd>
			</dl>
			<a href="#" class="toon_game"><img src="im/@tmp/@webtoon.png" width="36" height="36" alt="game"></a>
		</div>

		<!-- 좋아요 기능 -->
		<?php $pageType='episode_lst';include 'inc/likeit.php' ?>
		<!-- //좋아요 기능 -->
	</div>
    <!-- [D] 완결인 경우 frst_view에 end 클래스 추가 -->
    <a href="#" class="frst_view end">완결까지 먼저 보기</a>

	<ul class="toon_lst lst2" id="pageList">
	<li>
		<div class="lst">
			<a onclick="nclk(this, 'lst.episode','20853','1');" href="/webtoon/detail.nhn?titleId=20853&amp;no=670&amp;week=fri&amp;listPage=1">
				<span class="im_br"><span class="im_inbr"><img src="http://thumb.comic.naver.net/webtoon/20853/670/inst_thumbnail_20121004171358.jpg" width="71" height="42" alt=""></span></span>
				<!-- [D] 아이콘이 있는 경우 v2 클래스 추가 -->
				<div class="toon_info">
					<h4>
						<span class="toon_name"><strong><span>Episode5. 알레르기의 추억 6 Episode5. 알레르기의 추억 6</span></strong></span>
						<span class="aside_info"><span class="ico_up">UP</span></span>
					</h4>
					<p class="sub_info">
						<span class="st1"><span class="u_grp"><span class="u_grp_v" style="width:98.82686688863218%"></span></span></span>
						<span class="if1 st_r">9.9</span><span class="bar">|</span><span class="if1">02.10.00</span><span class="bar">|</span><em class="ico_bgm">배경음악 있음</em>
					</p>
				</div>
			</a>
		</div>
	</li>
	<li>
		<div class="lst">
			<a href="http://m.naver.com">
				<span class="im_br"><span class="im_inbr"><img src="http://thumb.comic.naver.net/webtoon/20853/669/inst_thumbnail_20121001203535.jpg" width="71" height="42" alt=""></span></span>
				<div class="toon_info">
					<h4>
						<span class="toon_name"><strong><span>665. 인기강사</span></strong></span>
					</h4>
					<p class="sub_info">
						<span class="st1"><span class="u_grp"><span class="u_grp_v" style="width:99.30398828495133%"></span></span></span>
						<span class="if1 st_r">9.9</span><span class="bar">|</span><span class="if1">12.10.01</span><span class="bar">|</span><em class="ico_bgm">배경음악 있음</em>
					</p>
				</div>
			</a>
		</div>
	</li>
	<li>
		<div class="lst">
			<a href="http://m.novel.naver.com/webnovel/detail.nhn?novelId=113901&amp;volumeNo=1&amp;week=WED&amp;page=1#nafullscreen">
				<span class="im_br"><span class="im_inbr"><img src="http://thumb.comic.naver.net/webtoon/20853/668/inst_thumbnail_20120927152731.jpg" width="71" height="42" alt=""></span></span>
				<div class="toon_info">
					<h4>
						<span class="toon_name"><strong><span>664. 영업 방해</span></strong></span>
					</h4>
					<p class="sub_info">
						<span class="st1"><span class="u_grp"><span class="u_grp_v" style="width:98.94548282278446%"></span></span></span>
						<span class="if1 st_r">9.9</span><span class="bar">|</span><span class="if1">12.09.27</span>
					</p>
				</div>
			</a>
		</div>
	</li>
	<li>
		<div class="lst">
			<a onclick="nclk(this, 'lst.episode','20853','4');" href="/webtoon/detail.nhn?titleId=20853&amp;no=667&amp;week=fri&amp;listPage=1">
				<span class="im_br"><span class="im_inbr"><img src="http://thumb.comic.naver.net/webtoon/20853/667/inst_thumbnail_20120924144511.jpg" width="71" height="42" alt=""></span></span>
				<div class="toon_info">
					<h4>
						<span class="toon_name"><strong><span>663. 전학생</span></span>
					</h4>
					<p class="sub_info">
						<span class="st1"><span class="u_grp"><span class="u_grp_v" style="width:99.26534475644978%"></span></span></span>
						<span class="if1 st_r">9.9</span><span class="bar">|</span><span class="if1">12.09.24</span>
					</p>
				</div>
			</a>
		</div>
	</li>
	<li>
		<div class="lst">
			<a onclick="nclk(this, 'lst.episode','20853','5');" href="/webtoon/detail.nhn?titleId=20853&amp;no=666&amp;week=fri&amp;listPage=1">
				<span class="im_br"><span class="im_inbr"><img src="http://thumb.comic.naver.net/webtoon/20853/666/inst_thumbnail_20120920115343.jpg" width="71" height="42" alt=""></span></span>
				<div class="toon_info">
					<h4>
						<span class="toon_name"><strong><span>662. 고백 여왕</span></strong></span>
					</h4>
					<p class="sub_info">
						<span class="st1"><span class="u_grp"><span class="u_grp_v" style="width:98.63937023716707%"></span></span></span>
						<span class="if1 st_r">9.9</span><span class="bar">|</span><span class="if1">12.09.20</span>
					</p>
				</div>
			</a>
		</div>
	</li>
	<li>
		<div class="lst">
			<a onclick="nclk(this, 'lst.episode','20853','6');" href="/webtoon/detail.nhn?titleId=20853&amp;no=665&amp;week=fri&amp;listPage=1">
				<span class="im_br"><span class="im_inbr"><img src="http://thumb.comic.naver.net/webtoon/20853/665/inst_thumbnail_20120917142800.jpg" width="71" height="42" alt=""></span></span>
				<div class="toon_info">
					<h4>
						<span class="toon_name"><strong><span>661</span></strong></span>
					</h4>
					<p class="sub_info">
						<span class="st1"><span class="u_grp"><span class="u_grp_v" style="width:98.42253041776567%"></span></span></span>
						<span class="if1 st_r">9.8</span><span class="bar">|</span><span class="if1">12.09.17</span>
					</p>
				</div>
			</a>
		</div>
	</li>
	<li>
		<div class="lst">
			<a onclick="nclk(this, 'lst.episode','20853','7');" href="/webtoon/detail.nhn?titleId=20853&amp;no=664&amp;week=fri&amp;listPage=1">
				<span class="im_br"><span class="im_inbr"><img src="http://thumb.comic.naver.net/webtoon/20853/664/inst_thumbnail_20120913152056.jpg" width="71" height="42" alt=""></span></span>
				<div class="toon_info">
					<h4>
						<span class="toon_name"><strong><span>660. 경비를 보았다</span></strong></span>
					</h4>
					<p class="sub_info">
						<span class="st1"><span class="u_grp"><span class="u_grp_v" style="width:98.79630391269775%"></span></span></span>
						<span class="if1 st_r">9.9</span><span class="bar">|</span><span class="if1">12.09.13</span>
					</p>
				</div>
			</a>
		</div>
	</li>
	<li>
		<div class="lst">
			<a onclick="nclk(this, 'lst.episode','20853','8');" href="/webtoon/detail.nhn?titleId=20853&amp;no=663&amp;week=fri&amp;listPage=1">
				<span class="im_br"><span class="im_inbr"><img src="http://thumb.comic.naver.net/webtoon/20853/663/inst_thumbnail_20120910152808.jpg" width="71" height="42" alt=""></span></span>
				<div class="toon_info">
					<h4>
						<span class="toon_name"><strong><span>659. 경력자 우대</span></strong></span>
					</h4>
					<p class="sub_info">
						<span class="st1"><span class="u_grp"><span class="u_grp_v" style="width:99.25703690350494%"></span></span></span>
						<span class="if1 st_r">9.9</span><span class="bar">|</span><span class="if1">12.09.10</span>
					</p>
				</div>
			</a>
		</div>
	</li>
	<li>
		<div class="lst">
			<a onclick="nclk(this, 'lst.episode','20853','9');" href="/webtoon/detail.nhn?titleId=20853&amp;no=662&amp;week=fri&amp;listPage=1">
				<span class="im_br"><span class="im_inbr"><img src="http://thumb.comic.naver.net/webtoon/20853/662/inst_thumbnail_20120906152545.jpg" width="71" height="42" alt=""></span></span>
				<div class="toon_info">
					<h4>
						<span class="toon_name"><strong><span>658. 잃어버린 주소를 찾아서</span></strong></span>
					</h4>
					<p class="sub_info">
						<span class="st1"><span class="u_grp"><span class="u_grp_v" style="width:98.81962642877056%"></span></span></span>
						<span class="if1 st_r">9.9</span><span class="bar">|</span><span class="if1">12.09.06</span>
					</p>
				</div>
			</a>
		</div>
	</li>
	<li>
		<div class="lst">
			<a onclick="nclk(this, 'lst.episode','20853','10');" href="/webtoon/detail.nhn?titleId=20853&amp;no=661&amp;week=fri&amp;listPage=1">
				<span class="im_br"><span class="im_inbr"><img src="http://thumb.comic.naver.net/webtoon/20853/661/inst_thumbnail_20120903155932.jpg" width="71" height="42" alt=""></span></span>
				<div class="toon_info">
					<h4>
						<span class="toon_name"><strong><span>657. 여자의 직감</span></strong></span>
					</h4>
					<p class="sub_info">
						<span class="st1"><span class="u_grp"><span class="u_grp_v" style="width:98.93208661417322%"></span></span></span>
						<span class="if1 st_r">9.9</span><span class="bar">|</span><span class="if1">12.09.03</span>
					</p>
				</div>
			</a>
		</div>
	</li>
	<li>
		<div class="lst">
			<a onclick="nclk(this, 'lst.episode','20853','11');" href="/webtoon/detail.nhn?titleId=20853&amp;no=660&amp;week=fri&amp;listPage=1">
				<span class="im_br"><span class="im_inbr"><img src="http://thumb.comic.naver.net/webtoon/20853/660/inst_thumbnail_20120830143159.jpg" width="71" height="42" alt=""></span></span>
				<div class="toon_info">
					<h4>
						<span class="toon_name"><strong><span>656. 암호로 말해라</span></strong></span>
					</h4>
					<p class="sub_info">
						<span class="st1"><span class="u_grp"><span class="u_grp_v" style="width:99.03492816660076%"></span></span></span>
						<span class="if1 st_r">9.9</span><span class="bar">|</span><span class="if1">12.08.30</span>
					</p>
				</div>
			</a>
		</div>
	</li>
	<li>
		<div class="lst">
			<a onclick="nclk(this, 'lst.episode','20853','12');" href="/webtoon/detail.nhn?titleId=20853&amp;no=659&amp;week=fri&amp;listPage=1">
				<span class="im_br"><span class="im_inbr"><img src="http://thumb.comic.naver.net/webtoon/20853/659/inst_thumbnail_20120827190536.jpg" width="71" height="42" alt=""></span></span>
				<div class="toon_info">
					<h4>
						<span class="toon_name"><strong><span>655. 조세이돈</span></strong></span>
					</h4>
					<p class="sub_info">
						<span class="st1"><span class="u_grp"><span class="u_grp_v" style="width:98.10765496358951%"></span></span></span>
						<span class="if1 st_r">9.8</span><span class="bar">|</span><span class="if1">12.08.27</span>
					</p>
				</div>
			</a>
		</div>
	</li>
	<li>
		<div class="lst">
			<a onclick="nclk(this, 'lst.episode','20853','13');" href="/webtoon/detail.nhn?titleId=20853&amp;no=658&amp;week=fri&amp;listPage=1">
				<span class="im_br"><span class="im_inbr"><img src="http://thumb.comic.naver.net/webtoon/20853/658/inst_thumbnail_20120823143057.jpg" width="71" height="42" alt=""></span></span>
				<div class="toon_info">
					<h4>
						<span class="toon_name"><strong><span>654. 규삼이 집 내놨다</span></strong></span>
					</h4>
					<p class="sub_info">
						<span class="st1"><span class="u_grp"><span class="u_grp_v" style="width:98.92170542635658%"></span></span></span>
						<span class="if1 st_r">9.9</span><span class="bar">|</span><span class="if1">12.08.23</span>
					</p>
				</div>
			</a>
		</div>
	</li>
	<li>
		<div class="lst">
			<a onclick="nclk(this, 'lst.episode','20853','14');" href="/webtoon/detail.nhn?titleId=20853&amp;no=657&amp;week=fri&amp;listPage=1">
				<span class="im_br"><span class="im_inbr"><img src="http://thumb.comic.naver.net/webtoon/20853/657/inst_thumbnail_20120820172028.jpg" width="71" height="42" alt=""></span></span>
				<div class="toon_info">
					<h4>
						<span class="toon_name"><strong><span>653. 블라인드 애봉이</span></strong></span>
					</h4>
					<p class="sub_info">
						<span class="st1"><span class="u_grp"><span class="u_grp_v" style="width:98.671585228189%"></span></span></span>
						<span class="if1 st_r">9.9</span><span class="bar">|</span><span class="if1">12.08.20</span>
					</p>
				</div>
			</a>
		</div>
	</li>
	<li>
		<div class="lst">
			<a onclick="nclk(this, 'lst.episode','20853','15');" href="/webtoon/detail.nhn?titleId=20853&amp;no=656&amp;week=fri&amp;listPage=1">
				<span class="im_br"><span class="im_inbr"><img src="http://thumb.comic.naver.net/webtoon/20853/656/inst_thumbnail_20120816173226.jpg" width="71" height="42" alt=""></span></span>
				<div class="toon_info">
					<h4>
						<span class="toon_name"><strong><span>652. 휴가중</span></strong></span>
					</h4>
					<p class="sub_info">
						<span class="st1"><span class="u_grp"><span class="u_grp_v" style="width:99.01929449982318%"></span></span></span>
						<span class="if1 st_r">9.9</span><span class="bar">|</span><span class="if1">12.08.16</span>
					</p>
				</div>
			</a>
		</div>
	</li>
	</ul>
	<div class="u_pg3">
		<a href="#" class="prev">이전</a>
		<em class="u_pg3_pg">1<span> / 2</span></em>
		<a href="#" class="next" id="nextButton">다음</a>
	</div>
</div>
<hr>

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

<!-- //ct -->
<?php include 'inc/footer.php' ?>
</body>
</html>