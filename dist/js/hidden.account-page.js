$(document).ready(function() {
	$('.top-menu-item-profile-login').click(function() {
		if ( $('.top-menu-item-profile-login p').attr('id') == 'logout' ) {
			$('.hidden-logout').css({ 'display': 'block' });
			$('.hidden-logout-block').css({ 'display': 'flex', 'width': '50%' });
		} else {
			$('.hidden-enter').css({ 'display': 'block' });
			$('.hidden-enter-block').css({ 'display': 'flex', 'width': '50%' });
			$('.hidden-enter-block-line-login').css({ 'display': 'flex' });
			$('.hidden-enter-block-line-register').css({ 'display': 'none' });
		}
	});

	$('.hidden-enter, .hidden-logout').click(function(event) {
		if (event.target == this) {
			$('.hidden-enter').css({ 'display': 'none' });
			$('.hidden-enter-block').css({ 'display': 'none', 'width': '0%' });
			$('.hidden-logout').css({ 'display': 'none' });
			$('.hidden-enter-logout').css({ 'display': 'none', 'width': '0%' });
		}
	});
});