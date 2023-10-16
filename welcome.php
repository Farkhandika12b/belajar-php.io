<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("location: login.html");
    exit();
}

// Jika sudah login, tampilkan pesan selamat datang
?>
<!DOCTYPE html>
<html>
<head>
    <title>Selamat Datang</title>
</head>
<body>

<h2>Selamat Datang, <?php echo $_SESSION['username']; ?></h2>
<p><a href="logout.php">Keluar</a></p>

</body>
</html>
