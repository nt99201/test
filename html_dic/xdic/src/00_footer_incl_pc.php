<div role="contentinfo" class="u_ft" style="display:none">
	<footer role="contentinfo">
		<p id="u_ftlkw" class="u_cr u_ftlkw">
			<span class="u_cri">&copy; <a href="#" class="u_cra u_cra_v1">NAVER Corp.</a></span>
		</p>
	</footer>
</div>
<!-- [D] 메인과 서브 모두 동일한 마크업으로 진행되며, 저작권법 문구만 메인에서 숨겨주세요 -->
<div class="footer_pc">
	<div class="section_btm">
		<? if ($layoutType && ($langId == "mn" || $langId == "th")) { ?>
    	<!-- 출처표시 -->
		<dl class="source_marking">
		<!-- [D] 영문일때 en 클래스 추가 -->
		<dt class="mk_tit">출처</dt>
		<dd class="mk_lst">
    		<? if ($langId == "mn") { ?>
			<!-- 몽골어 -->
			<span class="mk_so">몽골어-한국어 사전 : 이안나, 여병무, 베.푸렙오치르<span class="cp">울란바타르대학교</span></span>
			<span class="mk_so">한국어-몽골어 사전 : 여병무, 강선화<span class="cp">울란바타르대학교</span></span>
			<span class="mk_so">몽골어-한국어입문소사전 : 김학선<span class="cp">도서출판 문예림</span></span>
			<span class="mk_so">최신 몽골어 한국어 사전 : 김춘식, 엠.안또니나미하일, 체.어트겅바야르<span class="cp">도서출판 문예림</span></span>

			<? } else if ($langId == "th") { ?>
			<!-- 태국어-->
			<span class="mk_so">태국어-한국어 사전 : 한국외국어대학교 태국어과<span class="cp">울란바타르대학교</span></span>
			<span class="mk_so">한국어-태국어  사전 : 한국외국어대학교 태국어과<span class="cp">울란바타르대학교</span></span>
			<span class="mk_so">Thai-English Dictionary : Dr.Wit<span class="cp">SE-ED</span></span>
			<span class="mk_so">Thai-English Dictionary : Lexitron<span class="cp">NECTEC</span></span>
			<span class="mk_so">Dictionary of Buddhism : P. A. PAYUTTO</span>
			<? } ?>
		</dd>
		</dl>
		<? } ?>
     
		<p class="notice"><a target="_blank" href="#"><span class="notice_txt"><strong>[공지]</strong> 공지사항입니다.</span><span class="ico_new">new</span></a></p>
		<a class="btn_top" title="TOP" href="#">TOP</a>
	</div>
	<div class="footer_inner">
		<ul class="policy">
            <li class="first"><a target="_blank" onclick="clickcr(this, 'fot.blog','','',event);" href="http://blog.naver.com/dic_master">사전 공식 블로그</a></li>
            <li><a onclick="clickcr(this, 'fot.help','','',event);" target="_blank" href="https://help.naver.com/support/service/main.nhn?serviceNo=1000&categoryNo=2779">사전 고객센터</a></li>
            <li><a onclick="OPS.viewOPS('ops', {url : 'https://help.naver.com/support/contents/contents.nhn',  param : 'serviceNo=1000&categoryNo=2702&contentsNo=12584&interactiveMainNo=12570'}); clickcr(this, 'fot.modify','','',event); return false;" href="javascript:void(0);">콘텐츠 수정</a>&nbsp;<a>및</a>&nbsp;<a onclick="OPS.viewOPS('ops', {url : 'https://help.naver.com/support/service/main.nhn?serviceNo=1000&categoryNo=2705',  param : ''}); clickcr(this, 'fot.notify','','',event); return false;" href="javascript:void(0);">오류 신고</a></li>
        </ul>
		<!--<p class="copyright">본 콘텐츠의 저작권은 제공처에 있으며, 이를 무단 이용하는 경우 저작권법 등에 따라 법적 책임을 질 수 있습니다.</p>-->
		<address>
            <!--<a href="http://www.nhncorp.com/" target="_blank" class="logo"><img src="http://static.naver.net/common/footer/ci_naver.gif" width="63" height="11" alt="NAVER"></a>-->
            <em>Copyright ©</em>
            <a href="http://www.nhncorp.com/" target="_blank">NAVER Corp.</a>
            <span>All Rights Reserved.</span>
        </address>
	</div>
</div>
<!-- // [D] 메인과 서브 모두 동일한 마크업으로 진행되며, 저작권법 문구만 메인에서 숨겨주세요 -->
<!-- <div class="btn_mobile"><a onclick="goMobilePage('http://m.rudic.naver.com');"><img src="img/common/btn_mo_pc_ru.gif" width="980" height="110" alt="모바일 버전으로 보기"></a></div> -->
