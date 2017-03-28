
var aTextInputsBottom  = $(".write_lstw");
/**
 * 입력기 버튼 클릭시 실행. (아래 키보드)
 */
$(".sbt5").click(function(){
    for(var index=0; index<aTextInputsBottom.length;index++){
        if(aTextInputsBottom[index].style.display === "block"){
            aTextInputsBottom[index].style.display = "none";
        }else{
            aTextInputsBottom[index].style.display = "block";
        }
    }
})

/**
 * 인풋 키워드 클릭시.
 */
$(".keyword").click(function(){
    var aAutoComplet  = $(this).parents(".top_search_box")[0].getElementsByClassName("write_lstw3");
    for(var index=0; index<aAutoComplet.length;index++){
        if(aAutoComplet[index].style.display === "block"){
            aAutoComplet[index].style.display = "none";
        }else{
            aAutoComplet[index].style.display = "block";
        }
    }
});

/**
 * 삭제 버튼 -> 인풋 내용 삭제
 */
$(".sbt3").click(function(){
    var keyword =  $(this)[0].parentElement.getElementsByClassName("keyword");
    keyword[0].value = "";
});

$(".btn_close").click(function(){
    $(this).parents(".write_lstw3")[0].style.display = "none";
})