<?php 
    include '../db_config.php';


    if(isset($_POST['masuk'])){
  
    // validasi login benar atau salah
      $nm_pengguna = strtolower($_POST["adminuser"]);
      $kata_sandi    = $_POST["password"];

      $query    = "SELECT * FROM admin WHERE 
            nm_pengguna = '$nm_pengguna' AND kata_sandi = '$kata_sandi' ";

      $eksekusi = mysqli_query($conn, $query);
      $cek      = mysqli_num_rows($eksekusi);

      if ($cek > 0) {
         session_start();
   
   $_SESSION['nm_pengguna'] = $nm_pengguna;
        header("location:admin.php");
      }
      else { ?>
        <script type="text/javascript">
        alert('Anda Bukan Admin');
        window.location.href = '../admin/index.php';
      </script>

      <?php
    }



  }


?>


<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="../assets/image/logo.png">
	<title>Administrator</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">
</head>
<body>

	<div class="container-fluid">
  <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4">Welcome Admin</h3>
              <form method="POST">
                  
                <div class="form-label-group">
                  <input type="text" id="inputUsername" class="form-control" placeholder="Username" name="adminuser" required autofocus>
                  <label for="inputUsername">Username</label>
                </div>

                <div class="form-label-group">
                  <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
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