<?php
require '../db_config.php';
function upload_img()
{
	//saving an image files
	if (isset($_FILES["gambar"])) {
		$nama = uniqid() . "-" . $_FILES["gambar"]["name"];
		$tipe = $_FILES["gambar"]["type"];
		$lokasi_sem = $_FILES["gambar"]["tmp_name"];
		$error = $_FILES["gambar"]["error"];
		$ukuran = $_FILES["gambar"]["size"];

		$ekstensi = explode(".", $nama);
		$ekstensi = strtolower(end($ekstensi));
		$ekstensi_img = ["jpg", "jpeg", "png", "gif", "bmp", "docx"];


		//validation
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
				window.location.href = "../admin/update_extras.php";
			</script>
		<?php
		} else {
			move_uploaded_file($lokasi_sem, "../assets/image" . $nama);
			return $nama;
		}
	}
}

//saving data
if (isset($_POST['save'])) {

	$id = $_POST['id'];
	$nm_gambar = upload_img();
	$konten = $_POST["konten"];

	if (
		!empty($nm_gambar) and
		!empty($konten)
	) {
		$query = "UPDATE extras SET 
		nm_gambar = '$nm_gambar', 
		konten = '$konten', 
		
		WHERE id = '$id'";

		mysqli_query($conn, $query);

		if (mysqli_affected_rows($conn)) { ?>
			<script type="text/javascript">
				alert("Tulisan Berhasil di update");
				window.location.href = "../admin/kelola.php"
			</script>
<?php
		}
	}
} else {
	header('Location: ../admin/kelola.php');
}



?>