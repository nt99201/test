<div role="contentinfo" class="u_ft">	
	<footer role="contentinfo">

		<? if ($layoutType && ($langId == "mn" || $langId == "th" || $langId == "vn")) { ?>
		<!-- 출처표시 -->	
		<dl class="source_marking">
		<dt class="mk_tit">출처</dt>
		<dd class="mk_lst">
			<? if ($langId == "mn") { ?>
			<!-- 몽골어 -->
			<span class="mk_so">몽골어-한국어 사전<br>(울란바타르대학교)</span>
			<span class="mk_so">한국어-몽골어 사전<br>(울란바타르대학교)</span>
			<span class="mk_so">몽골어-한국어입문소사전<br>(도서출판 문예림)</span>
			<span class="mk_so">최신 몽골어 한국어 사전<br>(도서출판 문예림)</span>

			<? } else if ($langId == "th") { ?>
			<!-- 태국어 -->
			<span class="mk_so">태국어-한국어 사전<br>(한국외국어대학교 지식출판원)</span>
			<span class="mk_so">한국어-태국어 사전<br>(한국외국어대학교 지식출판원)</span>
			<span class="mk_so">Thai-English Dictionary<br>(SE-ED)</span>
			<span class="mk_so">Thai-English Dictionary<br>(Lexitron)</span>
			<span class="mk_so">Dictionary of Buddhism<br>(P. A. PAYUTTO)</span>

			<? } else if ($langId == "vn") { ?>
			<!-- 베트남어 -->
			<span class="mk_so">베트남어-한국어 사전<br>(조재현 | 한국외국어대학교 지식출판원)</span>
			<span class="mk_so">한국어-베트남어 사전<br>(송정남, 박연관, 이관우 | 한국외국어대학교 지식출판원)</span>
			<span class="mk_so">베트남어 한국어 입문사전<br>(Nguyen Thi To Tam, 류지은 | 도서출판 문예림)</span>
			<span class="mk_so">한국어 베트남어 대사전<br>(Le Huy Khoa 가나다 어학당 | 도서출판 문예림)</span>
			<span class="mk_so">한국어-베트남어 입문소사전<br>(신연희, 박민규 | 도서출판 문예림)</span>
			<span class="mk_so">베트남어-한국어 입문소사전<br>(신연희, 박민규 | 도서출판 문예림)</span>
			<span class="mk_so">Vietnamese-English Dictionary<br>(Vietnam Lexicography Centre)</span>
			<span class="mk_so">Vietnamese Dictionary<br>(Vietnam Lexicography Centre)</span>
			<? } ?>
		</dd>
		</dl>
		<? } ?>
    	
		<!-- [D] 언어설정 추가 : 맨위로 버튼에 대한 예외처리 재작업 필요 -->
		<?php if($goTop != 'hide') echo '<div class="set_lang">
			<div class="set_lang_inner">
				<label for="selec_lang">언어설정</label>
				<div class="selec_wrap">
					<select id="selec_lang">
						<option value="ru" selected="">러시아어</option>
						<option value="pt">포르투갈어</option>
						<option value="vi">베트남어</option>
						<option value="tr">터키어</option>
					</select>
				</div>
				<a class="u_ftst" href="javascript:nclk(this, "btm.top", "", "1");window.scrollTo(0, 1);"><span class="ico_top"></span>맨위로</a>
			</div>
		</div>'?>
		<!-- //[D] 언어설정 추가 : 맨위로 버튼에 대한 예외처리 재작업 필요 -->

		<div class="inde_restriction">접속하신 단말/브라우저에서 네이버 어학사전이 제공하는 일부 기능이 작동하지 않을 수 있는 점 양해부탁드립니다.</div>
		<p id="u_ftlkw" class="u_ftlkw">
			<a href="#" class="u_ftlk">로그인</a> <a href="#" class="u_ftlk">전체 앱</a>
			<!-- [D] 전체서비스 접기: <a class="u_ftlkbt u_ftlkbt_fd">전체서비스<span class="u_vc"> 접기</span></a> -->
			<a href="#u_gnbuw2" class="u_ftlk">전체서비스<span class="u_vc"> 펼치기</span></a>
		</p>
		<p class="u_cr">
			<span class="u_cri"><a href="http://m.help.naver.com/serviceMain.nhn?falias=mo_dic_comm&type=faq#faq" class="u_cra u_cra_v1">도움말</a></span>
            <span class="u_cri"><a href="http://m.help.naver.com/serviceMain.nhn?falias=mo_dic_comm&type=faq#mail" class="u_cra">문의 및 신고</a></span>
            <span class="u_cri u_cri_v1"><a href="#" class="u_cra u_cra_v1">ⓒ NAVER Corp.</a></span>
		</p>
	</footer>

	<!-- Android home shortcut banner -->
	<div class="shortcut">
		<a href="" class="shortcut_click">
			<img src="img/<?= $langId ?>/ico_app_an.png" width="30" height="30" alt="" class="shortcut_ico">
			<span class="shortcut_text">네이버앱의</span><br>
			<span class="shortcut_text2"><em class="shortcut_text2_color"><?= $langValue ?>어사전</em> 홈 화면에 바로가기 추가</span>
			<span class="shortcut_ico2"></span>
		</a>
	</div>
	<!-- //Android home shortcut banner -->

</div>

<div class="footer_pc" style="display:none">
	<div class="section_btm">
		<ul>
		<li class="footer_info">자료 제공 : KUIS 출판부</li>
		<li>저자 : 최한우 편</li>
		</ul>
        <a onclick="clickcr(this, 'fot.top','','',event);" class="btn_top" title="TOP" href="#">TOP</a>
	</div>
	<div class="footer_inner">
    	<p class="notice"><a onclick="clickcr(this, 'fot.notice','','',event);" target="_blank" href="http://blog.naver.com/dic_master/90148253029"><span class="notice_txt"><strong>[공지]</strong> 몽골어사전을 출시하였습니다.</span><span class="ico_new">new</span></a></p>
		<ul>
		<li class="first"><a href="http://blog.naver.com/dic_master" target="_blank" onclick="clickcr(this, 'fot.blog','','',event);">사전 공식 블로그</a></li>
		<li><a href="http://help.naver.com/ops/step2/faq.nhn?fcatid=13812&amp;tbox=236&amp;faqType=0" target="_blank" onclick="clickcr(this, 'fot.help','','',event);">사전 도움말</a></li>
		<li><a href="#" onclick="OPS.viewOPS('ops', {url : 'http://help.naver.com/ops/step2/mail.nhn',  param : 'upCatg=236'}); clickcr(this, 'fot.report','','',event); return false;">오류신고 및 의견제안</a></li>

		</ul>
		<address>
			<em>Copyright ⓒ</em>
			<a href="#" target="_blank">NAVER Corp.</a>
			<span>All Rights Reserved.</span>
		</address>
	</div>
</div>

<div class="btn_mobile" style="display:none"><a onclick="goMobilePage('http://m.rudic.naver.com');"><img src="img/common/btn_mo_pc_ru.gif" width="980" height="110" alt="모바일 버전으로 보기"></a></div>
