$(document).ready(function() {

	$('.top-menu-item-profile-login').click(function() {
		let urlRegister = location.href;
		$('#hideregbtn').val(urlRegister);
	});

	$('.top-menu-item-profile-login').click(function() {
		let urlLogin = location.href;
		$('#hidelgbtn').val(urlLogin);
	});

	$('#chk-reg').click(function() {
		if ( $('#chk-reg').is(':checked') ) {
			$('#sub-reg').css({ 'display': 'block' });
		} else {
			$('#sub-reg').css({ 'display': 'none' });
		}
	});

});