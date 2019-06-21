$(document).ready(function() {
	$('.main-content-addnew-btn').click(function() {
		$('.hidden-forumadd').css({ 'display': 'block' });
		$('.hidden-forumadd-block').css({ 'display': 'flex', 'width': '60%' });
		$('.hidden-forumadd-block-cont').css({ 'display': 'flex' });
	});

	$('.hidden-forumadd').click(function(event) {
		if (event.target == this) {
			$('.hidden-forumadd').css({ 'display': 'none' });
			$('.hidden-forumadd-block').css({ 'display': 'none', 'width': '0%' });
			$('.hidden-forumadd-block-cont').css({ 'display': 'none' });
		}
	});
});