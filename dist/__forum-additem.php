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
      if ( isset($_POST['fr_pnl_code']) ) {
        $fr_pnl_code = $_POST['fr_pnl_code'];
        $user_forum = R::dispense('forum');
        $user_forum->login = $_SESSION['logged_user']->login;
        $user_forum->quest_article = $data['fr_pnl_question_h'];
        $user_forum->quest_type = $data['fr_pnl_type'];
        $user_forum->quest_text = $data['fr_pnl_tr'];
        $user_forum->code = '<pre><code>' . $fr_pnl_code . '</code></pre>';
        $user_forum->date = date('d.m.y');
        R::store($user_forum);
        header('Location: /forum.php');
      } else {
        $user_forum = R::dispense('forum');
        $user_forum->login = $_SESSION['logged_user']->login;
        $user_forum->quest_article = $data['fr_pnl_question_h'];
        $user_forum->quest_type = $data['fr_pnl_type'];
        $user_forum->quest_text = $data['fr_pnl_tr'];
        $user_forum->code = '';
        $user_forum->date = date('d.m.y');
        R::store($user_forum);
        header('Location: /forum.php');
      }
      
    } else {
      echo '<div>' .array_shift($errors). '</div>';
    }

  } else {
    header('Location: /forum.php');
  }

?>