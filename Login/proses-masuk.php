<?php

include("../config.php");

$email = $_POST['email'];

    $password = md5($_POST['password']);

$query_login = mysqli_query($db, "SELECT * FROM user WHERE email='$email' && password='$password'");

if (mysqli_num_rows($query_login) == 0) {
    header("location:http://kabupatenriau.tif18e.com/index.php?notif=true");
} else {
    $row_login = mysqli_fetch_assoc($query_login);
    session_start();
    $_SESSION['id_user'] = $row_login['id_user'];
    

    header("location:http://kabupatenriau.tif18e.com/index1.php");
}
