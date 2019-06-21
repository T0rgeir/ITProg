<?php

  require "db.php";

  // ERRORS //

  $data = $_POST;
  if( isset($data['fr_pnl_btn']) && isset($_SESSION['logged_user']) ) {

    $errors = array();

    if ( $data['fr_pnl_question_h'] == '' ) {
      $errors[] = 'Опишіть тему!';
    }

    if ( $data['fr_pnl_type'] == '' ) {
      $errors[] = 'Назвіть технологію!';
    }

    if ( $data['fr_pnl_tr'] == '' ) {
      $errors[] = 'Опишіть питання!'; 
    }

    if ( empty($errors) ) {
      // NICE
      $user_article = R::dispense('article');
      $user_article->login = $_SESSION['logged_user']->login;
      $user_article->quest_article = $data['fr_pnl_question_h'];
      $user_article->quest_type = $data['fr_pnl_type'];
      $user_article->quest_text = $data['fr_pnl_tr'];
      $user_article->date = date("d.m.y");
      R::store($user_article);
      header('Location: /article.php');
    } else {
      echo '<div>' .array_shift($errors). '</div>';
    }

  } else {
    header('Location: /article.php');
  }

?>