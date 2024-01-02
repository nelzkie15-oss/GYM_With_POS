<?php
    include_once('../conn/db-connection.php');
    include_once('../class/Gymmis_model.php');

    $GYM = new GYMMIS_class();

	if(ISSET($_POST)){

        $full_name = htmlspecialchars(strip_tags(stripslashes(trim(ucwords($_POST['full_name'])))));
		$sex = htmlspecialchars(strip_tags(stripslashes(trim(ucfirst($_POST['sex'])))));
		$age = htmlspecialchars(strip_tags(stripslashes(trim($_POST['age']))));
		$date_ofbirth = htmlspecialchars(strip_tags(stripslashes(trim($_POST['date_ofbirth']))));
		$email_address = htmlspecialchars(strip_tags(stripslashes(trim($_POST['email_address']))));
		$address = htmlspecialchars(strip_tags(stripslashes(trim($_POST['address']))));
		$contact_no = htmlspecialchars(strip_tags(stripslashes(trim($_POST['contact_no']))));
		$username = htmlspecialchars(strip_tags(stripslashes(trim($_POST['username']))));
		$password = htmlspecialchars(strip_tags(stripslashes(trim($_POST['password']))));
		$role = htmlspecialchars(strip_tags(stripslashes(trim($_POST['role']))));
		$staff_id = htmlspecialchars(strip_tags(stripslashes(trim($_POST['staff_id']))));
		$encryptedID = htmlspecialchars(strip_tags(stripslashes(trim($_POST['encryptedID']))));
	
		$edit = $GYM->edit_staff($full_name, $sex, $age, $date_ofbirth, $email_address, $address, $contact_no, $username, $password, $role, $staff_id);
       if($edit == TRUE){
		      echo '<div class="example-alert"><div class="alert alert-success alert-icon"><em class="icon ni ni-check-circle"></em> <strong>Updated Staff Successfully!</strong></div></div><script> setTimeout(function() {  location.replace("main/view_staff.php?qZx3zYcwe9u02="'.$encryptedID.'); }, 1000); </script>';
		    

		    }else{
		    echo '<div class="alert alert-danger alert-icon"><em class="icon ni ni-cross-circle"></em> <strong>Updated Staff failed</strong></div><script> setTimeout(function() {  location.replace("main/view_staff.php?qZx3zYcwe9u02="'.$encryptedID.'); }, 1000); </script>';

	
		}
	}

?>

