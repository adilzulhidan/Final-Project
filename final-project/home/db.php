<?php
$servername = "localhost";
$username = "root"; // ganti dengan username Anda
$password = ""; // ganti dengan password Anda
$database = "ticket_booking_system"; // nama database yang sudah dibuat

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
