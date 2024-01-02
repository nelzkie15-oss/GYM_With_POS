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
                                                  <div class="" id="msg_ep"></div>
                                              <?php
                                                  include_once('config/conn/db-connection.php');
                                                   include_once('config/class/Gymmis_model.php');
            
                                                 $conn = new GYMMIS_class();

                                                 $staffid =  base64_decode(htmlentities($_GET['Yd45OilZ18dvXz']));
                                                  $staffAdminaccount = $conn->view_account($staffid);
                                                 foreach ($staffAdminaccount as $row) {
                                                     $username = htmlentities($row['username']);
                                                     $password = htmlentities($row['password']);
                                                     $staff_id = htmlentities($row['staff_id']);

                                                     }

                                                 ?>
                                                <div class="row">
                                                <div class="col-md-10" style="">
                                                    <h4 class="nk-block-title">CHANGE ACCOUNT </h4> 
                                                </div>
                                               <div class="card" style="border-color: black;border: 1px solid black;padding: 1% 10% 1% 10%;margin-left: 25%;margin-top: 2%">
                                                <div class="card-inner">
                                 <!--                    <p class="card-text"><img src="images/a-removebg-preview.png"></p> -->
                                                    <form method="POST">
                                                  
                                                      <div class="form-group">
                                                        <label><b>Username</b></label>
                                                        <input type="text" name="" class="form-control" id="acusername" value="<?php echo $username; ?>">
                                                      </div>
                                                        <div class="form-group">
                                                        <label><b> Password</b></label>
                                                        <input type="password" name="" class="form-control" id="acpassword" value="<?php echo $password; ?>">
                                                      </div>
<!--                                                         <div class="form-group">
                                                        <label><b>New Password</b></label>
                                                        <input type="password" name="" class="form-control" >
                                                      </div> -->
                                                      <div class="form-group">
                                                         <input type="hidden" name="" id="acstaff_id" value="<?php echo $staff_id; ?>">
                                                          <input type="hidden" name="" id="session_Staffid" value="<?php echo $staffid; ?>">
                                                        <button type="button" class="btn btn-info btn-block" id="change_Account" value="Update Account">Update Account</button>
                                                      </div>
                                                    </form>
                                                    
                                                </div>
                                            </div>
                                        </div>
            
                                         </div>
                                        </div>
                                           <div class="card card-preview">
                                             <div class="card-inner">             
                                                    <div class="d-flex flex-column bg-lighter mb-1" style="width: 20%;">
                                                      <a href="main/account.php"> <div class="p-2 bg-light account" style="border-bottom: 1px solid black" id="account_select" ><strong>My Profile</strong></div></a>
                                          
                                                       <a href="main/logout.php"><div class="p-2 bg-light account" id="account_select"><strong>Logout</strong></div></a>
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
      <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', () => {
        let btn = document.querySelector('#change_Account');
        btn.addEventListener('click', (e) => {
            e.preventDefault();


            const username = document.querySelector('input[id=acusername]').value;
            console.log(username);

            const password = document.querySelector('input[id=acpassword]').value;
            console.log(password);

            const staff_id = document.querySelector('input[id=acstaff_id]').value;
            console.log(staff_id);

            const session_Staffid = document.querySelector('input[id=session_Staffid]').value;
            console.log(session_Staffid);



            var data = new FormData(this.form);

            data.append('username', username);
            data.append('password', password);
            data.append('staff_id', staff_id);
            data.append('session_Staffid', session_Staffid);

             
                $.ajax({
                    url: 'main/config/process/changeaccount_process.php',
                    type: "POST",
                    data: data,
                    processData: false,
                    contentType: false,
                    async: false,
                    cache: false,
                    success: function(response) {
                        $("#msg_ep").html(response).show().delay(1000).fadeOut(600);
                       },
                    error: function(response) {
                        console.log("Failed");
                    }
                });
            
 
        });
    });
</script>
    <script src="./assets/js/bundle.js?ver=2.4.0"></script>
    <script src="./assets/js/scripts.js?ver=2.4.0"></script>
    <script src="./assets/js/charts/chart-ecommerce.js?ver=2.4.0"></script>
</body>

</html>