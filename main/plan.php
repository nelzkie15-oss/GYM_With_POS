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
                                                    <h4 class="nk-block-title"> PLAN </h4> 
                                                </div>
                                            </div>
                                                <div class="nk-block-des">
                                                </div>
                                            </div>
                                        </div>
                                        <div id="results_del"></div>
                                           <div class="card card-preview">
                                                            <div class="card-inner">
                                                                <table class="datatable-init table" id="plan_table">
                                                                    <thead>
                                                                        <tr style="background-color: #5b93d4;color: #fff">
                                                                            <th style="visibility:hidden;"></th>
                                                                            <th>PLAN NAME</th>
                                                                            <th>DESCRIPTION</th>
                                                                            <th>AMOUNT</th>         
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                  <?php
                                                                     foreach($plan as $row){ ?>
                                                                        <tr>
                                                                            <td style="visibility:hidden;"><?= htmlentities($row['plan_id']); ?></td>
                                                                            <td><?= htmlentities($row['plan_name']); ?></td>
                                                                            <td><?= htmlentities($row['description']); ?></td>
                                                                            <td>₱ <?= htmlentities(number_format($row['amount'],2)); ?></td>
                                                                        </tr>
                                                                    <?php } ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div><!-- .card-preview -->
                                                     <div class="row">
                                                     <div class="col-md-9"></div>
                                                      <div class="col-md-3">
                                                      <div class="form-group row">
                                                       <input type="button"  style="margin-right: 4%" id="click_pdelete" class="btn btn-danger" value="DELETE">   <a href="main/add_plan.php"  style="margin-right: 4%"><input type="button" class="btn btn-info" value="ADD"></a>
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
                       $('#plan_table').on('click', 'tr', function() {
                              var plan_id = $(this).find("td:first-child").text();
                             get_delIds(plan_id); //argument   
                     
                       });
                    }

                     function get_delIds(plan_id) {
                     var plan_id = plan_id;
                    // console.log(plan_id);

                      $(document).on('click', '#click_pdelete', function(e) {
                         e.preventDefault();
                   if(plan_id == ''){
                        alert('Please select Plan Name before click a button');
                    
                      }else{
                         $.ajax({
                                url: 'main/config/process/plan_process_delete.php', 
                                method: 'POST',
                                data: { plan_id : plan_id },
                                success: function(results) { 
                                    $('#results_del').html(results);   
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


                <div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> &copy; 2022 GYM. All Rights Reserved | <a href="#" target="_blank">MIS</a>
                            </div>
                        </div>
                    </div>
                </div>>
            </div>
        </div>
    </div>
    <script src="./assets/js/bundle.js?ver=2.4.0"></script>
    <script src="./assets/js/scripts.js?ver=2.4.0"></script>
    <script src="./assets/js/charts/chart-ecommerce.js?ver=2.4.0"></script>
</body>

</html>