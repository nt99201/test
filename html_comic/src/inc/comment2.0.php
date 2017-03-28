<div class="u_cbox">
	<div class="u_cbox_wrap">
		<!-- 헤더 -->
		<div class="u_cbox_head">
			<h5 class="u_cbox_title">컷댓글</h5>
			<span class="u_cbox_count">2,725</span>
			<button type="button" class="u_cbox_btn_refresh">새로고침</button>
		</div>
		<!-- //헤더 -->

		<!-- 모바일 쓰기전용 화면 헤더 -->
		<div class="u_cbox_back" style="display:none"><a href="#none" class="u_cbox_btn_back"><span class="u_cbox_ico_back">댓글목록</span></a></div>
		<!-- //모바일 쓰기전용 화면 헤더 -->

		<div class="u_cbox_content_wrap">
			<!-- 자동 업데이트 -->
			<div class="u_cbox_refresh_wrap">
				<strong class="u_vc">자동업데이트 설정</strong>
				<div class="u_cbox_refresh_area">
					<!-- 활성화 됐을 때 : 클래스 on 추가 , 대체텍스트 ON/OFF 구분 -->
					<button type="button" class="u_cbox_btn_refresh_auto" title="자동 업데이트 활성화"><span class="u_cbox_ico_refresh_auto">OFF</span></button>
					<span class="u_cbox_txt_refresh">자동 업데이트</span>
				</div>
				<div class="u_cbox_refresh_box">
					<span class="u_cbox_refresh_time">20초 후</span>
					<button type="button" class="u_cbox_btn_refresh_man" title="댓글 새로고침"><span class="u_cbox_ico_refresh_man">댓글 새로고침</span></button>
				</div>
			</div>
			<!-- //자동 업데이트 -->

			<!-- 정렬 옵션 -->
			<!--<div class="u_cbox_sort">
				<div class="u_cbox_sort_option">
					<strong class="u_vc">댓글 정렬 옵션 선택</strong>
					&lt;!&ndash; [D] 선택시 : 클래스 on 추가, 대체 텍스트 '선택됨' 추가 &ndash;&gt;
					<a href="#none" class="u_cbox_select on">
						<span class="u_cbox_sort_label">BEST댓글</span>
						<span class="u_cbox_ico_select">선택됨</span>
					</a>
					<a href="#none" class="u_cbox_select">
						<span class="u_cbox_sort_label">전체댓글</span>
						<span class="u_cbox_ico_select"></span>
					</a>
				</div>
				&lt;!&ndash; 정렬 안내 &ndash;&gt;
				<div class="u_cbox_sort_info">
					<strong class="u_cbox_info_label">BEST댓글 운영 기준 안내</strong>
					<a href="#none" class="u_cbox_btn_help">안내 레이어 보기</a>
				</div>
				<div class="u_cbox_layer u_cbox_layer_sort" style="display:block">
					<strong class="u_cbox_info_title"><span class="u_cbox_ico_help"></span>BEST댓글</strong>
					<p class="u_cbox_info_txt">등록된 댓글 수, 공감 수 등으로 BEST<br> 댓글이 선정되며, 구체적인 방식은 예고없이<br> 변경될 수 있습니다.</p>
					<p class="u_cbox_info_txt">"공감"의 일정 비율 이상 "비공감"을 받게<br> 되거나, 타인에게 불쾌감을 주거나,<br> 창작자의 요청을 받은 경우 Best 댓글에서<br> 제외 될 수 있습니다.</p>
					<a href="#none" class="u_cbox_btn_info_close">BEST댓글 운영 기준 안내 레이어 닫기</a>
				</div>
				&lt;!&ndash; //정렬 안내 &ndash;&gt;
			</div>-->
			<div class="u_cbox_sort">
				<div class="u_cbox_sort_option">
					<strong class="u_vc">댓글 정렬 옵션 선택</strong>
					<!-- [D] 선택시 : 클래스 on 추가, 대체 텍스트 '선택됨' 추가 -->
					<a href="#none" class="u_cbox_select on">
						<span class="u_cbox_sort_label">BEST 댓글</span>
						<span class="u_cbox_ico_select">선택됨</span>
					</a>
					<a href="#none" class="u_cbox_select">
						<span class="u_cbox_sort_label">전체 댓글</span>
						<span class="u_cbox_ico_select"></span>
					</a>
				</div>
			</div>
			<!-- //정렬 옵션 -->

			<!-- 댓글 없을 때 -->
			<div class="u_cbox_comment_none">
				<span class="u_cbox_ico_comment_none"></span>
				<span class="u_cbox_contents_none">댓글이 없습니다.<br>첫번째 댓글을 남겨주세요.</span>
			</div>
			<!-- 댓글 없을 때 -->

			<!-- 로딩중 -->
			<div class="u_cbox_loading" style="display:none">
				<span class="u_cbox_ico_loading">로딩중</span>
			</div>
			<!-- //로딩중 -->

			<!-- 댓글 리스트 -->
			<ul class="u_cbox_list">
			<!-- 내가 쓴 글 : 수정/삭제 버튼 추가 -->
			<li class="u_cbox_comment">
				<!-- [D] 프로필형일 때 : 클래스 u_cbox_type_profile 추가
						내가 쓴 글일 때 : 클래스 u_cbox_mine 추가
						수정 중일 때 : 클래스 u_cbox_type_edit 추가 -->
				<div class="u_cbox_comment_box u_cbox_mine">
					<div class="u_cbox_thumb">
						<a href="#none" class="u_cbox_thumb_wrap">
							<img src="http://static.naver.net/common/comment/img_default_profile.gif" alt="프로필 이미지" class="u_cbox_img_profile">
							<span class="u_cbox_thumb_mask"></span>
						</a>
					</div>
					<div class="u_cbox_area">
						<div class="u_cbox_info">
							<span class="u_cbox_name">보노보노보노보노끝</span>
							<span class="u_cbox_ico_manage">WRITER</span>
							<span class="u_cbox_info_sub">
								<span class="u_cbox_date">28 minutes ago</span>
								<span class="u_cbox_work_sub">
									<a href="#none" class="u_cbox_btn_open"><span class="u_cbox_in_open">옵션 펼쳐보기</span></a>
									<span class="u_cbox_work_box">
										<span class="u_cbox_work_inner">
											<a href="#none" class="u_cbox_btn_edit"><span class="u_cbox_in_edit">수정</span></a>
											<a href="#none" class="u_cbox_btn_delete"><span class="u_cbox_in_delete">삭제</span></a>
										</span>
									</span>
								</span>
							</span>
						</div>
						<div class="u_cbox_text">
							<span class="u_cbox_ico_best">BEST</span><span class="u_cbox_contents">댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용</span>
						</div>
						<div class="u_cbox_tool">
							<a href="#none" class="u_cbox_btn_reply">
								<strong class="u_cbox_reply_txt">답글</strong>
								<span class="u_cbox_reply_cnt">(0)</span>
							</a>
							<div class="u_cbox_sns_set" style="display:none">
								<!--<a href="#none" class="u_cbox_btn_sns"><span class="u_cbox_ico_line">라인</span></a>-->
								<a href="#none" class="u_cbox_btn_sns"><span class="u_cbox_ico_facebook">페이스북</span></a>
								<!--<a href="#none" class="u_cbox_btn_sns"><span class="u_cbox_ico_twitter">트위터</span></a>-->
							</div>
							<div class="u_cbox_recomm_set">
								<strong class="u_vc">공감/비공감</strong>
								<a href="#none" class="u_cbox_btn_recomm" title="이 댓글에 공감합니다">
									<span class="u_cbox_ico_recomm">공감</span>
									<em class="u_cbox_cnt_recomm">100</em>
								</a>
								<a href="#none" class="u_cbox_btn_recomm" title="이 댓글에 공감하지 않습니다">
									<span class="u_cbox_ico_unrecomm">비공감</span>
									<em class="u_cbox_cnt_unrecomm">0</em>
								</a>
							</div>
						</div>
					</div>
				</div>
			</li>

			<!-- 댓글의 답글 있는 상태 : 펼침 UI시 답글 버튼(u_cbox_btn_reply)에 u_cbox_type_open 클래스 추가 -->
			<li class="u_cbox_comment">
				<!-- [D] 프로필형일 때 : 클래스 u_cbox_type_profile 추가 -->
				<div class="u_cbox_comment_box">
					<div class="u_cbox_thumb">
						<a href="#none" class="u_cbox_thumb_wrap">
							<img src="http://static.naver.net/common/comment/img_default_profile.gif" alt="프로필 이미지" class="u_cbox_img_profile">
							<span class="u_cbox_thumb_mask"></span>
						</a>
					</div>
					<div class="u_cbox_area">
						<div class="u_cbox_info">
							<span class="u_cbox_name">보노보노보노보노보노보노</span>
							<span class="u_cbox_info_sub">
								<span class="u_cbox_date">3 Menit yang lalu</span>
								<span class="u_cbox_work_main">
									<a href="#none" class="u_cbox_btn_report"><span class="u_cbox_in_report">Laporkan</span></a>
								</span>
								<span class="u_cbox_work_sub">
									<a href="#none" class="u_cbox_btn_open"><span class="u_cbox_in_open">옵션 펼쳐보기</span></a>
									<span class="u_cbox_work_box">
										<span class="u_cbox_work_inner">
											<a href="#none" class="u_cbox_btn_delete"><span class="u_cbox_in_delete">삭제</span></a>
											<a href="#none" class="u_cbox_btn_block"><span class="u_cbox_in_block">차단</span></a>
										</span>
									</span>
								</span>
							</span>
						</div>
						<div class="u_cbox_text">
							<span class="u_cbox_ico_best">BEST</span><span class="u_cbox_contents">댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용</span>
						</div>
						<div class="u_cbox_tool">
							<!-- [D] 답글이 열린 상태일 때 : 클래스 on 추가
								펼침 UI시 버튼에 u_cbox_type_open 클래스 추가 -->
							<a href="#none" class="u_cbox_btn_reply on">
								<strong class="u_cbox_reply_txt">답글</strong>
								<span class="u_cbox_reply_cnt">(999+)</span>
							</a>
							<div class="u_cbox_sns_set" style="display:none">
								<a href="#none" class="u_cbox_btn_sns"><span class="u_cbox_ico_line">라인</span></a>
								<a href="#none" class="u_cbox_btn_sns"><span class="u_cbox_ico_facebook">페이스북</span></a>
								<!--<a href="#none" class="u_cbox_btn_sns"><span class="u_cbox_ico_twitter">트위터</span></a>-->
							</div>
							<div class="u_cbox_recomm_set">
								<strong class="u_vc">공감/비공감</strong>
								<a href="#none" class="u_cbox_btn_recomm" title="이 댓글에 공감합니다">
									<span class="u_cbox_ico_recomm">공감</span>
									<em class="u_cbox_cnt_recomm">9999</em>
								</a>
								<a href="#none" class="u_cbox_btn_recomm" title="이 댓글에 공감하지 않습니다">
									<span class="u_cbox_ico_unrecomm">비공감</span>
									<em class="u_cbox_cnt_unrecomm">45</em>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="u_cbox_reply_area">
					<!-- 댓글의 답글 목록 -->
					<ul class="u_cbox_list">
					<li class="u_cbox_comment">
						<div class="u_cbox_comment_box">
							<span class="u_cbox_ico_reply"></span>
							<div class="u_cbox_thumb">
								<a href="#none" class="u_cbox_thumb_wrap">
									<img src="http://static.naver.net/common/comment/img_default_profile.gif" alt="프로필 이미지" class="u_cbox_img_profile">
									<span class="u_cbox_thumb_mask"></span>
								</a>
							</div>
							<div class="u_cbox_area">
								<div class="u_cbox_info">
									<span class="u_cbox_name">kkka****</span>
									<span class="u_cbox_info_sub">
										<span class="u_cbox_date">33 minutes ago</span>
										<span class="u_cbox_work_main">
											<a href="#none" class="u_cbox_btn_report"><span class="u_cbox_in_report">Report</span></a>
										</span>
										<span class="u_cbox_work_sub">
											<!-- [D] 옵션 펼쳐볼 때 : 클래스 on 추가, 대체텍스트 '접기' 편경 -->
											<a href="#none" class="u_cbox_btn_open"><span class="u_cbox_in_open">옵션 펼쳐보기</span></a>
											<span class="u_cbox_work_box">
												<span class="u_cbox_work_inner">
													<a href="#none" class="u_cbox_btn_delete"><span class="u_cbox_in_delete">삭제</span></a>
													<a href="#none" class="u_cbox_btn_block"><span class="u_cbox_in_block">차단</span></a>
												</span>
											</span>
										</span>
									</span>
								</div>
								<div class="u_cbox_text">
									<!-- [D] 멘션 타겟 이름 : 링크 없을 때 span -->
									<a href="#none" class="u_cbox_target_name">@진저레몬티</a>
									<span class="u_cbox_contents">댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글
										<!-- 멘션 타겟 이름 -->
										<span class="u_cbox_target_name">@진저레몬티</span> 내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용</span>
								</div>
								<div class="u_cbox_tool">
									<a href="#none" class="u_cbox_btn_reply">
										<strong class="u_cbox_reply_txt">답글</strong>
									</a>
									<div class="u_cbox_sns_set" style="display:none">
										<a href="#none" class="u_cbox_btn_sns"><span class="u_cbox_ico_line">라인</span></a>
										<a href="#none" class="u_cbox_btn_sns"><span class="u_cbox_ico_facebook">페이스북</span></a>
										<a href="#none" class="u_cbox_btn_sns"><span class="u_cbox_ico_twitter">트위터</span></a>
									</div>
									<div class="u_cbox_recomm_set">
										<strong class="u_vc">공감/비공감</strong>
										<a href="#none" class="u_cbox_btn_recomm" title="이 댓글에 공감합니다">
											<span class="u_cbox_ico_recomm">공감</span>
											<em class="u_cbox_cnt_recomm">45</em>
										</a>
										<a href="#none" class="u_cbox_btn_recomm" title="이 댓글에 공감하지 않습니다">
											<span class="u_cbox_ico_unrecomm">비공감</span>
											<em class="u_cbox_cnt_unrecomm">9999</em>
										</a>
									</div>
								</div>
							</div>
						</div>
					</li>
					<!-- 내가 쓴 답글 -->
					<li class="u_cbox_comment">
						<div class="u_cbox_comment_box">
							<span class="u_cbox_ico_reply"></span>
							<div class="u_cbox_thumb">
								<a href="#none" class="u_cbox_thumb_wrap">
									<img src="http://static.naver.net/common/comment/img_default_profile.gif" alt="프로필 이미지" class="u_cbox_img_profile">
									<span class="u_cbox_thumb_mask"></span>
								</a>
							</div>
							<div class="u_cbox_area">
								<div class="u_cbox_info">
									<span class="u_cbox_name">abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyz</span>
									<span class="u_cbox_info_sub">
										<span class="u_cbox_date">33 minutes ago</span>
										<span class="u_cbox_work_sub">
											<a href="#none" class="u_cbox_btn_open"><span class="u_cbox_in_open">unfold</span></a>
											<span class="u_cbox_work_box">
												<span class="u_cbox_work_inner">
													<a href="#none" class="u_cbox_btn_edit"><span class="u_cbox_in_edit">Edit</span></a>
													<a href="#none" class="u_cbox_btn_delete"><span class="u_cbox_in_delete">Delete</span></a>
												</span>
											</span>
										</span>
									</span>
								</div>
								<div class="u_cbox_text">
									<span class="u_cbox_target_name">kkka****</span><span class="u_cbox_contents">댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용</span>
								</div>
								<div class="u_cbox_tool">
									<a href="#none" class="u_cbox_btn_reply">
										<strong class="u_cbox_reply_txt">답글</strong>
									</a>
									<div class="u_cbox_sns_set" style="display:none">
										<a href="#none" class="u_cbox_btn_sns"><span class="u_cbox_ico_line">라인</span></a>
										<a href="#none" class="u_cbox_btn_sns"><span class="u_cbox_ico_facebook">페이스북</span></a>
										<a href="#none" class="u_cbox_btn_sns"><span class="u_cbox_ico_twitter">트위터</span></a>
									</div>
									<div class="u_cbox_recomm_set">
										<strong class="u_vc">공감/비공감</strong>
										<a href="#none" class="u_cbox_btn_recomm" title="이 댓글에 공감합니다">
											<span class="u_cbox_ico_recomm">공감</span>
											<em class="u_cbox_cnt_recomm">45</em>
										</a>
										<a href="#none" class="u_cbox_btn_recomm" title="이 댓글에 공감하지 않습니다">
											<span class="u_cbox_ico_unrecomm">비공감</span>
											<em class="u_cbox_cnt_unrecomm">9999</em>
										</a>
									</div>
								</div>
							</div>
						</div>
					</li>
					<!-- //내가 쓴 답글 -->

					<!-- 내가 쓴 글 : 수정하기 -->
					<li class="u_cbox_comment">
						<!-- [D] 프로필형일 때 : 클래스 u_cbox_type_profile 추가
								내가 쓴 글일 때 : 클래스 u_cbox_mine 추가
								수정 중일 때 : 클래스 u_cbox_type_edit 추가 -->
						<div class="u_cbox_comment_box u_cbox_mine u_cbox_type_edit">
							<span class="u_cbox_ico_reply"></span>
							<div class="u_cbox_thumb">
								<a href="#none" class="u_cbox_thumb_wrap">
									<img src="http://static.naver.net/common/comment/img_default_profile.gif" alt="프로필 이미지" class="u_cbox_img_profile">
									<span class="u_cbox_thumb_mask"></span>
								</a>
							</div>
							<div class="u_cbox_area">
								<div class="u_cbox_info">
									<span class="u_cbox_name">abcdefghijklmno</span>
									<span class="u_cbox_info_sub">
										<span class="u_cbox_date">44 minutes ago</span>
										<span class="u_cbox_work_sub">
											<a href="#none" class="u_cbox_btn_open"><span class="u_cbox_in_open">unfold</span></a>
											<span class="u_cbox_work_box">
												<span class="u_cbox_work_inner">
													<a href="#none" class="u_cbox_btn_delete"><span class="u_cbox_in_delete">Delete</span></a>
												</span>
											</span>
										</span>
									</span>
								</div>
								<div class="u_cbox_text">
									<!-- [D] 댓글 수정 : 클래스 u_cbox_edit 추가
									댓글창에 포커스 되었을 때 : 클래스 u_cbox_focus 추가
									댓글창 입력사항 있을 때 : 클래스 u_cbox_writing 추가 -->
									<div class="u_cbox_write u_cbox_edit u_cbox_writing">
										<form action="">
											<fieldset>
												<legend class="u_vc">댓글 수정</legend>
												<div class="u_cbox_write_area">
													<div class="u_cbox_inbox">
														<textarea id="cbox_editbox" class="u_cbox_text" rows="3" cols="30">abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyz</textarea>
														<!-- [D]textarea 포커스상태와 입력이후 상태에서 u_vc 클래스 추가 -->
														<label for="cbox_editbox" class="u_cbox_guide u_vc">댓글쓰기</label>
													</div>
												</div>
												<div class="u_cbox_write_count">
													<span class="u_vc">현재 입력한 글자수</span>
													<strong class="u_cbox_count_num">0</strong>/<span class="u_vc">전체 입력 가능한 글자수 </span><span class="u_cbox_write_total">500</span>
												</div>
												<div class="u_cbox_upload">
													<span class="u_cbox_target_name">@abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyz</span>
													<span class="u_cbox_secret_tag">
														<input type="checkbox" class="u_cbox_secret_check" id="secretTag1">
														<label class="u_cbox_secret_label" for="secretTag1">비밀글</label>
													</span>
													<button type="button" class="u_cbox_btn_cancel">취소</button>
													<button type="button" class="u_cbox_btn_upload">등록</button>
												</div>
											</fieldset>
										</form>
									</div>
								</div>
								<div class="u_cbox_tool">
									<a href="#none" class="u_cbox_btn_reply">
										<strong class="u_cbox_reply_txt">답글</strong>
									</a>
									<div class="u_cbox_sns_set" style="display:none">
										<a href="#none" class="u_cbox_btn_sns"><span class="u_cbox_ico_line">라인</span></a>
										<!--<a href="#none" class="u_cbox_btn_sns"><span class="u_cbox_ico_facebook">페이스북</span></a>
										<a href="#none" class="u_cbox_btn_sns"><span class="u_cbox_ico_twitter">트위터</span></a>-->
									</div>
									<div class="u_cbox_recomm_set">
										<strong class="u_vc">공감/비공감</strong>
										<a href="#none" class="u_cbox_btn_recomm" title="이 댓글에 공감합니다">
											<span class="u_cbox_ico_recomm">공감</span>
											<em class="u_cbox_cnt_recomm">100</em>
										</a>
										<a href="#none" class="u_cbox_btn_recomm" title="이 댓글에 공감하지 않습니다">
											<span class="u_cbox_ico_unrecomm">비공감</span>
											<em class="u_cbox_cnt_unrecomm">45</em>
										</a>
									</div>
								</div>
							</div>
						</div>
					</li>

					<li class="u_cbox_comment">
						<div class="u_cbox_comment_box">
							<span class="u_cbox_ico_reply"></span>
							<div class="u_cbox_thumb">
								<a href="#none" class="u_cbox_thumb_wrap">
									<img src="http://static.naver.net/common/comment/img_default_profile.gif" alt="프로필 이미지" class="u_cbox_img_profile">
									<span class="u_cbox_thumb_mask"></span>
								</a>
							</div>
							<div class="u_cbox_area">
								<div class="u_cbox_info">
									<span class="u_cbox_name">abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyz</span>
									<span class="u_cbox_info_sub">
										<span class="u_cbox_date">48 Menit yang lalu</span>
										<span class="u_cbox_work_main">
											<a href="#none" class="u_cbox_btn_report"><span class="u_cbox_in_report">Laporkan</span></a>
										</span>
										<span class="u_cbox_work_sub">
											<a href="#none" class="u_cbox_btn_open"><span class="u_cbox_in_open">옵션 펼쳐보기</span></a>
											<span class="u_cbox_work_box">
												<span class="u_cbox_work_inner">
													<a href="#none" class="u_cbox_btn_delete"><span class="u_cbox_in_delete">삭제</span></a>
													<a href="#none" class="u_cbox_btn_block"><span class="u_cbox_in_block">차단</span></a>
												</span>
											</span>
										</span>
									</span>
								</div>
								<div class="u_cbox_text">
									<span class="u_cbox_contents">댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용</span>
								</div>
								<div class="u_cbox_tool">
									<a href="#none" class="u_cbox_btn_reply">
										<strong class="u_cbox_reply_txt">답글</strong>
									</a>
									<div class="u_cbox_sns_set" style="display:none">
										<!--<a href="#none" class="u_cbox_btn_sns"><span class="u_cbox_ico_line">라인</span></a>
										<a href="#none" class="u_cbox_btn_sns"><span class="u_cbox_ico_facebook">페이스북</span></a>-->
										<a href="#none" class="u_cbox_btn_sns"><span class="u_cbox_ico_twitter">트위터</span></a>
									</div>
									<div class="u_cbox_recomm_set">
										<strong class="u_vc">공감/비공감</strong>
										<a href="#none" class="u_cbox_btn_recomm" title="이 댓글에 공감합니다">
											<span class="u_cbox_ico_recomm">공감</span>
											<em class="u_cbox_cnt_recomm">0</em>
										</a>
										<a href="#none" class="u_cbox_btn_recomm" title="이 댓글에 공감하지 않습니다">
											<span class="u_cbox_ico_unrecomm">비공감</span>
											<em class="u_cbox_cnt_unrecomm">100</em>
										</a>
									</div>
								</div>
							</div>
						</div>
					</li>
					<!-- 비밀답글 -->
					<li class="u_cbox_comment">
						<div class="u_cbox_comment_box">
							<span class="u_cbox_ico_reply"></span>
							<div class="u_cbox_thumb">
								<a href="#none" class="u_cbox_thumb_wrap">
									<img src="http://static.naver.net/common/comment/img_default_profile.gif" alt="프로필 이미지" class="u_cbox_img_profile">
									<span class="u_cbox_thumb_mask"></span>
								</a>
							</div>
							<div class="u_cbox_area">
								<div class="u_cbox_info">
									<span class="u_cbox_name">abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyz</span>
									<span class="u_cbox_info_sub">
										<span class="u_cbox_date">48 Menit yang lalu</span>
										<span class="u_cbox_work_main">
											<a href="#none" class="u_cbox_btn_report"><span class="u_cbox_in_report">Laporkan</span></a>
										</span>
										<span class="u_cbox_work_sub">
											<a href="#none" class="u_cbox_btn_open"><span class="u_cbox_in_open">옵션 펼쳐보기</span></a>
											<span class="u_cbox_work_box">
												<span class="u_cbox_work_inner">
													<a href="#none" class="u_cbox_btn_delete"><span class="u_cbox_in_delete">삭제</span></a>
													<a href="#none" class="u_cbox_btn_block"><span class="u_cbox_in_block">차단</span></a>
												</span>
											</span>
										</span>
									</span>
								</div>
								<!-- [D] 비밀댓글일 때 : 클래스 u_cbox_secret 추가 -->
								<div class="u_cbox_text u_cbox_secret">
									<span class="u_cbox_secret_contents">비밀댓글입니다.</span><span class="u_cbox_target_name">ABCDEFGHIJKLMNOPQRSTUVWXYZABCDEFGHIJKLMNOPQRSTUVWXYZ</span><span class="u_cbox_contents">댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용</span>
								</div>
								<div class="u_cbox_tool">
									<!-- 댓글의 답글인 경우 카운트가 없음 -->
									<a href="#none" class="u_cbox_btn_reply">
										<strong class="u_cbox_reply_txt">답글</strong>
									</a>

									<div class="u_cbox_sns_set" style="display:none">
										<!--<a href="#none" class="u_cbox_btn_sns"><span class="u_cbox_ico_line">라인</span></a>
										<a href="#none" class="u_cbox_btn_sns"><span class="u_cbox_ico_facebook">페이스북</span></a>-->
										<a href="#none" class="u_cbox_btn_sns"><span class="u_cbox_ico_twitter">트위터</span></a>
									</div>
									<div class="u_cbox_recomm_set">
										<strong class="u_vc">공감/비공감</strong>
										<a href="#none" class="u_cbox_btn_recomm" title="이 댓글에 공감합니다">
											<span class="u_cbox_ico_recomm">공감</span>
											<em class="u_cbox_cnt_recomm">0</em>
										</a>
										<a href="#none" class="u_cbox_btn_recomm" title="이 댓글에 공감하지 않습니다">
											<span class="u_cbox_ico_unrecomm">비공감</span>
											<em class="u_cbox_cnt_unrecomm">100</em>
										</a>
									</div>
								</div>
							</div>
						</div>
					</li>
					<!-- //비밀답글 -->
					</ul>
					<!-- //댓글의 답글 목록 -->

					<!-- 댓글의 답글 목록 페이징 -->
					<div class="u_cbox_paginate">
						<a href="#none" class="u_cbox_btn_pre" title="이전"><span class="u_cbox_ico_page">이전 답글</span><span class="u_vc"> 목록으로 이동</span></a>
						<span class="u_cbox_pages">
							<em class="u_cbox_page_on">1 - 10</em>
							<span class="u_vc">현재 답글</span>
							<span class="u_cbox_page_bar">/</span>
							<em class="u_cbox_page_total">710</em>
							<span class="u_vc">전체 답글</span>
						</span>
						<a href="#none" class="u_cbox_btn_next" title="다음"><span class="u_cbox_ico_page">다음 답글</span><span class="u_vc"> 목록으로 이동</span></a>
					</div>
					<!-- //댓글의 답글 목록 페이징 -->

					<!-- 댓글의 답글 쓰기 -->
					<div class="u_cbox_write_wrap">
						<!-- [D] 프로필형일 때 : 클래스 u_cbox_type_profile 추가 -->
						<div class="u_cbox_write_box">
							<form action="">
								<fieldset>
									<legend class="u_vc">댓글의 답글 쓰기</legend>
									<span class="u_cbox_ico_reply"></span>

									<!-- sns 함께 쓰기 -->
									<div class="u_cbox_social" style="display:none">
										<strong class="u_vc">공유할 SNS 선택</strong>
										<span class="u_cbox_social_ch">
											<input type="checkbox" name="check1" id="chk_line" checked="checked" value="라인" class="u_cbox_chkbox">
											<label for="chk_line" class="u_cbox_chk_label u_cbox_chk_line">
												<span class="u_cbox_ico_line">라인</span>
											</label>
										</span>
										<span class="u_cbox_social_ch">
											<input type="checkbox" name="check1" id="chk_facebook" value="페이스북" class="u_cbox_chkbox">
											<label for="chk_facebook" class="u_cbox_chk_label u_cbox_chk_facebook">
												<span class="u_cbox_ico_facebook">페이스북</span>
											</label>
										</span>
										<span class="u_cbox_social_ch">
											<input type="checkbox" name="check1" id="chk_twitter" value="트위터" class="u_cbox_chkbox">
											<label for="chk_twitter" class="u_cbox_chk_label u_cbox_chk_twitter">
												<span class="u_cbox_ico_twitter">트위터</span>
											</label>
										</span>
										<span class="u_cbox_social_text">에 함께 등록</span>
										<button type="button" class="u_cbox_btn_setting">SNS 설정</button>
									</div>
									<!-- //sns 함께 쓰기 -->

									<!-- 프로필 썸네일 -->
									<div class="u_cbox_profile">
										<div class="u_cbox_thumb">
											<a href="#none" class="u_cbox_thumb_wrap">
												<img src="http://static.naver.net/common/comment/img_default_profile.gif" alt="프로필 이미지" class="u_cbox_img_profile">
												<span class="u_cbox_thumb_mask"></span>
											</a>
										</div>

									</div>
									<!-- //프로필 썸네일 -->

									<!-- 댓글 입력
									댓글창에 포커스 되었을 때 : 클래스 u_cbox_focus 추가
									댓글창 입력사항 있을 때 : 클래스 u_cbox_writing 추가 -->
									<div class="u_cbox_write">
										<legend class="u_vc">댓글 등록</legend>
										<div class="u_cbox_write_area">
											<div class="u_cbox_inbox">
												<textarea id="cbox_inbox_re" class="u_cbox_text" rows="3" cols="30"></textarea>
												<!-- [D]textarea 포커스상태와 입력이후 상태에서 u_vc 클래스 추가 -->
												<label for="cbox_inbox_re" class="u_cbox_guide">댓글쓰기</label>
											</div>
										</div>
										<div class="u_cbox_write_count">
											<span class="u_vc">현재 입력한 글자수</span>
											<strong class="u_cbox_count_num">0</strong>/<span class="u_vc">전체 입력 가능한 글자수 </span><span class="u_cbox_write_total">500</span>
										</div>
										<div class="u_cbox_upload">
											<span class="u_cbox_target_name">@abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyz</span>
											<span class="u_cbox_secret_tag">
												<input type="checkbox" class="u_cbox_secret_check" id="secretTag2">
												<label class="u_cbox_secret_label" for="secretTag2">비밀글</label>
											</span>
											<button type="button" class="u_cbox_btn_upload">등록</button>
										</div>
									</div>
									<!-- //댓글 입력 -->

								</fieldset>
							</form>
						</div>

						<!-- 스티커 -->
						<div class="u_cbox_sticker">
							<!-- 스티커 입력 -->
							<div class="u_cbox_write_sticker">
								<strong class="u_vc">스티커 댓글 입력</strong>
								<div class="u_cbox_upload_sticker">
									<button type="button" class="u_cbox_btn_upload_sticker">
										<span class="u_cbox_ico_char"></span>
										<span class="u_cbox_ico_upload_sticker">스티커 댓글</span>
										<span class="u_cbox_ico_arrow"></span>
									</button>
								</div>
							</div>
							<!-- //스티커 입력 -->

							<!-- 스티커 레이어 -->
							<!-- [D] 댓글이 없는 경우 : 인라인 스타일로 style="position:relative" 추가 -->
							<div class="u_cbox_layer u_cbox_layer_sticker" style="display:none;">
							<h6 class="u_cbox_tit_sticker"><span class="u_cbox_ico_tit">스티커</span></h6>

							<div class="u_cbox_nav_wrap">
								<strong class="u_vc">스티커세트 선택 탭</strong>
								<!-- 이전/다음 버튼 있을 때 노출 -->
								<button class="u_cbox_btn_nav_pre"><span class="u_cbox_ico_nav">이전</span></button>

								<!-- 스크롤 -->
								<div class="u_cbox_tab" id="u_cbox_view">
									<ul class="u_cbox_nav_sticker">
									<li class="u_cbox_tab_sticker">
										<span class="u_cbox_tab_wrap">
											<span class="u_cbox_ico_bar"></span>
											<button type="button" class="u_cbox_btn_tab"><span class="u_cbox_ico_tab_recent">최근사용</span></button>
											<span class="u_cbox_ico_underbar"></span>
										</span>
									</li>
									<!-- [D] 선택된 탭일 때 : 클래스 on 추가 -->
									<li class="u_cbox_tab_sticker on">
										<span class="u_cbox_tab_wrap">
											<span class="u_cbox_ico_bar"></span>
											<button type="button" class="u_cbox_btn_tab"><span class="u_cbox_ico_tab_01">스티커 세트1</span></button>
											<span class="u_cbox_ico_underbar"></span>
										</span>
									</li>
									<li class="u_cbox_tab_sticker">
										<span class="u_cbox_tab_wrap">
											<span class="u_cbox_ico_bar"></span>
											<button type="button" class="u_cbox_btn_tab"><span class="u_cbox_ico_tab_02">스티커 세트2</span></button>
											<span class="u_cbox_ico_underbar"></span>
										</span>
									</li>
									<li class="u_cbox_tab_sticker">
										<span class="u_cbox_tab_wrap">
											<span class="u_cbox_ico_bar"></span>
											<button type="button" class="u_cbox_btn_tab"><span class="u_cbox_ico_tab_03">스티커 세트3</span></button>
											<span class="u_cbox_ico_underbar"></span>
										</span>
									</li>
									</ul>
								</div>
								<!-- 스크롤 -->

								<!-- 이전/다음 버튼 있을 때 노출 -->
								<button class="u_cbox_btn_nav_next"><span class="u_cbox_ico_nav">다음</span></button>
							</div>

							<!-- 진도 스크롤 -->
							<div class="u_cbox_wrap_sticker" style="display:none">
								<div class="u_cbox_con_sticker u-cbox-scrollbox u-cbox-scrollbar-noscript" id="cbox_scroll_01">
									<div class="u_cbox_inner_sticker u-cbox-scrollbar-box">
										<div class="u-cbox-scrollbar-content">
											<ul class="u_cbox_list_sticker">
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/48.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/24.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											</ul>
										</div>
									</div>
									<div class="u-cbox-scrollbar-v">
										<div class="u-cbox-scrollbar-track">
											<div class="u-cbox-scrollbar-thumb"><span class="u-cbox-scrollbar-thumb-body"></span></div>
										</div>
									</div>
								</div>
							</div>
							<!-- //진도 스크롤 -->

							<!-- 진도 스크롤 -->
							<div class="u_cbox_wrap_sticker">
								<div class="u_cbox_con_sticker u-cbox-scrollbox u-cbox-scrollbar-noscript" id="cbox_scroll_02">
									<div class="u_cbox_inner_sticker u-cbox-scrollbar-box">
										<div class="u-cbox-scrollbar-content">
											<ul class="u_cbox_list_sticker">
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/01.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/02.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/03.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/04.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/05.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/06.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/07.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/08.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/09.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/10.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/11.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/12.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/13.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/14.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/15.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/16.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/17.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/18.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/19.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/20.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/21.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/22.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/23.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/24.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											</ul>
										</div>
									</div>
									<div class="u-cbox-scrollbar-v">
										<div class="u-cbox-scrollbar-track">
											<div class="u-cbox-scrollbar-thumb"><span class="u-cbox-scrollbar-thumb-body"></span></div>
										</div>
									</div>
								</div>
							</div>
							<!-- //진도 스크롤 -->

							<!-- 진도 스크롤 -->
							<div class="u_cbox_wrap_sticker" style="display:none">
								<div class="u_cbox_con_sticker u-cbox-scrollbox u-cbox-scrollbar-noscript" id="cbox_scroll_03">
									<div class="u_cbox_inner_sticker u-cbox-scrollbar-box">
										<div class="u-cbox-scrollbar-content">
											<ul class="u_cbox_list_sticker">
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/25.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/26.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/27.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/28.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/29.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/30.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/31.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/32.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/33.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/34.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/35.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/36.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/37.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/38.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/39.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/40.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/41.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/42.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/43.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/44.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/45.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/46.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/47.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/48.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											</ul>
										</div>
									</div>
									<div class="u-cbox-scrollbar-v">
										<div class="u-cbox-scrollbar-track">
											<div class="u-cbox-scrollbar-thumb"><span class="u-cbox-scrollbar-thumb-body"></span></div>
										</div>
									</div>
								</div>
							</div>
							<!-- //진도 스크롤 -->

							<!-- 진도 스크롤 -->
							<div class="u_cbox_wrap_sticker" style="display:none">
								<div class="u_cbox_con_sticker u-cbox-scrollbox u-cbox-scrollbar-noscript" id="cbox_scroll_04">
									<div class="u_cbox_inner_sticker u-cbox-scrollbar-box">
										<div class="u-cbox-scrollbar-content">
											<ul class="u_cbox_list_sticker">
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/49.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/50.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/51.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/52.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/53.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<!--<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/54.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>-->
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/55.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/56.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/57.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>
											<!--<li class="u_cbox_box_sticker">
												<button type="button" class="u_cbox_btn_sticker">
													<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/58.gif)">
														<em class="u_cbox_name_sticker">line_characters_name</em>
													</span>
												</button>
											</li>-->
											</ul>
										</div>
									</div>
									<div class="u-cbox-scrollbar-v">
										<div class="u-cbox-scrollbar-track">
											<div class="u-cbox-scrollbar-thumb"><span class="u-cbox-scrollbar-thumb-body"></span></div>
										</div>
									</div>
								</div>
							</div>
							<!-- //진도 스크롤 -->

							<button class="u_cbox_btn_close">스티커 선택 레이어 닫기</button>
							</div>
							<!-- //스티커 레이어 -->
						</div>
						<!-- //스티커 -->

					</div>
					<!-- //댓글의 답글 쓰기 -->

					<!-- 답글 접기 -->
					<a href="#none" class="u_cbox_btn_fold">
						<span class="u_cbox_ico_fold">답글접기</span>
					</a>
				</div>

			</li>
			<!-- 내가 쓴 글 : 수정/삭제 버튼 추가 -->
			<li class="u_cbox_comment">
				<!-- [D] 프로필형일 때 : 클래스 u_cbox_type_profile 추가
						내가 쓴 글일 때 : 클래스 u_cbox_mine 추가
						수정 중일 때 : 클래스 u_cbox_type_edit 추가 -->
				<div class="u_cbox_comment_box u_cbox_mine">
					<div class="u_cbox_thumb">
						<a href="#none" class="u_cbox_thumb_wrap">
							<img src="http://static.naver.net/common/comment/img_default_profile.gif" alt="프로필 이미지" class="u_cbox_img_profile">
							<span class="u_cbox_thumb_mask"></span>
						</a>
					</div>
					<div class="u_cbox_area">
						<div class="u_cbox_info">
							<span class="u_cbox_name">ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmno</span>
							<span class="u_cbox_info_sub">
								<span class="u_cbox_date">48 Menit yang lalu</span>
								<span class="u_cbox_work_sub">
									<a href="#none" class="u_cbox_btn_open"><span class="u_cbox_in_open">옵션 펼쳐보기</span></a>
									<span class="u_cbox_work_box">
										<span class="u_cbox_work_inner">
											<a href="#none" class="u_cbox_btn_edit"><span class="u_cbox_in_edit">Edit</span></a>
											<a href="#none" class="u_cbox_btn_delete"><span class="u_cbox_in_delete">Hapus</span></a>
										</span>
									</span>
								</span>
							</span>
						</div>
						<div class="u_cbox_text">
							<span class="u_cbox_contents">abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyz</span>
						</div>
						<div class="u_cbox_tool">
							<a href="#none" class="u_cbox_btn_reply">
								<strong class="u_cbox_reply_txt">답글</strong>
								<span class="u_cbox_reply_cnt">0</span>
							</a>
							<div class="u_cbox_sns_set" style="display:none">
								<a href="#none" class="u_cbox_btn_sns"><span class="u_cbox_ico_line">라인</span></a>
								<!--<a href="#none" class="u_cbox_btn_sns"><span class="u_cbox_ico_facebook">페이스북</span></a>
								<a href="#none" class="u_cbox_btn_sns"><span class="u_cbox_ico_twitter">트위터</span></a>-->
							</div>
							<div class="u_cbox_recomm_set">
								<strong class="u_vc">공감/비공감</strong>
								<a href="#none" class="u_cbox_btn_recomm" title="이 댓글에 공감합니다">
									<span class="u_cbox_ico_recomm">공감</span>
									<em class="u_cbox_cnt_recomm">100</em>
								</a>
								<a href="#none" class="u_cbox_btn_recomm" title="이 댓글에 공감하지 않습니다">
									<span class="u_cbox_ico_unrecomm">비공감</span>
									<em class="u_cbox_cnt_unrecomm">45</em>
								</a>
							</div>
						</div>
					</div>
				</div>
			</li>
			<!-- 내가 쓴 글 : 수정하기 -->
			<li class="u_cbox_comment">
				<!-- [D] 프로필형일 때 : 클래스 u_cbox_type_profile 추가
						내가 쓴 글일 때 : 클래스 u_cbox_mine 추가
						수정 중일 때 : 클래스 u_cbox_type_edit 추가 -->
				<div class="u_cbox_comment_box u_cbox_mine u_cbox_type_edit">
					<div class="u_cbox_thumb">
						<a href="#none" class="u_cbox_thumb_wrap">
							<img src="http://static.naver.net/common/comment/img_default_profile.gif" alt="프로필 이미지" class="u_cbox_img_profile">
							<span class="u_cbox_thumb_mask"></span>
						</a>
					</div>
					<div class="u_cbox_area">
						<div class="u_cbox_info">
							<span class="u_cbox_name">abcdefghijklmno</span>
							<span class="u_cbox_info_sub">
								<span class="u_cbox_date">44 minutes ago</span>
								<span class="u_cbox_work_sub">
									<a href="#none" class="u_cbox_btn_open"><span class="u_cbox_in_open">옵션 펼쳐보기</span></a>
									<span class="u_cbox_work_box">
										<span class="u_cbox_work_inner">
											<a href="#none" class="u_cbox_btn_delete"><span class="u_cbox_in_delete">삭제</span></a>
										</span>
									</span>
								</span>
							</span>
						</div>
						<div class="u_cbox_text">
							<!-- [D] 댓글 수정 : 클래스 u_cbox_edit 추가
							댓글창에 포커스 되었을 때 : 클래스 u_cbox_focus 추가
							댓글창 입력사항 있을 때 : 클래스 u_cbox_writing 추가 -->
							<div class="u_cbox_write u_cbox_edit u_cbox_writing">
								<form action="">
									<fieldset>
										<legend class="u_vc">댓글 수정</legend>
										<div class="u_cbox_write_area">
											<div class="u_cbox_inbox">
												<textarea id="cbox_editbox" class="u_cbox_text" rows="3" cols="30">abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyz</textarea>
												<!-- [D]textarea 포커스상태와 입력이후 상태에서 u_vc 클래스 추가 -->
												<label for="cbox_editbox" class="u_cbox_guide u_vc">댓글쓰기</label>
											</div>
										</div>
										<div class="u_cbox_write_count">
											<span class="u_vc">현재 입력한 글자수</span>
											<strong class="u_cbox_count_num">0</strong>/<span class="u_vc">전체 입력 가능한 글자수 </span><span class="u_cbox_write_total">500</span>
										</div>
										<div class="u_cbox_upload">
											<span class="u_cbox_target_name">@abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyz</span>
											<span class="u_cbox_secret_tag">
												<input type="checkbox" class="u_cbox_secret_check" id="secretTag3">
												<label class="u_cbox_secret_label" for="secretTag3">비밀글</label>
											</span>
											<button type="button" class="u_cbox_btn_cancel">취소</button>
											<button type="button" class="u_cbox_btn_upload">등록</button>
										</div>
									</fieldset>
								</form>
							</div>
						</div>
						<div class="u_cbox_tool">
							<a href="#none" class="u_cbox_btn_reply">
								<strong class="u_cbox_reply_txt">답글</strong>
								<span class="u_cbox_reply_cnt">0</span>
							</a>
							<div class="u_cbox_sns_set" style="display:none">
								<a href="#none" class="u_cbox_btn_sns"><span class="u_cbox_ico_line">라인</span></a>
								<!--<a href="#none" class="u_cbox_btn_sns"><span class="u_cbox_ico_facebook">페이스북</span></a>
								<a href="#none" class="u_cbox_btn_sns"><span class="u_cbox_ico_twitter">트위터</span></a>-->
							</div>
							<div class="u_cbox_recomm_set">
								<strong class="u_vc">공감/비공감</strong>
								<a href="#none" class="u_cbox_btn_recomm" title="이 댓글에 공감합니다">
									<span class="u_cbox_ico_recomm">공감</span>
									<em class="u_cbox_cnt_recomm">100</em>
								</a>
								<a href="#none" class="u_cbox_btn_recomm" title="이 댓글에 공감하지 않습니다">
									<span class="u_cbox_ico_unrecomm">비공감</span>
									<em class="u_cbox_cnt_unrecomm">45</em>
								</a>
							</div>
						</div>
					</div>
				</div>
			</li>
			<!-- 스티커 댓글, 내가 쓴 글 : 수정/삭제 버튼 추가 -->
			<li class="u_cbox_comment">
				<!-- [D] 프로필형일 때 : 클래스 u_cbox_type_profile 추가
						내가 쓴 글일 때 : 클래스 u_cbox_mine 추가 -->
				<div class="u_cbox_comment_box u_cbox_mine">
					<div class="u_cbox_thumb">
						<a href="#none" class="u_cbox_thumb_wrap">
							<img src="http://static.naver.net/common/comment/img_default_profile.gif" alt="프로필 이미지" class="u_cbox_img_profile">
							<span class="u_cbox_thumb_mask"></span>
						</a>
					</div>
					<div class="u_cbox_area">
						<div class="u_cbox_info">
							<span class="u_cbox_name">보노보노보노보노끝</span>
							<span class="u_cbox_info_sub">
								<span class="u_cbox_date">28 minutes ago</span>
								<span class="u_cbox_work_sub">
									<a href="#none" class="u_cbox_btn_open"><span class="u_cbox_in_open">옵션 펼쳐보기</span></a>
									<span class="u_cbox_work_box">
										<span class="u_cbox_work_inner">
											<a href="#none" class="u_cbox_btn_edit"><span class="u_cbox_in_edit">수정</span></a>
											<a href="#none" class="u_cbox_btn_delete"><span class="u_cbox_in_delete">삭제</span></a>
										</span>
									</span>
								</span>
							</span>
						</div>
						<div class="u_cbox_text">
							<span class="u_cbox_sticker_wrap"><img src="img/stickers/PC/07.png" class="u_cbox_img_sticker"></span>
						</div>
						<div class="u_cbox_tool">
							<a href="#none" class="u_cbox_btn_reply">
								<strong class="u_cbox_reply_txt">답글</strong>
								<span class="u_cbox_reply_cnt">0</span>
							</a>
							<div class="u_cbox_sns_set" style="display:none">
								<!--<a href="#none" class="u_cbox_btn_sns"><span class="u_cbox_ico_line">라인</span></a>-->
								<a href="#none" class="u_cbox_btn_sns"><span class="u_cbox_ico_facebook">페이스북</span></a>
								<!--<a href="#none" class="u_cbox_btn_sns"><span class="u_cbox_ico_twitter">트위터</span></a>-->
							</div>
							<div class="u_cbox_recomm_set">
								<strong class="u_vc">공감/비공감</strong>
								<a href="#none" class="u_cbox_btn_recomm" title="이 댓글에 공감합니다">
									<span class="u_cbox_ico_recomm">공감</span>
									<em class="u_cbox_cnt_recomm">100</em>
								</a>
								<a href="#none" class="u_cbox_btn_recomm" title="이 댓글에 공감하지 않습니다">
									<span class="u_cbox_ico_unrecomm">비공감</span>
									<em class="u_cbox_cnt_unrecomm">0</em>
								</a>
							</div>
						</div>
					</div>
				</div>
			</li>
			<!-- 이미지별 댓글
				댓글의 답글 있는 상태 : 펼침 UI시 답글 버튼(u_cbox_btn_reply)에 u_cbox_type_open 클래스 추가 -->
			<li class="u_cbox_comment">
				<!-- [D] 프로필형일 때 : 클래스 u_cbox_type_profile 추가
						내가 쓴 글일 때 : 클래스 u_cbox_mine 추가
						수정중일 때 : 클래스 u_cbox_type_edit 추가 -->
				<div class="u_cbox_comment_box">
					<div class="u_cbox_thumb">
						<a href="#none" class="u_cbox_thumb_wrap">
							<img src="http://static.naver.net/common/comment/img_default_profile.gif" alt="프로필 이미지" class="u_cbox_img_profile">
							<span class="u_cbox_thumb_mask"></span>
						</a>
					</div>
					<div class="u_cbox_area">
						<div class="u_cbox_info">
							<span class="u_cbox_name">abcdefghijklmno</span>
							<span class="u_cbox_info_sub">
								<span class="u_cbox_date">44 minutes ago</span>
								<span class="u_cbox_work_main">
									<a href="#none" class="u_cbox_btn_report"><span class="u_cbox_in_report">Report</span></a>
								</span>
								<span class="u_cbox_work_sub">
									<a href="#none" class="u_cbox_btn_open"><span class="u_cbox_in_open">옵션 펼쳐보기</span></a>
									<span class="u_cbox_work_box">
										<span class="u_cbox_work_inner">
											<a href="#none" class="u_cbox_btn_delete"><span class="u_cbox_in_delete">Delete</span></a>
											<a href="#none" class="u_cbox_btn_block"><span class="u_cbox_in_block">Block</span></a>
										</span>
									</span>
								</span>
							</span>
						</div>
						<div class="u_cbox_pic">
							<a href="#none" class="u_cbox_pic_wrap" title="원본 이미지 보기">
								<img src="http://dev.ui.naver.com/tmp/?52x52_temp_n_D9D9D9_100" class="u_cbox_img_contents" alt="임시 이미지">
								<span class="u_cbox_pic_mask"></span>
							</a>
						</div>
						<div class="u_cbox_text">
							<span class="u_cbox_contents">댓글 펼침 UI 적용된 이미지별 댓글입니다. 답글 버튼에 클래스 추가되었습니다.<br>댓글의 답글에는 붙지 않아요.</span>
						</div>
						<div class="u_cbox_tool">
							<!-- [D] 답글이 열린 상태일 때 : 클래스 on 추가
								펼침 UI시 버튼에 u_cbox_type_open 클래스 추가 -->
							<a href="#cbox_inbox_re2" class="u_cbox_btn_reply u_cbox_type_open">
								<strong class="u_cbox_reply_txt">답글</strong>
								<span class="u_cbox_reply_cnt">0</span>
							</a>
							<div class="u_cbox_sns_set" style="display:none">
								<a href="#none" class="u_cbox_btn_sns"><span class="u_cbox_ico_line">라인</span></a>
								<!--<a href="#none" class="u_cbox_btn_sns"><span class="u_cbox_ico_facebook">페이스북</span></a>
								<a href="#none" class="u_cbox_btn_sns"><span class="u_cbox_ico_twitter">트위터</span></a>-->
							</div>
							<div class="u_cbox_recomm_set">
								<strong class="u_vc">공감/비공감</strong>
								<a href="#none" class="u_cbox_btn_recomm" title="이 댓글에 공감합니다">
									<span class="u_cbox_ico_recomm">공감</span>
									<em class="u_cbox_cnt_recomm">100</em>
								</a>
								<a href="#none" class="u_cbox_btn_recomm" title="이 댓글에 공감하지 않습니다">
									<span class="u_cbox_ico_unrecomm">비공감</span>
									<em class="u_cbox_cnt_unrecomm">45</em>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="u_cbox_reply_area">
					<!-- 댓글의 답글 목록 -->
					<ul class="u_cbox_list">
					<!-- 내가 쓴 답글 -->
					<li class="u_cbox_comment">
						<div class="u_cbox_comment_box">
							<span class="u_cbox_ico_reply"></span>
							<div class="u_cbox_thumb">
								<a href="#none" class="u_cbox_thumb_wrap">
									<img src="http://static.naver.net/common/comment/img_default_profile.gif" alt="프로필 이미지" class="u_cbox_img_profile">
									<span class="u_cbox_thumb_mask"></span>
								</a>
							</div>
							<div class="u_cbox_area">
								<div class="u_cbox_info">
									<span class="u_cbox_name">abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyz</span>
									<span class="u_cbox_info_sub">
										<span class="u_cbox_date">33 minutes ago</span>
										<span class="u_cbox_work_sub">
											<a href="#none" class="u_cbox_btn_open"><span class="u_cbox_in_open">unfold</span></a>
											<span class="u_cbox_work_box">
												<span class="u_cbox_work_inner">
													<a href="#none" class="u_cbox_btn_edit"><span class="u_cbox_in_edit">Edit</span></a>
													<a href="#none" class="u_cbox_btn_delete"><span class="u_cbox_in_delete">Delete</span></a>
												</span>
											</span>
										</span>
									</span>
								</div>
								<div class="u_cbox_text">
									<span class="u_cbox_target_name">kkka****</span><span class="u_cbox_contents">댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용</span>
								</div>
								<div class="u_cbox_tool">
									<a href="#none" class="u_cbox_btn_reply">
										<strong class="u_cbox_reply_txt">답글</strong>
									</a>
									<div class="u_cbox_sns_set" style="display: none;">
										<a href="#none" class="u_cbox_btn_sns"><span class="u_cbox_ico_line">라인</span></a>
										<a href="#none" class="u_cbox_btn_sns"><span class="u_cbox_ico_facebook">페이스북</span></a>
										<a href="#none" class="u_cbox_btn_sns"><span class="u_cbox_ico_twitter">트위터</span></a>
									</div>
									<div class="u_cbox_recomm_set">
										<strong class="u_vc">공감/비공감</strong>
										<a href="#none" class="u_cbox_btn_recomm" title="이 댓글에 공감합니다">
											<span class="u_cbox_ico_recomm">공감</span>
											<em class="u_cbox_cnt_recomm">45</em>
										</a>
										<a href="#none" class="u_cbox_btn_recomm" title="이 댓글에 공감하지 않습니다">
											<span class="u_cbox_ico_unrecomm">비공감</span>
											<em class="u_cbox_cnt_unrecomm">9999</em>
										</a>
									</div>
								</div>
							</div>
						</div>
					</li>
					<!-- //내가 쓴 답글 -->

					<!-- 내가 쓴 글 : 수정하기 -->
					<li class="u_cbox_comment">
						<!-- [D] 프로필형일 때 : 클래스 u_cbox_type_profile 추가
								내가 쓴 글일 때 : 클래스 u_cbox_mine 추가
								수정 중일 때 : 클래스 u_cbox_type_edit 추가 -->
						<div class="u_cbox_comment_box u_cbox_mine u_cbox_type_edit">
							<span class="u_cbox_ico_reply"></span>
							<div class="u_cbox_thumb">
								<a href="#none" class="u_cbox_thumb_wrap">
									<img src="http://static.naver.net/common/comment/img_default_profile.gif" alt="프로필 이미지" class="u_cbox_img_profile">
									<span class="u_cbox_thumb_mask"></span>
								</a>
							</div>
							<div class="u_cbox_area">
								<div class="u_cbox_info">
									<span class="u_cbox_name">abcdefghijklmno</span>
									<span class="u_cbox_info_sub">
										<span class="u_cbox_date">44 minutes ago</span>
										<span class="u_cbox_work_sub">
											<a href="#none" class="u_cbox_btn_open"><span class="u_cbox_in_open">unfold</span></a>
											<span class="u_cbox_work_box">
												<span class="u_cbox_work_inner">
													<a href="#none" class="u_cbox_btn_delete"><span class="u_cbox_in_delete">Delete</span></a>
												</span>
											</span>
										</span>
									</span>
								</div>
								<div class="u_cbox_text">
									<!-- [D] 댓글 수정 : 클래스 u_cbox_edit 추가
									댓글창에 포커스 되었을 때 : 클래스 u_cbox_focus 추가
									댓글창 입력사항 있을 때 : 클래스 u_cbox_writing 추가 -->
									<div class="u_cbox_write u_cbox_edit u_cbox_writing">
										<form action="">
											<fieldset>
												<legend class="u_vc">댓글 수정</legend>
												<div class="u_cbox_write_area">
													<div class="u_cbox_inbox">
														<textarea id="cbox_editbox" class="u_cbox_text" rows="3" cols="30">abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyz</textarea>
														<!-- [D]textarea 포커스상태와 입력이후 상태에서 u_vc 클래스 추가 -->
														<label for="cbox_editbox" class="u_cbox_guide u_vc">댓글쓰기</label>
													</div>
												</div>
												<div class="u_cbox_write_count">
													<span class="u_vc">현재 입력한 글자수</span>
													<strong class="u_cbox_count_num">0</strong>/<span class="u_vc">전체 입력 가능한 글자수 </span><span class="u_cbox_write_total">500</span>
												</div>
												<div class="u_cbox_upload">
													<button type="button" class="u_cbox_btn_cancel">취소</button>
													<button type="button" class="u_cbox_btn_upload">등록</button>
												</div>
											</fieldset>
										</form>
									</div>
								</div>
								<div class="u_cbox_tool">
									<a href="#none" class="u_cbox_btn_reply">
										<strong class="u_cbox_reply_txt">답글</strong>
									</a>
									<div class="u_cbox_sns_set" style="display: none;">
										<a href="#none" class="u_cbox_btn_sns"><span class="u_cbox_ico_line">라인</span></a>
										<!--<a href="#none" class="u_cbox_btn_sns"><span class="u_cbox_ico_facebook">페이스북</span></a>
										<a href="#none" class="u_cbox_btn_sns"><span class="u_cbox_ico_twitter">트위터</span></a>-->
									</div>
									<div class="u_cbox_recomm_set">
										<strong class="u_vc">공감/비공감</strong>
										<a href="#none" class="u_cbox_btn_recomm" title="이 댓글에 공감합니다">
											<span class="u_cbox_ico_recomm">공감</span>
											<em class="u_cbox_cnt_recomm">100</em>
										</a>
										<a href="#none" class="u_cbox_btn_recomm" title="이 댓글에 공감하지 않습니다">
											<span class="u_cbox_ico_unrecomm">비공감</span>
											<em class="u_cbox_cnt_unrecomm">45</em>
										</a>
									</div>
								</div>
							</div>
						</div>
					</li>

					</ul>
					<!-- //댓글의 답글 목록 -->

					<!-- 댓글의 답글 목록 페이징 -->
					<div class="u_cbox_paginate">
						<a href="#none" class="u_cbox_btn_pre" title="이전"><span class="u_cbox_ico_page">이전 답글</span><span class="u_vc"> 목록으로 이동</span></a>
						<span class="u_cbox_pages">
							<em class="u_cbox_page_on">1 - 10</em>
							<span class="u_vc">현재 답글</span>
							<span class="u_cbox_page_bar">/</span>
							<em class="u_cbox_page_total">710</em>
							<span class="u_vc">전체 답글</span>
						</span>
						<a href="#none" class="u_cbox_btn_next" title="다음"><span class="u_cbox_ico_page">다음 답글</span><span class="u_vc"> 목록으로 이동</span></a>
					</div>
					<!-- //댓글의 답글 목록 페이징 -->

					<!-- 댓글의 답글 쓰기 -->
					<div class="u_cbox_write_wrap">
						<!-- [D] 프로필형일 때 : 클래스 u_cbox_type_profile 추가 -->
						<div class="u_cbox_write_box">
							<form action="">
								<fieldset>
									<legend class="u_vc">댓글의 답글 쓰기</legend>
									<span class="u_cbox_ico_reply"></span>

									<!-- sns 함께 쓰기 -->
									<div class="u_cbox_social" style="display: none;">
										<strong class="u_vc">공유할 SNS 선택</strong>
										<span class="u_cbox_social_ch">
											<input type="checkbox" name="check1" id="chk_line" checked="checked" value="라인" class="u_cbox_chkbox">
											<label for="chk_line" class="u_cbox_chk_label u_cbox_chk_line">
												<span class="u_cbox_ico_line">라인</span>
											</label>
										</span>
										<span class="u_cbox_social_ch">
											<input type="checkbox" name="check1" id="chk_facebook" value="페이스북" class="u_cbox_chkbox">
											<label for="chk_facebook" class="u_cbox_chk_label u_cbox_chk_facebook">
												<span class="u_cbox_ico_facebook">페이스북</span>
											</label>
										</span>
										<span class="u_cbox_social_ch">
											<input type="checkbox" name="check1" id="chk_twitter" value="트위터" class="u_cbox_chkbox">
											<label for="chk_twitter" class="u_cbox_chk_label u_cbox_chk_twitter">
												<span class="u_cbox_ico_twitter">트위터</span>
											</label>
										</span>
										<span class="u_cbox_social_text">에 함께 등록</span>
										<button type="button" class="u_cbox_btn_setting">SNS 설정</button>
									</div>
									<!-- //sns 함께 쓰기 -->

									<!-- 프로필 썸네일 -->
									<div class="u_cbox_profile">
										<div class="u_cbox_thumb">
											<a href="#none" class="u_cbox_thumb_wrap">
												<img src="http://static.naver.net/common/comment/img_default_profile.gif" alt="프로필 이미지" class="u_cbox_img_profile">
												<span class="u_cbox_thumb_mask"></span>
											</a>
										</div>

									</div>
									<!-- //프로필 썸네일 -->

									<!-- 댓글 입력
									댓글창에 포커스 되었을 때 : 클래스 u_cbox_focus 추가
									댓글창 입력사항 있을 때 : 클래스 u_cbox_writing 추가 -->
									<div class="u_cbox_write">
										<strong class="u_vc">댓글 등록</strong>
										<div class="u_cbox_write_area">
											<div class="u_cbox_inbox">
												<textarea id="cbox_inbox_re2" class="u_cbox_text" rows="3" cols="30"></textarea>
												<!-- [D]textarea 포커스상태와 입력이후 상태에서 u_vc 클래스 추가 -->
												<label for="cbox_inbox_re2" class="u_cbox_guide">댓글쓰기</label>
											</div>
										</div>
										<div class="u_cbox_write_count">
											<span class="u_vc">현재 입력한 글자수</span>
											<strong class="u_cbox_count_num">0</strong>/<span class="u_vc">전체 입력 가능한 글자수 </span><span class="u_cbox_write_total">500</span>
										</div>
										<div class="u_cbox_upload">
											<button type="button" class="u_cbox_btn_upload">등록</button>
										</div>
									</div>
									<!-- //댓글 입력 -->

								</fieldset>
							</form>
						</div>

						<!-- 스티커 -->
						<div class="u_cbox_sticker">
							<!-- 스티커 입력 -->
							<div class="u_cbox_write_sticker">
								<strong class="u_vc">스티커 댓글 입력</strong>
								<div class="u_cbox_upload_sticker">
									<button type="button" class="u_cbox_btn_upload_sticker">
										<span class="u_cbox_ico_char"></span>
										<span class="u_cbox_ico_upload_sticker">스티커 댓글</span>
										<span class="u_cbox_ico_arrow"></span>
									</button>
								</div>
							</div>
							<!-- //스티커 입력 -->

							<!-- 스티커 레이어 자리 -->

						</div>
						<!-- //스티커 -->

					</div>
					<!-- //댓글의 답글 쓰기 -->

					<!-- 답글 접기 -->
					<a href="#none" class="u_cbox_btn_fold">
						<span class="u_cbox_ico_fold">답글접기</span>
					</a>
				</div>
			</li>
			<!-- 이미지별 댓글, 내가 쓴 글 : 수정하기 -->
			<li class="u_cbox_comment">
				<!-- [D] 프로필형일 때 : 클래스 u_cbox_type_profile 추가
						내가 쓴 글일 때 : 클래스 u_cbox_mine 추가
						수정하기 일 때 : 클래스 u_cbox_type_edit 추가 -->
				<div class="u_cbox_comment_box u_cbox_mine u_cbox_type_edit">
					<div class="u_cbox_thumb">
						<a href="#none" class="u_cbox_thumb_wrap">
							<img src="http://static.naver.net/common/comment/img_default_profile.gif" alt="프로필 이미지" class="u_cbox_img_profile">
							<span class="u_cbox_thumb_mask"></span>
						</a>
					</div>
					<div class="u_cbox_area">
						<div class="u_cbox_info">
							<span class="u_cbox_name">abcdefghijklmno</span>
							<span class="u_cbox_info_sub">
								<span class="u_cbox_date">44 minutes ago</span>
								<span class="u_cbox_work_sub">
									<a href="#none" class="u_cbox_btn_open"><span class="u_cbox_in_open">옵션 펼쳐보기</span></a>
									<span class="u_cbox_work_box">
										<span class="u_cbox_work_inner">
											<a href="#none" class="u_cbox_btn_delete"><span class="u_cbox_in_delete">삭제</span></a>
										</span>
									</span>
								</span>
							</span>
						</div>
						<div class="u_cbox_pic">
							<a href="#none" class="u_cbox_pic_wrap" title="원본 이미지 보기">
								<img src="http://dev.ui.naver.com/tmp/?52x52_temp_n_D9D9D9_100" class="u_cbox_img_contents" alt="임시 이미지">
								<span class="u_cbox_pic_mask"></span>
							</a>
						</div>
						<div class="u_cbox_text">
							<!-- [D] 댓글 수정 : 클래스 u_cbox_edit 추가
							댓글창에 포커스 되었을 때 : 클래스 u_cbox_focus 추가
							댓글창 입력사항 있을 때 : 클래스 u_cbox_writing 추가 -->
							<div class="u_cbox_write u_cbox_edit u_cbox_writing">
								<form action="">
									<fieldset>
										<legend class="u_vc">댓글 수정</legend>
										<div class="u_cbox_write_area">
											<div class="u_cbox_inbox">
												<textarea id="cbox_editbox" class="u_cbox_text" rows="3" cols="30">이미지별 댓글을 수정하고 있습니다.
PC에서는 수정중에도 원본 이미지가 노출되고 모바일에서는 감춰두었습니다.
각 서비스에서 css로 제어해주시면 됩니다.</textarea>
												<!-- [D]textarea 포커스상태와 입력이후 상태에서 u_vc 클래스 추가 -->
												<label for="cbox_editbox" class="u_cbox_guide u_vc">댓글쓰기</label>
											</div>
										</div>
										<div class="u_cbox_write_count">
											<span class="u_vc">현재 입력한 글자수</span>
											<strong class="u_cbox_count_num">0</strong>/<span class="u_vc">전체 입력 가능한 글자수 </span><span class="u_cbox_write_total">500</span>
										</div>
										<div class="u_cbox_upload">
											<button type="button" class="u_cbox_btn_cancel">취소</button>
											<button type="button" class="u_cbox_btn_upload">등록</button>
										</div>
									</fieldset>
								</form>
							</div>
						</div>
						<div class="u_cbox_tool">
							<a href="#none" class="u_cbox_btn_reply">
								<strong class="u_cbox_reply_txt">답글</strong>
								<span class="u_cbox_reply_cnt">0</span>
							</a>
							<div class="u_cbox_sns_set" style="display:none">
								<a href="#none" class="u_cbox_btn_sns"><span class="u_cbox_ico_line">라인</span></a>
								<!--<a href="#none" class="u_cbox_btn_sns"><span class="u_cbox_ico_facebook">페이스북</span></a>
								<a href="#none" class="u_cbox_btn_sns"><span class="u_cbox_ico_twitter">트위터</span></a>-->
							</div>
							<div class="u_cbox_recomm_set">
								<strong class="u_vc">공감/비공감</strong>
								<a href="#none" class="u_cbox_btn_recomm" title="이 댓글에 공감합니다">
									<span class="u_cbox_ico_recomm">공감</span>
									<em class="u_cbox_cnt_recomm">100</em>
								</a>
								<a href="#none" class="u_cbox_btn_recomm" title="이 댓글에 공감하지 않습니다">
									<span class="u_cbox_ico_unrecomm">비공감</span>
									<em class="u_cbox_cnt_unrecomm">45</em>
								</a>
							</div>
						</div>
					</div>
				</div>
			</li>
			</ul>
			<!-- //댓글 리스트 -->
		</div>

		<!-- 페이징 : 모바일일 때 페이징 5개, 이전/다음 버튼만 노출 -->
		<!--<div class="u_cbox_paginate">
			<div class="u_cbox_page_wrap">
				<strong class="u_vc">페이지 이동하기</strong>
				<a href="#" class="u_cbox_pre u_cbox_pre_end" title="첫 페이지 목록으로 이동"><span class="u_cbox_ico_page">맨앞</span><span class="u_vc"> 페이지 목록으로 이동</span></a>
				&lt;!&ndash; [D] 이전/다음 페이지 없을 때 : <span> 태그로 적용 (딤드버튼 적용) &ndash;&gt;
				<span class="u_cbox_pre" title="이전 페이지 목록으로 이동"><span class="u_cbox_ico_page">이전</span><span class="u_vc"> 페이지 목록으로 이동</span></span>
				<strong class="u_cbox_page"><span class="u_cbox_ico_page">1</span><span class="u_vc"> 현재 페이지</span></strong>
				<a href="#none" class="u_cbox_page"><span class="u_cbox_ico_page">2</span></a>
				<a href="#none" class="u_cbox_page"><span class="u_cbox_ico_page">3</span></a>
				<a href="#none" class="u_cbox_page"><span class="u_cbox_ico_page">4</span></a>
				<a href="#none" class="u_cbox_page"><span class="u_cbox_ico_page">5</span></a>
				<a href="#none" class="u_cbox_page"><span class="u_cbox_ico_page">6</span></a>
				<a href="#none" class="u_cbox_page"><span class="u_cbox_ico_page">7</span></a>
				<a href="#none" class="u_cbox_page"><span class="u_cbox_ico_page">8</span></a>
				<a href="#none" class="u_cbox_page"><span class="u_cbox_ico_page">9</span></a>
				<a href="#none" class="u_cbox_page"><span class="u_cbox_ico_page">10</span></a>
				<a href="#none" class="u_cbox_next" title="다음 페이지 목록으로 이동"><span class="u_cbox_ico_page">다음</span><span class="u_vc"> 페이지 목록으로 이동</span></a>
				<a href="#none" class="u_cbox_next u_cbox_next_end" title="마지막 페이지 목록으로 이동"><span class="u_cbox_ico_page">맨뒤</span><span class="u_vc"> 페이지 목록으로 이동</span></a>
			</div>
		</div>-->
		<!-- //페이징 -->

		<!-- 페이징 : 모바일일 때 페이징 5개, 이전/다음 버튼만 노출 -->
		<!--<div class="u_cbox_paginate">
			<div class="u_cbox_page_wrap">
				<strong class="u_vc">페이지 이동하기</strong>
				<a href="#" class="u_cbox_pre u_cbox_pre_end" title="첫 페이지 목록으로 이동"><span class="u_cbox_ico_page">First</span><span class="u_vc"> 페이지 목록으로 이동</span></a>
				&lt;!&ndash; [D] 이전/다음 페이지 없을 때 : <span> 태그로 적용 (딤드버튼 적용) &ndash;&gt;
				<a href="#none" class="u_cbox_pre" title="이전 페이지 목록으로 이동"><span class="u_cbox_ico_page">Previous</span><span class="u_vc"> 페이지 목록으로 이동</span></a>
				<a href="#none" class="u_cbox_page"><span class="u_cbox_ico_page">21</span></a>
				<a href="#none" class="u_cbox_page"><span class="u_cbox_ico_page">22</span></a>
				<strong class="u_cbox_page"><span class="u_cbox_ico_page">23</span><span class="u_vc"> 현재 페이지</span></strong>
				<a href="#none" class="u_cbox_page"><span class="u_cbox_ico_page">24</span></a>
				<a href="#none" class="u_cbox_page"><span class="u_cbox_ico_page">25</span></a>
				<a href="#none" class="u_cbox_page"><span class="u_cbox_ico_page">26</span></a>
				<a href="#none" class="u_cbox_page"><span class="u_cbox_ico_page">27</span></a>
				<a href="#none" class="u_cbox_page"><span class="u_cbox_ico_page">28</span></a>
				<a href="#none" class="u_cbox_page"><span class="u_cbox_ico_page">29</span></a>
				<a href="#none" class="u_cbox_page"><span class="u_cbox_ico_page">30</span></a>
				&lt;!&ndash; [D] 이전/다음 페이지 없을 때 : <span> 태그로 적용 (딤드버튼 적용) &ndash;&gt;
				<a href="#none" class="u_cbox_next" title="다음 페이지 목록으로 이동"><span class="u_cbox_ico_page">Next</span><span class="u_vc"> 페이지 목록으로 이동</span></a>
				<a href="#none" class="u_cbox_next u_cbox_next_end" title="마지막 페이지 목록으로 이동"><span class="u_cbox_ico_page">Last</span><span class="u_vc"> 페이지 목록으로 이동</span></a>
			</div>
		</div>-->
		<!-- //페이징 -->

		<!-- 페이징 : 모바일일 때 페이징 5개, 이전/다음 버튼만 노출 -->
		<!--<div class="u_cbox_paginate">
			<div class="u_cbox_page_wrap">
				<strong class="u_vc">페이지 이동하기</strong>
				<a href="#" class="u_cbox_pre u_cbox_pre_end" title="첫 페이지 목록으로 이동"><span class="u_cbox_ico_page">맨앞</span><span class="u_vc"> 페이지 목록으로 이동</span></a>
				&lt;!&ndash; [D] 이전/다음 페이지 없을 때 : <span> 태그로 적용 (딤드버튼 적용) &ndash;&gt;
				<a href="#none" class="u_cbox_pre" title="이전 페이지 목록으로 이동"><span class="u_cbox_ico_page">이전</span><span class="u_vc"> 페이지 목록으로 이동</span></a>
				<a href="#none" class="u_cbox_page"><span class="u_cbox_ico_page">990</span></a>
				<a href="#none" class="u_cbox_page"><span class="u_cbox_ico_page">991</span></a>
				<a href="#none" class="u_cbox_page"><span class="u_cbox_ico_page">992</span></a>
				<a href="#none" class="u_cbox_page"><span class="u_cbox_ico_page">993</span></a>
				<strong class="u_cbox_page"><span class="u_cbox_ico_page">994</span><span class="u_vc"> 현재 선택된 페이지</span></strong>
				<a href="#none" class="u_cbox_page"><span class="u_cbox_ico_page">995</span></a>
				<a href="#none" class="u_cbox_page"><span class="u_cbox_ico_page">996</span></a>
				<a href="#none" class="u_cbox_page"><span class="u_cbox_ico_page">997</span></a>
				<a href="#none" class="u_cbox_page"><span class="u_cbox_ico_page">998</span></a>
				<a href="#none" class="u_cbox_page"><span class="u_cbox_ico_page">999</span></a>
				&lt;!&ndash; [D] 이전/다음 페이지 없을 때 : <span> 태그로 적용 (딤드버튼 적용) &ndash;&gt;
				<span class="u_cbox_next" title="다음 페이지 목록으로 이동"><span class="u_cbox_ico_page">다음</span><span class="u_vc"> 페이지 목록으로 이동</span></span>
				<a href="#none" class="u_cbox_next u_cbox_next_end" title="마지막 페이지 목록으로 이동"><span class="u_cbox_ico_page">맨뒤</span><span class="u_vc"> 페이지 목록으로 이동</span></a>
			</div>
		</div>-->
		<!-- //페이징 -->

		<!-- 페이징 : 이전/다음 -->
		<div class="u_cbox_paginate">
			<!-- [D] 이전/다음 페이지 없을 때 : <span> 태그로 적용 (딤드버튼 적용) -->
			<span class="u_cbox_btn_pre"><span class="u_cbox_ico_page">이전</span><span class="u_vc"> 댓글 목록으로 이동</span></span>
			<span class="u_cbox_pages">
				<em class="u_cbox_page_on">1 - 10</em>
				<span class="u_vc">현재 댓글</span>
				<span class="u_cbox_page_bar">/</span>
				<em class="u_cbox_page_total">710</em>
				<span class="u_vc">전체 댓글</span>
			</span>
			<!-- [D] 이전/다음 페이지 없을 때 : <span> 태그로 적용 (딤드버튼 적용) -->
			<a href="#none" class="u_cbox_btn_next"><span class="u_cbox_ico_page">다음</span><span class="u_vc"> 댓글 목록으로 이동</span></a>
		</div>
		<!-- //페이징 -->

		<!-- 페이징 : 이전/다음 -->
		<div class="u_cbox_paginate">
			<!-- [D] 이전/다음 페이지 없을 때 : <span> 태그로 적용 (딤드버튼 적용) -->
			<a href="#none" class="u_cbox_btn_pre"><span class="u_cbox_ico_page">previous</span><span class="u_vc"> 댓글 목록으로 이동</span></a>
			<span class="u_cbox_pages">
				<em class="u_cbox_page_on">500 - 510</em>
				<span class="u_vc">현재 댓글</span>
				<span class="u_cbox_page_bar">/</span>
				<em class="u_cbox_page_total">710</em>
				<span class="u_vc">전체 댓글</span>
			</span>
			<!-- [D] 이전/다음 페이지 없을 때 : <span> 태그로 적용 (딤드버튼 적용) -->
			<a href="#none" class="u_cbox_btn_next"><span class="u_cbox_ico_page">next</span><span class="u_vc"> 댓글 목록으로 이동</span></a>
		</div>
		<!-- //페이징 -->

		<!-- 페이징 : 이전/다음 -->
		<div class="u_cbox_paginate">
			<!-- [D] 이전/다음 페이지 없을 때 : <span> 태그로 적용 (딤드버튼 적용) -->
			<a href="#none" class="u_cbox_btn_pre"><span class="u_cbox_ico_page">이전</span><span class="u_vc"> 댓글 목록으로 이동</span></a>
			<span class="u_cbox_pages">
				<em class="u_cbox_page_on">700 - 710</em>
				<span class="u_vc">현재 댓글</span>
				<span class="u_cbox_page_bar">/</span>
				<em class="u_cbox_page_total">710</em>
				<span class="u_vc">전체 댓글</span>
			</span>
			<!-- [D] 이전/다음 페이지 없을 때 : <span> 태그로 적용 (딤드버튼 적용) -->
			<span class="u_cbox_btn_next"><span class="u_cbox_ico_page">다음</span><span class="u_vc"> 댓글 목록으로 이동</span></span>
		</div>
		<!-- //페이징 -->

		<!-- 로딩중 -->
		<div class="u_cbox_loading_bar"><span class="u_cbox_ico_loading">로딩중</span></div>
		<!-- 로딩중 -->

	<div class="u_cbox_write_wrap">
			<!-- [D] 댓글 쓰기 - 프로필형일 때 : 클래스 u_cbox_type_profile 추가 -->
			<div class="u_cbox_write_box">
				<form action="">
					<fieldset>
						<legend class="u_vc">댓글 쓰기</legend>

						<!-- sns 함께 쓰기 -->
						<div class="u_cbox_social" style="display:none">
							<strong class="u_vc">공유할 SNS 선택</strong>
							<span class="u_cbox_social_ch">
								<input type="checkbox" name="check1" id="chk_line" checked="checked" value="라인" class="u_cbox_chkbox on">
								<label for="chk_line" class="u_cbox_chk_label u_cbox_chk_line">
									<span class="u_cbox_ico_line">라인</span>
								</label>
							</span>
							<span class="u_cbox_social_ch">
								<input type="checkbox" name="check1" id="chk_facebook" value="페이스북" class="u_cbox_chkbox">
								<label for="chk_facebook" class="u_cbox_chk_label u_cbox_chk_facebook">
									<span class="u_cbox_ico_facebook">페이스북</span>
								</label>
							</span>
							<span class="u_cbox_social_ch">
								<input type="checkbox" name="check1" id="chk_twitter" value="트위터" class="u_cbox_chkbox">
								<label for="chk_twitter" class="u_cbox_chk_label u_cbox_chk_twitter">
									<span class="u_cbox_ico_twitter">트위터</span>
								</label>
							</span>
							<span class="u_cbox_social_text">에 함께 등록</span>
							<button type="button" class="u_cbox_btn_setting">SNS 설정</button>
						</div>
						<!-- //sns 함께 쓰기 -->

						<!-- 프로필 썸네일 -->
						<div class="u_cbox_profile">
							<div class="u_cbox_thumb">
								<a href="#none" class="u_cbox_thumb_wrap">
									<img src="http://static.naver.net/common/comment/img_default_profile.gif" alt="프로필 이미지" class="u_cbox_img_profile">
									<span class="u_cbox_thumb_mask"></span>
								</a>
							</div>

						</div>
						<!-- //프로필 썸네일 -->

						<!-- 댓글 입력
						댓글창에 포커스 되었을 때 : 클래스 u_cbox_focus 추가
						댓글창 입력사항 있을 때 : 클래스 u_cbox_writing 추가 -->
						<div class="u_cbox_write">
							<strong class="u_vc">댓글 입력</strong>
							<div class="u_cbox_write_area">
								<div class="u_cbox_inbox">
									<textarea id="cbox_inbox" class="u_cbox_text" rows="3" cols="30"></textarea>
									<!-- [D]textarea 포커스상태와 입력이후 상태에서 u_vc 클래스 추가 -->
									<label for="cbox_inbox" class="u_cbox_guide">댓글쓰기</label>
								</div>
							</div>
							<div class="u_cbox_write_count">
								<span class="u_vc">현재 입력한 글자수</span>
								<strong class="u_cbox_count_num">0</strong>/<span class="u_vc">전체 입력 가능한 글자수 </span><span class="u_cbox_write_total">500</span>
							</div>
							<div class="u_cbox_upload">
								<button type="button" class="u_cbox_btn_upload">등록</button>
							</div>
						</div>
						<!-- //댓글 입력 -->
					</fieldset>
				</form>

			</div>
			<!-- //댓글 쓰기 -->

			<!-- 스티커 -->
			<div class="u_cbox_sticker">
				<!-- 스티커 입력 -->
				<div class="u_cbox_write_sticker">
					<strong class="u_vc">스티커 댓글 입력</strong>
					<div class="u_cbox_upload_sticker">
						<button type="button" class="u_cbox_btn_upload_sticker">
							<span class="u_cbox_ico_char"></span>
							<span class="u_cbox_ico_upload_sticker">스티커 댓글</span>
							<span class="u_cbox_ico_arrow"></span>
						</button>
					</div>
				</div>
				<!-- //스티커 입력 -->

				<!-- 스티커 레이어 -->
				<!-- [D] 댓글이 없는 경우 : 인라인 스타일로 style="position:relative" 추가 -->
				<div class="u_cbox_layer u_cbox_layer_sticker" style="display:none">
					<h6 class="u_cbox_tit_sticker"><span class="u_cbox_ico_tit">스티커</span></h6>

					<div class="u_cbox_nav_wrap">
						<strong class="u_vc">스티커세트 선택 탭</strong>
						<!-- 이전/다음 버튼 있을 때 노출 -->
						<button class="u_cbox_btn_nav_pre"><span class="u_cbox_ico_nav">이전</span></button>

						<!-- 스크롤 -->
						<div class="u_cbox_tab" id="u_cbox_view">
							<ul class="u_cbox_nav_sticker">
							<li class="u_cbox_tab_sticker">
								<span class="u_cbox_tab_wrap">
									<span class="u_cbox_ico_bar"></span>
									<button type="button" class="u_cbox_btn_tab"><span class="u_cbox_ico_tab_recent">최근사용</span></button>
									<span class="u_cbox_ico_underbar"></span>
								</span>
							</li>
							<!-- [D] 선택된 탭일 때 : 클래스 on 추가 -->
							<li class="u_cbox_tab_sticker on">
								<span class="u_cbox_tab_wrap">
									<span class="u_cbox_ico_bar"></span>
									<button type="button" class="u_cbox_btn_tab"><span class="u_cbox_ico_tab_01">스티커 세트1</span></button>
									<span class="u_cbox_ico_underbar"></span>
								</span>
							</li>
							<li class="u_cbox_tab_sticker">
								<span class="u_cbox_tab_wrap">
									<span class="u_cbox_ico_bar"></span>
									<button type="button" class="u_cbox_btn_tab"><span class="u_cbox_ico_tab_02">스티커 세트2</span></button>
									<span class="u_cbox_ico_underbar"></span>
								</span>
							</li>
							<li class="u_cbox_tab_sticker">
								<span class="u_cbox_tab_wrap">
									<span class="u_cbox_ico_bar"></span>
									<button type="button" class="u_cbox_btn_tab"><span class="u_cbox_ico_tab_03">스티커 세트3</span></button>
									<span class="u_cbox_ico_underbar"></span>
								</span>
							</li>
							<li class="u_cbox_tab_sticker">
								<span class="u_cbox_tab_wrap">
									<span class="u_cbox_ico_bar"></span>
									<button type="button" class="u_cbox_btn_tab"><span class="u_cbox_ico_tab_04">스티커 세트4</span></button>
									<span class="u_cbox_ico_underbar"></span>
								</span>
							</li>
							<li class="u_cbox_tab_sticker">
								<span class="u_cbox_tab_wrap">
									<span class="u_cbox_ico_bar"></span>
									<button type="button" class="u_cbox_btn_tab"><span class="u_cbox_ico_tab_05">스티커 세트5</span></button>
									<span class="u_cbox_ico_underbar"></span>
								</span>
							</li>
							<li class="u_cbox_tab_sticker">
								<span class="u_cbox_tab_wrap">
									<span class="u_cbox_ico_bar"></span>
									<button type="button" class="u_cbox_btn_tab"><span class="u_cbox_ico_tab_06">스티커 세트6</span></button>
									<span class="u_cbox_ico_underbar"></span>
								</span>
							</li>
							<li class="u_cbox_tab_sticker">
								<span class="u_cbox_tab_wrap">
									<span class="u_cbox_ico_bar"></span>
									<button type="button" class="u_cbox_btn_tab"><span class="u_cbox_ico_tab_07">스티커 세트7</span></button>
									<span class="u_cbox_ico_underbar"></span>
								</span>
							</li>
							<li class="u_cbox_tab_sticker">
								<span class="u_cbox_tab_wrap">
									<span class="u_cbox_ico_bar"></span>
									<button type="button" class="u_cbox_btn_tab"><span class="u_cbox_ico_tab_08">스티커 세트8</span></button>
									<span class="u_cbox_ico_underbar"></span>
								</span>
							</li>
							</ul>
						</div>
						<!-- 스크롤 -->

						<!-- 이전/다음 버튼 있을 때 노출 -->
						<button class="u_cbox_btn_nav_next"><span class="u_cbox_ico_nav">다음</span></button>
					</div>

					<!-- 진도 스크롤 -->
					<div class="u_cbox_wrap_sticker" style="display:none">
						<div class="u_cbox_con_sticker u-cbox-scrollbox u-cbox-scrollbar-noscript" id="cbox_scroll_01">
							<div class="u_cbox_inner_sticker u-cbox-scrollbar-box">
								<div class="u-cbox-scrollbar-content">
									<ul class="u_cbox_list_sticker">
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/48.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/24.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									</ul>
								</div>
							</div>
							<div class="u-cbox-scrollbar-v">
								<div class="u-cbox-scrollbar-track">
									<div class="u-cbox-scrollbar-thumb"><span class="u-cbox-scrollbar-thumb-body"></span></div>
								</div>
							</div>
						</div>
					</div>
					<!-- //진도 스크롤 -->

					<!-- 진도 스크롤 -->
					<div class="u_cbox_wrap_sticker">
						<div class="u_cbox_con_sticker u-cbox-scrollbox u-cbox-scrollbar-noscript" id="cbox_scroll_02">
							<div class="u_cbox_inner_sticker u-cbox-scrollbar-box">
								<div class="u-cbox-scrollbar-content">
									<ul class="u_cbox_list_sticker">
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/01.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/02.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/03.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/04.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/05.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/06.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/07.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/08.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/09.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/10.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/11.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/12.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/13.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/14.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/15.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/16.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/17.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/18.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/19.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/20.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/21.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/22.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/23.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/24.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									</ul>
								</div>
							</div>
							<div class="u-cbox-scrollbar-v">
								<div class="u-cbox-scrollbar-track">
									<div class="u-cbox-scrollbar-thumb"><span class="u-cbox-scrollbar-thumb-body"></span></div>
								</div>
							</div>
						</div>
					</div>
					<!-- //진도 스크롤 -->

					<!-- 진도 스크롤 -->
					<div class="u_cbox_wrap_sticker" style="display:none">
						<div class="u_cbox_con_sticker u-cbox-scrollbox u-cbox-scrollbar-noscript" id="cbox_scroll_03">
							<div class="u_cbox_inner_sticker u-cbox-scrollbar-box">
								<div class="u-cbox-scrollbar-content">
									<ul class="u_cbox_list_sticker">
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/25.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/26.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/27.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/28.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/29.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/30.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/31.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/32.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/33.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/34.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/35.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/36.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/37.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/38.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/39.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/40.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/41.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/42.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/43.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/44.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/45.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/46.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/47.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/48.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									</ul>
								</div>
							</div>
							<div class="u-cbox-scrollbar-v">
								<div class="u-cbox-scrollbar-track">
									<div class="u-cbox-scrollbar-thumb"><span class="u-cbox-scrollbar-thumb-body"></span></div>
								</div>
							</div>
						</div>
					</div>
					<!-- //진도 스크롤 -->

					<!-- 진도 스크롤 -->
					<div class="u_cbox_wrap_sticker" style="display:none">
						<div class="u_cbox_con_sticker u-cbox-scrollbox u-cbox-scrollbar-noscript" id="cbox_scroll_04">
							<div class="u_cbox_inner_sticker u-cbox-scrollbar-box">
								<div class="u-cbox-scrollbar-content">
									<ul class="u_cbox_list_sticker">
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/49.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/50.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/51.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/52.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/53.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<!--<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/54.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>-->
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/55.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/56.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/57.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>
									<!--<li class="u_cbox_box_sticker">
										<button type="button" class="u_cbox_btn_sticker">
											<span class="u_cbox_ico_sticker" style="background-image:url(./img/stickers/PC_layer/58.gif)">
												<em class="u_cbox_name_sticker">line_characters_name</em>
											</span>
										</button>
									</li>-->
									</ul>
								</div>
							</div>
							<div class="u-cbox-scrollbar-v">
								<div class="u-cbox-scrollbar-track">
									<div class="u-cbox-scrollbar-thumb"><span class="u-cbox-scrollbar-thumb-body"></span></div>
								</div>
							</div>
						</div>
					</div>
					<!-- //진도 스크롤 -->

					<button class="u_cbox_btn_close">스티커 선택 레이어 닫기</button>
				</div>
				<!-- //스티커 레이어 -->
			</div>
			<!-- //스티커 -->
		</div>
	</div>
</div>