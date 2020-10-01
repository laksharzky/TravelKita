<?php 
include '../db_config.php';


if (isset($_POST['submit'])) {
  
  //simpan data ke variabel lokal

  $email = $_POST["email"];
  $username = $_POST["username"];
  $password = strtolower($_POST["password"]);
 

  //validasi data tidak kosong
  if ( !empty($email) AND
        !empty($username)AND
      !empty($password)) {

    //query insert
    $query1 = "INSERT INTO user VALUES (
          '$email',
          '$username',
          '$password')";
    $eksekusi  = mysqli_query($conn, $query1);

    if (mysqli_affected_rows($conn)) {?>
      <script type="text/javascript">
        alert("Anda Berhasil Registrasi");
        window.location.href = "../user.php"
      </script>
      <?php 
    } 

      
    }
  }else{
    header('location:../index.php');
  }
?>