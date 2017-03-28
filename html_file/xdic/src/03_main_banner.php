<!-- iOS home shortcut layer -->
<div class="layer_shortcut"style="display: block">
	<div class="inner">
		<p class="layer_shortcut_row">
			<?php
				if ($langId == "id" || $langId == "ua" || $langId == "uz" || $langId == "pt" || $langId == "al" || $langId == "ru" || $langId == "ge" || $langId == "vn" || $langId == "kh" || $langId == "nl"|| $langId == "ro" || $langId == "sw" || $langId == "sv" || $langId == "it" || $langId == "fa" || $langId == "pl" || $langId == "hu"){
			?>
				<img src="img/<?= $langId ?>/ico_app_ios.png" width="55" height="55" alt="" class="ico_dict"><em class="text_color"><?= $langValue ?>어사전</em>을 빠르고 <br>
				간편하게 이용하려면, <span class="ico_arrowup">공유</span>버튼을<br>
				눌러
			<?php
				} else if ($langId=="tr" || $langId == "mn" || $langId == "la" || $langId == "ar" || $langId == "cs"|| $langId == "th" || $langId == "hi" || $langId == "ne"){
			?>
				<img src="img/<?= $langId ?>/ico_app_ios.png" width="55" height="55" alt="" class="ico_dict"><em class="text_color"><?= $langValue ?>어사전</em>을 빠르고 간편하게<br>
				이용하려면, <span class="ico_arrowup">공유</span>버튼을 눌러<br>
			<?php
				}
			?>
			<em class="text_color">홈 화면에 추가하세요.</em>
		</p>
		<a href="" class="layer_shortcut_close" role="button"><span class="ico_x">레이어창 닫기</span></a>
		<span class="layer_shortcut_arrow"></span>
	</div>
</div>
<!-- //iOS home shortcut layer -->
