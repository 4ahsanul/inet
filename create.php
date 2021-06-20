<?php 
include "config.php";

// Jika tombol button diklik, maka kita perlu memproses form nya
if (isset($_POST['submit'])) {
  // Ambil variables dari the form
  $nama = $_POST['nama'];
  $gaji = $_POST['gaji'];
  $kota = $_POST['kota'];
  $deskripsi = $_POST['deskripsi'];

  //Tulis sql query

  $sql = "INSERT INTO `pegawai`(`nama`, `gaji`, `kota`, `deskripsi`) VALUES ('$nama', '$gaji', '$kota', '$deskripsi')";

  //Eksekusi query

  $result = $conn->query($sql);

  if ($result == TRUE) {
    echo "New record created successfully.";
  }else{
    echo "Error:". $sql . "<br>". $conn->error;
  }

  $conn->close();

}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Form Pendaftaran</h2>

<form action="" method="POST">
  <fieldset>
    <legend>Personal information:</legend>
    Nama:<br>
    <input type="text" name="nama">
    <br>
    Gaji:<br>
    <input type="float" name="gaji">
    <br>
    Kota:<br>
    <input type="text" name="kota">
    <br>
    Deskripsi:<br>
    <input type="text" name="deskripsi">
    <br><br>
    <input type="submit" name="submit" value="submit">
  </fieldset>
</form>

</body>
</html>
