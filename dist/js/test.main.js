$(document).ready(function() {

	$('.main-content-items-testblock').click(function() {
		let testID = $(this).attr('id');
		location.href = 'test-item.php?testID=' + testID;
	});

	$('.right-sidebar-item-main-r p').click(function() {
		location.href = 'langbook.php';
	});

	$('.sidebar-test-content-testitem').click(function() {
		let testID = $(this).attr('id');
		location.href = 'test-item.php?testID=' + testID;
	});

	$('.btn-tests').click(function() {
		location.href = 'test.php';
	});

});