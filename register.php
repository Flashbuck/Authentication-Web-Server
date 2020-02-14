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

    <!-- Форма регистрации -->

    <form>
        <label>ФИО</label>
        <input type="text" name="full_name" placeholder="Введите свое полное имя"required>
        <label>Почта</label>
        <input type="text" name="login" placeholder="Введите свой логин(почту)"required>
        <label>Подтверждение почты</label>
        <input type="email" name="email" placeholder="Подтвердите адрес почты"required>
        <label>Изображение профиля</label>
        <input type="file" name="avatar"required>
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль от 6 символов"required>
        <label>Подтверждение пароля</label>
        <input type="password" name="password_confirm" placeholder="Подтвердите пароль"required>
        <button type="submit" class="register-btn">Зарегистрироваться</button>
        <p>
            У вас уже есть аккаунт? - <a href="/">Авторизация</a>!
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