<?php 
	include '../db_config.php';


//Data Pesawat
if (isset($_POST['proses'])) {
	
	//simpan data ke variabel lokal
	$kota = strtolower($_POST["kota"]);
	$check_in = $_POST["check_in"];
	$check_out = $_POST["check_out"];
	$tamu = $_POST["tamu"];
	$kamar= $_POST["kamar"];
	

	//validasi data tidak kosong
	if ( !empty($kota) AND
		 !empty($check_in) AND
		 !empty($check_out) AND 
		!empty($tamu) AND 
		!empty($kamar)) {

		//query insert
		$query = "INSERT INTO hotel VALUES (
					'',
					'$kota',
					'$check_in',
					'$check_out',
					'$tamu',
					'$kamar')";
		$execute  = mysqli_query($conn, $query);

		if (mysqli_affected_rows($conn)) {?>
			<script type="text/javascript">
				alert("Anda Telah Memesan");
				window.location.href = "../hotel.php"
			</script>
			<?php 
		}

			
		}
	}else{
		header('location:../hotel.php');
	}




 ?>
