<?php

	if ( isset($_GET['idForumItem']) ) {

    $idForumItem = $_GET['idForumItem'];
    $forum_item_inner = R::findOne('forum', 'id = ?', array($idForumItem));

		$forum = R::findAll('forum', 'login = ?', array($forum_item_inner->login));

	  foreach ( $forum as $forum_inner ) {
	    echo 
	    '
		    <div class="forum-content-forumitem-ath">
          <div class="forum-content-forumitem-leftside-ath">
          </div>
          <div class="forum-content-forumitem-rightside-ath">
            <div class="forum-content-forumitem-rightside-top-ath">
              <div class="forum-content-forumitem-rightside-top-name-ath">
                <p id="'. $forum_inner->id .'"> '. $forum_inner->quest_article .' </p>
              </div>
              <div class="forum-content-forumitem-rightside-top-about-ath">
              </div>
            </div>
            <div class="forum-content-forumitem-rightside-bot-ath">
              <div class="forum-content-forumitem-rightside-bot-text-ath">
                <p> '. $forum_inner->quest_text .' </p>
              </div>
            </div>
          </div>
        </div>
	    ';
  	}

	} else if ( isset($_GET['idArticleItem']) ) {

    $idArticleItem = $_GET['idArticleItem'];
    $forum_item_inner = R::findOne('forum', 'id = ?', array($idArticleItem));
    $forum = R::findAll('forum', 'login = ?', array($forum_item_inner->login));

    foreach ( $forum as $forum_inner ) {
      echo 
      '
        <div class="forum-content-forumitem-ath">
          <div class="forum-content-forumitem-leftside-ath">
          </div>
          <div class="forum-content-forumitem-rightside-ath">
            <div class="forum-content-forumitem-rightside-top-ath">
              <div class="forum-content-forumitem-rightside-top-name-ath">
                <p id="'. $forum_inner->id .'"> '. $forum_inner->quest_article .' </p>
              </div>
              <div class="forum-content-forumitem-rightside-top-about-ath">
              </div>
            </div>
            <div class="forum-content-forumitem-rightside-bot-ath">
              <div class="forum-content-forumitem-rightside-bot-text-ath">
                <p> '. $forum_inner->quest_text .' </p>
              </div>
            </div>
          </div>
        </div>
      ';
    }


  }

?>