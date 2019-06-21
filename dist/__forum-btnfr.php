<?php

    require "db.php";

    if ( isset($_SESSION['logged_user']->login) ) {

        if ( isset($_GET['idAddFrBtn']) ) {

            $idAddFrBtn = $_GET['idAddFrBtn'];

            $user_forum_btn = R::findOne('forum', 'id = ?', array($idAddFrBtn));

            if ( $user_forum_btn->login != $_SESSION['logged_user']->login ) {

                $user_forum_btnFR = R::dispense('forumfr');
                $user_forum_btnFR->id_fr = $user_forum_btn->id;
                $user_forum_btnFR->login = $_SESSION['logged_user']->login;
                $user_forum_btnFR->login_author = $user_forum_btn->login;
                $user_forum_btnFR->quest_article = $user_forum_btn->quest_article;
                $user_forum_btnFR->quest_type = $user_forum_btn->quest_type;
                $user_forum_btnFR->quest_text = $user_forum_btn->quest_text;
                R::store($user_forum_btnFR);

                header('Location: /forum.php');

            } else {
                header('Location: /forum.php');
            }

        }

    } else {
        header('Location: /forum.php');
    }
    

?>