<?php
session_start();

// User dan password statis
$validUsername = "user";
$validPassword = "password";

// Ambil username dan password dari formulir login
$username = $_POST["username"];
$password = $_POST["password"];

// Periksa apakah autentikasi berhasil
if ($username === $validUsername && $password === $validPassword) {
    $_SESSION["username"] = $username;
    header("Location: dashboard.php");
    exit();
} else {
    header("Location: login.php");
    exit();
}
?>
