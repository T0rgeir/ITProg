$(document).ready(function() {

	$('.main-content-item-footer-morebutton p').click(function() {
		let idArticleItem = $(this).attr('id');
		location.href = 'article-item.php?idArticleItem=' + idArticleItem;
	});

	$('.sidebar-newsbar-content-item').click(function() {
		let idArticleItem = $(this).attr('id');
		location.href = 'article-item.php?idArticleItem=' + idArticleItem;
	});

});