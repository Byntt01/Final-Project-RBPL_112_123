<?php
include "function.php";

if (isset($_GET['id_pesanan'])) {
    $id_pesanan = $_GET['id_pesanan'];
    if (hapus($id_pesanan) > 0) {
        header("Location: dashboard_admin.php");
        exit;
    } else {
        header("Location: gagal.php");
        exit;
    }
}
?>
