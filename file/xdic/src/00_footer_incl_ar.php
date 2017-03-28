<div role="contentinfo" class="u_ft">
	<footer role="contentinfo">
		<!-- QP예외코드 -->
		<?php if($srchBox != 'hide') echo '<!-- 검색 -->
		<form method="get" action="#">
			<div class="u_hsft">
				<!-- [D] 통합검색 버튼 유무에 따라,
					 * 통합검색 버튼이 있는 경우: class="u_hs"
					 * 통합검색 버튼이 없는 경우: class="u_hs u_hs_nous" -->
				<fieldset class="u_hs">
					<legend class="u_hc">검색</legend>
					<div class="u_hsw">
						<!-- [D] placeholder는 HTML5 DTD에서만 사용 가능. 그 외 DTD에서는 스크립트로 처리.
							 * HTML5 : <input ... placeholder="안내메시지" class="u_it">
							 * 그 외 : <input ... value="안내메시지" class="u_it u_sd"> -->
						<div class="u_itw">
							<input id="ac_input_bottom" type="text" name="query" title="검색어 입력" value="haber" maxlength="50" class="fKeyword u_it u_sd" dir="rtl">
							<button id="clear_input_bottom" type="button" class="u_clrt" style="display:block">입력 내용 삭제</button>
						</div>
						<button type="submit" class="u_hssbt u_hssbt_ss"><span class="u_vc">검색</span></button>
					</div>
				</fieldset>
			</div>
		</form>
		<!-- //검색 -->'?>
		<!-- //QP예외코드 -->
		<!-- [D] 언어설정 추가 : 맨위로 버튼에 대한 예외처리 재작업 필요 -->
		<?php if($goTop != 'hide') echo '<div class="set_lang">
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
		</div>'?>
		<!-- //[D] 언어설정 추가 : 맨위로 버튼에 대한 예외처리 재작업 필요 -->
        <div class="bt_area">
            <a href="#" class="bt_area_lk">
                <img src="img/la/ladic_60x60.png" width="30" height="30" alt="">
                <div class="bt_rgt">
                    <p class="bt_txt">네이버앱의 <span class="bt_col"><span class="colj"><?= $langValue ?>어사전</span> 홈화면에 바로가기 추가<span class="bt_ico"><span class="u_hc">추가</span></span></span></p>
                </div>
            </a>
		</div>
		<div class="inde_restriction">접속하신 단말/브라우저에서 네이버 어학사전이 제공하는 일부 기능이 작동하지 않을 수 있는 점 양해부탁드립니다.</div>
		<!-- 전체서비스 -->
		<!--0724aside>
			<div class="u_gnbw">
				<div id="u_gnbuw2" class="u_gnbuw">
					<h2 class="u_vc">전체서비스</h2>
					<a href="#u_ftlkw" class="u_vc">전체서비스 건너뛰기</a>
					<div class="u_gnbu_w">
						<!-- include -->
						<!-- [D] * 서비스명이 6자 이상인 경우 u_gnb에 u_gnb_v1 클래스를 더합니다. <li class="u_gnb u_gnb_v1">
								 * 서비스명이 영문만으로 이루어져 글자 크기가 1px 더 커야할 경우 u_gnba에 u_gnba_v1 클래스를 더합니다. -->
						<!--0724ul class="u_gnbu u_gnbuf">
						<li class="u_gnb"><a href="#" class="u_gnba">네이버홈</a></li>
						<li class="u_gnb"><a href="#" class="u_gnba">네이버me</a></li>
						<li class="u_gnb"><a href="#" class="u_gnba">스포츠 <span class="u_gnbn">New</span></a></li>
						<li class="u_gnb"><a href="#" class="u_gnba">뉴스</a></li>
						<li class="u_gnb"><a href="#" class="u_gnba">날씨</a></li>
						<li class="u_gnb"><a href="#" class="u_gnba">카페</a></li>
						<li class="u_gnb"><a href="#" class="u_gnba">메일</a></li>
						<li class="u_gnb"><a href="#" class="u_gnba">쪽지 <span class="u_gnbn">New</span></a></li>
						<li class="u_gnb"><a href="#" class="u_gnba">지식iN</a></li>
						<li class="u_gnb"><a href="#" class="u_gnba">블로그</a></li>
						<li class="u_gnb"><a href="#" class="u_gnba">미투데이</a></li>
						<li class="u_gnb"><a href="#" class="u_gnba">알림</a></li>
						</ul>
						<ul class="u_gnbu">
						<li class="u_gnb"><a href="#" class="u_gnba">증권</a></li>
						<li class="u_gnb"><a href="#" class="u_gnba">웹툰</a></li>
						<li class="u_gnb"><a href="#" class="u_gnba">TV편성표</a></li>
						<li class="u_gnb"><a href="#" class="u_gnba">영화</a></li>
						<li class="u_gnb"><a href="#" class="u_gnba">윙스푼</a></li>
						<li class="u_gnb"><a href="#" class="u_gnba">책</a></li>
						<li class="u_gnb u_gnb_v1"><a href="#" class="u_gnba">네이버캐스트 <span class="u_gnbn">New</span></a></li>
						<li class="u_gnb"><a href="#" class="u_gnba">영어사전</a></li>
						<li class="u_gnb"><a href="#" class="u_gnba">일본어사전</a></li>
						<li class="u_gnb"><a href="#" class="u_gnba">한자사전 <span class="u_gnbn">New</span></a></li>
						<li class="u_gnb"><a href="#" class="u_gnba">국어사전 <span class="u_gnbn">New</span></a></li>
						<li class="u_gnb"><a href="#" class="u_gnba">부동산 <span class="u_gnbn">New</span></a></li>
						</ul>
						<ul class="u_gnbu">
						<li class="u_gnb"><a href="#" class="u_gnba">캘린더</a></li>
						<li class="u_gnb"><a href="#" class="u_gnba">주소록</a></li>
						<li class="u_gnb"><a href="#" class="u_gnba">N드라이브</a></li>
						<li class="u_gnb"><a href="#" class="u_gnba">포토앨범</a></li>
						<li class="u_gnb"><a href="#" class="u_gnba">가계부</a></li>
						<li class="u_gnb"><a href="#" class="u_gnba">메모 <span class="u_gnbn">New</span></a></li>
						</ul>
						<ul class="u_gnbu">
						<li class="u_gnb"><a href="#" class="u_gnba">한게임</a></li>
						</ul>
						<!-- //include -->
					<!--0724/div>
				</div>
			</div>
		</aside>
		<!-- //전체서비스 -->
		<p id="u_ftlkw" class="u_ftlkw">
			<a href="#" class="u_ftlk">로그인</a> <a href="#" class="u_ftlk">전체 앱</a>
			<!-- [D] 전체서비스 접기: <a class="u_ftlkbt u_ftlkbt_fd">전체서비스<span class="u_vc"> 접기</span></a> -->
			<a href="#u_gnbuw2" class="u_ftlk">전체서비스<span class="u_vc"> 펼치기</span></a>
		</p>
		<p class="u_cr">
			<span class="u_cri"><a href="http://m.help.naver.com/serviceMain.nhn?falias=mo_dic_comm&type=faq#faq" class="u_cra u_cra_v1">도움말</a></span>
            <span class="u_cri"><a href="http://m.help.naver.com/serviceMain.nhn?falias=mo_dic_comm&type=faq#mail" class="u_cra">문의 및 신고</a></span>
            <span class="u_cri u_cri_v1">&copy;<a href="#" class="u_cra u_cra_v1">NAVER Corp.</a></span>
		</p>
	</footer>
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
			<em>Copyright &copy;</em>
			<a href="#" target="_blank">NAVER Corp.</a>
			<span>All Rights Reserved.</span>
		</address>
	</div>
</div>

<div class="btn_mobile" style="display:none"><a onclick="goMobilePage('http://m.rudic.naver.com');"><img src="img/common/btn_mo_pc_ru.gif" width="980" height="110" alt="모바일 버전으로 보기"></a></div>
