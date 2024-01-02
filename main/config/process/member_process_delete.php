<?php
    include_once('../conn/db-connection.php');
    include_once('../class/Gymmis_model.php');

    $GYM = new GYMMIS_class();

	if(ISSET($_POST)){

		$member_id = htmlspecialchars(strip_tags(stripslashes(trim($_POST['member_id']))));

	
		$del = $GYM->delete_member($member_id);
       if($del == TRUE){
		      echo '<div class="example-alert"><div class="alert alert-success alert-icon"><em class="icon ni ni-check-circle"></em> <strong>Deleted Member Successfully!</strong></div></div><script> setTimeout(function() {  location.replace("main/members.php"); }, 1000); </script>';
		    

		    }else{
		    echo '<div class="alert alert-danger alert-icon"><em class="icon ni ni-cross-circle"></em> <strong>Deleted Member failed</strong></div><script> setTimeout(function() {  location.replace("main/members.php"); }, 1000); </script>';

	
		}
	}

?>

