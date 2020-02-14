<?php

    $connect = mysqli_connect('localhost', 'root', '', 'database');

    if (!$connect) {
        die('Ошибка подключения к базе данных');
    }