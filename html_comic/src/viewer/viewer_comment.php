<?php $page='comment';$searchType='search';include '../inc/header_viewer.php'; ?>

<!-- ct  -->
<div id="ct">
    <div class="viewer_gnb">
        <h2 class="tit">별점·댓글</h2>
        <a href="#" class="btn_prev" title="이전"><span>이전</span></a>
        <a href="#" class="btn_replay" title="다시보기">다시보기</a>
    </div>

    <div class="cmt">
        <div class="wr">
            <h3><span>김병열&#47;오신희</span>작가의 말</h3>
            <p class="c">올한해 마무리 잘하시고, 앞으로도 잘 부탁드립니다.!<br>2014년 모두 행복하세요 ^^</p>
        </div>

        <!-- 별점 주기 -->
        <a name="starAnchor"></a>
        <div class="star" id="starDiv">
            <h3>회별별점</h3>

            <div class="pnt"><span class="u_grp"><span id="starScore" class="u_grp_v" style="width:98.00000190734863%;"></span></span> <span id="avgStarscore"><em class="score">9.8</em></span> <span class="tjoin" id="starscoreCount"><em>7,753</em>명 참여</span>
                <!-- [D] 별점주기 선택 한 경우 on 클래스 추가 및 문구 변경(별점닫기) 및 참여완료한 경우 hc 클래스 추가 -->
                <a href="#" class="btn_star"><span id="starToggleButton">별점주기</span></a>
            </div>
            <div class="pnt"><span class="u_grp"><span id="starScore" class="u_grp_v" style="width:98.00000190734863%;"></span></span> <span id="avgStarscore"><em class="score">9.8</em></span> <span class="tjoin" id="starscoreCount"><em>7,753</em>명 참여</span>
                <!-- [D] 별점주기 선택 한 경우 on 클래스 추가 및 문구 변경(별점닫기) 및 참여완료한 경우 hc 클래스 추가 -->
                <a href="#" class="btn_star on"><span id="starToggleButton">별점닫기</span></a>
            </div>
            <div class="pnt"><span class="u_grp"><span id="starScore" class="u_grp_v" style="width:98.00000190734863%;"></span></span> <span id="avgStarscore"><em class="score">9.8</em></span> <span class="tjoin" id="starscoreCount"><em>7,753</em>명 참여</span>
                <!-- [D] 별점주기 선택 한 경우 on 클래스 추가 및 문구 변경(별점닫기) 및 참여완료한 경우 hc 클래스 추가 -->
                <a href="#" class="btn_star on hc" style="display:none"><span id="starToggleButton">별점닫기</span></a>
                <!-- [D] 참여완료한 경우 -->
                <span class="btn_star">참여완료</span>
            </div>
            <input type="hidden" id="currentTitleId" value=20853 />
            <input type="hidden" id="currentNo" value=593 />
            <input type="hidden" id="currentWeek" value=fri />
            <input type="hidden" id="currentStarToggle" value="dn" />
            <div id="starButton">
                <div class="grade" id="grade">
                    <div class="u_grade">
                        <div class="u_grade_bw">
                            <!-- [D] 선택 된 점수에는 'u_grade_bon' class를 추가해주세요. -->
                            <input type="hidden" id="currentStarcore" value="10" />
                            <a href="#" class="u_grade_b u_grade_bon" id="u_grade_1">1점</a> <a href="#" class="u_grade_b2 u_grade_bon" id="u_grade_2">2점</a> <a href="#" class="u_grade_b u_grade_bon" id="u_grade_3">3점</a> <a href="javascript:starAct.star_clk('4');" class="u_grade_b2 u_grade_bon" id="u_grade_4">4점</a> <a href="javascript:starAct.star_clk('5');" class="u_grade_b u_grade_bon" id="u_grade_5">5점</a> <a href="javascript:starAct.star_clk('6');" class="u_grade_b2 u_grade_bon" id="u_grade_6">6점</a> <a href="javascript:starAct.star_clk('7');" class="u_grade_b u_grade_bon" id="u_grade_7">7점</a> <a href="javascript:starAct.star_clk('8');" class="u_grade_b2 u_grade_bon" id="u_grade_8">8점</a> <a href="javascript:starAct.star_clk('9');" class="u_grade_b u_grade_bon" id="u_grade_9">9점</a> <a href="javascript:starAct.star_clk('10');" class="u_grade_b2 u_grade_bon" id="u_grade_10">10점</a> <span class="u_grade_n"><a id="viewCurrentStarcore">10</a><span class="u_hc">점</span></span> </div>
                        <p class="u_grade_dsc">별을 클릭해주세요.</p>
                        <a href="#" title="1점 감산" class="u_grade_m">-</a> <a href="#" title="1점 가산" class="u_grade_p">+</a> </div>
                    <a class="bt5" href="#" id="bottomStarScoreSubmitButton">확인</a> </div>
            </div>
        </div>
        <!-- //별점 주기 -->

        <?php $pageType='comment'; include '../inc/likeit.php'; ?>

        <div class="sc2">
            <p class="bt7">
                <a href="#" class="w50 f"><span class="pv">이전화</span></a>
                <a href="#" class="w50">목록</a>
            </p>
        </div>

		<!-- 공통 댓글 -->
        <div class="u_comment_box u_comment_v2" id="comment_module">
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
                                <textarea id="upload_txt" class="u_comment_upload __comment_textarea(0)" rows="5" cols="30" style="height:49px" placeholder="주제와 무관한 댓글, 악풀은 삭제될 수 있습니다."></textarea></span>
                        </div>
                        <p class="u_comment_promt __comment_write_prompt(0)">최대 500자 까지 작성 가능하며, 주제와 무관한 댓글이나<br>악플은 표시제한 또는 삭제될 수 있습니다.

                    </p>
                    <input onclick="nclk(this, 'lst.write','','');" class="u_comment_ulbtn __comment_write_btn" type="button" value="등록">
                    </fieldset>
                </form>
            </div>
            <div class="u_comment_none" style="display: none;"><p>댓글이 없습니다.<br>첫번째 댓글을 남겨주세요.</p></div>

            <ul class="u_comment_lst __comment_list" style="display: block;">
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
            <form id="commentReportForm" method="GET" target="_parent"><input type="hidden" name="itemSvcCd" id="itemSvcCd" value="CBM"><input type="hidden" name="itemType" id="itemType" value="CMNT"><input type="hidden" name="itemVirtualSvcCd" id="itemVirtualSvcCd" value=""><input type="hidden" name="itemId" id="itemId" value=""><input type="hidden" name="itemTitle" id="itemTitle" value=""><input type="hidden" name="itemCateId" id="itemCateId" class="itemCateId0" value=""><input type="hidden" name="itemCateName" id="itemCateName" class="itemCateName0" value=""><input type="hidden" name="itemCateLevel" id="itemCateLevel" class="itemCateLevel0" value=""><input type="hidden" name="itemWriterId" id="itemWriterId" value=""><input type="hidden" name="itemEncyptWriterId" id="itemEncyptWriterId" value=""><input type="hidden" name="itemWriterNick" id="itemWriterNick"><input type="hidden" name="itemDt" id="itemDt" value=""><input type="hidden" name="m" id="m" value="rprtMobileFrm"><input type="hidden" name="retUrl" id="retUrl" value=""><input type="submit" style="display:none;"></form>
        </div>

        <div class="fbtn">
            <a href="#">댓글 더보기</a>
        </div>
        <!-- //공통 댓글 -->
    </div>
</div>
<!-- //ct -->
</body>
</html>