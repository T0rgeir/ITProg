<?php

	$sub = R::findAll('subs', 'login = ?', array($_SESSION['logged_user']->login));

	foreach ( $sub as $sub_inner ) {
	  echo 
	  '
	    <div class="subs-cont-item">
		    <div class="left">
		      <img src="img/Posts-Items/user.png" alt="">
		      <div class="info">
		        <p> '. $sub_inner->sub .' </p>
		      </div>        
		    </div>
		    <div class="right">
		      <div class="btn" id="subbtn" alt="'. $sub_inner->id .'"><p>Видалити</p></div>
		    </div>
		  </div>
	  ';
	}

?>