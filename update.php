<?php 
include "config.php";

// Jika tombol button update diklik, maka kita perlu memproses form nya
	if (isset($_POST['update'])) {
		$nama = $_POST['nama'];
		$user_id = $_POST['user_id'];
		$gaji = $_POST['gaji'];
		$kota = $_POST['kota'];
		$deskripsi = $_POST['deskripsi'];

		// Tulis update query
		$sql = "UPDATE `pegawai` SET `nama`='$nama',`gaji`='$gaji',`kota`='$kota',`deskripsi`='$deskripsi' WHERE `id`='$user_id'";

		// Eksekusi query
		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "Record updated successfully.";
		}else{
			echo "Error:" . $sql . "<br>" . $conn->error;
		}
	}


// Jika id variabel tealh diset di URL, maka kita perlu edit record
if (isset($_GET['id'])) {
	$user_id = $_GET['id'];

	// Tulis SQL to mendapatkan user data
	$sql = "SELECT * FROM `pegawai` WHERE `id`='$user_id'";

	// Eksekusi sql
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			$nama = $row['nama'];
			$gaji = $row['gaji'];
			$kota = $row['kota'];
			$deskripsi  = $row['deskripsi'];
			$id = $row['id'];
		}

	?>
		<h2>User Update Form</h2>
		<form action="" method="post">
		  <fieldset>
		    <legend>Personal information:</legend>
		    Nama:<br>
		    <input type="text" name="nama" value="<?php echo $nama; ?>">
		    <input type="hidden" name="user_id" value="<?php echo $id; ?>">
		    <br>
		    Gaji:<br>
		    <input type="float" name="gaji" value="<?php echo $gaji; ?>">
		    <br>
		    Kota:<br>
		    <input type="text" name="kota" value="<?php echo $kota; ?>">
		    <br>
		    Deskripsi:<br>
		    <input type="text" name="deskripsi" value="<?php echo $deskripsi; ?>">
		    <br><br>
		    <input type="submit" value="Update" name="update">
		  </fieldset>
		</form>

		</body>
		</html>

	<?php
	} else{
		// Jika id tidak valid, user akan kembali ke halaman view.php
		header('Location: view.php');
	}
}
?>
