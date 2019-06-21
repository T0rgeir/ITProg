<?php

  if ( !isset($_GET['idArticleSearch']) ) {

    $user_forum_items = R::findAll('article');
    foreach ( $user_forum_items as $forum_items ) {
      echo
      '
        <div class="main-content-grid-items-elements-area-item" id="'. $forum_items->id .'">
          <div class="main-content-grid-items-elements-area-item-top">
            <div class="main-content-grid-items-elements-area-item-top-photo" id="'. $forum_items->id .'">
              <div class="main-content-grid-items-elements-area-item-top-info-hover"></div><img src="../../../../img/Posts-Items/0_ngXgBNNdx6iiWP8q.png" alt=""/>
            </div>
          </div>
          <div class="main-content-grid-items-elements-area-item-middle">
            <div class="main-content-grid-items-elements-area-item-middle-header">
              <p> '. $forum_items->quest_article .' </p>
            </div>
            <div class="main-content-grid-items-elements-area-item-middle-text">
              <p> '. $forum_items->quest_text .' </p>
            </div>
          </div>
        </div>
      ';
    }

  } else if ( isset($_GET['idArticleSearch']) ) {

    $idArticleSearch = $_GET['idArticleSearch'];
    $search = R::findAll('article', 'quest_article LIKE ? ', array($idArticleSearch));
    foreach ( $search as $search_item ) {
      echo
      '
        <div class="main-content-grid-items-elements-area-item">
          <div class="main-content-grid-items-elements-area-item-top">
            <div class="main-content-grid-items-elements-area-item-top-photo" id="'. $search_item->id .'">
              <div class="main-content-grid-items-elements-area-item-top-info-hover"></div><img src="../../../../img/Posts-Items/0_ngXgBNNdx6iiWP8q.png" alt=""/>
            </div>
          </div>
          <div class="main-content-grid-items-elements-area-item-middle">
            <div class="main-content-grid-items-elements-area-item-middle-header">
              <p> '. $search_item->quest_article .' </p>
            </div>
            <div class="main-content-grid-items-elements-area-item-middle-text">
              <p> '. $search_item->quest_text .' </p>
            </div>
          </div>
        </div>
      ';
    }

  }


?>