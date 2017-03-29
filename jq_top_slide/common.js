$(function() {
	$(".list")
		.click(function(){
			$("#contarea").animate({marginTop:0});
			$("#visualarea").animate({marginTop:0});
		})
		.css({cursor:'pointer'});
	$(".list1")
		.click(function(){
			$("#contarea").animate({marginTop:-400});
			$("#visualarea").animate({marginTop:-575});
			$("#cont1").slideUp("fast");
			$("#cont2").slideUp("fast");
			$("#cont3").slideUp("fast");
			$("#cont4").slideUp("fast");
			$("#cont5").slideUp("fast");
			$("#cont6").slideUp("fast");
			$("#contarea").animate({marginTop:0});
			$("#cont1").slideDown("slow");
		})
		.css({cursor:'pointer'});
	$(".list2")
		.click(function(){
			$("#contarea").animate({marginTop:-400});
			$("#visualarea").animate({marginTop:-575});
			$("#cont1").slideUp("fast");
			$("#cont2").slideUp("fast");
			$("#cont3").slideUp("fast");
			$("#cont4").slideUp("fast");
			$("#cont5").slideUp("fast");
			$("#cont6").slideUp("fast");
			$("#contarea").animate({marginTop:0});
			$("#cont2").slideDown("slow");
		})
		.css({cursor:'pointer'});
	$(".list3")
		.click(function(){
			$("#contarea").animate({marginTop:-400});
			$("#visualarea").animate({marginTop:-575});
			$("#cont1").slideUp("fast");
			$("#cont2").slideUp("fast");
			$("#cont3").slideUp("fast");
			$("#cont4").slideUp("fast");
			$("#cont5").slideUp("fast");
			$("#cont6").slideUp("fast");
			$("#contarea").animate({marginTop:0});
			$("#cont3").slideDown("slow");
		})
		.css({cursor:'pointer'});
	$(".list4")
		.click(function(){
			$("#contarea").animate({marginTop:-400});
			$("#visualarea").animate({marginTop:-575});
			$("#cont1").slideUp("fast");
			$("#cont2").slideUp("fast");
			$("#cont3").slideUp("fast");
			$("#cont4").slideUp("fast");
			$("#cont5").slideUp("fast");
			$("#cont6").slideUp("fast");
			$("#contarea").animate({marginTop:0});
			$("#cont4").slideDown("slow");
		})
		.css({cursor:'pointer'});
	$(".list5")
		.click(function(){
			$("#contarea").animate({marginTop:-400});
			$("#visualarea").animate({marginTop:-575});
			$("#cont1").slideUp("fast");
			$("#cont2").slideUp("fast");
			$("#cont3").slideUp("fast");
			$("#cont4").slideUp("fast");
			$("#cont5").slideUp("fast");
			$("#cont6").slideUp("fast");
			$("#contarea").animate({marginTop:0});
			$("#cont5").slideDown("slow");
		})
		.css({cursor:'pointer'});
	$(".list6")
		.click(function(){
			$("#contarea").animate({marginTop:-400});
			$("#visualarea").animate({marginTop:-575});
			$("#cont1").slideUp("fast");
			$("#cont2").slideUp("fast");
			$("#cont3").slideUp("fast");
			$("#cont4").slideUp("fast");
			$("#cont5").slideUp("fast");
			$("#cont6").slideUp("fast");
			$("#contarea").animate({marginTop:0});
			$("#cont6").slideDown("slow");
		})
		.css({cursor:'pointer'});
});


function menu(object)
{
	if (object == 0){
		for (k=1; k<=6; k++){
			document.getElementById("menu"+k).src = "http://www.everland.com/everland/news/2011_rose/menu_0" + k +".jpg";
		}
	} else {
		for (k=1; k<=6; k++){
			document.getElementById("menu"+k).src = "http://www.everland.com/everland/news/2011_rose/menu_0" + k +".jpg";
		}
		document.getElementById("menu"+object).src = "http://www.everland.com/everland/news/2011_rose/menu_0" + object + "_on.jpg";
	}
}

function cont1_pic(object)
{
		document.getElementById('bigpic').src = "http://www.everland.com/everland/news/2011_rose/cont_0102_0" + object + ".jpg";
}

function cont4_tab(object)
{
	for (k=1; k<=2; k++){
		document.getElementById('enter_tab'+k).src = "http://www.everland.com/everland/news/2011_rose/cont_04_tab_0" + k +".jpg";
		document.getElementById('enter_cont'+k).style.display = "none";
	}
		document.getElementById('enter_tab'+object).src = "http://www.everland.com/everland/news/2011_rose/cont_04_tab_0" + object + "_on.jpg";
		document.getElementById('enter_cont'+object).style.display = "";
}