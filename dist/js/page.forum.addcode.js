$(document).ready(function() {

	$('.btn-code').click(function() {
		if ( $(this).attr('id') == '0' ) {
			$(this).attr('id', '1');
			$('.hidden-forumadd-block-cont').css({ 'height': '700px' });
			$('#textarea_for_code').css({ 'display': 'flex' });
			$('.hidden-forumadd-block').css({ 'margin': '5% auto' });
		} else {
			$(this).attr('id', '0');
			$('.hidden-forumadd-block-cont').css({ 'height': '500px' });
			$('#textarea_for_code').css({ 'display': 'none' });
			$('.hidden-forumadd-block').css({ 'margin': '10% auto' });
		}
		
	});

});
