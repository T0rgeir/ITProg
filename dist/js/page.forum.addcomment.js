$(document).ready(function() {

	$('.main-content-forum-comments-content-userpanel-buttons-send').click(function() {

		if ( $('#log').val() != '' ) {
			let comment = $('#log').val();
			let id_forum_lg = $('#log').attr('alt');
			let id_forum_unlg = $('#unlog').attr('alt');
			let hidden = $('#hidden-forum').val();
			location.href = '__forum-comment.php?comment=' + comment + '&id_forum_lg=' + id_forum_lg + '&id_forum_unlg=' + id_forum_unlg + '&hidden=' + hidden;
		}
	
	});

	$('.main-content-forum-comments-content-userpanel-buttons-clear').click(function() {
		$('#log').val('');
	});

});