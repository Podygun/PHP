<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
</head>

<body>
    <form action="AuthorizationHandler.php" method="get" class="main_form">
        <div class="login_group">
            <label for="name">Логин</label>
            <input type="text" name="login" class="login_input">
        </div>
        <div class="pswd_group">
            <label for="name">Пароль</label>
            <input type="text" name="pswd" class="pswd_input">
        </div>
        <div>
            <input type="submit" value="Войти" class="btn_submit">
        </div>
    </form>
</body>

</html>