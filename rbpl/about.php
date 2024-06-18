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
    <!-- header section strats -->
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
                    $nama=$_SESSION['username'];
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
      </div>
      <div class="header_bottom">
    </header>
    <!-- end header section -->
  </div>

  <!-- about section -->

  <section class="about_section layout_padding-bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-6">
          <div class="detail-box">
            <h2>
              About us
            </h2>
            <p style="text-align: justify;">
              SWKCare adalah layanan laundry sepatu yang menyediakan berbagai layanan cuci sepatu dengan standar kualitas yang tinggi. Dari membersihkan sepatu olahraga yang kotor hingga merawat sepatu kulit yang elegan, kami siap mengatasi segala jenis sepatu Anda. Dengan menggunakan teknik dan produk yang ramah lingkungan serta proses yang hati-hati, kami memastikan sepatu Anda kembali bersih dan segar seperti baru. SWKCare hadir untuk menjaga penampilan sepatu Anda tetap terawat dan tahan lama.
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
        <div class="col-lg-7 col-md-6">
          <div class="img-box" style="margin-top: 50px; margin-left: 50px;">
            <img src="images/sepatu.jpg" style="width: 400px;" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->


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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->


</body>

</html>