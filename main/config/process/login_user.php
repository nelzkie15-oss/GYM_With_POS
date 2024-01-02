
<?php
   // session_start();
    include_once('../conn/db-connection.php');
    include_once('../class/Gymmis_model.php');
    $GYM = new GYMMIS_class();

        if(ISSET($_POST)){

              $username = htmlspecialchars(strip_tags(stripslashes(trim($_POST['username']))));
              $password = htmlspecialchars(strip_tags(stripslashes(trim($_POST['password']))));

               $GYM->Login_user($username, $password);

        }
?>