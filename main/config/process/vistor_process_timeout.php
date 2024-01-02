<?php
    include_once('../conn/db-connection.php');
    include_once('../class/Gymmis_model.php');

    $GYM = new GYMMIS_class();

	if(ISSET($_POST)){


        $name = htmlspecialchars(strip_tags(stripslashes(trim(ucwords($_POST['name'])))));

		$time = $GYM->add_visitor($name);
        if($time == 'out'){
		    echo '<div class="alert alert-danger alert-icon"><em class="icon ni ni-cross-circle"></em> <strong>Time Out Visitor Successfully!</strong></div><script> setTimeout(function() {  location.replace("main/visitor.php"); }, 1000); </script>';

	
		}
	}

?>

