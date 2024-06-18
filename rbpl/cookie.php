<?php
// Fungsi untuk memeriksa apakah username dan password valid
function authenticate($username, $password)
{
    // Di sini Anda dapat menambahkan logika otentikasi yang sesuai
    // Misalnya, memeriksa kredensial pengguna dengan database
    $validUsername = "admin";
    $validPassword = "swkcare123";

    if ($username == $validUsername && $password == $validPassword) {
        return true;
    }

    return false;
}

// Memeriksa apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (authenticate($username, $password)) {
        // Mengatur cookie jika autentikasi berhasil
        $expiryTime = time() + (30* 30); //cookie akan berakhir dalam setengah jam
        setcookie("loggedin", true, $expiryTime, "/");

        // Mengarahkan pengguna ke halaman setelah login
        header("Location: index.php");
        exit;
    } else {
        $errorMessage = "Username atau password salah";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
</head>
<body>
    <center>
    <h2>LOGIN DULU GAN</h2>
    <?php if (isset($errorMessage)) { ?>
        <p style="color: red;"><?php echo $errorMessage; ?></p>
    <?php } ?>
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="Login">
    </form>
    </center>
</body>
</html>
