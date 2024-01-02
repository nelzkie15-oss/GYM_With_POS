<?php
    include_once('../conn/db-connection.php');
    include_once('../class/Gymmis_model.php');

    $GYM = new GYMMIS_class();

	 if(isset($_POST)){ 
        

         $date1 = date("Y-m-d", strtotime(htmlspecialchars(strip_tags(stripslashes(trim($_POST['date1']))))));
	     $date2 = date("Y-m-d", strtotime(htmlspecialchars(strip_tags(stripslashes(trim($_POST['date2']))))));
	     $select_type = htmlspecialchars(strip_tags(stripslashes(trim($_POST['select_type']))));
         $categery_type = htmlspecialchars(strip_tags(stripslashes(trim(ucwords($_POST['categery_type'])))));

		$GYM->inventory_report($date1, $date2, $select_type, $categery_type);

	}

?>

