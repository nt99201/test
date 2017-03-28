<?php include '../inc/ua.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="<?php echo $uametaValue; ?>">
<meta name="format-detection" content="telephone=no">
<title>네이버 웹툰(컷뷰)</title>
<link rel="stylesheet" type="text/css" href="../css/<?php echo $ualinkValue; ?>">
<?php if($ualinkDefaultValue) echo '<link rel="stylesheet" type="text/css" href="../css/'.$ualinkDefaultValue.'">';?>
<link rel="stylesheet" type="text/css" href="../css/viewer.css">
<link type="text/css" rel="stylesheet" href="http://comic.like.naver.com/static20160428193013/css/list/mobile/likeit.css" charset="utf-8">
<!--<link type="text/css" rel="stylesheet" href="http://view.ui.naver.com/common/m.likeIt/master/css/likeItList_COMIC.css" charset="utf-8">-->
<link type="text/css" rel="stylesheet" href="../css/likeItList_COMIC.css" charset="utf-8">
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
        <!-- [D] 색상 정보 값을 style에 입력(화이트 버전(디폴트):#fff,블랙버전:#000) -->
        <div id="ct" style="background-color:#000">
            <div class="cut_flick_wrap">
                <!-- [D] 플리킹 영역 높이가 가변인 경우에 대응해 기기별 해상도 높이를 height에 넣어주세요. -->
                <div id="mflick" class="flick-view" style="height:640px">
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
                                <img src="http://imgcomic.naver.com/mobilewebimg/651673/1/3b4ba63c0aa8897a4e098b8f90d20902_017.jpg" style="width: auto; height: 100%;" alt="컷툰 이미지">
                            </div>
                        </div>
                        <div class="flick-ct">
                            <div class="cut_img">
                                <!-- [D] 가로모드와 같이 기기 높이값이 이미지보다 작아질때에는 이미지에 width:100% 대신 height:100% 가 들어가야 합니다 -->
                                <img src="../im/@tmp/@test.jpg" height="100%" alt="컷툰 이미지">
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
                    <a href="#none" class="pg_prev"><span class="u_vc">이전</span></a>
                    <em class="paging_num">9999</em>
                    <!-- [D] 비 활성화된 경우 A링크를 span 요소로 변경 -->
                    <!--a href="#none" class="pg_next"><span class="u_vc">다음</span></a-->
                    <span class="pg_next"><span class="u_vc">다음</span></span>
                </div>
                <!-- //페이징 -->
            </div>
            <!-- 최초 안내 페이지 -->
            <!-- [D] 딤드 레이어 활성화 된 경우 on 클래스 추가하면 안내 페이지 레이어 활성화 됨 -->
            <div class="ly_dim">
                 <div class="bg"></div>
            </div>
            <div class="ly_wrap ly_cut_guide" style="display:none">
                <div class="ly_cut_cont">
                    <img src="http://static.naver.net/m/comic/im/viewer/cut_guide.png" width="248" height="116" alt="옆으로 밀어서 즐기는 컷툰">
                </div>
                <div class="ly_cut_btns">
                    <span class="btns_lft">
                        <img src="http://static.naver.net/m/comic/im/viewer/cut_guide_lft.png" width="95" height="90" alt="좋아요 기능: 이 작품이 좋다면 눌러 주세요!">
                        <img src="http://static.naver.net/m/comic/im/viewer/cut_guide_lft2.png" width="170" height="145" alt="댓글 기능: 어느 컷에서나 댓글을 작성 할 수 있어요">
                    </span>
                    <span class="btns_rgt">
                        <img src="http://static.naver.net/m/comic/im/viewer/cut_guide_rgt.png" width="114" height="71" alt="이전, 다음 회차 가기">
                    </span>
                </div>
                <a href="#none" class="ly_clse" title="컷툰 도움말 창 닫기">컷툰 도움말 창 닫기</a>
            </div>
            <!-- //최초 안내 페이지 -->
        </div>
        <!-- //ct -->

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
    </div>
</body>
</html>
