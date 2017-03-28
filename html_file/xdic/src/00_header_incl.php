<!-- header -->
<!--[D] 스크롤이 Ngnb의 높이이상 될때 is_fixed 추가, 높이 미만일때 is_fixed 삭제, is_fixed일때 body에 padding-top:42px을 해주세요.
        iOS에서 폼요소 포커싱되었을때 상단고정이 되는데 스크롤시에 깨짐 현상이 일어납니다. 다른 영역터치시에는 포커싱을 없애주셔야 합니다.
 -->
<header id="header" class="header">
	<!-- gnb -->
	<div class="Ngnb is_scale">
		<span class="Ngnb_logo"><a href="#" class="Nlogo_link"><span class="Nicon_logo">NAVER</span></a></span>
		<div class="Ngnb_service">
			<h1 class="Nservice_item"><a href="#"><span class="Nicon_service"><?= $langValue ?>어사전</span></a></h1>
		</div>
		<div class="Ngnb_tool">
			<!--  button 태그 / a 태그 모두 사용할 수 있음 -->
			<button type="button" class="Ntool_button" data-event="click|drawer(.Ndrawer),click|dimmed(.Ndimmed)"><span class="Nicon_drawer">확장영역 열기</span></button>
		</div>
	</div>
	<!-- //gnb -->

	<!-- search -->
	<div class="Nsearch">
		<div class="Nsearch_inner">
			<div class="Nsearch_box">
				<div class="Nsearch_box_inner">
					<span class="Nbox_text"><input type="text" value="" title="검색어 입력" class="Nbox_input_text"></span>
                <span class="Nbox_tool">
                    <button type="button" class="Nbox_button Nbox_delete"><span class="Nicon_delete">검색어 삭제</span></button>
                </span>
				</div>
			</div>
			<div class="Nsearch_tool">
				<button type="submit" class="Ntool_search"><span class="Nicon_search">검색</span></button>
				<!--[D] 필기입력기 오픈시 Nicon_input에 is_active 추가 : <span class="Nicon_input is_active">필기 입력기</span> -->
				<button type="submit" class="Ntool_search Nicon_input"><span class="Nicon_input">필기 입력기</span></button>
			</div>
		</div>
	</div>
	<!-- //search -->

	<!-- tooltip layer -->
	<div class="Ngnb_tooltip">
		<strong class="Ntit">TIP</strong>
		<span class="Ntip_txt">사전 홈으로 이동하려면 <span class="green">메뉴</span>를 선택하세요.</span>
		<button class="Nbtn_close"><span class="Nicon_close">툴팁 닫기</span></a>
	</div>

	<!-- 입력기, 내가 찾은 단어 -->
	<?php include '00_lnb.php'; ?>
	<!-- //입력기, 내가 찾은 단어 -->

</header>
<!-- //header -->
