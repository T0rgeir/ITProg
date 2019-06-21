<header class="header">
  <nav class="top-nav">
    <div class="top-menu">
      <div class="top-menu-item top-menu-item-logo"></div>
      <div class="top-menu-item top-menu-item-profile">

      <?php if ( isset($_SESSION['logged_user']) ) :
        echo 
        '
          <div class="top-menu-item top-menu-item-profile-cont">
            <div class="top-menu-item top-menu-item-profile-nickname">
              <p>'.$_SESSION['logged_user']->login .'</p>
            </div>
            <div class="top-menu-item top-menu-item-profile-avatar">
              <img src="img/Posts-Items/avatar-1.png" />
            </div>
          </div>
        ';
      ?>
      <?php else : 
        echo 
        '
          <div class="top-menu-item-profile-login up">
            <p id="singup"> Увійти </p>
          </div>
        ';
      ?>
      <?php endif; ?>

      </div>
    </div>
  </nav>
  <nav class="middle-nav">
    <div class="menu">
      <div class="div menu-item menu-item-general-page" id="index">
        <p> Головна </p>
      </div>
      <div class="div menu-item menu-item-lang" id="langbook">
        <p> Довідники </p>
      </div>
      <div class="div menu-item menu-item-forum" id="forum">
        <p> Форум </p>
      </div>
      <div class="div menu-item menu-item-course" id="article">
        <p> Статті </p>
      </div>
      <div class="div menu-item menu-item-test" id="test">
        <p> Тести </p>
      </div>
    </div>
  </nav>
</header>