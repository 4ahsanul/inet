<?php 
include "config.php";

//Tulis query untuk mendapatkan data dari tabel user

$sql = "SELECT * FROM pegawai";

//Ekseskusi query

$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html>
<head>
	<title>View Page</title>
	 <!-- Penggunaan Boostrap -->
	 <!-- Langsung dicompile oleh CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h2>Pegawai</h2>
<table class="table">
	<thead>
		<tr>
		<th>ID</th>
		<th>Nama</th>
		<th>Gaji</th>
		<th>Kota</th>
		<th>Deskripsi</th>
		<th>Action</th>
	</tr>
	</thead>
	<tbody>	
		<?php
			if ($result->num_rows > 0) {
				//Output data dari setiap baris
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['nama']; ?></td>
					<td><?php echo $row['gaji']; ?></td>
					<td><?php echo $row['kota']; ?></td>
					<td><?php echo $row['deskripsi']; ?></td>
					<td><a class="btn btn-info" href="baru.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
					</tr>	
					
		<?php		}
			}
		?>
	        	
	</tbody>
</table>
	</div>

</body>
</html>
