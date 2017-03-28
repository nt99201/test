/**
 * Created by 안정민 on 2015-06-09.
 */

//웹수집 팝업 열기
$('#content').on('click','.btn_notice', function(event){
    var elPopUp = $('body')[0].querySelector('.ly_entry_pop');
    if(elPopUp.style.display === 'none'){
        elPopUp.style.display = 'block';
        elPopUp.style.top =  event.clientY + 10 + document.body.scrollTop + 'px';
    }else{
        elPopUp.style.display = 'none';
    }
});

//보조레이어 팝업 열기
$('#content').on('click','.target', function(event){
    $(this).toggleClass('on');

    var elPopUp = $('.ly_help_pop');
    var elPopUpArrow = $('.ly_arr');

    elPopUp.toggle();
    elPopUpArrow.toggle();

    elPopUpArrow[0].style.left = event.pageX  +'px';

    elPopUp[0].style.top =  event.clientY + 18 + document.body.scrollTop + 'px';
});

//웹수집 팝업 닫기
$('.btn_close').click(function(event){
    var elPopUp = $('body')[0].querySelector('.ly_entry_pop');
    elPopUp.style.display = "none";
});

var basic_toggle = function(target) {
    var $this = $(target);
    $this.toggleClass('on')
};

var initSettingItems = function(targetList) {
    for(var index=0;index<targetList.length;index++){
        if(targetList[index].classList.contains('on')){
            targetList[index].classList.remove('on');
        }
    }
};


$('.pop_lang .btn_close').click(function(e){
    $(this).parents('.pop_area').toggle();
});

$('.pop_video .btn_close').click(function(e){
    $(this).parents('.pop_area').toggle();
});

$('.pop_show_detail .btn_close').click(function(e){
    $(this).parents('.pop_area').toggle();
});

$('.pop_wrap .btn_area a').click(function(e){
    $(this).parents('.pop_area').toggle();
});

//최근 검색어 - 자동저장 팝업
$("#wrap").on('click','.chk_area #wordsave',function(event){
    $('.pop_autosave').toggle();
});

$('.autosave').click(function(event){
    $('.pop_autosave').toggle();
});

$('.autosave1').click(function(event){
    $('.pop_delete_word').toggle();
});

$('.usertrans').click(function(event){
    $('.pop_usertrans').toggle();
});

$('.usertrans1').click(function(event){
    $('.pop_usertrans1').toggle();
});

$('.usertrans2').click(function(event){
    $('.pop_usertrans2').toggle();
});

$('.usertrans3').click(function(event){
    $('.pop_usertrans3').toggle();
});

$('.usertrans4').click(function(event){
    $('.pop_usertrans4').toggle();
});

$('.usertrans5').click(function(event){
    $('.pop_usertrans5').toggle();
});

$('.usertrans6').click(function(event){
    $('.pop_usertrans6').toggle();
});

$('.set_lang').click(function(event){
    $('.pop_lang').toggle();
});

$('.kan_academy1').click(function(event){
    $('.pop_video').toggle();
});

$('.kan_academy').click(function(event){
    $('.pop_show_detail').toggle();
});

$('.toast').click(function(event){
    $('.ly_toast_wordbook').toggle();
});

$('.join_survey').click(function(event){
    $('.pop_survey').toggle();
});

$('.open_popup').click(function(event){
    $('.pop_area.new').toggle();
});

$('.september').click(function(event){
    $('.september_open').toggle();
});

var oPopFlicking = new jindo.m.SlideFlicking(jindo.$('mflick4'),{
    bUseCircular : false,
    nTotalContents :4,
    nDefaultIndex: 0
});

var oPopFlicking2 = new jindo.m.SlideFlicking(jindo.$('mflick2'),{
    bUseCircular : false,
    nTotalContents :4,
    nDefaultIndex: 0
});

var startX, gapX;
var currentIndex;
var isLeft = false;
var isRight = false;

oPopFlicking.attach({
    'touchStart' : function(oCustomEvt){
        startX = oCustomEvt.nX;
    },

    'touchEnd' : function(oCustomEvt){
        gapX = startX - oCustomEvt.nX;

        if(gapX > 0) {
            isRight = true;
        }else{
            isLeft = true;
        }

        if(isFirstLayer() || isLastLayer()){
            this.stop();
        }
    },

    'flicking' : function(oCustomEvt){
        currentIndex = oCustomEvt.nContentIndex;

        var pagings = $('.new .paging').children();

        for(var index=0; index<pagings.length;index++){
            if(pagings[index].classList.contains('on')){
                $(pagings[index]).removeClass('on');
            }

            $(pagings[oCustomEvt.nContentsIndex]).addClass('on');
        }
    }
});

var isFirstLayer = function(){
    return isLeft === true && currentIndex === 0;
};

var isLastLayer = function(){
    return isRight === true && currentIndex === 3;
};


oPopFlicking2.attach({
    'flicking' : function(oCustomEvt){
        currentIndex = oCustomEvt.nContentIndex;

        var pagings = $('.banner_cont .paging').children();

        for(var index=0; index<pagings.length;index++){
            if(pagings[index].classList.contains('on')){
                $(pagings[index]).removeClass('on');
            }

            $(pagings[oCustomEvt.nContentsIndex]).addClass('on');
        }
    }
});

$('.pop_area.new .lnk_start').click(function(e) {
    $(this).parents('.pop_area').toggle();
});

