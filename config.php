<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'tugas5_php';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}
?>

