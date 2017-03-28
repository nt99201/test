/**
 * Created by Naver on 15. 3. 2.
 */
var oSectionBox = $(".section_box");
var aClasses = oSectionBox[0].classList;

/**
 * 엔트리 글자 크기 작아지게 하는 버튼 클릭시 실행.
 */
$(".ft_small").click(function(){
    if(aClasses.contains("ft_mod")){
        aClasses.remove("ft_mod");
    }else if(aClasses.contains("ft_mod2")){
        aClasses.remove("ft_mod2");
        aClasses.add("ft_mod");
    }else if(aClasses.contains("ft_mod3")){
        aClasses.remove("ft_mod3");
        aClasses.add("ft_mod2");
    }else{
        aClasses.add("ft_mod_sm");
    }
    checkState();
});

/**
 * 엔트리 글자 크기 커지게 하는 버튼 클릭시 실행.
 */
$(".ft_big").click(function(){
    if(aClasses.contains("ft_mod")){
        aClasses.remove("ft_mod");
        aClasses.add("ft_mod2");
    }else if(aClasses.contains("ft_mod2")){
        aClasses.remove("ft_mod2");
        aClasses.add("ft_mod3");
    }else if(aClasses.contains("ft_mod_sm")){
        aClasses.remove("ft_mod_sm");
    }else if(aClasses.length == 1){
        aClasses.add("ft_mod");
    }
    checkState();
})

/**
 * 최대한 클 경우, 최대한 작은 경우 버튼 비활성화 / 활성화 체크
 */
function checkState(){
    if(aClasses.contains("ft_mod_sm")){
        $(".ft_small")[0].classList.remove("on");
        $(".ft_big")[0].classList.add("on");
    }else if(aClasses.contains("ft_mod3")){
        $(".ft_small")[0].classList.add("on");
        $(".ft_big")[0].classList.remove("on");
    }
}

$(".tooltip_wrap .ask > a").click(function(){
    $this = $(this);
    var tooltip = $this.parent().find(".que_con")
    if(tooltip.css("display") == "block"){
        tooltip.hide();
    }else{
        tooltip.show();
    }
});
$(".tooltip_wrap .ask .que_con .btn_close").click(function(){
    $(".que_con").hide();
});

