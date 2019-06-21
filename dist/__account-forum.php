<?php

  session_start();

  if ( isset($_SESSION['logged_user']) ) {

    $account_forum_fr_items = R::findAll('forumfr', 'login = ?', array($_SESSION['logged_user']->login));

    foreach ( $account_forum_fr_items as $account_forum_fr_item ) {

      echo
      '
        <div class="forum-content-forumitem">
          <div class="forum-content-forumitem-leftside">
          </div>
          <div class="forum-content-forumitem-rightside">
            <div class="forum-content-forumitem-rightside-top">
              <div class="forum-content-forumitem-rightside-top-name">
                <p id="'. $account_forum_fr_item->id_fr .'"> '. $account_forum_fr_item->quest_article .' </p>
              </div>
              <div class="forum-content-forumitem-rightside-top-about">
              </div>
            </div>
            <div class="forum-content-forumitem-rightside-bot">
              <div class="forum-content-forumitem-rightside-bot-text">
                <p> '. $account_forum_fr_item->quest_text .' </p>
              </div>
            </div>
          </div>
        </div>
      ';

    }
  }

?>