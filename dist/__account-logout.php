<?php

	require 'db.php';

	$data = $_POST;

  if ( isset($data['out_btn']) ) {
    session_unset($_SESSION['logged_user']);
    header('Location: /'); 
  } 

?>