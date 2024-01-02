<?php
    include_once('../conn/db-connection.php');
    include_once('../class/Gymmis_model.php');

    $GYM = new GYMMIS_class();

	if(ISSET($_POST)){

        $product = htmlspecialchars(strip_tags(stripslashes(trim(ucwords($_POST['product'])))));
        $quantity = htmlspecialchars(strip_tags(stripslashes(trim(ucwords($_POST['quantity'])))));
		$description = htmlspecialchars(strip_tags(stripslashes(trim($_POST['description']))));
		$expiration_date = htmlspecialchars(strip_tags(stripslashes(trim(ucwords($_POST['expiration_date'])))));
        $price = htmlspecialchars(strip_tags(stripslashes(trim(ucwords($_POST['price'])))));
		$brand = htmlspecialchars(strip_tags(stripslashes(trim($_POST['brand']))));
        $date_ofpurchased = htmlspecialchars(strip_tags(stripslashes(trim($_POST['date_ofpurchased']))));
        $reason = htmlspecialchars(strip_tags(stripslashes(trim($_POST['reason']))));
        $status = 'stock out';
        $select_type = 'PRODUCT_INVENTORY';
	
		$add = $GYM->add_productInventory2($product, $quantity, $description, $expiration_date, $price, $brand, $date_ofpurchased, $reason, $status, $select_type);
       if($add == TRUE){
		      echo '<div class="example-alert"><div class="alert alert-success alert-icon"><em class="icon ni ni-check-circle"></em> <strong>Added Product Inventory Stock Out Successfully!</strong></div></div><script> setTimeout(function() {  location.replace("main/product_inventory.php"); }, 1000); </script>';
		    

		    }else{
		    echo '<div class="alert alert-danger alert-icon"><em class="icon ni ni-cross-circle"></em> <strong>Added Product Inventory Stock Out failed</strong></div><script> setTimeout(function() {  location.replace("main/product_inventory.php"); }, 1000); </script>';

	
		}
	}

?>

