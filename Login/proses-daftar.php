<?php

include("../config.php");

$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];

unset($_POST['password']);
$data_form = http_build_query($_POST);

$query_daftar = mysqli_query($db, "SELECT * FROM user WHERE email='$email'");

if (mysqli_num_rows($query_daftar) == 1) {
    header("location: http://kabupatenriau.tif18e.com/index.php?notif=email&$data_form#register");
} else {
    $password = md5($password);
    mysqli_query($db, "INSERT INTO user (nama, email, password) VALUES ('$nama', '$email', '$password')");
    header("location: http://kabupatenriau.tif18e.com/index.php?notif=success");
}
