<?php
include '../db_config.php';

//submit user data to registration process
if (isset($_POST['submit'])) {

  //saving data into a local variable
  $email = $_POST["email"];
  $username = $_POST["username"];
  $password = strtolower($_POST["password"]);

  //data validation
  if (
    !empty($email) and
    !empty($username) and
    !empty($password)
  ) {

    //query insert into Database
    $query1 = "INSERT INTO user VALUES (
          '$email',
          '$username',
          '$password')";
    $eksekusi  = mysqli_query($conn, $query1);

    if (mysqli_affected_rows($conn)) { ?>
      <script type="text/javascript">
        alert("Anda Berhasil Registrasi");
        window.location.href = "../user.php"
      </script>
<?php
    }
  }
} else {
  header('location:../index.php');
}
?>