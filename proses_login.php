<?php
// mengambil data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// asumsikan username dan password yang valid adalah "admin"
$valid_username = "admin";
$valid_password = "admin";

// cek apakah username dan password yang dimasukkan valid
if ($username == $valid_username && $password == $valid_password) {
    // jika valid, redirect ke halaman utama
    header('Location: index.php');
} else {
    // jika tidak valid, redirect kembali ke halaman login
    header('Location: login.php');
}
?>
