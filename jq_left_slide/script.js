$(document).ready(function()
{
		// scrollWheel
		function ScrollControl() {
			var pos = $(window).scrollLeft(); //윈도우 전체 스크롤 left값
			var xpos = event.wheelDelta; // 휠의 위치값
			$('html, body').animate({scrollLeft:pos-xpos}, 7); //스크롤 값이랑 이동속도
		}
		document.onmousewheel = ScrollControl;

		$("#wrapbox").css({"width":"10751px"}); // 전체 박스 width 크기

		//festival photo
		$("#photobox li").click(function(){
			$('#mask').fadeTo("slow",0.5); //완성된 투명도를 만들 수 있다. fadeIn하면서 백분률로 0.5는 50%다.
			$("#movie_moon").css({"visibility":"hidden"}); // 영역이 만들어져 있게 만든다
			$("#movie_laciun").css({"visibility":"hidden"}); // 영역이 만들어져 있게 만든다

			var str = $(this).attr('class'); //클릭한 요소의 클래스를 찾아 변수 str의 값에 담는다.
			var strnum = str.substring(5,6); // substr(지정위치인덱스,글자수) (0부터 시작) 
			setTimeout(function(){ // 7초 동안 한번 값을 불른다. 
				$('#photoview').css({"display":"block"}); //레이어 팝업 띄어주기 클릭한 해당이미지 보여주기
				$('#photoview .photo').css({"background-image":"url('images/photo_0"+strnum+".png')"});
			}, 700);

			$("#photoview .next").click(function(){ // 레이어 팝업 다음버튼 클릭시
				var photonum = parseInt(strnum) + 1; //번호+1의 값을 photonum의 값에 넣어주고
				if(photonum <= 4){ //4보다 작거나 같을때는 해당 이미지를 보여주고 클릭하면 +1값으로 늘어나게 만든다
					$('#photoview .photo').css({"background-image":"url('images/photo_0"+photonum+".png')"});
					strnum++;
				}
				if(photonum > 4){ // 만약에 4보다 크면 다시 이미지 01의 이미지로 보여주고 값을 1로 보내주게 한다. prev도 동일하다.
					$('#photoview .photo').css({"background-image":"url('images/photo_01.png')"});
					strnum=1;
				}
			});

			$("#photoview .pre").click(function(){
				var photonum = parseInt(strnum) - 1;
				if(photonum <= 4){
					$('#photoview .photo').css({"background-image":"url('images/photo_0"+photonum+".png')"});
					strnum--;
				}
				if(photonum <= 0){
					$('#photoview .photo').css({"background-image":"url('images/photo_04.png')"});
					strnum=4;
				}
			});
		});

		$("#photoview .close").click(function(){ //그림자값을 없앤다. 레이어값을 없앤다. 
			$('#mask').hide();
			$('#photoview').css({"display":"none"});
			$("#movie_moon").css({"visibility":""});
			$("#movie_laciun").css({"visibility":""});
		});

		var poswidth = $(window).width(); //윈도우의 전체 width값

		//menu move
		$("#title").click(function(){
			$('html, body').animate({scrollLeft:0}, 1500); //스크롤 0의 위치 값에 1.5초안에 가라
		});
		$(".menu1").click(function(){
			$('html, body').animate({scrollLeft:1962-poswidth/2}, 1500); //스크롤 0의 위치 값에 1.5초안에 가라 → 1962 - 전체widow.width/2의 값
		});
		$(".menu2").click(function(){
			$('html, body').animate({scrollLeft:2979}, 1500);
		});
		$(".menu3").click(function(){
			$('html, body').animate({scrollLeft:6250}, 1500);
		});
		$(".menu4").click(function(){
			$('html, body').animate({scrollLeft:8465}, 1500);
		});

		$(window).resize(function() {
			if($(window).height()<=800){
				$("#title").addClass("resize800");
				$("#menu").addClass("resize800");
			}else{
				$("#title").removeClass("resize800");
				$("#menu").removeClass("resize800");
			}
		});
		if($(window).height()<=800){
			$("#title").addClass("resize800");
			$("#menu").addClass("resize800");
		}else{
			$("#title").removeClass("resize800");
			$("#menu").removeClass("resize800");
		}

		$(window).scroll(function()
		{
				var position = $(window).scrollLeft(); //전체 윈도우 스크롤 left값

				if(position >= 932 && position < 2005){ // 스크롤 위치에 다가갔을때 메뉴 표현
					$(".menu1").addClass("on");
					$(".menu2").removeClass("on");
					$(".menu3").removeClass("on");
					$(".menu4").removeClass("on");
				}else if(position >= 2461 && position < 5200){
					$(".menu1").removeClass("on");
					$(".menu2").addClass("on");
					$(".menu3").removeClass("on");
					$(".menu4").removeClass("on");
				}else if(position >= 5807 && position < 7732){
					$(".menu1").removeClass("on");
					$(".menu2").removeClass("on");
					$(".menu3").addClass("on");
					$(".menu4").removeClass("on");
				}else if(position >= 8080){
					$(".menu1").removeClass("on");
					$(".menu2").removeClass("on");
					$(".menu3").removeClass("on");
					$(".menu4").addClass("on");
				}else{
					$(".menu1").removeClass("on");
					$(".menu2").removeClass("on");
					$(".menu3").removeClass("on");
					$(".menu4").removeClass("on");
				}

				$("#obj_cloud").animate({marginLeft:-position/1.5}, 20); // marginLeft:-전체 윈도우 스크롤 left값에 1.5를 나눈 값을 포함시킨다.
				$("#obj_flower").animate({marginLeft:-position/10}, 15);
				$("#obj_petals1").animate({top:-position/5}, 25);
				$("#obj_petals2").animate({top:-(position-2585)/5}, 20);
				$("#obj_petals3").animate({top:(position-3876)/2}, 25);
				$("#obj_petals4").animate({top:(position-4582)/10}, 20);

				$("#obj_magictree").animate({marginLeft:position*0.003}, 10);

				$("#obj_structure").animate({marginLeft:position*0.035}, 10);
				$("#obj_tree").animate({marginLeft:-position*0.027}, 15);
				$("#obj_tree_butterfly").animate({marginLeft:position*0.132}, 10);

				$("#cont1").animate({marginLeft:-position/5}, 20);
				$("#cont2_1").animate({marginLeft:-position/7}, 30);
				$("#cont2_2").animate({marginLeft:-position/5}, 15);
				$("#cont2_3").animate({marginLeft:-position/12}, 25);
				$("#cont3_1").animate({marginLeft:-position/5}, 15);
				$("#cont3_2").animate({marginLeft:-position/7}, 30);
				$("#cont4").animate({marginLeft:-position/12}, 10);

				$("#movie_moon").animate({marginLeft:-position/7}, 30);
				$("#movie_laciun").animate({marginLeft:-position/12}, 25);				
				$("#link_time").animate({marginLeft:-position/7}, 30);
				$("#link_time01").animate({marginLeft:-position/12}, 10);

				$("#photobox").animate({marginLeft:-position/5}, 20);

		});				


});