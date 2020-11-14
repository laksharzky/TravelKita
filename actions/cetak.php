<?php
include '../db_config.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT*FROM flight WHERE id = $id";
  $rows = mysqli_query($conn, $query);
}
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
  <img src="../assets/image/logo.png" width="80" height="80">
  <h4>Electronic Ticket Receipt</h4>

  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col" class="text-center">No</th>
        <th scope="col" class="text-center">ID</th>
        <th scope="col" class="text-center">Dari</th>
        <th scope="col" class="text-center">Tujuan</th>
        <th scope="col" class="text-center">Penumpang</th>
        <th scope="col" class="text-center">Tanggal Berangkat</th>
        <th scope="col" class="text-center">Kelas</th>
        <th scope="col" class="text-center">Pesawat</th>

      </tr>
    </thead>
    <?php
    $no = 1;
    while ($row = mysqli_fetch_assoc($rows)) { ?>


      <tbody>
        <td class="text-center"><?php echo $no ?></td>
        <td class="text-center"><?php echo $row["id"] ?></td>
        <td class="text-center"><?php echo $row["from"] ?></td>
        <td class="text-center"><?php echo $row["to"] ?></td>
        <td class="text-center"><?php echo $row["penumpang"] ?></td>
        <td class="text-center"><?php echo $row["tgl_brngkt"] ?></td>
        <td class="text-center"><?php echo $row["kelas"] ?></td>
        <td class="text-center"><?php echo $row["pesawat"] ?></td>


      </tbody>
    <?php
      $no++;
    }
    ?>
  </table>

  <script>
    window.print();
  </script>



  <script src="../js/jquery-3.3.1.slim.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/navbar.min.js"></script>

  <!-- Menu Toggle Script -->


</body>

</html>