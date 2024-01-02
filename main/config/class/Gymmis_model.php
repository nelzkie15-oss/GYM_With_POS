<?php

    class GYMMIS_class {

        private $db = null;
        private $_supportFormats = ['image/png','image/jpeg','image/jpg','image/gif'];

      //======================== login admin/staff  ======================//

        public function Login_user($username, $password) {
          
              global $db;
              session_start();

               $stmt1 = $db->prepare("SELECT * FROM tbl_staff WHERE username = :uname AND password = :upass  AND role = :stat");
               $stmt1->execute(array(':uname' => $username, ':upass' => $password, ':stat' => 'Admin'));
               $row1 = $stmt1->fetch(PDO::FETCH_ASSOC);


                if ($stmt1->rowCount() > 0){
                 
                    $_SESSION['user_no']   = htmlentities($row1['username']);
                    $_SESSION['logged_in'] = true;

                    echo '1';
                  
                      exit();
                }else{
                    //echo '0';
                    ?>
                        <span><i class="fa fa-user"></i> Username or Password not Found.</span>
                    <?php 
                }
            }

      //====================end login admin/staff  ======================//

      // ==============================Get Admin Session(Admin)========================================//

         public function fetch_Adminsession($AdminID_session) {
             global $db;

            $query = $db->prepare("SELECT * FROM tbl_staff WHERE username = ?");
            $query->execute(array($AdminID_session));
            return $query->fetchAll();
        }

     // ==============================end Get Admin Session(Admin)=====================================//

      // ==============================add  Staff=========================================//

        public function add_staff($full_name, $sex, $age, $date_ofbirth, $email_address, $address, $contact_no, $username, $password, $role){
             global $db;

             $stmt = $db->prepare("INSERT INTO tbl_staff(`full_name`, `sex`, `age`, `date_ofbirth`, `email_address`, `address`, `contact_no`, `username`, `password`, `role`) VALUES(?,?,?,?,?,?,?,?,?,?)");
             $true = $stmt->execute([$full_name, $sex, $age, $date_ofbirth, $email_address, $address, $contact_no, $username, $password, $role]);

         if ($true == true) {
                return true;
            } else {
                return false;
            }
        }
    // ==============================end add  Staff======================================//
  
     // ==============================fetch Staffs========================================//

        public function fetch_Staff() {
                global $db;

                $query = $db->prepare("SELECT * FROM tbl_staff ORDER BY staff_id DESC");
                $query->execute(array());
                return $query->fetchAll();
      }

     // ==============================end fetch Staffs   =====================================//


     // ==============================view Staff========================================//

        public function view_Staff($staffid) {
                global $db;

                $query = $db->prepare("SELECT * FROM tbl_staff WHERE staff_id = ?");
                $query->execute(array($staffid));
                return $query->fetchAll();
      }

    // ==============================end view Staff =====================================//


    // ================================ edit  Staff ====================================//

        public function edit_staff($full_name, $sex, $age, $date_ofbirth, $email_address, $address, $contact_no, $username, $password, $role, $staff_id){
            global $db;

            $sql = "UPDATE `tbl_staff` SET  `full_name` = ?, `sex` = ?, `age` = ?, `date_ofbirth` = ?, `email_address` = ?, `address` = ?, `contact_no` = ?, `username` = ?, `password` = ?, `role` = ? WHERE staff_id = ?";
            $update = $db->prepare($sql)->execute([$full_name, $sex, $age, $date_ofbirth, $email_address, $address, $contact_no, $username, $password, $role, $staff_id]);
            if ($update == true) {
                return true;
            } else {
                return false;
           }

       }
     // ==============================end edit Staff======================================//

     //======================================= delete Staff==========================//

        public function delete_staff($staff_id){
            global $db;

            $sql = "DELETE FROM `tbl_staff` WHERE staff_id = ?";
            $delete = $db->prepare($sql)->execute([$staff_id]);
            if ($delete == true) {
                return true;
            } else {
                return false;
            }
        }

     //===================================end delete Staff==================================/

     // ==============================add  member=========================================//

        public function add_member($name, $age, $sex, $birthday, $plan, $email_address, $contact_no, $address, $joining_date, $expiring_date){
             global $db;

             $stmt = $db->prepare("INSERT INTO tbl_members(`name`, `age`, `sex`, `birthday`, `plan`, `email_address`, `contact_no`, `address`, `joining_date`, `expiring_date`) VALUES(?,?,?,?,?,?,?,?,?,?)");
             $true = $stmt->execute([$name, $age, $sex, $birthday, $plan, $email_address, $contact_no, $address, $joining_date, $expiring_date]);

         if ($true == true) {
                return true;
            } else {
                return false;
            }
        }
    // ==============================end add  member======================================//

     // ==============================fetch member========================================//

        public function fetch_members() {
                global $db;

                $query = $db->prepare("SELECT * FROM tbl_members ORDER BY member_id DESC");
                $query->execute(array());
                return $query->fetchAll();
      }

     // ==============================end fetch member   =====================================//

       // ==============================view member========================================//

        public function view_member($memberid) {
                global $db;

                $query = $db->prepare("SELECT * FROM tbl_members WHERE member_id = ?");
                $query->execute(array($memberid));
                return $query->fetchAll();
      }

    // ==============================end view member =====================================//

       // ================================ edit  member ====================================//

        public function edit_member($name, $age, $sex, $birthday, $plan, $email_address, $contact_no, $address, $joining_date, $expiring_date, $member_id){
            global $db;

            $sql = "UPDATE `tbl_members` SET  `name` = ?, `age` = ?, `sex` = ?, `birthday` = ?, `plan` = ?, `email_address` = ?, `contact_no` = ?, `address` = ?, `joining_date` = ?, `expiring_date` = ? WHERE member_id = ?";
            $update = $db->prepare($sql)->execute([$name, $age, $sex, $birthday, $plan, $email_address, $contact_no, $address, $joining_date, $expiring_date, $member_id]);
            if ($update == true) {
                return true;
            } else {
                return false;
           }

       }
     // ==============================end edit member======================================//

        //======================================= delete member==========================//

        public function delete_member($member_id){
            global $db;

            $sql = "DELETE FROM `tbl_members` WHERE member_id = ?";
            $delete = $db->prepare($sql)->execute([$member_id]);
            if ($delete == true) {
                return true;
            } else {
                return false;
            }
        }

     //===================================end delete member==================================/

         // ==============================fetch visitors========================================//

        public function fetch_visitors() {
                global $db;

                $query = $db->prepare("SELECT * FROM tbl_visitor ORDER BY visitor_id  DESC");
                $query->execute(array());
                return $query->fetchAll();
      }

     // ==============================end fetch visitors   =====================================//

     // ==============================add  visitor=========================================//

   
    // ==============================end add  visitor======================================//

        // ==============================fetch plan========================================//

            public function fetch_plan() {
                    global $db;

                    $query = $db->prepare("SELECT * FROM  tbl_plan ORDER BY plan_id  DESC");
                    $query->execute(array());
                    return $query->fetchAll();
          }

         // ==============================end fetch plan   =====================================//

           // ==============================add  plan=========================================//

        public function add_plan($plan_name, $description, $amount){
             global $db;

             $stmt = $db->prepare("INSERT INTO tbl_plan(`plan_name`, `description`, `amount`) VALUES(?,?,?)");
             $true = $stmt->execute([$plan_name, $description, $amount]);

         if ($true == true) {
                return true;
            } else {
                return false;
            }
        }
    // ==============================end add  plan======================================//

            //======================================= delete plan==========================//

        public function delete_plan($plan_id){
            global $db;

            $sql = "DELETE FROM `tbl_plan` WHERE plan_id = ?";
            $delete = $db->prepare($sql)->execute([$plan_id]);
            if ($delete == true) {
                return true;
            } else {
                return false;
            }
        }

     //===================================end delete plan==================================/

            // ==============================fetch equipment inventory========================================//

            public function fetch_equipmentinventory() {
                    global $db;

                    $query = $db->prepare("SELECT * FROM  tbl_equipementinventory ORDER BY equipinventory_id  DESC");
                    $query->execute(array());
                    return $query->fetchAll();
          }

         // ==============================end fetch equipment inventory   =====================================//


           // ==============================add  equipment inventory(stock in)=========================================//

        public function add_equipmentInventory($equipments, $size, $date_ofpurchase, $color, $weight, $quantity, $brand_name, $status, $select_type){
             global $db;

             $stmt = $db->prepare("INSERT INTO tbl_equipementinventory(`equipments`, `size`, `date_ofpurchase`, `color`, `weight`, `quantity`, `brand_name`, `status`,`select_type`) VALUES(?,?,?,?,?,?,?,?,?)");
             $true = $stmt->execute([$equipments, $size, $date_ofpurchase, $color, $weight, $quantity, $brand_name, $status, $select_type]);

         if ($true == true) {
                return true;
            } else {
                return false;
            }
        }
    // ==============================end add  equipment inventory(stock in)======================================//

  // ==============================add  equipment inventory(stock out)=========================================//

        public function add_equipmentInventory2($equipments, $size, $date_ofpurchase, $color, $weight, $quantity, $brand_name, $reason, $status, $select_type){
             global $db;

             $stmt = $db->prepare("INSERT INTO tbl_equipementinventory(`equipments`, `size`, `date_ofpurchase`, `color`, `weight`, `quantity`, `brand_name`, `reason`, `status`,`select_type`) VALUES(?,?,?,?,?,?,?,?,?,?)");
             $true = $stmt->execute([$equipments, $size, $date_ofpurchase, $color, $weight, $quantity, $brand_name, $reason, $status, $select_type]);

         if ($true == true) {
                return true;
            } else {
                return false;
            }
        }
    // ==============================end add  equipment inventory(stock out)======================================//

          // ==============================fetch product inventory========================================//

            public function fetch_producttinventory() {
                    global $db;

                    $query = $db->prepare("SELECT * FROM  tbl_productinventory ORDER BY proinventory_id  DESC");
                    $query->execute(array());
                    return $query->fetchAll();
          }

         // ==============================end fetch product inventory   =====================================//

     // ==============================add  product inventory(stock in)=========================================//

        public function add_productInventory($product, $quantity, $description, $expiration_date, $price, $brand, $date_ofpurchased, $status, $select_type){
             global $db;

             $stmt = $db->prepare("INSERT INTO tbl_productinventory(`product`, `quantity`, `description`, `expiration_date`, `price`, `brand`, `date_ofpurchased`, `status`, `select_type`) VALUES(?,?,?,?,?,?,?,?,?)");
             $true = $stmt->execute([$product, $quantity, $description, $expiration_date, $price, $brand, $date_ofpurchased, $status, $select_type]);

         if ($true == true) {
                return true;
            } else {
                return false;
            }
        }
    // ==============================end add  product inventory(stock in)======================================//

      // ==============================add  product inventory(stock out)=========================================//

        public function add_productInventory2($product, $quantity, $description, $expiration_date, $price, $brand, $date_ofpurchased, $reason, $status, $select_type){
             global $db;

             $stmt = $db->prepare("INSERT INTO tbl_productinventory(`product`, `quantity`, `description`, `expiration_date`, `price`, `brand`, `date_ofpurchased`, `reason`, `status`, `select_type`) VALUES(?,?,?,?,?,?,?,?,?,?)");
             $true = $stmt->execute([$product, $quantity, $description, $expiration_date, $price, $brand, $date_ofpurchased, $reason, $status, $select_type]);

         if ($true == true) {
                return true;
            } else {
                return false;
            }
        }
    // ==============================end add  product inventory(stock out)======================================//

    // ==============================add  pos purchased=========================================//

        public function add_pos($idno, $item_name, $quantity, $price, $proinventory_id){
             global $db;

            $sub = "";
             $total = "";
             $sub = $quantity;

            $stmt = $db->prepare("SELECT * FROM tbl_productinventory WHERE proinventory_id = ?");
            $stmt->execute([$proinventory_id]);
            $cc = $stmt->fetchAll();
            foreach ($cc as $row);
               $subqty = $row['quantity'] - $sub;
           
            $sql = "UPDATE tbl_productinventory SET quantity = ? WHERE proinventory_id = ?";
            $true = $db->prepare($sql)->execute([$subqty, $proinventory_id]);

             
             $stmt = $db->prepare("INSERT INTO tbl_pos(`idno`, `item_name`, `quantity`, `price`, `proinventory_id`) VALUES(?,?,?,?,?)");
             $true = $stmt->execute([$idno, $item_name, $quantity, $price, $proinventory_id]);

         if ($true == true) {
                return true;
            } else {
                return false;
            }
        }
    // ==============================end add  pos purchased======================================//

           // ==============================fetch pos========================================//

            public function fetch_pos() {
                    global $db;

                    $query = $db->prepare("SELECT * FROM  tbl_pos ORDER BY pos_id  DESC");
                    $query->execute(array());
                    return $query->fetchAll();
          }

         // ==============================end fetch pos   =====================================//


         // ==============================  pos sum total   =====================================//
          public function fetch_countposTotal() {
              global $db;
              $query = $db->prepare("SELECT proinventory_id,SUM(price) as group_price FROM tbl_pos GROUP BY proinventory_id");
              $query->execute(array());
              return $query->fetchAll();
          }

        // ==============================end pos sum total   =====================================//


        // ==============================get qty id for pos   =====================================//
         public function row_posqty($pos_id) {
            global $db;
            $stmt = $db->prepare("SELECT * FROM tbl_pos WHERE pos_id = ?");
            $stmt->execute([$pos_id]);
            $row = $stmt->fetch();
            echo json_encode($row);
       }
       // ==============================end get qty id for pos   =====================================//

       // ================================ edit  qty for pos ====================================//

        public function edit_POSqty($quantity, $price, $proinventory_id, $pos_id){
            global $db;

             $sub = "";
             $total = "";
             $sub = $quantity;

            $stmt = $db->prepare("SELECT * FROM tbl_productinventory WHERE proinventory_id = ?");
            $stmt->execute([$proinventory_id]);
            $cc = $stmt->fetchAll();
            foreach ($cc as $row);

            if($row['quantity'] <= 1){
               
                 return 'low_stock';

                }else{

                 $subqty = $row['quantity'] - $sub + 1;
               
                $sql = "UPDATE tbl_productinventory SET quantity = ? WHERE proinventory_id = ?";
                $true = $db->prepare($sql)->execute([$subqty, $proinventory_id]);
             }

            $sql = "UPDATE `tbl_pos` SET  `quantity` = ?, `price` = ? WHERE pos_id = ?";
            $update = $db->prepare($sql)->execute([$quantity, $price, $pos_id]);
            if ($update == 'true') {
                return 'true';
            } else {
                return false;
         }

       }
     // ==============================end edit qty for pos======================================//

    //======================================= delete POS Item==========================//

        public function delete_positem($pos_id){
            global $db;

            $sql = "DELETE FROM `tbl_pos` WHERE pos_id = ?";
            $delete = $db->prepare($sql)->execute([$pos_id]);
            if ($delete == true) {
                return true;
            } else {
                return false;
            }
        }

     //===================================end delete POS Item==================================/


    //======================================= delete/archive Member==========================//

        public function archive_memberIndividual($name, $age, $sex, $birthday, $plan, $email_address, $contact_no, $address, $joining_date, $expiring_date, $member_id){
            global $db;
   
            $stmt3 = $db->prepare("INSERT INTO `tbl_trash` (`name`,`age`,`sex`,`birthday`,`plan`,`email_address`, `contact_no`, `address`,`joining_date`,`expiring_date`) VALUES(?,?,?,?,?,?,?,?,?,?)");
            $stmt3->execute([$name, $age, $sex, $birthday, $plan, $email_address, $contact_no, $address, $joining_date, $expiring_date]);
  
            $sql = "DELETE FROM `tbl_members` WHERE member_id = ?";
            $delete = $db->prepare($sql)->execute([$member_id]);

            if ($delete == true) {
                return true;
            } else {
                return false;
            }
        }

     //===================================end delete/archive Member==================================/


     // ==============================Archieved members========================================//

        public function fetch_membersArchieved() {
                global $db;

                $query = $db->prepare("SELECT * FROM tbl_trash ORDER BY trash_id DESC");
                $query->execute(array());
                return $query->fetchAll();
      }

    // ==============================end Archieved members =====================================//

      //======================================= delete/retrieve Member==========================//

        public function retrieve_memberIndividual($name, $age, $sex, $birthday, $plan, $email_address, $contact_no, $address, $joining_date, $expiring_date, $trash_id){
            global $db;
   
            $stmt3 = $db->prepare("INSERT INTO `tbl_members` (`name`,`age`,`sex`,`birthday`,`plan`,`email_address`, `contact_no`, `address`,`joining_date`,`expiring_date`) VALUES(?,?,?,?,?,?,?,?,?,?)");
            $stmt3->execute([$name, $age, $sex, $birthday, $plan, $email_address, $contact_no, $address, $joining_date, $expiring_date]);
  
            $sql = "DELETE FROM `tbl_trash` WHERE trash_id = ?";
            $delete = $db->prepare($sql)->execute([$trash_id]);

            if ($delete == true) {
                return true;
            } else {
                return false;
            }
        }

     //===================================end delete/retrieve Member==================================/



       // ==============================view retrieve member========================================//

        public function view_member2($trash_id) {
                global $db;

                $query = $db->prepare("SELECT * FROM tbl_trash WHERE trash_id = ?");
                $query->execute(array($trash_id));
                return $query->fetchAll();
      }

    // ==============================end view retrieve member =====================================//

             // ================================ edit  member 2 ====================================//

        public function edit_member2($name, $age, $sex, $birthday, $plan, $email_address, $contact_no, $address, $joining_date, $expiring_date, $trash_id){
            global $db;

            $sql = "UPDATE `tbl_trash` SET  `name` = ?, `age` = ?, `sex` = ?, `birthday` = ?, `plan` = ?, `email_address` = ?, `contact_no` = ?, `address` = ?, `joining_date` = ?, `expiring_date` = ? WHERE trash_id = ?";
            $update = $db->prepare($sql)->execute([$name, $age, $sex, $birthday, $plan, $email_address, $contact_no, $address, $joining_date, $expiring_date, $trash_id]);
            if ($update == true) {
                return true;
            } else {
                return false;
           }

       }
     // ==============================end edit member 2======================================//

    // ==============================fetch Acccount (Admin)========================================//

        public function fetch_Account($AdminID_session) {
                global $db;

                $query = $db->prepare("SELECT * FROM tbl_staff WHERE username = ?");
                $query->execute(array($AdminID_session));
                return $query->fetchAll();
      }

    // ==============================end fetch Acccount (Admin) =====================================//

       // ==============================fetch All visitors Name========================================//

        public function fetchAllVisitorsname() {
                global $db;

                $query = $db->prepare("SELECT * FROM tbl_visitor ORDER BY visitor_id  DESC");
                $query->execute(array());
                return $query->fetchAll();
      }

     // ==============================end fetch visitors All visitors Name  =====================================//

 // ============================== count members dashboard (Admin) =====================================//
      public function count_members(){
        global $db;

                $query = $db->prepare("SELECT COUNT(member_id) as member_id  FROM  tbl_members");
                $query->execute(array());
                return $query->fetchAll();
        }
   // ==============================end count members dashboard  (Admin) =====================================//

        // ============================== count visitors dashboard (Admin) =====================================//
      public function count_visitors(){
        global $db;

                $query = $db->prepare("SELECT COUNT(visitor_id) as visitor_id  FROM  tbl_visitor");
                $query->execute(array());
                return $query->fetchAll();
        }
   // ==============================end count visitors dashboard  (Admin) =====================================//

  // ============================== count visitors dashboard (Admin) =====================================//
      public function count_staff(){
        global $db;

                $query = $db->prepare("SELECT COUNT(staff_id) as staff_id   FROM  tbl_staff");
                $query->execute(array());
                return $query->fetchAll();
        }
   // ==============================end count visitors dashboard  (Admin) =====================================//

          // ============================== pos monthly sales (Admin) =====================================//
      public function posmonthly_sales(){
        global $db;

            header('Content-Type: application/json');

            $stmt = $db->prepare("SELECT MONTHNAME(date_purchased) AS dates,SUM(price) AS price_sum FROM tbl_pos GROUP BY date_purchased");
            $stmt->execute(); 
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $data = array();
            foreach ($result as $row) {
                $data[] = $row;
            }

            echo json_encode($data);
        }
   // ==============================end pos monthly sales  (Admin) =====================================//

         // ================================ edit  Change Account (Admin) ====================================//

        public function change_Accountadmin($username, $password, $staff_id){
            global $db;

            $sql = "UPDATE `tbl_staff` SET  `username` = ?, `password` = ? WHERE staff_id = ?";
            $update = $db->prepare($sql)->execute([$username, $password, $staff_id]);
            if ($update == true) {
                return true;
            } else {
                return false;
           }

       }
     // ==============================end edit Change Account (Admin)======================================/

           // ==============================fetch Acccount (Admin)========================================//

        public function view_account($staffid) {
                global $db;

                $query = $db->prepare("SELECT * FROM tbl_staff WHERE staff_id = ?");
                $query->execute(array($staffid));
                return $query->fetchAll();
      }

    // ==============================end fetch Acccount (Admin) =====================================//

           // ==============================cretical stock======================================//
       public function cretical_stockproductinventory(){
            global $db;
            
            $stmt = $db->prepare("SELECT * FROM tbl_productinventory");
            $stmt->execute();
           return $stmt->fetchAll();

       }
     // ==============================end cretical stock======================================//

     // =============================product near expired======================================//
       public function expiration_stockproductinventory(){
            global $db;
            
            $stmt = $db->prepare("SELECT * FROM tbl_productinventory");
            $stmt->execute();
           return $stmt->fetchAll();

       }
     // ==============================end product near expired======================================//

       // ==============================add  Order item=========================================//

        public function add_orderitems($total, $discount, $total_payment, $cash, $change, $pos_id, $idno, $item_name, $quantity, $price, $proinventory_id, $invoice_number, $cashier_name, $sum_qty, $category_type){
             global $db;
            

             $stmt = $db->prepare("INSERT INTO tbl_sales(`idno`, `item_name`, `quantity`, `price`, `proinventory_id`, `invoice_number`, `cashier_name`, `category_type`) VALUES(?,?,?,?,?,?,?,?)");
             $stmt->execute([$idno, $item_name, $quantity, $price, $proinventory_id, $invoice_number, $cashier_name, $category_type]);

             $stmt2 = $db->prepare("INSERT INTO tbl_sales_total(`total`, `discount`, `cash`, `changed`, `invoice_number`, `qty`) VALUES(?,?,?,?,?,?)");
             $stmt2->execute([$total, $discount, $cash, $change, $invoice_number, $sum_qty]);

              $sql = "DELETE FROM `tbl_pos` WHERE pos_id = ?";
             $delete = $db->prepare($sql)->execute([$pos_id]);

         if ($delete == true) {
                return true;
            } else {
                return false;
            }
        }
    // ==============================end add  Order item======================================//

    // ============================== inventory report======================================//

     public function inventory_report($date1, $date2, $select_type, $categery_type){
          global $db;

               if($categery_type == 'PRODUCT_INVENTORY'){
                echo '
                        <table class="datatable-init table" id="members_table">
                        <thead>
                            <tr style="background-color: #5b93d4;color: #fff">
                               <th style="visibility:hidden;"></th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Quantity</th>
                                <th>Expiration Date</th>
                                <th>Brand</th>
                                <th>Stock Type</th>
                            </tr>
                        </thead>
                    
                   ';


                 $status1 = "";

                 if($select_type == 'stockIn'){
                      $status1 .= "AND status = 'stock in'";
                   }else if($select_type == 'stockOut'){
                      $status1 .= "AND status = 'stock out'";
                   }else if($select_type == 'all'){
                    $status1 .= "AND status IN ('stock in', 'stock out')";
                   
                 }

                $stmt = $db->prepare("SELECT * FROM tbl_productinventory  WHERE date_created BETWEEN ? AND ? ".$status1." AND select_type = ?");
                $stmt->execute([$date1, $date2, $categery_type]); 
                $c = $stmt->rowCount();
                if($c > 0){
                  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                  ?>
                 <tr>
                    <td style="visibility:hidden;"><?= base64_encode(htmlentities($row['proinventory_id '])); ?></td>
                    <td><?= htmlentities($row['product']); ?></td>
                    <td>₱ <?= htmlentities(number_format($row['price'],2)); ?></td>
                    <td><?= htmlentities($row['description']); ?></td>
                    <td><?= htmlentities($row['quantity']); ?></td>
                    <td><?= htmlentities(date("M d, Y",strtotime($row['expiration_date']))); ?></td>
                    <td><?= htmlentities($row['brand']); ?></td>
                     <td>
                   <?php if(htmlentities($row['status']) == 'stock in'){
                      echo '<span class="badge bg-success" style="color:#fff"><i class="bi bi-check-circle me-1"></i> Stock In</span>';
                    }else{
                      echo '<span class="badge bg-danger" style="color:#fff"><i class="bi bi-exclamation-octagon me-1"></i> Stock Out</span>';
                   } ?>
                  </td>
                </tr>
               </table>
               <td>
             </td>
                  <?php
                  }
                  echo '<td colspan="9">       
                      <form method="POST" action="">
                      <input type="hidden" name="stud_stat">
                       <button type="submit" class="btn btn-info" name="export" style="float:right" id="btn_print"><em class="icon ni ni-file-xls"></em> Export Excel</button>
                      </form></td>
                    </tr>
                  
                    ';

                }else{

                echo '
                <tr>
                  <td colspan = "9"><center>Record Not Found</center></td>
                </tr>';
                
             }

          }else if($categery_type == 'EQUIPMENT_INVENTORY'){
           
               echo '
                        <table class="datatable-init table" id="members_table">
                        <thead>
                            <tr style="background-color: #5b93d4;color: #fff">
                            <th>Id No.</th>
                            <th>Equipments</th>
                            <th>Date of Purchase</th>
                            <th>Size</th>
                            <th>Weight</th>
                            <th>Color</th>
                            <th>Brand</th>
                            <th>Qty</th>
                            <th>Stock Type</th>
                            </tr>
                        </thead>
                    
                   ';


                 $status1 = "";

                 if($select_type == 'stockIn'){
                      $status1 .= "AND status = 'stock in'";
                   }else if($select_type == 'stockOut'){
                      $status1 .= "AND status = 'stock out'";
                   }else if($select_type == 'all'){
                    $status1 .= "AND status IN ('stock in', 'stock out')";
                   
                 }

                $stmt = $db->prepare("SELECT * FROM tbl_equipementinventory  WHERE date_created BETWEEN ? AND ? ".$status1." AND select_type = ?");
                $stmt->execute([$date1, $date2, $categery_type]); 
                $c = $stmt->rowCount();
                if($c > 0){
                  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                  ?>
                  <tr>
                        <td><?= htmlentities($row['equipinventory_id']); ?></td>
                        <td><?= htmlentities($row['equipments']); ?></td>
                        <td><?= htmlentities(date("M d, Y",strtotime($row['date_ofpurchase']))); ?></td>
                        <td><?= htmlentities($row['size']); ?></td>
                        <td><?= htmlentities($row['weight']); ?></td>
                        <td><?= htmlentities($row['color']); ?></td>
                        <td><?= htmlentities($row['brand_name']); ?></td>
                        <td><?= htmlentities($row['quantity']); ?></td>
                         <td>
                       <?php if(htmlentities($row['status']) == 'stock in'){
                          echo '<span class="badge bg-success" style="color:#fff"><i class="bi bi-check-circle me-1"></i> Stock In</span>';
                        }else{
                          echo '<span class="badge bg-danger" style="color:#fff"><i class="bi bi-exclamation-octagon me-1"></i> Stock Out</span>';
                       } ?>
                      </td>
                    </table>
               <td>
             </td>
                  <?php
                  }
                  echo '<td colspan="9">       
                      <form method="POST" action="">
                      <input type="hidden" name="stud_stat">
                       <button type="submit" class="btn btn-info" name="export" style="float:right" id="btn_print"><em class="icon ni ni-file-xls"></em> Export Excel</button>
                      </form></td>
                    </tr>
                  
                    ';

                }else{

                echo '
                <tr>
                  <td colspan = "9"><center>Record Not Found</center></td>
                </tr>';
                
             }
     

          }

       }

       //====================================end inventory report==================================================

    // ============================== sales report======================================//

     public function sales_report($date1, $date2, $category_type){
          global $db;

               if($category_type == 'PRODUCT'){
                echo '
                        <table class="datatable-init table" id="members_table">
                        <thead>
                            <tr style="background-color: #5b93d4;color: #fff">
                            <th>Invoice #</th>
                            <th>Item Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Discount %</th>
                            <th>Cash</th>
                            <th>Change</th>
                            <th>Date</th>
                            </tr>
                        </thead>
                    
                   ';


                $stmt = $db->prepare("SELECT *, MAX(st.qty) as QTY, GROUP_CONCAT(DISTINCT s.price SEPARATOR ', ') AS Price,
                                      group_concat(DISTINCT s.item_name SEPARATOR ', ') AS item_names
                                      FROM tbl_sales s 
                                      LEFT JOIN tbl_sales_total st ON s.invoice_number = st.invoice_number
                                      WHERE s.date_purchased BETWEEN ? AND ? AND s.category_type = ?
                                      GROUP BY s.invoice_number, st.invoice_number having st.total <> 0 ORDER BY s.sales_id");
                $stmt->execute([$date1, $date2, $category_type]); 
                $c = $stmt->rowCount();
                if($c > 0){
                  while($rows = $stmt->fetch(PDO::FETCH_ASSOC)){
                  ?>
                 <tr>
                    <td><?= htmlentities($rows['invoice_number']); ?></td>
                    <td>( <?= htmlentities($rows['item_names']); ?> )</td>
                    <td>( <?= htmlentities($rows['Price']); ?> )</td>
                    <td><?= htmlentities($rows['QTY']); ?></td>
                    <td><?= htmlentities($rows['total']); ?></td>
                    <td><?= htmlentities($rows['discount']); ?></td>
                    <td><?= htmlentities($rows['cash']); ?></td>
                    <td><?= htmlentities($rows['changed']); ?></td>
                    <td><?= htmlentities(date("M d, Y",strtotime($rows['date_purchased']))); ?></td>

                </tr>
               </table>
               <td>
             </td>
                  <?php
                  }
                  echo '<td colspan="9">       
                      <form method="POST" action="">
                      <input type="hidden" name="stud_stat">
                       <button type="submit" class="btn btn-info" name="export" style="float:right" id="btn_print"><em class="icon ni ni-file-xls"></em> Export Excel</button>
                      </form></td>
                    </tr>
                  
                    ';

                }else{

                echo '
                <tr>
                  <td colspan = "9"><center>Record Not Found</center></td>
                </tr>';
                
             }

          }else if($category_type == 'GYM_FEE'){
           
               echo '
                        <table class="datatable-init table" id="members_table">
                        <thead>
                            <tr style="background-color: #5b93d4;color: #fff">
                               <th>Invoice #</th>
                               <th>Categories</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Cash</th>
                                <th>Change</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                    
                   ';


                $stmt = $db->prepare("SELECT *, SUM(price)  as Prices,SUM(quantity) as Quantitys FROM tbl_sales2 WHERE date_purchased BETWEEN ? AND ? AND category_type = ? GROUP BY invoice_number");
                $stmt->execute([$date1, $date2, $category_type]); 
                $c = $stmt->rowCount();
                if($c > 0){
                  while($rows = $stmt->fetch(PDO::FETCH_ASSOC)){
                  ?>
                  <tr>
                   <td><?= htmlentities($rows['invoice_number']); ?></td>
                    <td><?= htmlentities($rows['item_name']); ?></td>
                    <td>₱ <?= htmlentities(number_format($rows['Prices'],2)); ?></td>
                    <td><?= htmlentities($rows['Quantitys']); ?></td>
                    <td><?= htmlentities($rows['total']); ?></td>
                    <td><?= htmlentities($rows['cash']); ?></td>
                    <td><?= htmlentities($rows['changed']); ?></td>
                    <td><?= htmlentities(date("M d, Y",strtotime($rows['date_purchased']))); ?></td>
                </tr>
                    </table>
               <td>
             </td>
                  <?php
                  }
                  echo '<td colspan="9">       
                      <form method="POST" action="">
                      <input type="hidden" name="stud_stat">
                       <button type="submit" class="btn btn-info" name="export" style="float:right" id="btn_print"><em class="icon ni ni-file-xls"></em> Export Excel</button>
                      </form></td>
                    </tr>
                  
                    ';

                }else{

                echo '
                <tr>
                  <td colspan = "9"><center>Record Not Found</center></td>
                </tr>';
                
             }
     

          }

       }

       //====================================end sales report==================================================


     // ==============================add  gym fee inventory(stock in)=========================================//

        public function add_gymfeeInventory($product, $quantity, $description, $expiration_date, $price, $brand, $date_ofpurchased, $status, $select_type){
             global $db;

             $stmt = $db->prepare("INSERT INTO tbl_gymfeeinventory(`product`, `quantity`, `description`, `expiration_date`, `price`, `brand`, `date_ofpurchased`, `status`, `select_type`) VALUES(?,?,?,?,?,?,?,?,?)");
             $true = $stmt->execute([$product, $quantity, $description, $expiration_date, $price, $brand, $date_ofpurchased, $status, $select_type]);

         if ($true == true) {
                return true;
            } else {
                return false;
            }
        }
    // ==============================end add  gym fee inventory(stock in)======================================//

                  // ==============================fetch gym fee inventory========================================//

            public function fetch_gymfeeinventory() {
                    global $db;

                    $query = $db->prepare("SELECT * FROM  tbl_gymfeeinventory ORDER BY gymfeeinventory_id  DESC");
                    $query->execute(array());
                    return $query->fetchAll();
          }

         // ==============================end fetch gym fee inventory   =====================================//

            // ==============================add  gym fee inventory(stock out)=========================================//

        public function add_gymfeeInventory2($product, $quantity, $description, $expiration_date, $price, $brand, $date_ofpurchased, $reason, $status, $select_type){
             global $db;

             $stmt = $db->prepare("INSERT INTO tbl_gymfeeinventory(`product`, `quantity`, `description`, `expiration_date`, `price`, `brand`, `date_ofpurchased`, `reason`, `status`, `select_type`) VALUES(?,?,?,?,?,?,?,?,?,?)");
             $true = $stmt->execute([$product, $quantity, $description, $expiration_date, $price, $brand, $date_ofpurchased, $reason, $status, $select_type]);

         if ($true == true) {
                return true;
            } else {
                return false;
            }
        }
    // ==============================end add  gym fee inventory(stock out)======================================//

            // ==============================fetch pos gym fee========================================//

            public function fetch_posgymfee() {
                    global $db;

                    $query = $db->prepare("SELECT * FROM  tbl_posgymfee ORDER BY pos_id  DESC");
                    $query->execute(array());
                    return $query->fetchAll();
          }

         // ==============================end fetch pos gym fee  =====================================//

        // ==============================fetch gym fee inventory========================================//

            public function fetch_gymfeetinventory() {
                    global $db;

                    $query = $db->prepare("SELECT * FROM  tbl_gymfeeinventory ORDER BY gymfeeinventory_id  DESC");
                    $query->execute(array());
                    return $query->fetchAll();
          }

         // ==============================end fetch gym fee inventory   =====================================//

             // ==============================add  pos purchased=========================================//

        public function add_pos2($idno, $item_name, $quantity, $price, $proinventory_id){
             global $db;

            $sub = "";
             $total = "";
             $sub = $quantity;

            $stmt = $db->prepare("SELECT * FROM tbl_productinventory WHERE proinventory_id = ?");
            $stmt->execute([$proinventory_id]);
            $cc = $stmt->fetchAll();
            foreach ($cc as $row);
               $subqty = $row['quantity'] - $sub;
           
            $sql = "UPDATE tbl_productinventory SET quantity = ? WHERE proinventory_id = ?";
            $true = $db->prepare($sql)->execute([$subqty, $proinventory_id]);

             
             $stmt = $db->prepare("INSERT INTO tbl_pos(`idno`, `item_name`, `quantity`, `price`, `proinventory_id`) VALUES(?,?,?,?,?)");
             $true = $stmt->execute([$idno, $item_name, $quantity, $price, $proinventory_id]);

         if ($true == true) {
                return true;
            } else {
                return false;
            }
        }
    // ==============================end add  pos purchased======================================//


  }
?>
