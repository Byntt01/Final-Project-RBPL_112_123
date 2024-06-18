<?php
session_start();

$mysqli = new mysqli('localhost', 'root', '', 'swkcare');

if ($mysqli->connect_error) {
    die("Koneksi gagal: " . $mysqli->connect_error);
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $mysqli->real_escape_string($_POST['username']);
    $password = $mysqli->real_escape_string($_POST['password']);

    if ($username == "admin" && $password == "admin") {
        // Set cookie untuk admin
        setcookie('username', $username, time() + (86400 * 30), '/');
        header("Location: dashboard_admin.php");
    } else {
        $stmt = $mysqli->prepare("SELECT * FROM tb_user WHERE username=? AND password=?");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        $cek = $result->num_rows;

        if ($cek > 0) {
            $_SESSION['username'] = $username;
            $_SESSION['status'] = "login";
            // Set cookie untuk pengguna
            setcookie('username', $username, time() + (86400 * 30), '/');
            header("Location: index.php");
        } else {
            // Set pesan kesalahan
            $errorMessage = "Username atau password salah. Silakan coba lagi.";
            // Hapus cookie jika ada
            setcookie('username', '', time() - 3600, '/');
        }

        $stmt->close();
    }
}

$mysqli->close();
?>

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

  <title>SWKCare - Login</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- font awesome style -->
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

  <style>
    .login_section {
      background-image: url(images/bg.jpg);
  
    }

    .box {
      background-color: rgba(255, 255, 255, 0.7);
      border-radius: 10px;
      padding: 20px;
    }

    .box .form-group input[type="text"],
    .box .form-group input[type="password"],
    .box .form-group input[type="email"] {
      border: none;
      border-bottom: 1px solid #ddd;
      border-radius: 0;
    }

    .box .form-group input[type="text"]:focus,
    .box .form-group input[type="password"]:focus,
    .box .form-group input[type="email"]:focus {
      border-color: #007bff;
      box-shadow: none;
    }

    .btn-signup {
      background-color: #007bff;
      border-color: #007bff;
    }

    .btn-signup:hover {
      background-color: #0056b3;
      border-color: #0056b3;
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
                <li class="nav-item active">
                  <a class="nav-link" href="login.php" style="color: white;">Login <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link btn btn-signup" href="signup.php" style="color: white;">Sign Up</a>
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

  <!-- login section -->
  <section class="login_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="box">
            <div class="heading_container">
              <h2 href="index.php">
                Login
              </h2>
              <?php if (isset($error_message)): ?>
                  <p class="error-message"><?php echo $error_message; ?></p>
              <?php endif; ?>
            </div>
            <form action="login.php" method="post">
              <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Username" required>
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end login section -->

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
