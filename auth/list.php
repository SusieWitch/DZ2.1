<?php
session_start();
$fn = (glob('../files/*.txt'));
echo "Cписок пользователей:<br>";
foreach ($fn as $filename) {
    $json = file_get_contents($filename);
    $person = json_decode($json, true);
    echo $person['login']."<br>";
};