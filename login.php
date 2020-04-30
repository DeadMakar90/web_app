<?php
require('connect.php');
$usr = $_POST['username'];
$pass = $_POST['password'];
$sql = "SELECT * FROM `USERS` WHERE `LOGIN` = '$usr' AND `PASSWD` = '$pass' AND `FLAG` != 0";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);
if($count !=0) {
	echo "Вход";
}
else{
	echo"Доступ запрещен";
}
?>
