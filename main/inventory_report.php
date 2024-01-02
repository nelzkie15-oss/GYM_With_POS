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
                                                    <h4 class="nk-block-title"> INVENTORY REPORT </h4> 
                                                </div>
                                            </div>  
                                                <div class="nk-block-des">
                                                </div>
                                            </div>
                                        </div>
                                        <div id="results"></div>
                                           <div class="card card-preview">
                                                            <div class="card-inner">
                                                                   <div class = "form-inline" style="margin-bottom: 2%">

                                                                    <label>From:</label>
                                                                    <input type = "text" class = "form-control" placeholder = "Start"  id = "date1" autocomplete="off" />
                                                                    <label>To:</label>
                                                                    <input type = "text" class = "form-control" placeholder = "End"  id = "date2"  autocomplete="off" style="margin-right: 1%" />
                                                                       <select class="form-control" id="select_type" autocomplete="off" style="margin-right: 1%;width: 15%">
                                                                          <option value="" selected="true" disabled="disabled"> &larr;  Stock Type &rarr;</option>
                                                                          
                                                                          <option value="stockIn">Stock In</option>
                                                                          <option value="stockOut">Stock Out</option>
                                                                          <option value="all">All</option>
                                                                      </select>
                                                                          <select class="form-control" id="categery_type" autocomplete="off" style="margin-right: 1%;width: 20%">
                                                                          <option value="" selected="true" disabled="disabled"> &larr;  Categery Type &rarr;</option>

                                                                          <!-- <option value="ALL">ALL</option> -->
                                                                          <option value="PRODUCT_INVENTORY">PRODUCT INVENTORY</option>
                                                                          <option value="EQUIPMENT_INVENTORY">EQUIPMENT INVENTORY</option>
                                                                      </select>
                                                                    <button type = "button" class = "btn btn-info" id = "btn_search" style="margin-right: 1%"><em class="icon ni ni-search"></em></button> <button type = "button" id = "reset" class = "btn btn-warning"><em class="icon ni ni-reload"></em></button>
                                                                
                                                                  </div>

                                                            <!--       <div class = "form-inline" style="margin-left: 2%;margin-bottom: 2%">
                                                                   <button type = "button" class="btn btn-outline-light" id = "btn_search" style="margin-right: 1%">Search</button> 
                                                                    <input type = "text" class = "form-control" placeholder = "Search..."  id = "date1" autocomplete="off" />
                                                                    
                                                                  </div>
 -->
                                                                     <table class="datatable-init table" id="members_table">
                
                                                                    <tbody id="load_data">
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div><!-- .card-preview -->
                                                        <div class="row mt-4">
                                                     <div class="col-md-8"></div>
                                                   <div class="col-md-4">
                                                      <div class="form-group row">
                                                     <!--   <a href="main/add_member.php"  style="margin-right: 4%"><input type="button" class="btn btn-outline-light" value="Delete"></a> -->
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
              $(document).ready(function(){
            
              $('#reset_2').on('click', function(){
                location.reload();
              });
            });
        </script>
             <script type="text/javascript">
              $(document).ready(function(){
              $('#date1').datepicker();
              $('#date2').datepicker();
               
                $('#select_type option:selected').val();
                $('#categery_type option:selected').val();

              $('#btn_search').on('click', function(){  
                if($('#date1').val() == "" || $('#date2').val() == "" ||  $('#select_type option:selected').val() == "" ||  $('#categery_type option:selected').val() == ""){
                  alert("Please enter Date 'From' and 'To' ,Stock Type, Category Type before submit");
                }else{
                  $date1 = $('#date1').val();
                  console.log($date1);

                  $date2 = $('#date2').val();
                  console.log($date2);

                 $select_type = $('#select_type option:selected').val();
                 console.log($select_type);

                 $categery_type = $('#categery_type option:selected').val();
                 console.log($categery_type);

                  $('#load_data').empty();
                  $loader = $('<tr ><td colspan = "8"><center>Searching....</center></td></tr>');
                  $loader.appendTo('#load_data');
                  setTimeout(function(){
                    $loader.remove();
                    $.ajax({
                      url: 'main/config/process/inventory_report_process.php',
                      type: 'POST',
                      data: {
                        date1: $date1,
                        date2: $date2,
                        select_type: $select_type,
                        categery_type: $categery_type
                      },
                      success: function(res){

                        $('#load_data').html(res);
                      }
                    });
                  }, 1000);
                } 
              });
              
              $('#reset').on('click', function(){
                location.reload();
              });
            });
        </script>

          <script>
                $( function() {
                    $( "#date1" ).datepicker();
                  } );
                  </script>
                  <script>
                  $( function() {
                    $( "#date2" ).datepicker();
                  } );
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