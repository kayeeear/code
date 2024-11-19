<?php
$host = "localhost"; // Server MySQL
$user = "root";      // Username MySQL
$password = "";      // Password MySQL
$dbname = "db_sample"; // Nama database

$conn = new mysqli($host, $user, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
