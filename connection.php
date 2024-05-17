<?php
$servername = "localhost"; // atau sesuaikan dengan host Laragon Anda
$username = "root"; // sesuaikan dengan pengguna MySQL Anda
$password = ""; // sesuaikan dengan kata sandi MySQL Anda (jika ada)
$dbname = "porto"; // sesuaikan dengan nama database Anda

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
