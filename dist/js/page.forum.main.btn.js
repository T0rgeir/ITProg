$(document).ready(function() {

	//Add
	$('.main-content-forumitem-leftside-featurebtn').click(function() {
		let idAddFrBtn = $(this).attr('id');
		location.href = "__forum-btnfr.php?idAddFrBtn=" + idAddFrBtn;
	});

	//Remove
	$('.main-content-forumitem-leftside-featurebtnmy').click(function() {
		let idRemoveFrBtnMyForum = $(this).attr('id');
		location.href = "__forum-removebtn.php?idRemoveFrBtnMyForum=" + idRemoveFrBtnMyForum;
	});

	$('.main-content-forumitem-leftside-featurebtnfr').click(function() {
		let idRemoveFrBtnFrForum = $(this).attr('id');
		location.href = "__forum-removebtn.php?idRemoveFrBtnFrForum=" + idRemoveFrBtnFrForum;
	});

	//Edit
	/*$('.main-content-forumitem-leftside-editbtnmy').click(function() {

		$('.hidden-forumadd').css({ 'display': 'block' });
		$('.hidden-forumadd-block').css({ 'display': 'flex', 'width': '60%' });
		$('.hidden-forumadd-block-cont').css({ 'display': 'flex' });

		$('.hidden-forumadd').click(function(event) {
			if (event.target == this) {
				$('.hidden-forumadd').css({ 'display': 'none' });
				$('.hidden-forumadd-block').css({ 'display': 'none', 'width': '0%' });
				$('.hidden-forumadd-block-cont').css({ 'display': 'none' });
			}
		});

	});*/

	//Enter
	$('.main-content-forumitem-rightside-top-name p').click(function() {
		let idForumItem = $(this).attr('id');
		location.href = "forum-item.php?idForumItem=" + idForumItem;
	});

	//Search
	$('.main-content-nav-panel-search-btn').click(function() {
		let idForumSearch = $('#search_forum').val();
		location.href = "forum.php?idForumSearch=" + idForumSearch;
	});

}); 