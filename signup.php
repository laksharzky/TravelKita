<?php 
	include 'db_config.php';



 ?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
	<link rel="icon" type="image/png" href="assets/image/logo.png">
  <title>Travel Kita</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/user.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign Up</h5>
            <form class="form-signin" method="POST" action="actions/regis.php">
            	

              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required autofocus>
                <label for="inputEmail">Email address</label>
              </div>
              <div class="form-label-group">
                <input type="text" class="form-control" placeholder="Username" name="username" required autofocus>
                <label for="Username">Username</label>
              </div>

              <div class="form-label-group">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>

              
              <button class="btn btn-lg btn-google btn-block text-uppercase" name="submit" type="submit"><i class="fab fa-google mr-2"></i> Sign up</button>
        
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/navbar.min.js"></script>
</body>
