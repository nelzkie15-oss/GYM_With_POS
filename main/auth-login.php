<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <link rel="shortcut icon" href="images/2483892.png">
    <title>Login | User</title>
    <link rel="stylesheet" href="assets/css/dashlite.css?ver=2.4.0">
    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=2.4.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<Style>
    .footer {
    bottom: 0;
    height: 100px;
    left: 0;
    position: fixed;
    right: 0;
}
</Style>
<body class="nk-body bg-white npc-default pg-auth">
    <div class="nk-app-root">
        <div class="nk-main ">
            <div class="nk-wrap nk-wrap-nosidebar">
                <div class="nk-content ">
                    <div class="container" style="margin-top: 10%">
                        <!--                         <div class="brand-logo pb-4 text-center">
                            <a href="html/index.html" class="logo-link">
                                <img class="logo-light logo-img logo-img-lg" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                                <img class="logo-dark logo-img logo-img-lg" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                            </a>
                        </div> -->
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="card">
                                    <div class="card-inner card-inner-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="nk-block-title">Sign-In</h4>
                                            </div>
                                        </div>
                                      <form role="form" id="logform">
                                            <div class="example-alert">
                                              <div class="alert alert-danger alert-icon" id="myalert" style="display:none;">
                                                        <em class="icon ni ni-cross-circle"></em> <strong id="alerttext"></strong> 
                                                    </div>
                                             </div>

                                               <div class="alert alert-success alert-icon" id="myalert3" style="display:none;">
                                                  
                                                </div>

                                           <div class="alert alert-danger alert-icon" id="myalert2" style="display:none;">
                                                  
                                                </div>
                                            <div class="form-group">
                                                <div class="form-label-group">
                                                    <label class="form-label" for="default-01">Username</label>
                                                </div>
                                                <input type="text" class="form-control form-control-lg" name="username" id="username" placeholder="Enter your username" autocomplete="off">
                                            </div>
                                            <div class="form-group">
                                                <div class="form-label-group">
                                                    <label class="form-label" for="password">Password</label>
                                                </div>
                                                <div class="form-control-wrap">
                                                    <a href="#" class="form-icon form-icon-right passcode-switch" data-target="password" autocomplete="off">
                                                        <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                        <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                                    </a>
                                                    <input type="password" class="form-control form-control-lg" name="password" id="password" placeholder="Enter your Password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-lg btn-info btn-block" id="login-button">Sign in</button>
                                            </div>
                                        </form>
                                        <div class="form-note-s2 text-right pt-2"><a href="http://localhost/GYM/main/forgot_password.php">Forgot Password</a>
                                     </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="card">
                                    <div class="card-inner card-inner-lg">
                                        <img src="/GYMMIS/images/pngkit_gym-png-images_9139441.png">
                                    </div>
                                </div>
                            </div>
                        </div>
<!--                         <div class="nk-footer nk-auth-footer-full footer">
                            <div class="container wide-lg">
                                <div class="row g-3">
               
                                    <div class="col-lg-6">
                                        <div class="nk-block-content text-center text-lg-left">
                                            <p class="text-soft">&copy; 2022 GYM. All Rights Reserved.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

        <script src="assets/js/bundle.js?ver=2.4.0"></script>
        <script src="assets/js/scripts.js?ver=2.4.0"></script>
        <script type="text/javascript" src="main/assets/customs/js/user_login.js"></script>

</html>