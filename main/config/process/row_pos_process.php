<?php
    include_once('../conn/db-connection.php');
    include_once('../class/Gymmis_model.php');

    $GYM = new GYMMIS_class();

	 if(isset($_POST['pos_id'])){ 

        $pos_id = htmlspecialchars(strip_tags(stripslashes(trim(ucwords($_POST['pos_id'])))));

		$GYM->row_posqty($pos_id);

	}

?>

