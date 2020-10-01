<?php 
	include '../db_config.php';









//Data Pesawat
if (isset($_POST['proses'])) {
	
	//simpan data ke variabel lokal
	$from = strtolower($_POST["from"]);
	$to = strtolower($_POST["to"]);
	$penumpang = $_POST["penumpang"];
	$tgl_brngkt = $_POST["tgl_brngkt"];
	$kelas = $_POST["kelas"];
	$pesawat = $_POST['pesawat'];

	//validasi data tidak kosong
	if ( !empty($from) AND
		 !empty($to) AND
		 !empty($penumpang) AND 
		!empty($tgl_brngkt) AND 
		!empty($kelas)AND
		!empty($pesawat)) {

		//query insert
		$query = "INSERT INTO flight VALUES (
					'',
					'$from',
					'$to',
					'$penumpang',
					'$tgl_brngkt',
					'$kelas',
					'$pesawat')";
		$execute  = mysqli_query($conn, $query);

		if (mysqli_affected_rows($conn)) {?>
			<script type="text/javascript">
				alert("Anda Telah Memesan");
				window.location.href = "../flight.php"
			</script>
			<?php 
		}

			
		}
	}else{
		header('location:../flight.php');
	}




 ?>
