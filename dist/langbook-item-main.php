<main class="main">
  <div class="main-content">
    <div class="main-content-wrapper">

    <?php

      //require 'db.php';

      if ( isset($_GET['lg_num']) && isset($_GET['lg_items']) ) {

        $lg_num = $_GET['lg_num'];
        $lg_items = $_GET['lg_items'];

        $lg = R::findAll('langbookitems', 'id = ? AND id_items = ?', array($lg_num, $lg_items));

        foreach ( $lg as $lg_inner ) {
          
          echo
          '
            <div class="main-content-acticle-item">
              <div class="main-content-acticle-item-header">
              </div>
              <div class="main-content-acticle-item-middle">
                <div class="main-content-acticle-item-middle-photo">
                  <div class="main-content-acticle-item-middle-photo-area"><img src="../../../../img/Posts-Items/p-1.png" alt=""/></div>
                </div>
                <div class="main-content-article-item-middle-header">
                  <p> '. $lg_inner->name .' </p>
                </div>
                <div class="main-content-acticle-item-middle-text">
                  <p> '. $lg_inner->text .' </p>
                </div>
              </div>
              <div class="main-content-acticle-item-footer">
              </div>
            </div>
          ';

        }     
      } 
  
    ?>

    </div>
  </div>
</main>