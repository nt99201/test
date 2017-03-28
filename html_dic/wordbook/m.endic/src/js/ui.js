// 버튼 클릭시 스크롤 방지
$("body").on("click","a",function(){
    return false;
});

// font size
//$(function(){
//
//    $("div, li, a").each(function(){
//        var fontSize =  parseInt($(this).css("font-size"));
//        var fontLine =  parseInt($(this).css("line-height"));
//
//        if($(this).css("line-height")){
////				$(this).css({"font-size":fontSize*1.2+"px"});
//            $(this).css({"font-size":fontSize*1.2+"px","line-height":fontLine*1.2+"px"});
//            console.log();
//        }
//    });
////		console.log(fontSize);
//});

// 퀴즈 높이값
$(".quiz .conversation_wrap").css("min-height",$("body").innerHeight()-45 +"px");

// 리딩 달력
$("#header .btn_calendar").click(function(){
   $(".pp1").show();
});
$(".pp1 .ac").click(function(){
    $(".pp1").hide();
})
//퀴즈 컨펌 레이어
$("body").on("click",".ly_wrap .ly_content .btn_area > a",function(){
    $this = $(this);
    $this.parents(".ly_wrap").hide();
    $("#wrap").removeAttr("style");
});

//영어 스킨 확인
$("<a href='#' class='enko'>영어스킨</a>")
    .appendTo("body")
    .css({
        "position":"fixed",
        "bottom":"5px",
        "z-index":"10000",
        "left":"5px",
        "width":"100px",
        "height":"30px",
        "line-height":"30px",
        "text-align":"center",
        "background":"#333",
        "color":"#fff"
    })
    .on("click",function(){
        if($("body").attr("lang") == "ko"){
            $("body").attr("lang","en");
            $(".ly_talkinfo").html("<strong>TalkTalk English</strong>Let's practice through<br> TalkTalk English.<a href='#' class='btn_cls'><span class='blind'>닫기</span></a><span class='pop_arrow'></span>");
            $(".speaking_area .tit").html("<strong>Listen and Repeat</strong>each sentence.");
            $(".speaking_area .caution").html("You can speak and listen your voice <br> by using Dict app.");
            $(this).text("한글 스킨");
        }else{
            $("body").attr("lang","ko");
            $(".ly_talkinfo").html("<strong>영어톡톡 안내</strong>오늘의 회화 표현을<br> 영어톡톡에서 활용해보세요.<a href='#' class='btn_cls'><span class='blind'>닫기</span></a><span class='pop_arrow'></span>");
            $(".speaking_area .tit").html("<strong>원어민 발음을 듣고 따라하며,</strong>한문장씩 연습해보세요.");
            $(".speaking_area .caution").html("스피킹 기능은 사전앱에서 지원됩니다.");
            $(this).text("영어 스킨");
        }
    });

$(".conversation_tab_area .tab_wrap li").on("click",function(){
    $(".conversation_tab_area .tab_wrap li").each(function(){
        $(this).removeClass("on");
    });
    $(this).addClass("on");
});
//주간복습 플로팅 레이어 토글
$("body").on("click",".ly_intro_review .btn_cls",function(){
    $this = $(this);
    $this.parents(".ly_wrap").hide();
});

//퀴즈 인터렉션
$("body.quiz").on("click",".btn_del",function(){
    var $this = $(this);
    $this.parent().find(".txt").text("");
    $(".lst_sample li").each(function(){
        $this = $(this);
        $this.removeClass("on");
    })
}).on("click",".type1 .lst_sample li a",function(){
    var $this = $(this);
    var sampleText = $(this).text();
    if(!$this.parent().hasClass("on")){
        $(".type1 .answer .txt").append(" "+sampleText);
        $this.parent().addClass("on");
    }
}).on("click",".type2 .lst_sample li a",function(){
    var $this = $(this);
    var sampleText = $(this).text();
    if(!$this.parent().hasClass("on")){
        $(".type2 .answer .txt .blank").addClass("on").val(sampleText);
        $(".type2 .lst_sample li").removeClass("on");
        $this.parent().addClass("on");
    }
}).on("click",".btn_set .btn_link",function(){
    $this = $(this);
    idx = $this.parent().index();
    // console.log(idx);
    var quizArea = $(".conversation_wrap").eq(idx).find(".quiz_area");
    var quizListen = $(".conversation_wrap").eq(idx).find(".listen_btn_wrap");
    // var quizArea = $this.parents(".btn_wrap").prev(".quiz_area");
    quizListen.show();
    console.log(quizArea);
    var thisH = quizArea.find(".answer").innerHeight()/2;
    var wrongTop = quizArea.find(".answer").offset().top+thisH-26+40;
    if(quizArea.hasClass("type1") || quizArea.hasClass("type4")){
        quizArea.find(".answer").addClass("right");
    }else{
        quizArea.find(".answer").addClass("wrong");
        if(quizArea.find(".answer").hasClass("input_quiz")){
            quizArea.find(".ly_wrong").css("top","262px").show();
        }else{
            quizArea.find(".ly_wrong").css("top",wrongTop+"px").show();
        }
    }
    $this.hide();
    $this.parents(".btn_set").find(".right_rate").show();
});


// 점수 그래프 트랜지션
var scoreAni = function(a){
    if(a){
        $(".everage_bar").css({
            "width":"50%",
            "transition": "transform 1s ease, width 0.5s ease 0s"
        });
        $(".s100 .myscore").css({
            "width":"100%",
            "transition": "transform 1s ease, width 1s ease 1s"
        });
        $(".s50 .myscore").css({
            "width":"50%",
            "transition": "transform 1s ease, width 1s ease 1s"
        });
        $(".s0 .myscore").css({
            "width":"20%",
            "transition": "transform 1s ease, width 1s ease 1s"
        });
    }
    else{
        $(".everage_bar, .myscore").removeAttr("style");
    }
}


 //탭메뉴 스크롤
var myScroll = new IScroll('.conversation_tab_area', {
    scrollX: true,
    scrollY: false,
    mouseWheel: true,
    click:true
});

// 듣기 버튼 토글
$("body").on("click",".btn_all, .btn_listen, .btn_repeat",function(){
    $this = $(this);
    $this.toggleClass("on");
});

// 보조사전 위치값, 레이어 버튼 토글

$("body").on("click",".ly_help_dic .btn_cls",function(){
    $(".ly_help_dic").hide();
}).on("click",".highlight",function(){
    var highTop = ($(".highlight").offset().top)-($(".ly_help_dic").innerHeight())-11;
    var arrowLeft = ($(".highlight").offset().left)+($(".highlight").width()/2)-6;

    $(".ly_help_dic").css("top",highTop);
    $(".pop_arrow").css("left",arrowLeft);
    $(".ly_help_dic").show();
});



//옵션 버튼 토글
var fs = 3;
$("body").on("click",".btn_option",function(){
    if($(".ly_option_wrap").css("display")=="block"){
        $(".ly_option_wrap").hide();
    }else{
        $(".ly_option_wrap").show();
    }
}).on("click",".option_font a", function(){
    $this = $(this);
    if($this.hasClass("ft_big") && fs < 5){
        ++fs;
    }else if($this.hasClass("ft_small") && fs > 1){
        --fs;
    }
    $fsClass = "fs"+fs;
    if(fs==3){
        $("#content").removeClass();
    }else{
        $("#content").removeClass().addClass($fsClass);
        if(fs == 5 || fs == 1){
            $this.addClass("disabled");
        }else{
            $(".option_font a").removeClass("disabled");
        }
    }
});

//해석보기 버튼 토글
function hideEx(){
    $(".reading_lst .txt_origin, .reading_lst .txt_trans").hide();
};
$("body").on("click",".interpret_btn_wrap label",function(){
    $thisChk = $(this).prev();
    $(".interpret_btn_wrap > input").removeClass("checked");
    $thisChk.addClass("checked");
    if($thisChk.attr("id") == "interpret2" ){
        hideEx();
        $(".reading_lst .txt_origin").show();
    }else if($thisChk.attr("id") == "interpret3" ){
        hideEx();
        $(".reading_lst .txt_trans").show();
    }else{
        $(".reading_lst .txt_origin, .reading_lst .txt_trans").show();
    }
})

//예문 펼치기 토글
var exam_bool = 1;
$("body").on("click",".btn_example",function(){
    $this = $(this);
    if(exam_bool){
        exam_bool = 0;
        $this.text("예문 닫기");
        $(".example_lst").show();
    }else{
        exam_bool = 1;
        $this.text("예문 펼치기");
        $(".example_lst").hide();
    }
});

//학습현황 달력 토글
$("body").on("click",".calendar_status .btn_more", function(){
    $this = $(this);
    $this.toggleClass("on");
    $(".calendar_status").toggleClass("month");
});

//출제 문장 보기 토글
$("body").on("click",".review_area .btn_link", function(){
    $(".ly_exam_question").parents(".ly_wrap").show();
}).on("click",".ly_exam_question .btn_cls", function(){
    $(".ly_exam_question").parents(".ly_wrap").hide();
});



//톡톡 레이어 토글
$("body").on("click",".ly_talkinfo .btn_cls",function(){
    $(".ly_talkinfo").hide();
});


//초기 안내 레이어
//$("#wrap").css("position","fixed");
$("body").on("click",".ly_new_info .btn_area2 .btn_cls",function(){
    $(this).parents(".ly_wrap").hide();
    $("#wrap").removeAttr("style");
});

//최근 학습기록 그래프
$(function() {
  $('.record_chart').highcharts({
    chart: {
      type: 'line',
      height:226
    },
    title: {
      text: ''
    },
    subtitle: {
      text: ''
    },
    xAxis: {
      categories: ['3주전', '2주전', '1주전', '이번주'],
      alternateGridColor: '#F7F7F7',
      tickLength: 0,
      labels: {
        style: {
            color: '#444'
        },
        align: 'center',
        x: 0,
        y: 18
      }
    },
    yAxis: {
      title: {
        text: ''
      },
      gridLineColor: '#EEEFF1',
      max: 100,
      min:0,
      //tickPixelInterval: 35,
      labels: {
        style: {
            color: '#959EA8'
        },
        //align: 'center',
        x: -7,
        //y: 4
      },
      tickInterval: 20
    },
    plotOptions: {
      line: {
        marker: {
            enabled: true,
            symbol: '',
            lineWidth: 2,
            radius:7,
            lineColor: '#03C73C',
            fillColor: '#FFFFFF'
        },
        dataLabels: {
          enabled: false,
          // color: '#1A71E8',
          // y: -5,
          // crop:false,
          // overflow:'none'
        },
        enableMouseTracking: true
      }
    },
    point: {
        events: {}
    },
    series: [{
      name: 'Tokyo',
      data: [60, 50, 70, 60],
      color: '#A8A8A8',
      marker: {
        symbol: 'circle',
        lineColor: '#A8A8A8',
        fillColor: '#FFFFFF'
      }
    }, {
      name: 'London',
      data: [30, 40, 30, 50],
      color: '#03C73C',
      marker: {
        symbol: 'circle',
        lineColor: '#03C73C',
        fillColor: '#FFFFFF'
      }
    }]
  });
});
