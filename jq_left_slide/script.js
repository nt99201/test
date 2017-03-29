$(document).ready(function()
{
		// scrollWheel
		function ScrollControl() {
			var pos = $(window).scrollLeft(); //������ ��ü ��ũ�� left��
			var xpos = event.wheelDelta; // ���� ��ġ��
			$('html, body').animate({scrollLeft:pos-xpos}, 7); //��ũ�� ���̶� �̵��ӵ�
		}
		document.onmousewheel = ScrollControl;

		$("#wrapbox").css({"width":"10751px"}); // ��ü �ڽ� width ũ��

		//festival photo
		$("#photobox li").click(function(){
			$('#mask').fadeTo("slow",0.5); //�ϼ��� ������ ���� �� �ִ�. fadeIn�ϸ鼭 ��з��� 0.5�� 50%��.
			$("#movie_moon").css({"visibility":"hidden"}); // ������ ������� �ְ� �����
			$("#movie_laciun").css({"visibility":"hidden"}); // ������ ������� �ְ� �����

			var str = $(this).attr('class'); //Ŭ���� ����� Ŭ������ ã�� ���� str�� ���� ��´�.
			var strnum = str.substring(5,6); // substr(������ġ�ε���,���ڼ�) (0���� ����) 
			setTimeout(function(){ // 7�� ���� �ѹ� ���� �Ҹ���. 
				$('#photoview').css({"display":"block"}); //���̾� �˾� ����ֱ� Ŭ���� �ش��̹��� �����ֱ�
				$('#photoview .photo').css({"background-image":"url('images/photo_0"+strnum+".png')"});
			}, 700);

			$("#photoview .next").click(function(){ // ���̾� �˾� ������ư Ŭ����
				var photonum = parseInt(strnum) + 1; //��ȣ+1�� ���� photonum�� ���� �־��ְ�
				if(photonum <= 4){ //4���� �۰ų� �������� �ش� �̹����� �����ְ� Ŭ���ϸ� +1������ �þ�� �����
					$('#photoview .photo').css({"background-image":"url('images/photo_0"+photonum+".png')"});
					strnum++;
				}
				if(photonum > 4){ // ���࿡ 4���� ũ�� �ٽ� �̹��� 01�� �̹����� �����ְ� ���� 1�� �����ְ� �Ѵ�. prev�� �����ϴ�.
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

		$("#photoview .close").click(function(){ //�׸��ڰ��� ���ش�. ���̾�� ���ش�. 
			$('#mask').hide();
			$('#photoview').css({"display":"none"});
			$("#movie_moon").css({"visibility":""});
			$("#movie_laciun").css({"visibility":""});
		});

		var poswidth = $(window).width(); //�������� ��ü width��

		//menu move
		$("#title").click(function(){
			$('html, body').animate({scrollLeft:0}, 1500); //��ũ�� 0�� ��ġ ���� 1.5�ʾȿ� ����
		});
		$(".menu1").click(function(){
			$('html, body').animate({scrollLeft:1962-poswidth/2}, 1500); //��ũ�� 0�� ��ġ ���� 1.5�ʾȿ� ���� �� 1962 - ��üwidow.width/2�� ��
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
				var position = $(window).scrollLeft(); //��ü ������ ��ũ�� left��

				if(position >= 932 && position < 2005){ // ��ũ�� ��ġ�� �ٰ������� �޴� ǥ��
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

				$("#obj_cloud").animate({marginLeft:-position/1.5}, 20); // marginLeft:-��ü ������ ��ũ�� left���� 1.5�� ���� ���� ���Խ�Ų��.
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