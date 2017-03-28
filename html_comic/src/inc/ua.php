<?
/*
NHN Web Standardization Team (http://html.nhndesign.com/) MJA 101004
'마크업 확인용' 분기 코드입니다. (실 서비스 반영 불가)
※참고
- http://devcafe.nhncorp.com/mobilewebsource/124458
- MOSS > 모바일WebUI 최적화 및 스마트폰 어플리케이션 > 모바일 웹 개발 > _1차 공통 > 모바일웹 분기 처리 가이드
*/
$ua = $_SERVER['HTTP_USER_AGENT'];
$uametaValue = "width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densitydpi=medium-dpi";
$ualinkValue = "w.css";
$ualinkDefaultValue = "";
$uacssValue = "";
if(strrpos($ua,"POLARIS")){
	$ualinkDefaultValue = "e.css";
	$uacssValue = "p";
}else if(strrpos($ua,"Opera")){
	$uametaValue = "initial-scale=0.75,maximum-scale=0.75,minimum-scale=0.75,user-scalable=no";
	$uacssValue = "o";
}else if(strrpos($ua,"Dolfin")){
	$uacssValue = "d";
}else if(strrpos($ua,"Android")){
	$uacssValue = "a";
}else if(strrpos($ua,"iPhone")||strrpos($ua,"iPad")){
	$uametaValue = "width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no";
	preg_match_all('/(\OS) ([0-9])_([0-9])/',$ua,$arrReturn);
	$iOS_MajorVer = (int)$arrReturn[2][0];
	$iOS_MinorVer = (int)$arrReturn[3][0];
	if(($iOS_MajorVer == 4 && $iOS_MinorVer < 2) || $iOS_MajorVer < 4 ) $uacssValue = "s s2";

	else $uacssValue = "s";
}else{
	$ualinkDefaultValue = "e.css";
}
function _show_source($filename) {
	if (is_file($filename)) {
		$content = file_get_contents($filename);
		$content = htmlspecialchars($content);
	}
	echo $content;
}
?>