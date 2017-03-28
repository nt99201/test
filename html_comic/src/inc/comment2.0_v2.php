<div class="u_cbox">
	<div class="u_cbox_wrap">
		<!-- 헤더 -->
		<div class="u_cbox_head">
			<h5 class="u_cbox_title">댓글</h5>
			<span class="u_cbox_count">2,725</span>
			<button type="button" class="u_cbox_btn_refresh">새로고침</button>
		</div>
		<!-- //헤더 -->

		<!-- 모바일 쓰기전용 화면 헤더 -->
		<div class="u_cbox_back" style="display:none"><a href="#none" class="u_cbox_btn_back"><span class="u_cbox_ico_back">댓글목록</span></a></div>
		<!-- //모바일 쓰기전용 화면 헤더 -->

		<div class="u_cbox_content_wrap">

			<!-- 정렬 옵션 -->
			<div class="u_cbox_sort">
				<strong class="u_vc">댓글 정렬 옵션 선택</strong>
				<div class="u_cbox_sort_option">
					<div class="u_cbox_sort_scroller">
						<ul class="u_cbox_sort_option_list">
							<li class="u_cbox_sort_option_wrap u_cbox_sort_option_on">
								<a href="#none" class="u_cbox_select">
									<span class="u_cbox_ico_select">선택됨</span>
									<span class="u_cbox_sort_label">BEST 댓글</span>
								</a>
							</li>
							<!-- [D] 선택시 : 클래스 on 추가, 대체 텍스트 '선택됨' 추가 -->
							<li class="u_cbox_sort_option_wrap">
								<a href="#none" class="u_cbox_select">
									<span class="u_cbox_ico_select"></span>
									<span class="u_cbox_sort_label">전체댓글</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- //정렬 옵션 -->

			<!-- 베스트 댓글 없을 때 -->
			<div class="u_cbox_comment_none">
				<h6 class="u_vc">댓글 안내</h6>
				<div class="u_cbox_con_inform">
					<span class="u_cbox_ico_comment_none"></span>
					<span class="u_cbox_contents_none">베스트 댓글이 없습니다.</span>
				</div>
			</div>
			<!-- //베스트 댓글 없을 때 -->

			<!-- 댓글 없을 때 -->
			<div class="u_cbox_comment_none">
				<h6 class="u_vc">댓글 안내</h6>
				<div class="u_cbox_con_inform">
					<span class="u_cbox_ico_comment_none"></span>
					<span class="u_cbox_contents_none">
						댓글이 없습니다.<br>
						첫번째 댓글을 남겨주세요.
					</span>
				</div>
			</div>
			<!-- 댓글 없을 때 -->

			<!-- 댓글 제한될 때 : 댓글 제한 아이콘 클래스 적용 -->
			<div class="u_cbox_inform">
				<div class="u_cbox_con_inform">
					<span class="u_cbox_ico_comment_restrict"></span>
					<span class="u_cbox_contents_none">
						명예 훼손, 개인 정보 유출 등의 사유로 댓글서비스를 제한 합니다.
					</span>
				</div>
			</div>
			<!-- //댓글 제한될 때 -->

			<!-- 댓글 안내 : 임시점검 중 -->
			<div class="u_cbox_inform u_cbox_inform_maintenance">
				<div class="u_cbox_inform_wrap">
					<h6 class="u_vc">댓글 안내</h6>
					<div class="u_cbox_con_inform ">
						<span class="u_cbox_ico_inform"></span>
						<strong class="u_cbox_txt_mark">임시점검중</strong>입니다.
					</div>
					<div class="u_cbox_box_inform">
						<dl class="u_cbox_item_inform">
							<dt class="u_cbox_tit_item">일시<span class="u_cbox_ico_bar"></span></dt>
							<dd class="u_cbox_con_item">2015.04.20 오전 11:00~12:00</dd>
							<dt class="u_cbox_tit_item">사유<span class="u_cbox_ico_bar"></span></dt>
							<dd class="u_cbox_con_item">댓글 DB점검</dd>
						</dl>
					</div>
				</div>
			</div>
			<!-- //댓글 안내 : 임시점검 중 -->

			<!-- 로딩중 -->
			<div class="u_cbox_loading" style="display:none">
				<span class="u_cbox_ico_loading">로딩중</span>
			</div>
			<!-- //로딩중 -->

			<!-- 댓글 리스트 -->
			<ul class="u_cbox_list">
				<!-- 댓글 일반 기본형, 스티커 댓글 -->
				<li class="u_cbox_comment">
					<!-- [D] 내가 쓴 글일 때 : 클래스 u_cbox_mine 추가
							수정 중일 때 : 클래스 u_cbox_type_edit 추가 -->
					<div class="u_cbox_comment_box">
						<div class="u_cbox_area">
							<div class="u_cbox_info">
								<span class="u_cbox_thumb">
									<a href="#none" class="u_cbox_thumb_wrap">
										<img src="http://static.naver.net/common/comment/img_default_profile.gif" alt="프로필 이미지" class="u_cbox_img_profile">
										<span class="u_cbox_thumb_mask"></span>
									</a>
								</span>
								<!-- 아이콘, 이름 -->
								<span class="u_cbox_info_main">
									<a href="#none" class="u_cbox_name">보노보노보노보노끝</a>
								</span>
							</div>
							<div class="u_cbox_text_wrap">
								<span class="u_cbox_ico_best">BEST</span><span class="u_cbox_contents">댓글내용댓글내용댓글내용 <a href="#none" class="u_cbox_hash_tag"><span class="u_cbox_type_tag">#</span><em class="u_cbox_con_tag">태그태그</em></a> 댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용</span>
							</div>

							<!-- 게시일, 신고 -->
							<div class="u_cbox_info_base">
								<span class="u_cbox_date">2015.02.03 10:44</span>
								<!-- [D] 신고버튼 -->
								<span class="u_cbox_work_main">
									<a href="#none" class="u_cbox_btn_report">
										<span class="u_cbox_ico_bar"></span>
										<span class="u_cbox_ico_report"></span>
										<span class="u_cbox_in_report">신고</span>
									</a>
								</span>
							</div>
							<!-- // 게시일, 신고 -->

							<div class="u_cbox_tool">
								<div class="u_cbox_recomm_set">
									<strong class="u_vc">공감/비공감</strong>
									<!-- [D] 활성화시 : 클래스 on 추가 -->
									<a href="#none" class="u_cbox_btn_recomm u_cbox_btn_recomm_on" title="이 댓글에 공감합니다">
										<span class="u_cbox_ico_recomm">공감</span>
										<em class="u_cbox_cnt_recomm">100</em>
									</a>
									<a href="#none" class="u_cbox_btn_unrecomm" title="이 댓글에 공감하지 않습니다">
										<span class="u_cbox_ico_unrecomm">비공감</span>
										<em class="u_cbox_cnt_unrecomm">0</em>
									</a>
								</div>
							</div>
						</div>
					</div>
				</li>

				<!-- 댓글의 답글 있는 상태 -->
				<li class="u_cbox_comment">
					<!-- [D] 내 댓글인 경우 클래스 u_cbox_mine 추가 -->
					<div class="u_cbox_comment_box u_cbox_mine">

						<div class="u_cbox_area">
							<div class="u_cbox_info">
								<!-- 프로필 이미지 -->
								<span class="u_cbox_thumb">
									<a href="#none" class="u_cbox_thumb_wrap">
										<img src="http://static.naver.net/common/comment/img_default_profile.gif" alt="프로필 이미지" class="u_cbox_img_profile">
										<span class="u_cbox_thumb_mask"></span>
									</a>
								</span>

								<!-- 아이콘,이름 -->
								<span class="u_cbox_info_main">
									<span class="u_cbox_name">일이삼사오육칠팔구십일이삼사오육칠팔구십</span>
								</span>

								<!-- 버튼세트 -->
								<span class="u_cbox_info_sub">
									<!-- 펼쳐보기 가능 버튼세트 -->
									<span class="u_cbox_work_sub">
										<a href="#none" class="u_cbox_btn_open"><span class="u_cbox_ico_open"></span><span class="u_cbox_in_open">옵션 펼쳐보기</span></a>
										<span class="u_cbox_work_box" style="display:block">
											<span class="u_cbox_work_inner">
												<!--<a href="#none" class="u_cbox_btn_delete"><span class="u_cbox_ico_delete"></span><span class="u_cbox_in_delete">수정</span></a>-->
												<a href="#none" class="u_cbox_btn_block"><span class="u_cbox_ico_block"></span><span class="u_cbox_in_block">삭제</span></a>
											</span>
										</span>
									</span>
								</span>
								<!-- // 버튼세트 -->
							</div>

							<div class="u_cbox_text_wrap">
								<span class="u_cbox_ico_best">BEST</span><span class="u_cbox_contents">댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용댓글내용</span>
							</div>

							<!-- 게시일, 신고 -->
							<div class="u_cbox_info_base">
								<span class="u_cbox_date">2015.02.03 10:44</span>
								<!-- [D] 신고버튼 -->
								<span class="u_cbox_work_main">
									<a href="#none" class="u_cbox_btn_report">
										<span class="u_cbox_ico_bar"></span>
										<span class="u_cbox_ico_report"></span>
										<span class="u_cbox_in_report">신고</span>
									</a>
								</span>
							</div>
							<!-- // 게시일, 신고 -->

							<div class="u_cbox_tool">
								<div class="u_cbox_recomm_set">
									<strong class="u_vc">공감/비공감</strong>
									<a href="#none" class="u_cbox_btn_recomm" title="이 댓글에 공감합니다">
										<span class="u_cbox_ico_recomm">공감</span>
										<em class="u_cbox_cnt_recomm">9999</em>
									</a>
									<!-- [D] 활성화시 : 클래스 on 추가 -->
									<a href="#none" class="u_cbox_btn_unrecomm u_cbox_btn_unrecomm_on" title="이 댓글에 공감하지 않습니다">
										<span class="u_cbox_ico_unrecomm">비공감</span>
										<em class="u_cbox_cnt_unrecomm">45</em>
									</a>
								</div>
							</div>
						</div>
					</div>
				</li>
				<!-- 삭제된 댓글 : 답글없음 -->
				<li class="u_cbox_comment">
					<!-- [D] 내가 쓴 글일 때 : 클래스 u_cbox_mine 추가
							수정 중일 때 : 클래스 u_cbox_type_edit 추가
							비밀댓글입니다 문구 노출시 : 클래스 u_cbox_type_delete 추가 -->
					<div class="u_cbox_comment_box u_cbox_type_delete">
						<div class="u_cbox_area">
							<!-- [D] 삭제된 댓글일 때 : 클래스 u_cbox_delete 추가 -->
							<div class="u_cbox_text_wrap u_cbox_delete">
								<span class="u_cbox_delete_contents">댓글이 삭제되었습니다.</span>
							</div>
						</div>
					</div>
				</li>
				<!-- //삭제된 댓글 -->
				<!-- 삭제된 댓글 -->
				<li class="u_cbox_comment">
					<!-- [D] 내가 쓴 글일 때 : 클래스 u_cbox_mine 추가
							수정 중일 때 : 클래스 u_cbox_type_edit 추가
							비밀댓글입니다 문구 노출시 : 클래스 u_cbox_type_delete 추가 -->
					<div class="u_cbox_comment_box u_cbox_type_delete">
						<div class="u_cbox_area">
							<!-- [D] 삭제된 댓글일 때 : 클래스 u_cbox_delete 추가 -->
							<div class="u_cbox_text_wrap u_cbox_delete">
								<span class="u_cbox_delete_contents">댓글이 삭제되었습니다.</span>
							</div>
						</div>
					</div>
				</li>
				<!-- //삭제된 댓글 -->
				<!-- 내가 쓴 글 : 수정/삭제 버튼 추가 -->
				<li class="u_cbox_comment">
					<!-- [D] 내가 쓴 글일 때 : 클래스 u_cbox_mine 추가
							수정 중일 때 : 클래스 u_cbox_type_edit 추가 -->
					<div class="u_cbox_comment_box u_cbox_mine">
						<div class="u_cbox_area">
							<div class="u_cbox_info">
																<span class="u_cbox_thumb">
									<a href="#none" class="u_cbox_thumb_wrap">
										<img src="http://static.naver.net/common/comment/img_default_profile.gif" alt="프로필 이미지" class="u_cbox_img_profile">
										<span class="u_cbox_thumb_mask"></span>
									</a>
								</span>
																<!-- 아이콘,이름 -->
								<span class="u_cbox_info_main">
																		<span class="u_cbox_name">ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmno</span>
								</span>

								<!-- 버튼세트 -->
								<span class="u_cbox_info_sub">
									<span class="u_cbox_work_sub">
										<a href="#none" class="u_cbox_btn_open"><span class="u_cbox_ico_open"></span><span class="u_cbox_in_open">옵션 펼쳐보기</span></a>
										<span class="u_cbox_work_box" style="display:block">
											<span class="u_cbox_work_inner">
												<!--<a href="#none" class="u_cbox_btn_edit"><span class="u_cbox_ico_edit"></span><span class="u_cbox_in_edit">Edit</span></a>-->
												<a href="#none" class="u_cbox_btn_delete"><span class="u_cbox_ico_delete"></span><span class="u_cbox_in_delete">Hapus</span></a>
											</span>
										</span>
									</span>
								</span>
								<!-- //버튼세트 -->
							</div>
							<div class="u_cbox_text_wrap">
								<span class="u_cbox_contents">abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyz</span>
							</div>
							<div class="u_cbox_info_base">
								<span class="u_cbox_date">2015.02.03 10:44</span>
																<!-- 신고버튼 -->
								<span class="u_cbox_work_main">
									<a href="#none" class="u_cbox_btn_report">
										<span class="u_cbox_ico_bar"></span>
										<span class="u_cbox_ico_report"></span>
										<span class="u_cbox_in_report">신고</span>
									</a>
								</span>
							</div>
							<div class="u_cbox_tool">
								<div class="u_cbox_recomm_set">
									<strong class="u_vc">공감/비공감</strong>
									<a href="#none" class="u_cbox_btn_recomm" title="이 댓글에 공감합니다">
										<span class="u_cbox_ico_recomm">공감</span>
										<em class="u_cbox_cnt_recomm">100</em>
									</a>
									<a href="#none" class="u_cbox_btn_unrecomm" title="이 댓글에 공감하지 않습니다">
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
					<!-- [D] 내가 쓴 글일 때 : 클래스 u_cbox_mine 추가 -->
					<div class="u_cbox_comment_box u_cbox_mine">
						<div class="u_cbox_area">
							<div class="u_cbox_info">
								<span class="u_cbox_thumb">
									<a href="#none" class="u_cbox_thumb_wrap">
										<img src="http://static.naver.net/common/comment/img_default_profile.gif" alt="프로필 이미지" class="u_cbox_img_profile">
										<span class="u_cbox_thumb_mask"></span>
									</a>
								</span>
								<!-- 아이콘,이름 -->
								<span class="u_cbox_info_main">
									<span class="u_cbox_name">보노보노보노보노끝</span>
								</span>

								<!-- 버튼세트 -->
								<span class="u_cbox_info_sub">
									<span class="u_cbox_work_sub">
										<a href="#none" class="u_cbox_btn_open"><span class="u_cbox_ico_open"></span><span class="u_cbox_in_open">옵션 펼쳐보기</span></a>
										<span class="u_cbox_work_box">
											<span class="u_cbox_work_inner">
												<!--<a href="#none" class="u_cbox_btn_edit"><span class="u_cbox_ico_edit"></span><span class="u_cbox_in_edit">수정</span></a>-->
												<a href="#none" class="u_cbox_btn_delete"><span class="u_cbox_ico_delete"></span><span class="u_cbox_in_delete">삭제</span></a>
											</span>
										</span>
									</span>
								</span>
								<!-- //버튼세트 -->
							</div>
							<div class="u_cbox_text_wrap">
								<span class="u_cbox_sticker_wrap"><img src="img/stickers/PC/07.png" class="u_cbox_img_sticker"></span>
							</div>
							<div class="u_cbox_info_base">
								<span class="u_cbox_date">2015.02.03 10:44</span>
																<!-- [D] 신고버튼 -->
								<span class="u_cbox_work_main">
									<a href="#none" class="u_cbox_btn_report">
										<span class="u_cbox_ico_bar"></span>
										<span class="u_cbox_ico_report"></span>
										<span class="u_cbox_in_report">신고</span>
									</a>
								</span>
							</div>
							<div class="u_cbox_tool">
								<div class="u_cbox_recomm_set">
									<strong class="u_vc">공감/비공감</strong>
									<a href="#none" class="u_cbox_btn_recomm" title="이 댓글에 공감합니다">
										<span class="u_cbox_ico_recomm">공감</span>
										<em class="u_cbox_cnt_recomm">100</em>
									</a>
									<a href="#none" class="u_cbox_btn_unrecomm" title="이 댓글에 공감하지 않습니다">
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
							수정 중일 때 : 클래스 u_cbox_type_edit 추가 -->
					<div class="u_cbox_comment_box">
						<div class="u_cbox_area">
							<div class="u_cbox_info">

								<!-- 아이콘,이름 -->
								<span class="u_cbox_info_main">
									<span class="u_cbox_name">abcdefghijklmno</span>
								</span>

								<!-- 버튼세트 -->
								<span class="u_cbox_info_sub">
									<!-- [D] 옵션 펼쳐볼 때 : 클래스 u_cbox_work_sub_on 추가 -->
									<span class="u_cbox_work_sub">
										<!-- [D] 옵션 펼쳐볼 때 : 대체텍스트 '펼쳐보기'를 '접기'로 변경 -->
										<a href="#none" class="u_cbox_btn_open"><span class="u_cbox_ico_open"></span><span class="u_cbox_in_open">옵션 펼쳐보기</span></a>
										<span class="u_cbox_work_box">
											<span class="u_cbox_work_inner">
												<a href="#none" class="u_cbox_btn_delete"><span class="u_cbox_ico_delete"></span><span class="u_cbox_in_delete">Delete</span></a>
												<a href="#none" class="u_cbox_btn_block"><span class="u_cbox_ico_block"></span><span class="u_cbox_in_block">Block</span></a>
											</span>
										</span>
									</span>
								</span>
								<!-- //버튼세트 -->
							</div>
							<div class="u_cbox_pic">
								<a href="#none" class="u_cbox_pic_wrap" title="원본 이미지 보기">
									<img src="http://dev.ui.naver.com/tmp/?52x52_temp_n_D9D9D9_100" class="u_cbox_img_contents" alt="임시 이미지">
									<span class="u_cbox_pic_mask"></span>
								</a>
							</div>
							<div class="u_cbox_text_wrap">
								<span class="u_cbox_contents">댓글 펼침 UI 적용된 이미지별 댓글입니다. 답글 버튼에 클래스 추가되었습니다.<br>댓글의 답글에는 붙지 않아요.</span>
							</div>
							<div class="u_cbox_info_base">
								<span class="u_cbox_date">2015.02.03 10:44</span>
								<!-- [D] 신고버튼 -->
								<span class="u_cbox_work_main">
									<a href="#none" class="u_cbox_btn_report">
										<span class="u_cbox_ico_bar"></span>
										<span class="u_cbox_ico_report"></span>
										<span class="u_cbox_in_report">신고</span>
									</a>
								</span>
							</div>
							<div class="u_cbox_tool">
								<div class="u_cbox_recomm_set">
									<strong class="u_vc">공감/비공감</strong>
									<a href="#none" class="u_cbox_btn_recomm" title="이 댓글에 공감합니다">
										<span class="u_cbox_ico_recomm">공감</span>
										<em class="u_cbox_cnt_recomm">100</em>
									</a>
									<a href="#none" class="u_cbox_btn_unrecomm" title="이 댓글에 공감하지 않습니다">
										<span class="u_cbox_ico_unrecomm">비공감</span>
										<em class="u_cbox_cnt_unrecomm">45</em>
									</a>
								</div>
							</div>
						</div>
					</div>

				</li>
				<li class="u_cbox_comment">
					<!-- [D] 내가 쓴 글일 때 : 클래스 u_cbox_mine 추가
							수정중일 때 : 클래스 u_cbox_type_edit 추가 -->
					<div class="u_cbox_comment_box">
						<div class="u_cbox_area">
							<div class="u_cbox_info">
								<span class="u_cbox_thumb">
									<a href="#none" class="u_cbox_thumb_wrap">
										<img src="http://static.naver.net/common/comment/img_default_profile.gif" alt="프로필 이미지" class="u_cbox_img_profile">
										<span class="u_cbox_thumb_mask"></span>
									</a>
								</span>
								<!-- 아이콘,이름 -->
								<span class="u_cbox_info_main">
									<span class="u_cbox_name">abcdefghijklmno</span>
								</span>

								<!-- 버튼세트 -->
								<span class="u_cbox_info_sub">
									<span class="u_cbox_work_sub">
										<a href="#none" class="u_cbox_btn_open"><span class="u_cbox_ico_open"></span><span class="u_cbox_in_open">옵션 펼쳐보기</span></a>
										<span class="u_cbox_work_box" style="display:block">
											<span class="u_cbox_work_inner">
												<a href="#none" class="u_cbox_btn_delete"><span class="u_cbox_ico_delete"></span><span class="u_cbox_in_delete">Delete</span></a>
												<a href="#none" class="u_cbox_btn_block"><span class="u_cbox_ico_block"></span><span class="u_cbox_in_block">Block</span></a>
											</span>
										</span>
									</span>
								</span>
								<!-- //버튼세트 -->
							</div>
							<div class="u_cbox_pic">
								<a href="#none" class="u_cbox_pic_wrap" title="원본 이미지 보기">
									<img src="http://dev.ui.naver.com/tmp/?52x52_temp_n_D9D9D9_100" class="u_cbox_img_contents" alt="임시 이미지">
									<span class="u_cbox_pic_mask"></span>
								</a>
							</div>
							<div class="u_cbox_text_wrap">
								<span class="u_cbox_ico_best">BEST</span><span class="u_cbox_contents">댓글 펼침 UI 적용된 이미지별 댓글입니다. 답글 버튼에 클래스 추가되었습니다.<br>댓글의 답글에는 붙지 않아요.</span>
							</div>

							<div class="u_cbox_info_base">
								<span class="u_cbox_date">2015.02.03 10:44</span>
								<!-- [D] 신고버튼 -->
								<span class="u_cbox_work_main">
									<a href="#none" class="u_cbox_btn_report">
										<span class="u_cbox_ico_bar"></span>
										<span class="u_cbox_ico_report"></span>
										<span class="u_cbox_in_report">신고</span>
									</a>
								</span>
							</div>
							<div class="u_cbox_tool">
								<div class="u_cbox_recomm_set">
									<strong class="u_vc">공감/비공감</strong>
									<a href="#none" class="u_cbox_btn_recomm" title="이 댓글에 공감합니다">
										<span class="u_cbox_ico_recomm">공감</span>
										<em class="u_cbox_cnt_recomm">100</em>
									</a>
									<a href="#none" class="u_cbox_btn_unrecomm" title="이 댓글에 공감하지 않습니다">
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

		<!-- 페이징 : 더보기 -->
		<div class="u_cbox_paginate">
			<a href="#none" class="u_cbox_btn_more">
				<span class="u_cbox_more_wrap">
					<span class="u_cbox_box_more">
						<span class="u_cbox_page_more">더보기</span>
						<span class="u_cbox_ico_more"></span>
					</span>
				</span>
			</a>
			<a href="#" class="u_cbox_btn_top">
				<span class="u_cbox_ico_top">맨위로</span>
			</a>
		</div>
		<!-- //페이징 -->

		<!-- 페이징 : 더보기 -->
		<div class="u_cbox_paginate">
			<a href="#none" class="u_cbox_btn_more">
				<span class="u_cbox_more_wrap">
					<span class="u_cbox_box_more">
						<span class="u_cbox_page_more">더보기</span>
						<span class="u_cbox_ico_more"></span>
					</span>
				</span>
			</a>
		</div>
		<!-- //페이징 -->

		<!-- 이전댓글 더보기 -->
		<div class="u_cbox_paginate">
			<a href="#none" class="u_cbox_btn_more u_cbox_btn_more_pre">
				<span class="u_cbox_more_wrap">
					<span class="u_cbox_box_more">
						<span class="u_cbox_page_more_pre">이전댓글 더보기</span>
						<span class="u_cbox_ico_more_pre"></span>
					</span>
				</span>
			</a>
		</div>
		<!-- //페이징 -->

		<!-- 로딩중 -->
		<div class="u_cbox_loading_bar">
			<span class="u_cbox_ico_loading">로딩중</span>
			<a href="#" class="u_cbox_btn_top">
				<span class="u_cbox_ico_top">맨위로</span>
			</a>
		</div>
		<!-- 로딩중 -->

		<!-- 페이징 : 맨앞, 맨뒤만 노출일때 -->
		<!--<div class="u_cbox_paginate">
			<div class="u_cbox_page_wrap">
				<strong class="u_vc">페이지 이동하기</strong>
				&lt;!&ndash; [D] 맨앞/맨뒤 페이지 없을 때 : <span> 태그로 적용 &ndash;&gt;
				<span class="u_cbox_pre u_cbox_pre_end" title="첫 페이지 목록으로 이동">
					<span class="u_cbox_ico_page"></span><span class="u_cbox_cnt_page">맨앞</span>
					<span class="u_vc"> 페이지 목록으로 이동</span>
				</span>
				<strong class="u_cbox_page"><span class="u_cbox_num_page">1</span><span class="u_vc"> 현재 페이지</span></strong>
				<a href="#none" class="u_cbox_page"><span class="u_cbox_num_page">2</span></a>
				<a href="#none" class="u_cbox_page"><span class="u_cbox_num_page">3</span></a>
				&lt;!&ndash; [D] 맨앞/맨뒤 페이지 없을 때 : <span> 태그로 적용 &ndash;&gt;
				<a href="#none" class="u_cbox_next u_cbox_next_end" title="마지막 페이지 목록으로 이동">
					<span class="u_cbox_cnt_page">맨뒤</span><span class="u_cbox_ico_page"></span>
					<span class="u_vc"> 페이지 목록으로 이동</span>
				</a>
			</div>
		</div>-->
		<!-- //페이징 -->

		<!-- 페이징 : 이전,다음,맨앞,맨뒤 전체 노출일때 -->
		<!--<div class="u_cbox_paginate">
			<div class="u_cbox_page_wrap">
				<strong class="u_vc">페이지 이동하기</strong>
				<a href="#" class="u_cbox_pre u_cbox_pre_end" title="첫 페이지 목록으로 이동">
					<span class="u_cbox_ico_page"></span><span class="u_cbox_cnt_page">맨앞</span>
					<span class="u_vc"> 페이지 목록으로 이동</span>
				</a>
				&lt;!&ndash; [D] 이전/다음 페이지 없을 때 : <span> 태그로 적용 &ndash;&gt;
				<a href="#none" class="u_cbox_pre" title="이전 페이지 목록으로 이동">
					<span class="u_cbox_ico_page"></span><span class="u_cbox_cnt_page">이전</span>
					<span class="u_vc"> 페이지 목록으로 이동</span>
				</a>
				<a href="#none" class="u_cbox_page"><span class="u_cbox_num_page">1</span><span class="u_vc"> 현재 페이지</span></a>
				<a href="#none" class="u_cbox_page"><span class="u_cbox_num_page">2</span></a>
				<strong class="u_cbox_page"><span class="u_cbox_num_page">21</span></strong>
				&lt;!&ndash; [D] 이전/다음 페이지 없을 때 : <span> 태그로 적용 &ndash;&gt;
				<span class="u_cbox_next" title="다음 페이지 목록으로 이동">
					<span class="u_cbox_cnt_page">다음</span><span class="u_cbox_ico_page"></span>
					<span class="u_vc"> 페이지 목록으로 이동</span>
				</span>
				<a href="#none" class="u_cbox_next u_cbox_next_end" title="마지막 페이지 목록으로 이동">
					<span class="u_cbox_cnt_page">맨뒤</span><span class="u_cbox_ico_page"></span>
					<span class="u_vc"> 페이지 목록으로 이동</span>
				</a>
			</div>
		</div>-->
		<!-- //페이징 -->

		<!-- 페이징 -->
		<!--<div class="u_cbox_paginate">
			<div class="u_cbox_page_wrap">
				<strong class="u_vc">페이지 이동하기</strong>
				<a href="#" class="u_cbox_pre u_cbox_pre_end" title="첫 페이지 목록으로 이동">
					<span class="u_cbox_ico_page"></span><span class="u_cbox_cnt_page">맨앞</span>
					<span class="u_vc"> 페이지 목록으로 이동</span>
				</a>
				&lt;!&ndash; [D] 이전/다음 페이지 없을 때 : <span> 태그로 적용 &ndash;&gt;
				<a href="#none" class="u_cbox_pre" title="이전 페이지 목록으로 이동">
					<span class="u_cbox_ico_page"></span><span class="u_cbox_cnt_page">이전</span>
					<span class="u_vc"> 페이지 목록으로 이동</span>
				</a>
				<a href="#none" class="u_cbox_page"><span class="u_cbox_num_page">1</span></a>
				<strong class="u_cbox_page"><span class="u_cbox_num_page">2</span><span class="u_vc"> 현재 페이지</span></strong>
				<a class="u_cbox_page"><span class="u_cbox_num_page">3</span></a>
				&lt;!&ndash; [D] 이전/다음 페이지 없을 때 : <span> 태그로 적용 &ndash;&gt;
				<a href="#none" class="u_cbox_next" title="다음 페이지 목록으로 이동">
					<span class="u_cbox_cnt_page">다음</span><span class="u_cbox_ico_page"></span>
					<span class="u_vc"> 페이지 목록으로 이동</span>
				</a>
				<a href="#none" class="u_cbox_next u_cbox_next_end" title="마지막 페이지 목록으로 이동">
					<span class="u_cbox_cnt_page">맨뒤</span><span class="u_cbox_ico_page"></span>
					<span class="u_vc"> 페이지 목록으로 이동</span>
				</a>
			</div>
		</div>-->
		<!-- //페이징 -->

		<!-- 전체 댓글 더보기 -->
		<!--<div class="u_cbox_view_comment">
			<a href="#none" class="u_cbox_btn_view_comment">
				<span class="u_cbox_in_view_comment">전체 댓글 더보기</span><span class="u_cbox_ico_view_comment"></span>
			</a>
		</div>-->
		<!-- //전체 댓글 더보기 -->
	</div>

	<div class="u_cbox_write_wrap">
			<!-- [D] 댓글 쓰기 - 프로필형일 때 : 클래스 u_cbox_type_profile 추가 -->
			<!-- 댓글 입력
				로그인 전 : 클래스 u_cbox_type_logged_out 추가
				댓글창에 포커스 되었을 때 : 클래스 u_cbox_focus 추가
				댓글창 입력사항 있을 때 : 클래스 u_cbox_writing 추가 -->
			<div class="u_cbox_write_box">
				<form action="">
					<fieldset>
						<legend class="u_vc">댓글 쓰기</legend>

						<div class="u_cbox_write">
							<div class="u_cbox_write_inner">
								<div class="u_cbox_profile_area"><strong class="u_vc">로그인 정보</strong><div class="u_cbox_profile"><div class="u_cbox_thumb"></div><div class="u_cbox_box_name"><span class="u_cbox_write_name">행복한 토끼</span></div></div></div>

								<div class="u_cbox_write_area">
									<strong class="u_vc">댓글 입력</strong>
									<div class="u_cbox_inbox">
										<textarea id="cbox_inbox1-2" class="u_cbox_text" rows="3" cols="30"></textarea>
										<label for="cbox_inbox1-2" class="u_cbox_guide">댓글쓰기</label>
									</div>
								</div>
								<div class="u_cbox_write_count">
									<span class="u_vc">현재 입력한 글자수</span>
									<strong class="u_cbox_count_num">0</strong>/<span class="u_vc">전체 입력 가능한 글자수 </span><span class="u_cbox_write_total">500</span>
								</div>
								<div class="u_cbox_upload">
									<button type="button" class="u_cbox_btn_upload"><span class="u_cbox_ico_upload"></span>등록</button>
								</div>
							</div>
						</div>

						<!--<div class="u_cbox_write">
							<strong class="u_vc">댓글 입력</strong>
							<div class="u_cbox_write_area">
								<div class="u_cbox_inbox">
									<textarea id="cbox_inbox" class="u_cbox_text" rows="3" cols="30"></textarea>
									&lt;!&ndash; [D]textarea 포커스상태와 입력이후 상태에서 u_vc 클래스 추가 &ndash;&gt;
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
						</div>-->
						<!-- //댓글 입력 -->
					</fieldset>
				</form>

			</div>
			<!-- //댓글 쓰기 -->
		</div>
	</div>
</div>