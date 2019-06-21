$(document).ready(function() {

	$('.main-content-iteminfo-item-container-main-r').click(function() {
		let lg_num = $(this).attr('alt');
		let lg_items = $(this).attr('id');
		location.href = 'langbook-item.php?lg_num=' + lg_num + '&lg_items=' + lg_items;
	});

});