<?php
    include_once('../conn/db-connection.php');
    include_once('../class/Gymmis_model.php');

    $GYM = new GYMMIS_class();

	if(ISSET($_POST)){
		$quantitys = 0;
         $total = htmlspecialchars(strip_tags(stripslashes(trim($_POST['total']))));
	     $discount = htmlspecialchars(strip_tags(stripslashes(trim($_POST['discount']))));
	     $total_payment = htmlspecialchars(strip_tags(stripslashes(trim($_POST['total_payment']))));
	     $cash = htmlspecialchars(strip_tags(stripslashes(trim($_POST['cash']))));
	     $change = htmlspecialchars(strip_tags(stripslashes(trim($_POST['change']))));
        $pos_id = htmlspecialchars(strip_tags(stripslashes(trim(ucwords($_POST['pos_id'])))));
        $idno = htmlspecialchars(strip_tags(stripslashes(trim(ucwords($_POST['idno'])))));
		$item_name = htmlspecialchars(strip_tags(stripslashes(trim(ucfirst($_POST['item_name'])))));
		$quantity = htmlspecialchars(strip_tags(stripslashes(trim($_POST['quantity']))));
		$price = htmlspecialchars(strip_tags(stripslashes(trim($_POST['price']))));
		$proinventory_id = htmlspecialchars(strip_tags(stripslashes(trim($_POST['proinventory_id']))));
	    $invoice_number = htmlspecialchars(strip_tags(stripslashes(trim($_POST['invoice_number']))));
	    $cashier_name = htmlspecialchars(strip_tags(stripslashes(trim($_POST['cashier_name']))));
	    $sum_qty = htmlspecialchars(strip_tags(stripslashes(trim($_POST['sum_qty']))));
	    $category_type = 'PRODUCT';


		$add = $GYM->add_orderitems($total, $discount, $total_payment, $cash, $change, $pos_id, $idno, $item_name, $quantity, $price, $proinventory_id, $invoice_number, $cashier_name, $sum_qty, $category_type);
       if($add == TRUE){
		      echo '<div class="example-alert"><div class="alert alert-success alert-icon"><em class="icon ni ni-check-circle"></em> <strong>Added Payment Successfully!</strong></div></div><script> setTimeout(function() {  location.replace("main/pos.php"); }, 1000); </script>';
		    

		    }else{
		    echo '<div class="alert alert-danger alert-icon"><em class="icon ni ni-cross-circle"></em> <strong>Added Payment  failed</strong></div><script> setTimeout(function() {  location.replace("main/pos.php"); }, 1000); </script>';

	
		}
	}

?>

