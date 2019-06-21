<?php

	require "db.php";

	if ( isset($_GET['idSubscribebtn']) ) {

		$idSubscribebtn = $_GET['idSubscribebtn'];
		$user = R::dispense('subs');
		$user->login = $_SESSION['logged_user']->login;
		$user->sub = $idSubscribebtn;
		R::store($user);

		header('Location: /');

	}

?>