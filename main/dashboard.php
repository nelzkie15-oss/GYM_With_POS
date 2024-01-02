   <?php include 'navbar_sidebar/SideNav.php';?>
            <div class="nk-wrap ">
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Dashboard</h3>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="row g-gs">
                                        <div class="col-xxl-3 col-sm-4">
                                            <div class="card">
                                                <div class="nk-ecwg nk-ecwg6">
                                                    <div class="card-inner">
                                                        <div class="card-title-group">
                                                            <div class="card-title">
                                                                <h6 class="title">MEMBERS</h6>
                                                            </div>
                                                        </div>
                                                        <?php
                                                         foreach ($cmembers as $row) { ?>
                                                        <div class="data">
                                                            <div class="data-group">
                                                                <div class="amount"><?php echo htmlentities($row['member_id']); ?></div>
                                                                <div class="nk-ecwg6-ck">
                                                                    <em class="icon ni ni-users" style="font-size: 300%"></em>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                    </div><!-- .card-inner -->
                                                </div><!-- .nk-ecwg -->
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-xxl-3 col-sm-4">
                                            <div class="card">
                                                <div class="nk-ecwg nk-ecwg6">
                                                    <div class="card-inner">
                                                        <div class="card-title-group">
                                                            <div class="card-title">
                                                                <h6 class="title">VISITORS</h6>
                                                            </div>
                                                        </div>
                                                         <?php
                                                         foreach ($cvisitors as $row) { ?>
                                                        <div class="data">
                                                            <div class="data-group">
                                                                <div class="amount"><?php echo htmlentities($row['visitor_id']); ?></div>
                                                                <div class="nk-ecwg6-ck">
                                                                    <em class="icon ni ni-user-round" style="font-size: 300%"></em>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php } ?>
                                                    </div><!-- .card-inner -->
                                                </div><!-- .nk-ecwg -->
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                         <div class="col-xxl-3 col-sm-4">
                                            <div class="card">
                                                <div class="nk-ecwg nk-ecwg6">
                                                    <div class="card-inner">
                                                        <div class="card-title-group">
                                                            <div class="card-title">
                                                                <h6 class="title">STAFF</h6>
                                                            </div>
                                                        </div>
                                                        <?php
                                                         foreach ($cstaff as $row) { ?>
                                                        <div class="data">
                                                            <div class="data-group">
                                                                <div class="amount"><?php echo htmlentities($row['staff_id']); ?></div>
                                                                <div class="nk-ecwg6-ck">
                                                                    <em class="icon ni ni-user-list" style="font-size: 300%"></em>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php } ?>
                                                    </div><!-- .card-inner -->
                                                </div><!-- .nk-ecwg -->
                                            </div><!-- .card -->
                                        </div><!-- .col -->


                                        <div class="col-xxl-6">
                                            <div class="card card-full">
                                                <div class="nk-ecwg nk-ecwg8 h-100">
                                                    <div class="card-inner">
                                                        <div class="card-title-group mb-3">
                                                            <div class="card-title">
                                                                <h6 class="title">MONTHLY SALES</h6>
                                                            </div>
                                                        </div>

                                                     <div id="chart-container">
                                                        <canvas id="graphCanvas"></canvas>
                                                    </div>
                                                    </div><!-- .card-inner -->
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-xxl-3 col-md-6">
                                            <div class="card card-full overflow-hidden">
                                                <div class="nk-ecwg nk-ecwg7 h-100">
                                                    <div class="card-inner flex-grow-1">
                                                        <?php
                                                          foreach($creticalstock as $row){
                                                             $productName = "";
                                                            if(htmlentities($row['quantity']) <= 10){
                                                                $productName = htmlentities($row['product']). " - <span class='badge badge-pill badge-warning'>".htmlentities($row['quantity'])."</span>";
                                                             }

                                                           ?>
                                                        <div class="">
                                                           <font color="red">CRITICAL STOCK:</font> <?php echo $productName; ?> <br>
                                                        </div>
                                                         <?php }  ?>
                                   

                                                    </div><!-- .card-inner -->
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->

                                                      <div class="col-xxl-3 col-md-6">
                                            <div class="card card-full overflow-hidden">
                                                <div class="nk-ecwg nk-ecwg7 h-100">
                                                    <div class="card-inner flex-grow-1">
                                                      <?php
                                                         date_default_timezone_set("asia/manila");
                                                        
                                                          foreach($pexpired as $row){
                                                            $productName2 = "";
                                                            $startdate = htmlentities($row['expiration_date']);
                                                            $expire = strtotime($startdate. ' + 5 days');
                                                            $now = date('Y-m-d');
                                                            $today = strtotime($now);
                                                            
                                                            if($today >= $expire){
                                                                $productName2 = htmlentities($row['product']). " - ". htmlentities(date("M d, Y",strtotime($row['expiration_date'])));;
                                                            } else {
                                                                $productName2 = "";
                                                            }
                                                           ?>
                                                        <div class="">
                                                           <font color="red">NEAR EXPIRATION:</font>  <?php echo $productName2; ?><br>
                                                        </div>
                                                         <?php }  ?>

                  
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
    <script>
        $(document).ready(function () {
            showGraph();
        });


        function showGraph()
        {
            {
                $.post("main/config/process/monthlysales_process.php",
                function (data)
                {
                    console.log(data);
                     var dates = [];
                     var price_sum = [];

                    for (var i in data) {
                        dates.push(data[i].dates);
                        price_sum.push(data[i].price_sum);
                    }

                    var chartdata = {
                        labels: dates,
                        datasets: [
                            {
                                label: 'Monthly Sales',
                                backgroundColor: '#78ebc8',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: price_sum
                            }
                        ]
                    };

                    var graphTarget = $("#graphCanvas");

                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                    });
                });
            }
        }
        </script>

     <script type="text/javascript" src="main/assets/customs/js/jquery.min.js"></script>
    <script type="text/javascript" src="main/assets/customs/js/Chart.min.js"></script>
    <script src="./assets/js/bundle.js?ver=2.4.0"></script>
    <script src="./assets/js/scripts.js?ver=2.4.0"></script>

</body>

</html>