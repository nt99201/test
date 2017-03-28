		<script type="text/javascript" charset="utf-8">
			$Fn(function() { 
				// oLikeItContents 는 다른 곳에서 사용하기 때문에 해당 변수명은 변경하지 말아주시기 바랍니다. 
				_oLikeItContents = new _LikeItContents("COMIC", "4902456", "http://dev.m.like.naver.com");
			}, this).attach(window, "load"); 
		</script>

		<!-- 좋아요를 한 친구 목록 및 좋아요 공유 설정 영역 -->
		<!--div id="likeItScrollDiv" style="display:none;" class="u_likeit_module">
		   <div class="u_likeit_friends" id="likeItFriendListDiv"></div>
		</div-->
		<div class="u_likeit_module" style="display:none;">
			<div class="u_likeit_friends">
				<div class="u_list_area">
					<div class="u_msg"><p class="u_txt2"><span class="u_likeit_loading"></span>좋아요한 친구 정보를 불러오는 중입니다.</p></div>
					<a href="#" class="u_btn_set">공유설정</a>
				</div>
			</div>
		</div>

		<div class="u_likeit_module" style="display:none;">
			<div class="u_likeit_friends">
				<div class="u_list_area">
					<!-- [D] 진도프레임웍 -->
					<div id="viewer" style="overflow: hidden; z-index: 0; position: relative; height: 36px;">
						<!-- [D] 가로 넓이값 계산하여 inline으로 입력 -->
						<div style="width: 609px; position: absolute; z-index: 1; left: 0px; top: 0px; -webkit-transition: -webkit-transform; transition: -webkit-transform; -webkit-transform: translate(0, 0);">
							<ul class="u_list">
							<li class="u_thmb"><a href="#"><img src="http://static.naver.net/m/likeit/line_noimg.png" width="35" height="35" alt="아무개씨"></a></li>
							<li class="u_thmb"><a href="#"><img src="http://dev.ui.naver.com/tmp/?100x100_woman" width="35" height="35" alt="아무개씨"></a></li>
							<li class="u_thmb"><a href="#"><img src="http://dev.ui.naver.com/tmp/?100x100_woman" width="35" height="35" alt="아무개씨"></a></li>
							<li class="u_thmb"><a href="#"><img src="http://dev.ui.naver.com/tmp/?100x100_woman" width="35" height="35" alt="아무개씨"></a></li>
							<li class="u_thmb"><a href="#"><img src="http://dev.ui.naver.com/tmp/?100x100_woman" width="35" height="35" alt="아무개씨"></a></li>
							<li class="u_thmb"><a href="#"><img src="http://dev.ui.naver.com/tmp/?100x100_woman" width="35" height="35" alt="아무개씨"></a></li>
							<li class="u_thmb"><a href="#"><img src="http://dev.ui.naver.com/tmp/?100x100_woman" width="35" height="35" alt="아무개씨"></a></li>
							<li class="u_thmb"><a href="#"><img src="http://dev.ui.naver.com/tmp/?100x100_woman" width="35" height="35" alt="아무개씨"></a></li>
							<li class="u_thmb"><a href="#"><img src="http://dev.ui.naver.com/tmp/?100x100_woman" width="35" height="35" alt="아무개씨"></a></li>
							<li class="u_thmb"><a href="#"><img src="http://dev.ui.naver.com/tmp/?100x100_woman" width="35" height="35" alt="아무개씨"></a></li>
							<li class="u_thmb"><a href="#"><img src="http://dev.ui.naver.com/tmp/?100x100_woman" width="35" height="35" alt="아무개씨"></a></li>
							<li class="u_thmb"><a href="#"><img src="http://dev.ui.naver.com/tmp/?100x100_woman" width="35" height="35" alt="아무개씨"></a></li>
							<li class="u_thmb"><a href="#"><img src="http://dev.ui.naver.com/tmp/?100x100_woman" width="35" height="35" alt="아무개씨"></a></li>
							<li class="u_thmb"><a href="#"><img src="http://dev.ui.naver.com/tmp/?100x100_woman" width="35" height="35" alt="아무개씨"></a></li>
							<li class="u_thmb"><a href="#"><img src="http://dev.ui.naver.com/tmp/?100x100_woman" width="35" height="35" alt="아무개씨"></a></li>
							</ul>
						</div>
					</div>
					<p class="u_dsc">강경미님외 라인친구 7명이 좋아합니다.</p>
					<a href="#" class="u_btn_set">공유설정</a>
				</div>
			</div>
		</div>

		<!-- [D] 라인 연동 안내 레이어 -->
		<div class="u_likeit_module" style="display:none;">
			<div class="u_likeit_friends">
				<div class="u_list_area">
					<div class="u_txt"><p class="u_align">네이버와 라인을 연동하면, 타임라인 공유 <span class="u_in">&amp; 좋아요 한 친구를 알 수 있습니다.</span></p></div>
					<a href="#" class="u_btn_friend">연동하기</a>
					<div class="u_chk">
						<input type="checkbox" id="u_month_hide" checked="checked"><label for="u_month_hide" onclick="void(0)">한 달간 다시 보지 않기</label>
						<a href="#" class="u_btn_close">닫기</a>
					</div>
				</div>
			</div>
		</div>
		<!-- [D] 한번 공유/자동공유 안내 레이어 -->
		<div class="u_likeit_module" style="display:none;">
			<div class="u_likeit_friends">
				<div class="u_list_area">
					<p class="u_txt3">라인 타임라인 공유하시면, 친구들과 함께 볼 수 있습니다.</p>
					<div class="u_btn_area">
						<a href="#" class="u_btn_one">한번 공유하기</a>
						<a href="#" class="u_btn_auto">자동 공유하기</a>
					</div>
					<div class="u_chk">
						<input type="checkbox" id="u_month_hide" checked="checked"><label for="u_month_hide" onclick="void(0)">한 달간 다시 보지 않기</label>
						<a href="#" class="u_btn_close">닫기</a>
					</div>
				</div>
			</div>
		</div>