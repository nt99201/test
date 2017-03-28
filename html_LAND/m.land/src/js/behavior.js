
var doc = document;




var land = {
    header : function() {
        var HEADER = doc.getElementById("dom_header");
        if(!HEADER) return false;
        var mapArea = doc.getElementById("mapArea");

        //지도 렌더링
        mapArea.style["position"] = "relative";

        //헤더높이만큼 지도영역 top값 설정
        function mapBox() {
            if (!mapArea) return false;
            var docHeight = document.documentElement.clientHeight;
            var docWidth = document.documentElement.clientWidth;
            var oPoint = new nhn.api.map.LatLng(37.5010226, 127.0396037);
            nhn.api.map.setDefaultPoint('LatLng');
            oMap = new nhn.api.map.Map('mapArea' ,{
                point : oPoint,
                zoom : 10,
                enableWheelZoom : true,
                enableDragPan : true,
                enableDblClickZoom : false,
                mapMode : 0,
                activateTrafficMap : false,
                activateBicycleMap : false,
                minMaxLevel : [ 1, 14 ],
                size : new nhn.api.map.Size(docWidth, docHeight - HEADER.offsetHeight)

            });
            var timer;

            $(window).resize(function(){
                clearTimeout(timer)
                timer = setTimeout(function(){
                    //lotate()
                    var docHeight = document.documentElement.clientHeight;
                    var docWidth = document.documentElement.clientWidth;
                    oMap.setSize(new nhn.api.map.Size(docWidth, docHeight - HEADER.offsetHeight))

                },20)
            })
        }
        mapBox()
    },
    controller : function(wrap) {

        var addCtrl = function (wrap, selector,coords1,coords2) {
            $.ajax({
                type : "GET",
                url : "map_obj.html",
                dataType : "html",
                success : function(html) {

                    var node_el = $(html).find(selector);

                    node_el.attr("style","");

                    switch (selector) {
                        case ".obj_circle.block.s" :
                            node_el.css({
                                left : coords1 + "px",
                                top : coords2 + "px",
                                width : "42px",
                                height: "42px",
                                zIndex : 1
                            });

                        break;

                        case ".ic.loc" :
                            node_el.css({
                                left : coords1 + "px",
                                top : coords2 + "px"
                            });
                        break;

                        case ".ic.zoomP" :
                            node_el.css({
                                left : coords1 + "px",
                                top : coords2 + "px"
                            });
                        break;

                        case ".ic.zoomM" :
                            node_el.css({
                                left : coords1 + "px",
                                top : coords2 + "px"
                            });
                        break;

                        case ".ic.other" :
                            node_el.css({
                                right : coords1 + "px",
                                top : coords2 + "px",
                                left : "auto"
                            });
                        break;

                        case ".ic.zoomW" :
                            node_el.css({
                                right : coords1 + "px",
                                top : coords2 + "px",
                                left : "auto"
                            });
                        break;

                        case ".ic.filter" :
                            node_el.css({
                                left : coords1 + "px",
                                bottom : coords2 + "px",
                                top : "auto"

                            });
                        break;

                        case ".obj_rnd_sq" :
                            node_el.css({
                                right : coords1 + "px",
                                bottom : coords2 + "px",
                                top : "auto",
                                left : "auto"

                            });
                        break;
                    }
                    $("#mapArea").prepend(node_el);
                    $(document).on("click",function(e){
                        var target = e.target || e.srcElement;
                        var LIST_MAP = $("#dom_list_map")
                        if (target.nodeName == "EM") {
                            //가로모드일때
                            if(window.innerHeight < window.innerWidth) {
                                LIST_MAP.velocity({
                                    translateX: 0,
                                    translateY: 0
                                },100)
                            }
                            //세로 모드 일때
                            else {
                                LIST_MAP.velocity({
                                    translateX: 0,
                                    translateY: 0
                                },100)
                            }
                        }
                        else {
                            if(window.innerHeight < window.innerWidth) {
                                LIST_MAP.velocity({
                                    translateX: 227,
                                    translateY: 0
                                },100)
                            }
                            //세로 모드 일때
                            else {
                                LIST_MAP.velocity({
                                    translateX: 0,
                                    translateY: 261
                                },100)
                            }

                        }
                    })
                    var timer;
                    $(window).resize(function(){
                        clearTimeout(timer)
                        timer = setTimeout(function(){
                            var docHeight = document.documentElement.clientHeight;
                            var docWidth = document.documentElement.clientWidth;
                            var HEADER = doc.getElementById("dom_header");

                        })
                    })
                }
            })
        }
        addCtrl(wrap,".ic.loc",13,13);
        addCtrl(wrap,".ic.zoomP",13,53);
        addCtrl(wrap,".ic.zoomM",13,88);
        addCtrl(wrap,".ic.zoomW",13,53);
        addCtrl(wrap,".ic.other",13,13);
        addCtrl(wrap,".ic.filter",13,24);
        addCtrl(wrap,".obj_rnd_sq",13,24);
        addCtrl(wrap,".obj_circle.block.s",100,100);





    },
    //파일 로드 함수 (전체 wrap셀렉터, 파일네임, 가져올셀렉터, 가져온 dom내에서 실행할 함수)
    fileLoad : function(src,url,selector,func) {
        $.ajax({
            type: "GET",
            url: url,
            dataType: "html",
            success: function (html) {
                var node_el = $(html).find(selector);
                $(src).prepend(node_el);
                if (!func) return false
                func();

            }
        })
    },
    //파일 조립 함수
    mapView : function() {
        var main = doc.getElementById("main");
        var root = doc.getElementById("root");
        var wrap = doc.querySelector(".wrap")
        if (!wrap) return false;
        main.style.width = document.documentElement.clientWidth + "px";
        main.style.height = document.documentElement.clientHeight + "px";



        land.fileLoad(main,"list_map.html","#dom_list_map",land.list_map)
        land.fileLoad(main,"header.html","#dom_header",land.header)

        var timer;
        $(window).resize(function(){
            clearTimeout(timer)
            timer = setTimeout(function(){
                //lotate()
                main.style.width = document.documentElement.clientWidth + "px";
                main.style.height = document.documentElement.clientHeight + "px";
            },20)
        })
        land.controller(wrap)




    },
    lnbs : function () {
        var LNB = doc.getElementById("dom_lnb");
        if (!LNB) return false;
    },
    fillter : function(){
        var FILLTER = doc.getElementById("dom_fillter");
        if (!FILLTER) return false;
    },
    list_page : function() {
        var LIST_PAGE = doc.getElementById("dom_list_page");
        if (!LIST_PAGE) return false;
    },
    list_map : function() {
        var LIST_MAP = doc.getElementById("dom_list_map");
        var dom_header = doc.getElementById("dom_header");
        var scroll_box = doc.getElementById("scroll_box");
        var root = doc.getElementById("root")
        if (!LIST_MAP) return false;
        if (!scroll_box) return false;

        if (root) {
            var myScroll = new IScroll(scroll_box,{
                mousewheel : true,
                click : true
            });
        }
        else {
            scroll_box.style["overflow"] = "visible";
            dom_list_map.style["position"] = "static";
            return false
        }



        var timer;
        var mode = function () {

            //가로모드일때
            if(window.innerHeight < window.innerWidth) {
                LIST_MAP.style.height = (window.innerHeight - 45) + "px";
                scroll_box.style.height = (window.innerHeight - 45) + "px";
                $("#dom_list_map").velocity({
                    translateX: 226,
                    translateY: 0
                },0)
            }
            else {
                scroll_box.style.height = 241 +"px";
                LIST_MAP.style.height = 241 +"px";
                $("#dom_list_map").velocity({
                    translateX: 0,
                    translateY: 241
                },0)
            }
        }

        $(window).resize(function(){
            clearTimeout(timer)
            timer = setTimeout(function(){
                mode()

            },20)
        })
        mode()
        doc.addEventListener("touchmove",function(e){e.preventDefault();},false)

    },
    detail : function() {
        var DETAIL = doc.getElementById("dom_detail");
        if (!DETAIL) return false;
    },
    init : function() {
        addEventListener("DOMContentLoaded",function(){

            var wrap = $(".wrap");
            land.mapView();
            land.list_map()



        })
    }
}

land.init()

