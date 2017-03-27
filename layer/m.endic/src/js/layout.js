/* UI개발1팀 안정민*/
/* 엔트리 */

// 발음영역
$('#content').on('click','.voice_ico', function(){
    var voiceIcoList = $('.voice_ico');

    initSettingItems(voiceIcoList);
    basic_toggle(this);
});

$('#content').on('click','.voice_ico_sm', function(){
    var voiceIcoList = $('.voice_ico_sm');

    initSettingItems(voiceIcoList);
    basic_toggle(this);
});

//퀵 메뉴
$('#content').on('click','.quick_menu li', function(){
    var quickMenuItems = $('.quick_menu li');

    initSettingItems(quickMenuItems);
    basic_toggle(this);
});

//출처 탭
$('#content').on('click','.source_tab .tab_item', function(){
    var sourceTabItems = $('.source_tab li');

    initSettingItems(sourceTabItems);
    basic_toggle(this);
});

$('#content').on('click','.btn_detail_show', function(){
    basic_toggle(this);
});

$('#content').on('click','.btn_wrap > button', function(){
    basic_toggle(this);
});

$('#content').on('click','.user_mean_wrap > button', function(){
    basic_toggle(this);
});

$('#content').on('click','.btn_option_menu', function(){
    $(this).next().toggle();
    $('.ly_font_tip').hide();
});

$('#content').on('click', '.btn_close', function(){
    $(this).parent().hide();
});

//글자크기 변경
//옵션 버튼 토글
var fs = 1;
$("body").on("click",".ly_option .font_wrap a", function(e){
    e.preventDefault();
    $this = $(this);
    var fsLy = $(".ly_fontsize");
    var aClassList = $('.entry_wrap')[0].classList;
    if($this.hasClass("btn_bigger") && fs < 5){
        ++fs;
        $this.hasClass("btn_bigger") && fs == 5?fsLy.html('<span class="max">가장 큰</span> 글자 크기 입니다.'):fsLy.html('글자 크기가 커졌습니다.');
    }else if($this.hasClass("btn_smaller") && fs > 1){
        --fs;
        $this.hasClass("btn_smaller") && fs == 1?fsLy.html('<span class="min">가장 작은</span> 글자 크기 입니다.'):fsLy.html('글자 크기가 작아졌습니다.');
    }
    $fsClass = "fs"+fs;
    if(fs==1){
        $(".entry_wrap").removeClass(aClassList[1]);
        $(".btn_smaller").removeClass("on");
    }else if(fs==5){
        $(".entry_wrap").removeClass(aClassList[1]).addClass($fsClass);
        $(".btn_bigger").removeClass("on");
    }else{
        $(".entry_wrap").removeClass(aClassList[1]).addClass($fsClass);
        $(".ly_option .font_wrap a").addClass("on");
    }
    var tooltipLayer = $(".ly_fontsize_wrap");
    tooltipLayer.stop().fadeIn(100, function(){
        $(this).fadeOut(700);
    });

});

//$(".ly_option").show().css("position","fixed");

$('#content').on('click','.keyword_box .btn_keyword_open', function(e){
    var keywordBox = $(this).parents('.keyword_box');
    keywordBox.toggleClass('open');
});


var basic_toggle = function(target) {
    var $this = $(target);
    $this.toggleClass('on');
};


//오픈사전 레이어 '?' 버튼 클릭
$('#content').on('click', '.content_wrap .btn_asking', function(e){
    $('.ly_notice').toggle();
});

//오픈사전 레이어 닫기
$('#content').on('click','.ly_notice .btn_close', function(e){
    $(this).parents('.ly_notice').toggle();
});
