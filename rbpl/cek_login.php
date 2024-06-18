<?php
session_start();

// Cek apakah pengguna sudah login
if (isset($_SESSION['username']) && $_SESSION['status'] == 'login') {
    // Pengguna sudah login
    $username = $_SESSION['username'];
    echo "Selamat datang, $username! Anda sudah login.";
    echo "<br>";
    echo '<a href="logout.php">Logout</a>';
} else {
    // Pengguna belum login
    echo "Anda belum login.";
    echo "<br>";
    echo '<a href="login.php">Login</a>';
}
?>
