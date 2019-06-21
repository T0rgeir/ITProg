$(document).ready(function() {

	$('.main-content-myforum-img').click(function() {

		if ( $('.article-cont#my').attr('alt') == 'On' ) {
			$('.article-cont#my').attr('alt', 'Off');
			$('.article-cont#my').css({ 'display': 'none' });
			$('.main-content-myforum-img').css({ 'transform': 'rotate(180deg)' });
		} else if ( $('.article-cont#my').attr('alt') == 'Off' ) {
			$('.article-cont#my').attr('alt', 'On');
			$('.article-cont#my').css({ 'display': 'flex' });
			$('.main-content-myforum-img').css({ 'transform': 'rotate(0deg)' });
		}
		
	});

	$('.main-content-frforum-img').click(function() {

		if ( $('.article-cont#fr').attr('alt') == 'On' ) {
			$('.article-cont#fr').attr('alt', 'Off');
			$('.article-cont#fr').css({ 'display': 'none' });
			$('.main-content-frforum-img').css({ 'transform': 'rotate(180deg)' });
		} else if ( $('.article-cont#fr').attr('alt') == 'Off' ) {
			$('.article-cont#fr').attr('alt', 'On');
			$('.article-cont#fr').css({ 'display': 'flex' });
			$('.main-content-frforum-img').css({ 'transform': 'rotate(0deg)' });
		}
		
	});

});