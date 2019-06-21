$(document).ready(function() {

	$('.main-content-item-footer-ratepanel-likebutton p').click(function() {
		let indexLikeIn = $(this).attr('id');
		location.href = "__index-likes.php?indexLikeIn=" + indexLikeIn;
	});

	$('.main-content-acticle-item-footer-ratepanel-likebutton').click(function() {
		let indexLikeArt = $(this).attr('id');
		location.href = "__index-likes.php?indexLikeArt=" + indexLikeArt;
	});

});