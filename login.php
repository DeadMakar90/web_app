<?php
require('connect.php'); //пдключаемся к базе
$usr = $_POST['username']; //считываение парамера login
$pass = $_POST['password']; //считываение парамера passwd
$sql = "SELECT * FROM `USERS` WHERE `LOGIN` = '$usr' AND `PASSWD` = '$pass' AND `FLAG` = 'on'"; //Запрос к базе данных
$result=mysqli_query($conn,$sql); //запись результата запроса
$count=mysqli_num_rows($result); //подсчет кол-ва записей возвращенных запросом
if ($count!=0) {
	$_SESSION['username'] = $usr; //если юзер найден в БД,то открываем сессию
}
else{
	echo"<script>alert('Доступ запрещен');</script>"; //если флаг 0, то доступ запрещен
	echo "<script>location.replace('index.php');</script>";
}
if(isset($_SESSION['username'])){  //если переменная $_SESSION не пустая, т
	$usr=$_SESSION['username'];
	header('Location: user_form.php'); //перебрасываем на следующуюю страницу
		if ($usr == 'admin'){
			header('Location: admins_form.php'); //если юзер админ, то перебрасываем на админку.
		}
}

