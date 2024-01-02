<?php
    include_once('../conn/db-connection.php');
    include_once('../class/Gymmis_model.php');

    $GYM = new GYMMIS_class();

	if(ISSET($_POST)){

        $equipments = htmlspecialchars(strip_tags(stripslashes(trim(ucwords($_POST['equipments'])))));
        $size = htmlspecialchars(strip_tags(stripslashes(trim(ucwords($_POST['size'])))));
		$date_ofpurchase = htmlspecialchars(strip_tags(stripslashes(trim($_POST['date_ofpurchase']))));
		$color = htmlspecialchars(strip_tags(stripslashes(trim(ucwords($_POST['color'])))));
        $weight = htmlspecialchars(strip_tags(stripslashes(trim(ucwords($_POST['weight'])))));
		$quantity = htmlspecialchars(strip_tags(stripslashes(trim($_POST['quantity']))));
        $brand_name = htmlspecialchars(strip_tags(stripslashes(trim($_POST['brand_name']))));
        $reason = htmlspecialchars(strip_tags(stripslashes(trim($_POST['reason']))));
        $status = 'stock out';
        $select_type = 'EQUIPMENT_INVENTORY';
	
		$add = $GYM->add_equipmentInventory2($equipments, $size, $date_ofpurchase, $color, $weight, $quantity, $brand_name, $reason, $status, $select_type);
       if($add == TRUE){
		      echo '<div class="example-alert"><div class="alert alert-success alert-icon"><em class="icon ni ni-check-circle"></em> <strong>Added Equipment Inventory Stock Out Successfully!</strong></div></div><script> setTimeout(function() {  location.replace("main/equipment_inventory.php"); }, 1000); </script>';
		    

		    }else{
		    echo '<div class="alert alert-danger alert-icon"><em class="icon ni ni-cross-circle"></em> <strong>Added Equipment Inventory Stock Out failed</strong></div><script> setTimeout(function() {  location.replace("main/equipment_inventory.php"); }, 1000); </script>';

	
		}
	}

?>

