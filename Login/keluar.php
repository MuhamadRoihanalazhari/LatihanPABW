<?php

session_start();

include("assets/function/config.php");


unset($_SESSION['id_user']);


header("location: http://kabupatenriau.tif18e.com/index.php");
