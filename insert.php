<?php
require('connect.php');
$login = $_POST['login'];
$pass=$_POST['pass'];
$access=$_POST['access'];
$sql= "INSERT INTO `USERS` VALUES (default, '$login', '$pass', '$access')";
mysqli_query($conn,$sql) or die(mysqli_error($conn));
