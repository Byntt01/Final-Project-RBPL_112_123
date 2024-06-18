<?php
include "connection.php";

$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];

if ($username == NULL) {
    header("location: signup_fail.php");
    exit;
} elseif ($password == NULL) {
    header("location: signup_fail.php");
    exit;
} elseif ($email == NULL) {
    header("location: signup_fail.php");
    exit;
}

$sql = "INSERT INTO tb_user (id_user, username, password, email) VALUES ('', '$username', '$password', '$email')";

if (mysqli_query($mysqli, $sql)) {
    header("location: login.php");
    exit;
} else {
    header("location: signup_fail.php");
    exit;
}