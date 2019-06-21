<?php

	$sub = R::findAll('subs', 'sub = ?', array($_SESSION['logged_user']->login));

  foreach ( $sub as $sub_inner ) {
    echo 
    '
	    <div class="subscribe-cont-item">
		    <div class="left">
		      <img src="img/Posts-Items/user.png" alt="">
		      <div class="info">
		        <p> '. $sub_inner->login .' </p>
		      </div>        
		    </div>
		    <div class="right">
		      <div class="btn" id="btnsubscribe" alt="'. $sub_inner->login .'"><p>Підписатись</p></div>
		    </div>
		  </div>
    ';
	}

?>