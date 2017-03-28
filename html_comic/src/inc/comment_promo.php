	<?php $searchType='search'; include 'header.php'; ?>

<div class="cmt">
	<div class="wr">
		<h3>작가의 말<span>조석</span></h3>
		<p class="c">나도 소싯적엔 초심이었지.</p>
	</div>
	<div class="wr ty_mento">
		<h3>멘토의 말<span>조성진교수님</span></h3>
		<p class="c">화사한 비주얼과 깜찍발랄하고도 상큼한 내용이 돋보이는 작품입니다.</p>
	</div>
	
	<!-- 별점 주기 --> 
	<a name="starAnchor"></a>
	<div class="star" id="starDiv" style="display:none">
		<h3>회별별점</h3>
		<div class="pnt"><span class="u_grp"><span id="starScore" class="u_grp_v" style="width:98.00000190734863%;"></span></span> <span id="avgStarscore"><em>9.8</em></span> <span class="tjoin" id="starscoreCount"><em>7753</em>명 참여</span></div>
		<div class="com" id="voteComplete" style="display:none">참여완료</div>
		<input type="hidden" id="currentTitleId" value=20853 />
		<input type="hidden" id="currentNo" value=593 />
		<input type="hidden" id="currentWeek" value=fri />
		<input type="hidden" id="currentStarToggle" value="dn" />
		<div id="starButton">
			<div class="bt_s"><a class="bt5" href="#"><span class="dn" id="starToggleButton">별점주기</span></a></div>
			<div class="grade" id="grade" style="display:none">
				<div class="u_grade">
					<div class="u_grade_bw"> 
						<!-- [D] 선택 된 점수에는 'u_grade_bon' class를 추가해주세요. -->
						<input type="hidden" id="currentStarcore" value="10" />
						<a href="#" class="u_grade_b u_grade_bon" id="u_grade_1">1점</a> <a href="#" class="u_grade_b2 u_grade_bon" id="u_grade_2">2점</a> <a href="javascript:starAct.star_clk('3');" class="u_grade_b u_grade_bon" id="u_grade_3">3점</a> <a href="javascript:starAct.star_clk('4');" class="u_grade_b2 u_grade_bon" id="u_grade_4">4점</a> <a href="javascript:starAct.star_clk('5');" class="u_grade_b u_grade_bon" id="u_grade_5">5점</a> <a href="javascript:starAct.star_clk('6');" class="u_grade_b2 u_grade_bon" id="u_grade_6">6점</a> <a href="javascript:starAct.star_clk('7');" class="u_grade_b u_grade_bon" id="u_grade_7">7점</a> <a href="javascript:starAct.star_clk('8');" class="u_grade_b2 u_grade_bon" id="u_grade_8">8점</a> <a href="javascript:starAct.star_clk('9');" class="u_grade_b u_grade_bon" id="u_grade_9">9점</a> <a href="javascript:starAct.star_clk('10');" class="u_grade_b2 u_grade_bon" id="u_grade_10">10점</a> <span class="u_grade_n"><a id="viewCurrentStarcore">10</a><span class="u_hc">점</span></span> </div>
					<p class="u_grade_dsc">별을 클릭해주세요.</p>
					<a href="#" title="1점 감산" class="u_grade_m">-</a> <a href="#" title="1점 가산" class="u_grade_p">+</a> </div>
				<a class="bt5" href="#" id="bottomStarScoreSubmitButton">확인</a> </div>
		</div>
	</div>
	<!-- //별점 주기 --> 

    <div class="stop_notice_txt" style="display:none">
    	<p>과도한 선정성, 폭력성 컨텐츠를 신고해 주세요.<span class="bar">|</span><a href="#">신고하기</a></p>    
    </div>

    <!-- 좋아요 기능 -->
	<?php include 'inc/likeit.php' ?>
	<!-- //좋아요 기능 -->
	
	<div class="sc2" style="display:none">
		<p class="bt7"> <a href="#" class="w33 f"><span class="pv">이전화</span></a> <a href="#" class="w33"><span class="nx">다음화</span></a> <a href="#" class="w33">목록</a> </p>
	</div>
	
	<!-- 공통 댓글 --> 
	
	<!-- 기존 아래 태그 하위가 덧글영역이었으나 comment_module로 변경되었습니다.
		cmt 및 cbox_module 관련 CSS는 제거 부탁드립니다. 
		<div class="cmt">
			<div id="cbox_module"></div>
		</div> -->
	
	<div id="comment_module" class="u_comment">
		<div class="u_comment_top top2 __comment_info">
			<div><span class="u_comment_sum __comment_count"><strong>댓글</strong> 3357</span></div>
		</div>
		<div class="u_comment_write _comment_writebox_root_area" style="display: block; ">
			<form action="#" method="post">
				<fieldset class="__comment_writebox">
					<legend class="u_hc">댓글입력</legend>
					<div>
						<label class="u_hc" for="upload_txt">댓글</label>
						<span class="u_comment_input">
						<textarea id="upload_txt" class="u_comment_upload __comment_textarea(0)" rows="5" cols="30" style="height:49px"></textarea>
						</span>
					</div>
					<p class="u_comment_promt __comment_write_prompt(0)">최대 500자 까지 작성할 수 있으며, 주제와 무관한<br />댓글, 악플은 삭제될 수 있습니다.
					<input class="u_comment_ulbtn __comment_write_btn" type="button" value="등록">
					</p>
				</fieldset>
			</form>
		</div>
		<ul class="__comment_list">
			<li class="u_comment_lst u_comment_lst1 __comment_item(12642637)">
				<div><span class="u_comment_data u_comment_span_data1">jskdisjd01010101asd (kisx****) 2012-07-17 19:18</span><span class="u_commont_lstbtn u_comment_lstbtn1 __comment_command"><a href="#" class="u_comment_reportbtn __comment_report_btn"><span class="u_hc">신고</span></a></span></div>
				<div>
					<p class="u_comment_txt u_comment_txt1" style="word-break:break-all;line-break: all;word-wrap:break-word;">dddddd</p>
				</div>
				<div class="__reply_item(12642637)" style="display:none;"><span class="u_comment_reply_writer u_comment_reply_writer1 __reply_writer"></span>
					<div class="u_comment_write u_comment_reply_area u_comment_reply_area1 __reply_item(12642637)">
						<form action="#" method="post">
							<fieldset>
								<legend class="u_hc">댓글입력</legend>
								<div>
									<label class="u_hc" for="upload_txt12642637">댓글</label>
									<span class="u_comment_input">
									<textarea id="upload_txt12642637" class="u_comment_upload __comment_textarea(12642637)" rows="5" cols="30"></textarea>
									</span>
									<input class="u_comment_reply_ulbtn __comment_write_btn" type="button" value="등록">
								</div>
								<p class="u_comment_promt __comment_write_prompt(12642637)">최대 500자 까지 작성할 수 있으며, 주제와 무관한 댓글, 악플은 삭제될 수 있습니다.</p>
							</fieldset>
						</form>
					</div>
				</div>
			</li>
			<li class="u_comment_lst u_comment_lst1 __comment_item(12642636)">
				<div><span class="u_comment_data u_comment_span_data1">jskdisjd01010101asd (kisx****) 2012-07-17 19:18</span><span class="u_commont_lstbtn u_comment_lstbtn1 __comment_command"><span class="u_comment_bar"></span><a href="#" class="u_comment_reportbtn __comment_report_btn">신고</a></span></div>
				<div>
					<p class="u_comment_txt u_comment_txt1" style="word-break:break-all;line-break: all;word-wrap:break-word;">dddddd</p>
				</div>
				<div class="__reply_item(12642636)" style="display:none;"><span class="u_comment_reply_writer u_comment_reply_writer1 __reply_writer"></span>
					<div class="u_comment_write u_comment_reply_area u_comment_reply_area1 __reply_item(12642636)">
						<form action="#" method="post">
							<fieldset>
								<legend class="u_hc">댓글입력</legend>
								<div>
									<label class="u_hc" for="upload_txt12642636">댓글</label>
									<span class="u_comment_input">
									<textarea id="upload_txt12642636" class="u_comment_upload __comment_textarea(12642636)" rows="5" cols="30"></textarea>
									</span>
									<input class="u_comment_reply_ulbtn __comment_write_btn" type="button" value="등록">
								</div>
								<p class="u_comment_promt __comment_write_prompt(12642636)">최대 500자 까지 작성할 수 있으며, 주제와 무관한 댓글, 악플은 삭제될 수 있습니다.</p>
							</fieldset>
						</form>
					</div>
				</div>
			</li>
			<li class="u_comment_lst u_comment_lst1 __comment_item(12642635)">
				<div><span class="u_comment_data u_comment_span_data1">한글아이디열글자일때 (kisx****) 2012-07-17 19:06</span><span class="u_commont_lstbtn u_comment_lstbtn1 __comment_command"><span class="u_comment_bar"></span><a href="#" class="u_comment_reportbtn __comment_report_btn">신고</a></span></div>
				<div>
					<p class="u_comment_txt u_comment_txt1" style="word-break:break-all;line-break: all;word-wrap:break-word;">ffffffff</p>
				</div>
				<div class="__reply_item(12642635)" style="display:none;"><span class="u_comment_reply_writer u_comment_reply_writer1 __reply_writer"></span>
					<div class="u_comment_write u_comment_reply_area u_comment_reply_area1 __reply_item(12642635)">
						<form action="#" method="post">
							<fieldset>
								<legend class="u_hc">댓글입력</legend>
								<div>
									<label class="u_hc" for="upload_txt12642635">댓글</label>
									<span class="u_comment_input">
									<textarea id="upload_txt12642635" class="u_comment_upload __comment_textarea(12642635)" rows="5" cols="30"></textarea>
									</span>
									<input class="u_comment_reply_ulbtn __comment_write_btn" type="button" value="등록">
								</div>
								<p class="u_comment_promt __comment_write_prompt(12642635)">최대 500자 까지 작성할 수 있으며, 주제와 무관한 댓글, 악플은 삭제될 수 있습니다.</p>
							</fieldset>
						</form>
					</div>
				</div>
			</li>
			<li class="u_comment_lst u_comment_lst1 __comment_item(12642634)">
				<div><span class="u_comment_data u_comment_span_data1">jskdisjd01010101asd (kisx****) 2012-07-17 17:21</span><span class="u_commont_lstbtn u_comment_lstbtn1 __comment_command"><span class="u_comment_bar"></span><a href="#" class="u_comment_reportbtn __comment_report_btn">신고</a></span></div>
				<div>
					<p class="u_comment_txt u_comment_txt1" style="word-break:break-all;line-break: all;word-wrap:break-word;">ㅇㅇㅇㅇㅇㅇ<br />두줄일 경우의 테스트</p>
				</div>
				<div class="__reply_item(12642634)" style="display:none;"><span class="u_comment_reply_writer u_comment_reply_writer1 __reply_writer"></span>
					<div class="u_comment_write u_comment_reply_area u_comment_reply_area1 __reply_item(12642634)">
						<form action="#" method="post">
							<fieldset>
								<legend class="u_hc">댓글입력</legend>
								<div>
									<label class="u_hc" for="upload_txt12642634">댓글</label>
									<span class="u_comment_input">
									<textarea id="upload_txt12642634" class="u_comment_upload __comment_textarea(12642634)" rows="5" cols="30"></textarea>
									</span>
									<input class="u_comment_reply_ulbtn __comment_write_btn" type="button" value="등록">
								</div>
								<p class="u_comment_promt __comment_write_prompt(12642634)">최대 500자 까지 작성할 수 있으며, 주제와 무관한 댓글, 악플은 삭제될 수 있습니다.</p>
							</fieldset>
						</form>
					</div>
				</div>
			</li>
			<li class="u_comment_lst u_comment_lst1 __comment_item(12642633)">
				<div><span class="u_comment_data u_comment_span_data1">jskdisjd01010101asd (kisx****) 2012-07-17 17:19</span><span class="u_commont_lstbtn u_comment_lstbtn1 __comment_command">
				  <a href="#" class="u_comment_delbtn __comment_del_btn"><span class="u_hc">삭제</span></a>
				 </span>
				</div>
				<div>
					<p class="u_comment_txt u_comment_txt1" style="word-break:break-all;line-break: all;word-wrap:break-word;">ㄴㄴㄴㄴㄴㄴㄴㄴ</p>
				</div>
				<div class="__reply_item(12642633)" style="display:none;"><span class="u_comment_reply_writer u_comment_reply_writer1 __reply_writer"></span>
					<div class="u_comment_write u_comment_reply_area u_comment_reply_area1 __reply_item(12642633)">
						<form action="#" method="post">
							<fieldset>
								<legend class="u_hc">댓글입력</legend>
								<div>
									<label class="u_hc" for="upload_txt12642633">댓글</label>
									<span class="u_comment_input">
									<textarea id="upload_txt12642633" class="u_comment_upload __comment_textarea(12642633)" rows="5" cols="30"></textarea>
									</span>
									<input class="u_comment_reply_ulbtn __comment_write_btn" type="button" value="등록">
								</div>
								<p class="u_comment_promt __comment_write_prompt(12642633)">최대 500자 까지 작성할 수 있으며, 주제와 무관한 댓글, 악플은 삭제될 수 있습니다.</p>
							</fieldset>
						</form>
					</div>
				</div>
			</li>
			<li class="u_comment_lst u_no_lst __comment_no_list" style="display: none; ">
				<div><span class="u_no_data">데이터가 존재하지 않습니다.</span></div>
			</li>
			<li class="u_comment_lst u_empty_comment_lst __comment_item(empty)" style="display:none;">
				<div>
					<p class="u_comment_txt u_emtpy_comment_txt" style="word-break:break-all;line-break: all;word-wrap:break-word;">. . .</p>
				</div>
			</li>
		</ul>
		<div class="u_pg3" style="display:none">
				<a href="#" class="prev">이전</a>
				<em class="u_pg3_pg">1 <span>/ 5</span></em>				
				<a href="#" class="next">다음</a>	
		</div>
		<form id="commentReportForm" method="GET">
			<input type="hidden" name="itemSvcCd" id="itemSvcCd" value="CBM">
			<input type="hidden" name="itemType" id="itemType" value="CMNT">
			<input type="hidden" name="itemVirtualSvcCd" id="itemVirtualSvcCd" value="">
			<input type="hidden" name="itemId" id="itemId" value="">
			<input type="hidden" name="itemTitle" id="itemTitle" value="">
			<input type="hidden" name="itemCateId" id="itemCateId" class="itemCateId0" value="">
			<input type="hidden" name="itemCateName" id="itemCateName" class="itemCateName0" value="">
			<input type="hidden" name="itemCateLevel" id="itemCateLevel" class="itemCateLevel0" value="">
			<input type="hidden" name="itemWriterId" id="itemWriterId" value="">
			<input type="hidden" name="itemEncyptWriterId" id="itemEncyptWriterId" value="">
			<input type="hidden" name="itemWriterNick" id="itemWriterNick">
			<input type="hidden" name="itemDt" id="itemDt" value="">
			<input type="hidden" name="m" id="m" value="rprtMobileFrm">
			<input type="hidden" name="retUrl" id="retUrl" value="">
			<input type="submit" style="display:none;">
		</form>
	</div>
	<div class="fbtn">
		<a href="#">댓글 더보기</a>
	</div>
	<!-- //공통 댓글 -->
<hr />
<!-- //ct -->
<?php include 'footer.php'; ?>