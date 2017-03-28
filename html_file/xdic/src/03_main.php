<div class="info_box" style="display:block">
	<h3 class="info_tit">내가 찾은 단어</h3>
	<ul class="myw_lst">
	<li class="myw_li"><a href="#" class="myw_txt">flamenco</a><a href="#" class="ico_x2"><span class="hc">내가 찾은 단어 삭제</span></a></li>
    <!-- [D] 짝수번째 myw_li 에만 even 클래스 추가 <li class="myw_li even">-->
	<li class="myw_li even"><a href="#" class="myw_txt">Don Quijottttttttytttttttttttttttttttttttttttttttttttttttttttton Quijottttttttyttttttttttttttttttttttttttttttttttttttttttttsddddddddddddt</a><a href="#" class="ico_x2"><span class="hc">내가 찾은 단어 삭제</span></a></li>
	<li class="myw_li"><a href="#" class="myw_txt">Chupar</a><a href="#" class="ico_x2"><span class="hc">내가 찾은 단어 삭제</span></a></li>
    <!-- [D] 짝수번째 myw_li 에만 even 클래스 추가 <li class="myw_li even">-->
	<li class="myw_li even"><a href="#" class="myw_txt">paella</a><a href="#" class="ico_x2"><span class="hc">내가 찾은 단어 삭제</span></a></li>
	<li class="myw_li"><a href="#" class="myw_txt">sol</a><a href="#" class="ico_x2"><span class="hc">내가 찾은 단어 삭제</span></a></li>
	</ul>
    <a href="#" class="btn_all_del">
    	<span class="ico_x"></span>
    	전체삭제
    </a>
</div>
<div class="info_box">
	<h3 class="info_tit">오늘의 단어</h3>
	<!-- [D] 발음듣기 버튼 로딩시 load클래스 추가,발음듣기 활성화시 on클래스 추가 -->
	<ul class="td_lst">
	<li class="td_li frst_li">
		<h4><a href="#" class="td_h">говори́ть</a><a href="#" class="ico_pron"><span class="hc">발음듣기</span></a></h4>
		<p class="td_txt">친한, 친밀한, 벗, 친구, 통나무</p>
	</li>
	<li class="td_li">
		<h4><a href="#" class="td_h">Fásol</a><a href="#" class="ico_pron load"><span class="hc">발음듣기</span></a></h4>
		<p class="td_txt">강낭콩</p>
	</li>
	<li class="td_li last_li">
		<h4><a href="#" class="td_h">говори́ть</a><a href="#" class="ico_pron on"><span class="hc">발음듣기</span></a></h4>
		<p class="td_txt">섬기다, 봉사하다, 예배하다, 사용하다, 이용하다, 섬기다, 봉사하다, 예배하다, 사용하다, 이용하다, 섬기다, 봉사하다, 예배하다, 사용하다, 이용하다, 섬기다, 봉사하다, 예배하다, 사용하다, 이용하다, 섬기다, 봉사하다, 예배하다, 사용하다, 이용하다</p>
	</li>
	</ul>
</div>

<?php
	$usen_lang = array("id","ru","vn");
	$usen_lang2 = array("ru","th","hi");
	if (in_array($langId,$usen_lang)){
?>
<!--[D] 오픈사전 배너
		각 사전별 문구를 대체하여 생성.
		조건우선순위로 하나만 노출되는데 러시아는 두개의 배너 모두 사용합니다.
-->
<div class="usen_banner">
    <a href="#">
	    <span class="cont_wrap">
            <span class="txt_area">이용자들이 만들어가는 오픈사전<strong> UPH와 함께 합니다.</strong></span>
            <span class="img_area"><span class="thumb"></span></span>
		</span>
    </a>
</div>
<?php }else if (in_array($langId,$usen_lang2)){ ?>
<!--[D]오픈사전 배너 -->
<div class="open_banner">
	<a class="lnk_box" href="http://tvcast.naver.com/v/828519/list/72005">
		<span class="banner_inner">
			<span class="visual img_d">
				<!-- mobile -->
				<img src="img/th/mobile_d_04.png" alt="오픈사전 배너 이미지" class="m_img">
				<!-- pc -->
				<img src="img/th/pc_b_01.jpg" alt="오픈사전 배너 이미지" class="pc_img">
			</span>
			<p class="txt_area">
				<span class="txt_tit">NAVER Open Dictionary</span>
				<span class="txt_dt">그 남자 그 여자 이야기</span>
				<span class="txt_dd"><em class="txt_light">[만찢남]</em><span class="txt_p">เจ้าชายในเทพนิยาย</span></span>
			</p>
		</span>
	</a>
</div>
<?php }else{ ?>
<!--[D] 기본베너-->
<div class="main_dn opendic">
	<a href="javascript:void(0)" class="main_np">
		<span class="cont_wrap">
            <span class="img_area"><span class="thumb opendict"></span></span>
            <span class="txt_area"><span class="colb2">오픈사전</span><br>궁금한 단어 질문, 새로운 단어 등록</span>
		</span>
	</a>
</div>
<? } ?>

<div class="info_box">
	<h3 class="info_tit">사전 이용 Tip</h3>
	<!-- [D] 발음듣기 버튼 로딩시 load클래스 추가,발음듣기 활성화시 on클래스 추가 -->
	<ul class="td_lst td_lst_v2">
	<li class="td_li frst_li">
		<a href="#" class="dic_lk bg_ime">
			<p class="td_txt"><span class="img"></span><?= $langValue ?>어 <em class="colb2">편리하게 입력</em>하기<span class="ico_arr"></span></p>
		</a>
	</li>
	<li class="td_li">
		<a href="#" class="dic_lk bg_recent">
			<p class="td_txt"><span class="img"></span><?= $langValue ?>어 <em class="colb2">내가 찾은 단어</em> 보기<span class="ico_arr"></span></p>
		</a>
	</li>
	</ul>
</div>

<?php if($langId == "vn"){ ?>
<!-- [D] Type1 : Korean banner -->
<div class="banner_opendic_vn">
	<a href="#" class="inner">
		<span class="cont_wrap">
			<span class="ico"></span>
			<p>
				<strong>베트남인을 위한 한국어사전 오픈</strong><br>
				<span class="txt">최고 품질의 원어민 발음듣기, <br>활용형정보를 제공합니다.</span>
			</p>
		</span>
	</a>	
</div>
<!-- [D] Type2 : s2 클래스로 배경색상 변경 -->
<div class="banner_opendic_vn s2">
	<a href="#" class="inner">
		<span class="cont_wrap">
			<span class="ico"></span>
			<!--[D] 베트남어일때 lang값 속성 추가 -->
			<p lang="vn">
				<strong>Ra mắt từ điển tiếng Hàn dành <br>cho người Việt Nam</strong><br>
				<span class="txt">Cung cấp thông tin hữu ích và nghe phát âm <br>của người bản ngữ với chất lượng tốt nhất.</span>
			</p>
		</span>
	</a>
</div>
<?php } ?>

<div class="main_dn">
	<a href="#" class="main_np">
		<span class="cont_wrap">
            <span class="img_area"><span class="thumb th_phrase"></span></span>
            <span class="txt_area">말이 통하는 <?= $langValue ?>어 회화<br>네이버 <span class="colb2">글로벌회화</span></span>
		</span>
	</a>
</div>
<div class="main_dn">
	<a href="#" class="main_np">
		<span class="cont_wrap">
            <span class="img_area"><span class="thumb th_dicapp"></span></span>
            <span class="txt_area">기다리던 앱이 드디어 나왔다! <br><b>네이버사전</b> <span class="colb2">앱 출시</span></span>
		</span>
	</a>
</div>
<div class="main_dn">
	<a href="#" class="main_np">
		<span class="cont_wrap">
            <span class="img_area"><span class="thumb th_multitrans"></span></span>
            <span class="txt_area"><span class="colb2">다국어 번역문 참여하기</span><br><b>영어 예문을 인도네시아어로 번역해 보세요.</b></span>
		</span>
	</a>
</div>
