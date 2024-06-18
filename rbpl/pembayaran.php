<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>SWKCare</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- font awesome style -->
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>
  <div class="hero_area">
    <!-- header section starts -->
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.php">
              <img src="images/logoswk.png" alt="Deskripsi gambar" style="width: 100px; height: auto;">
            </a>
            <div class="navItem" style="color: white; font-size: 30px; margin-left: 10px;">
              <?php
              session_start();
              $nama = $_SESSION['username'];
              echo "Hi, $nama!";
              ?>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php" style="color: white;">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php" style="color: white;"> About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="service.php" style="color: white;">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="signup.php" style="color: white;">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="login.php" style="color: white;">Logout</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- Content Section -->
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <?php
          $metode = $_GET['metode'];
          $jumlah = $_GET['jumlah'];
          
          if ($metode == 'transfer_bank') {
            echo "<h2>Transfer Bank</h2>";
            echo "<p>Silakan transfer ke rekening berikut:</p>";
            echo "<p><strong>Bank BCA</strong></p>";
            echo "<p><img src='images/bank.png' alt='Bank BCA Logo' style='width: 100px; height: auto;'></p>";
            echo "<p>No. Rekening: 6975273401</p>";
            echo "<p>Jumlah: Rp " . number_format($jumlah, 0, ',', '.') . "</p>";
          } elseif ($metode == 'gopay' || $metode == 'dana') {
            $qrImage = $metode == 'gopay' ? 'gopay_qr.png' : 'dana_qr.png';
            echo "<h2>Pembayaran dengan " . ucfirst($metode) . "</h2>";
            echo "<p>Silakan scan QR code berikut untuk membayar:</p>";
            echo "<img src='images/$qrImage' alt='QR Code' style='width: 200px; height: 200px;'>";
            echo "<p>Jumlah: Rp " . number_format($jumlah, 0, ',', '.') . "</p>";
          } else {
            echo "<p>Metode pembayaran tidak valid.</p>";
          }
        ?>
        <button id="bayarButton" class="btn btn-primary mt-3">Bayar</button>

        <form id="uploadForm" action="bukti_pembayaran.php" method="post" enctype="multipart/form-data" class="mt-3">
          <div class="form-group">
            <label for="paymentProof">Upload Bukti Pembayaran</label>
            <input type="file" class="form-control-file" id="paymentProof" name="paymentProof" required>
            <input type="hidden" name="metode" value="<?php echo $metode; ?>">
            <input type="hidden" name="jumlah" value="<?php echo $jumlah; ?>">
          </div>
          <button type="submit" class="btn btn-success">Upload</button>
        </form>
      </div>
    </div>
  </div>

  <!-- footer section -->
  <footer class="footer_section mt-5">
    <div class="container">
      <p>
        &copy; <span id="displayDateYear"></span> All Rights Reserved By
        <a>SWKCare</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script>
    document.getElementById('displayDateYear').textContent = new Date().getFullYear();

    document.getElementById('bayarButton').addEventListener('click', function() {
      alert('Pesanan telah dibayar.');
    });

    document.getElementById('uploadForm').addEventListener('submit', function(event) {
      event.preventDefault();
      alert('Bukti pembayaran telah diupload.');
    });
  </script>
</body>

</html>
