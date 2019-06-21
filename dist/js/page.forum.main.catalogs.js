$(document).ready(function() {

	$('.main-content-myforum-img').click(function() {

		if ( $('.main-content-forumitem#my').attr('alt') == 'On' ) {
			$('.main-content-forumitem#my').attr('alt', 'Off');
			$('.main-content-forumitem#my').css({ 'display': 'none' });
			$('.main-content-myforum-img').css({ 'transform': 'rotate(180deg)' });
		} else if ( $('.main-content-forumitem#my').attr('alt') == 'Off' ) {
			$('.main-content-forumitem#my').attr('alt', 'On');
			$('.main-content-forumitem#my').css({ 'display': 'flex' });
			$('.main-content-myforum-img').css({ 'transform': 'rotate(0deg)' });
		}
		
	});

	$('.main-content-frforum-img').click(function() {

		if ( $('.main-content-forumitem#fr').attr('alt') == 'On' ) {
			$('.main-content-forumitem#fr').attr('alt', 'Off');
			$('.main-content-forumitem#fr').css({ 'display': 'none' });
			$('.main-content-frforum-img').css({ 'transform': 'rotate(180deg)' });
		} else if ( $('.main-content-forumitem#fr').attr('alt') == 'Off' ) {
			$('.main-content-forumitem#fr').attr('alt', 'On');
			$('.main-content-forumitem#fr').css({ 'display': 'flex' });
			$('.main-content-frforum-img').css({ 'transform': 'rotate(0deg)' });
		}
		
	});

});