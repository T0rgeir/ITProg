<?php

  require 'db.php';

	$data = $_POST;
  if ( isset($data['rg_pnl_btn']) ) {

    $errors = array();
    
    if ( R::count('users', 'login = ?', array($data['rg_pnl_login'])) > 0 ) {
      $errors[] = 'Введений логін вже існує!';
    }

    if ( R::count('users', 'email = ?', array($data['rg_pnl_mail'])) > 0 ) {
      $errors[] = 'Користувач з введеною поштою вже існує!';
    }

    $hideregbtn = $_POST['hideregbtn'];
    if ( empty($errors) ) {
      //Register successful!
      $user = R::dispense('users');
      $user->login = $data['rg_pnl_login'];
      $user->email = $data['rg_pnl_mail'];
      $user->password = password_hash($data['rg_pnl_pass'], PASSWORD_DEFAULT);
      $user->regdate = date("d.m.y");
      R::store($user);
      header('Location:'. $hideregbtn);
      echo '<div> Ви успішно зареєстровані! </div>'. $hideregbtn;
    } else {
      header('Location:'. $hideregbtn);
      echo '<div>' .array_shift($errors). '</div>';
    }

  }  

?>