<main class="main">
  <div class="main-content">
  
  <?php

    if ( isset($_GET['testID']) && !isset($_GET['count']) ) {

      $test = R::findOne('test', 'id = ?', array($_GET['testID']));

      echo
      '
        <div class="main-content-wrapper">   
          <div class="main-content-acticle-item">
            <form action="__test-result.php" method="POST">
            <div class="main-content-acticle-item-header">
            </div>
            <div class="main-content-acticle-item-middle">
              <div class="main-content-acticle-item-middle-photo">
                <div class="main-content-acticle-item-middle-photo-area"><img src="../../../../img/Posts-Items/p-1.png" alt=""/></div>
              </div>
              <div class="main-content-article-item-middle-header">
                <p> '. $test->text .' </p>
              </div>
              <div class="main-content-acticle-item-middle-photo-ganres"> 
                <p> '. $test->lg .' </p>
              </div>
              <div class="main-content-acticle-item-middle-text">
      ';

      $tests = R::findOne('tests', 'id = ?', array($_GET['testID']));
      $test_count_name = substr_count($tests->name, '|');
      $test_count_quest = substr_count($tests->quest, '|');

      $tests_ex_name = explode('|', $tests->name);
      $tests_ex_quest = explode('|', $tests->quest);
      $tests_ex_true = explode('|', $tests->true_quest);

      echo '<p> <b> 1. ' . $tests_ex_name[0] . '</b> </p>';
      echo '<p> <input type="radio" name="r_1" value="'. $tests_ex_quest[0] .'"> ' . $tests_ex_quest[0] . '</p>';
      echo '<p> <input type="radio" name="r_1" value="'. $tests_ex_quest[1] .'">' . $tests_ex_quest[1] . '</p>';
      echo '<p> <input type="radio" name="r_1" value="'. $tests_ex_quest[2] .'">' . $tests_ex_quest[2] . '</p>';

      echo '<p> <b> 2. ' . $tests_ex_name[1] . '</b> </p>';
      echo '<p> <input type="radio" name="r_2" value="'. $tests_ex_quest[3] .'">' . $tests_ex_quest[3] . '</p>';
      echo '<p> <input type="radio" name="r_2" value="'. $tests_ex_quest[4] .'">' . $tests_ex_quest[4] . '</p>';
      echo '<p> <input type="radio" name="r_2" value="'. $tests_ex_quest[5] .'">' . $tests_ex_quest[5] . '</p>';

      echo '<p> <b> 3. ' . $tests_ex_name[2] . '</b> </p>';
      echo '<p> <input type="radio" name="r_3" value="'. $tests_ex_quest[6] .'">' . $tests_ex_quest[6] . '</p>';
      echo '<p> <input type="radio" name="r_3" value="'. $tests_ex_quest[7] .'">' . $tests_ex_quest[7] . '</p>';
      echo '<p> <input type="radio" name="r_3" value="'. $tests_ex_quest[8] .'">' . $tests_ex_quest[8] . '</p>';

      echo '<p> <b> 4. ' . $tests_ex_name[3] . '</b> </p>';
      echo '<p> <input type="radio" name="r_4" value="'. $tests_ex_quest[9] .'">' . $tests_ex_quest[9] . '</p>';
      echo '<p> <input type="radio" name="r_4" value="'. $tests_ex_quest[10] .'">' . $tests_ex_quest[10] . '</p>';
      echo '<p> <input type="radio" name="r_4" value="'. $tests_ex_quest[11] .'">' . $tests_ex_quest[11] . '</p>';

      echo '<p> <b> 5. ' . $tests_ex_name[4] . '</b> </p>';
      echo '<p> <input type="radio" name="r_5" value="'. $tests_ex_quest[12] .'">' . $tests_ex_quest[12] . '</p>';
      echo '<p> <input type="radio" name="r_5" value="'. $tests_ex_quest[13] .'">' . $tests_ex_quest[13] . '</p>';
      echo '<p> <input type="radio" name="r_5" value="'. $tests_ex_quest[14] .'">' . $tests_ex_quest[14] . '</p>';

      echo 
      '
              </div>
            </div>
            <div class="main-content-acticle-item-footer">
              <input type="submit" name="submit" value="Завершити" class="btn" id="'. $test->id .'">
              <input type="hidden" name="hide" value="'. $_GET['testID'] .'" />
            </div>
            </form>
          </div>
        </div>
      ';

    } else if ( isset($_GET['testID']) && isset($_GET['count']) ) {

      $test = R::findOne('test', 'id = ?', array($_GET['testID']));

      echo
      '
        <div class="main-content-wrapper">   
          <div class="main-content-acticle-item">
            <form action="__test-result.php" method="POST">
            <div class="main-content-acticle-item-header">
            </div>
            <div class="main-content-acticle-item-middle">
              <div class="main-content-acticle-item-middle-photo">
                <div class="main-content-acticle-item-middle-photo-area"><img src="../../../../img/Posts-Items/p-1.png" alt=""/></div>
              </div>
              <div class="main-content-article-item-middle-header">
                <p> '. $test->text .' </p>
              </div>
              <div class="main-content-acticle-item-middle-photo-ganres"> 
                <p> '. $test->lg .' </p>
              </div>
              <div class="main-content-acticle-item-middle-text">
      ';

      $tests = R::findOne('tests', 'id = ?', array($_GET['testID']));
      $test_count_name = substr_count($tests->name, '|');
      $test_count_quest = substr_count($tests->quest, '|');

      $tests_ex_name = explode('|', $tests->name);
      $tests_ex_quest = explode('|', $tests->quest);
      $tests_ex_true = explode('|', $tests->true_quest);

      echo '<p> <b> 1. ' . $tests_ex_name[0] . '</b> </p>';

      if ( $_GET['r0'] == 0 ) {
        echo '<b style="color: red; margin-left: 20px;"> Неправильно </b>';
      }
      
      echo '<p> <input type="radio" name="r_1" value="фон сторінки"> ' . $tests_ex_quest[0] . '</p>';
      echo '<p> <input type="radio" name="r_1" value="фон комірки">' . $tests_ex_quest[1] . '</p>';
      echo '<p> <input type="radio" name="r_1" value="всі відповіді вірні">' . $tests_ex_quest[2] . '</p>';

      echo '<p> <b> 2. ' . $tests_ex_name[1] . '</b> </p>';

      if ( $_GET['r1'] == 0 ) {
        echo '<b style="color: red; margin-left: 20px;"> Неправильно </b>';
      }

      echo '<p> <input type="radio" name="r_2" value="html">' . $tests_ex_quest[3] . '</p>';
      echo '<p> <input type="radio" name="r_2" value="caption">' . $tests_ex_quest[4] . '</p>';
      echo '<p> <input type="radio" name="r_2" value="body">' . $tests_ex_quest[5] . '</p>';

      echo '<p> <b> 3. ' . $tests_ex_name[2] . '</b> </p>';

      if ( $_GET['r2'] == 0 ) {
        echo '<b style="color: red; margin-left: 20px;"> Неправильно </b>';
      }

      echo '<p> <input type="radio" name="r_3" value="a href = "page1.html"">' . $tests_ex_quest[6] . '</p>';
      echo '<p> <input type="radio" name="r_3" value="a src = "page1.html"">' . $tests_ex_quest[7] . '</p>';
      echo '<p> <input type="radio" name="r_3" value="img href = "page.html"">' . $tests_ex_quest[8] . '</p>';

      echo '<p> <b> 4. ' . $tests_ex_name[3] . '</b> </p>';

      if ( $_GET['r3'] == 0 ) {
        echo '<b style="color: red; margin-left: 20px;"> Неправильно </b>';
      }

      echo '<p> <input type="radio" name="r_4" value="шрифт тексту">' . $tests_ex_quest[9] . '</p>';
      echo '<p> <input type="radio" name="r_4" value="розмір тексту">' . $tests_ex_quest[10] . '</p>';
      echo '<p> <input type="radio" name="r_4" value="стиль тексту">' . $tests_ex_quest[11] . '</p>';

      echo '<p> <b> 5. ' . $tests_ex_name[4] . '</b> </p>';

      if ( $_GET['r4'] == 0 ) {
        echo '<b style="color: red; margin-left: 20px;"> Неправильно </b>';
      }

      echo '<p> <input type="radio" name="r_5" value="tr">' . $tests_ex_quest[12] . '</p>';
      echo '<p> <input type="radio" name="r_5" value="th">' . $tests_ex_quest[13] . '</p>';
      echo '<p> <input type="radio" name="r_5" value="td">' . $tests_ex_quest[14] . '</p>';

      echo 
      '
              </div>
            </div>
            <div class="main-content-acticle-item-footer">
              <p> Кількість правильних відповідей: <b> '. $_GET['count'] .'</b> </p>
              <div class="btn-tests"> <p> Повернутись до тестів </p> </div>
            </div>
            </form>
          </div>
        </div>
      ';

    }

  ?>

  </div>
</main>