<?php
    include_once('../conn/db-connection.php');
    include_once('../class/Gymmis_model.php');

    $GYM = new GYMMIS_class();

	if(ISSET($_POST)){

		$quantity = htmlspecialchars(strip_tags(stripslashes(trim($_POST['quantity']))));
		$price = htmlspecialchars(strip_tags(stripslashes(trim($_POST['price']))));
		$proinventory_id = htmlspecialchars(strip_tags(stripslashes(trim($_POST['proinventory_id']))));
		$pos_id = htmlspecialchars(strip_tags(stripslashes(trim($_POST['pos_id']))));
	
		$edit = $GYM->edit_POSqty($quantity, $price, $proinventory_id, $pos_id);
       if($edit == 'true'){
		      echo '<div class="example-alert"><div class="alert alert-success alert-icon"><em class="icon ni ni-check-circle"></em> <strong>Update Quantity Successfully!</strong></div></div><script> setTimeout(function() {  location.replace("main/pos.php"); }, 1000); </script>';
		  }else if($edit == 'low_stock'){
		      echo '<div class="example-alert"><div class="alert alert-warning alert-icon"><em class="icon ni ni-cross-circle"></em> <strong>No Available Item!</strong></div></div><script> setTimeout(function() {  location.replace("main/pos.php"); }, 1000); </script>';
		    
  
		    }else{
		    echo '<div class="alert alert-danger alert-icon"><em class="icon ni ni-cross-circle"></em> <strong>Update Quantity failed</strong></div><script> setTimeout(function() {  location.replace("main/pos.php"); }, 1000); </script>';

	
		}
	}

?>

