<?php include '../inc/ua.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="<?php echo $uametaValue; ?>">
<meta name="format-detection" content="telephone=no">
<title>네이버 웹툰(컷뷰) - 기본모두 노출화면</title>
<link rel="stylesheet" type="text/css" href="../css/<?php echo $ualinkValue; ?>">
<?php if($ualinkDefaultValue) echo '<link rel="stylesheet" type="text/css" href="../css/'.$ualinkDefaultValue.'">';?>
<link rel="stylesheet" type="text/css" href="../css/viewer.css">
<link type="text/css" rel="stylesheet" href="http://comic.like.naver.com/static20160428193013/css/list/mobile/likeit.css" charset="utf-8">
<!--<link type="text/css" rel="stylesheet" href="http://view.ui.naver.com/common/m.likeIt/master/css/likeItList_COMIC.css" charset="utf-8">-->
<link type="text/css" rel="stylesheet" href="../css/likeItList_COMIC.css" charset="utf-8">
<link id="naver-splugin-css" rel="stylesheet" type="text/css" href="http://dev.spi.naver.com/css/20140918/spi_standard_m_20140918.css">
<!-- 마크업확인용 진도 스크립트 -->
<script type="text/javascript" src="http://jindo.dev.naver.com/docs/jindo-mobile/archive/latest/demo/asset/jindo.js" charset="utf-8"></script>
<script type="text/javascript" src="http://jindo.dev.naver.com/docs/jindo-mobile/archive/latest/src/jindo.m.js" charset="utf-8"></script>
<script type="text/javascript" src="http://jindo.dev.naver.com/docs/jindo-mobile/archive/latest/src/jindo.m.Component.js" charset="utf-8"></script>
<script type="text/javascript" src="http://jindo.dev.naver.com/docs/jindo-mobile/archive/latest/src/jindo.m.UIComponent.js" charset="utf-8"></script>

<script type="text/javascript" charset="utf-8" src="../js/jindo.desktop.min.js"></script>
<script type="text/javascript" charset="utf-8" src="../js/jindo_mobile_component.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="../js/common.js"></script>
<!-- // 마크업확인용 진도 스크립트 끝 -->
<!-- 마크업 확인용 소셜 플러그인 -->
<script id="naver-splugin-sdk" type="text/javascript" charset="utf-8" src="http://dev.spi.naver.com/js/release/ko_KR/splugin.m.js?20150312"></script>
<script type="text/javascript">
(function(){
    var id = "naver-splugin-sdk", t = new Date(), yyyy = t.getFullYear(), mm = t.getMonth() + 1, dd = t.getDate();
    var s = document.createElement("script"); s.id = id; s.type = "text/javascript", s.charset = "utf-8", s.async = false;
    s.src = ("/js/release/ko_KR/splugin.m.js?" + yyyy + (mm < 10 ? '0' + mm : mm) + (dd < 10 ? '0' + dd : dd));
    var d = document.getElementsByTagName('head')[0]; d.appendChild(s, d);
})();

window.onload = function() {
    window.__splugin = SocialPlugIn_Core({
        // nEvent Key
        "evKey"       : "starcast",
        // 서비스명
        "serviceName" : "STARCAST",
        // 출처명
        "sourceName" : "아이유",
        // 딤드레이어 타입(default,fixed,custom)
        "dimmed"      : "fixed",
        // 버튼 클릭후 호출되는 콜백함수
        "onClick"     : function(button) {
            // button = 버튼명(band:밴드보내기)
        },
        // 공유하기 레이어 노출 후 호출되는 콜백함수
        "onShow"      : function() {
        },
        // 공유하기 레이어 닫기 후 호출되는 콜백함수
        "onHide"      : function() {
        },
        // window.resize 이벤트를 사용하지 않을때 resize 후 호출되는 콜백 함수
        "onResize"    : function(event) {
        },
        // window.onorientationchange 이벤트를 사용하지 않을때 가로/세로 전환 후 호출되는 콜백 함수
        "onRotate"    : function(event) {
        }
    });
}
</script>
<!-- //마크업 확인용 소셜 플러그인 -->
</head>

<body class="<?php echo $uacssValue; ?>">
    <div id="u_skip" class="u_skip">
        <a href="#ct">본문 바로가기</a>
    </div>

    <div class="viewer cuttoon">
        <header class="viewer_gnb">
            <h1 class="tit">새끼 낙타를 죽이다 새끼 낙타를 죽이다 새끼 낙타를 죽이다 새끼 낙타를 죽이다</h1>
             <a href="#" class="btn_prev"><span>이전</span></a>
        </header>

        <!-- ct -->
        <div id="ct">
            <!-- [D] 색상 정보 값을 style에 입력(화이트 버전(디폴트):#fff,블랙버전:#000) -->
            <div class="cut_viewer_wrap" style="background-color:#fff">
                <div class="viewer_gnb">
                     <h1 class="tit">새끼 낙타를 죽이다 새끼 낙타를 죽이다 새끼 낙타를 죽이다 새끼 낙타를 죽이다</h1>
                     <a href="#" class="btn_prev"><span>이전</span></a>
                 </div>

                <div class="cut_flick_wrap">
                    <!-- [D] 플리킹 영역 높이가 가변인 경우에 대응해 기기별 해상도 높이를 height에 넣어주세요. -->
                    <div id="mflick" class="flick-view" style="height:460px">
                        <div class="flick-container">
                            <div class="flick-ct">
                                <div class="cut_img">
                                    <img src="../im/@tmp/@thmb_690x1180.png" width="100%" alt="[이미지명과 같게 넣어주세요]">
                                </div>
                            </div>
                            <div class="flick-ct">
                                <div class="cut_img">
                                    <img src="../im/@tmp/@thmb_640x962.jpg" width="100%" alt="[이미지명과 같게 넣어주세요]">
                                </div>
                            </div>
                            <div class="flick-ct">
                                <div class="cut_img">
                                    <img src="../im/@temp.jpg" width="100%" alt="[이미지명과 같게 넣어주세요]">
                                </div>
                            </div>
                            <div class="flick-ct">
                                <div class="cut_img">
                                    <img src="../im/@tmp/@thmb_690x490.png" width="100%" alt="[이미지명과 같게 넣어주세요]">
                                </div>
                            </div>
                            <div class="flick-ct">
                                <div class="cut_img">
                                    <img src="http://dev.ui.naver.com/tmp/?345x320_none_y_B4A7D6_50" width="100%" alt="[이미지명과 같게 넣어주세요]">
                                </div>
                            </div>
                            <div class="flick-ct">
                                <div class="cut_viewer_last">
                                    <!-- 별점 주기 -->
                                    <a name="starAnchor"></a>
                                    <div class="star" id="starDiv">
                                        <h2 class="tit"><span class="u_vc">별점</span></h2>

                                        <div class="pnt"><span class="u_grp"><span id="starScore" class="u_grp_v" style="width:98.00000190734863%;"></span></span> <span id="avgStarscore"><em class="score">9.8</em></span> <span class="tjoin" id="starscoreCount"><em>7,753</em>명 참여</span>
                                            <!-- [D] 별점주기 선택 한 경우 up 클래스 및 문구 변경(별점닫기) -->
                                            <a href="#"><span id="starToggleButton" class="dn">별점주기</span></a>
                                            <span style="display:none">참여완료</span>
                                        </div>

                                        <!-- [D] 화면 안 보이게 할 경우 hide 클래스 추가 -->
                                        <div class="grade hide" id="grade">
                                            <div class="u_grade">
                                                <div class="u_grade_bw">
                                                    <!-- [D] 선택 된 점수에는 'u_grade_bon' class를 추가해주세요. -->
                                                    <input type="hidden" id="currentStarcore" value="10">
                                                    <a href="#" class="u_grade_b u_grade_bon" id="u_grade_1">1점</a> <a href="#" class="u_grade_b2 u_grade_bon" id="u_grade_2">2점</a> <a href="#" class="u_grade_b u_grade_bon" id="u_grade_3">3점</a> <a href="javascript:starAct.star_clk('4');" class="u_grade_b2 u_grade_bon" id="u_grade_4">4점</a> <a href="javascript:starAct.star_clk('5');" class="u_grade_b u_grade_bon" id="u_grade_5">5점</a> <a href="javascript:starAct.star_clk('6');" class="u_grade_b2 u_grade_bon" id="u_grade_6">6점</a> <a href="javascript:starAct.star_clk('7');" class="u_grade_b u_grade_bon" id="u_grade_7">7점</a> <a href="javascript:starAct.star_clk('8');" class="u_grade_b2 u_grade_bon" id="u_grade_8">8점</a> <a href="javascript:starAct.star_clk('9');" class="u_grade_b u_grade_bon" id="u_grade_9">9점</a> <a href="javascript:starAct.star_clk('10');" class="u_grade_b2 u_grade_bon" id="u_grade_10">10점</a> <span class="u_grade_n"><a id="viewCurrentStarcore">10</a><span class="u_hc">점</span></span> </div>
                                                <p class="u_grade_dsc">별을 클릭해주세요.</p>
                                                <a href="#" title="1점 감산" class="u_grade_m">-</a> <a href="#" title="1점 가산" class="u_grade_p">+</a>
                                            </div>
                                            <a class="bt5" href="#" id="bottomStarScoreSubmitButton">확인</a>
                                        </div>
                                    </div>
                                    <!-- //별점 주기 -->
                                    <!-- 작가의 말 -->
                                    <div class="wr">
                                        <h2 class="tit"><span>조석</span>작가의 말</h2>
                                        <p class="dsc">다리는 맛있더 다리는 맛있어<br>인간적으로 이 웹툰엔 별점테러하지 맙시다.</p>
                                    </div>
                                    <!-- //작가의 말 -->
                                    <!-- 애드포스트 -->
                                    <div id="adPostArea" class="end_pl">
                                        <h3 class="pl_h">
                                            <span class="u_hc">파워링크</span>
                                            <em class="ads">Ads by NAVER</em>
                                        </h3>
                                        <ul>
                                        <li class="lk">
                                            <div class="lk_w">
                                                <span class="tit"><a href="#">AK몰 모바일 세인트스코트</a>
                                                    <em class="mb">모바일 지원</em>
                                                </span>
                                                <span class="cnt">AK백화점을 모바일에서 터치하다, S/S 세이트스코트가</span>
                                                <p class="lnk">
                                                    <a href="tel:01000000000" class="lnk_call"><span class="ic_tel">010-4181-3862</span></a>
                                                    <a href="#" class="lnk_hp">http://m.akmall.com</a>
                                                </p>
                                            </div>
                                        </li>

                                        <!-- 레이어 덮이는 경우 -->
                                        <!-- [D] a링크 선택한 경우 li요소에 class="on" 추가 -->
                                        <li class="lk on">
                                            <div class="lk_w">
                                                <span class="tit"><a href="#">중국무역 원가공개 고차이나로</a>
                                                    <em class="mge">네이버 마일리지 가맹점</em>
                                                </span>
                                                <span class="cnt">중국무역, 수입대행, 원가공개, 현지지사, 시장조사, 조사단운영, 오픈마켓상품.</span>
                                                <p class="lnk">
                                                    <a href="tel:01000000000" class="lnk_call"><span class="ic_tel">010-4181-3862</span></a>
                                                    <a href="#" class="lnk_hp">http://www.gochinaro.com</a>
                                                </p>
                                            </div>
                                            <p class="ly_lnk"><a href="#none" class="lnk_call">전화걸기</a><a href="http://www.gochinaro.com" class="lnk_page">홈페이지</a></p>
                                            <a href="#" class="btn_clse"><span>창 닫기</span></a>
                                        </li>
                                        </ul>
                                    </div>
                                    <!-- //애드포스트 -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="viewer_btns">
                    <!-- [D]좋아요 모듈 연동 -->
                    <?php $pageType='cut'; include '../inc/likeit.php'; ?>
                    <!-- //[D]좋아요 모듈 연동 -->
                    <!-- 댓글 -->
                    <div class="cmnt_wrap">
                        <a href="#none"><span class="u_vc">댓글</span>97465</a>
                    </div>
                    <!-- //댓글 -->
                    <!-- 페이징 -->
                    <div class="paging_wrap">
                        <!-- [D] 비 활성화된 경우 A링크를 span 요소로 변경 -->
                        <!--<a href="#none" class="pg_prev"><span class="u_vc">이전</span></a>-->
                        <span class="pg_prev"><span class="u_vc">이전</span></span>
                        <em class="paging_num">9999</em>
                        <a href="#none" class="pg_next"><span class="u_vc">다음</span></a>
                    </div>
                    <!-- //페이징 -->
                </div>
            </div>
        </div>
        <!-- //ct -->
        <script type="text/javascript">
            var oSlideFlicking = new jindo.m.SlideFlicking('mflick',{
                bHorizontal : true,     //가로형 여부
                sClassPrefix : 'flick-', //Class의 prefix
                bUseCircular : false,  //순환여부
                nDefaultIndex: 5       //로드시에 화면에 보이는 콘텐츠의 인덱스
            }).attach({
                        'flicking' : function(oCustomEvt){
                            /* 현재 화면에 콘텐츠가 바뀔 경우 발생 */
                        }
                    });

            var oScroll = new jindo.m.Scroll("view", {
                bUseHScroll : false,
                bUseVScroll : true,
                bUseMomentum : false,
                nHeight : 450
            });
        </script>
        <!-- 마크업 확인용 jindo 스크립트 -->
        <script type="text/javascript" src="http://jindo.dev.naver.com/docs/jindo-mobile/archive/latest/src/jindo.m.Touch.js" charset="uft-8"></script>
        <script type="text/javascript" src="http://jindo.dev.naver.com/docs/jindo-mobile/archive/latest/src/jindo.m.Effect.js" charset="uft-8"></script>
        <script type="text/javascript" src="http://jindo.dev.naver.com/docs/jindo-mobile/archive/latest/src/jindo.m.Scroll.js" charset="uft-8"></script>
        <!-- //마크업 확인용 jindo 스크립트 -->
    </div>
</body>
</html>
