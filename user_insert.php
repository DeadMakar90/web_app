<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Добавление пользователей</title>
</head>
<body>
<form method="post" class="user-insert">
    <div class="form-group">
        <label for="exampleInputEmail1">Имя пользователя</label>
        <input type="text" class="form-control" name="login" placeholder="Имя пользователя">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Пароль</label>
        <input type="password" class="form-control" name="pass" placeholder="пароль">
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" name="access">
        <label class="form-check-label" for="exampleCheck1">Разрешить доступ?</label>
    </div>
    <button type="submit" class="btn btn-primary">Сохранить</button>
    <a href="admins_form.php" class="btn btn-primary">Назад</a>
</form>
        <?php
        if (!empty($_POST['login']) && !empty($_POST['pass'])) {
            require('insert.php');
            $login = $_POST['login'];
            $pass = $_POST['pass'];
            $access = $_POST['access'];
            insert($login,$pass,$access);
        }
        ?>
</body>
</html>