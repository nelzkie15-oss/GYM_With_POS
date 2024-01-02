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
        $status = 'stock in';
        $select_type = 'EQUIPMENT_INVENTORY';
	
		$add = $GYM->add_equipmentInventory($equipments, $size, $date_ofpurchase, $color, $weight, $quantity, $brand_name, $status, $select_type);
       if($add == TRUE){
		      echo '<div class="example-alert"><div class="alert alert-success alert-icon"><em class="icon ni ni-check-circle"></em> <strong>Added Equipment Inventory Stock In Successfully!</strong></div></div><script> setTimeout(function() {  location.replace("main/equipment_inventory.php"); }, 1000); </script>';
		    

		    }else{
		    echo '<div class="alert alert-danger alert-icon"><em class="icon ni ni-cross-circle"></em> <strong>Added Equipment Inventory Stock In failed</strong></div><script> setTimeout(function() {  location.replace("main/equipment_inventory.php"); }, 1000); </script>';

	
		}
	}

?>

