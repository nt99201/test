// 선택한 언어 표시
$(function() {
    var sName = 'langId',
        cookieData = document.cookie,
        start = cookieData.indexOf(sName),
        sValue = '';
    if(start != -1) {
        start += sName.length;
        var end = cookieData.indexOf(';', start);
        if(end == -1) {
            end = cookieData.length;
        }
        sValue = cookieData.substring(start, end);
    }
    this.setSelectOption = function(sLang) {
        $('#selector').find('option').each(function() {
            var sOptionVal = $(this).val();
            if(sOptionVal == sLang) {
                $(this).attr('selected', 'selected');
            }
        });
    };
    this.setSelectOption(unescape(sValue));
}());
// 쿠키 설정
function setCookie(sName, sValue, nDays) {
    var d = new Date(),
        expires = "expires="+d.toUTCString();
    d.setTime(d.getTime() + (nDays*24*60*60*1000));

    document.cookie = sName + "=" + escape(sValue) + "; path=/;" + d.toGMTString() + ";";
}
// 셀렉트 선택 이벤트
$('#selector').change(function() {
    var sLangId = $(this).find('option:selected').val(),
        sLangValue = $(this).find('option:selected').text();

    setCookie('langId', sLangId, 1);
    setCookie('langValue', sLangValue, 1);
    location.reload();
});
