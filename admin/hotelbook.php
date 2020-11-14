<?php
require '../db_config.php';
session_start();

if (empty($_SESSION['nm_pengguna'])) {
  header("location: index.php");
};

$query = "SELECT * FROM hotel";

$rows = mysqli_query($conn, $query);
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

      <div class="container-fluid">
        <h1 class="mt-4 text-center">Hotel Booking</h1>

      </div>
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col" class="text-center">No</th>
            <th scope="col" class="text-center">ID</th>
            <th scope="col" class="text-center">Kota</th>
            <th scope="col" class="text-center">Check In</th>
            <th scope="col" class="text-center">Check Out</th>
            <th scope="col" class="text-center">Tamu</th>
            <th scope="col" class="text-center">Kamar</th>
            <th scope="col" class="text-center">Aksi</th>
          </tr>
        </thead>
        <?php
        $no = 1;
        while ($row = mysqli_fetch_assoc($rows)) { ?>


          <tbody>
            <td class="text-center"><?php echo $no ?></td>
            <td class="text-center"><?php echo $row["id"] ?></td>
            <td class="text-center"><?php echo $row["kota"] ?></td>
            <td class="text-center"><?php echo $row["check_in"] ?></td>
            <td class="text-center"><?php echo $row["check_out"] ?></td>
            <td class="text-center"><?php echo $row["tamu"] ?></td>
            <td class="text-center"><?php echo $row["kamar"] ?></td>
            <td class="text-center">
              <a href="../actions/delete.php?id=<?php echo $row["id"] ?>" onclick="return confirm('Anda Yakin?')">Hapus</a></td>

          </tbody>
        <?php
          $no++;
        }
        ?>
      </table>


    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="../js/jquery-3.3.1.slim.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/navbar.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>