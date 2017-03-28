		<script type="text/javascript" charset="utf-8">
			$Fn(function() {
				// oLikeItContents 는 다른 곳에서 사용하기 때문에 해당 변수명은 변경하지 말아주시기 바랍니다.
				_oLikeItContents = new _LikeItContents("COMIC", "4902456", "http://dev.m.like.naver.com");
			}, this).attach(window, "load");
		</script>

		<script type="text/javascript">
			(function(){
				var id = "naver-splugin-sdk", t = new Date(), yyyy = t.getFullYear(), mm = t.getMonth() + 1, dd = t.getDate();
				var s = document.createElement("script"); s.id = id; s.type = "text/javascript", s.charset = "utf-8", s.async = false;
				s.src = ("http://spi.naver.com/js/release/ko_KR/splugin.m.js?" + yyyy + (mm < 10 ? '0' + mm : mm) + (dd < 10 ? '0' + dd : dd));
				var d = document.getElementsByTagName('head')[0]; d.appendChild(s, d);
			})();

			window.onload = function() {
				window.__splugin = SocialPlugIn_Core({
					// nEvent Key
					"evKey"       : "comic",
					// 서비스명
					"serviceName" : "COMIC",
					// 딤드레이어 타입(default,fixed,custom)
					"dimmed"      : "fixed",
					// 버튼 클릭후 호출되는 콜백함수
					"onClick"     : function(button) {
						// button = 버튼명(band:밴드보내기)
					},
					// 공유하기 레이어 노출 후 호출되는 콜백함수
					"onShow"      : function() {
					},
					// 공유하기 레이어 닫기 후 호출되는 콜백함수
					"onHide"      : function() {
					},
					// window.resize 이벤트를 사용하지 않을때 resize 후 호출되는 콜백 함수
					"onResize"    : function(event) {
					},
					// window.onorientationchange 이벤트를 사용하지 않을때 가로/세로 전환 후 호출되는 콜백 함수
					"onRotate"    : function(event) {
					}
				});
			}

			function score_oninitialize() {
				return {
					"token"  : "n2nucnjtgZ/jUiVQLdoz6Q==",
					"userId" : "nvqa_1tc001"
				};
			}
		</script>

		<!-- 모바일 개선형 -->
	<? if($gameYN == ''){?>
		<div class="likeit_wrap">
	<?}else{?>
		<!-- [D] 게임앱 마켓 정보가 있는 경우 game 클래스 추가 -->
		<div class="likeit_wrap game">
	<? } ?>
			<div class="u_likeit_list_module">
				<a href="#" class="u_likeit_list_btn u_type_img u_none_txt"> <span class="u_ico"></span> <em class="u_txt">좋아요</em> <em class="u_cnt num _count">99,999+</em></a>
			</div>

		<? if($pageType != 'cut'){?>
			<div class="btn_wrap">
				<span class="btn_mark"><input type="checkbox" id="prefer1" bookcode="4902456">
					<? if($pageType != 'episode_lst'){?>
					<label for="prefer1"><span>책갈피 등록</span></label>
					<?}else{?>
					<label for="prefer1"><span>관심 등록</span></label>
					<?}?>
				</span>
				<a href="#none" id="spiButton" class="naver-splugin spi_sns_share">SNS 보내기</a>

				<? if($gameYN != '' && $gameYN != 'N'){?>
				<!-- [D] 게임앱 마켓 아이콘이 있는 경우 -->
				<a href="#none" class="btn_game"><span class="ico_new2">NEW</span><img src="im/app_top.png" width="18" height="18" alt="게임 섬네일">게임</a>
				<? }else if($gameYN != '' && $gameYN == 'N'){?>
				<!-- [D] 게임앱 마켓 아이콘이 없거나 기타 상황 -->
				<a href="#none" class="btn_game"><span class="ico_new2">NEW</span><img src="http://static.naver.net/m/comic/im/ic_game.png" width="18" height="18" alt="게임 섬네일">게임</a>
				<?}?>
			</div>
		<? } ?>
	</div>
	<? if($likeYN != 'N'){
		if($pageType !='cut' && $pageType !='comment'){
			include 'inc/likeit_module.php';
		}else{
			include '../inc/likeit_module.php';
		}
	}?>