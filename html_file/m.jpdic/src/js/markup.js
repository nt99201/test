/**
 * Created by Jeongmin on 2015-04-21.
 */

(function(){
    $('#side_menu_nav').hide();
    $('.dmm').hide();
})();

$('.it').click("click", function(){
    $('#ac_layer').toggle();
});

$('.btn_close').click("click", function(){
    $('.new_pop').hide();
    $('.shadow_view').hide();
});
// For iOS home shortcut layer
$(".layer_shortcut_close").click(function() {
	$(".layer_shortcut").hide();
	return false;
});

$(".Nsearch_tool .Ntool_search.Nicon_input_jp").on("click", function(){
	var $this = $(this);
	var inputBtn = $this.find("span");
	inputBtn.toggleClass("is_active");
	$(".write_select_wrap").toggleClass("is_opened");
});
