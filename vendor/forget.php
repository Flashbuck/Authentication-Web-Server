<?php
session_start();
require_once 'connect.php';

$login = $_POST['login'];
$error_fields = [];
if ($login === ''|| !filter_var($login, FILTER_VALIDATE_EMAIL)) {
    $error_fields[] = 'login';
}
if (!empty($error_fields)) {
    $response = [
        "status" => false,
        "type" => 1,
        "message" => "Проверьте правильность поля",
        "fields" => $error_fields
    ];
    echo json_encode($response);
    die();
}

 
$login=$_POST['login'];
if (!empty($login)){

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'");

$query="SELECT full_name,login,email,password FROM users WHERE login='$login' LIMIT 1";

$result=mysql_query($query);

mysql_close($connect);
while ($ob = mysql_fetch_array($result)){
$full_name=$ob['family'];
$login=$ob['login'];
$email=$ob['email'];
$password=$ob['password'];
echo '</br>ФИО:'.$full_name.'</br> Логин:'.$login.'</br>  Пароль:'.$password.'</br>';
}
if ($ob != mysql_fetch_array($result)) {
echo '</br><b>Пользователя с логином <i>'.$login.'</i>не найден!</b>';
}}else{
echo '</br>Заполните поле Логин!';
}
?>