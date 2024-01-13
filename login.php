<?php 
if (!empty($_POST)) {
    require __DIR__ . '/auth.php';

    $login = $_POST['login'] ?? '';
    $password = $_POST['pass'] ?? '';    

    if (checkAuth($login, $password)) {
        setcookie('login', $login, 0, '/');
        setcookie('password', $password, 0, '/');
        header('Location: /index.php');
    } else {
        $error = 'Ошибка авторизации';
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма авторизации</title>
</head>
<body>
    <?php if (isset($error)) : ?>
        <p style = "color: red;">
        <?= $error; ?>
        </p>
        <?php endif; ?>
    <form action="/login.php" method="POST">
        <p>
        Имя пользователя:  <input type="text" name = "login" id = "login">
    </p>
    <p>
        Пароль:  <input type="text" name = "pass" id = "password">
    </p>
    <p>
        <button type = "submit">Войти</button>
    </p>
    </form>
    
</body>
</html>