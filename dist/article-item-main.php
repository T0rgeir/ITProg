<main class="main">
  <div class="main-content">
    <div class="main-content-wrapper">

    <?php

      //require 'db.php';

      if ( isset($_GET['idArticleItem']) ) {

        $idArticleItem = $_GET['idArticleItem'];

        $forum_item_view = R::dispense('views');
        $forum_item_view->id_article = $idArticleItem;
        R::store($forum_item_view);

        $forum_item_inner = R::findAll('article', 'id = ?', array($idArticleItem));

        $forum_item_views = R::count('views', 'id_article = ?', array($idArticleItem));

        foreach ( $forum_item_inner as $forum_item_inner_in ) {

          $forum_item_likes = R::count('likes', 'id_article = ?', array($forum_item_inner_in->id));
          
          echo
          '
            <div class="main-content-acticle-item">
              <div class="main-content-acticle-item-header">
                <div class="main-content-acticle-item-header-date">
                  <p> '. $forum_item_inner_in->date .' </p>
                </div>
                <div class="main-content-acticle-item-header-statistics">
                  <div class="main-content-acticle-item-header-statistics-like">
                    <p> '. $forum_item_likes .' </p>
                  </div>
                  <div class="main-content-acticle-item-header-statistics-view">
                    <p> '. $forum_item_views .' </p>
                  </div>
                </div>
              </div>
              <div class="main-content-acticle-item-middle">
                <div class="main-content-acticle-item-middle-photo">
                  <div class="main-content-acticle-item-middle-photo-area"><img src="../../../../img/Posts-Items/p-1.png" alt=""/></div>
                </div>
                <div class="main-content-article-item-middle-header">
                  <p> '. $forum_item_inner_in->quest_article .' </p>
                </div>
                <div class="main-content-acticle-item-middle-photo-ganres"> 
                  <p> '. $forum_item_inner_in->quest_type .' </p>
                </div>
                <div class="main-content-acticle-item-middle-text">
                  <p> '. $forum_item_inner_in->quest_text .' </p>
                </div>
              </div>
              <div class="main-content-acticle-item-footer">
                <div class="main-content-acticle-item-footer-ratepanel">
                  ';

                  if ( isset($_SESSION['logged_user']->login) ) {
                    echo
                    '
                      <div id="'. $forum_item_inner_in->id .'" class="main-content-acticle-item-footer-ratepanel-likebutton"></div>
                    ';
                  } 

                echo '
                </div>
                <div class="main-content-acticle-item-footer-author">
                  <div class="main-content-acticle-item-footer-author-name"><span id="'. $forum_item_inner_in->id .'"> '. $forum_item_inner_in->login .' </span></div>
                  <div class="main-content-acticle-item-footer-author-photo"></div>
                </div>
              </div>
            </div>
          ';

        }     
      } 
  
    ?>

    </div>
  </div>
</main>