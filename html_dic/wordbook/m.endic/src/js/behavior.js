	$('.u_comment_writebox .u_btn_more').click(function(){
		$(this).removeClass('open').addClass('close');
		$(this).parent().parent().hide();
		$(this).parent().parent().prev().hide();
		$(this).parent().parent().prev().prev().hide();
		return false;
	});

	$('.u_comment_reply_list_paging a').click(function(){
		$(this).toggleClass('u_rpg_dim');
		return false;
	});

	$('.u_comment_btns .u_btn').click(function(){
		if ($(this).text() == '답글취소 '){
			console.log('a');
			$(this).html('답글 <em class="u_comment_reply_num c_fnt">0</em>');
		} else if($(this).text() == '답글 0'){
			$(this).html('답글취소 <em class="u_comment_reply_num c_fnt"></em>')
		}
		$(this).toggleClass('open').toggleClass('close');
		$(this).parent().next().toggle();
		$(this).parent().next().next().toggle();
		$(this).parent().next().next().next().toggle();

		return false;
	});

	$('.u_btn_refresh').click(function(){
		$('.u_comment_box').toggleClass('u_comment_hc');
		return false;
	});

	$('.u_btn_write').click(function(){
		$('.u_back,.u_comment_writebox').show();
		$('.u_sort,.u_comment_lst,.u_comment_lst_count').hide();
		return false;
	});

	$('.u_back').click(function(){
		$('.u_back,.u_comment_writebox').hide();
		$('.u_sort,.u_comment_lst,.u_comment_lst_count').show();
		return false;
	});
	