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
                                                <h4 class="nk-block-title"> SALES REPORT </h4> 
                                                </div>
                                            </div>        
                                                <div class="nk-block-des">  
                                                </div>
                                            </div>
                                        </div>
                                        <div id="results"></div>
                                           <div class="card card-preview">
                                                            <div class="card-inner">
                                                                   <div class = "form-inline" style="margin-left: 2%;margin-bottom: 2%">

                                                                    <label>From:</label>
                                                                    <input type = "text" class = "form-control" placeholder = "Start"  id = "date1" autocomplete="off" />
                                                                    <label>To:</label>
                                                                    <input type = "text" class = "form-control" placeholder = "End"  id = "date2"  autocomplete="off" style="margin-right: 1%" /> <label>Category:</label>
                                                                          <select class="form-control" id="category_type" autocomplete="off" style="margin-right: 1%">
                                                                          <option value="" selected="true" disabled="disabled"> &larr;  Category &rarr;</option>

                                                                         <!--  <option value="ALL">ALL</option> -->
                                                                          <option value="PRODUCT">PRODUCT</option>
                                                                          <option value="GYM_FEE">GYM FEE</option>
                                                                      </select>
                                                                    <button type = "button" class = "btn btn-info" id = "btn_search2" style="margin-right: 1%"><em class="icon ni ni-search"></em></button> <button type = "button" id = "reset" class = "btn btn-warning"><em class="icon ni ni-reload"></em></button>
                                                                
                                                                  </div>
                                                   <!--                <div class = "form-inline" style="margin-left: 2%;margin-bottom: 2%">
                                                                   <button type = "button" class="btn btn-outline-light" id = "btn_search" style="margin-right: 1%">Search</button> 
                                                                    <input type = "text" class = "form-control" placeholder = "Search..."  id = "date1" autocomplete="off" />
                                                            </div> -->

                                                                 <table class="datatable table" id="members_table">
                
                                                                    <tbody id="load_data">
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div><!-- .card-preview -->
                                                        <div class="row mt-4">
                                                     <div class="col-md-8"></div>
                                     <!--            <div class="col-md-4">
                                                      <div class="form-group row">
                                                        <a href="main/archived.php"  style="margin-right: 4%"><input type="button" class="btn btn-outline-light" value="Print"></a><input type="button" id = "reset_2"  style="margin-right: 4%"  class="btn btn-outline-light" value="Refresh">   <a href="main/add_member.php"  style="margin-right: 4%"><input type="button" class="btn btn-outline-light" value="Delete"></a>
                                                    </div>
                                                  </div> -->
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
               
                $('#category_type option:selected').val();

              $('#btn_search2').on('click', function(){  
                if($('#date1').val() == "" || $('#date2').val() == "" ||  $('#category_type option:selected').val() == ""){
                  alert("Please enter Date 'From' and 'To' ,Stock Type, Category Type before submit");
                }else{
                  $date1 = $('#date1').val();
                  console.log($date1);

                  $date2 = $('#date2').val();
                  console.log($date2);

                 $category_type = $('#category_type option:selected').val();
                 console.log($category_type);

                  $('#load_data').empty();
                  $loader = $('<tr ><td colspan = "8"><center>Searching....</center></td></tr>');
                  $loader.appendTo('#load_data');
                  setTimeout(function(){
                    $loader.remove();
                    $.ajax({
                      url: 'main/config/process/sales_report_process.php',
                      type: 'POST',
                      data: {
                        date1: $date1,
                        date2: $date2,
                        category_type: $category_type
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