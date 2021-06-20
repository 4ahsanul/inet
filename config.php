// UNTUK KONEKSI DATABASE
<?php
$servername = "localhost";
$username = "root"; // Default username dari localhost adalah root
$password = ""; // Default password dari localhost adalah kosong/empty
$dbname = "db_pegawai"; // Database name yang akan digunakan

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?> 
