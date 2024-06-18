<?php
session_start();

$mysqli = new mysqli('localhost', 'root', '', 'swkcare');

if ($mysqli->connect_error) {
    die("Koneksi gagal: " . $mysqli->connect_error);
}

$result = $mysqli->query("SELECT * FROM pesanan");

if (!$result) {
    die("Error: " . $mysqli->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Order List</title>
    <style>
        body {
            padding: 20px;
            font-family: Arial, sans-serif;
            background-color: #fff;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        h1 {
            margin-bottom: 30px;
            font-family: Arial;
            font-size: 40px;
        }
        .table {
            margin-bottom: 30px;
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .table th:first-child, .table td:first-child {
            text-align: center;
        }
        .table th:last-child, .table td:last-child {
            text-align: center;
            white-space: nowrap;
        }
        .btn-delete, .btn-edit, .btn-back {
            padding: 5px 10px;
            font-size: 14px;
        }
        .btn-delete:hover {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .btn-delete:focus {
            box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="images/logoswk.png" width="150px" alt="">
        <h3>Order List</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Jenis Layanan</th>
                    <th scope="col">Ukuran Sepatu</th>
                    <th scope="col">Warna</th>
                    <th scope="col">No HP</th>
                    <th scope="col">Tanggal Pesanan</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Metode Pembayaran</th>
                    <th scope="col">Jumlah Pembayaran</th>
                    <th scope="col">Bukti Pembayaran</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <tr>
                        <th scope="row"><?= $i ?></th>
                        <td><?= htmlspecialchars($row["jenis_layanan"]); ?></td>
                        <td><?= htmlspecialchars($row["ukuran_sepatu"]); ?></td>
                        <td><?= htmlspecialchars($row["warna"]); ?></td>
                        <td><?= htmlspecialchars($row["no_hp"]); ?></td>
                        <td><?= htmlspecialchars($row["tanggal_pesanan"]); ?></td>
                        <td><?= htmlspecialchars($row["alamat"]); ?></td>
                        <td><?= htmlspecialchars($row["metode_pembayaran"]); ?></td>
                        <td><?= htmlspecialchars($row["jumlah_pembayaran"]); ?></td>
                        <td>
                            <?php if (!empty($row["bukti_pembayaran"])) : ?>
                                <a href="uploads/<?= htmlspecialchars($row["bukti_pembayaran"]); ?>" target="_blank">View</a>
                            <?php else : ?>
                                bukti_tf.jpeg
                            <?php endif; ?>
                        </td>
                        <td>
                        <td>
                            <a href="admin_hapus.php?id_pesanan=<?= htmlspecialchars($row["id_pesanan"]) ?>" class="btn btn-danger btn-delete">Delete</a>
                            <a href="edit.php?id_pesanan=<?= htmlspecialchars($row["id_pesanan"]) ?>" class="btn btn-primary btn-edit">Edit</a>
                        </td>

                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endwhile; ?>
                <?php $result->free();
                ?>
            </tbody>
        </table>
        <a href="login.php" class="btn btn-secondary btn-back">Back</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
$mysqli->close();
?>
