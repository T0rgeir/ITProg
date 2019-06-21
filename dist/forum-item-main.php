<main class="main">
  <div class="main-content">
    <div class="main-content-wrapper">

			<?php

			//require 'db.php';

			if ( isset($_GET['idForumItem']) ) {

				$idForumItem = $_GET['idForumItem'];
				$forum_item_inner = R::findAll('forum', 'id = ?', array($idForumItem));

				foreach ( $forum_item_inner as $forum_item_inner_in ) {
	    		
	    		echo
	    		'
						<div class="main-content-forum-item">
			        <div class="main-content-forum-item-header">
			          <div class="main-content-forum-item-header-date">
			            <p> '. $forum_item_inner_in->date .' </p>
			          </div>
			        </div>
			        <div class="main-content-forum-item-middle">
			          <div class="main-content-forum-item-middle-header">
			            <p> '. $forum_item_inner_in->quest_article .' </p>
			          </div>
			          <div class="main-content-forum-item-middle-photo-ganres"> 
			            <p> '. $forum_item_inner_in->quest_type .' </p>
			          </div>
			          <div class="main-content-forum-item-middle-text">
			            <p> '. $forum_item_inner_in->quest_text .' </p>
			          </div>
			          <div class="main-content-forum-item-middle-code">
			             '. $forum_item_inner_in->code .' 
			          </div>
			        </div>
			        <div class="main-content-forum-item-footer">
			          <div class="main-content-forum-item-footer-author">
			            <div class="main-content-forum-item-footer-author-name"><span> '. $forum_item_inner_in->login .' </span></div>
			            <div class="main-content-forum-item-footer-author-photo"></div>
			          </div>
			        </div>
			      </div>
	    		';

	    	}			
			} 
	
			?>

      <div class="main-content-forum-comments">
        <div class="main-content-forum-comments-content">
          <p>Коментарі</p>
          <div class="main-content-forum-comments-content-userpanel">

          	<?php

	          	if ( isset($_SESSION['logged_user']->login) ) {
	          		echo 
	          		'
	          			<textarea type="text" maxlength="400" placeholder="Коментуйте тут..." id="log" alt="'. $idForumItem .'"></textarea>
	          			<div class="main-content-forum-comments-content-userpanel-buttons">
			              <div class="main-content-forum-comments-content-userpanel-buttons-send userpanel-buttons"></div>
			              <div class="main-content-forum-comments-content-userpanel-buttons-clear userpanel-buttons"></div>
			            </div>
			            <input type="hidden" id="hidden-forum" value="'. $idForumItem .'" />
	          		';
	          	} else if ( !isset($_SESSION['logged_user']->login) ) {
	          		echo 
	          		'
	          			<textarea type="text" maxlength="400" placeholder="Ви не можете коментувати..." disabled id="unlog" alt="'. $idForumItem .'"></textarea>
	          			<div class="main-content-forum-comments-content-userpanel-buttons">
			              <div class="main-content-forum-comments-content-userpanel-buttons-send userpanel-buttons" disabled></div>
			              <div class="main-content-forum-comments-content-userpanel-buttons-clear userpanel-buttons" disabled></div>
			            </div>
			            <input type="hidden" id="hidden-forum" value="'. $idForumItem .'" />
	          		';
	          	}

          	?>
            
          </div>
          <div class="main-content-forum-comments-content-all">
          	
					<?php

						if ( isset($_SESSION['logged_user']->login) ) {

							$forum_comment = R::findAll('comments', 'id_forum_lg = ?', array($idForumItem));

							foreach ( $forum_comment as $forum_comment_inner ) {

							echo 
							'
								<div class="comment-item">
									<div class="header">
										<div class="header-nickname">
											<p> '. $forum_comment_inner->login .' </p>
										</div>
										<div class="header-date">
											<p> '. $forum_comment_inner->date .' </p> 
										</div>
									</div>
									<div class="middle">
										<div class="text">
											<p> '. $forum_comment_inner->comment .' </p>
										</div>
									</div>
								</div>
							';

							}

						} else {

							$forum_comment = R::findAll('comments', 'id_forum_unlg = ?', array($idForumItem));

							foreach ( $forum_comment as $forum_comment_inner ) {

							echo 
							'
								<div class="comment-item">
									<div class="header">
										<div class="header-nickname">
											<p> '. $forum_comment_inner->login .' </p>
										</div>
										<div class="header-date">
											<p> '. $forum_comment_inner->date .' </p> 
										</div>
									</div>
									<div class="middle">
										<div class="text">
											<p> '. $forum_comment_inner->comment .' </p>
										</div>
									</div>
								</div>
							';

							}

						}

					?>

          </div>
        </div>
      </div>
    </div>
  </div>
</main>