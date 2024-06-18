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

  <title>SWKCare - Sign Up</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- font awesome style -->
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

  <style>
    .signup_section {
      background-image: url(images/bg.jpg);
      border-radius: 10px;
      padding: 30px;
    }

    .box {
      background-color: rgba(255, 255, 255, 0.7);
      border-radius: 10px;
      padding: 20px;
    }
  </style>
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
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ">
                <li class="nav-item">
                  <a class="nav-link" href="index.php" style="color: white;">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php" style="color: white;">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="service.php" style="color: white;">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="login.php" style="color: white;">Login</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="signup.php" style="color: white;">Sign Up <span class="sr-only">(current)</span></a>
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

  <!-- signup section -->
  <section class="signup_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="box">
            <div class="heading_container">
              <h2>
                Sign Up
              </h2>
            </div>
            <form action="signup_proses.php" method="POST">
              <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Username" required>
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
              </div>
              <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary btn-block" value="Sign Up">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end signup section -->

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
  <script src="js/custom.js"></script>
</body>

</html>
