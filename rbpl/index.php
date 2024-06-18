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

  <title>SWKcare</title>

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
    <!-- slider section -->
    <section class="slider_section ">
      <div class="container ">
        <div class="row">
          <div class="col-md-6 ">
            <div class="detail-box">
              <h1>
                SWK<span style="color: black;">CARE</span>
              </h1>
              <p style="text-align: justify;">
                Cuci sepatu anti ribet dengan harga terjangkau. Anda tidak perlu khawatir tentang ribetnya mencuci sepatu karena kami menyediakan layanan yang tidak hanya efisien, tetapi juga hemat waktu, dengan harga yang terjangkau dan sesuai dengan kantong Mahasiswa.
              </p>
              <a href="contact.html">
                Contact Us
              </a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="img-box">
              <img src="images/vault.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- feature section -->
  <section class="feature_section">
  <div class="container">
    <div class="feature_container">
      <div class="box">
        <div class="img-box">
          <img src="images/b1.jpg" style="width: 100px; height: auto;">
        </div>
      </div>
      <div class="box">
        <div class="img-box">
          <img src="images/b2.jpg" style="width: 100px; height: auto;">
        </div>
      </div>
      <div class="box">
        <div class="img-box">
          <img src="images/b3.jpg" style="width: 100px; height: auto;">
        </div>
      </div>
    </div>
  </div>
</section>

  <!-- end feature section -->

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


  <!-- professional section -->

  <section class="professional_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/vault3.png" style="width: 300px;" alt="">
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="detail-box">
            <h2>
              We Provide.
            </h2>
            <p style="text-align: justify;">
              Kami menawarkan beberapa layanan seperti membersihkan sepatu, repaint sepatu, unyellowing sepatu, dan lain-lain.
              Anda tidak perlu khawatir dengan layananan yang ribet, karena kami menerapkan sistem delivery. Jadi Anda hanya tinggal menunggu saja dirumah.  
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end professional section -->

  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="container ">
      <div class="heading_container heading_center">
        <h2> Our Services </h2>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4 mx-auto">
          <div class="box ">
            <div class="img-box">
              <img src="images/cuci.png" style="width: 600px;"/>
            </div>
            <div class="detail-box">
              <h5>
                Deep Clean
              </h5>
              <p>
                proses membersihkan sepatu secara menyeluruh, termasuk membersihkan bagian dalam dan luar sepatu, 
                serta menghilangkan kotoran yang sulit dijangkau seperti noda yang membandel, debu, lumpur, 
                dan bau yang tersimpan di dalamnya <br> <br>
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 mx-auto">
          <div class="box ">
            <div class="img-box">
              <img src="images/repaint.png" alt="" />
            </div>
            <div class="detail-box">
              <h5>
                Repaint
              </h5>
              <p>
                Proses di mana sepatu yang telah mengalami kerusakan atau keausan pada catnya diwarnai kembali agar terlihat seperti baru. 
                Proses repaint ini sering dilakukan pada sepatu yang terbuat dari bahan tertentu 
                seperti kulit atau kanvas yang telah mengalami perubahan warna atau kerusakan pada permukaannya.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 mx-auto">
          <div class="box ">
            <div class="img-box">
              <img src="images/lacak.png" alt="" />
            </div>
            <div class="detail-box">
              <h5>
                Lacak Pesanan
              </h5>
              <p>
                Proses memantau atau mengikuti status dan lokasi pengiriman suatu barang atau pesanan setelah Anda melakukan pembelian. 
                Setelah Anda melakukan pembelian maka Anda akan diberikan nomor pelacakan atau nomor resi yang dapat digunakan untuk melacak pesanan   Anda.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="service.php">
          View More
        </a>
      </div>
    </div>
  </section>

  <!-- end service section -->

<!-- client section -->

<section class="client_section ">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Review SWKcare
        </h2>
      </div>
      <div class="carousel-wrap layout_padding2-top ">
        <div class="owl-carousel">
          <div class="item">
            <div class="box">
              <div class="client_id">
                <div class="img-box">
                  <img src="images/client-1.jpg" alt="">
                </div>
                <div class="client_detail">
                  <div class="client_info">
                    <h6>
                      Rafly 
                    </h6>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
              </div>
              <div class="client_text">
                <p>
                Pelayanannya sangat memuaskan. Proses cuci sepatu cepat, delivery mudah. Sangat rekomendasi untuk anda yang memutuhkan jasa layanan cuci sepatu.
                </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="client_id">
                <div class="img-box">
                  <img src="images/client-2.jpg" alt="">
                </div>
                <div class="client_detail">
                  <div class="client_info">
                    <h6>
                    Egi
                    </h6>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
              </div>
              <div class="client_text">
                <p>
                  Pelayanan yang diberikan bagus, hasil cuci sepatu juga sesuai sama gambar. Harga yang diberikan terjangkau. Untuk mahasiswa sangat direkomendasikan untuk cuci sepatu di SWKcare.
                </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="client_id">
                <div class="img-box">
                  <img src="images/client-1.jpg" alt="">
                </div>
                <div class="client_detail">
                  <div class="client_info">
                    <h6>
                      Dilan
                    </h6>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
              </div>
              <div class="client_text">
                <p>
                  Suka sama hasil yang diberikan sangat memuaskan. Proses cuci sepatu hanya 2 hari, harga yang diberikan juga masih bisa dijangkau Mahasiswa. 
                </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="client_id">
                <div class="img-box">
                  <img src="images/client-2.jpg" alt="">
                </div>
                <div class="client_detail">
                  <div class="client_info">
                    <h6>
                      Binar
                    </h6>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
              </div>
              <div class="client_text">
                <p>
                  Sangat memuaskan!! hasil deep clean bersih. Tawaran harga menarik dan murah. Bisa cuci dalam waktu yang cepat dan bisa delivery. Wajib sekali cuci sepatu disini. 
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> <br><br>

  <!-- end client section -->



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