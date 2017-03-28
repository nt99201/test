// JavaScript Document

// 탭메뉴 링크 및 오버
function mnlnk(){
	if(!document.getElementsByTagName) return false;
	if(!document.getElementById) return false;
	if(!document.getElementById("navi")) return false;
	var li = document.getElementById("navi").getElementsByTagName("li");
	openSource(li[2]); //li[오픈시 초기 설정]
	for(i=0;i<li.length;i++){
		li[i].onclick = function(){
			document.getElementById("guide_frame").setAttribute("src", this.getElementsByTagName("a")[0].getAttribute("href"));
			clearSource(li);
			this.className = "menu_on";
			return false;
		}
	}
}

// 클래스 초기화
function clearSource(tmp){
	for(i=0;i<tmp.length;i++){
		tmp[i].className = "";	
	}
}

// 페이지 오픈시 오버 및 아이프레임 로드
function openSource(tmp){
	tmp.className = "menu_on";
	document.getElementById("guide_frame").setAttribute("src", tmp.getElementsByTagName("a")[0].getAttribute("href"));
}

// 아이프레임 리사이즈
function resizeFrame(iframeObj){
	var innerBody = iframeObj.contentWindow.document.body;
	oldEvent = innerBody.onclick;
	innerBody.onclick = function(){
		resizeFrame(iframeObj, 1);
		oldEvent;
	}
	var innerHeight = innerBody.scrollHeight + (innerBody.offsetHeight - innerBody.clientHeight);
	iframeObj.style.height = innerHeight + "px";
	var innerWidth = innerBody.scrollWidth + (innerBody.offsetWidth - innerBody.clientWidth);
	iframeObj.style.width = innerWidth + "px";
	if(!arguments[1]){
		this.scrollTo(1,1);
	}
}

window.onload = mnlnk;