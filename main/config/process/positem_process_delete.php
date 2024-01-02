<?php
    include_once('../conn/db-connection.php');
    include_once('../class/Gymmis_model.php');

    $GYM = new GYMMIS_class();

	if(ISSET($_POST)){

		$pos_id = htmlspecialchars(strip_tags(stripslashes(trim($_POST['pos_id']))));

	
		$del = $GYM->delete_positem($pos_id);
       if($del == TRUE){
		      echo '<div class="example-alert"><div class="alert alert-success alert-icon"><em class="icon ni ni-check-circle"></em> <strong>Deleted POS Item Successfully!</strong></div></div><script> setTimeout(function() {  location.replace("main/pos.php"); }, 1000); </script>';
		    

		    }else{
		    echo '<div class="alert alert-danger alert-icon"><em class="icon ni ni-cross-circle"></em> <strong>Deleted POS Item failed</strong></div><script> setTimeout(function() {  location.replace("main/pos.php"); }, 1000); </script>';

	
		}
	}

?>

