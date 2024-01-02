<?php
    include_once('../conn/db-connection.php');
    include_once('../class/Gymmis_model.php');

    $GYM = new GYMMIS_class();

	if(ISSET($_POST)){

        $idno = htmlspecialchars(strip_tags(stripslashes(trim(ucwords($_POST['idno'])))));
		$item_name = htmlspecialchars(strip_tags(stripslashes(trim(ucfirst($_POST['item_name'])))));
		$quantity = htmlspecialchars(strip_tags(stripslashes(trim($_POST['quantity']))));
		$price = htmlspecialchars(strip_tags(stripslashes(trim($_POST['price']))));
		$proinventory_id = htmlspecialchars(strip_tags(stripslashes(trim($_POST['proinventory_id']))));

		$add = $GYM->add_pos2($idno, $item_name, $quantity, $price, $proinventory_id);
       if($add == TRUE){
		      echo '<div class="example-alert"><div class="alert alert-success alert-icon"><em class="icon ni ni-check-circle"></em> <strong>Added Product Item Successfully!</strong></div></div><script> setTimeout(function() {  location.replace("main/pos_gymfee.php"); }, 1000); </script>';
		    

		    }else{
		    echo '<div class="alert alert-danger alert-icon"><em class="icon ni ni-cross-circle"></em> <strong>Added Product Item failed</strong></div><script> setTimeout(function() {  location.replace("main/pos_gymfee.php"); }, 1000); </script>';

	
		}
	}

?>

