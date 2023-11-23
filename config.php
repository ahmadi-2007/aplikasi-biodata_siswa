<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "biodata_siswa";
$conn = mysqli_connect($server, $user, $password, $database);
if (!$conn) {
    die("koneksi databases Gagal: " . mysqli_connect_error());
}