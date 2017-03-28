<?php
	if(!$lang) {
?>
<style type="text/css">
#selector{position:fixed;bottom:30px;left:0;overflow:hidden;width:140px;height:40px;line-height:20px;border:3px solid #000;background:#fff;z-index:99999;}
.selectorinfo{position:fixed;bottom:75px;left:0;color:#f04;font-weight:bold;z-index:99999;}
</style>
<p class="selectorinfo">* 마크업 확인용 셀렉트박스 입니다.</p>
<select id="selector">
<option>언어를 선택해 주세요.</option>

<?php

	$langNames = array(
		    'id' => '인도네시아',
		    'ua' => '우크라이나',
		    'uz' => '우즈베크',
		    'pt' => '포르투갈',
		    'al' => '알바니아',
		    'ru' => '러시아',
		    'tr' => '터키',
		    'ge' => '조지아',
		    'vn' => '베트남',
		    'mn' => '몽골',
		    'kh' => '캄보디아',
		    'la' => '라틴',
		    'nl' => '네덜란드',
		    'ro' => '루마니아',
		    'sw' => '스와힐리',
		    'sv' => '스웨덴',
		    'ar' => '아랍',
		    'it' => '이탈리아',
		    'cs' => '체코',
		    'th' => '태국',
		    'fa' => '페르시아',
		    'pl' => '폴란드',
		    'hu' => '헝가리',
		    'hi' => '힌디',
		    'ne' => '네팔'
    );
    function DisaplyCountry(){
    	echo $this -> country;
    }


        foreach ($langNames as $lang => $country) {
?>
				<option value="<?= $lang ?>"><?= $country ?></option>
<?php
		}

	} else {

		include $lang;

	}
?>
</select>
