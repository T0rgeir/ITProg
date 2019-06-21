<?php

  if ( isset($_SESSION['logged_user']) ) {

    $count_fr = R::find('forumfr', 'login = ?', array($_SESSION['logged_user']->login));
    $user_frforum_items = R::findAll('forumfr', 'login = ?', array($_SESSION['logged_user']->login));

    if ( $count_fr == NULL ) {
      echo '<p class="hidden-myforum"> Записів немає. </p>';
    } else {
      foreach ( $user_frforum_items as $frforum_items ) {
        $count_com = R::count('comments', 'id_forum_lg = ?', array($frforum_items->id_fr));
        echo
        '
          <div class="main-content-forumitem" id="fr" alt="On">
            <div class="main-content-forumitem-leftside">
              <div class="main-content-forumitem-leftside-featurebtnfr" id="'. $frforum_items->id_fr .'"></div>
            </div>
            <div class="main-content-forumitem-rightside">
              <div class="main-content-forumitem-rightside-top">
                <div class="main-content-forumitem-rightside-top-name">
                  <p id="'. $frforum_items->id_fr .'"> '. $frforum_items->quest_article .' </p>
                </div>
                <div class="main-content-forumitem-rightside-top-about">
                  <div class="main-content-forumitem-rightside-top-about-comments">
                    <p> '. $count_com .' </p>
                  </div>
                </div>
              </div>
              <div class="main-content-forumitem-rightside-bot">
                <div class="main-content-forumitem-rightside-bot-text">
                  <p> '. $frforum_items->quest_text .' </p>
                </div>
              </div>
            </div>
          </div>
        ';
      }
    }
  }

?>