<?php
    include_once('../conn/db-connection.php');
    include_once('../class/Gymmis_model.php');

    $GYM = new GYMMIS_class();

	 if(isset($_POST['member_id'])){ 

        $name = htmlspecialchars(strip_tags(stripslashes(trim(ucwords($_POST['name'])))));
        $age = htmlspecialchars(strip_tags(stripslashes(trim(ucwords($_POST['age'])))));
        $sex = htmlspecialchars(strip_tags(stripslashes(trim(ucwords($_POST['sex'])))));
        $birthday = htmlspecialchars(strip_tags(stripslashes(trim(ucwords($_POST['birthday'])))));
        $plan = htmlspecialchars(strip_tags(stripslashes(trim(ucwords($_POST['plan'])))));
        $email_address = htmlspecialchars(strip_tags(stripslashes(trim(ucwords($_POST['email_address'])))));
        $contact_no = htmlspecialchars(strip_tags(stripslashes(trim(ucwords($_POST['contact_no'])))));
        $address = htmlspecialchars(strip_tags(stripslashes(trim(ucwords($_POST['address'])))));
        $joining_date = htmlspecialchars(strip_tags(stripslashes(trim(ucwords($_POST['joining_date'])))));
        $expiring_date = htmlspecialchars(strip_tags(stripslashes(trim(ucwords($_POST['expiring_date'])))));
        $member_id = htmlspecialchars(strip_tags(stripslashes(trim(ucwords($_POST['member_id'])))));

		$del = $GYM->archive_memberIndividual($name, $age, $sex, $birthday, $plan, $email_address, $contact_no, $address, $joining_date, $expiring_date, $member_id);

		   if($del == TRUE){
		      echo '<div class="example-alert"><div class="alert alert-success alert-icon"><em class="icon ni ni-check-circle"></em> <strong>Archive member Successfully!</strong></div></div><script> setTimeout(function() {  location.replace("main/members.php"); }, 1000); </script>';
		    

		    }else{
		    echo '<div class="alert alert-danger alert-icon"><em class="icon ni ni-cross-circle"></em> <strong>Archive member failed</strong></div><script> setTimeout(function() {  location.replace("main/members.php"); }, 1000); </script>';

	
		}

	}

?>

