<?php
function hapus($id_pesanan)
{
    include "connection.php";
    $query = "DELETE FROM pesanan WHERE id_pesanan = $id_pesanan";
    mysqli_query($mysqli, $query);
    return mysqli_affected_rows($mysqli);
}

function query($query)
{
    include "connection.php";
    $result = mysqli_query($mysqli, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function ubah($data)
{
    include "connection.php";
    $id_pesanan = $data["id_pesanan"];
    $jenis_layanan = $data["jenis_layanan"];
    $ukuran_sepatu = $data["ukuran_sepatu"];
    $warna = $data["warna"];
    $no_hp = $data["no_hp"];
    $tanggal_pesanan = $data["tanggal_pesanan"];
    $alamat = $data["alamat"];
    $metode_pembayaran = $data["metode_pembayaran"];
    $jumlah_pembayaran = $data["jumlah_pembayaran"];
    
    // Include the logic to update bukti_pembayaran if it's being changed

    $query = "UPDATE pesanan SET 
                jenis_layanan='$jenis_layanan', 
                ukuran_sepatu='$ukuran_sepatu', 
                warna='$warna', 
                no_hp='$no_hp', 
                tanggal_pesanan='$tanggal_pesanan', 
                alamat='$alamat', 
                metode_pembayaran='$metode_pembayaran', 
                jumlah_pembayaran='$jumlah_pembayaran'
              WHERE id_pesanan = $id_pesanan";
              
    mysqli_query($mysqli, $query);
    return mysqli_affected_rows($mysqli);
}
?>
