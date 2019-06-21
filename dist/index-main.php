<main class="main">
  <div class="main-content">

    <?php

      if ( isset($_SESSION['logged_user']->login) ) {

        $user_indexLogins = R::findAll('subs', 'login = ?', array($_SESSION['logged_user']->login));

        foreach ( $user_indexLogins as $user_indexLogins_inner ) {

          $sub_articles = $user_indexLogins_inner->sub;
          $user_index = R::findAll('article', 'login = ?', array($sub_articles));
          foreach ( $user_index as $user_index_inner ) {

            $user_indexLikes = R::count('likes', 'id_article = ?', array($user_index_inner->id));

            $user_indexViews = R::count('views', 'id_article = ?', array($user_index_inner->id));

            echo 
            '
              <div class="main-content-item">
                <div class="main-content-item-header">
                  <div class="main-content-item-header-nav">
                    <div class="main-content-item-header-nav-date">
                      <p> '. $user_index_inner->date .' </p>
                    </div>
                  </div>
                  <div class="main-content-item-header-article">
                    <p> '. $user_index_inner->quest_article .' </p>
                  </div>
                  <div class="main-content-item-header-tags">
                    <p> '. $user_index_inner->quest_type .' </p>
                  </div>
                </div>
                <div class="main-content-item-middle">
                  <div class="main-content-item-middle-text">
                    <p> '. $user_index_inner->quest_text .' </p>
                  </div>
                  <div class="main-content-item-middle-photo">
                    <div class="main-content-item-middle-photo-area"><img src="../../../../img/Posts-Items/image-20160712-9264-zt66ib.jpg" alt=""/></div>
                  </div>
                </div>
                <div class="main-content-item-footer">
                  <div class="main-content-item-footer-morebutton">
                    <p id="'. $user_index_inner->id .'" > Читати далі... </p>
                  </div>
                  <div class="main-content-item-footer-ratepanel">
            ';
          
                if ( isset($_SESSION['logged_user']->login) ) {

                  echo 
                  '
                    <div class="main-content-item-footer-ratepanel-likebutton">
                      <p id="'. $user_index_inner->id .'"> '. $user_indexLikes .' </p>
                    </div>
                  ';

                }
                  
            echo 
            '
                    <div class="main-content-item-footer-ratepanel-watch">
                      <p> '. $user_indexViews .' </p>
                    </div>
                  </div>
                </div>
              </div>
            ';
          }

        }

        $user_index_i = R::findAll('article', 'login = ?', array('administrator'));
        foreach ( $user_index_i as $user_index_i_inner ) {

          $user_indexLikes_i = R::count('likes', 'id_article = ?', array($user_index_i_inner->id));

          $user_indexViews_i = R::count('views', 'id_article = ?', array($user_index_i_inner->id));

          echo 
          '
            <div class="main-content-item">
              <div class="main-content-item-header">
                <div class="main-content-item-header-nav">
                  <div class="main-content-item-header-nav-date">
                    <p> '. $user_index_i_inner->date .' </p>
                  </div>
                </div>
                <div class="main-content-item-header-article">
                  <p> '. $user_index_i_inner->quest_article .' </p>
                </div>
                <div class="main-content-item-header-tags">
                  <p> '. $user_index_i_inner->quest_type .' </p>
                </div>
              </div>
              <div class="main-content-item-middle">
                <div class="main-content-item-middle-text">
                  <p> '. $user_index_i_inner->quest_text .' </p>
                </div>
                <div class="main-content-item-middle-photo">
                  <div class="main-content-item-middle-photo-area"><img src="../../../../img/Posts-Items/image-20160712-9264-zt66ib.jpg" alt=""/></div>
                </div>
              </div>
              <div class="main-content-item-footer">
                <div class="main-content-item-footer-morebutton">
                  <p id="'. $user_index_i_inner->id .'" > Читати далі... </p>
                </div>
                <div class="main-content-item-footer-ratepanel">
          ';

                if ( isset($_SESSION['logged_user']->login) ) {

                  echo 
                  '
                    <div class="main-content-item-footer-ratepanel-likebutton">
                      <p id="'. $user_index_i_inner->id .'"> '. $user_indexLikes_i .' </p>
                    </div>
                  ';

                }
                  
          echo 
          '
                  <div class="main-content-item-footer-ratepanel-watch">
                    <p> '. $user_indexViews_i .' </p>
                  </div>
                </div>
              </div>
            </div>
          ';
        }
        

      } else if ( !isset($_SESSION['logged_user']->login) ) {
        $user_index = R::findAll('article', 'login = ?', array('administrator'));
        foreach ( $user_index as $user_index_inner ) {

          $user_indexLikes = R::count('likes', 'id_article = ?', array($user_index_inner->id));

          $user_indexViews = R::count('views', 'id_article = ?', array($user_index_inner->id));
          
          echo 
          '
            <div class="main-content-item">
              <div class="main-content-item-header">
                <div class="main-content-item-header-nav">
                  <div class="main-content-item-header-nav-date">
                    <p> '. $user_index_inner->date .' </p>
                  </div>
                </div>
                <div class="main-content-item-header-article">
                  <p> '. $user_index_inner->quest_article .' </p>
                </div>
                <div class="main-content-item-header-tags">
                  <p> '. $user_index_inner->quest_type .' </p>
                </div>
              </div>
              <div class="main-content-item-middle">
                <div class="main-content-item-middle-text">
                  <p> '. $user_index_inner->quest_text .' </p>
                </div>
                <div class="main-content-item-middle-photo">
                  <div class="main-content-item-middle-photo-area"><img src="../../../../img/Posts-Items/image-20160712-9264-zt66ib.jpg" alt=""/></div>
                </div>
              </div>
              <div class="main-content-item-footer">
                <div class="main-content-item-footer-morebutton">
                  <p id="'. $user_index_inner->id .'"> Читати далі... </p>
                </div>
                <div class="main-content-item-footer-ratepanel">
          ';
                if ( isset($_SESSION['logged_user']->login) ) {

                  echo 
                  '
                    <div class="main-content-item-footer-ratepanel-likebutton">
                      <p id="'. $user_index_inner->id .'"> '. $user_indexLikes .' </p>
                    </div>
                  ';

                }
                  
          echo 
          '
                  <div class="main-content-item-footer-ratepanel-watch">
                    <p> '. $user_indexViews .' </p>
                  </div>
                </div>
              </div>
            </div>
          ';
        }
      }

    ?>

  </div>

  <!-- Sidebar (side elements and secondary info)-->
  <div class="right-sidebar">
    <div class="right-sidebar-item sidebar-search">
      <div class="sidebar-search-header">
        <div class="sidebar-search-header-article">
          <p> Пошук </p>
        </div>
      </div>
      <div class="sidebar-search-content">
        <input type="text" placeholder="Тут повинен бути текст..."/>
        <div class="main-content-nav-panel-search-btn"></div>
      </div>
    </div>
    <div class="right-sidebar-item sidebar-newsbar">
      <div class="sidebar-newsbar-header">
        <div class="sidebar-newsbar-header-article">
          <p> Полулярні новини </p>
        </div>
        <div class="sidebar-newsbar-header-morebutton">
          <div class="sidebar-newsbar-header-morebutton-iconsheet"></div>
        </div>
      </div>
      <div class="sidebar-newsbar-content">

      <?php

      $forum_item_inner = R::findAll('article', 'LIMIT 5');

      foreach ( $forum_item_inner as $forum_item_inner_in ) {

        echo
        '
          <div class="sidebar-newsbar-content-item" id="'.$forum_item_inner_in->id  .'">
            <div class="sidebar-newsbar-content-item-logo"></div>
            <div class="sidebar-newsbar-content-item-textbar">
              <div class="sidebar-newsbar-content-item-header">
                <p> '. $forum_item_inner_in->quest_article .' </p>
              </div>
              <div class="sidebar-newsbar-content-item-text">
                <p> '. $forum_item_inner_in->quest_text .' </p>
              </div>
            </div>
          </div>
        ';

      }

      ?>

      </div>
    </div>
    <div class="right-sidebar-item sidebar-test">
      <div class="sidebar-test-header">
        <div class="sidebar-test-header-article">
          <p> Тестування </p>
        </div>
        <div class="sidebar-test-header-morebutton">
          <div class="sidebar-test-header-morebutton-iconsheet"></div>
        </div>
      </div>
      <div class="sidebar-test-content">

        <?php

        $test = R::findAll('test');

        foreach ( $test as $test_inner ) {

          echo
          '
            <div class="sidebar-test-content-testitem sidebar-test-content-testitem-'. $test_inner->id .'" id="'. $test_inner->id .'"></div>
          ';

        }

        ?>
        
      </div>
    </div>
  </div>
</main>