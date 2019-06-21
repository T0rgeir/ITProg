<?php

  require 'db.php';

	$data = $_POST;
  if ( isset($data['lg_pnl_btn']) ) {

    $errors = array();
    $user = R::findOne('users', 'login = ?', array($data['lg_pnl_login']));

    $hidelgbtn = $_POST['hidelgbtn'];
    if ( $user ) {
      // Login successful!
      if ( password_verify($data['lg_pnl_pass'], $user->password) ) {
        // So good!
        $_SESSION['logged_user'] = $user;
        header('Location:'. $hidelgbtn);
      } else {
        header('Location:'. $hidelgbtn);
        $errors[] = 'Пароль введено неправильно!';
      }
    } else {
      header('Location:'. $hidelgbtn);
      $errors[] = 'Користувача з таким логіном не існує!';
    }

    if ( ! empty($errors) ) {
      header('Location:'. $hidelgbtn);
      echo '<div>' .array_shift($errors). '</div>';
    }

  }

?>
