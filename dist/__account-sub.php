<?php

	require 'db.php';

	if ( isset($_SESSION['logged_user']->login ) ) {
		if ( isset($_GET['idSub']) ) {

			$idSub = $_GET['idSub'];
			$sub = R::findOne('forum', 'id = ?', array($idSub));

			if ( $sub->login != $_SESSION['logged_user']->login ) {
				$user = R::dispense('subs');
	      $user->login = $_SESSION['logged_user']->login;
	      $user->sub = $sub->login;
	      R::store($user);
	      header('Location: /');
	    } else {
	    	header('Location: /');
	    }

		} else if ( isset($_GET['idSubA']) ) {

			$idSubA = $_GET['idSubA'];
			$sub = R::findOne('article', 'id = ?', array($idSubA ));

			if ( $sub->login != $_SESSION['logged_user']->login ) {
				$user = R::dispense('subs');
	      $user->login = $_SESSION['logged_user']->login;
	      $user->sub = $sub->login;
	      R::store($user);
	      header('Location: /');
	    } else {
	    	header('Location: /');
	    }

		}
	}

?>