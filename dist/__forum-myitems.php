<?php

  if ( isset($_SESSION['logged_user']) ) {

    $count_my = R::count('forum');
    $user_myforum_items = R::findAll('forum', 'login = ?', array($_SESSION['logged_user']->login));

    if ( $count_my == 0 ) {
      echo '<p class="hidden-myforum"> Записів немає. </p>';
    } else {
      foreach ( $user_myforum_items as $myforum_items ) {
        $count_com = R::count('comments', 'id_forum_lg = ?', array($myforum_items->id));
        echo
        '
          <div class="main-content-forumitem" id="my" alt="On">
            <div class="main-content-forumitem-leftside">
              <div class="main-content-forumitem-leftside-featurebtnmy" id="'. $myforum_items->id .'"></div>
            </div>
            <div class="main-content-forumitem-rightside">
              <div class="main-content-forumitem-rightside-top">
                <div class="main-content-forumitem-rightside-top-name">
                  <p id="'. $myforum_items->id .'"> '. $myforum_items->quest_article .' </p>
                </div>
                <div class="main-content-forumitem-rightside-top-about">
                  <div class="main-content-forumitem-rightside-top-about-comments">
                    <p> '. $count_com .' </p>
                  </div>
                </div>
              </div>
              <div class="main-content-forumitem-rightside-bot">
                <div class="main-content-forumitem-rightside-bot-text">
                  <p> '. $myforum_items->quest_text .' </p>
                </div>
              </div>
            </div>
          </div>
        ';
      }
    }
  }

?>