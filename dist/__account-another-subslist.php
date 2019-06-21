<?php

	if ( isset($_GET['idForumItem']) ) {

    $idForumItem = $_GET['idForumItem'];
    $forum_item_inner = R::findOne('forum', 'id = ?', array($idForumItem));

		$sub = R::findAll('subs', 'sub = ?', array($forum_item_inner->login));

	  foreach ( $sub as $sub_inner ) {
	    echo 
	    '
		    <div class="subscribe-cont-item-ath">
		      <div class="left-ath">
		        <img src="img/Posts-Items/user.png" alt="">
		        <div class="info-ath">
		          <p> '. $sub_inner->login .' </p>
		        </div>        
		      </div>
		      <div class="right-ath">
		        <div class="btn-ath"><p>Підписатись</p></div>
		      </div>
		    </div>
	    ';
  	}

	} else if ( isset($_GET['idArticleItem']) ) {

		$idArticleItem = $_GET['idArticleItem'];
    $forum_item_inner = R::findOne('article', 'id = ?', array($idArticleItem));

		$sub = R::findAll('subs', 'sub = ?', array($forum_item_inner->login));

	  foreach ( $sub as $sub_inner ) {
	    echo 
	    '
		    <div class="subscribe-cont-item-ath">
		      <div class="left-ath">
		        <img src="img/Posts-Items/user.png" alt="">
		        <div class="info-ath">
		          <p> '. $sub_inner->login .' </p>
		        </div>        
		      </div>
		      <div class="right-ath">
		        <div class="btn-ath"><p>Підписатись</p></div>
		      </div>
		    </div>
	    ';
  	}

	}

?>