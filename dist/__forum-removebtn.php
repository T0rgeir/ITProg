<?php

  require 'db.php';

  if ( isset($_GET['idRemoveFrBtnMyForum']) ) {

  	$idRemoveFrBtnMyForum = $_GET['idRemoveFrBtnMyForum'];

		$user_forum_rbtn = R::findOne('forum', 'id = ? AND login = ?', array($idRemoveFrBtnMyForum, $_SESSION['logged_user']->login));
    R::trash($user_forum_rbtn);


    $user_forum_rbtnd = R::findOne('forumfr', 'id_fr = ? AND login = ?', array($idRemoveFrBtnMyForum, $_SESSION['logged_user']->login));

    if ( $user_forum_rbtnd != NULL ) {
      R::trash($user_forum_rbtnd);
      header('Location: /forum.php');
    } else header('Location: /forum.php');

  }

  /*
  if ( isset($_GET['idRemoveFrBtnFrForum']) ) {

  	$idRemoveFrBtnFrForum = $_GET['idRemoveFrBtnFrForum'];

		$user_forum_rbtn = R::findOne('forumfr', 'id_fr = ? AND login = ?', array($idRemoveFrBtnFrForum, $_SESSION['logged_user']->login));
    R::trash($user_forum_rbtn);

    header('Location: /forum.php');

  }
  */

?>