$(document).ready(function() {
	$('.subs-cont').css({ 'display': 'flex' });
	$('.subscribe-cont').css({ 'display': 'none' });
	$('.forum-cont').css({ 'display': 'none' });

	$('.item-subscribe').click(function() {
		$('.subs-cont').css({ 'display': 'flex' });
		$('.subscribe-cont').css({ 'display': 'none' });
		$('.forum-cont').css({ 'display': 'none' });
	});

	$('.item-subscribers').click(function() {
		$('.subs-cont').css({ 'display': 'none' });
		$('.subscribe-cont').css({ 'display': 'flex' });
		$('.forum-cont').css({ 'display': 'none' });
	});

	$('.item-forum').click(function() {
		$('.subs-cont').css({ 'display': 'none' });
		$('.subscribe-cont').css({ 'display': 'none' });
		$('.forum-cont').css({ 'display': 'flex' });
	});

//-----------------------------------------------------------------------//

	$('.subscribe-cont-ath').css({ 'display': 'flex' });
	$('.articles-cont-ath').css({ 'display': 'none' });
	$('.forum-cont-ath').css({ 'display': 'none' });

	$('.hidden-userpage-block-menu-cont-item-ath .item-subscribers').click(function() {
		$('.subscribe-cont-ath').css({ 'display': 'flex' });
		$('.articles-cont-ath').css({ 'display': 'none' });
		$('.forum-cont-ath').css({ 'display': 'none' });
	});

	$('.hidden-userpage-block-menu-cont-item-ath .item-article').click(function() {
		$('.subscribe-cont-ath').css({ 'display': 'none' });
		$('.articles-cont-ath').css({ 'display': 'flex' });
		$('.forum-cont-ath').css({ 'display': 'none' });
	});

	$('.hidden-userpage-block-menu-cont-item-ath .item-forum').click(function() {
		$('.subscribe-cont-ath').css({ 'display': 'none' });
		$('.articles-cont-ath').css({ 'display': 'none' });
		$('.forum-cont-ath').css({ 'display': 'flex' });
	});
});