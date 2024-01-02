<?php
    include_once('../conn/db-connection.php');
    include_once('../class/Gymmis_model.php');

    $GYM = new GYMMIS_class();

	if(ISSET($_POST)){

        $name = htmlspecialchars(strip_tags(stripslashes(trim(ucwords($_POST['name'])))));
        $date1 = htmlspecialchars(strip_tags(stripslashes(trim($_POST['date1']))));
		$date2 = htmlspecialchars(strip_tags(stripslashes(trim(ucfirst($_POST['date2'])))));

	
	}

?>

