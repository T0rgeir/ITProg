<main class="main">
  <div class="main-content">
    <div class="main-content-items">
      <div class="main-content-navpanel">
        <div class="main-content-navpanel-item"></div>
      </div>
      <div class="main-content-items-blocks">

      <?php

        $test = R::findAll('test');

        foreach ( $test as $test_inner ) {

          echo
          '
            <div class="main-content-items-testblock" id="'. $test_inner->id .'">
              <div class="main-content-items-testblock-logo main-content-items-testblock-logo-'. $test_inner->logo .'"></div>
              <div class="main-content-items-testblock-text">
                <p> '. $test_inner->lg .' </p>
              </div>
              <div class="main-content-items-testblock-undertext">
                <p> '. $test_inner->text .' </p>
              </div>
            </div>
          ';

        }

      ?>

      </div>
    </div>
    <div class="right-sidebar">
      <div class="right-sidebar-item">
        <div class="right-sidebar-item-header">
          <p>База знань</p>
        </div>
        <div class="right-sidebar-item-main">
          
          <?php

            $test_sidebar = R::findAll('langbook');

            foreach ( $test_sidebar as $test_sidebar_inner ) {

              echo
              '
                <div class="right-sidebar-item-main-r">
                  <p> '. $test_sidebar_inner->name .' </p>
                </div>
              ';

            }

          ?>
          
        </div>
      </div>
    </div>
  </div>
</main>