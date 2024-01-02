
<div class="modal fade" tabindex="-1" id="qty_modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-sm">
            <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
            <div class="modal-header">
                <h5 class="modal-title">Edit Quantity</h5>
            </div>
            <div class="modal-body mt-2">
           <div class="" id="mgs-editqty"></div>
            <form style="padding: 10% 10%" method="POST"> 
              <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label" style="font-weight: bold;">Quantity:</label>
                <div class="col-sm-8 offset-1">
            <!--        <div class="quantity buttons_added">
                  <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" id="edit_quantity" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
                </div> -->
                 <input type="number" class="form-control" min="1" id="edit_quantity">

                </div>
              </div>
            </form>
            </div>

             <div class="modal-footer">
             <input type="hidden" name="" id="edit_price">
             <input type="hidden" name="price" id="sub_total">
             <input type="hidden" name="" id="edit_posid">
             <input type="hidden" name="" id="edit_proinventoryid">
             
                <button type="button" class="btn btn-outline-danger"data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline-info" id="btn-qtybtn">Ok</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript"> 
 $(document).on("change keyup blur", "#edit_quantity", function() {
        var price = $('#edit_price').val();
        var qty = $('#edit_quantity').val();
        var c = price * qty;
        if(price == ''){
            $('#sub_total').val(''); 
         }else{
            $('#sub_total').val(c); 
        }
       
    });

</script>

<script type="text/javascript">
       document.addEventListener('DOMContentLoaded', () => {
              let btn = document.querySelector('#btn-qtybtn');
              btn.addEventListener('click', (e) => {
                e.preventDefault();
    
                  const quantity = document.querySelector('input[id=edit_quantity]').value;
                  console.log(quantity);

                  const price = document.querySelector('input[id=sub_total]').value;
                  console.log(price);

                  const proinventory_id = document.querySelector('input[id=edit_proinventoryid]').value;
                  console.log(proinventory_id);

                  const pos_id = document.querySelector('input[id=edit_posid]').value;
                  console.log(pos_id);

                  var data = new FormData(this.form);
                
                  data.append('quantity', quantity);
                  data.append('price', price);
                  data.append('proinventory_id', proinventory_id);
                  data.append('pos_id', pos_id);

                 $.ajax({
                        url: 'main/config/process/editqtyPOS_process.php',
                          type: "POST",
                          data: data,
                          processData: false,
                          contentType: false,
                          async: false,
                          cache: false,
                        success: function(response) {
                          $("#mgs-editqty").html(response);
                          $('#mgs-editqty').animate({ scrollTop: 0 }, 'slow');
                          },
                          error: function(response) {
                            console.log("Failed");
                          }
                      });
                  // }

              });
          });
</script>
  