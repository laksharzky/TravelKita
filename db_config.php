<?php 

$db_user = "root";
$db_pass = "";
$db_host = "localhost";
$db_name = "pemesanan";

$conn = mysqli_connect(
		"$db_host",
		"$db_user",
		"$db_pass",
		"$db_name");

if (!$conn) {
	die('Maaf Tidak Dapat Terhubung :' . mysqli_error());
}

 ?>
 