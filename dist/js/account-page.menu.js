$(document).ready(function() {
	$('.top-menu-item-profile-avatar').click(function() {
		$('.hidden-userpage').css({ 'display': 'block' });
		$('.hidden-userpage-block').css({ 'display': 'flex', 'width': '60%' });
		$('.hidden-userpage-block-line-under').css({ 'display': 'flex' });
	});

	$('.hidden-userpage').click(function(event) {
		if (event.target == this) {
			$('.hidden-userpage').css({ 'display': 'none' });
			$('.hidden-userpage-block').css({ 'display': 'none', 'width': '0%' });
			$('.hidden-logout').css({ 'display': 'none' });
			$('.hidden-userpage-logout').css({ 'display': 'none', 'width': '0%' });
		}
	});

	$('.main-content-forum-item-footer-author-name span').click(function() {
		$('.hidden-userpage-ath').css({ 'display': 'block' });
		$('.hidden-userpage-block-ath').css({ 'display': 'flex', 'width': '60%' });
		$('.hidden-userpage-block-line-under-ath').css({ 'display': 'flex' });
	});

	$('.main-content-acticle-item-footer-author-name span').click(function() {
		$('.hidden-userpage-ath').css({ 'display': 'block' });
		$('.hidden-userpage-block-ath').css({ 'display': 'flex', 'width': '60%' });
		$('.hidden-userpage-block-line-under-ath').css({ 'display': 'flex' });
	});

	$('.hidden-userpage-ath').click(function(event) {
		if (event.target == this) {
			$('.hidden-userpage-ath').css({ 'display': 'none' });
			$('.hidden-userpage-block-ath').css({ 'display': 'none', 'width': '0%' });
			$('.hidden-logout-ath').css({ 'display': 'none' });
			$('.hidden-userpage-logout-ath').css({ 'display': 'none', 'width': '0%' });
		}
	});

});