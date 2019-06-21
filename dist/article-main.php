<main class="main">

  <div class="main-content">
    <div class="main-content-nav">
      <div class="main-content-nav-panel">
        <div class="main-content-nav-panel-search">
          <input type="text" maxlength="30" placeholder="Пошук..."/>
        </div>
        <div class="main-content-nav-panel-options">
          <div class="main-content-nav-panel-options-element main-content-nav-panel-options-element-3o"></div>
          <div class="main-content-nav-panel-options-element main-content-nav-panel-options-element-2o"></div>
          <div class="main-content-nav-panel-options-element main-content-nav-panel-options-element-filter"></div>
        </div>
      </div>
    </div>
    <div class="main-content-addnew">
      <div class="main-content-addnew-btn"></div>
    </div>
    
      <?php

      if ( isset($_SESSION['logged_user']) ) {

        echo
        '
          <div class="main-content-myarticle">
            <div class="main-content-myforum-begincont">
              <p class="main-content-myarticle-p"> Мої статті </p>
              <div class="main-content-myforum-img"></div>
            </div>
            <div class="article-cont" id="my" alt="On">
        ';
            include_once "__article-myitem.php";
        echo
        '
            </div>
          </div>
        ';

      }

      ?>

    <div class="main-content-artcileitems">
      <div class="main-content-myforum-begincont">
        <p class="main-content-articleitems-p"> Усі статті </p>
      </div>
      <div class="article-cont" alt="On">
      <?php include_once "__article-items.php"; ?>
      </div>
    </div>
  </div>

  <div class="hidden-forumadd">
    <div class="hidden-forumadd-block">
      <div class="hidden-forumadd-block-cont">
        <div class="hidden-forumadd-block-cont-article">
          <p> Опишіть тему статті </p>
        </div>
        <div class="hidden-forumadd-block-cont-info">
          <div class="hidden-forumadd-block-cont-inputs">
            <form method="POST" action="__article-additem.php">
              <div class="top-inputs">
                <input type="text" autocomplete="off" name="fr_pnl_question_h" placeholder="Опишіть тему статті..." maxlength="80" required oninvalid="this.setCustomValidity('Заповніть поле теми!')" />
                <input type="text" autocomplete="off" name="fr_pnl_type" placeholder="Спрямування..." maxlength="20" required oninvalid="this.setCustomValidity('Заповніть поле технології!')" />
              </div>
              <div class="middle-inputs">
                <div class="text-tr">
                   <textarea autocomplete="off" name="fr_pnl_tr" cols="30" rows="10" placeholder="Опишіть вашу тему детальніше..." required oninvalid="this.setCustomValidity('Заповніть поле запитання!')" id="textarea_for_text"></textarea>
                </div>
              </div>
              <div class="footer-inputs">
                <input type="submit" name="fr_pnl_btn" value="Відправити" />
              </div>
            </form>
          </div>
          <div class="hidden-forumadd-block-cont-opt">
            <div class="btn-pic"></div>
          </div>
        </div>    
      </div>
    </div>
  </div>

</main>