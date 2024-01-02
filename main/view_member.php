   <?php include 'navbar_sidebar/SideNav.php';?>
     <?php

            include_once('config/conn/db-connection.php');
            include_once('config/class/Gymmis_model.php');
            
             $conn = new GYMMIS_class();

             $memberid =  base64_decode(htmlentities($_GET['xde30ZvQ61cIv']));
             $member = $conn->view_member($memberid);
             foreach ($member as $row) {
                 $name = htmlentities($row['name']);
                 $age = htmlentities($row['age']);
                 $sex = htmlentities($row['sex']);
                 $birthday = htmlentities($row['birthday']);
                 $plan = htmlentities($row['plan']);
                 $email_address = htmlentities($row['email_address']);
                 $contact_no = htmlentities($row['contact_no']);
                 $address = htmlentities($row['address']);
                 $joining_date = htmlentities($row['joining_date']);
                 $expiring_date = htmlentities($row['expiring_date']);
                 $member_id = htmlentities($row['member_id']);

             }

         ?>
        <div class="nk-wrap ">
             <div class="nk-content ">
                 <div class="container-fluid">
                     <div class="nk-content-inner">
                        <div class="nk-content-body">
                          <div class="nk-block-head-content">
                             <h4 class="nk-block-title">VIEW MEMBER </h4> 
                                <div class="col-xxl-3 col-md-12 mt-3">
                                    <div class="card card-full overflow-hidden">
                                        <div class="nk-ecwg nk-ecwg7 h-100">
                                            <div class="card-inner flex-grow-1" style="background-color: #a8aaad;color: #fff">
                                          <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                       <div id="msg_editmem"></div>
                                       <div id="error_editmsg"></div>
                                       <div id="msg_delMem"></div>
		                                <form style="margin-left: 15%">
									      <div class="d-flex">
									          <div class="p-2 flex-fill">
									              <div class="form-group row">
									                  <label class="mt-1" style="font-weight: bold;">Full Name:</label>
									                  <div class="col-md-8">
									                      <input type="text" class="form-control" id="edit_name" value="<?php echo $name;?>">
									                  </div>
									              </div>
									          </div>
									          <div class="p-2 flex-fill">
									              <div class="form-group row">
									                  <label for="" class="mt-1" style="font-weight: bold;">Sex:</label>
									                  <div class="col-md-8">
									                      <input type="text" class="form-control" id="edit_sex"value="<?php echo $sex;?>">
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
									                      <input type="text" class="form-control" id="edit_birthday" value="<?php echo $birthday;?>">
									                  </div>
									              </div>
									          </div>
									          <div class="p-2 flex-fill">
									              <div class="form-group row">
									                  <label for="" class="mt-1" style="font-weight: bold;">Plan:</label>
									                  <div class="col-md-8">
									                      <input type="text" class="form-control" id="edit_plan" value="<?php echo $plan;?>">
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
									                  <label class="mt-1" style="font-weight: bold;">Email Address:</label>
									                  <div class="col-md-6">
									                      <input type="text" class="form-control" id="edit_emailaddress" value="<?php echo $email_address;?>">
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
									                      <input type="text" class="form-control" minlength="11" maxlength="11" id="edit_contactno" value="<?php echo $contact_no;?>">
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
									                  <label class="mt-1" style="font-weight: bold;">Joining Date:</label>
									                  <div class="col-md-6">
									                      <input type="date" class="form-control" id="edit_joiningdate" value="<?php echo $joining_date;?>">
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
                                                      <label class="mt-1" style="font-weight: bold;">Expiring Date:</label>
                                                      <div class="col-md-6">
                                                          <input type="date" class="form-control" id="edit_expiringdate" value="<?php echo $expiring_date;?>">
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
									              	<input type="hidden" name="member_id" id="member_id" value="<?php echo $member_id;?>">
									              	<input type="hidden" name="encryptedMemID" id="encryptedMemID" value="<?php echo $memberid;?>">
                                                            <input type="button" class="btn btn-danger" id="btn-delMem" value="Delete" style="margin-right: 4%"><input type="button" class="btn btn-info" value="Edit" id="btn-editmember" style="margin-right: 4%"><a href="main/members.php"><input type="button" class="btn btn-warning" value="Cancel"></a>
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
        let btn = document.querySelector('#btn-editmember');
        btn.addEventListener('click', (e) => {
            e.preventDefault();


            const name = document.querySelector('input[id=edit_name]').value;
            console.log(name);

            const age = document.querySelector('input[id=edit_age]').value;
            console.log(age);

            const sex = document.querySelector('input[id=edit_sex]').value;
            console.log(sex);

            const birthday = document.querySelector('input[id=edit_birthday]').value;
            console.log(birthday);

            const plan = document.querySelector('input[id=edit_plan]').value;
            console.log(plan);

            const email_address = document.querySelector('input[id=edit_emailaddress]').value;
            console.log(email_address);

            const contact_no = document.querySelector('input[id=edit_contactno]').value;
            console.log(contact_no);

            const address = document.querySelector('input[id=edit_address]').value;
            console.log(address);

            const joining_date = document.querySelector('input[id=edit_joiningdate]').value;
            console.log(joining_date);

            const expiring_date = document.querySelector('input[id=edit_expiringdate]').value;
            console.log(expiring_date);

            const member_id = document.querySelector('input[id=member_id]').value;
            console.log(member_id);

            const encryptedMemID = document.querySelector('input[id=encryptedMemID]').value;
            console.log(encryptedMemID);

            var data = new FormData(this.form);

            data.append('name', name);
            data.append('age', age);
            data.append('sex', sex);
            data.append('birthday', birthday);
            data.append('plan', plan);
            data.append('email_address', email_address);
            data.append('contact_no', contact_no);
            data.append('address', address);
            data.append('joining_date', joining_date);
            data.append('expiring_date', expiring_date);
            data.append('member_id', member_id);
            data.append('encryptedMemID', encryptedMemID);
             
                $.ajax({
                    url: 'main/config/process/member_process_edit.php',
                    type: "POST",
                    data: data,
                    processData: false,
                    contentType: false,
                    async: false,
                    cache: false,
                    success: function(response) {
                        $("#msg_editmem").html(response).show().delay(1000).fadeOut(600);
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
        let btn = document.querySelector('#btn-delMem');
        btn.addEventListener('click', (e) => {
            e.preventDefault();

            const member_id = document.querySelector('input[id=member_id]').value;
            console.log(member_id);

            var data = new FormData(this.form);

            data.append('member_id', member_id);


                $.ajax({
                    url: 'main/config/process/member_process_delete.php',
                    type: "POST",
                    data: data,
                    processData: false,
                    contentType: false,
                    async: false,
                    cache: false,
                    success: function(response) {
                        $("#msg_delMem").html(response).show().delay(1000).fadeOut(600);
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