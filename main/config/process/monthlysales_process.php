
<?php
   
    include_once('../conn/db-connection.php');
    include_once('../class/Gymmis_model.php');
    $GYM = new GYMMIS_class();

        if(ISSET($_POST)){
               $GYM->posmonthly_sales();

        }
?>