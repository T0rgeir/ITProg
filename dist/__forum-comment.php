<?php

	require 'db.php';

	if ( isset($_GET['comment']) && isset($_GET['id_forum_lg']) && isset($_GET['id_forum_unlg']) && isset($_GET['hidden']) ) {

		$comment = $_GET['comment'];
		$id_forum_lg = $_GET['id_forum_lg'];
		$id_forum_unlg = $_GET['id_forum_unlg'];
		$hidden = $_GET['hidden'];

		$user_comment = R::dispense('comments');
		$user_comment->login = $_SESSION['logged_user']->login;
		$user_comment->id_forum_lg = $id_forum_lg;
		$user_comment->id_forum_unlg = $id_forum_lg;
		$user_comment->comment = $comment;
		$user_comment->date = date('d.m.y');
		R::store($user_comment);

		header('Location: /forum-item.php?idForumItem='.$hidden );

	}

?>