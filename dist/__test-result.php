<?php

	require "db.php";

	$hide = $_POST['hide'];
	$r_1 = $_POST['r_1'];
	$r_2 = $_POST['r_2'];
	$r_3 = $_POST['r_3'];
	$r_4 = $_POST['r_4'];
	$r_5 = $_POST['r_5'];

	$test_res = R::findOne('tests', 'id = ?', array($hide));
	$test_answers = explode('|', $test_res->true_quest);
	$count = 0;

	if ( $r_1 == $test_answers[0] ) { $count = $count + 1; $r0 = 1; } else { $r0 = 0; }
	if ( $r_2 == $test_answers[1] ) { $count = $count + 1; $r1 = 1; } else { $r1 = 0; }
	if ( $r_3 == $test_answers[2] ) { $count = $count + 1; $r2 = 1; } else { $r2 = 0; }
	if ( $r_4 == $test_answers[3] ) { $count = $count + 1; $r3 = 1; } else { $r3 = 0; }
	if ( $r_5 == $test_answers[4] ) { $count = $count + 1; $r4 = 1; } else { $r4 = 0; }

	header('Location: /test-item.php?testID='. $hide .'&count='. $count .'&r0='. $r0 .'&r1='. $r1 .'&r2='. $r2 .'&r3='. $r3 .'&r4='. $r4);

	
?>