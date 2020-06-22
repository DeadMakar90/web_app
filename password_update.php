<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Смена пароля</title>
</head>
<body>
		<div class="container">
			<form method="post" class="form-update-pass">
				<input type="text" name="username" placeholder="Имя пользователя" class="form-control"><br>
				<input type="password" name="new_pass" placeholder="Новый пароль" class="form-control"><br>
				<button type="submit" class='btn btn-lg btn btn-info btn-block'>Выполнить</button>
                <a href="admins_form.php" class='btn btn-lg btn btn-info btn-block' id = 'return'>Назад</a>
			</form>
		</div>
		<?php
			if (!empty($_POST['username']) && !empty($_POST['new_pass'])) {
				require('updater.php');
				$username = $_POST['username'];
				$new_pass = $_POST['new_pass'];
				updater($username,$new_pass);
			}

		?>
</body>
</html>