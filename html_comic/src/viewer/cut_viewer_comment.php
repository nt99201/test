<?php $page='comment cut_viewer'; include '../inc/header_viewer.php'; ?>

<!-- ct  -->
<div id="ct">
    <div class="viewer_gnb">
        <h1 class="tit">댓글 <em>(142)</em></h1>
        <a href="#" class="btn_prev" title="이전"><span>이전</span></a>
        <a href="#" class="btn_fresh" title="새로고침"><span>새로고침</span></a>
    </div>
    <div class="commentDiv">
        <div class="u_comment_box u_comment_v2" id="comment_module" style="overflow: hidden;">
            <div class="u_section">
                <span class="u_comment_sum __comment_count"></span>
                <div class="nv"><a href="javascript:;" id="bestTab" class="on"><em>BEST</em> 댓글</a><a href="javascript:;" id="newTab" class="">전체 댓글</a></div>
                <h2 class="u_hc">BEST 댓글</h2>
            </div>
            <div class="msg_nolist __comment_no_list" style="display: none;">이번 화의 <em>BEST</em> 댓글이 아직 없습니다.<br>전체댓글에서 '<span>좋아요</span>'를 눌러<br><em>BEST</em> 댓글을 만들어 주세요.</div>
            <ul class="u_comment_lst __comment_list" style="display: block;">
            <li class="u_comment_depth __comment_item(12643397) ">
                <div class="u_comment_info">
                <em class="u_name">테스트하자 <span class="u_id">(napi****)</span></em> 2013-05-08 17:17
                 <span class="u_bar">|</span> <a href="#" class="u_report __comment_report_btn">신고</a></div>

                <p class="u_comment_text u_comment_txt1"><span class="u_recomm">BEST</span>최대 500자 까지 작성 가능하며, 주제와 무관한 댓글이나 악플은 표시제한 또는 삭제될 수 있습니다.</p>
                <div class="u_comment_reply_info"></div>
                <div class="u_comment_reply __comment_reply">
                    <div class="u_comment_recomm __comment_recomm">
                        <a href="#" title="좋아요" class="__comment_rec" commentno="12643397"><span class="u_hc">좋아요</span> <em>1</em></a>
                        <a href="#" title="싫어요" class="__comment_disc" commentno="12643397"><span class="u_hc">싫어요</span> <em>0</em></a>
                    </div>
                    <div class="u_comment_writebox __reply_item(12643397)" style="display:none;"><form action="#" method="post">
                    <fieldset class="__comment_writebox">
                        <legend class="u_hc">댓글입력</legend>
                        <div>
                            <label class="u_hc" for="upload_txt">댓글</label>
                            <span class="u_comment_input">
                                <textarea id="upload_txt" class="u_comment_upload __comment_textarea(0)" rows="5" cols="30" style="height:49px"></textarea>
                            </span>
                        </div>
                        <p class="u_comment_promt __comment_write_prompt(0)">최대 500자 까지 작성 가능하며, 주제와 무관한 댓글이나<br>악플은 표시제한 또는 삭제될 수 있습니다.</p>
                        <input class="u_comment_ulbtn __comment_write_btn" type="button" value="등록">
                    </fieldset>
                    </form></div>
                </div>
            </li>
            </ul>

            <div class="__comment_page_area" style="display: none;"><div class="u_pg3 __comment_page_navigation">
                <a href="#" class="prev __comment_page_prev" style="display: none;">이전</a>
                <em class="u_pg3_pg __comment_page_info">1-2<span class="u_pg2_total">/ 2</span></em>
                <a href="#" class="next __comment_page_next" style="display: none;">다음</a>
            </div></div>
            <div class="u_comment_writebox __comment_writebox_root_area" style="display: block;"><form action="#" method="post">
                <fieldset class="__comment_writebox">
                <legend class="u_hc">댓글입력</legend>
                <div>
                    <label class="u_hc" for="upload_txt">댓글</label>
                    <span class="u_comment_input">
                        <textarea id="upload_txt" class="u_comment_upload __comment_textarea(0)" rows="5" cols="30" style="height:49px"></textarea>
                    </span>
                </div>
                <p class="u_comment_promt __comment_write_prompt(0)">최대 500자 까지 작성 가능하며, 주제와 무관한 댓글이나<br>악플은 표시제한 또는 삭제될 수 있습니다.</p>
                <input class="u_comment_ulbtn __comment_write_btn" type="button" value="등록"></fieldset>
                </form>
            </div>
            <div class="fbtn" id="newestLink"><a href="#"><span>전체댓글</span> 더보기</a></div>
            <div class="u_comment_top top2 __comment_info" style="display: none;"><div>
            <span class="u_comment_sum __comment_count"><strong>댓글</strong> 2</span>
        </div>
    </div>
    <form id="commentReportForm" method="GET" target="_parent"><input type="hidden" name="itemSvcCd" id="itemSvcCd" value="CBM"><input type="hidden" name="itemType" id="itemType" value="CMNT"><input type="hidden" name="itemVirtualSvcCd" id="itemVirtualSvcCd" value=""><input type="hidden" name="itemId" id="itemId" value=""><input type="hidden" name="itemTitle" id="itemTitle" value=""><input type="hidden" name="itemCateId" id="itemCateId" class="itemCateId0" value=""><input type="hidden" name="itemCateName" id="itemCateName" class="itemCateName0" value=""><input type="hidden" name="itemCateLevel" id="itemCateLevel" class="itemCateLevel0" value=""><input type="hidden" name="itemWriterId" id="itemWriterId" value=""><input type="hidden" name="itemEncyptWriterId" id="itemEncyptWriterId" value=""><input type="hidden" name="itemWriterNick" id="itemWriterNick"><input type="hidden" name="itemDt" id="itemDt" value=""><input type="hidden" name="m" id="m" value="rprtMobileFrm"><input type="hidden" name="retUrl" id="retUrl" value=""><input type="submit" style="display:none;"></form>
</div>
<!-- //ct -->
</div>
</div>
</body>
</html>