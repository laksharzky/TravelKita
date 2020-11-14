<?php
include '../db_config.php';


//Data Hotel
if (isset($_POST['proses'])) {

	//simpan data ke variabel lokal
	$kota = strtolower($_POST["kota"]);
	$check_in = $_POST["check_in"];
	$check_out = $_POST["check_out"];
	$tamu = $_POST["tamu"];
	$kamar = $_POST["kamar"];

	//validasi data tidak kosong
	if (
		!empty($kota) and
		!empty($check_in) and
		!empty($check_out) and
		!empty($tamu) and
		!empty($kamar)
	) {

		//query insert data into database
		$query = "INSERT INTO hotel VALUES (
					'',
					'$kota',
					'$check_in',
					'$check_out',
					'$tamu',
					'$kamar')";
		$execute  = mysqli_query($conn, $query);

		if (mysqli_affected_rows($conn)) { ?>
			<script type="text/javascript">
				alert("Anda Telah Memesan");
				window.location.href = "../hotel.php"
			</script>
<?php
		}
	}
} else {
	header('location:../hotel.php');
}




?>