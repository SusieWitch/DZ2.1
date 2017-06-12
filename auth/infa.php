<?php
session_start();
$filename = "../files/".$_GET['infa'].".txt";
if(file_exists($filename)) {
    $json = file_get_contents($filename);
    $person = json_decode($json, true);
    echo "Фамилия: ".$person['lastname']."<br>";
    echo "Имя: ".$person['firstname']."<br>";
    echo "Логин: ".$person['login']."<br>";
    echo "Пароль: ".$person['password']."<br>";
    echo "Роль: ".$person['role']."<br>";
}else {
    echo "Пользователь ".$_GET['infa']." не зарегистрирован";
}