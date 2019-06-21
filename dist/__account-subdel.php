<?php

	require 'db.php';

	if ( isset($_GET['idSubbtn']) ) {

		$idSubbtn = $_GET['idSubbtn'];
		$sub = R::findOne('subs', 'id = ? AND login = ?', array($idSubbtn, $_SESSION['logged_user']->login));

		R::trash($sub);
		header('Location: /');

	}
	

?>