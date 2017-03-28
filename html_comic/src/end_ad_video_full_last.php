<?php include 'inc/ua.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="<?php echo $uametaValue; ?>" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta name="format-detection" content="telephone=no">
<title><?php echo $pageTitle;?> : 네이버 웹툰</title>
<link rel="stylesheet" type="text/css" href="css/<?php echo $ualinkValue; ?>">

<!-- 마크업확인용 스크립트 -->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="./js/behavior.js"></script>
<!-- // 마크업확인용 스크립트 끝 -->
</head>

<!-- [D] 비디오 확장인 경우 body에 video_full 클래스 추가 -->
<body class="<?php echo $uacssValue; ?> video_full">
<div id="u_skip" class="u_skip">
	<a href="#ct">본문 바로가기</a>
</div>
<!-- ct  -->
<div id="ct">
	<!-- 동영상 광고(모바일 확장) -->
	<div class="ads_sc video">
		<div class="ads_video_area">
			<div class="ads_video_inner">
				<div class="video_btn_area">
					<a href="#" class="btn_replay"><em class="ico_replay"></em><span>다시 보기</span></a>
					<a href="#" class="btn_event2"><em class="ico_event"></em><span>이벤트 참여</span></a>
					<!--<a href="#" class="btn_dnld"><em class="ico_dnld"></em><span>다운로드</span></a>
					<a href="#" class="btn_info"><em class="ico_info"></em><span>더보기</span></a>-->
				</div>
			</div>

			<!-- 확장 버튼 -->
			<div class="full_area">
				<a href="#none" class="btn_clse" target="_blank" title="전체화면 닫기">전체화면 닫기</a>
			</div>
		</div>
	</div>
	<!-- //광고가 있는 경우 -->
</div>
<!-- //ct -->
</body>
</html>