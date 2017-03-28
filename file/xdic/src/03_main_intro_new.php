<ul class="tab_guide">
<li class="m_tab_on"><a href="#" onclick="info_slider.slide(1);">편리한 입력</a></li>
<li><a href="#" onclick="info_slider.slide(3);">활용 정보</a></li>
<li><a href="#" onclick="info_slider.slide(5);">내가 찾은 단어</a></li>
</ul>
<?php if($layoutType=="pc"){ ?>
<div class="intro_area">
    <div class="intro_box">
        <h3 class="blind">편리한 입력 안내1</h3>
        <strong class="p_num">1</strong>
        <p class="dsc_p">검색창 오른쪽에 있는 입력기 버튼을 선택하면 아래쪽에 문자 선택창이 나타납니다. 원하는 문자를 선택하면 검색창에 입력됩니다.</p>
        <div class="intro_imgs_area">
            <div class="intro_imgs" id="slider">
                <div class="intro_img_wrap">
                    <div>
                        <span><img src="img/<?= $langId ?>/pc_img_intro1.png" alt="편리한 입력 예시이미지1"></span>
                    </div>
                    <div>
                        <span><img src="img/<?= $langId ?>/pc_img_intro2.png" alt="편리한 입력 예시이미지2"></span>
                    </div>
                    <div>
                        <span><img src="img/<?= $langId ?>/pc_img_intro3.png" alt="활용정보 예시 이미지1"></span>
                    </div>
                    <div>
                        <span><img src="img/<?= $langId ?>/pc_img_intro4.png" alt="활용정보 예시 이미지2"></span>
                    </div>
                    <div>
                        <span><img src="img/<?= $langId ?>/pc_img_intro5.png" alt="내가 찾은 단어 예시 이미지1"></span>
                    </div>
                    <div>
                        <span><img src="img/<?= $langId ?>/pc_img_intro6.png" alt="내가 찾은 단어 예시 이미지2"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="u_pg">
            <button class="u_pg_btn" onclick="info_slider.prev()"><span class="blind">이전</span></button>
            <a href="#" class="num on"><span class="blind">1</span></a>
            <a href="#" class="num"><span class="blind">2</span></a>
            <a href="#" class="num"><span class="blind">3</span></a>
            <a href="#" class="num"><span class="blind">4</span></a>
            <a href="#" class="num"><span class="blind">5</span></a>
            <a href="#" class="num"><span class="blind">6</span></a>
            <button class="u_pg_btn next" onclick="info_slider.next()"><span class="blind">다음</span></button>
        </div>
    </div>
</div>
<?php }else{ ?>
<div class="intro_area">
    <div class="intro_box">
        <h3 class="blind">편리한 입력 안내1</h3>
        <strong class="p_num">1</strong>
        <p class="dsc_p">검색창 오른쪽에 있는 입력기 버튼을 선택하면 아래쪽에 문자 선택창이 나타납니다. 원하는 문자를 선택하면 검색창에 입력됩니다.</p>
        <div class="intro_imgs_area">
            <div class="intro_imgs" id="slider">
                <div class="intro_img_wrap">
                    <div>
                        <span><img src="img/<?= $langId ?>/img_intro1.png" alt="편리한 입력 예시이미지1"></span>
                    </div>
                    <div>
                        <span><img src="img/<?= $langId ?>/img_intro2.png" alt="편리한 입력 예시이미지2"></span>
                    </div>
                    <div>
                        <span><img src="img/<?= $langId ?>/img_intro3.png" alt="활용정보 예시 이미지1"></span>
                    </div>
                    <div>
                        <span><img src="img/<?= $langId ?>/img_intro4.png" alt="활용정보 예시 이미지2"></span>
                    </div>
                    <div>
                        <span><img src="img/<?= $langId ?>/img_intro5.png" alt="내가 찾은 단어 예시 이미지1"></span>
                    </div>
                    <div>
                        <span><img src="img/<?= $langId ?>/img_intro6.png" alt="내가 찾은 단어 예시 이미지2"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="u_pg">
            <button class="u_pg_btn" onclick="info_slider.prev()"><span class="blind">이전</span></button>
            <a href="#" class="num on"><span class="blind">1</span></a>
            <a href="#" class="num"><span class="blind">2</span></a>
            <a href="#" class="num"><span class="blind">3</span></a>
            <a href="#" class="num"><span class="blind">4</span></a>
            <a href="#" class="num"><span class="blind">5</span></a>
            <a href="#" class="num"><span class="blind">6</span></a>
            <button class="u_pg_btn next" onclick="info_slider.next()"><span class="blind">다음</span></button>
        </div>
    </div>
</div>
<?php } ?>
<!--[D] 마크업 확인용. 개발시 삭제-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="js/swipe.js"></script>
<script type="text/javascript">
    window.info_slider = Swipe(document.getElementById('slider'), {
        callback: function(index, elem) {
            var imgNum = elem.children[0].children[0].getAttribute("alt").split("지")[1];
            var infoTxt = [
                {text:"검색창 오른쪽에 있는 입력기 버튼을 선택하면 아래쪽에 문자 선택창이 나타납니다. 원하는 문자를 선택하면 검색창에 입력됩니다."},
                {text:"일부 문자만 입력해도 <?= $langValue ?>어 단어를 자동으로 완성하여 바로 검색할 수 있습니다."},
                {text:"<?= $langValue ?>어의 동사 활용 정보도 쉽게 확인할 수 있습니다. 표제어 하단의 직설법 현재동사 변화표에서 성수에 따른 변화형을 확인할 수 있습니다."},
                {text:"<?= $langValue ?>어의 형용사 활용 정보도 쉽게 확인할 수 있습니다. 표제어 하단의 성수에 따른 형용사 변화표에서 다양한 변화형을 확인할 수 있습니다."},
                {text:"내가 찾은 단어에 단어가 저장되어 있으면 <?= $langValue ?>어사전 메인 화면에 내가 찾은 단어가 표시됩니다."},
                {text:"빈 검색창을 누르면 검색창 아래에 내가 찾은 단어가 표시됩니다."}
            ];
            var index2 = Math.ceil(((index + 1) / 2) - 1);
            var infoHeight = elem.offsetHeight;
            $(".u_pg > a").each(function(){
                $(this).removeClass("on");
            });
            $(".tab_guide li").each(function(){
                $(this).removeClass("m_tab_on");
            });
            $(".u_pg > a").eq(index).addClass("on");
            $(".tab_guide li").eq(index2).addClass("m_tab_on");

            $(".info_imgs").height(infoHeight);
            $(".p_num").text(imgNum);
            $(".dsc_p").text(infoTxt[index].text);
        }
    });
</script>
