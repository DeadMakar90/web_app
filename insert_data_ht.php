<?php
require ('connect.php');
$temp = $_GET['t']; 
$hum = $_GET['h'];
$sql = "INSERT INTO `TEMP_DATA` VALUES (default,'$temp','$hum')";
mysqli_query($conn,$sql) or die(mysqli_error($conn));

