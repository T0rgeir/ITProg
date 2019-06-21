<?php

	if ( isset($_GET['idForumItem']) ) {

    $idForumItem = $_GET['idForumItem'];
    $forum_item_inner = R::findAll('forum', 'id = ?', array($idForumItem));

    foreach ( $forum_item_inner as $forum_item_inner_in ) {
      echo 
      '
      	<div class="hidden-userpage-block-infoline-leftcont-info-nickname-ath">
          <p> '. $forum_item_inner_in->login .' </p>
        </div>
      ';
    }
  } else if ( isset($_GET['idArticleItem']) ) {

    $idArticleItem = $_GET['idArticleItem'];
    $forum_item_inner = R::findAll('article', 'id = ?', array($idArticleItem));

    foreach ( $forum_item_inner as $forum_item_inner_in ) {
      echo 
      '
        <div class="hidden-userpage-block-infoline-leftcont-info-nickname-ath">
          <p> '. $forum_item_inner_in->login .' </p>
        </div>
      ';
    }

  }

?>