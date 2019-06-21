<?php

  if ( !isset($_GET['idForumSearch']) ) {

    $user_forum_items = R::findAll('forum');
    foreach ( $user_forum_items as $forum_items ) {
      $count_com = R::count('comments', 'id_forum_lg = ?', array($forum_items->id));
      echo
      '
        <div class="main-content-forumitem" id="items" alt="On">
          <div class="main-content-forumitem-leftside">
            <div class="main-content-forumitem-leftside-featurebtn" id="'. $forum_items->id .'"></div>
          </div>
          <div class="main-content-forumitem-rightside">
            <div class="main-content-forumitem-rightside-top">
              <div class="main-content-forumitem-rightside-top-name">
                <p id="'. $forum_items->id .'"> '. $forum_items->quest_article .' </p>
              </div>
              <div class="main-content-forumitem-rightside-top-about">
                <div class="main-content-forumitem-rightside-top-about-comments">
                  <p> '. $count_com .' </p>
                </div>
              </div>
            </div>
            <div class="main-content-forumitem-rightside-bot">
              <div class="main-content-forumitem-rightside-bot-text">
                <p> '. $forum_items->quest_text .' </p>
              </div>
            </div>
          </div>
        </div>
      ';
    }

  } else if ( isset($_GET['idForumSearch']) ) {

    $idForumSearch = $_GET['idForumSearch'];
    $search = R::findAll('forum', 'quest_article LIKE ? ', array($idForumSearch));
    foreach ( $search as $search_item ) {
      echo
      '
        <div class="main-content-forumitem" id="items" alt="On">
          <div class="main-content-forumitem-leftside">
            <div class="main-content-forumitem-leftside-featurebtn" id="'. $forum_items->id .'"></div>
          </div>
          <div class="main-content-forumitem-rightside">
            <div class="main-content-forumitem-rightside-top">
              <div class="main-content-forumitem-rightside-top-name">
                <p id="'. $forum_items->id .'"> '. $forum_items->quest_article .' </p>
              </div>
              <div class="main-content-forumitem-rightside-top-about">
                <div class="main-content-forumitem-rightside-top-about-comments">
                  <p>14</p>
                </div>
                <div class="main-content-forumitem-rightside-top-about-views">
                  <p>67</p>
                </div>
              </div>
            </div>
            <div class="main-content-forumitem-rightside-bot">
              <div class="main-content-forumitem-rightside-bot-text">
                <p> '. $forum_items->quest_text .' </p>
              </div>
            </div>
          </div>
        </div>
      ';
    }

  }


?>