// Index -> Header -> Menu
$(document).ready(function() {

	$('.menu-item').click(function() {
		let link = $(this).attr('id'); // menu-item-div id
		location.href = link + '.php'; // links
	});

	$('.sidebar-newsbar-header-morebutton-iconsheet').click(function() {
		location.href = '/article.php';
	});

	$('.sidebar-test-header-morebutton-iconsheet').click(function() {
		location.href = '/test.php';
	});
	
});