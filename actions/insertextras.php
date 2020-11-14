<?php
include '../db_config.php';


//fungsi upload
function upload_img()
{

	if (isset($_FILES["gambar"])) {
		$nama = uniqid() . "-" . $_FILES["gambar"]["name"];
		$tipe = $_FILES["gambar"]["type"];
		$lokasi_sem = $_FILES["gambar"]["tmp_name"];
		$error = $_FILES["gambar"]["error"];
		$ukuran = $_FILES["gambar"]["size"];
		$ekstensi = explode(".", $nama);
		$ekstensi = strtolower(end($ekstensi));
		$ekstensi_img = ["jpg", "jpeg", "png", "gif", "bmp", "docx"];


		//validasi
		if ($error == 4) {
?>
			<script type="text/javascript">
				alert("File tidak ada");
				window.location.href = "../admin/upload_extras.php";
			</script>



		<?php
		} elseif (in_array($ekstensi, $ekstensi_img) == false) {
		?>
			<script type="text/javascript">
				alert("Format Salah");
				window.location.href = "../admin/upload_extras.php";
			</script>
		<?php
		} elseif ($ukuran > 6048576) {
		?>
			<script type="text/javascript">
				alert("Ukuran file terlalu besar");
				window.location.href = "../admin/upload_extras.php";
			</script>
		<?php
		} else {
			move_uploaded_file($lokasi_sem, "../assets/image" . $nama);
			return $nama;
		}
	}
}

//Data Extras
if (isset($_POST['publish'])) {

	$nm_gambar = upload_img();
	$konten = $_POST["konten"];

	if (
		!empty($nm_gambar) and
		!empty($konten)
	) {

		$query = "INSERT INTO extras VALUES(
						'',
						'$nm_gambar',
						'$konten')";

		$execute = mysqli_query($conn, $query);

		if (mysqli_affected_rows($conn)) { ?>
			<script type="text/javascript">
				alert("Tulisan Berhasil di post");
				window.location.href = "../admin/upload_extras.php"
			</script>
<?php
		}
	}
} else {
	header('location../admin/upload_extras');
}




?>