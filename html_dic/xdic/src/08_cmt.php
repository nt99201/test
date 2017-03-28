<form action="#" onsubmit="return false;">
	<input type="hidden" id="hiddenQuery" value="의견">
	<fieldset>
		<ul class="m_tab">
		<li class="m_tab_l m_tab_on"><a class="m_tab_a">뜻<span class="blind">탭</span></a></li>
		<li class="m_tab_l"> <a href="#" class="m_tab_a">단어<span class="blind">탭</span></a> </li>
		<li class="m_tab_l"> <a href="#" class="m_tab_a">예문<span class="blind">탭</span></a> </li>
		<li class="m_tab_l"> <a href="#" class="m_tab_a">본문<span class="blind">탭</span></a> </li>
		</ul>
		<div class="entry_top  entry_top_v2">
			<h3 class="blind">뜻</h3>
			<div class="entry_tit">
				<h3 class="entry_h ft_k2f"> <span class="tit"> 의견 <span class="sdmark">[意見]</span> </span> </h3>
			</div>
		</div>

		<!-- S: 활용형 -->
		<!-- E: 활용형 -->

		<div class="entry_dn"> <a class="more_exa exAllBtn open" href="#" style="visibility: visible;"><span class="hc">예문 더보기</span></a> <a href="#" class="fontSizeBtn ft_small on" act="small"><span class="hc">글자크기 작게</span></a> <a href="#" class="fontSizeBtn ft_big on" act="big"><span class="hc">글자크기 크게</span></a>
			<div class="section_box">
				<div class="entry_section  Search_Entry_Div all_other">
					<ol class="entry_d2">
					<li> <span class="li_rgt"> uma opinião; uma idéia; uma sugestão <span class="entry_dd"> 의견의 일치 <em class="br_kr">um consenso; um acordo de pontos de vista</em> </span> <span class="entry_dd ex_165157" style="display:none"> 나의 의견으로는 <em class="br_kr">na minha opinião</em> <a href="#" exid="ex_165157" show="예문보기" hide="예문닫기" class="btn_ex2 exbtn"></a> </span> <span class="entry_dd ex_165157" style="display:none"> 의견을 말하다 <em class="br_kr">dar (expressar, di- zer) a sua opinião</em> <a href="#" exid="ex_165157" show="예문보기" hide="예문닫기" class="btn_ex2 exbtn"></a> </span> <span class="entry_dd ex_165157" style="display:none"> 의견이 같다 <em class="br_kr">concordar com《uma pes- soa》; ser da mesma opinião</em> <a href="#" exid="ex_165157" show="예문보기" hide="예문닫기" class="btn_ex2 exbtn"></a> </span> <span class="entry_dd ex_165157" style="display:none"> 의견에 따르다 <em class="br_kr">seguir (aceitar) o conselho《de uma pessoa》</em> <a href="#" exid="ex_165157" show="예문보기" hide="예문닫기" class="btn_ex2 exbtn"></a> </span> </span> </li>
					</ol>
				</div>
			</div>
			<div class="more_whole"> <a class="more_whole_lk" href="#"><em class="more_whole_txt">‘의견’의</em> 전체 검색 결과 보기</a> </div>
			<!--[D] 소셜플러그인 영역-->
			<div id="spi" class="naver-splugin"
					data-style="sns"
					data-url="http://m.star.naver.com/girlsgeneration/news/end?id=2416214"
					data-title="소녀시대, 'Mr.Mr.' 국내 일간차트 올킬..글로벌 차트 석권"
					data-kakaotalk-image-url="http://mimgnews1.naver.net/image/108/2014/03/22/2014032208111076164_1_59_20140322081402.jpg?type=w540"
					data-line-image-url="http://mimgnews1.naver.net/image/108/2014/03/22/2014032208111076164_1_59_20140322081402.jpg?type=w540"
					data-oninitialize="nhn.sample.func(this);"></div>
			<div class="m_warning">본 콘텐츠의 저작권은 제공처에 있으며, 이를 무단 사용 시 저작권법 등에 따라 법적 책임을 질 수 있습니다.</div>
			<ul class="bot_menu">
			<li><a href="#">내용 오류 신고</a></li>
			</ul>
			<!-- 다른사전결과보기 -->
			<?php include '01_otherdict.php'; ?>
			<!-- 검색 -->
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
								<input id="ac_input_bottom" type="text" name="query" title="검색어 입력" value="haber" maxlength="50" class="fKeyword u_it u_sd">
								<button id="clear_input_bottom" type="button" class="u_clrt" style="display:block">입력 내용 삭제</button>
							</div>
							<button type="submit" class="u_hssbt u_hssbt_ss"><span class="u_vc">검색</span></button>
						</div>
					</fieldset>
				</div>
			</form>
		</div>
		<div id="Async_Div_Begin" style="display:none"></div>
	</fieldset>
</form>
