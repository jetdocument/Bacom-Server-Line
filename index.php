<?php 
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bacom Line Service</title>
    
    <meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
    <meta name="author" content="">
    
    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="assets/img/metis-tile.png" />
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/lib/font-awesome/css/font-awesome.css">
    
    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="assets/css/main.css">
    
    <!-- metisMenu stylesheet -->
    <link rel="stylesheet" href="assets/lib/metismenu/metisMenu.css">
    
    <!-- animate.css stylesheet -->
    <link rel="stylesheet" href="assets/lib/animate.css/animate.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="login">

    <div class="form-signin">
    <div class="text-center">
        <img src="assets/img/logo.png" alt="Bacom Internetwork Logo">
    </div>
    <hr>
    <div class="tab-content">
        <div id="login" class="tab-pane active">
            <form name="login">
                <p class="text-muted text-center">
                    Enter your username and password
                </p>
                <input name="username" type="text" placeholder="Username" class="form-control top">
                <input name="pass" type="password" placeholder="Password" class="form-control bottom">
                <!-- <div class="checkbox">
                  <label>
                    <input type="checkbox"> Remember Me
                  </label>
                </div> -->                
                <input class="btn btn-lg btn-primary btn-block" type="button" value="Sign in" onclick="loginForm()">
            </form>
        </div>
        <div id="forgot" class="tab-pane">
            <form name="recover">
                <p class="text-muted text-center">Enter your valid Token ID</p>
                <input name="tokenid" type="text" placeholder="Token ID" class="form-control">
                <br>                
                <input class="btn btn-lg btn-danger btn-block" type="button" value="Recover Password" onclick="recoverForm()">
            </form>
        </div>
        <div id="signup" class="tab-pane">
            <!-- <form action="service-job-insert.html"> -->
            <form name="signup">
                <input name="tokenid" type="text" placeholder="Token ID" class="form-control top">
                <input name="name" type="text" placeholder="Display name" class="form-control middle">
                <input name="username" type="text" placeholder="Username" class="form-control middle">
                <input name="pass" type="password" placeholder="Password" class="form-control middle">
                <input name="repass" type="password" placeholder="Re-password" class="form-control bottom">
                <input class="btn btn-lg btn-success btn-block" type="button" value="SignUp" onclick="signupForm()"> 
            </form> 
        </div> 
    </div>
    <hr>
    <div class="text-center">
        <ul class="list-inline">
            <li><a class="text-muted" href="#login" data-toggle="tab">Login</a></li>
            <li><a class="text-muted" href="#forgot" data-toggle="tab">Forgot Password</a></li>
            <li><a class="text-muted" href="#signup" data-toggle="tab">Signup</a></li>
        </ul>
    </div>
  </div>


    <!--jQuery -->
    <script src="assets/lib/jquery/jquery.js"></script>

    <!--Bootstrap -->
    <script src="assets/lib/bootstrap/js/bootstrap.js"></script>
    <script src="assets/js/login.js"></script>    
    <script type="text/javascript">        
        
        (function($) {
            $(document).ready(function() {                 
                $('.list-inline li > a').click(function() {
                    var activeForm = $(this).attr('href') + ' > form';
                    //console.log(activeForm);
                    $(activeForm).addClass('animated fadeIn');
                    //set timer to 1 seconds, after that, unload the animate animation
                    setTimeout(function() {
                        $(activeForm).removeClass('animated fadeIn');
                    }, 1000);
                });
            });
        })(jQuery);
    </script>
</body>

</html>
