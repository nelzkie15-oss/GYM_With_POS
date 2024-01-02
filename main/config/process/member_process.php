<?php
    include_once('../conn/db-connection.php');
    include_once('../class/Gymmis_model.php');

    $GYM = new GYMMIS_class();

	if(ISSET($_POST)){

        $name = htmlspecialchars(strip_tags(stripslashes(trim(ucwords($_POST['name'])))));
        $age = htmlspecialchars(strip_tags(stripslashes(trim($_POST['age']))));
		$sex = htmlspecialchars(strip_tags(stripslashes(trim(ucfirst($_POST['sex'])))));
		$birthday = htmlspecialchars(strip_tags(stripslashes(trim($_POST['birthday']))));
		$plan = htmlspecialchars(strip_tags(stripslashes(trim($_POST['plan']))));
		$email_address = htmlspecialchars(strip_tags(stripslashes(trim($_POST['email_address']))));
		$contact_no = htmlspecialchars(strip_tags(stripslashes(trim($_POST['contact_no']))));
		$address = htmlspecialchars(strip_tags(stripslashes(trim($_POST['address']))));
		$joining_date = htmlspecialchars(strip_tags(stripslashes(trim($_POST['joining_date']))));
		$expiring_date = htmlspecialchars(strip_tags(stripslashes(trim($_POST['expiring_date']))));
	
		$add = $GYM->add_member($name, $age, $sex, $birthday, $plan, $email_address, $contact_no, $address, $joining_date, $expiring_date);
       if($add == TRUE){
		      echo '<div class="example-alert"><div class="alert alert-success alert-icon"><em class="icon ni ni-check-circle"></em> <strong>Added Member Successfully!</strong></div></div><script> setTimeout(function() {  location.replace("main/members.php"); }, 1000); </script>';
		    

		    }else{
		    echo '<div class="alert alert-danger alert-icon"><em class="icon ni ni-cross-circle"></em> <strong>Added Member failed</strong></div><script> setTimeout(function() {  location.replace("main/members.php"); }, 1000); </script>';

	
		}
	}

?>

