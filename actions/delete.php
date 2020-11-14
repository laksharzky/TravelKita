<?php


require '../db_config.php';

if (isset($_GET['id'])) {

	$id = $_GET['id'];

	$query = "DELETE FROM flight
					WHERE id = $id";


	$eksekusi = mysqli_query($conn, $query);


	if (mysqli_affected_rows($conn)) { ?>

		<script type="text/javascript">
			alert('Data Berhasil Dihapus');
			window.location.href = '../admin/flightbook.php';
		</script>

	<?php
	}
} else {
	header('locaction: ../admin.admin.php');
}
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$query1 = "DELETE FROM hotel WHERE id = $id";
	$execute = mysqli_query($conn, $query1);

	if (mysqli_affected_rows($conn)) { ?>
		<script type="text/javascript">
			alert('Data Berhasil Dihapus');
			window.location.href = '../admin/hotelbook.php';
		</script>

	<?php

	}
} else {
	header('location: ../admin/hotelbook');
}
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$query2 = "DELETE FROM extras WHERE id = $id";
	$eksekusi1 = mysqli_query($conn, $query2);

	if (mysqli_affected_rows($conn)) { ?>
		<script type="text/javascript">
			alert('Data Berhasil Dihapus');
			window.location.href = '../admin/kelola.php'
		</script>
<?php
	}
} else {
	header('location:../admin/kelola.php');
}

?>