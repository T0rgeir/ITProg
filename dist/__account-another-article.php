<?php

	if ( isset($_GET['idArticleItem']) ) {

    $idArticleItem = $_GET['idArticleItem'];
    $forum_item_inner = R::findOne('article', 'id = ?', array($idArticleItem));

		$article = R::findAll('article', 'login = ?', array($forum_item_inner->login));

	  foreach ( $article as $article_inner ) {
	    echo 
	    '
		    <div class="articles-content-grid-items-elements-area-item-ath">
          <div class="articles-content-grid-items-elements-area-item-top-ath">
            <div class="articles-content-grid-items-elements-area-item-top-photo-ath" id="'. $article_inner->id .'">
              <div class="articles-content-grid-items-elements-area-item-top-info-hover-ath"></div><img src="../../../../img/Posts-Items/0_ngXgBNNdx6iiWP8q.png" alt=""/>
            </div>
          </div>
          <div class="articles-content-grid-items-elements-area-item-middle-ath">
            <div class="articles-content-grid-items-elements-area-item-middle-header-ath">
              <p> '. $article_inner->quest_article .' </p>
            </div>
            <div class="articles-content-grid-items-elements-area-item-middle-text-ath">
              <p> '. $article_inner->quest_text .' </p>
            </div>
          </div>
        </div>
	    ';
  	}

	} else if ( isset($_GET['idForumItem']) ) {

    $idForumItem = $_GET['idForumItem'];
    $forum_item_inner = R::findOne('article', 'id = ?', array($idForumItem));

    $article = R::findAll('article', 'login = ?', array($forum_item_inner->login));

    foreach ( $article as $article_inner ) {
      echo 
      '
        <div class="articles-content-grid-items-elements-area-item-ath">
          <div class="articles-content-grid-items-elements-area-item-top-ath">
            <div class="articles-content-grid-items-elements-area-item-top-photo-ath" id="'. $article_inner->id .'">
              <div class="articles-content-grid-items-elements-area-item-top-info-hover-ath"></div><img src="../../../../img/Posts-Items/0_ngXgBNNdx6iiWP8q.png" alt=""/>
            </div>
          </div>
          <div class="articles-content-grid-items-elements-area-item-middle-ath">
            <div class="articles-content-grid-items-elements-area-item-middle-header-ath">
              <p> '. $article_inner->quest_article .' </p>
            </div>
            <div class="articles-content-grid-items-elements-area-item-middle-text-ath">
              <p> '. $article_inner->quest_text .' </p>
            </div>
          </div>
        </div>
      ';
    }
    
  }

?>