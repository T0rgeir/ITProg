<?php require 'db.php'; ?>

<div class="hidden-enter">
  <div class="hidden-enter-block">
    <div class="hidden-enter-block-account">
      <p>Увійти в акаунт</p>
    </div>
    <div class="hidden-enter-block-line">
      <div class="hidden-enter-block-line-loginbutton">
        <p>Увійти</p>
      </div>
      <div class="hidden-enter-block-line-registerbutton">
        <p>Реєструватись</p>
      </div>
    </div>
    <div class="hidden-enter-block-line-login">
      <div class="hidden-enter-block-line-login-options">
        <form method="POST" action="/__account-login.php">
          <div class="hidden-enter-block-line-login-options-loginpanel">
            <div class="hidden-enter-block-line-login-options-loginpanel-label">
              <p>Логін:</p>
            </div>
            <div class="hidden-enter-block-line-login-options-loginpanel-input">
              <input type="text" name="lg_pnl_login" autocomplete="off" maxlength="20" value="<?php echo @$data['lg_pnl_login']; ?>" placeholder="Ваш логін..." required="required" oninvalid="this.setCustomValidity('Введіть дані у правильному форматі')" oninput="setCustomValidity('')" />
            </div>
          </div>
          <div class="hidden-enter-block-line-login-options-passwordpanel">
            <div class="hidden-enter-block-line-login-options-passwordpanel-label">
              <p>Пароль:</p>
            </div>
            <div class="hidden-enter-block-line-login-options-passwordpanel-input">
              <input type="password" name="lg_pnl_pass" autocomplete="off" placeholder="Введіть ваш пароль..." required="required" oninvalid="this.setCustomValidity('Введіть дані у правильному форматі')" oninput="setCustomValidity('')" />
            </div>
          </div>
          <div class="hidden-enter-block-line-login-options-under">
            <div class="hidden-enter-block-line-login-options-enterbutton">
              <input type="submit" name="lg_pnl_btn" value="Увійти" />
              <input type="hidden" id="hidelgbtn" name="hidelgbtn" value="" />
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="hidden-enter-block-line-register">
      <div class="hidden-enter-block-line-register-options">
        <form method="POST" action="/__account-register.php">
          <div class="hidden-enter-block-line-register-options-loginpanel">
            <div class="hidden-enter-block-line-register-options-loginpanel-label">
              <p>Логін:</p>
            </div>
            <div class="hidden-enter-block-line-register-options-loginpanel-input">
              <input type="text" name="rg_pnl_login" autocomplete="off" minlength="6" maxlength="20" value="<?php echo  @$data['rg_pnl_login']; ?>" pattern="[A-Za-z]{6,}[0-9]{,3}" placeholder="Ваш логін..." required="required" oninvalid="this.setCustomValidity('Введіть дані у правильному форматі')" oninput="setCustomValidity('')" />
            </div>
          </div>
          <div class="hidden-enter-block-line-register-options-passwordpanel">
            <div class="hidden-enter-block-line-register-options-passwordpanel-label">
              <p>Пароль:</p>
            </div>
            <div class="hidden-enter-block-line-register-options-passwordpanel-input">
              <input type="password" name="rg_pnl_pass" autocomplete="off" pattern="[A-Za-z]{6,}[0-9]{,3}" placeholder="Введіть ваш пароль..." required="required" minlength="8" oninvalid="this.setCustomValidity('Введіть дані у правильному форматі')" oninput="setCustomValidity('')" />
            </div>
          </div>
          <div class="hidden-enter-block-line-register-options-passwordpanel-again">
            <div class="hidden-enter-block-line-register-options-passwordpanel-again-label">
              <p>Пароль:</p>
            </div>
            <div class="hidden-enter-block-line-register-options-passwordpanel-again-input">
              <input type="password" name="rg_pnl_repass" autocomplete="off" pattern="[A-Za-z]{6,}[0-9]{,3}" placeholder="Введіть ваш пароль повторно..." required="required" minlength="8" oninvalid="this.setCustomValidity('Введіть дані у правильному форматі')" oninput="setCustomValidity('')" />
            </div>
          </div>
          <div class="hidden-enter-block-line-register-options-emailpanel">
            <div class="hidden-enter-block-line-register-options-emailpanel-label">
              <p>Емейл:</p>
            </div>
            <div class="hidden-enter-block-line-register-options-emailpanel-input">
              <input type="text" name="rg_pnl_mail" autocomplete="off" value="<?php echo @$data['rg_pnl_mail']; ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="yourmail@gmail.com" required="required" oninvalid="this.setCustomValidity('Введіть дані у правильному форматі')" oninput="setCustomValidity('')" />
            </div>
          </div>
          <div class="hidden-enter-block-line-register-options-under">
            <div class="hidden-enter-block-line-register-options-enterbutton">
              <input type="submit" id="sub-reg" name="rg_pnl_btn" value="Далі" />
              <input type="hidden" id="hideregbtn" name="hideregbtn" value="" />
            </div>
            <div class="hidden-enter-block-line-register-options-remember">
              <input type="checkbox" id="chk-reg" />
              <p class="first">Користувацька угода</p>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="usertrue">
      <div class="usertrue-option">
        <p> Користувацька угода </p>
        <p> Ця Угода визначає умови використання Користувачами матеріалів і сайту ITProg </p>
        <span> 1. Загальні умови </span>
        <p> 1.1. Використання матеріалів і сервісів Сайту регулюється нормами чинного законодавства України. </p>
        <p> 1.2. Ця Угода є публічною офертою. Отримуючи доступ до матеріалів Сайту Користувач вважається таким, що приєдналося до даної Угоди. </p>
        <span> 2. Зобов'язання Користувача </span>
        <p> 2.1. Користувач погоджується не робити дій, які можуть розглядатися такими, що порушують українське законодавство або норми міжнародного права, у тому числі у сфері інтелектуальної власності, авторських і/або суміжних правах, а також будь-яких дій, які приводять або можуть привести до порушення нормальної роботи Сайту і сервісів Сайту. </p>
        <p> 2.2. Використання та копіювання інформації на Сайті дозволено. </p>
        <p> 2.3. Коментарі і інші записи Користувача на Сайті не повинні вступати в протиріччя з вимогами законодавства України і загальноприйнятих норм моралі і моральності. </p>
        <p> 2.4. Користувач попереджений про те, що Адміністрація Сайту не несе відповідальності за відвідування і використання ним зовнішніх ресурсів, посилання на які можуть міститися на сайті. </p>
        <p> 2.5. Користувач згоден з тим, що Адміністрація Сайту не несе відповідальності і не має прямих або непрямих зобов'язань перед Користувачем у зв'язку з будь-якими можливими або виниклими втратами або збитками, пов'язаними з будь-яким змістом Сайту, реєстрацією авторських прав і відомостями про таку реєстрацію, товарами або послугами, доступними на або отриманими через зовнішні сайти або ресурси або інші контакти Користувача, в які він вступив, використовуючи розміщену на Сайті інформацію або посилання на зовнішні ресурси. </p>
        <span> 3. Інші умови </span>
        <p> 3.1. Усі можливі спори, похідні від цієї Угоди або пов'язані з нею, підлягають вирішенню відповідно до чинного законодавства України. </p>
        <p> 3.2. Ніщо в Угоді не може розумітися як встановлення між Користувачем і Адміністрації Сайту агентських стосунків, стосунків товариства, стосунків по спільній діяльності, стосунків особистого найму, або якихось інших стосунків, прямо не передбачених Угодою. </p>
        <p> 3.3. Визнання судом якого-небудь положення Угоди недійсним або таким, що не підлягає примусовому виконанню не тягне за собою визнання недійсними інших положень Угоди. </p>
        <p> 3.4. Бездіяльність з боку Адміністрації Сайту у разі порушення ким-небудь з Користувачів положень Угоди не позбавляє Адміністрацію Сайту права зробити пізніше відповідні дії на захист своїх інтересів і захист авторських прав на матеріали Сайту, що охороняються відповідно до законодавства. </p>
        <span> Користувач підтверджує, що ознайомлений з усіма пунктами цієї Угоди і безумовно приймає їх. </span>
      </div>
    </div>
  </div>
</div>

<!-- 000000000000000000000000000000000000000000000000000000000000000 -->

<div class="hidden-userpage">
  <div class="hidden-userpage-block">

    <div class="hidden-userpage-block-account">
      <div class="hidden-userpage-block-account-lastsingup">
      </div>
      <div class="hidden-userpage-block-account-exit-btn">
        <form method="POST" action="/__account-logout.php">
          <input type="submit" value="" name="out_btn" />
        </form>
      </div>
    </div>

    <div class="hidden-userpage-block-infoline">
      <div class="hidden-userpage-block-infoline-leftcont">
        <div class="hidden-userpage-block-infoline-leftcont-avatar">
          <img src="img/Posts-Items/user.png" alt="" />
          <!--
          <div class="hidden-userpage-block-infoline-leftcont-avatar-score">
            <p> 0 </p>
          </div>
          -->
        </div>
        <div class="hidden-userpage-block-infoline-leftcont-info">
          <div class="hidden-userpage-block-infoline-leftcont-info-nickname">
            <p> <?php echo $_SESSION['logged_user']->login; ?> </p>
          </div>
          <div class="hidden-userpage-block-infoline-leftcont-info-about">
            <p> I'm default student. </p>
          </div>
        </div>
      </div>
      <div class="hidden-userpage-block-infoline-rightcont">
        <div class="hidden-userpage-block-infoline-rightcont-status">
        </div>
      </div>
    </div>

    <div class="hidden-userpage-block-menu">
      <div class="hidden-userpage-block-menu-cont">
        <div class="hidden-userpage-block-menu-cont-item"> <p class="item item-subscribe">Ваші підписки</p> </div>
        <div class="hidden-userpage-block-menu-cont-item"> <p class="item item-subscribers">Ваші підписники</p> </div>
        <div class="hidden-userpage-block-menu-cont-item"> <p class="item item-forum">Обране у форумі</p> </div>
      </div>
    </div>

    <div class="hidden-userpage-block-under">
      <div class="hidden-userpage-block-under-cont">

        <div class="subs-cont">
          <div class="subs-cont-items">
            <?php include "__account-sublist.php"; ?>
          </div>
        </div>

        <div class="subscribe-cont">
          <div class="subscribe-cont-items">
            <?php include "__account-subscriberslist.php"; ?>
          </div>
        </div>

        <div class="forum-cont">
          <?php include_once "__account-forum.php"; ?>
        </div>

      </div>
    </div>

  </div>
</div>

<!-- 00000000000000000000000000000000000000000000000000000000000000000000000 -->

<?php

  if ( isset($_GET['idForumItem']) ) {
    $idForumItem = $_GET['idForumItem'];
  } else if ( isset($_GET['idArticleItem']) ) {
    $idArticleItem = $_GET['idArticleItem'];
  }

?>

<div class="hidden-userpage-ath">
  <div class="hidden-userpage-block-ath">

    <div class="hidden-userpage-block-account-ath">
      <div class="hidden-userpage-block-account-lastsingup-ath">
      </div>
      <div class="hidden-userpage-block-account-exit-btn-ath">
      </div>
    </div>

    <div class="hidden-userpage-block-infoline-ath">
      <div class="hidden-userpage-block-infoline-leftcont-ath">
        <div class="hidden-userpage-block-infoline-leftcont-avatar-ath">
          <img src="img/Posts-Items/user.png" alt="" />
          <!--
          <div class="hidden-userpage-block-infoline-leftcont-avatar-score-ath">
            <p> 0 </p>
          </div>
          -->
        </div>
        <div class="hidden-userpage-block-infoline-leftcont-info-ath">
          <?php include "__account-another-login.php"; ?>
          <div class="hidden-userpage-block-infoline-leftcont-info-about-ath">
            <p> ... </p>
          </div>
        </div>
      </div>
      <div class="hidden-userpage-block-infoline-rightcont-ath">
        <div class="hidden-userpage-block-infoline-rightcont-status-ath">
        </div>
      </div>
    </div>

    <div class="hidden-userpage-block-menu-ath">
      <div class="hidden-userpage-block-menu-cont-ath">
        <div class="hidden-userpage-block-menu-cont-item-ath"> <p class="item item-subscribers">Підписники</p> </div>
        <div class="hidden-userpage-block-menu-cont-item-ath"> <p class="item item-article">Написані статті</p> </div>
        <div class="hidden-userpage-block-menu-cont-item-ath"> <p class="item item-forum">Запитання на форумі</p> </div>
      </div>
      <div class="hidden-userpage-block-sub-cont-item-ath">

        <?php

          if ( isset($_SESSION['logged_user']->login) ) {
            if ( isset($_GET['idArticleItem']) ) {
              echo '<div class="hidden-userpage-block-menu-sub-item-ath"> <p class="item item-sub-a" id="'. $idArticleItem .'">Підписатись</p></div>';
            } else if ( isset($_GET['idForumItem']) ) {
              echo '<div class="hidden-userpage-block-menu-sub-item-ath"> <p class="item item-sub" id="'. $idForumItem .'">Підписатись</p></div>';
            }
          }

        ?>
        
      </div>
    </div>

    <div class="hidden-userpage-block-under-ath">
      <div class="hidden-userpage-block-under-cont-ath">

        <div class="subscribe-cont-ath">
          <div class="subscribe-cont-items-ath">
            <?php include "__account-another-subslist.php"; ?>
          </div>
        </div>

        <div class="articles-cont-ath">
          <div class="articles-content-grid-items-ath">
            <div class="articles-content-grid-items-elements-area-ath">
             <?php include "__account-another-article.php"; ?>
            </div>
          </div>
        </div>

        <div class="forum-cont-ath">
          <?php include "__account-another-forumitems.php"; ?>
        </div>

      </div>
    </div>

  </div>
</div>