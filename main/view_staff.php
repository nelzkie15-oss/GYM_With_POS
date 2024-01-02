   <?php include 'navbar_sidebar/SideNav.php';?>
      <?php

            include_once('config/conn/db-connection.php');
            include_once('config/class/Gymmis_model.php');
            
             $conn = new GYMMIS_class();

             $staffid =  base64_decode(htmlentities($_GET['qZx3zYcwe9u02']));
             $staff = $conn->view_Staff($staffid);
             foreach ($staff as $row) {
                 $fullname = htmlentities($row['full_name']);
                 $sex = htmlentities($row['sex']);
                 $age = htmlentities($row['age']);
                 $date_ofbirth = htmlentities($row['date_ofbirth']);
                 $email_address = htmlentities($row['email_address']);
                 $address = htmlentities($row['address']);
                 $contact_no = htmlentities($row['contact_no']);
                 $username = htmlentities($row['username']);
                 $password = htmlentities($row['password']);
                 $role = htmlentities($row['role']);
                 $staff_id = htmlentities($row['staff_id']);

             }

         ?>
            <div class="nk-wrap ">
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head-content">
                                    <h4 class="nk-block-title">VIEW STAFF </h4>
                                    <div class="col-xxl-3 col-md-12 mt-3">
                                        <div class="card card-full overflow-hidden">
                                            <div class="nk-ecwg nk-ecwg7 h-100">
                                                <div class="card-inner flex-grow-1" style="background-color: #a8aaad;color: #fff">
                                                    <div class="nk-block nk-block-lg">
                                                        <div class="nk-block-head">
                                                            <div id="msg_editstaff"></div>
                                                            <div id="msg_delstaff"></div>
                                                            <form style="margin-left: 15%">
                                                                <div class="d-flex">
                                                                    <div class="p-2 flex-fill">
                                                                        <div class="form-group row">
                                                                            <label class="mt-1" style="font-weight: bold;">Full Name:</label>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control" id="edit_fullname" value="<?php echo $fullname;?>">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="p-2 flex-fill">
                                                                        <div class="form-group row">
                                                                            <label for="" class="mt-1" style="font-weight: bold;">Sex:</label>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control"  id="edit_sex" value="<?php echo $sex;?>">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="p-2 flex-fill">
                                                                        <div class="form-group row">
                                                                            <label for="" class="mt-1" style="font-weight: bold;">Age:</label>
                                                                            <div class="col-md-5">
                                                                                <input type="text" class="form-control" id="edit_age" value="<?php echo $age;?>">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="p-2 flex-fill">
                                                                        <div class="form-group row">

                                                                        </div>
                                                                    </div>

                                                                    <div class="p-2 flex-fill">
                                                                        <div class="form-group row">

                                                                        </div>
                                                                    </div>

                                                                    <div class="p-2 flex-fill">
                                                                        <div class="form-group row">

                                                                        </div>
                                                                    </div>
                                                                    <div class="p-2 flex-fill">
                                                                        <div class="form-group row">

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="d-flex">
                                                                    <div class="p-2 flex-fill">
                                                                        <div class="form-group row">
                                                                            <label class="mt-1" style="font-weight: bold;">Date of Birth:</label>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control" id="edit_dateofbirth" value="<?php echo $date_ofbirth;?>">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="p-2 flex-fill">
                                                                        <div class="form-group row">
                                                                            <label for="" class="mt-1" style="font-weight: bold;">Email Address:</label>
                                                                            <div class="col-md-8">
                                                                                <input type="email" class="form-control" id="edit_emailaddress" value="<?php echo $email_address;?>">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="p-2 flex-fill">
                                                                        <div class="form-group row">

                                                                        </div>
                                                                    </div>

                                                                    <div class="p-2 flex-fill">
                                                                        <div class="form-group row">

                                                                        </div>
                                                                    </div>

                                                                    <div class="p-2 flex-fill">
                                                                        <div class="form-group row">

                                                                        </div>
                                                                    </div>

                                                                    <div class="p-2 flex-fill">
                                                                        <div class="form-group row">

                                                                        </div>
                                                                    </div>
                                                                    <div class="p-2 flex-fill">
                                                                        <div class="form-group row">

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="d-flex">
                                                                    <div class="p-2 flex-fill">
                                                                        <div class="form-group row">
                                                                            <label class="mt-1" style="font-weight: bold;">Address:</label>
                                                                            <div class="col-md-10">
                                                                                <input type="text" class="form-control" id="edit_address" value="<?php echo $address;?>">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="p-2 flex-fill">
                                                                        <div class="form-group row">

                                                                        </div>
                                                                    </div>

                                                                    <div class="p-2 flex-fill">
                                                                        <div class="form-group row">

                                                                        </div>
                                                                    </div>
                                                                    <div class="p-2 flex-fill">
                                                                        <div class="form-group row">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="p-2 flex-fill">
                                                                        <div class="form-group row">
                                                                            <label class="mt-1" style="font-weight: bold;">Contact #:</label>
                                                                            <div class="col-md-6">
                                                                                <input type="text" class="form-control" id="edit_contactno" value="<?php echo $contact_no;?>">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="p-2 flex-fill">
                                                                        <div class="form-group row">

                                                                        </div>
                                                                    </div>

                                                                    <div class="p-2 flex-fill">
                                                                        <div class="form-group row">

                                                                        </div>
                                                                    </div>
                                                                    <div class="p-2 flex-fill">
                                                                        <div class="form-group row">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="p-2 flex-fill">
                                                                        <div class="form-group row">
                                                                            <label class="mt-1" style="font-weight: bold;">Username:</label>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control" id="edit_username" value="<?php echo $username;?>">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="p-2 flex-fill">
                                                                        <div class="form-group row">
                                                                            <label class="mt-1" style="font-weight: bold;">Type:</label>
                                                                            <div class="col-md-7">
                                                                                <div class="form-control-select">
                                                                                    <select class="form-control" id="edit_role" value="<?php echo $role;?>">
                                                                                        <option value="<?php echo $role;?>" hidden><?php echo $role;?></option>
                                                                                        <option value="Staff">Staff</option>
                                                                                        <option value="Admin">Admin</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="p-2 flex-fill">
                                                                        <div class="form-group row">

                                                                        </div>
                                                                    </div>

                                                                    <div class="p-2 flex-fill">
                                                                        <div class="form-group row">

                                                                        </div>
                                                                    </div>
                                                                    <div class="p-2 flex-fill">
                                                                        <div class="form-group row">

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="d-flex">
                                                                    <div class="p-2 flex-fill">
                                                                        <div class="form-group row">
                                                                            <label class="mt-1" style="font-weight: bold;">Password:</label>
                                                                            <div class="col-md-7">
                                                                                <input type="password" class="form-control" id="edit_password" value="<?php echo $password;?>">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="p-2 flex-fill">
                                                                        <div class="form-group row">

                                                                        </div>
                                                                    </div>

                                                                    <div class="p-2 flex-fill">
                                                                        <div class="form-group row">

                                                                        </div>
                                                                    </div>
                                                                    <div class="p-2 flex-fill">
                                                                        <div class="form-group row">

                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="d-flex">

                                                                    <div class="p-2 flex-fill">
                                                                        <div class="form-group row">

                                                                        </div>
                                                                    </div>
                                                                    <div class="p-2 flex-fill">
                                                                        <div class="form-group row">

                                                                        </div>
                                                                    </div>
                                                                    <div class="p-2 flex-fill">
                                                                        <div class="form-group row">
                                                                            <input type="hidden" name="staff_id" id="staff_id" value="<?php echo $staff_id;?>">
                                                                             <input type="hidden" name="encryptedID" id="encryptedID" value="<?php echo $staffid;?>">
                                                                            <input type="button" class="btn btn-danger" id="btn-delStaff" value="Delete" style="margin-right: 4%"><input type="button" class="btn btn-info" id="btn-editStaff" value="Edit" style="margin-right: 4%"><a href="main/staff.php"><input type="button" class="btn btn-warning" value="Cancel"></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="p-2 flex-fill">
                                                                        <div class="form-group row">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
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
        let btn = document.querySelector('#btn-editStaff');
        btn.addEventListener('click', (e) => {
            e.preventDefault();


            const full_name = document.querySelector('input[id=edit_fullname]').value;
            console.log(full_name);

            const sex = document.querySelector('input[id=edit_sex]').value;
            console.log(sex);

            const age = document.querySelector('input[id=edit_age]').value;
            console.log(age);

            const date_ofbirth = document.querySelector('input[id=edit_dateofbirth]').value;
            console.log(date_ofbirth);

            const email_address = document.querySelector('input[id=edit_emailaddress]').value;
            console.log(email_address);

            const address = document.querySelector('input[id=edit_address]').value;
            console.log(address);

            const contact_no = document.querySelector('input[id=edit_contactno]').value;
            console.log(contact_no);

            const username = document.querySelector('input[id=edit_username]').value;
            console.log(username);

            const password = document.querySelector('input[id=edit_password]').value;
            console.log(password);

            const role = $('#edit_role option:selected').val();
            console.log(role);

            const staff_id = document.querySelector('input[id=staff_id]').value;
            console.log(staff_id);

            const encryptedID = document.querySelector('input[id=encryptedID]').value;
            console.log(encryptedID);

            var data = new FormData(this.form);

            data.append('full_name', full_name);
            data.append('sex', sex);
            data.append('age', age);
            data.append('date_ofbirth', date_ofbirth);
            data.append('email_address', email_address);
            data.append('address', address);
            data.append('contact_no', contact_no);
            data.append('username', username);
             data.append('password', password);
            data.append('role', role);
            data.append('staff_id', staff_id);
            data.append('encryptedID', encryptedID);

                $.ajax({
                    url: 'main/config/process/staff_process_edit.php',
                    type: "POST",
                    data: data,
                    processData: false,
                    contentType: false,
                    async: false,
                    cache: false,
                    success: function(response) {
                        $("#msg_editstaff").html(response).show().delay(1000).fadeOut(600);
                       },
                    error: function(response) {
                        console.log("Failed");
                    }
                });
            //}
 
        });
    });
</script>

<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', () => {
        let btn = document.querySelector('#btn-delStaff');
        btn.addEventListener('click', (e) => {
            e.preventDefault();


            const staff_id = document.querySelector('input[id=staff_id]').value;
            console.log(staff_id);

            var data = new FormData(this.form);

            data.append('staff_id', staff_id);


                $.ajax({
                    url: 'main/config/process/staff_process_delete.php',
                    type: "POST",
                    data: data,
                    processData: false,
                    contentType: false,
                    async: false,
                    cache: false,
                    success: function(response) {
                        $("#msg_delstaff").html(response).show().delay(1000).fadeOut(600);
                       },
                    error: function(response) {
                        console.log("Failed");
                    }
                });
            //}
 
        });
    });
</script>

    <script src="./assets/js/bundle.js?ver=2.4.0"></script>
    <script src="./assets/js/scripts.js?ver=2.4.0"></script>
    <script src="./assets/js/charts/chart-ecommerce.js?ver=2.4.0"></script>
</body>

</html>