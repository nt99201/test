/**
 * Created by 안정민 on 2015-06-09.
 */

//검색창 상단 고정
$(function() {
    var nHeadHeight = $('.gnb_menu').height();

    $(window).scroll(function() {
        var nScrollTop = $('body').scrollTop();

        if(nHeadHeight + 62 <= nScrollTop){
            $('.inner_wrap').addClass('fix');
        }else{
            $('.inner_wrap').removeClass('fix');
        }
    });
});

//layout페이지에서 '자동완성', 'MY최근 검색어' 클릭시
$('.popup_list .recent').click(function(event){
    $('.recent_srchword').toggle();
});
$('.popup_list .auto').click(function(event){
    $('.autocomplet_wrap').toggle();
});

//자동완성 팝업 보기
$("#wrap").on('click','.option_area .box',function(event){
    $('.pop_autosave').toggle();
});

//자동완성 팝업 닫기 기능
$("#wrap").on('click','.pop_autosave .btn_ok',function(event){
    $('.pop_autosave').toggle();
});

$("#wrap").on('click','.pop_autosave .btn_cancel',function(event){
    $('.pop_autosave').toggle();
});

//검색창 - Input 관련
$('#wrap').on('keyup','.search_wrap .ipt', function(event){
    var txtLength = countTextLength(this.value);
    $('.autocomplet_wrap')[0].style.display = "block";

    $('.clear')[0].classList.remove('hide');

    if(txtLength < 1){
        $('.autocomplet_wrap')[0].style.display = "none";
        $('.clear')[0].classList.add('hide');
    }
});


function countTextLength(content) {
    var count = 0;
    var character = '';
    for (var i = 0; i < content.length; i++) {
        character = content.charAt(i);
        if (escape(character).length > 4) {
            count += 2;
        } else {
            count += 1;
        }
    }
    return count;
}


//검색창 - Input 내용 지우기
$('#wrap').on('click','.search_wrap .clear', function(event){
    $('.search_wrap .ipt')[0].value = "";
    $('.autocomplet_wrap')[0].style.display = "none";
    $('.clear')[0].classList.add('hide');
});


//MY 최근검색어 레이어 버튼
$('#wrap').on('click','.search_wrap .ly_arrow', function(event){
    basic_toggle($(this));
    $('.recent_srchword').toggle();
});

$('#wrap').on('click','.recent_srchword  .btn_cancel', function(event){
    $(this).parents('.recent_srchword').toggle();
});

$('#wrap').on('click','.autocomplet_wrap  .btn_close', function(event){
    $(this).parents('.autocomplet_wrap').toggle();

    $('.search_wrap .ipt')[0].value = "";
    $('.clear')[0].classList.add('hide');
});


var basic_toggle = function(target) {
    var $this = $(target);
    $this.toggleClass('on')
};
