<?php
$conn = mysqli_connect('localhost', 'sysdba','123456');
$select_db = mysqli_select_db($conn,'webapp');
mysqli_query($conn,"SET NAMES utf8");
?>
