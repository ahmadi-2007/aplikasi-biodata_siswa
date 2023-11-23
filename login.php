<?php
session_start();
include "../config/config.php";

if (isset($_SESSION['nama'])) {
    header("Location: ../dashboard.php");
    exit();
}
if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_REQUEST['username']);
    $password = hash('sha256', $_REQUEST['password']);

    $sql = "SELECT * FROM user WHERE username = '$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);

        if ($result->num_rows > 0) {
            $_SESSION['username'] = $username;
            $_SESSION['role'] = "admin";
            header("location: ../siswa.php");
        } else if ($row['role'] == "admin") {
            $_SESSION['username'] = $username;
            $_SESSION['role'] = "siswa";
            header("location: ../siswa.php");
        } else {
            "<script>alert('email atau password salah, silahkan coba lagi')<?script>";
        }
    }
}