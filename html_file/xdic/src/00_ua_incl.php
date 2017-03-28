<?
/*
NHN Web Standardization Team (http://html.nhndesign.com/) MJA 110507
'마크업 확인용' 분기 코드입니다. (실 서비스 반영 불가)
※ 분기기준: http://devcafe.nhncorp.com/mobilewebsource/309442
*/
$ua = $_SERVER['HTTP_USER_AGENT'];
$uametaValue = "width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no";
$ualinkValue = "mn_w.css";
$ualinkDefaultValue = "";
$uacssValue = "pc";
if(strrpos($ua,"POLARIS")){
	$ualinkDefaultValue = "ru_e.css";
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
	$ualinkDefaultValue = "mn_e.css";
}

// 디코더 함수
function unescape($text, $toEncofing = 'UTF-8')
{
    //return urldecode(preg_replace_callback('/%u([[:alnum:]]{4})/', array('self', 'tostring'), $text));
    return urldecode(
        preg_replace_callback(
            '/%u([[:alnum:]]{4})/',
            create_function(
                '$text',
                " return iconv('UTF-16LE', '" . $toEncofing . "', chr(hexdec(substr(\$text[1], 2, 2))).chr(hexdec(substr(\$text[1], 0, 2))));"
            ),
            $text
        )
    );
}

// page parameter
$page = ($_GET['page']);

// lang parameter
$langId = $_COOKIE['langId'];
$langValue = unescape($_COOKIE['langValue']);
$layoutType = $_COOKIE['layoutType'];

// loging parameter
$layer = ($_GET['layer']);

$current_dir = dirname(__FILE__);
if (!$dh = @opendir($current_dir)) {
	return false;
}
	$temp = explode('_', $page);
	$excep = $temp[0];
?>
