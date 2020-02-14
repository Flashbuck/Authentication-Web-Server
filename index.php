<?php
session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <!-- Форма авторизации -->

    <form>
        <label>Почта</label>
        <input type="text" name="login" placeholder="Введите почту"required>
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль"required>
        <button type="submit" class="login-btn">Войти</button>
        <p>
            У вас нет аккаунта? - <a href="/register.php">Регистрация</a>!
        </p>
        <p>
            Забыли пароль? - <a href="/restore.php">Восстановление</a>!
        </p>
        <p class="msg none">.</p>
    </form>

    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>