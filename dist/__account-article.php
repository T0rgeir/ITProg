<?php

  session_start();

  if ( isset($_SESSION['logged_user']) ) {

    $account_forum_fr_items = R::findAll('articlefr', 'login = ?', array($_SESSION['logged_user']->login));

    foreach ( $account_forum_fr_items as $account_forum_fr_item ) {

      echo
      '
        <div class="main-content-grid-items-elements-area-item" id="article-main-item-id-'. $account_forum_fr_item->id .'">
          <div class="main-content-grid-items-elements-area-item-top">
            <div class="main-content-grid-items-elements-area-item-top-photo" id="article-main-item-photo-id-1">
              <div class="main-content-grid-items-elements-area-item-top-info-hover"></div><img src="../../../../img/Posts-Items/0_ngXgBNNdx6iiWP8q.png" alt=""/>
            </div>
          </div>
          <div class="main-content-grid-items-elements-area-item-middle">
            <div class="main-content-grid-items-elements-area-item-middle-header">
              <p> '. $account_forum_fr_item->quest_article .' </p>
            </div>
            <div class="main-content-grid-items-elements-area-item-middle-text">
              <p> '. $account_forum_fr_item->quest_text .' </p>
            </div>
          </div>
        </div>
      ';

    }
  }

?>