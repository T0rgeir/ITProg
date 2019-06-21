$(document).ready(function() {
	$('.hidden-enter-block-line-register').css({ 'display': 'none' });
	$('.usertrue').css({ 'display': 'none' });

	$('.hidden-enter-block-line-loginbutton').click(function() {
		$('.hidden-enter-block-line-login').css({ 'display': 'flex' });
		$('.hidden-enter-block-line-register').css({ 'display': 'none' });
		$('.usertrue').css({ 'display': 'none' });
	});

	$('.hidden-enter-block-line-registerbutton').click(function() {
		$('.hidden-enter-block-line-login').css({ 'display': 'none' });
		$('.hidden-enter-block-line-register').css({ 'display': 'flex' });
		$('.usertrue').css({ 'display': 'none' });
	});

	$('.hidden-enter-block-line-register-options-remember p').click(function() {
		$('.hidden-enter-block-line-login').css({ 'display': 'none' });
		$('.hidden-enter-block-line-register').css({ 'display': 'none' });
		$('.usertrue').css({ 'display': 'flex' });
	});

});