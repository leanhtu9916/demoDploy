<!DOCTYPE html>
<html lang="en">

<head>
    <title>Foxconn - Tạp Hóa</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-b-160 p-t-50">
                <form method="POST" action="?action=signin" class="login100-form validate-form">
                    <span class="login100-form-title p-b-10">
						ĐĂNG NHẬP
					</span>
                    <span class="login50-form-title p-b-43" style="color: white; margin: auto;">
                        <?php 
                        if(isset($_SESSION['error'])){
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);
                        }
                        ?>
                    </span>

                    <div class="wrap-input100 rs1 validate-input" data-validate="Tài khoản không được để trống">
                        <input autocomplete="off" style="text-transform: uppercase;" class="input100" value="" type="text" name="username">
                        <span class="label-input100">Tài khoản</span>
                    </div>


                    <div class="wrap-input100 rs2 validate-input" data-validate="Mật khẩu không được để trống">
                        <input autocomplete="off" class="input100" value="" type="password" name="password">
                        <span class="label-input100">Mật khẩu</span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Sign in
                        </button>
                    </div>
                </form>
                <div class="text-center w-full p-t-23">
                    <a data-toggle="modal" data-target="#myModal1" href="#" class="txt1">
                        <i class="glyphicon glyphicon-question-sign"></i> Forgot password??
                    </a>
                    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content" style="margin-top: 20%;">
                                <div class="modal-header">
                                    <h4 style="margin: auto;" class="modal-title" id="myModalLabel2">Forgot password?</h4>
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Mật khẩu mặc định sẽ là ngày tháng năm sinh của bạn.
                                    <br> VD: 20/09/1997
                                    <br> Nếu bạn đã quên mật khẩu của mình hãy xuống gặp nhân viên tạp hóa và xuất trình thẻ nhân viên để được cấp lại mật khẩu.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

</html>