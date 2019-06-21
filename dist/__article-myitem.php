<?php

  if ( isset($_SESSION['logged_user']) ) {

    $count_my = R::count('article');
    $user_myforum_items = R::findAll('article', 'login = ?', array($_SESSION['logged_user']->login));

    if ( $count_my == 0 ) {
      echo '<p class="hidden-myforum"> Записів немає. </p>';
    } else {
      foreach ( $user_myforum_items as $myforum_items ) {
        echo
        '
          <div class="main-content-grid-items-elements-area-item">
            <div class="main-content-grid-items-elements-area-item-top">
              <div class="main-content-grid-items-elements-area-item-top-photo" id="'. $myforum_items->id .'">
                <div class="main-content-grid-items-elements-area-item-top-info-hover"></div><img src="../../../../img/Posts-Items/0_ngXgBNNdx6iiWP8q.png" alt=""/>
              </div>
            </div>
            <div class="main-content-grid-items-elements-area-item-middle">
              <div class="main-content-grid-items-elements-area-item-middle-header">
                <p> '. $myforum_items->quest_article .' </p>
              </div>
              <div class="main-content-grid-items-elements-area-item-middle-text">
                <p> '. $myforum_items->quest_text .' </p>
              </div>
            </div>
          </div>
        ';
      }
    }
  }

?>