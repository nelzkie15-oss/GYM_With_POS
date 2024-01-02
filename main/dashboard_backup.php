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
                                    <div class="nk-block nk-block-lg">

                                        <div class="card card-preview">
                                            <div class="card-inner">
                                                <ul class="nav nav-tabs mt-n3">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="tab" href="#tabItem5"><em class="icon ni ni-calender-date"></em><span>Daily Sales</span></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#tabItem6"><em class="icon ni ni-calendar-booking"></em><span>Monthly Sales</span></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#tabItem7"><em class="icon ni ni-calendar-alt"></em><span>Annually Sales</span></a>
                                                    </li>

                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tabItem5">
                                                     <!-- daily reports -->
                                                    <div class="col-xxl-6">
                                                        <div class="card card-full">
                                                            <div class="nk-ecwg nk-ecwg8 h-100">
                                                                <div class="card-inner">
                                                                    <div class="card-title-group mb-3">
                                                                        <div class="card-title">
                                                                            <h6 class="title">DAILY SALES</h6>
                                                                        </div>

                                                                    </div>

                                                                    <div class="nk-ecwg8-ck">
                                                                        <canvas class="ecommerce-line-chart-s4" id="salesStatistics"></canvas>
                                                                    </div>
                                                                    <div class="chart-label-group pl-5">
                                                                        <div class="chart-label">January</div>
                                                                        <div class="chart-label">February</div>
                                                                        <div class="chart-label">March</div>
                                                                        <div class="chart-label">April</div>
                                                                        <div class="chart-label">May</div>
                                                                        <div class="chart-label">June</div>
                                                                        <div class="chart-label">July</div>
                                                                        <div class="chart-label">August</div>
                                                                        <div class="chart-label">September</div>
                                                                        <div class="chart-label">October</div>
                                                                        <div class="chart-label">November</div>
                                                                        <div class="chart-label">December</div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <!--end daily reports -->
                                                    </div>
                                                    <div class="tab-pane" id="tabItem6">
                                                        <!-- monthly reports -->
                                                    <div class="col-xxl-6">
                                                        <div class="card card-full">
                                                            <div class="nk-ecwg nk-ecwg8 h-100">
                                                                <div class="card-inner">
                                                                    <div class="card-title-group mb-3">
                                                                        <div class="card-title">
                                                                            <h6 class="title">MONTHLY SALES</h6>
                                                                        </div>

                                                                    </div>

                                                                    <div class="nk-ecwg8-ck">
                                                                        <canvas class="ecommerce-line-chart-s4" id="salesStatistics"></canvas>
                                                                    </div>
                                                                    <div class="chart-label-group pl-5">
                                                                        <div class="chart-label">January</div>
                                                                        <div class="chart-label">February</div>
                                                                        <div class="chart-label">March</div>
                                                                        <div class="chart-label">April</div>
                                                                        <div class="chart-label">May</div>
                                                                        <div class="chart-label">June</div>
                                                                        <div class="chart-label">July</div>
                                                                        <div class="chart-label">August</div>
                                                                        <div class="chart-label">September</div>
                                                                        <div class="chart-label">October</div>
                                                                        <div class="chart-label">November</div>
                                                                        <div class="chart-label">December</div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <!--end monthly reports -->
                                                    </div>
                                                    <div class="tab-pane" id="tabItem7">
                                                        <!-- annully reports -->
                                                    <div class="col-xxl-6">
                                                        <div class="card card-full">
                                                            <div class="nk-ecwg nk-ecwg8 h-100">
                                                                <div class="card-inner">
                                                                    <div class="card-title-group mb-3">
                                                                        <div class="card-title">
                                                                            <h6 class="title">ANNUALLY SALES</h6>
                                                                        </div>

                                                                    </div>

                                                                    <div class="nk-ecwg8-ck">
                                                                        <canvas class="ecommerce-line-chart-s4" id="salesStatistics"></canvas>
                                                                    </div>
                                                                    <div class="chart-label-group pl-5">
                                                                        <div class="chart-label">January</div>
                                                                        <div class="chart-label">February</div>
                                                                        <div class="chart-label">March</div>
                                                                        <div class="chart-label">April</div>
                                                                        <div class="chart-label">May</div>
                                                                        <div class="chart-label">June</div>
                                                                        <div class="chart-label">July</div>
                                                                        <div class="chart-label">August</div>
                                                                        <div class="chart-label">September</div>
                                                                        <div class="chart-label">October</div>
                                                                        <div class="chart-label">November</div>
                                                                        <div class="chart-label">December</div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <!--end annully reports -->
                                                    </div>

                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->
     
                                    </div>
                                     </div>


                                        <div class="col-xxl-3 col-md-6">
                                            <div class="card card-full overflow-hidden">
                                                <div class="nk-ecwg nk-ecwg7 h-100">
                                                    <div class="card-inner flex-grow-1">

                                                        <div class="">
                                                           <font color="red">CRITICAL STOCK:</font>  10 <br><Br>
                                                        </div>

                                                     <div class="">
                                                            <font color="red">NEAR EXPIRATION:</font><bR> PROTEIN POWDER - NOVEMBER 10, 2022
                                                        </div>
                  
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