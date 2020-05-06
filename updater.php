<?php
function updater($username,$new_pass){
if(!empty($_POST['username']) && !empty($_POST['new_pass'])){
require('connect.php');
$username = $_POST['username'];
$new_pass = $_POST['new_pass'];
$sql = "UPDATE `USERS` SET `PASSWD` = '$new_pass' WHERE `LOGIN` = '$username'";
$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
if ($result) {
	echo "<script>alert(\"Данные обновлены!\");</script>";
	echo "<script>location.replace('password_update.php');</script>";
}
else{
	echo "<script>alert(\"Ошибка!\");</script>";
}
}
else{
	echo "<script>alert(\"Форма не заполнена\");</script>";
	echo "<script>location.replace('password_update.php');</script>";
}
}
?>