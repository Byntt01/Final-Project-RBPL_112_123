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

  <!-- service section -->
  <section class="service_section layout_padding" style="background-image: url(images/bg.jpg);">
    <div class="container">
      <div class="heading_container heading_center col-lg-7 col-md-6" style="background-color: rgba(255, 255, 255, 0.7); width: 500px; margin-left: 300px; border-radius: 30px;">
        <h2> Form Pemesanan </h2>
        <img src="images/co.png" style="width: 350px;" alt="">
      </div>
    </div>
  </section>
  <!-- end service section -->

  <!-- Form Pemesanan -->
  <section class="order_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>Silahkan Lengkapi Form</h2>
        <p>Silakan lengkapi formulir di bawah ini untuk memesan layanan untuk sepatu Anda.</p>
      </div>
      <div class="row">
        <div class="col-md-8 mx-auto">
          <form id="orderForm" action="proses_pemesanan.php" method="post">
            <div class="form-group">
              <label for="jenis_layanan">Jenis Layanan:</label>
              <select class="form-control" id="jenis_layanan" name="jenis_layanan" onchange="calculateTotal()" required>
                <option value="repaint" data-harga="80000">Repaint - Rp 80.000</option>
                <option value="deep_clean" data-harga="30000">Deep Clean - Rp 30.000</option>
              </select>
            </div>
            <div class="form-group">
              <label for="ukuran_sepatu">Ukuran Sepatu:</label>
              <input type="text" class="form-control" id="ukuran_sepatu" name="ukuran_sepatu" required>
            </div>
            <div class="form-group">
              <label for="warna">Warna yang diinginkan:</label>
              <input type="text" class="form-control" id="warna" name="warna" required>
            </div>
            <div class="form-group">
              <label for="no_hp">Nomor handphone:</label>
              <input type="text" class="form-control" id="no_hp" name="no_hp" required>
            </div>
            <div class="form-group">
              <label for="tanggal_pesanan">Pilih Tanggal Pesanan:</label>
              <input type="date" class="form-control" id="tanggal_pesanan" name="tanggal_pesanan" required>
          </div>
            <div class="form-group">
              <label for="alamat">Alamat:</label>
              <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
            </div>

            <!-- Form Pembayaran -->
            <div class="form-group">
              <label for="metode_pembayaran">Metode Pembayaran:</label>
              <select class="form-control" id="metode_pembayaran" name="metode_pembayaran" required>
                <option value="transfer_bank">Transfer Bank</option>
                <option value="gopay">GoPay</option>
                <option value="dana">DANA</option>
              </select>
            </div>
            <div class="form-group">
              <label for="jumlah_pembayaran">Jumlah Pembayaran:</label>
              <input type="number" class="form-control" id="jumlah_pembayaran" name="jumlah_pembayaran" readonly>
            </div>
            <button type="submit" class="btn btn-primary">Pesan Sekarang</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- End Form Pemesanan -->

  <!-- footer section -->
  <footer class="footer_section">
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="js/custom.js"></script>
  <script>
    function calculateTotal() {
      const selectedOption = document.getElementById('jenis_layanan').selectedOptions[0];
      const harga = selectedOption.getAttribute('data-harga');
      document.getElementById('jumlah_pembayaran').value = harga;
    }

    //document.getElementById('orderForm').addEventListener('submit', function(event) {
    //  event.preventDefault();

    //  const metodePembayaran = document.getElementById('metode_pembayaran').value;
    //  const jumlahPembayaran = document.getElementById('jumlah_pembayaran').value;
    //  const redirectUrl = `pembayaran.php?metode=${metodePembayaran}&jumlah=${jumlahPembayaran}`;

    //  window.location.href = redirectUrl;
    //});
  </script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->

</body>

</html>
