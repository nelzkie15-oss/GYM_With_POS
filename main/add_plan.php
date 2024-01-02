   <?php include 'navbar_sidebar/SideNav.php';?>
   <div class="nk-wrap ">
       <div class="nk-content ">
           <div class="container-fluid">
               <div class="nk-content-inner">
                   <div class="nk-content-body">
                       <div class="nk-block-head-content">
                           <h4 class="nk-block-title">+ADD PLAN </h4>
                           <div class="col-xxl-3 col-md-12 mt-3">
                               <div class="card card-full overflow-hidden">
                                   <div class="nk-ecwg nk-ecwg7 h-100">
                                       <div class="card-inner flex-grow-1" style="background-color: #a8aaad;color: #fff">
                                           <div class="nk-block nk-block-lg">
                                               <div class="nk-block-head">
                                                <div class="" id="error_pmsg"></div>
                                                <div id="msg_plan"></div>
                                                   <form style="margin-left: 15%">
                                                       <div class="d-flex">
                                                           <div class="p-2 flex-fill">
                                                               <div class="form-group row">
                                                                   <label class="mt-1" style="font-weight: bold;">Plan Name:</label>
                                                                   <div class="col-md-7">
                                                                       <input type="text" class="form-control" id="plan_name" autocomplete="off">
                                                                   </div>
                                                               </div>
                                                           </div>
                                                           <div class="p-2 flex-fill">
                                                               <div class="form-group row">

                                                               </div>
                                                           </div>

                                                           <div class="p-2 flex-fill">
                                                               <div class="form-group row">

                                                               </div>
                                                           </div>
                                                           <div class="p-2 flex-fill">
                                                               <div class="form-group row">
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <div class="d-flex">
                                                           <div class="p-2 flex-fill">
                                                               <div class="form-group row">
                                                                   <label class="mt-1" style="font-weight: bold;">Desciption:</label>
                                                                   <div class="col-md-7">
                                                                       <input type="text" class="form-control" id="description" autocomplete="off">
                                                                   </div>
                                                               </div>
                                                           </div>

                                                           <div class="p-2 flex-fill">
                                                               <div class="form-group row">

                                                               </div>
                                                           </div>

                                                           <div class="p-2 flex-fill">
                                                               <div class="form-group row">

                                                               </div>
                                                           </div>
                                                           <div class="p-2 flex-fill">
                                                               <div class="form-group row">

                                                               </div>
                                                           </div>
                                                       </div>
                                                       <div class="d-flex">
                                                           <div class="p-2 flex-fill">
                                                               <div class="form-group row">
                                                                   <label class="mt-1" style="font-weight: bold;">Amount:</label>
                                                                   <div class="col-md-7">
                                                                       <input type="number" class="form-control" id="amount" autocomplete="off">
                                                                   </div>
                                                               </div>
                                                           </div>

                                                           <div class="p-2 flex-fill">
                                                               <div class="form-group row">

                                                               </div>
                                                           </div>

                                                           <div class="p-2 flex-fill">
                                                               <div class="form-group row">

                                                               </div>
                                                           </div>
                                                           <div class="p-2 flex-fill">
                                                               <div class="form-group row">

                                                               </div>
                                                           </div>
                                                       </div>
                                                       <div class="d-flex">

                                                           <div class="p-2 flex-fill">
                                                               <div class="form-group row">

                                                               </div>
                                                           </div>
                                                           <div class="p-2 flex-fill">
                                                               <div class="form-group row">

                                                               </div>
                                                           </div>
                                                           <div class="p-2 flex-fill">
                                                               <div class="form-group row">
                                                                   <input type="button" class="btn btn-info" id="btn-addplan" value="Save" style="margin-right: 4%"><a href="main/plan.php"><input type="button" class="btn btn-warning" value="Cancel"></a>
                                                               </div>
                                                           </div>
                                                           <div class="p-2 flex-fill">
                                                               <div class="form-group row">
                                                               </div>
                                                           </div>
                                                       </div>
                                                   </form>
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
     <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', () => {
        let btn = document.querySelector('#btn-addplan');
        btn.addEventListener('click', (e) => {
            e.preventDefault();


            const plan_name = document.querySelector('input[id=plan_name]').value;
            console.log(plan_name);

            const description = document.querySelector('input[id=description]').value;
            console.log(description);

            const amount = document.querySelector('input[id=amount]').value;
            console.log(amount);




            var data = new FormData(this.form);

            data.append('plan_name', plan_name);
            data.append('description', description);
            data.append('amount', amount);


        if (plan_name === '' ||  description ==='' ||  amount ===''){
                $('#error_pmsg').html('<div class="alert alert-danger alert-icon"><em class="icon ni ni-cross-circle"></em> <strong>Required All Fields!</strong></div>');
            }else{

             
                $.ajax({
                    url: 'main/config/process/plan_process.php',
                    type: "POST",
                    data: data,
                    processData: false,
                    contentType: false,
                    async: false,
                    cache: false,
                    success: function(response) {
                        $("#msg_plan").html(response).show().delay(1000).fadeOut(600);
                       },
                    error: function(response) {
                        console.log("Failed");
                    }
                });
            }
 
        });
    });
</script>
   <script src="./assets/js/bundle.js?ver=2.4.0"></script>
   <script src="./assets/js/scripts.js?ver=2.4.0"></script>
   <script src="./assets/js/charts/chart-ecommerce.js?ver=2.4.0"></script>
   </body>

   </html>