<?php
    include_once('../conn/db-connection.php');
    include_once('../class/Gymmis_model.php');

    $GYM = new GYMMIS_class();

	if(ISSET($_POST)){


        $name = htmlspecialchars(strip_tags(stripslashes(trim(ucwords($_POST['name'])))));

		$time = $GYM->add_visitor($name);
       if($time == 'in'){
		      echo '<div class="example-alert"><div class="alert alert-success alert-icon"><em class="icon ni ni-check-circle"></em> <strong>Time In Visitor Successfully!</strong></div></div><script> setTimeout(function() {  location.replace("main/visitor.php"); }, 1000); </script>';
		    

		    }
	}

?>

