           <?php include 'navbar_sidebar/SideNav.php';?>
            <div class="nk-wrap ">
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="col-xxl-3 col-md-12 mt-0">
                                    <div class="card card-full overflow-hidden">
                                        <div class="nk-ecwg nk-ecwg7 h-100">
                                            <div class="card-inner flex-grow-1">
                                          <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                              <?php
                                                 foreach($Accounts as $row){ ?>
                                                <div class="row">
                                                <div class="col-md-10" style="">
                                                    <h4 class="nk-block-title"> ACCOUNT </h4> 
                                                </div>
                                               <div class="card" style="border-color: black;border: 1px solid black;padding: 1% 10% 1% 10%;margin-left: 25%">
                                                <div class="card-inner">
                                                    <p class="card-text"><img src="images/a-removebg-preview.png"></p>
                                                    <p align="center" style="font-size: 15px!important;font-weight: bold;"><?= htmlentities($row['username']); ?> <br><?= htmlentities($row['full_name']); ?><br><?= htmlentities($row['email_address']); ?><br><?= htmlentities($row['contact_no']); ?><br><?= htmlentities($row['address']); ?></p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                          
                                         </div>
                                        </div>
                                           <div class="card card-preview">
                                             <div class="card-inner">             
                                                    <div class="d-flex flex-column bg-lighter mb-1" style="width: 20%;">
                                                      <a href="main/change_account.php?Yd45OilZ18dvXz=<?= base64_encode(htmlentities($row['staff_id'])); ?>"> <div class="p-2 bg-light account" style="border-bottom: 1px solid black" id="account_select" >Change Account</div></a>
                                                         <?php } ?>
                                                       <a href="main/logout.php"><div class="p-2 bg-light account" id="account_select">Logout</div></a>
                                                    </div>
                                                 </div>
                                                 </div><!-- .card-preview -->
                                                    </div> <!-- nk-block -->
                                                    </div><!-- .card-inner -->
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->  
                                    </div><!-- .row -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> &copy; 2022 GYM. All Rights Reserved | <a href="#" target="_blank">MIS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./assets/js/bundle.js?ver=2.4.0"></script>
    <script src="./assets/js/scripts.js?ver=2.4.0"></script>
    <script src="./assets/js/charts/chart-ecommerce.js?ver=2.4.0"></script>
</body>

</html>