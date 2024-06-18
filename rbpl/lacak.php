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

  <title>Status Pesanan - SWKCare</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- Font awesome style -->
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- Responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

  <style>
    .progress-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: relative;
      margin: 40px 0;
      padding: 0 20px;
    }

    .step {
      text-align: center;
      flex: 1;
      position: relative;
    }

    .step .img-box {
      width: 80px;
      height: 80px;
      background-color: #ddd;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 40px;
      color: #fff;
      margin: 0 auto 10px;
    }

    .step.active .img-box {
      background-color: #007bff;
    }

    .step .label {
      font-size: 16px;
      color: #555;
    }

    .step.active .label {
      color: #007bff;
    }

    .progress-bar {
      position: absolute;
      top: 40px;
      left: 0;
      width: 100%;
      height: 5px;
      background-color: #ddd;
      z-index: -1;
    }

    .progress-bar::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 0;
      background-color: #007bff;
      z-index: -1;
    }

    .step.active ~ .progress-bar::before {
      width: calc((100% / 3) * 2); /* Adjust based on the number of steps */
    }

    .step.active + .step.active ~ .progress-bar::before {
      width: 100%;
    }

    .estimated-date {
      text-align: center;
      margin-top: 20px;
      font-size: 18px;
      color: #555;
    }
  </style>
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
 <!-- Content Section -->
    <div class="container mt-5">
      <h2 class="text-center">Status Pesanan Anda</h2>

      <!-- Status pesanan akan ditampilkan di sini -->
      <div class="progress-container">
        <!-- Steps dan progress bars -->
      </div>

      <div class="estimated-date">
        Perkiraan tanggal selesai: 21 juni 2024<span id="estimatedDate"></span>
      </div>
      <div class="img-box">
        <img src="images/vault.png" style="width: 300px; margin-left: 400px;" alt="">
      </div>
    </div>
  <!-- footer section -->

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script>
    document.getElementById('displayDateYear').textContent = new Date().getFullYear();

    const currentStatus = 2;

    const steps = document.querySelectorAll('.step');
    const progressBars = document.querySelectorAll('.progress-bar');

    for (let i = 0; i < currentStatus; i++) {
      steps[i].classList.add('active');
      if (i > 0) {
        progressBars[i - 1].classList.add('active');
      }
    }

    const estimatedCompletionDate = new Date();
    estimatedCompletionDate.setDate(estimatedCompletionDate.getDate() + 7);
    const options = { year: 'numeric', month: 'long', day: 'numeric' };
    document.getElementById('estimatedDate').textContent = estimatedCompletionDate.toLocaleDateString('id-ID', options);
  </script>
</body>

</html>
