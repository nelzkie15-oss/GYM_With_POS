
// Wait for document to load
$(document).ready(() => {
    $('#logform').on('submit', () => {

        // prevents default behaviour
        // Prevents event propagation
        return false;
    });
});
$('#logform').keypress((e) => {

    // Enter key corresponds to number 13
    if (e.which === 13) {
        $('#logform').submit();
        console.log('form submitted');
    }
})


$(document).on('click', '#login-button', function(){
   // console.log();
        //alert('click');

        if($('#username').val()!='' && $('#password').val()!=''){
            var imgs = '<img src="main/assets/loading/ajax-loader.gif" style="height: 20px; width: 20px;margin-right:3px"/>';
            $('#login-button').html(imgs  + 'Loading...');
            $('#myalert').slideUp();
            $('#myalert3').slideUp();
            var logform = $('#logform').serialize();
            setTimeout(function(){
                $.ajax({
                    method: 'POST',
                    url: 'main/config/process/login_user.php',
                    data: logform,
                    success:function(data){
                        if(data == 1){
                            $('#myalert3').slideDown();
                            $('#alerttext3').html(data);
                            $('#myalert3').html('<em class="icon ni ni-check-circle"></em> <strong id="">Login Successful. User Verified!</strong>');
                            $('#logtext').text('Login');
                            $('#logform')[0].reset();
                            $('#myalert').hide();
                            $('#alerttext').hide();
                            $('#myalert2').hide();
                            $('#alerttext2').hide();
                          setTimeout(function(){
                            window.location='main/dashboard.php';//ito yung ddirect sa admin dashboard
                          }, 1500);
                        }else if(data == 2){
                            $('#myalert3').slideDown();
                            $('#alerttext3').html(data);
                            $('#alerttext3').text('<em class="icon ni ni-check-circle"></em> <strong id="">Login Successful. User Verified!</strong>');
                            $('#logtext').text('Login');
                            $('#logform')[0].reset();
                            $('#myalert').hide();
                            $('#alerttext').hide();
                            $('#myalert2').hide();
                            $('#alerttext2').hide();
                            window.location='main/dashboard-staff.php';//ito yung ddirect sa staff dashboard

                        }
                        else{
                            $('#myalert').slideDown();
                            $('#alerttext').html(data);
                            $('#logtext').text('Login');
                            $('#logform')[0].reset();
                            $('#myalert2').hide();
                            $('#alerttext3').hide();
                            
                        }
                    } 
                });
            }, 1500);
        }
        else{
            $('#myalert2').slideDown();
            $('#myalert').hide();
            $('#alerttext3').hide();
            $('#myalert2').html('<em class="icon ni ni-cross-circle"></em> <strong id="">Please input both fields to Login</strong>');
            $('#logtext').text('Login');
            $('#logform')[0].reset();

        }
    });
