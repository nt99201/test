<?php $pageTitle='전체 댓글(없는 경우)';$searchType='search'; include 'inc/header.php'; ?>
<!-- ct  -->
<hr />
<div id="ct">
	<form name="form" id="form" method="post">
		<input type="hidden" id="currentTitleId" value="20853">
		<input type="hidden" id="currentNo" value="730">
		<input type="hidden" id="listCategory" value="webtoon">
		<input type="hidden" id="currentSeq" value="730">
		<input type="hidden" id="currentWeek" value="fri">

		<!-- 공통 댓글 -->
		<div class="u_comment_box u_comment_v2" id="comment_module">
			<div class="u_section">
				<div class="pl"><a href="#" class="btn_bx"><span class="pv">본문보기</span></a></div>
				<span class="u_comment_sum __comment_count"></span>
				<!-- [D] 선택된 탭의 경우 a요소에 class="on" 추가 -->
				<div class="nv"><a href="#"><em>BEST</em> 댓글</a><a href="#" class="on">전체 댓글</a></div>
				<h2 class="u_hc">전체 댓글</h2>
			</div>

			<!-- [D] 전체 댓글이 없는 경우-->
			<div class="msg_nolist">
				이번 화의 댓글이 아직 없습니다.<br>
				제일 먼저 댓글을 남겨 주세요.
			</div>

			<ul class="u_comment_lst __comment_list" style="display:none">
			<li class="u_comment_depth __comment_item(110976473) ">
				<div class="u_comment_info"><em class="u_name">샤인 <span class="u_id">(kslo****)</span></em> 2013-05-03 10:51 <span class="u_bar">|</span> <a href="#" class="u_report __comment_report_btn">신고</a></div>
				<p class="u_comment_text u_comment_txt1"><span class="u_recomm">BEST</span>네 잘보여요</p>
				<div class="u_comment_reply_info"></div>
				<div class="u_comment_reply __comment_reply">
					<div class="u_comment_recomm __comment_recomm"><a href="#" title="추천" class="__comment_rec" commentno="31629"><span class="u_hc">추천</span> <em>0</em></a><a href="#" title="비추천" class="__comment_disc" commentno="31629"><span class="u_hc">비추천</span> <em>0</em></a></div>
					<div class="u_comment_writebox __reply_item(110976473)" style="display:none;">
						<form action="#" method="post">
							<fieldset class="__comment_writebox">
								<legend class="u_hc">댓글입력</legend>
								<div>
									<label class="u_hc" for="upload_txt">댓글</label>
									<span class="u_comment_input"><textarea id="upload_txt" class="u_comment_upload __comment_textarea(0)" rows="5" cols="30" style="height:49px" onclick="javascript:commentAct.init()"></textarea></span>
								</div>
								<p class="u_comment_promt"><input onclick="nclk(this, 'lst.write','','');" class="u_comment_ulbtn __comment_write_btn" type="button" value="등록"></p>
								<p class="u_comment_promt __comment_write_prompt(0)">최대 500자 까지 작성 가능하며, 주제와 무관한 댓글이나<br>악플은 표시제한 또는 삭제될 수 있습니다.</p>
							</fieldset>
						</form>
					</div>
				</div>
			</li>
			<li class="u_comment_depth __comment_item(110976473) ">
				<div class="u_comment_info"><em class="u_name">샤인 <span class="u_id">(kslo****)</span></em> 2013-05-03 10:51 <span class="u_bar">|</span> <a href="#" class="u_report __comment_report_btn">신고</a></div>
				<p class="u_comment_text u_comment_txt1">ggg</p>
				<div class="u_comment_reply_info"></div>
				<div class="u_comment_reply __comment_reply">
					<div class="u_comment_recomm __comment_recomm"><a href="#" title="추천" class="__comment_rec" commentno="31629"><span class="u_hc">추천</span> <em>0</em></a><a href="#" title="비추천" class="__comment_disc" commentno="31629"><span class="u_hc">비추천</span> <em>0</em></a></div>
					<div class="u_comment_writebox __reply_item(110976473)" style="display:none;">
						<form action="#" method="post">
							<fieldset class="__comment_writebox">
								<legend class="u_hc">댓글입력</legend>
								<div>
									<label class="u_hc" for="upload_txt">댓글</label>
									<span class="u_comment_input"><textarea id="upload_txt" class="u_comment_upload __comment_textarea(0)" rows="5" cols="30" style="height:49px" onclick="javascript:commentAct.init()"></textarea></span>
								</div>
								<p class="u_comment_promt"><input onclick="nclk(this, 'lst.write','','');" class="u_comment_ulbtn __comment_write_btn" type="button" value="등록"></p>
								<p class="u_comment_promt __comment_write_prompt(0)">최대 500자 까지 작성 가능하며, 주제와 무관한 댓글이나<br>악플은 표시제한 또는 삭제될 수 있습니다.</p>
							</fieldset>
						</form>
					</div>
				</div>
			</li>
			</ul>

			<div class="__comment_page_area" style="display: none;"><div class="u_pg2 __comment_page_navigation"><a href="#" class="u_pg2_btn u_pg2_prev __comment_page_prev" style="display: none;"><span class="">이전</span></a><span class="u_pg2_btn u_pg2_prev __comment_page_prev-off" style="display: none;"><span class="">이전</span></span><em class="u_pg2_pg __comment_page_info">1-1<span class="u_pg2_total">/ 1</span></em><a href="#" class="u_pg2_btn u_pg2_next __comment_page_next" style="display: none;"><span class="">다음</span></a><span class="u_pg2_btn u_pg2_next  __comment_page_next-off" style="display: none;"><span class="">다음</span></span></div></div>
			<div class="fbtn" style="display:none">
				<a href="javascript:nclkF('rev.more','','', commentAct.listComment)"><span>전체댓글</span> 더보기</a>
			</div>
			<div class="u_comment_top top2 __comment_info">
				<div>
					<span class="u_comment_sum __comment_count"><strong>댓글</strong> 1</span>
				</div>
			</div>
			<div class="u_comment_writebox __comment_writebox_root_area" style="display: block;">
				<form action="#" method="post">
					<fieldset class="__comment_writebox">
						<legend class="u_hc">댓글입력</legend>
						<div>
							<label class="u_hc" for="upload_txt">댓글</label>
							<span class="u_comment_input">
								<textarea id="upload_txt" class="u_comment_upload __comment_textarea(0)" rows="5" cols="30" style="height:49px" onclick="javascript:commentAct.init()"></textarea></span>
						</div>
						<p class="u_comment_promt __comment_write_prompt(0)">최대 500자 까지 작성 가능하며, 주제와 무관한 댓글이나<br>악플은 표시제한 또는 삭제될 수 있습니다.
						<input onclick="nclk(this, 'lst.write','','');" class="u_comment_ulbtn __comment_write_btn" type="button" value="등록">
					</p>
					</fieldset>
				</form>
			</div>
			<div class="u_comment_none" style="display: none;"><p>댓글이 없습니다.<br>첫번째 댓글을 남겨주세요.</p></div>
			<form id="commentReportForm" method="GET" target="_parent"><input type="hidden" name="itemSvcCd" id="itemSvcCd" value="CBM"><input type="hidden" name="itemType" id="itemType" value="CMNT"><input type="hidden" name="itemVirtualSvcCd" id="itemVirtualSvcCd" value=""><input type="hidden" name="itemId" id="itemId" value=""><input type="hidden" name="itemTitle" id="itemTitle" value=""><input type="hidden" name="itemCateId" id="itemCateId" class="itemCateId0" value=""><input type="hidden" name="itemCateName" id="itemCateName" class="itemCateName0" value=""><input type="hidden" name="itemCateLevel" id="itemCateLevel" class="itemCateLevel0" value=""><input type="hidden" name="itemWriterId" id="itemWriterId" value=""><input type="hidden" name="itemEncyptWriterId" id="itemEncyptWriterId" value=""><input type="hidden" name="itemWriterNick" id="itemWriterNick"><input type="hidden" name="itemDt" id="itemDt" value=""><input type="hidden" name="m" id="m" value="rprtMobileFrm"><input type="hidden" name="retUrl" id="retUrl" value=""><input type="submit" style="display:none;"></form>
		</div>
		<!-- 공통 댓글 -->
		<div class="sc6">
			<p class="bt7">
				<a href="#" class="w50 f"><span class="pv">이전화</span></a>
				<a href="#" class="w50">목록</a>
			</p>
		</div>
	</form>

	<div class="sc6">
		<p class="bt7">
			<a href="#" class="w33 f"><span class="pv">이전화</span></a>
			<a href="#" class="w33"><span class="nx">다음화</span></a>
			<a href="#" class="w33">목록</a>
		</p>
	</div>
</div>
<hr />
<!-- //ct -->
<?php include 'inc/footer.php' ?>

<!-- javascript functions -->
<script language="javascript" type="text/javascript">
/*
 * 모바일 사파리 브라우저에서 주소창을 감추는 기능을 한다.
 */
function hideAddressBar(browserType) {
	if (browserType == "SAFARI") {
		setTimeout(function() { window.scrollTo(0, 1) }, 100);
	}
}

function open_layer() {
	var obj = document.getElementById("profile");
	obj.style.display="block";

	// 이미지 설정.
	var profileImagePath = "im/@tmp/@profileimg.gif";
	var personnaconNo = "";
	// 블로그 프로필 이미지
	var profileImg = document.getElementById("profileImg");
	if (profileImg != null && profileImg.src == "" && profileImagePath != "") {
		profileImg.src = "http://mwig.naver.com/alcatraz_mig/m.jsp?src=http://blogfiles.naver.net" + profileImagePath +  "&type=s2";
	}
	// 퍼스나콘
	var personaconImg = document.getElementById("personaconImg");
	if (personaconImg != null && personaconImg.src == "" && personnaconNo != "") {
		personaconImg.src = personnaconNo;
	}
}

function close_layer() {
	var obj = document.getElementById("profile");
	obj.style.display="none";
}

function goWrite(isWriteBlock) {
	if (!isWriteBlock) {
		location.href = 'PostWriteForm.nhn?blogId=mago3791';
	} else {
		alert('죄송합니다. 블로그 서비스 내 글쓰기가 제한된 상태입니다.');
	}
}
</script>
<!-- //javascript functions -->

</body>
</html>