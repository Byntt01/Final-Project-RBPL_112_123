<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "swkcare";

$mysqli = mysqli_connect($host, $user, $password, $database);

if(mysqli_connect_errno()){
    echo "Gagal melakukan koneksi" . mysqli_connect_error();
    exit();
}

$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$number = $_POST['no'];
$namecard = $_POST['namecard'];
$payment = $_POST['payment'];

$query = "INSERT INTO checkout (id_checkout, name, email, address, city, state, namecard, payment) VALUES ('', '$name', '$email', '$address', '$city', '$number', '$namecard', '$payment')";

if(mysqli_query($mysqli, $query)){
	header("location: hasil.php");
	exit;
}
else{
	header("location: login.php");
	exit;
}
?>
