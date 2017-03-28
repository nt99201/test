/*
NHN Web Standardization Team (http://html.nhndesign.com/) MJA 100708
'마크업 확인용' 분기 스크립트입니다. (실 서비스 반영 불가)
참고
* http://devcafe.nhncorp.com/mobilewebsource/124458
* MOSS > 모바일WebUI 최적화 및 스마트폰 어플리케이션 > 모바일 웹 개발 > _1차 공통 > 모바일웹 분기 처리 가이드
*/
var ua = window.navigator.userAgent.toLowerCase();
var uametaValue = "width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densitydpi=medium-dpi";
var ualinkValue = "css/w.css";
var ualinkDefaultValue = "";
var uaimgValue = "im";
var uacssValue = "";
if ( /windows ce/.test( ua ) && /polar/.test( ua ) ) {
	//browser = "WM_POLARIS_LGT";
	ualinkValue = "css/p.css";
	uaimgValue = "imp";
} else if ( (/mozilla/.test( ua ) && /((010|011|016|017|018|019)\d{3,4}\d{4}$)/.test( ua )) ){
	//browser = "POLARIS_LGT";
	ualinkValue = "css/p.css";
	uaimgValue = "imp";
} else if ( /mozilla/.test( ua ) && /natebrowser/.test( ua ) ) {
	//browser = "POLARIS_SKT";
	ualinkValue = "css/p.css";
	uaimgValue = "imp";
} else if ( /bada/.test( ua ) || /dolfin/.test( ua ) ) {
	//browser = "Dolfin";
	uacssValue = "d";
} else if ( /opera/.test( ua ) && (/windows ce/.test( ua ) || /skt/.test( ua )) ) {
	//browser = "OPERA";
	uametaValue = "initial-scale=0.75, maximum-scale=0.75, minimum-scale=0.75, user-scalable=no";
	uacssValue = "o";
} else if ( /iphone/.test( ua ) || /ipod/.test( ua ) ) {
	//browser = "SAFARI";
	uametaValue = "width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no";
	uacssValue = "s";
} else if ( /android/.test( ua ) ) {
	//browser = "ANDROID_WEBKIT";
	uacssValue = "a";
} else if ( /windows ce/.test( ua ) && /iemobile/.test( ua ) ) {
	//browser = "IE";
	ualinkDefaultValue = "css/e.css";
} else if ( /mozilla/.test( ua ) &&  /(wv[0-9]+)/.test( ua ) && /lgtelecom/.test( ua ) ) {
	//browser = "LGT_WEBVIEWER";
	ualinkValue = "css/p.css";
	uaimgValue = "imp";
} else {
	//browser = "OTHERS";
	ualinkDefaultValue = "css/e.css";
}
document.getElementsByTagName("meta")[1].content = uametaValue;
document.getElementsByTagName("link")[0].href = ualinkValue;
document.getElementsByTagName("link")[1].href = ualinkDefaultValue;
document.getElementsByTagName("body")[0].className = uacssValue;