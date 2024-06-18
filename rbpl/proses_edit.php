<?php
include "function.php";

if (isset($_POST["username"])) {
    if (ubah($_POST) > 0) {
        header("Location: dashboard_admin.php");
        exit; 
    } else {
        header("Location: gagal.php");
        exit;
    }
}
