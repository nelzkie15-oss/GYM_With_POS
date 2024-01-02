   <?php include 'navbar_sidebar/SideNav.php';?>
        <div class="nk-wrap ">
             <div class="nk-content ">
                <div class="container-fluid">
                     <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="col-xxl-3 col-md-12 mt-3">
                                <div class="card card-full overflow-hidden">
                                    <div class="nk-ecwg nk-ecwg7 h-100">
                                        <div class="card-inner flex-grow-1">
                                          <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <div class="row">
                                                <div class="col-md-10">
                                                    <h4 class="nk-block-title"> MEMBERS ARCHIVED </h4> 
                                                </div>
                                            </div>
                                                <div class="nk-block-des">
                                                </div>
                                            </div>
                                        </div>
                                        <div id="results"></div>
                                        <div id="retrieve"></div>
                                        
                                           <div class="card card-preview">
                                                            <div class="card-inner">
                                                                <table class="datatable-init table" id="members_table2">
                                                                    <thead>
                                                                        <tr style="background-color: #f0b505;color: #fff">
                                                                            <th style="visibility:hidden;"></th>
                                                                            <th>NAME</th>
                                                                            <th style="visibility:hidden;"></th>
                                                                            <th style="visibility:hidden;"></th>
                                                                            <th style="visibility:hidden;"></th>
                                                                            <th style="visibility:hidden;"></th>
                                                                            <th style="visibility:hidden;"></th>
                                                                            <th style="visibility:hidden;"></th>
                                                                            <th style="visibility:hidden;"></th>
                                                                            <th style="visibility:hidden;"></th>
                                                                            <th style="visibility:hidden;"></th>
                                                                            <th style="visibility:hidden;"></th>
                                                                            <th>JOINING DATE</th>
                                                                            <th>EXPIRED DATE</th>
                                                                            <th>PLAN</th>
                                                                          
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                
                                                                   <?php
                                                                     foreach($archieved as $row){ ?>
                                                                        <tr>
                                                                            <td style="visibility:hidden;"><?= base64_encode(htmlentities($row['trash_id'])); ?></td>
                                                                            <td><?= htmlentities($row['name']); ?></td>
                                                                            <td style="visibility:hidden;"><?= htmlentities($row['age']); ?></td>
                                                                            <td style="visibility:hidden;"><?= htmlentities($row['sex']); ?></td>
                                                                            <td style="visibility:hidden;"><?= htmlentities($row['birthday']); ?></td>
                                                                            <td style="visibility:hidden;"><?= htmlentities($row['plan']); ?></td>
                                                                            <td style="visibility:hidden;"><?= htmlentities($row['email_address']); ?></td>
                                                                            <td style="visibility:hidden;"><?= htmlentities($row['contact_no']); ?></td>
                                                                            <td style="visibility:hidden;"><?= htmlentities($row['address']); ?></td>
                                                                            <td style="visibility:hidden;"><?= htmlentities($row['joining_date']); ?></td>
                                                                            <td style="visibility:hidden;"><?= htmlentities($row['expiring_date']); ?></td>
                                                                            <td style="visibility:hidden;"><?= htmlentities($row['trash_id']); ?></td>
                                                                            <td><?= htmlentities(date("M d, Y",strtotime($row['joining_date']))); ?></td>
                                                                            <td><?= htmlentities(date("M d, Y",strtotime($row['expiring_date']))); ?></td>
                                                                            <td><?= htmlentities($row['plan']); ?></td>
                                                                        </tr>
                                                                    <?php } ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div><!-- .card-preview -->
                                                      <div class="row">
                                                     <div class="col-md-8"></div>
                                                      <div class="col-md-4">
                                                      <div class="form-group row">
                                                       <input type="button" id="click_archived" data-name="<?= htmlentities($row['name']); ?>" class="btn btn-info" value="RETRIEVE"  style="margin-right: 4%"><input type="button"  style="margin-right: 4%" id="click_view" class="btn btn-info" value="VIEW">
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
             <script type="text/javascript">
             $(document).ready(function() {  
                load_data();    
                   var count = 1; 
                   function load_data() {
                       $('#members_table2').on('click', 'tr', function() {
                              var trash_id = $(this).find("td:first-child").text();
                               console.log(trash_id);
                             get_delId(trash_id); //argument   
                     
                       });
                    }

                     function get_delId(trash_id) {
                     var id = trash_id;


                      $(document).on('click', '#click_view', function(e) {
                         e.preventDefault();
                   if(id == ''){
                        alert('Please select Name before click a button');
                    
                      }else{
                         $.ajax({
                                url: 'main/view_member2.php', 
                                method: 'GET',
                                data: { id : id },
                                success: function(result) {
                                 //$('results').html(result);
                                   setTimeout(function () {  
                                       window.location.href = 'main/view_member2.php?xde30ZvQ61cIv2='+id;
                                 }, 100);
                                }
                              });

                           }

                       });
                    }

               });

             //////////////////////////////////////////////////////

             $( function() {
              $('td').click( function() {
                $(this).parents('table').find('td').each( function( index, element ) {
                    $(element).removeClass('on');
                } );
                $(this).addClass('on');
              } );
            } );
    
        </script>

     <script type="text/javascript">
       $(document).ready(function() {  
                load_data();    
                   var count = 1; 
                   function load_data() {
                       $('#members_table2').on('click', 'tr', function() {
                              var name = $(this).find("td:nth-child(2)").text();
                              var age = $(this).find("td:nth-child(3)").text();
                              var sex = $(this).find("td:nth-child(4)").text();
                              var birthday = $(this).find("td:nth-child(5)").text();
                              var plan = $(this).find("td:nth-child(6)").text();
                              var email_address = $(this).find("td:nth-child(7)").text();
                              var contact_no = $(this).find("td:nth-child(8)").text();
                              var address = $(this).find("td:nth-child(9)").text();
                              var joining_date = $(this).find("td:nth-child(10)").text();
                              var expiring_date = $(this).find("td:nth-child(11)").text();
                              var trash_id = $(this).find("td:nth-child(12)").text();
                          get_delIds(name, age, sex, birthday, plan, email_address, contact_no, address, joining_date, expiring_date, trash_id); //argument   
  
                       });
                    }

                 function get_delIds(name, age, sex, birthday, plan, email_address, contact_no, address, joining_date, expiring_date, trash_id) {


                   $(document).on('click', '#click_archived', function(e) {
                   e.preventDefault();

                   if(trash_id == ''){
                        alert('Please select Item Name before click a button');
                    
                      }else{
                         $.ajax({
                                url: 'main/config/process/retrieve_process_delete.php', 
                                method: 'POST',
                                data: {
                                    name: name,
                                    age: age,
                                    sex: sex,
                                    birthday: birthday,
                                    plan: plan,
                                    email_address: email_address,
                                    contact_no: contact_no,
                                    address: address,
                                    joining_date: joining_date,
                                    expiring_date: expiring_date,
                                    trash_id : trash_id

                                },
                                success: function(results) { 
                                    $('#retrieve').html(results);   
                                }
                              });

                           }

                       });
                    }

               });

       </script>

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