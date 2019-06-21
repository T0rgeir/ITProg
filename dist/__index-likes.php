<?php

	require 'db.php';

	if ( isset($_SESSION['logged_user']->login) ) {

		if ( isset($_GET['indexLikeIn']) ) {

			$indexLikeIn = $_GET['indexLikeIn'];
			$user_like = R::dispense('likes');
	    $user_like->login = $_SESSION['logged_user']->login;
	    $user_like->id_article = $indexLikeIn;
	    R::store($user_like);
	    header('Location: /index.php');

		} else if ( isset($_GET['indexLikeArt']) ) {

			$indexLikeArt = $_GET['indexLikeArt'];
			$user_like = R::dispense('likes');
	    $user_like->login = $_SESSION['logged_user']->login;
	    $user_like->id_article = $indexLikeArt;
	    R::store($user_like);
	    header('Location: /article.php');

		}

	} 

?>