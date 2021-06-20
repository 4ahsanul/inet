<?php 
include "config.php";

// Jika variabel id diset di URL, kita dapat mengedit
if (isset($_GET['id'])) {
	$user_id = $_GET['id'];

	// Tulis delete query
	$sql = "DELETE FROM `pegawai` WHERE `id`='$user_id'";

	// Eksekusi the query

	$result = $conn->query($sql);

	if ($result == TRUE) {
		echo "Record deleted successfully.";
	}else{
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
}

?>
