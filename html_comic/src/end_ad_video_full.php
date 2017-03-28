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
<link rel="stylesheet" type="text/css" href="css/mediaScreen.css">

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
				<!-- [D] 브라우저가 가로모드인 경우 해당 브라우저 가로모드의 높이 값을 height에 대입한다. -->
				<video id="video" class="ads_video" width="100%" height="100%" poster="im/ad_video.jpg">
					<source src="videos/mikethefrog.mp4" type="video/mp4">
					<source src="videos/mikethefrog.webm" type="video/webm">
					<source src="videos/mikethefrog.ogv" type="video/ogv">
					<p class="no_support"><a href="#"><img src="im/ad_video.jpg" width="100%" height="100%" alt="AD"></a></p>
				</video>

				<div class="player_func_area">
					<!-- 재생시간 -->
					<span class="play_time">
						<em class="time_current">00:12</em>
						<span class="time_separator">|</span>
						<em class="time_duration">03:45</em>
					</span>
					<!-- //재생시간 -->

					<!-- 프로그레스 바 -->
					<div class="progress_bar_area">
						<div class="progress_play" style="left:0;width:18.3%"></div>
						<div class="progress_load" style="left:0;width:46.4%"></div>
					</div>
					<!-- //프로그레스 바 -->

					<!-- 버튼영역 -->
					<div class="progress_controls">
						<!-- 재생/일시정지 버튼 -->
						<div class="play_area">
							<a href="#none" class="btn_play" style="display:none" title="재생"><span class="ico_play">재생</span></a>
							<a href="#none" class="btn_pause" title="일시정지"><span class="ico_pause">일시정지</span></a>
						</div>
						<!-- //재생/일시정지 버튼 -->

						<!-- 볼륨 버튼 -->
						<div class="volume_area">
							<a href="#none" class="btn_volume" style="display:none" title="Sound on"><span class="ico_volume">Sound on</span></a>
							<!-- [D] 소리 끌 경우 off 클래스 추가 -->
							<a href="#none" class="btn_volume" title="Sound off"><span class="ico_volume off">Sound off</span></a>
						</div>
						<!-- //볼륨 버튼 -->
					</div>
					<!-- //버튼영역 -->
				</div>

				<a href="#none" class="btn_mov_play" style="display:none">재생</a>

				<span class="video_mask" style="display:none"></span>
				<span class="video_shadow" style="display:block"></span>
				<span class="video_outline" style="display:none"></span>
			</div>

			<!-- 확장 버튼 -->
			<div class="full_area">
				<a href="#none" class="btn_clse" target="_balnk" title="전체화면 닫기">전체화면 닫기</a>
			</div>
			<a href="#" class="btn_event">이벤트 참여</a>
		</div>
	</div>
	<!-- //광고가 있는 경우 -->
</div>
<!-- //ct -->
</body>
</html>