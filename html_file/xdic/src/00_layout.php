<?php include '00_ua_incl.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="<?php echo $uametaValue; ?>">
<!-- [D] 별도의 title UX 가이드가 없는 경우, 다음과 같이 title을 작성해주세요.
     * 메뉴: 현재 페이지의 제목
     * 브랜드명 서비스: 서비스명 -->
<title><?php echo $pageTitle; ?></title>
<link rel="stylesheet" type="text/css" href="css/common.css">
<link rel="stylesheet" type="text/css" href="css/Ngnb.css">
<!-- [D] 각언어별 css -->
<link rel="stylesheet" type="text/css" href="css/<?= $langId ?>.css">
</head>
<!-- [M] 모바일경우 클래스 없음 , 작은창 : mini, 일반 pc : pc -->
<body class="<?php echo $layoutType; ?>">
<a href="#container" class="skip_to_content" tabindex="2">본문 바로가기</a>
<?php
	if($layoutType=="pc"){ //pc header
		include '00_header_incl_pc.php';
	}else if($layoutType=="ip"){ //모바일 검색키보드
		include '00_header_incl.php';
		include '00_lnb_input.php';
	}else{ //모바일 header
		include '00_header_incl.php';
		include '00_lnb.php';
	}
?>
<hr>
<!-- content -->
<div id="container">
	<?php include '00_content.php'; ?>
	<!-- [D] 오픈사전 참여배너 확대 추가
			각 사전에 맞는 문구로 대체하여 생성합니다.
			pc일때는 pc 추가
	-->
	<div class="banner_opendic">
		<a href='#' class='inner'>
			<?
			$bann_lang = array("th","tr","id","ru","ua","vn","hi","nl","uz");
			if($layoutType=="pc"){ ?>
				<? if(in_array($langId, $bann_lang)) { ?>
					<? if($langId == "th") { ?>
						<!--[D] pc버전일때는 각 사전별 이미지와 대체텍스트로 대체 합니다. -->
						<img src='img/<?=$langId ?>/banner_opendic1.jpg' alt='전세계 이용자들이 만들어가는 글로벌 오픈사전 부라파대학 한국어학과가 함께 합니다.'>
						<!-- 랜덤 노출
						<img src='img/<?=$langId ?>/banner_opendic2.jpg' alt='전세계 이용자들이 만들어가는 글로벌 오픈사전 송클라대학 한국어학과가 함께 합니다.'>
						-->
					<? } else { ?>
						<!--[D] pc버전일때는 각 사전별 이미지와 대체텍스트로 대체 합니다. -->
						<img src='img/<?=$langId ?>/banner_opendic.jpg' alt='전세계 이용자들이 만들어가는 글로벌 오픈사전 부라파대학 한국어학과가 함께 합니다.'>
					<? } ?>
				<? } else { ?>
					<!--[D] pc버전 기본이미지 -->
					<img src='img/common/banner_opendic.jpg' alt='전세계 이용자들이 만들어가는 글로벌 오픈사전 단어 등록하고 단체 참여해 보세요.'>
				<? } ?>
					<!-- 언어스킨 변경시 이미지 파일명 뒤에 "_langskin" 으로 적용, 태국어는 1, 2 숫자 추가, alt 속성값은 언어스킨 내용에 맞게 넣어주세요.
					<img src='img/<?=$langId ?>/banner_opendic_langskin.jpg' alt='전세계 이용자들이 만들어가는 글로벌 오픈사전 단어 등록하고 단체 참여해 보세요.'>
					-->
			<? } else { ?>
				<!--[D] 모바일버전일때는 아래의 내용으로 대체 합니다. -->
				<span class='cont_wrap'>
					<span class='tit'>전세계 이용자들이 만들어가는<br><em>글로벌 오픈사전</em></span>
					<span class='dsc'>단어 등록하고 단체 참여해 보세요</span>
					<? if(in_array($langId,$bann_lang)){ ?>
						<img src='img/<?=$langId ?>/openbanner_logo.png' alt='오픈사전' class='logo'>
					<? } else { ?>
						<img src='img/common/openbanner_logo.png' alt='오픈사전' class='logo'>
					<? } ?>
				</span>
			<? } ?>
		</a>
		<p class="btn_openbanner">
			<a href="#" class="btn_view">참여단체 보기</a>
			<a href="#" class="apply_view">참여신청 하기</a>
		</p>
	</div>
</div>
<!-- //content -->

<!--[D] 레이어 영역-->
<?php if($layer) { include $layer; } ?>

<hr>
<!--[D] 풋터영역 -->
<?php
	if ($layoutType=="ar"){ //아랍 footer
		include '00_footer_incl_ar.php';
	}else if($layoutType=="pc"){ //pc footer
		include '00_footer_incl_pc.php';
	}else{ //모바일 footer
		include '00_footer_incl.php';
	}
?>

<!-- [D] 마크업 확인용. 개발시 삭제 -->
<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
<!-- 소셜플러그인 스크립트 -->
<script type="text/javascript">
	window.onload = function() {
		window.__splugin = SocialPlugIn_Core({
			// nEvent Key
			"evKey"       : "news",
			// 서비스명
			"serviceName" : "뉴스",
			// 출처명
			"sourceName" : "아이유",
			// 버튼 클릭후 호출되는 콜백함수
			"onClick"     : function(button) {
				// button = 버튼명(band:밴드보내기)
			},
			// 공유하기 레이어 노출 후 호출되는 콜백함수
			"onShow"      : function() {

			},
			// 공유하기 레이어 닫기 후 호출되는 콜백함수
			"onHide"      : function() {
			}
		});
	}

	function onSubscribe(elTarget) {
		return {
			popupType       : "B",
			callbackUrl     : "/popupSample_js.html",
			targetUrl       : "/subscribe/applyFeedRelation.nhn",
			serviceId       : "navercast",
			feedGroupId     : "004",
			feedGroupName   : "오늘의 미술",
			feedId          : ["001","002","003","004","005","006","007","008"],
			feedName        : ["서양미술의 걸작","테마로 보는 미술"],
			selected        : ["Y","N","N","N","N","N","N","N"]
		};
	}
</script>
<script id="naver-splugin-sdk" type="text/javascript" charset="utf-8" src="http://spi.naver.com/js/release/ko_KR/splugin.m.js?20150803"></script>
<!-- [D] 언어별 마크업 셀렉트박스 -->
<?php include '00_language.php'; ?>
<script type="text/javascript" src="js/lang.js"></script>
<script type="text/javascript" src="js/ui.js"></script>

<!-- 레이아웃 변경 버튼 -->
<style type="text/css">
.layout_bt_wrap,
.lang_change{position:fixed;right:0;bottom:30px;z-index:9999;}
.lang_change{bottom: 80px}
.layout_bt_wrap a,
.lang_change a{display:inline-block;padding:10px 2px;background:#ddd;color:#000;}
</style>
<div class="layout_bt_wrap">
	<a href="<? echo $_SERVER['PHP_SELF'] ?>" class="layoutType">초기화면</a>
	<a href="#" class="type_m">모바일</a>
	<a href="#" class="type_pc">피씨</a>
	<a href="#" class="type_ar">아랍어</a>
	<a href="#" class="type_t">태블릿</a>
</div>
<div class="lang_change">
	<a href="#">언어스킨</a>
</div>
<script type="text/javascript" async ntemplate src="http://egjs.navercorp.com/ntemplate/dist/common/script/common.js"></script>
<script type="text/javascript" src="http://egjs.navercorp.com/ntemplate/bower_components/egscroll/build/iscroll-lite.js"></script>
<script type="text/javascript" src="http://view.ui.naver.com/dict/m.common/feature_onenaver/js/common_menu_template_v2.js"></script>
<script type="text/javascript">
	var sideTemplate = new SideTemplate("xdic");
	sideTemplate.init();
</script>
<!-- [D] 마크업 확인용. 개발시 삭제 -->
</body>
</html>
