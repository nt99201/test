<?php $pageTitle='리스트&#62; 게임'; $menu='game';$searchType='search'; include 'inc/header.php'; ?>
<div class="lnb_sub bx_tab">
	<h3><a href="#">웹툰 게임</a></h3>
	<div class="lst_btn"><a href="#"><span class="arrow"></span>목록</a></div>
</div>

<!-- ct  -->
<div id="ct">
	<div class="end_game">
		<div class="info">
			<div class="sc_thmb"><img src="http://dev.ui.naver.com/tmp/?53x53_none_y_45818E_50" width="53" height="53" alt="치즈인더트랩"></div>

			<dl>
			<dt class="ells">라인 레인저스</dt>
			<dd class="ells">NEXON Company</dd>
			</dl>
		</div>
		<div class="bg_line"></div>

		<!-- [D] jindo scroll -->
		<div class="pht_ct">
			<div id="view">
				<div>
					<!-- Scroller -->
					<ul class="pht_lst">
					<li>
						<a href="#">
							<img src="http://static.naver.net/m/nstore/op/img_playdefault2_h.png" width="291" height="163" alt="appVideo">
						</a>
					</li>
					<li>
						<a href="#">
							<img src="im/@tmp/@thumb150x200.jpg" width="150" height="163" alt="screenshot2">
						</a>
					</li>
					<li>
						<a href="#">
							<img src="im/@tmp/@thumb300x200.jpg" width="300" height="163" alt="screenshot3">
						</a>
					</li>
					<li>
						<a href="#">
							<img src="http://dthumb.phinf.naver.net/?src=%22http://appdev.img.naver.com/appImg/40620_20013/40620_1403697198226.png%22&amp;type=m582_350" width="291" height="163" alt="screenshot4">
						</a>
					</li>
					<li>
						<a href="#">
							<img src="http://dthumb.phinf.naver.net/?src=%22http://appdev.img.naver.com/appImg/42814_3/42814_1405906712356.png%22&amp;type=m582_350" width="291" height="163" alt="screenshot6">
						</a>
					</li>
					</ul>
					<!-- //Scroller -->
				</div>
			</div>
		</div>
		<div class="lnk_wrap">
			<ul>
				<li><a href="#"><span class="ico_android">안드로이드</span>다운로드</a></li>
			</ul>
		</div>
		<div class="lnk_wrap">
			<ul>
				<li><a href="#"><span class="ico_android">안드로이드</span>다운로드</a></li>
				<li><a href="#"><span class="ico_ios">IOS</span>다운로드</a></li>
			</ul>
		</div>
		<div class="lnk_wrap">
			<ul>
				<li><a href="#"><span class="ico_android">안드로이드</span>$0.99</a></li>
				<li><a href="#"><span class="ico_ios">IOS</span><span class="ico_won">\</span>1,000</a></li>
			</ul>
		</div>
		<div class="bg_line"></div>
		<div class="detail_info">
			세상의 모든 MMORPG를 정복하다.<br>
			선국 : 세상을 지배하라!<br><br>
			등급 전체 이용가능 게임<br>
			크기 100MB<br><br>
			NEXON Company
		</div>
    </div>
</div>
<hr>
<!-- //ct -->
<?php $footer_line='Y'; include 'inc/footer.php' ?>

<!-- [D] 마크업 테스트 스크립트 -->
<script type="text/javascript" charset="utf-8" src="js/jindo.desktop.min.js"></script>
<script type="text/javascript" charset="utf-8" src="js/jindo_mobile_component.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
	var oScroll = new jindo.m.Scroll("view", {
		bUseHScroll : true,
		bUseVScroll : false,
		bUseScrollbar : false,
		bUseMomentum : false,
		nHeight : 163
	});
</script>
</body>
</html>