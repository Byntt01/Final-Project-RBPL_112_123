<?php
include 'connection.php';

$jenis_layanan = $_POST['jenis_layanan'];
$ukuran_sepatu = $_POST['ukuran_sepatu'];
$warna = $_POST['warna'];
$no_hp = $_POST['no_hp'];
$tanggal_pesanan = $_POST['tanggal_pesanan'];
$alamat = $_POST['alamat'];
$metode_pembayaran = $_POST['metode_pembayaran'];
$jumlah_pembayaran = $_POST['jumlah_pembayaran'];


// Query untuk menyimpan data ke database
$sql = "INSERT INTO pesanan (jenis_layanan, ukuran_sepatu, warna, no_hp, tanggal_pesanan, alamat, metode_pembayaran, jumlah_pembayaran)
VALUES ('$jenis_layanan', '$ukuran_sepatu', '$warna', '$no_hp', '$tanggal_pesanan', '$alamat', '$metode_pembayaran', '$jumlah_pembayaran')";

if ($conn->query($sql) === TRUE) {
    // Redirect ke halaman pembayaran dengan metode dan jumlah sebagai query parameters
    header("Location: pembayaran.php?metode=$metode_pembayaran&jumlah=$jumlah_pembayaran");
    exit(); // Pastikan script berhenti setelah redirect
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
