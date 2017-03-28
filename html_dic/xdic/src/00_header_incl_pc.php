<!--PC header -->
<div class="header_pc" id="header">

	<!-- 원네이버 중국어사전 GNB 마크업 -->
	<!--[D] 다국어 일때 Nmulti_lang 클래스 추가 -->
	<div class="Ngnb_wrap">
		<div class="Ngnb">
			<div class="Ngnb_inner">
				<a href="#" class="Nlogo_link"><span class="Nsp_gnb">NAVER</span></a>
				<div class="Ngnb_service">
					<h1 class="Nservice_item"><a href="#" class="Nhome Ndic"><span class="Nsp_gnb">사전</span></a></h1>
					<span class="Nservice_subitem"><a href="#" class="Ntranslate"><span class="Nsp_gnb">번역기</span></a></span>
					<span class="Nservice_subitem"><a href="#" class="Nusertranslation"><span class="Nsp_gnb">참여번역</span></a></span>
					<span class="Nservice_subitem"><a href="#" class="Nknowledge"><span class="Nsp_gnb">지식백과</span></a></span>
				</div>

				<div class="Ngnb_common">
					<!-- GNB -->
					<div id="gnb">
						<script type="text/javascript">
							var gnb_option = {  //json 형식 옵션 설정 변수
								gnb_service : "sports.news", //서비스 명 .naver.com 이하 도메인을 기술 ex) sports.news.naver.com => sports.news
								gnb_template : "gnb_utf8", //사용하고 있는 템플릿 명(현재 개발된 버전인 gnb_utf8로 설정)
								gnb_logout : "translate.naver.com", //GNB에서 로그아웃 후 redirect 될 URL, encodeURIComponent('주소')로 인코딩 필요
								gnb_login : "translate.naver.com", // GNB에서 로그인 후 redirect 될 URL, encodeURIComponent('주소')로 인코딩 필요 (옵션 사항)
								gnb_brightness : 3, // 1: 어두운색 아이콘, 2: 밝은색 아이콘 + 투명도, 3: 밝은색 아이콘
								gnb_item_hide_option : 0, //0(default) : 모두 표시, 1 : 로그인버튼 숨기기, 2 : user 레이어 숨기기, 4: Naver Me 영역 숨기기, 8 : 메일알림영역 숨기기, 16 : 프로필 이미지 숨기기, 32 : 임직원혜택 보이기(숨길 영역의 값을 bit sum 하여 적용), 64 : 더보기 아이콘 숨기기
								gnb_one_naver : 1 //  GNB ONE PC 디자인. 0: 사용 안함(기본값), 1: 일반형, 2: 축소형. gnb_one_naver 옵션을 사용(1 또는 2) 설정시 gnb_brightness 설정은 무시.
							}
						</script>
						<script type="text/javascript" charset="utf-8" src="https://ssl.pstatic.net/static.gn/templates/gnb_utf8.nhn"></script><!-- 인코딩등에 따른 주소는 상단 개발 위키 참조 -->
					</div>
					<!-- //GNB -->
				</div>
			</div>
		</div>
		<div class="Nlnb" id="Nlnb">
			<div class="Nlnb_inner">
				<ul class="Nnav">
				<!--[D] 선택메뉴에 Nnav_item_active 추가-->
				<li class="Nnav_cell"><a href="#" class="Nnav_item Nnav_item_active">사전홈</a></li>
				<li class="Nnav_cell"><a href="#" class="Nnav_item">영어</a></li>
				<li class="Nnav_cell"><a href="#" class="Nnav_item">국어</a></li>
				<li class="Nnav_cell"><a href="#" class="Nnav_item">한자</a></li>
				<li class="Nnav_cell"><a href="#" class="Nnav_item">일본어</a></li>
				<li class="Nnav_cell"><a href="#" class="Nnav_item">중국어</a></li>
				<li class="Nnav_cell"><a href="#" class="Nnav_item">프랑스어</a></li>
				<li class="Nnav_cell"><a href="#" class="Nnav_item">스페인어</a></li>
				<li class="Nnav_cell"><a href="#" class="Nnav_item">독일어</a></li>
				<li class="Nnav_cell"><a href="#" class="Nnav_item">베트남어</a><span class="Nsp_gnb Nupdate">업데이트</span></li>
				<li class="Nnav_cell Nmore">
					<a href="#" class="Nnav_item">더보기</a><span class="Nsp_gnb Nnew">신규추가</span><span class="Nsp_gnb Nico_more"></span>
					<div class="Nmore_dic">
						<div class="Nalldic_wrap">
							<div class="Nview_dic">
								<h3 class="Nblind">어학사전 바로가기</h3>
								<div class="Ndic_wrap Nhot">
									<p class="Ntit">인기</p>
									<ul>
									<li><a href="#">영어/영영</a></li>
									<li><a href="#">국어</a></li>
									<li><a href="#">한자</a></li>
									<li><a href="#">일본어</a></li>
									<li><a href="#">중국어</a></li>
									<li><a href="#">글로벌회화</a></li>
									</ul>
								</div>
								<div class="Ndic_wrap Nasia">
									<p class="Ntit">아시아/아프리카</p>
									<ul>
									<li><a href="#">베트남어<span class="Nsp_gnb Nupdate">update</span></a></li>
									<li><a href="#">인도네이사어<span class="Nsp_gnb Nupdate">update</span></a></li>
									<li><a href="#">태국어<span class="Nsp_gnb Nnew">new</span></a></li>
									<li><a href="#">아랍어<span class="Nsp_gnb Nnew">new</span></a></li>
									<li><a href="#">캄보디아어</a></li>
									<li><a href="#">몽골어</a></li>
									<li><a href="#">힌디어<span class="Nsp_gnb Nnew">new</span></a></li>
									<li><a href="#">페르시아어<span class="Nsp_gnb Nnew">new</span></a></li>
									<li><a href="#">네팔어<span class="Nsp_gnb Nnew">new</span></a></li>
									<li><a href="#">스와힐리어<span class="Nsp_gnb Nnew">new</span></a></li>
									</ul>
								</div>
								<div class="Ndic_wrap Neu">
									<p class="Ntit">유럽/아메리카</p>
									<ul>
									<li><a href="#">프랑스어</a></li>
									<li><a href="#">스페인어</a></li>
									<li><a href="#">이탈리아어<span class="Nsp_gnb Nnew">new</span></a></li>
									<li><a href="#">포르투갈어<span class="Nsp_gnb Nupdate">update</span></a></li>
									<li><a href="#">조지아어</a></li>
									<li><a href="#">우크라이나어</a></li>
									<li><a href="#">루마니아어<span class="Nsp_gnb Nnew">new</span></a></li>
									<li><a href="#">스웨덴어<span class="Nsp_gnb Nnew">new</span></a></li>
									<li><a href="#">폴란드어<span class="Nsp_gnb Nnew">new</span></a></li>
									<li><a href="#">독일어</a></li>
									<li><a href="#">러시아어<span class="Nsp_gnb Nupdate">update</span></a></li>
									<li><a href="#">라틴어</a></li>
									<li><a href="#">터키어<span class="Nsp_gnb Nupdate">update</span></a></li>
									<li><a href="#">알바니아어</a></li>
									<li><a href="#">우즈베크어</a></li>
									<li><a href="#">네덜란드어<span class="Nsp_gnb Nnew">new</span></a></li>
									<li><a href="#">헝가리어<span class="Nsp_gnb Nnew">new</span></a></li>
									<li><a href="#">체코어<span class="Nsp_gnb Nnew">new</span></a></li>
									</ul>
								</div>
								<div class="Ndic_wrap Ngo_trans">
									<p class="Ntit">번역기 바로가기</p>
									<ul>
									<li><a href="#">영어<span class="Nsp_gnb Nico_trans">에서</span>한국어<span class="Nblind">로 번역하기</span></a></li>
									<li><a href="#">일본어<span class="Nsp_gnb Nico_trans">에서</span>한국어<span class="Nblind">로 번역하기</span></a></li>
									<li><a href="#">중국어<span class="Nsp_gnb Nico_trans">에서</span>한국어<span class="Nblind">로 번역하기</span></a></li>
									<li><a href="#">스페인어<span class="Nsp_gnb Nico_trans">에서</span>영어<span class="Nblind">로 번역하기</span></a></li>
									<li><a href="#">포르투갈어<span class="Nsp_gnb Nico_trans">에서</span>영어<span class="Nblind">로 번역하기</span></a></li>
									<li><a href="#">태국어<span class="Nsp_gnb Nico_trans">에서</span>영어<span class="Nblind">로 번역하기</span></a></li>
									<li><a href="#">인도네시아어<span class="Nsp_gnb Nico_trans">에서</span>영어<span class="Nblind">로 번역하기</span></a></li>
									<li><a href="#">사이트 번역<span class="Nsp_gnb Nnew">new</span></a></li>
									</ul>
								</div>
								<div class="Ndic_wrap Nusr_service">
									<p class="Ntit">이용자 참여 서비스</p>
									<ul>
									<li><a href="#">오픈사전<span class="Nsp_gnb Nnew">new</span></a></li>
									<li><a href="#">사전퀴즈<span class="Nsp_gnb Nnew">new</span></a></li>
									<li><a href="#">참여번역<span class="Nsp_gnb Nnew">new</span></a></li>
									</ul>
								</div>
								<div class="Ndic_wrap Netc_svc">
									<p class="Ntit Nblind">바로가기</p>
									<ul>
									<li><a href="#">단어장</a><span class="Nbar"></span></li>
									<li><a href="#">글로벌회화</a><span class="Nbar"></span></li>
									<li><a href="#">작은창 사전</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</li>
				</ul>

				<div class="Nlnb_tool">
					<a href="#" class="Nlink">작은창 사전</a>
					<a href="#" class="Nlink">단어장</a>

					<div class="Nlang_setting">
						<label class="Nlabel">언어설정</label>
						<button class="Nbtn_select"><span>한국어</span><span class="Nsp_gnb Nico_more">더보기</span></button>

						<div class="Nlist">
							<!-- [D] 선택된 언어에 class="Nitem_active" 추가 -->
							<a href="#" class="Nitem Nitem_active">한국어<span class="Nline"></span></a>
							<a href="#" class="Nitem">English<span class="Nline"></span></a>
							<a href="#" class="Nitem">日本語<span class="Nline"></span></a>
							<a href="#" class="Nitem">中文(简体)<span class="Nline"></span></a>
							<a href="#" class="Nitem">中文(繁體)<span class="Nline"></span></a>
							<a href="#" class="Nitem">Español<span class="Nline"></span></a>
							<a href="#" class="Nitem">Português<span class="Nline"></span></a>
							<a href="#" class="Nitem">Indonesian<span class="Nline"></span></a>
							<a href="#" class="Nitem">ภาษาไทย<span class="Nline"></span></a>
							<a href="#" class="Nitem">Deutsch<span class="Nline"></span></a>
							<a href="#" class="Nitem Nitem_last">Tiếng Việt<span class="Nline"></span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--[D] gnb 공통 css,js-->
		<link type="text/css" rel="stylesheet" href="http://view.ui.naver.com/dict/common/develop/css/onenaver_gnb.css" />
		<script type="text/javascript" src="http://view.ui.naver.com/dict/common/develop/js/ui.js"></script>
		<!--//[D] gnb 공통 css,js-->
	</div>
	<!-- //원네이버 GNB -->

    <!-- top_search -->
	<div class="cont_main">
		<div class="title_type">
			<h2 title="네이버 <?= $langValue ?>어사전">
				<a href="#" class="logo">네이버 <?= $langValue ?>어사전</a>
				<span class="con_mob">
					<a href="javascript:void(0)" class="btn_mob" id="mobile_btn" style="overflow:hidden;">+Mobile</a>
					<div id="mobile_intro_layer" class="lyr_mobile" style="display: none;">
						<p>모바일에 최적화된<br><strong><?= $langValue ?>어사전</strong>을<br>체험하세요</p>
						<div>
							<span class="blind"><?= $langValue ?>어사전 모바일 QR코드 - http://m.ptdic.naver.com</span>
							<a href="javascript:void(0);" onclick="window.open('http://webmsg.naver.com/api/send_url.php?NHN_CODE=ptdic&amp;SMSID=ESW00017&amp;MMSID=EMG00005','pop_alert','toolbar=no,scrollbars=no ,width=285,height=402,top=100,left=100'); clickcr(this,'STA*m.sms','','',event);">﻿URL 문자 전송</a>
						</div>
					</div>
				</span>
			</h2>
		</div>
		<div class="search_type">
			<div class="main_srch">
				<form action="#" onsubmit="return false;">
					<fieldset class="auto_on">
						<legend>검색영역</legend>
						<div class="gbox">
							<div class="gbox_area">
								<div class="gbox_inner">
									<!--<dl class="">
									<dt><a href="#" onclick="return false">전체</a></dt>
									<dd>
										<ul class="opt">
										<li><a href="#" onclick="clickcr(this, 'msh.all','','',event); return false;" searchtype="all">전체</a></li>
										<li><a href="#" onclick="clickcr(this, 'msh.word','','',event); return false;" searchtype="entry">단어</a></li>
										<li><a href="#" onclick="clickcr(this, 'msh.example','','',event); return false;" searchtype="example">예문</a></li>
										<li><a href="#" onclick="clickcr(this, 'msh.body','','',event); return false;" searchtype="mean">본문</a></li>
										</ul>
									</dd>

									<input type="hidden" id="selectRange" value="all">
									<!-- @AU:ac 특수문자 기능 토글 체크박스 -->
									<input type="hidden" id="ac_checkbox">
									<!-- //@AU:ac 특수문자 기능 토글 체크박스 -->
									<a href="#" title="자동완성 펼치기" onclick="clickcr(this, this.parentNode.className.indexOf('on')&lt;0?'msh.autoopen':'msh.autoclose','','',event);" hide="자동완성 접기" show="자동완성 펼치기" class="btn_arw _btn_arw"><span class="blind">자동완성 펼치기</span></a>
									<!-- 자동완성레이어 -->
									<div id="ac_layer" class="auto_complete2" style="width:100%; display: none;">
										<ul class="list_head"><li class="_auto_complete_list_item" style="cursor:pointer;"><em><span class="w1"><strong>m</strong></span><span class="w2">베트남어 알파벳 중<span class="fra">15</span>번째 자</span></em></li><li class="_auto_complete_list_item" style="cursor:pointer;"><em><span class="w1"><strong>m</strong>a</span><span class="w2">유령<span class="fra">, </span>망령<span class="fra">, </span>죽은 사람의 혼</span></em></li><li class="_auto_complete_list_item" style="cursor:pointer;"><em><span class="w1"><strong>m</strong>a chay</span><span class="w2">장례식<span class="fra">, </span>불쾌한 일<span class="fra">, </span>불상사</span></em></li><li class="_auto_complete_list_item" style="cursor:pointer;"><em><span class="w1"><strong>m</strong>a cô</span><span class="w2">매춘을 알선하는 사람<span class="fra">, </span>여자를 주<span class="fra">...</span></span></em></li><li class="_auto_complete_list_item" style="cursor:pointer;"><em><span class="w1"><strong>m</strong>a lanh</span><span class="w2">심술궂은<span class="fra">, </span>악의 있는</span></em></li><li class="_auto_complete_list_item" style="cursor:pointer;"><em><span class="w1"><strong>m</strong>a lem</span><span class="w2">못생기고 지저분한 귀신</span></em></li><li class="_auto_complete_list_item" style="cursor:pointer;"><em><span class="w1"><strong>m</strong>a mảnh</span><span class="w2">장난꾸러기의</span></em></li><li class="_auto_complete_list_item" style="cursor:pointer;"><em><span class="w1"><strong>m</strong>a quái</span><span class="w2">유령과 악령</span></em></li><li class="_auto_complete_list_item" style="cursor:pointer;"><em><span class="w1"><strong>m</strong>a quỉ</span><span class="w2">유령과 악귀</span></em></li><li class="_auto_complete_list_item" style="cursor:pointer;"><em><span class="w1"><strong>m</strong>a túy</span><span class="w2">마취약<span class="fra">, </span>마약</span></em></li><li class="line"></li><li class="_auto_complete_list_item" style="cursor:pointer;"><em><span class="w1">á ki<strong>m</strong></span><span class="w2">금속성</span></em></li><li class="_auto_complete_list_item" style="cursor:pointer;"><em><span class="w1">ác cả<strong>m</strong></span><span class="w2">악감<span class="fra">, </span>반감<span class="fra">, </span>혐오</span></em></li><li class="_auto_complete_list_item" style="cursor:pointer;"><em><span class="w1">ác hiể<strong>m</strong></span><span class="w2">험악한<span class="fra">, </span>악의있는</span></em></li></ul>
										<p class="auto_on_info">현재 자동완성 기능을 사용하고 계십니다.</p>
										<p class="auto_off_info"><span class="auto_info_txt">네이버<strong>검색어 자동완성</strong>을 아시나요?<br>검색어를 한 글자만 입력해도 찾으시려는 단어를 추천해주는 편리한 기능입니다.</span><a href="#" onclick="clickcr(this, 'msh.autoon','','',event);" class="btn_predic _turn_on_auto_complete"><span>자동완성 사용하기</span></a></p>
										<p class="nothing">해당 단어로 추천어가 없습니다.</p>
										<div class="option">
											<a href="http://help.naver.com/ops/step2/faq.nhn?fcatid=184" onclick="clickcr(this, 'msh.autohelp','','',event); return false;" class="popBtn _link_help">도움말</a>
											<span class="bar _help_bar" style="display:inline">|</span>
											<a href="#" onclick="clickcr(this, 'msh.autooff','','',event);" class="_turn_off_auto_complete" style="display: inline;">기능끄기</a>
										</div>
									</div>
									<!-- //자동완성레이어 -->
									<div id="ac_ReviewedWord_layer" class="auto_complete2" style="width: 100%; display: none;">
                                        <ul id="ac_ReviewedWord_list" style="display: block;"><li class="write_lst" order="1" entryid="38665"><a href="#entry/38665" class="write_lk">cinematografar</a></li><li class="write_lst" order="2" entryid="38553"><a href="#entry/38553" class="write_lk">afrechar</a></li><li class="write_lst" order="3" entryid="31995"><a href="#entry/31995" class="write_lk">derrotar</a></li></ul>
                                        <div class="global_option">
                                        	<ul>
                                            	<li>
                                            		<a href="javascript:void(0);" id="ac_ReviewedWord_Del" onclick="clickcr(this,'rct.del','','',event); return false;" style="display: block;">기록삭제</a>
                                            	</li>
                                            	<li>
                                            		<a href="javascript:void(0);" id="ac_ReviewedWord_On" onclick="clickcr(this,'rct.on','','',event);" style="display: none;">내가 찾은 단어 켜기</a>
                                            		<a href="javascript:void(0);" id="ac_ReviewedWord_Off" onclick="clickcr(this,'rct.off','','',event);" style="display: block;">내가 찾은 단어 끄기</a>
                                            	</li>
                                            </ul>
                                            <a href="javascript:void(0);" id="ac_ReviewedWord_Close" class="btn_close" onclick="clickcr(this,'rct.x','','',event); return false;" style="display: block;">닫기</a>
                                        </div>
                                    </div>
								</div>
								<div id="ac_alphabet" class="spa_alphabet" style="left:60px;display:none">
									<div class="spa_alphabet_shadow">
										<div class="spa_alphabet_inner">
											<ul><li></li></ul>
										</div>
									</div>
									<!-- [D] 첫번째 LI의 a가 마우스오버되면 over클래스 추가 부탁드립니다. class="arrow_d over" -->
									<span class="arrow_d _arrow"></span>
								</div>
							</div>
						</div>
						<button onclick="searchSubmit(); clickcr(this, 'msh.search','','',event); return false;" type="button" class="btn_srch">검색</button>

						<div class="device">
							<!-- [D] ru,mn,tr,pt,ua,ge,al 스킨변경시 'enter 클래스 xenter 클래스로 변경' 부탁드립니다.  class="xenter mainBtn"-->
							<button onclick="clickcr(this, 'ime.open','','',event); return false;" id="writerBtn" type="button" class="enter mainBtn">입력기</button>
							<!-- [D] kh,uz 언어스킨변경시 opn_xdic 클래스 '추가'' 부탁드립니다. class="opn_dic opn_xdic" -->
							<a href="#" class="opn_dic">오픈사전<span class="new">new</span></a>
						</div>

					</fieldset>
				</form>
			</div>
		</div>
	</div>
	<!-- //top_search -->
</div>

<!-- For Keyboard Writer End -->
<div class="ly_kbd" style="top:286px; left:276.5px; display:block;" id="writer">
	<ul class="tab_area">
		<li class="frst tc-selected tc-tab"><strong><?= $langValue ?>어 입력기</strong></li>
		<li class="tc-tab"><a href="javascript:void(0);">한국어 입력기</a></li>
	</ul>
	<div class="tb_kbd tc-panel tc-selected">
		<table>
			<caption class="blind"><?= $langValue ?>어 입력기</caption>
			<colgroup>
				<col><col><col><col><col><col><col><col><col><col><col><col><col><col><col><col>
			</colgroup>
			<tbody>
			<tr>
				<!-- [D] 마지막 행일때 nobdr class 추가 / 마지막 열일때 last class 추가 -->
				<td>
					<button type="button" class="_addChar">А</button>
				</td>
				<td>
					<button type="button" class="_addChar">Б</button>
				</td>
				<td>
					<button type="button" class="_addChar">В</button>
				</td>
				<td>
					<button type="button" class="_addChar">Г</button>
				</td>
				<td>
					<button type="button" class="_addChar">Ґ</button>
				</td>
				<td>
					<button type="button" class="_addChar">Д</button>
				</td>
				<td>
					<button type="button" class="_addChar">Е</button>
				</td>
				<td>
					<button type="button" class="_addChar">€</button>
				</td>
				<td>
					<button type="button" class="_addChar">Ж</button>
				</td>
				<td>
					<button type="button" class="_addChar">З</button>
				</td>
				<td>
					<button type="button" class="_addChar">И</button>
				</td>
				<td>
					<button type="button" class="_addChar">І</button>
				</td>
				<td>
					<button type="button" class="_addChar">Ї</button>
				</td>
				<td>
					<button type="button" class="_addChar">Й</button>
				</td>
				<td class="last">
					<button type="button" class="_addChar">К</button>
				</td>
			</tr>
			<tr>
				<td>
					<button type="button" class="_addChar">Л</button>
				</td>
				<td>
					<button type="button" class="_addChar">М</button>
				</td>
				<td>
					<button type="button" class="_addChar">Н</button>
				</td>
				<td>
					<button type="button" class="_addChar">О</button>
				</td>
				<td>
					<button type="button" class="_addChar">П</button>
				</td>
				<td>
					<button type="button" class="_addChar">Р</button>
				</td>
				<td>
					<button type="button" class="_addChar">С</button>
				</td>
				<td>
					<button type="button" class="_addChar">Т</button>
				</td>
				<td>
					<button type="button" class="_addChar">У</button>
				</td>
				<td>
					<button type="button" class="_addChar">Ф</button>
				</td>
				<td>
					<button type="button" class="_addChar">Х</button>
				</td>
				<td>
					<button type="button" class="_addChar">Ц</button>
				</td>
				<td>
					<button type="button" class="_addChar">Ч</button>
				</td>
				<td>
					<button type="button" class="_addChar">Ш</button>
				</td>
				<td class="last">
					<button type="button" class="_addChar">Щ</button>
				</td>
			</tr>
			<tr>
				<td class="nobdr">
					<button type="button" class="_addChar">Ю</button>
				</td>
				<td class="nobdr">
					<button type="button" class="_addChar">Я</button>
				</td>
				<td class="nobdr">
					<button type="button" class="_addChar">Ь</button>
				</td>
				<td class="nobdr"><p>&nbsp;</p></td>
				<td class="nobdr"><p>&nbsp;</p></td>
				<td class="nobdr"><p>&nbsp;</p></td>
				<td class="nobdr"><p>&nbsp;</p></td>
				<td class="nobdr"><p>&nbsp;</p></td>
				<td class="nobdr"><p>&nbsp;</p></td>
				<td class="nobdr"><p>&nbsp;</p></td>
				<td class="nobdr"><p>&nbsp;</p></td>
				<td class="nobdr"><p>&nbsp;</p></td>
				<td class="nobdr"><p>&nbsp;</p></td>
				<td class="nobdr"><p>&nbsp;</p></td>
				<td class="last nobdr"><p>&nbsp;</p></td>
			</tr>
			</tbody>
		</table>
	</div>
	<ul class="lst_info">
		<!-- AU-20120330 한글자 지우기 버튼 class명  "_erase"추가 -->
		<li><a href="javascript:void(0);" class="_erase">한 글자 지우기</a><span class="bar">|</span></li>
		<!-- AU-20120330 모든 글자 지우기 버튼 class명  "_eraseAll"추가 -->
		<li><a href="javascript:void(0);" class="_eraseAll">모두 지우기</a></li>
	</ul>

	<p class="txt_info">마우스로 박스를 <span class="ico_drag"></span>드래그하면 위치를 이동할 수 있습니다.</p>
	<a href="javascript:void(0);" class="btn_clse2 _btnCls"><span class="blind">입력기 레이어 닫기</span></a>
</div>
<!-- For Keyboard Writer End -->
<!-- // PC header
