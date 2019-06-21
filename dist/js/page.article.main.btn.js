$(document).ready(function() {

	//Enter
	$('.main-content-grid-items-elements-area-item-top-photo').click(function() {
		let idArticleItem = $(this).attr('id');
		location.href = "article-item.php?idArticleItem=" + idArticleItem;
	});

	//Search
	$('.main-content-nav-panel-search-btn').click(function() {
		let idForumSearch = $('#search_forum').val();
		location.href = "forum.php?idForumSearch=" + idForumSearch;
	});

}); 