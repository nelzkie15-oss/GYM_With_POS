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
                                                    <h4 class="nk-block-title"> EQUIPMENT INVENTORY </h4> 
                                                </div>
                                            </div> 
                                                <div class="nk-block-des">
                                                </div>
                                            </div>
                                        </div>
                                        <div id="results"></div>
                                           <div class="card card-preview">
                        
                                                                <table class="datatable-init table" id="members_table">
                                                                    <thead>
                                                                        <tr style="background-color: #5b93d4;color: #fff">
                                                                            <th style="visibility:hidden;"></th>
                                                                            <th>Id No.</th>
                                                                            <th>Equipments</th>
                                                                            <th>Date of Purchase</th>
                                                                            <th>Size</th>
                                                                            <th>Weight</th>
                                                                            <th>Color</th>
                                                                            <th>Brand</th>
                                                                            <th>Qty</th>
                                                                            <th>Stock Type</th>
                                                                          
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <?php
                                                                     foreach($equipmentInv as $row){ ?>
                                                                        <tr>
                                                                            <td style="visibility:hidden;"><?= base64_encode(htmlentities($row['equipinventory_id'])); ?></td>
                                                                            <td><?= htmlentities($row['equipinventory_id']); ?></td>
                                                                            <td><?= htmlentities($row['equipments']); ?></td>
                                                                            <td><?= htmlentities(date("M d, Y",strtotime($row['date_ofpurchase']))); ?></td>
                                                                            <td><?= htmlentities($row['size']); ?></td>
                                                                            <td><?= htmlentities($row['weight']); ?></td>
                                                                            <td><?= htmlentities($row['color']); ?></td>
                                                                            <td><?= htmlentities($row['brand_name']); ?></td>
                                                                            <td><?= htmlentities($row['quantity']); ?></td>
                                                                             <td>
                                                                           <?php if(htmlentities($row['status']) == 'stock in'){
                                                                              echo '<span class="badge bg-success" style="color:#fff"><i class="bi bi-check-circle me-1"></i> Stock In</span>';
                                                                            }else{
                                                                              echo '<span class="badge bg-danger" style="color:#fff"><i class="bi bi-exclamation-octagon me-1"></i> Stock Out</span>';
                                                                           } ?>
                                                                          </td>
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
                                                     <a href="main/stock_in.php"  style="margin-right: 4%"><input type="button" class="btn btn-info" value="STOCK IN"></a>   <a href="main/stock_out.php"  style="margin-right: 4%"><input type="button" class="btn btn-danger" value="STOCK OUT"></a>
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
    <script src="./assets/js/bundle.js?ver=2.4.0"></script>
    <script src="./assets/js/scripts.js?ver=2.4.0"></script>
    <script src="./assets/js/charts/chart-ecommerce.js?ver=2.4.0"></script>
</body>

</html>