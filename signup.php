<?php
include 'db_config.php';
?>
<!DOCTYPE html>
<html>

<!DOCTYPE html>
<html>

<head>
  <link rel="icon" type="image/png" href="assets/image/logo.png">
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
</head>

<body>
  <div class="container-fluid">
    <div class="row no-gutter">
      <div class="d-none d-md-flex col-md-4 col-lg-6 user-bg"></div>
      <div class="col-md-8 col-lg-6">
        <div class="login d-flex align-items-center py-5">
          <div class="container">
            <div class="row">
              <div class="col-md-9 col-lg-8 mx-auto">
                <div class="text-center">
                  <img src="assets/image/logo.png" class="rounded" alt="..." width="40%">
                </div>
                <h3 class="login-heading mb-4">Login/Register</h3>
                <form method="POST">

                  <div class="form-label-group">
                    <input type="text" id="inputEmail" class="form-control" placeholder="Username" name="userEmail" required autofocus>
                    <label for="inputEmail">Email address</label>
                  </div>
                  <div class="form-label-group">
                    <input type="text" id="inputUsername" class="form-control" placeholder="Username" name="userUsername" required autofocus>
                    <label for="inputUsername">Username</label>
                  </div>

                  <div class="form-label-group">
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="userPassword" required>
                    <label for="inputPassword">Password</label>
                  </div>

                  <button class="btn btn-lg btn-info btn-block btn-login text-uppercase font-weight-bold mb-2" name="masuk" type="submit">Sign in</button>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>