$(document).ready(function() {

	if ( $('.main-content-forum-comments-content-userpanel textarea').attr('id') == 'log' ) {

		$('.main-content-forum-comments-content-userpanel-buttons').css({ 'display': 'flex' });

	} else if ( $('.main-content-forum-comments-content-userpanel textarea').attr('id') == 'unlog' ) {

		$('.main-content-forum-comments-content-userpanel-buttons').css({ 'display': 'none' });

	}	

});