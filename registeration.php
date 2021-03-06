
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Login to Recools - Easiest way to speed your app development.">
  <meta name="author" content="Recools">
  <title>Recools - Research and development - Authorization</title>
  
  <link href="assets/img/logo-icon.png" rel="icon" type="image/png">
  
  <link href="assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  
  <link type="text/css" href="assets/css/argon.mine209.css?v=1.0.0" rel="stylesheet">
	<link href="assets/css/noty.css" rel="stylesheet">
	<script src="assets/js/utils.js"></script>
</head>
<?php
require('db.php');
if (isset($_REQUEST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "
<h3>You are registered successfully.</h3>
Click here to<a href='login.php'>Login</a>";
        }
    }else{
?>

<body class="bg-default">
  <div class="main-content">
    
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
      <div class="container px-4">
        <a class="navbar-brand" href="index.html">
          <img src="assets/img/logo.svg" />
          <span>Recools</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
          
          <div class="navbar-collapse-header d-md-none">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="index.html">
                  <img src="assets/img/logo.svg">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="index.php">
                <i class="ni ni-planet"></i>
                <span class="nav-link-inner--text">Home</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="registeration.php">
                <i class="ni ni-circle-08"></i>
                <span class="nav-link-inner--text">Register</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="login.php">
                <i class="ni ni-key-25"></i>
                <span class="nav-link-inner--text">Login</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    

<div class="header bg-gradient-primary py-7 py-lg-8">
    <div class="container">
        <div class="header-body text-center mb-7">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6">
                    <h1 class="text-white">Register</h1>
                    <p class="text-lead text-light">Thank you for choosing Recools, enter some basic information
                        to create your account.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
            xmlns="http://www.w3.org/2000/svg">
            <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
    </div>
</div>

<div class="container mt--8 pb-5">
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
            <div class="card bg-secondary shadow border-0">
                <div class="card-header bg-transparent pb-5">
                    <div class="text-muted text-center mt-2 mb-3"><small>Register with</small></div>
                    <div class="btn-wrapper text-center">
                        <a href="" class="btn btn-neutral btn-icon">
                            <span class="btn-inner--icon"><img src="assets/img/icons/common/github.svg"></span>
                            <span class="btn-inner--text">Google</span>
                        </a>
                        <a href="#" class="btn btn-neutral btn-icon" style="padding: 4px;">
                            <div class="g-signin2" data-onsuccess="onSignIn"></div>
                        </a>
                    </div>
                </div>
                <div class="card-body px-lg-5 py-lg-5">
                    <div class="text-center text-muted mb-4">
                        <small>Or register with credentials</small>
                    </div>
                    <form id="register-form" role="form" action="" method="POST" name="login">
                        <div class="form-group mb-3">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                                </div>
                                <input class="form-control" name="username" placeholder="username" type="text" required>
                            </div>
                        </div>
                       
                        <div class="form-group mb-3">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <input class="form-control" name="Email" placeholder="Email" type="email" value="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                </div>
                                <input id="Password" class="form-control" name="password" placeholder="Password" type="password" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                </div>
                                <input id="PasswordRepeat" class="form-control" name="PasswordRepeat" placeholder="Password repeat" type="password" required>
                            </div>
                        </div>
                        <input type="hidden" name="x-csrf-token" value="">
                        <div class="text-center">
                            <button type="submit" value="Register" name="submit" class="btn btn-primary my-4">Register</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mt-3">
                
            </div>
        </div>
    </div>
</div>


  </div>
  
  <footer class="py-5">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; 2019 <a href="index.html" class="font-weight-bold ml-1" target="_blank">Recools</a>
          </div>
        </div>
        <div class="col-xl-6">
          <ul class="nav nav-footer justify-content-center justify-content-xl-end">
            <li class="nav-item">
              <a href="index.html" class="nav-link">Recools</a>
            </li>
            <li class="nav-item">
             <!-- <a href="https://app.tettra.co/teams/Recools/pages/welcome" class="nav-link">Documentation</a>-->
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  
  
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  
  <script src="assets/js/argone209.js?v=1.0.0"></script>
	<script src="assets/js/noty.min.js"></script>
  <script>
    
		
  </script>
  <?php } ?>
</body>

</html>
