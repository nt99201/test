$(function(){
	/* search */
	$('header .u_hsbt').click(function(){
		$(this).removeClass('u_hsbt_op');
		$(this).addClass('u_hsbt_fd');
		$('#u_hs').show();
	});

	$('.u_hsbt.u_hsbt_fd').click(function(){
		$(this).removeClass('u_hsbt_fd');
		$(this).addClass('u_hsbt_op');
		$('#u_hs').hide();
	});

	$('.layer_wrap .btn_set .btn_bx').click(function(){
		$('.layer_wrap').hide();
		$('.dimmed').hide();
		return false;
	});

	$('.layer_wrap a,.ly_clse').click(function(){
		$('.layer_wrap').hide();
		$('.ly_dim').removeClass('on');
		$('.dimmed').hide();
		return false;
	});

	$('.app_notice').click(function(){
		$('.layer_wrap').show();
		$('.dimmed').show();
		return false;
	});

	$('.lnk_w .btn_bx:first-child').click(function(){
		$('.lnk_w').next('.btn_bx:first-child').toggle();
		$('.lnk_w .btn_bx:first-child').toggleClass('on');
		$('.ly_toast').toggleClass('on');
		
		// 관심 등록 토스트 팝업 메시지
		$('.ly_toast.on span').text('관심 작품으로 등록되었습니다.');

		// 관심 해제 토스트 팝업 메시지
		//$('.ly_toast.on span').text('관심 작품이 해제되었습니다.');

		return false;
	});

	$('.tab_lst .btn_bx.v2').click(function(){
		$('.ly_toast').toggleClass('on');

		var content='무료 제공 작품입니다.<br>추가 결제없이 대여완료 되었습니다.';
		//content='보유하신 자유이용권으로<br>추가 결제없이 대여완료 되었습니다.';
		$('.ly_toast.on span').html(content);	

		return false;
	});
	$('.selbox_sc2 .sel_w a.sel_bx').click(function(){
		$(this).toggleClass('unfd');

		return false;
	});
	$('.selbox_sc2 .sel_lst .btn_w a').click(function(){
		$('.sel_bx.unfd').removeClass('unfd');

		return false;
	});
	$('.banner_wrap .btn_clse').click(function(){
		$('.banner_wrap').hide();

		return false;
	});
	$('.cate_h.v3 .sel_lst li a').click(function(){
		$(this).toggleClass('chk');

		return false;
	});
	$('.store_sc dl .likeit_wrap .u_btn_likeit').click(function(){
		$(this).toggleClass('u_btn_likeit_on');

		//$('.u_likeit_module').show();
		$('.store_sc dl ~ .u_likeit_module').toggle();

		return false;
	});

	$('.u_ftsw .u_ftsa').click(function(){
		$('.ly_store_use').hide();
		$('.ly_app_setup').show();
		$('.ly_dim').toggleClass('on');

		return false;
	});

	$('.ly_app_setup .btn_clse').click(function(){
		$('.ly_app_setup').hide();
		$('.ly_dim').removeClass('on');
	
		return false;
	});

	$('.layer_wrap.coupon .ly_clse,.layer_wrap.coupon .ly_lnk').click(function(){
		$('.layer_wrap.coupon').hide();
		$('.ly_dim.v2').removeClass('on');
	
		return false;
	});

	$('.myinfo .info_bx .btn_bx.v2').click(function(){
		$(this).addClass('on');
	});

	$('.ly_notice_check .btn_close a').click(function(){
		$('.ly_notice_check').hide();
		$('.ly_dim').removeClass('on');
	});
	$('.ly_notice_check label').click(function(){
		$('.ly_notice_check').hide();
		$('.ly_dim').removeClass('on');
	});

	$('.ly_wrap .ly_clse,.btn_skip').click(function(){
		$('.ly_wrap').hide();
		$('.ly_dim').removeClass('on');
	});

	/* video player */
	$('.ads_video_area .btn_play').click(function(){
		$('.btn_play span').toggleClass("ico_pause");
	});

	$('.ads_video_area .btn_volume').click(function(){
		$('.ico_volume').toggleClass("off");
	});

	/*$('.btn_mov_play').click(function(){
		$(this).remove();
		$('.ads_video').attr('autoplay','autoplay');
		$('.video_mask').removeClass('v2');
		$('.btn_event').attr('style','display:block');
		$('#video-controls').attr('style','display:block');
		$('.video_shadow').attr('style','display:block');
		$('.video_outline').attr('style','display:block');
	});*/

	$('.video_full .btn_pause').click(function(){
		$('.btn_mov_play').attr('style','display:block');
		$('.video_mask').attr('style','display:block');
	});

	/* common */
	$('.u_cbox_guide').click(function(){
		$('.u_cbox_write_box').toggleClass("u_cbox_focus");
	});
});