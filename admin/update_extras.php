
<?php   
    require '../db_config.php';

    session_start();
  if (empty($_SESSION['nm_pengguna'])) {
      header("location: index.php");
    };

    $id = $_GET['id'];

    if (empty($_GET["id"])) {
     header('Location: kelola.php');
    }
   $query = "SELECT * FROM extras WHERE id = $id";
   $eksekusi = mysqli_query($conn, $query);
   $data = mysqli_fetch_assoc($eksekusi);

   
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/png" href="../assets/image/logo.png">
  <title>Travel Kita</title>

  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">
 

</head>
<body>
   <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading text-uppercase"><a href="admin.php">Administrator</a></div>
      <div class="list-group list-group-flush">
        <a href="flightbook.php" class="list-group-item list-group-item-action bg-light">Flight Booking</a>
        <a href="hotelbook.php" class="list-group-item list-group-item-action bg-light">Hotel Booking</a>
        <a href="upload_extras.php" class="list-group-item list-group-item-action bg-light">Extras</a>
        <a href="kelola.php" class="list-group-item list-group-item-action bg-light">Kelola Extras</a>
        <a href="profile.php" class="list-group-item list-group-item-action bg-light">Profile</a>
      
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <p class="nav-link"><?php echo $_SESSION["nm_pengguna"] ?></p>
            <li class="nav-item">
              <a class="btn btn-danger" href="logout.php">Logout</a>
            </li>
            
            </li>
          </ul>
        </div>
      </nav>
      </nav>
       <form method="POST" action="../actions/update.php" enctype="multipart/form-data">
            
              <div class="form-group ">
                <label for="gambar">Image</label><br>   
                <input type="file" class="filestyle noborder" name="gambar" id="image" onchange="showImage(this);">
              </div>

              <div class="form-group ">
                <label for="comment">Content</label>
                  <textarea class="form-control noborder" rows="5" name="konten" id="konten"><?php echo $data ['konten']; ?></textarea>
                  
                </div>
            <button type="submit" class="btn btn-primary noborder" name="save">Simpan</button>

          </form>
</body>
</html>