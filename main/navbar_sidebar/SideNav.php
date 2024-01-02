
<?php

   session_start();

    include_once('config/conn/db-connection.php');
    include_once('config/class/Gymmis_model.php');

   if(!isset($_SESSION['logged_in'])){
       header("location:../main/504.php");  
    }else{
    
     $conn = new GYMMIS_class();
     $AdminID_session = trim($_SESSION['user_no']);
     $admin = $conn->fetch_Adminsession($AdminID_session);
     $session_user = $conn->fetch_Adminsession($AdminID_session);
     $staff = $conn->fetch_Staff();
     $member = $conn->fetch_members();
     $archieved = $conn->fetch_membersArchieved();
     $visitor = $conn->fetch_visitors();
     $plan = $conn->fetch_plan();
     $equipmentInv = $conn->fetch_equipmentinventory(); 
     $productInv = $conn->fetch_producttinventory(); 
     $pos = $conn->fetch_pos(); 
     $posSumTotal = $conn->fetch_countposTotal(); 
     $Accounts = $conn->fetch_Account($AdminID_session); 
     $visitorName = $conn->fetchAllVisitorsname();
     $cmembers = $conn->count_members();
     $cvisitors = $conn->count_visitors();
     $cstaff = $conn->count_staff();
     $creticalstock = $conn->cretical_stockproductinventory();
     $pexpired = $conn->expiration_stockproductinventory();
     $gymfeeInv = $conn->fetch_gymfeeinventory();
     $posgymfee = $conn->fetch_posgymfee(); 
     $gfeeInv = $conn->fetch_gymfeetinventory();

 ?>

<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/2483892.png">
    <!-- Page Title  -->
    <title>Dahboard</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="./assets/css/dashlite.css?ver=2.4.0">
    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=2.4.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style type="text/css">
        #chart-container {
            width: 100%;
            height: auto;
        }
        /* -- quantity box -- */

        .quantity {
         display: inline-block; }

        .quantity .input-text.qty {
         width: 35px;
         height: 41px;
         padding: 0 5px;
         text-align: center;
         background-color: transparent;
         border: 1px solid #efefef;
        }

        .quantity.buttons_added {
         text-align: left;
         position: relative;
         white-space: nowrap;
         vertical-align: top; }

        .quantity.buttons_added input {
         display: inline-block;
         margin: 0;
         vertical-align: top;
         box-shadow: none;
        }

        .quantity.buttons_added .minus,
        .quantity.buttons_added .plus {
         padding: 7px 10px 8px;
         height: 41px;
         background-color: #ffffff;
         border: 1px solid #efefef;
         cursor:pointer;}

        .quantity.buttons_added .minus {
         border-right: 0; }

        .quantity.buttons_added .plus {
         border-left: 0; }

        .quantity.buttons_added .minus:hover,
        .quantity.buttons_added .plus:hover {
         background: #eeeeee; }

        .quantity input::-webkit-outer-spin-button,
        .quantity input::-webkit-inner-spin-button {
         -webkit-appearance: none;
         -moz-appearance: none;
         margin: 0; }
         
         .quantity.buttons_added .minus:focus,
        .quantity.buttons_added .plus:focus {
         outline: none; }


        </style>
    <style type="text/css">
   #account_select {
            cursor: pointer;
        }

         menu, nav, section { display: block; }
        .on { background-color:#7eb3ed; color:#ffffff; }


        #members_table tr td:nth-child(1), #members_table th:nth-child(1) {
            display: none;
        }

           #product_select {
            cursor: pointer;
        }
    </style>

    <style type="text/css">

        menu, nav, section { display: block; }
        .on { background-color:#b2c288; color:#ffffff; }

        #members_table tr td:nth-child(1), #members_table th:nth-child(1) {
            display: none;
        }


        #plan_table tr td:nth-child(1), #plan_table th:nth-child(1) {
            display: none;
        }
        

        #pos_table tr td:nth-child(1), #pos_table th:nth-child(1) {
            display: none;
        }
        
         #pos_table tr td:nth-child(6), #pos_table th:nth-child(6) {
            display: none;
        }
        
         #pos_table tr td:nth-child(7), #pos_table th:nth-child(7) {
            display: none;
        }

         #pos_table tr td:nth-child(8), #pos_table th:nth-child(8) {
            display: none;
        }

          #pos_table tr td:nth-child(9), #pos_table th:nth-child(9) {
            display: none;
        }

          #pos_table tr td:nth-child(10), #pos_table th:nth-child(10) {
            display: none;
        }
        div.account:hover {
        background-color: red;
      }


       .btn_pos:hover {
          transform: scale(1.05);
           transition: .3s;
          box-shadow: 0 0 40px -10px rgba(0, 0, 0, 0.25);
        }

          #members_table2 tr td:nth-child(1), #members_table2 th:nth-child(1) {
            display: none;
        }

         #members_table2 tr td:nth-child(3), #members_table2 th:nth-child(3) {
            display: none;
        }

          #members_table2 tr td:nth-child(4), #members_table2 th:nth-child(4) {
            display: none;
        }
       
        #members_table2 tr td:nth-child(5), #members_table2 th:nth-child(5) {
            display: none;
        }
         #members_table2 tr td:nth-child(6), #members_table2 th:nth-child(6) {
            display: none;
        }

       #members_table2 tr td:nth-child(7), #members_table2 th:nth-child(7) {
            display: none;
        }

      #members_table2 tr td:nth-child(8), #members_table2 th:nth-child(8) {
            display: none;
        }

       #members_table2 tr td:nth-child(9), #members_table2 th:nth-child(9) {
            display: none;
        }

       #members_table2 tr td:nth-child(10), #members_table2 th:nth-child(10) {
            display: none;
        }

       #members_table2 tr td:nth-child(11), #members_table2 th:nth-child(11) {
            display: none;
        }

       #members_table2 tr td:nth-child(12), #members_table2 th:nth-child(12) {
            display: none;
        }
    </style>

</head>

<body class="nk-body bg-lighter npc-default has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            <div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-sidebar-brand mt-5">
                       <h4><img src="images/2483892.png" height="40px" width="40px"> ADMIN'S POV</h4>
                        
                        </a>
                    </div>
                    <div class="nk-menu-trigger mr-n2">

                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                        <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                    </div>
                </div><!-- .nk-sidebar-element -->

                <div class="nk-sidebar-element">
                    <div class="nk-sidebar-content">
                        <div class="nk-sidebar-menu" data-simplebar>
                            <ul class="nk-menu">
                              <li class="nk-menu-item">
                                    <a href="#" class="nk-menu-link" style="background-color: #daedf5">
                                        <span class="nk-menu-icon"><em class="icon ni ni-user-circle-fill"></em></span>
                                        <span class="nk-menu-text"> Welcome!, <?php foreach ($admin as $value) { echo ''.ucfirst($value['username']); }?></span>
                                    </a>
                                </li>

                                <li class="nk-menu-item">
                                    <a href="main/dashboard.php" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-home-fill"></em></span>
                                        <span class="nk-menu-text">DASHBOARD</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
      
                                <li class="nk-menu-item has-sub">
                                    <a href="main/pos.php" class="nk-menu-link ">
                                        <span class="nk-menu-icon"><em class="icon ni ni-cc-alt"></em></span>
                                        <span class="nk-menu-text">POS FOR PRODUCT</span>
                                    </a>
                        
                                </li><!-- .nk-menu-item -->


                                <li class="nk-menu-item has-sub">
                                    <a href="main/pos_gymfee.php" class="nk-menu-link ">
                                        <span class="nk-menu-icon"><em class="icon ni ni-cc-alt"></em></span>
                                        <span class="nk-menu-text">POS FOR GYM FEE</span>
                                    </a>
                        
                                </li><!-- .nk-menu-item -->

                                 <li class="nk-menu-item has-sub">
                                    <a href="main/members.php" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                        <span class="nk-menu-text">MEMBERS</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                               <li class="nk-menu-item has-sub">
                                    <a href="main/members_archived.php" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                        <span class="nk-menu-text">MEMBERS ARCHIVED</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                 <li class="nk-menu-item has-sub">
                                    <a href="main/plan.php" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-clipboard"></em></span>
                                        <span class="nk-menu-text">PLAN</span>
                                    </a>
                                </li><!-- .nk-menu-item -->

                                <li class="nk-menu-item has-sub">
                                    <a href="main/visitor.php" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-user-c"></em></span>
                                        <span class="nk-menu-text">VISITORS</span>
                                    </a>
        
                                </li><!-- .nk-menu-item -->


                                <li class="nk-menu-item has-sub">
                                    <a href="main/equipment_inventory.php" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-card-view"></em></span>
                                        <span class="nk-menu-text">EQUIPMENT INVENTORY</span>
                                    </a>

                                </li><!-- .nk-menu-item -->

                                <li class="nk-menu-item has-sub">
                                    <a href="main/product_inventory.php" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-list-round"></em></span>
                                        <span class="nk-menu-text">PRODUCT INVENTORY</span>
                                    </a>
                
                                </li><!-- .nk-menu-item -->

                                 <li class="nk-menu-item has-sub">
                                    <a href="main/gymfee_inventory.php" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-list-round"></em></span>
                                        <span class="nk-menu-text">GYM FEE INVENTORY</span>
                                    </a>
                
                                </li><!-- .nk-menu-item -->

                                 <li class="nk-menu-item has-sub">
                                    <a href="main/staff.php" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-user-list"></em></span>
                                        <span class="nk-menu-text">STAFF</span>
                                    </a>
                    
                                </li><!-- .nk-menu-item -->


                                <li class="nk-menu-item has-sub">
                                    <a href="main/sales_report.php" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-reports"></em></span>
                                        <span class="nk-menu-text">SALES REPORT</span>
                                    </a>
                                </li><!-- .nk-menu-item -->


                                <li class="nk-menu-item has-sub">
                                    <a href="main/inventory_report.php" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-reports"></em></span>
                                        <span class="nk-menu-text">INVENTORY REPORT</span>
                                    </a>
                                </li><!-- .nk-menu-item -->

                                <li class="nk-menu-item has-sub">
                                    <a href="main/account.php" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-account-setting-alt"></em></span>
                                        <span class="nk-menu-text">ACCOUNT</span>
                                    </a>

                                </li><!-- .nk-menu-item -->              
                           </ul><!-- .nk-menu -->
                        </div><!-- .nk-sidebar-menu -->
                    </div><!-- .nk-sidebar-content -->
                </div><!-- .nk-sidebar-element -->
            </div>

<?php } ?>