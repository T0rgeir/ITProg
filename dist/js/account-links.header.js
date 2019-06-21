$(document).ready(function() {

	$('.forum-content-forumitem-rightside-top-name p').click(function() {
		let idForumItem = $(this).attr('id');
		location.href = 'forum-item.php?idForumItem=' + idForumItem;
	});

	$('.forum-content-forumitem-rightside-top-name-ath p').click(function() {
		let idForumItem = $(this).attr('id');
		location.href = 'forum-item.php?idForumItem=' + idForumItem;
	});

	$('.articles-content-grid-items-elements-area-item-top-photo-ath').click(function() {
		let idArticleItem = $(this).attr('id');
		location.href = 'article-item.php?idArticleItem=' + idArticleItem;
	});

});