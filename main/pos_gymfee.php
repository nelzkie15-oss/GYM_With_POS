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
                                                                    <h4 class="nk-block-title"> </h4>
                                                                </div>
                                                            </div>
                                                            <div class="nk-block-des">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h4>POS FOR GYM FEE</h4>
                                                    <div id="results"></div>
                                                    <div class="card card-preview">
                                                        <div id="add_pos"></div>
                                                        <div id="add_order"></div>
                                                        <div id="delete_item"></div>
                                                        <div class="card-inner" style="background-color: #dfe9f2">
                                                            <div class="row">
                                                                <div class="col-md-7">
                                                                    <div class="row">

                                                                         <?php

                                                                            $invoice = $cur_date = date('y');
                                                                            $customer_id = rand(5487 , 9854);
                                                                          ?>
                                                                        <div class="col-md-6" style="font-weight: bold;">
                                                                            <p>Invoice #: <?php echo $customer_id.''.$invoice;?></p>
                                                                        </div>
                                                                        <div class="col-md-6" style="font-weight: bold;">
                                                                            <p> Cashier:  <?php foreach ($session_user as $value) { echo ''.ucfirst($value['full_name']); }?></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="table-responsive">
                                                                    <table class="table table-bordered" id="pos_table" style="background-color: #fff">
                                                                        <thead>
                                                                            <tr style="background-color: #ccdceb">
                                                                                <th style="visibility:hidden;"></th>
                                                                                <th scope="col">ID No.</th>
                                                                                <th scope="col">Item Name</th>
                                                                                <th scope="col">Qty</th>
                                                                                <th scope="col">Price</th>
                                                                                <th style="visibility:hidden;"></th>
                                                                                <th style="visibility:hidden;"></th>
                                                                                <th style="visibility:hidden;"></th>
                                                                                <th style="visibility:hidden;"></th>
                                                                                <th style="visibility:hidden;"></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                          <?php
                                                                              $count_qty = 0;
                                                                              foreach($posgymfee as $row){ 
                                                                                   $count_qty += $row['quantity'];
                                                                                ?>
                                                                             <tr>
                                                                                <td style="visibility:hidden;"><?= htmlentities($row['pos_id']); ?></td>
                                                                                <td><?= htmlentities($row['idno']); ?></td>
                                                                                <td><?= htmlentities($row['item_name']); ?></td>
                                                                                <td class="click_qty" data-qtys="<?= htmlentities($row['pos_id']); ?>"><?= htmlentities($row['quantity']); ?></td>
                                                                                <td>₱ <?= htmlentities(number_format($row['price'],2)); ?></td>
                                                                                <td style="visibility:hidden;"><?= htmlentities($row['price']); ?></td>
                                                                                <td style="visibility:hidden;"><?= htmlentities($row['proinventory_id']); ?></td>
                                                                                <td style="visibility:hidden;"><?php echo $customer_id.''.$invoice;?></td>
                                                                                <td style="visibility:hidden;"><?php foreach ($session_user as $value) { echo ''.ucfirst($value['full_name']); }?></td>
                                                                                <td style="visibility:hidden;"><?= $count_qty; ?></td>

                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                                     <table class="table" id="pos_table2" style="background-color: #fff">
                                                                        <thead>
                                                                        </thead>
                                                                        <tbody>

                                                                            <tr>
                                                                            <?php 

                                                                                $total = 0;
                                                                                foreach ($posSumTotal as $rows):
                                                                                    $total += htmlentities($rows['group_price']); ///for order table compute
                                                                              ?>
                                                                               <?php endforeach ?> 
                                                                                 <input type="hidden" class="totals"  name="total" id="total" value="<?php echo $total;  ?>">
                                                                                <td colspan="4" style="float: right;font-weight: bold;border:none;font-size: 1.3em">Total: ₱ <?php echo number_format($total,2);  ?></td>
                                                                            </tr>
          

                                                                           <tr>
                                                                                <td colspan="4" style="float: right;font-weight: bold;border:none;font-size: 1.3em">Discount %: <input type="number" id="discount_total" style="width: 100px!important" autocomplete="off" placeholder="0.00"></td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td colspan="4" style="float: right;font-weight: bold;border:none;font-size: 1.3em">Total Payment: ₱ <input type="number" id="total_payment" style="width: 100px!important" autocomplete="off" placeholder="0.00" disabled="disabled"></td>
                                                                            </tr>
                                                                            

                                                                            <tr>
                                                                                <td colspan="4" style="float: right;font-weight: bold;border:none;font-size: 1.3em">Cash: ₱ <input type="text" id="cash" style="width: 100px!important" placeholder="0.00" ></td>
                                                                            </tr>


                                                                            <tr>
                                                                                <td colspan="4" style="float: right;font-weight: bold;border:none;font-size: 1.3em">Change: ₱ <input type="text" id="change" style="width: 100px!important" placeholder="0.00" disabled="disabled"></td>
                                                                            </tr>

                                                                        </tbody>
                                                                    </table>

                                                                    <div class="col-md-12">
                                                                        <div class="row justify-content-left mb-0 mt-1">
                                                                            <div class="3">
                                                                                <button class="p-2  ml-2 mt-1 btn_void" style="background-color:#db8f37;color: #fff;border: none;border-radius: 4px" id="product_select">Void Item</button>
                                                                            </div>

                                                                             <div class="3">
                                                                                <button class="p-2  ml-2 mt-1" style="background-color:#e65358;color: #fff;border: none;border-radius: 4px" id="product_select" data-toggle="modal" data-target="#voidtransaction_modal">Void Transaction</button>
                                                                            </div>

                                                                            <div class="3">
                                                                                <button class="p-2  ml-2 mt-1" style="background-color: #6ba1d1;color: #fff;border: none;border-radius: 4px" data-toggle="modal" data-target="#discount_modal" id="product_select">Discount</button>
                                                                            </div>
                                                                            <div class="3">
                                                                                <button class="p-2  ml-2 mt-1 mb-1 btn_payment" style="background-color: #87c977;color: #fff;border: none;border-radius: 4px"  data-totalz="<?php echo $total;?>"  id="product_select">Payment</button>
                                                                            </div>

                                                                        </div>

                                                                    </div>

                                                                </div>
                                                                <div class="col-md-5">
                                                                    <div class="card text-white" style="background-color: #9acee3">
                                                                        <div class="card-inner">
                                                                          <form method="POST">
                                                                            <div class="row justify-content-left mb-3">
                                                                             <?php
                                                                              foreach($gfeeInv as $row){ ?>
                                                                                <div class="col-6">
                                                                                    <?php
                                                                                       $FourDigitRandomNumber = '00'.$row['gymfeeinventory_id'];
                                                                                    ?>
                                                                                    
                                                                                    <button type="button" class="p-2 mb-2 btn_pos" style="background-color:#6ba1d1;color: #fff;border-color: #6ba1d1" id="product_select" data-idno="<?php echo $FourDigitRandomNumber; ?>" data-pro="<?= htmlentities($row['product']); ?>" data-qty="1" data-pri="<?= htmlentities($row['price']); ?>" data-ids="<?= htmlentities($row['gymfeeinventory_id']); ?>"><?= htmlentities(ucwords($row['product'])); ?></button>
                                                                                </div>

                                                                                <?php } ?>
                                                                            </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
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
    <?php error_reporting(0); include 'modal/discount_modal.php';?>
    <?php error_reporting(0); include 'modal/voidtransaction_modal.php';?>
    <?php error_reporting(0); include 'modal/voidtransac_modal.php';?>
    <?php error_reporting(0); include 'modal/quantity_modal.php';?>

<script type="text/javascript">
$(document).on("change keyup blur", "#discount_total", function() {
            var main = $('.totals').val();
            var disc = $('#discount_total').val();
            var dec = (disc / 100).toFixed(2); 
            var mult = main * dec; 
            var discont = main - mult;
            ;
             if(disc == ''){
            $('#total_payment').val(''); 
         }else{
            $('#total_payment').val(discont)
        }
        });
</script>

 <script type="text/javascript"> 
 $(document).on("change keyup blur", "#cash", function() {
        var tot = $('#total_payment').val();
        var cash = $('#cash').val();
        var c = tot - cash;
        if(cash == ''){
            $('#change').val(''); 
         }else{
            $('#change').val(c); 
        }
       
    });

</script>
  <script type="text/javascript">
       $(document).ready(function() {  
                load_data();    
                   var count = 1; 
                   function load_data() {
                       $('#pos_table').on('click', 'tr', function() {
                              var pos_id = $(this).find("td:first-child").text();
                             get_delIds(pos_id); //argument   
                     
                       });
                    }

                     function get_delIds(pos_id) {
                     var pos_id = pos_id;
                     console.log(pos_id);

                      $(document).on('click', '.btn_void', function(e) {
                         e.preventDefault();
                   if(pos_id == ''){
                        alert('Please select Item Name before click a button');
                    
                      }else{
                         $.ajax({
                                url: 'main/config/process/positem_process_delete.php', 
                                method: 'POST',
                                data: {pos_id : pos_id},
                                success: function(results) { 
                                    $('#delete_item').html(results);   
                                }
                              });

                           }

                       });
                    }

               });

       </script>
      <script type="text/javascript">
            $(document).ready(function() {

                $('.btn_pos').on('click', function() {
                    //alert('click');
                    var idno = $(this).data("idno");
                    var item_name = $(this).data("pro");
                    var quantity = $(this).data("qty");
                    var price = $(this).data("pri");
                    var proinventory_id = $(this).data("ids");


                        $.ajax({
                            url: 'main/config/process/pos_process2.php',
                            type: 'POST',
                            data: {
                                idno: idno,
                                item_name: item_name,
                                quantity: quantity,
                                price: price,
                                proinventory_id: proinventory_id
                            },
                            success: function(res) {

                                $('#add_pos').html(res);
                            }
                        });
                 
                   });

                });

       </script>
     <script type="text/javascript">
         $(document).ready(function() {   
               load_data();    
               var count = 1; 
               function load_data() {
                   $(document).on('click', '.click_qty', function() {
                        $('#qty_modal').modal('show');
                        var pos_id = $(this).data("qtys");
                          getID(pos_id); //argument    
                 
                   });
                }

                 function getID(pos_id) {
                      $.ajax({
                          type: 'POST',
                          url: 'main/config/process/row_pos_process.php',
                          data: {
                              pos_id: pos_id
                          },
                          dataType: 'json',
                          success: function(response) {
                          $('#edit_posid').val(response.pos_id);
                          $('#edit_quantity').val(response.quantity);
                          $('#edit_price').val(response.price);
                          $('#edit_proinventoryid').val(response.proinventory_id);
      
                       }
                    });
                 }
           
           });
            
       </script>
        <script type="text/javascript">
             $( function() {
              $('td').click( function() {
                $(this).parents('table').find('td').each( function( index, element ) {
                    $(element).removeClass('on');
                } );
                $(this).addClass('on');
              } );
            } );
       </script>

       <!-- payment -->
       <script type="text/javascript">
           $(".btn_payment").click(function () {

              var total = $(this).data("totalz");
              console.log('=======total======');
              console.log(total);

              var discount = $('#discount_total').val();
              console.log('=======discount======');
              console.log(discount);

              var total_payment = $('#total_payment').val();
              console.log('=======total_payment======');
              console.log(total_payment);

              var cash = $('#cash').val();
              console.log('=======cash======');
              console.log(cash);

              var change = $('#change').val();
              console.log('=======change======');
              console.log(change);
              
            $('#pos_table tbody tr').each(function() {
                var a = $(this).find('td').eq(0).text();
                console.log(a);

                var b = $(this).find('td').eq(1).text();
                 console.log(b);

                 var c = $(this).find('td').eq(2).text();
                 console.log(c);

                 var d = $(this).find('td').eq(3).text();
                 console.log(d);

                 var e = $(this).find('td').eq(5).text();
                 console.log(e);

                 var f = $(this).find('td').eq(6).text();
                 console.log(f);

                 var g = $(this).find('td').eq(7).text();
                 console.log(g);

                 var h = $(this).find('td').eq(8).text();
                 console.log(h);

                var i = $(this).find('td').eq(9).text();
                console.log('==========i==========');
                 console.log(i);

                  $.ajax({
                            url: 'main/config/process/orderitems_process.php',
                            type: 'POST',
                            data: {
                                total: total,
                                discount: discount,
                                total_payment: total_payment,
                                cash: cash,
                                change: change,
                                pos_id : a,
                                idno: b,
                                item_name: c,
                                quantity: d,
                                price: e,
                                proinventory_id: f,
                                invoice_number: g,
                                cashier_name: h,
                                sum_qty: i

                            },
                            success: function(res) {

                                $('#add_order').html(res);
                       }
                 });

            });
            return false;
        }); 
       </script>
       <!-- end payment -->

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
        function wcqib_refresh_quantity_increments() {
            jQuery("div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)").each(function(a, b) {
                var c = jQuery(b);
                c.addClass("buttons_added"), c.children().first().before('<input type="button" value="-" class="minus" />'), c.children().last().after('<input type="button" value="+" class="plus" />')
            })
        }
        String.prototype.getDecimals || (String.prototype.getDecimals = function() {
            var a = this,
                b = ("" + a).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
            return b ? Math.max(0, (b[1] ? b[1].length : 0) - (b[2] ? +b[2] : 0)) : 0
        }), jQuery(document).ready(function() {
            wcqib_refresh_quantity_increments()
        }), jQuery(document).on("updated_wc_div", function() {
            wcqib_refresh_quantity_increments()
        }), jQuery(document).on("click", ".plus, .minus", function() {
            var a = jQuery(this).closest(".quantity").find(".qty"),
                b = parseFloat(a.val()),
                c = parseFloat(a.attr("max")),
                d = parseFloat(a.attr("min")),
                e = a.attr("step");
            b && "" !== b && "NaN" !== b || (b = 0), "" !== c && "NaN" !== c || (c = ""), "" !== d && "NaN" !== d || (d = 0), "any" !== e && "" !== e && void 0 !== e && "NaN" !== parseFloat(e) || (e = 1), jQuery(this).is(".plus") ? c && b >= c ? a.val(c) : a.val((b + parseFloat(e)).toFixed(e.getDecimals())) : d && b <= d ? a.val(d) : b > 0 && a.val((b - parseFloat(e)).toFixed(e.getDecimals())), a.trigger("change")
        });
    </script>
    <script src="./assets/js/bundle.js?ver=2.4.0"></script>
    <script src="./assets/js/scripts.js?ver=2.4.0"></script>
    <script src="./assets/js/charts/chart-ecommerce.js?ver=2.4.0"></script>
</body>

</html>
