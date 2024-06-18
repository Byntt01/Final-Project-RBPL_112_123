<?php
session_start();

$mysqli = new mysqli('localhost', 'root', '', 'swkcare');

if ($mysqli->connect_error) {
    die("Koneksi gagal: " . $mysqli->connect_error);
}

$id_pesanan = $_GET['id_pesanan'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jenis_layanan = $_POST['jenis_layanan'];
    $ukuran_sepatu = $_POST['ukuran_sepatu'];
    $warna = $_POST['warna'];
    $no_hp = $_POST['no_hp'];
    $tanggal_pesanan = $_POST['tanggal_pesanan'];
    $alamat = $_POST['alamat'];
    $metode_pembayaran = $_POST['metode_pembayaran'];
    $jumlah_pembayaran = $_POST['jumlah_pembayaran'];

    $sql = "UPDATE pesanan SET jenis_layanan='$jenis_layanan', ukuran_sepatu='$ukuran_sepatu', warna='$warna', no_hp='$no_hp', tanggal_pesanan='$tanggal_pesanan', alamat='$alamat', metode_pembayaran='$metode_pembayaran', jumlah_pembayaran='$jumlah_pembayaran' WHERE id_pesanan='$id_pesanan'";

    if ($mysqli->query($sql) === TRUE) {
        echo "Record updated successfully";
        header("Location: dashboard_admin.php");
        exit();
    } else {
        echo "Error updating record: " . $mysqli->error;
    }
}

$result = $mysqli->query("SELECT * FROM pesanan WHERE id_pesanan='$id_pesanan'");

$row = $result->fetch_assoc();

if (!$row) {
    die("Data tidak ditemukan.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit Order</title>
</head>
<body>
    <div class="container">
        <h3>Edit Order</h3>
        <form action="edit.php?id_pesanan=<?= htmlspecialchars($id_pesanan) ?>" method="post">
            <div class="mb-3">
                <label for="jenis_layanan" class="form-label">Jenis Layanan</label>
                <input type="text" class="form-control" id="jenis_layanan" name="jenis_layanan" value="<?= htmlspecialchars($row["jenis_layanan"]); ?>">
            </div>
            <div class="mb-3">
                <label for="ukuran_sepatu" class="form-label">Ukuran Sepatu</label>
                <input type="text" class="form-control" id="ukuran_sepatu" name="ukuran_sepatu" value="<?= htmlspecialchars($row["ukuran_sepatu"]); ?>">
            </div>
            <div class="mb-3">
                <label for="warna" class="form-label">Warna</label>
                <input type="text" class="form-control" id="warna" name="warna" value="<?= htmlspecialchars($row["warna"]); ?>">
            </div>
            <div class="mb-3">
                <label for="no_hp" class="form-label">No HP</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= htmlspecialchars($row["no_hp"]); ?>">
            </div>
            <div class="mb-3">
                <label for="tanggal_pesanan" class="form-label">Tanggal Pesanan</label>
                <input type="date" class="form-control" id="tanggal_pesanan" name="tanggal_pesanan" value="<?= htmlspecialchars($row["tanggal_pesanan"]); ?>">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= htmlspecialchars($row["alamat"]); ?>">
            </div>
            <div class="mb-3">
                <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
                <input type="text" class="form-control" id="metode_pembayaran" name="metode_pembayaran" value="<?= htmlspecialchars($row["metode_pembayaran"]); ?>">
            </div>
            <div class="mb-3">
                <label for="jumlah_pembayaran" class="form-label">Jumlah Pembayaran</label>
                <input type="text" class="form-control" id="jumlah_pembayaran" name="jumlah_pembayaran" value="<?= htmlspecialchars($row["jumlah_pembayaran"]); ?>">
            </div>
            <div class="mb-3">
                 <label for="bukti_pembayaran" class="form-label">Bukti Pembayaran</label>
                 <input type="file" class="form-control" id="bukti_pembayaran" name="bukti_pembayaran">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        <a href="dashboard_admin.php" class="btn btn-secondary mt-3">Back</a>
    </div>
</body>
</html>

<?php
$mysqli->close();
?>
