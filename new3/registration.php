<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
<title>Registration | satyakam</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
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
?><div class="container">
<div class="img">
    <img src="img/bg.svg">
</div>
<div class="login-content">
    <form action="" method="post" name="login">
        <img src="img/avatar.svg">
        <h2 class="title">Welcome</h2>
        <div class="input-div one">
           <div class="i">
                <i class="fas fa-user"></i>
           </div>
           <div class="div">
                <h5></h5>
                <input type="text" class="input" name="username" placeholder="username" autofocus>
           </div>
        </div>
           <div class="input-div one">
           <div class="i">
                <i class="fas fa-user"></i>
           </div>
           <div class="div">
                <h5></h5>
                <input type="text" class="input" name="email" placeholder="email" autofocus>
           </div></div>
        <div class="input-div pass">
           <div class="i">
                <i class="fas fa-lock"></i>
           </div>
           <div class="div">
                <h5></h5>
                <input type="password" class="input" name="password" placeholder="password" >
           </div>
        </div>
        <a href="#">Forgot Password?</a>
        <input type="submit" class="btn" value="Register" name="submit">
        <p class="login-lost">New Here? <a href="login.php">login</a></p>
    </form>
 
<?php } ?>
</body>
</html>
