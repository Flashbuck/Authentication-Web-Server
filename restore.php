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
    <title>Восстановление</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <!-- Форма регистрации -->

    <form>
        <label>Почта</label>
        <input type="text" name="login" placeholder="Введите свой логин(почту)"required>

        <button type="button" class="forget-btn">Отослать пароль на почту</button>
        <p>
            У вас уже есть аккаунт? - <a href="/">Авторизация</a>!
        </p>
        <p>
            У вас нет аккаунта? - <a href="/register.php">Регистрация</a>!
        </p>
        <p class="msg none">.</p>
    </form>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>