<?php include 'inc/ua.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="<?php echo $uametaValue; ?>">
<meta name="format-detection" content="telephone=no">
<title>이미지 뷰어 : 네이버 웹툰</title>
<link rel="stylesheet" type="text/css" href="css/<?php echo $ualinkValue; ?>">
<?php if($ualinkDefaultValue) echo '<link rel="stylesheet" type="text/css" href="css/'.$ualinkDefaultValue.'">';?>
<!-- 마크업확인용 진도 스크립트 -->
<script type="text/javascript" src="http://jindo.dev.naver.com/docs/jindo-mobile/archive/latest/asset/jindo/latest/jindo.all.ns.js" charset="utf-8"></script>
<script type="text/javascript" src="http://jindo.dev.naver.com/docs/jindo-mobile/archive/latest/source/jindo.m.js" charset="utf-8"></script>
<script type="text/javascript" src="http://jindo.dev.naver.com/docs/jindo-mobile/archive/latest/source/jindo.m.Component.js" charset="utf-8"></script>
<script type="text/javascript" src="http://jindo.dev.naver.com/docs/jindo-mobile/archive/latest/source/jindo.m.UIComponent.js" charset="utf-8"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/behavior.js"></script>
<script type="text/javascript" charset="utf-8" src="js/jindo.desktop.min.js"></script>
<script type="text/javascript" charset="utf-8" src="js/jindo_mobile_component.js"></script>
<!-- // 마크업확인용 진도 스크립트 끝 -->
</head>

<!-- ct  -->
<div id="ct">
	<div class="viewer_wrap">
		<div class="tit_wrap">
			<span class="pg_info">1/10</span>
			<a href="#" class="btn_clse"><span>이미지 뷰어 닫기</span></a>
		</div>

		<!-- 이미지 영역 -->
		<div class="pht_wrap">
			<div id="mflick" class="flick-view" style="height:320px">
				<!-- [D] 플리킹 영역 높이가 가변인 경우에 대응해 height 계산해서 넣어주세요. -->
				<div class="flick-container">
					<!-- [D]첫번째 컨텐츠 -->
					<div class="flick-ct">
						<img src="http://dev.ui.naver.com/tmp/?480x320_none_y_B4A7D6_50" width="100%" alt="[이미지명과 같게 넣어주세요]">
					</div>
					<div class="flick-ct">
						<img src="http://dev.ui.naver.com/tmp/?480x320_none_y_B4A7D6_50" width="100%" alt="[이미지명과 같게 넣어주세요]">
					</div>
					<div class="flick-ct">
						<img src="http://dev.ui.naver.com/tmp/?480x320_none_y_B4A7D6_50" width="100%" alt="[이미지명과 같게 넣어주세요]">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
var oSlideFlicking = new jindo.m.SlideFlicking('mflick',{
    bHorizontal : true,     //가로형 여부
    sClassPrefix : 'flick-', //Class의 prefix
    bUseCircular : false,  //순환여부
    nDefaultIndex: 2        //로드시에 화면에 보이는 콘텐츠의 인덱스
}).attach({
    'flicking' : function(oCustomEvt){
        /* 현재 화면에 콘텐츠가 바뀔 경우 발생 */
    }
});
</script>
</body>
</html>
