<?php
session_start();

$filename = "../files/".$_GET['login'].".txt";
$json = file_get_contents($filename);
$person = json_decode($json, true);
if(file_exists($filename)){
        if (($person['login'] == $_GET['login']) && ($_GET['password'] == $person['password']) && ($person['role'] == 'admin')) {
            $_SESSION['login'] = $_GET['login'];
            $person2 = array("lastname"=>$_GET['lastname'],"firstname"=>$_GET['firstname'],"login"=>$_GET['login'],"password"=>$_GET['password'],"role"=>"admin");
            $_SESSION['fullname'] = $person2;
            header('Location: persons.php');
        }
        elseif (($person['login'] == $_GET['login']) && ($_GET['password'] == $person['password']) && ($person['role'] == 'guest')) {
            $_SESSION['login'] = $_GET['login'];
            $person3 = array("lastname" => $_GET['lastname'], "firstname" => $_GET['firstname'], "login" => $_GET['login'], "password" => $_GET['password'],"role"=>"guest");
            $_SESSION['fullname'] = $person3;
            header('Location: person.php');
        }
        else {
            header('Location: error.php');
        }}
else {
    header('Location: error.php');
}
