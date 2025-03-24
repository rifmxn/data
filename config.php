<?php
$host = "localhost"; // Host database
$user = "root"; // Username database
$password = ""; // Password database
$database = "user_auth"; // Nama database

// Membuat koneksi
$koneksi = new mysqli($host, $user, $password, $database);

// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
echo "Koneksi berhasil!";
?>
