<?php
    include_once('../conn/db-connection.php');
    include_once('../class/Gymmis_model.php');

    $GYM = new GYMMIS_class();

	 if(isset($_POST)){ 

        $username = htmlspecialchars(strip_tags(stripslashes(trim($_POST['username']))));
        $password = htmlspecialchars(strip_tags(stripslashes(trim($_POST['password']))));
        $staff_id = htmlspecialchars(strip_tags(stripslashes(trim($_POST['staff_id']))));
        $session_Staffid = htmlspecialchars(strip_tags(stripslashes(trim($_POST['session_Staffid']))));


		$edit = $GYM->change_Accountadmin($username, $password, $staff_id);

		   if($edit == TRUE){
		      echo '<div class="example-alert"><div class="alert alert-success alert-icon"><em class="icon ni ni-check-circle"></em> <strong>Change Account Successfully!</strong></div></div><script> setTimeout(function() {  location.replace("main/change_account.php?Yd45OilZ18dvXz="'.$session_Staffid.'); }, 1000); </script>';
		    

		    }else{
		    echo '<div class="alert alert-danger alert-icon"><em class="icon ni ni-cross-circle"></em> <strong>Change Account failed</strong></div><script> setTimeout(function() {  location.replace("main/change_account.php?Yd45OilZ18dvXz="'.$session_Staffid.'); }, 1000); </script>';

	
		}

	}

?>

