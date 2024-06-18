<?php
session_start();
$mysqli = new mysqli('localhost', 'root', '', 'swkcare');

if ($mysqli->connect_error) {
    die("Koneksi gagal: " . $mysqli->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $metode = $_POST['metode'];
    $jumlah = $_POST['jumlah'];
    $paymentProof = $_FILES['paymentProof'];

    $nama_file = $_FILES['paymentProof']['name'];
    $ukuran_file = $_FILES['paymentProof']['size'];
    $tipe_file = $_FILES['paymentProof']['type'];
    $tmp_file = $_FILES['paymentProof']['tmp_name'];


    $gambar = file_get_contents($tmp_file);

    $query = "INSERT INTO pesanan (jenis_layanan, ukuran_sepatu, warna, no_hp, tanggal_pesanan, alamat, metode_pembayaran, jumlah_pembayaran, bukti_pembayaran)
              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $mysqli->prepare($query);

    $jenis_layanan = "";
    $ukuran_sepatu = ""; 
    $warna = ""; 
    $no_hp = ""; 
    $tanggal_pesanan = date("Y-m-d"); 
    $alamat = ""; 
    $jumlah_pembayaran = $jumlah;
    $stmt->bind_param("sssssssss", $jenis_layanan, $ukuran_sepatu, $warna, $no_hp, $tanggal_pesanan, $alamat, $metode, $jumlah_pembayaran, $gambar);

    if ($stmt->execute()) {
        echo "Bukti pembayaran berhasil diupload.";
    } else {
        echo "Error: " . $mysqli->error;
    }

    $stmt->close();
}

$mysqli->close();
?>
