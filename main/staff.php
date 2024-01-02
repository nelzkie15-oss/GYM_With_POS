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
                                                    <h4 class="nk-block-title"> STAFF </h4> 
                                                </div>
                                            </div>      
                                                <div class="nk-block-des">
                                                </div>
                                            </div>
                                        </div>
                                           <div class="card card-preview">
                                                            <div class="card-inner">
                                                                <table class="datatable-init table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>NAME</th>
                                                                            <th>USERNAME</th>
                                                                            <th>EMAIL ADDRESS</th>
                                                                            <th>CONTACT NO.</th>
                                                                            <th></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                  <?php
                                                                     foreach($staff as $row){ ?>
                                                                        <tr>
                                                                            <td><?= htmlentities($row['full_name']); ?></td>
                                                                            <td><?= htmlentities($row['username']); ?></td>
                                                                            <td><?= htmlentities($row['email_address']); ?></td>
                                                                            <td><?= htmlentities($row['contact_no']); ?></td>
                                                                            <td><a href="main/view_staff.php?qZx3zYcwe9u02=<?= base64_encode(htmlentities($row['staff_id'])); ?>"><input type="button" class="btn btn-info" value="VIEW"></a></td>
                                                                        </tr>
                                                                    <?php } ?>
                                                                      </tbody>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div><!-- .card-preview -->
                                                      <div class="row">
                                                    <div class="col-md-10"></div>
                                                 <div class="col-md-2">
                                                 <a href="main/add_staff.php"><input type="button" class="btn btn-info" value="CREATE"></a>
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
    <script src="./assets/js/bundle.js?ver=2.4.0"></script>
    <script src="./assets/js/scripts.js?ver=2.4.0"></script>
    <script src="./assets/js/charts/chart-ecommerce.js?ver=2.4.0"></script>
</body>

</html>