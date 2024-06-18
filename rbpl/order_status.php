<?php
// Sambungkan ke database
include "connection.php";

// Ambil ID pesanan dari permintaan
$orderId = $_GET['id_pesanan'];

// Query untuk mendapatkan status pesanan dari database
$sql = "SELECT status FROM pesanan WHERE id_pesanan = '$orderId'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Jika ditemukan, kirim status pesanan kembali ke sisi klien
  $row = $result->fetch_assoc();
  echo "Status Pesanan: " . $row["status"];
} else {
  // Jika tidak ditemukan, kirim pesan bahwa ID pesanan tidak ditemukan
  echo "ID Pesanan tidak ditemukan";
}

// Tutup koneksi database
$conn->close();
?>
