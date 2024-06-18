<?php
session_start();

// Cek apakah pengguna sudah login
if (isset($_SESSION['username']) && $_SESSION['status'] == 'login') {
    // Jika pengguna sudah login, tampilkan informasi sesi
    echo "<h1>Informasi Sesi Pengguna</h1>";
    echo "<p>Username: {$_SESSION['username']}</p>";
    echo "<p>Status: {$_SESSION['status']}</p>";
    echo "<p>Sesi ID: " . session_id() . "</p>";
    echo "<p><a href='logout.php'>Logout</a></p>";
} else {
    // Jika pengguna belum login, beri tahu pengguna untuk login terlebih dahulu
    echo "<h1>Informasi Sesi Pengguna</h1>";
    echo "<p>Anda belum login.</p>";
    echo "<p>Silakan <a href='login.php'>login</a>.</p>";
}
?>
