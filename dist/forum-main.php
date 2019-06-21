<main class="main">
  <div class="main-content">
    <div class="main-content-nav">
      <div class="main-content-nav-panel">
        <div class="main-content-nav-panel-search">
          <input type="text" id="search_forum" name="search_forum" maxlength="30" placeholder="Пошук..."/>
          <div class="main-content-nav-panel-search-btn"></div>
        </div>
      </div>
    </div>

    <?php

    if ( isset($_SESSION['logged_user']) ) {
      echo
      '
        <div class="main-content-addnew">
          <div class="main-content-addnew-btn"></div>
        </div>
      ';
    } 

    if ( isset($_SESSION['logged_user']) ) {

      echo
      '
        <div class="main-content-myforum">
          <div class="main-content-myforum-begincont">
            <p class="main-content-myforum-p"> Мої запитання </p>
            <div class="main-content-myforum-img"></div>
          </div>
      ';
            include_once "__forum-myitems.php";
      echo
      '
        </div>
        <div class="main-content-frforum">
          <div class="main-content-frforum-begincont">
            <p class="main-content-frforum-p"> Збережені запитання </p>
            <div class="main-content-frforum-img"></div>
          </div>
      ';
          include_once "__forum-fritems.php";
      echo
      '
        </div>
      ';

    }

    ?>
    
    <div class="main-content-forumitems">
      <div class="main-content-forumitems-begincont">
        <p class="main-content-forumitems-p"> Усі запитання </p>
      </div>
      <?php include_once "__forum-items.php"; ?>
    </div>
  </div>

  <div class="hidden-forumadd">
    <div class="hidden-forumadd-block">
      <div class="hidden-forumadd-block-cont">
        <div class="hidden-forumadd-block-cont-article">
          <p> Опишіть своє запитання </p>
        </div>
        <div class="hidden-forumadd-block-cont-info">
          <div class="hidden-forumadd-block-cont-inputs">
            <form method="POST" action="__forum-additem.php">
              <div class="top-inputs">
                <input type="text" autocomplete="off" name="fr_pnl_question_h" placeholder="Опишіть тему запитання..." maxlength="80" required oninvalid="this.setCustomValidity('Заповніть поле теми!')" />
                <input type="text" autocomplete="off" name="fr_pnl_type" placeholder="Технологія..." maxlength="20" required oninvalid="this.setCustomValidity('Заповніть поле технології!')" />
              </div>
              <div class="middle-inputs">
                <div class="text-tr">
                   <textarea autocomplete="off" name="fr_pnl_tr" cols="30" rows="10" placeholder="Опишіть ваше питання детальніше..." maxlength="1000" required oninvalid="this.setCustomValidity('Заповніть поле запитання!')" id="textarea_for_text"></textarea>
                   <textarea autocomplete="off" name="fr_pnl_code" cols="30" rows="10" placeholder="Прикрипіть код..." maxlength="1000" id="textarea_for_code"></textarea>
                </div>
              </div>
              <div class="footer-inputs">
                <input type="submit" name="fr_pnl_btn" value="Відправити" />
              </div>
            </form>
          </div>
          <div class="hidden-forumadd-block-cont-opt">
            <div class="btn-code" id="0"></div>
          </div>
        </div>    
      </div>
    </div>
  </div>

</main>