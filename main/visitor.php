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
                                                    <h4 class="nk-block-title"> VISITORS LOGGED</h4> 
                                                </div>
                                            </div>
                                                <div class="nk-block-des">
                                                </div>
                                            </div>
                                        </div>
                                        <div id="results_v"></div>
                                         <div id="results_v2"></div>
                                           <div class="card card-preview">
                                                            <div class="card-inner">

                                                                   <div class = "form-inline" style="margin-bottom: 2%">
                                                                        <label>Name:</label>
                                                                    <input type = "text" class = "form-control" placeholder = "Required Full Name"  id = "name" autocomplete="off" required="" />
                                                                    <label></label>
                                                                    <button type="button" class="btn btn-success" id="time_in" value="Time In" style="margin-left: 1%"><em class="icon ni ni-clock"></em> Time In</button>
                                                                    <select class = "form-control" id="get_name" style="margin-left: 1%;">
                                                                     <option value="" disabled="disabled" selected="true">&larr; Select Name &rarr;</option>
                                                                      <?php
                                                                        foreach ($visitorName as $row) { ?>
                                                                        <option value="<?php echo $row['name'] ?>"><?php echo $row['name'];?></option>
                                                                    <?php } ?>
                                                                    </select>
                                                                   <label></label>
                                                                    <button type="button" class="btn btn-danger" id="time_out" value="Time In" style="margin-left: 1%;margin-right: 1%"><em class="icon ni ni-clock"></em> Time Out</button>
                                                                    
                                                                
                                                                  </div>
                                                                <table class="datatable table" id="visitor_table">
                                                                    <thead>
                                                                        <tr style="background-color: #5b93d4;color: #fff">
                                                                       
                                                                            <th>NAME</th>
                                                                            <th>TIME IN</th>
                                                                            <th>TIME OUT</th>
                                                                            <th>DATE LOGGED</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                     <?php
                                                                     foreach($visitor as $row){ ?>
                                                                        <tr>
                                                                             <td><?= htmlentities($row['name']); ?></td>
                                                                           <td>
                                                                              <?php if (empty(htmlentities($row['time_in']))) {
                                                                                echo "";
                                                                               }else{
                                                                                  echo date("g:i a", strtotime(htmlentities($row['time_in'])));
                                                                               }

                                                                             ?></td>
                                                                             <td>
                                                                              <?php if (empty(htmlentities($row['time_out']))) {
                                                                                echo "";
                                                                               }else{
                                                                                  echo date("g:i a", strtotime(htmlentities($row['time_out'])));
                                                                               }

                                                                             ?></td>
                                                                              <td><?= htmlentities(date("M d, Y",strtotime($row['datelogs']))); ?></td>
                                                                        </tr>
                                                                    <?php } ?>
                                                                    </tbody>
                                                                </table>
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
             <script type="text/javascript">
              $(document).ready(function(){
              $('#name').val();

              $('#time_in').on('click', function(){  
                if($('#name').val() == ""){
                  alert("Please enter Name and click Time In before submit");
                }else{

                  $name = $('#name').val();
                  console.log($name);

                    $.ajax({
                      url: 'main/config/process/vistor_process_timein.php',
                      type: 'POST',
                      data: {
                        name: $name,
                      },
                      success: function(res){

                        $('#results_v').html(res);
                      }
                    });
                } 
              });
              
            });
        </script>
        
          <script type="text/javascript">
              $(document).ready(function(){
              $('#get_name option:selected').val();

              $('#time_out').on('click', function(){  
                if($('#get_name option:selected').val() == ""){
                  alert("Please Select Name and click Time Out before submit");
                }else{

                  $name = $('#get_name').val();
                  console.log($name);

                    $.ajax({
                      url: 'main/config/process/vistor_process_timeout.php',
                      type: 'POST',
                      data: {
                        name: $name,
                      },
                      success: function(res){

                        $('#results_v2').html(res);
                      }
                    });
                } 
              });
              
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