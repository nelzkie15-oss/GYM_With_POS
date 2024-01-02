<?php
    include_once('../conn/db-connection.php');
    include_once('../class/Gymmis_model.php');

    $GYM = new GYMMIS_class();

	if(ISSET($_POST)){

        $plan_name = htmlspecialchars(strip_tags(stripslashes(trim(ucwords($_POST['plan_name'])))));
        $description = htmlspecialchars(strip_tags(stripslashes(trim(ucwords($_POST['description'])))));
		$amount = htmlspecialchars(strip_tags(stripslashes(trim($_POST['amount']))));

	
		$add = $GYM->add_plan($plan_name, $description, $amount);
       if($add == TRUE){
		      echo '<div class="example-alert"><div class="alert alert-success alert-icon"><em class="icon ni ni-check-circle"></em> <strong>Added Plan Successfully!</strong></div></div><script> setTimeout(function() {  location.replace("main/plan.php"); }, 1000); </script>';
		    

		    }else{
		    echo '<div class="alert alert-danger alert-icon"><em class="icon ni ni-cross-circle"></em> <strong>Added Plan failed</strong></div><script> setTimeout(function() {  location.replace("main/plan.php"); }, 1000); </script>';

	
		}
	}

?>

