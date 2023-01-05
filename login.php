<?php
require 'function.php';

if (!isset($_SESSION['login'])) {
    //yaudah
} else {
    //sudah login
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
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
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style type="text/css">
        .input100 {
            font-family: Poppins-Medium;
            font-size: 16px;
            line-height: 1.2;
            color: #d9d9d9;
            display: block;
            width: 100%;
            height: 55px;
            background: transparent;
            padding: 0 7px 0 43px;
        }

        .label-input100 {
            font-family: Poppins-Regular;
            font-size: 14px;
            color: #d9d9d9;
            line-height: 1.5;
            padding-left: 7px;
        }

        h1 {
            font-family: 'Times New Roman', Times, serif;
            text-shadow: 10px 5px 5px black;
            color: white;
        }
    </style>
    <!--===============================================================================================-->
</head>

<body>
    <div class="banner">
        <video autoplay loop muted>
            <source src="3.mp4">
        </video>

        <div class="limiter">
            <div class="container-login100">
                <marquee>
                    <h1>Selamat Datang Di Dinas Pendidikan</h1>
                </marquee>
                <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                    <form method="post" class="login100-form validate-form">
                        <span class="login100-form-title p-b-49">
                            Login
                        </span>

                        <div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
                            <span class="label-input100">Username</span>
                            <input class="input100" color="white" type="text" name="username" placeholder="Type your username">
                            <span class="focus-input100" data-symbol="&#xf206;"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                            <span class="label-input100">Password</span>
                            <input class="input100" type="password" name="password" placeholder="Type your password">
                            <span class="focus-input100" data-symbol="&#xf190;"></span>
                        </div>
                        <br>
                        <div class="container-login100-form-btn ">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button type="submit" name="login" class="login100-form-btn">Login</button>
                            </div>
                        </div><br>
                        <div class="container-login100-form-btn ">

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

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