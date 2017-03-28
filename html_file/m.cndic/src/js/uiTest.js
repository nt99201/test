// 한중사전 소셜 플러그인

var spiPopList = $("#naver-splugin-wrap-cn > div");
var maxLength = spiPopList.length;

$(".spi_card").click(function(){
    var spiPopIndex = $(this).index()+1;
    spiPopList.each(function(){
        $(this).css("top","auto").hide();
    });
    spiPopList.eq(spiPopIndex).show();
    if(spiPopIndex>=maxLength) {
        spiPopList.hide();        
        $(".spi_card_dmm2").hide();
    }
    console.log(spiPopIndex)
});
$(".share_area a").click(function(){
    $("#naver-splugin-wrap-cn, .spi_card_dmm2").show();
    spiPopList.eq(0).show();
});

//자동완성, 최근 검색어
var exBool = 1;
$(function(){
    $(".autocomplet_wrap .btn_auto_off").click(function(){
        var $this = $(this);
        if(exBool == 1){
            $(".autocomplet_wrap .lst_word").hide();
            $this.text("자동완성 켜기");
            exBool = 0;
        }else{
            $(".autocomplet_wrap .lst_word").show();
            $this.text("자동완성 끄기");
            exBool = 1;
        }
        console.log(exBool)
    });
    $(".exam1").click(function(){
        $(".autocomplet_wrap").show();
    });
    $(".exam2").click(function(){
        $(".recent_item").hide();
        $(".recent_searches .no_item").show();
    });
    $(".common_tab_wrap .lst:last-child").click(function(){
        $(".autocomplet_wrap").hide();
        $(".recent_searches").show();
    });
    $(".recent_searches .btn_cls").click(function(){
        $(".recent_searches").hide();
    });
    $(".autocomplet_wrap .btn_wrap .btn_close").click(function(){
        $(".autocomplet_wrap").hide();
    });
    $(".sc2 .sbt2").click(function(){
        $this = $(this);
       if(!$this.hasClass("on")){
           $this.addClass("on");
           $(".write_select_wrap").show();
           $("#dmm").show();
       }else{
           $this.removeClass("on");
           $(".write_select_wrap").hide();
           $("#dmm").hide();
       }
    });

    // 입력기 선택
    $(".Nsearch_tool .Ntool_search.Nicon_input").on("click", function(){
        var $this = $(this);
        var inputBtn = $this.find("span");
        if(inputBtn.hasClass("is_active")){
            inputBtn.removeClass("is_active");
            $(".write_select_wrap").removeClass("is_opened");
            $(".header .dimmed").hide();
        }else{
            inputBtn.addClass("is_active");
            $(".write_select_wrap").addClass("is_opened");
            $(".header .dimmed").show();
        }
        if($(".wrap_keyboard").hasClass("is_opened")){
            $(".wrap_keyboard").removeClass("is_opened");
        }
    });

    $(".write_select_wrap a:first-child").click(function(){
        $this = $(this);
        if($(".write_select_wrap").hasClass("is_opened")) {
            $(".write_select_wrap").toggleClass("is_opened");
        }
        $(".wrap_keyboard").toggleClass("is_opened");
    });
    $(".wrap_keyboard").click(function(){
        $(".autocomplet_wrap").addClass("ellipsis").show();
    });
})



