<?php
session_start();
if (isset($_GET['lastname'])) {
    $fn = strtolower($_GET['login']);
    $filename = "../files/$fn" . ".txt";
    $json = array(
        'lastname' => $_GET['lastname'],
        'firstname' => $_GET['firstname'],
        'login' => $_GET['login'],
        'password' => $_GET['password'],
        'role' => $_GET['role']
    );
    $data = json_encode($json);
    file_put_contents($filename, $data);
    header('Location: persons.php');
} else {
    header('Location: error.php');
}