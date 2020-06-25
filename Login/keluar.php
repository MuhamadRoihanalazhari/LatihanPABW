<?php

session_start();

include("assets/function/config.php");


unset($_SESSION['id_user']);


header("location: https://roihanpabw.000webhostapp.com/index.php");