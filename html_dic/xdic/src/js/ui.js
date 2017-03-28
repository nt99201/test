/**
 * Created by Feel_sp on 2017. 3. 9..
 */

$(function(){

    //헤더 변경
    $(".layout_bt_wrap a").click(function(){
        $this = $(this);
        if($this.hasClass("type_ar")){
            document.cookie = "layoutType=ar";
        }else if($this.hasClass("type_pc")){
            document.cookie = "layoutType=pc";
        }else if($this.hasClass("type_t")){
            document.cookie = "layoutType=t";
        }else{
            document.cookie = "layoutType=mo";
        }
        location.reload();
    });

// For iOS home shortcut layer
    $(".layer_shortcut_close").click(function() {
        $(".layer_shortcut").hide();
        return false;
    });

    $(window).scroll(function() {
        var nScrollTop = $(this).scrollTop();

        if(nScrollTop > 41){
            $('#header').addClass('is_fixed');
            $('body').css("padding-top","42px");
        }else{
            $('#header').removeClass('is_fixed');
            $('body').css("padding-top","0");
        }
    });

    $(".Ngnb_tooltip .Nbtn_close").click(function(){
        $(".Ngnb_tooltip").hide();
    });

    $(".lang_change a").click(function(){
        $(".cont_main").toggleClass("change_lang");
    })
});
