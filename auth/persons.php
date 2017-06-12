<?php
session_start();
?>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<h1><?php echo $_SESSION['login']?></h1>
<p>Зарегестрированные:</p>
<?php
$fn = (glob('../files/*.txt'));
foreach ($fn as $filename) {
        $json = file_get_contents($filename);
        $person = json_decode($json, true);
        echo $person['login']."<br>";
};
?>
<a href="list.php">Вывести список пользователей</a>
<form method="GET" action="infa.php">
    <label for="if">Просмотр информации о позльзователе</label>
    <input type="text" name="infa" id="if">
    <button type="submit">Смотреть</button>
</form>
<p>Пользователь: <?php echo $_SESSION['login'] ?></p>
<p>Имя: <?php echo $_SESSION['fullname']['firstname'] ?></p>
<p>Фамилия: <?php echo $_SESSION['fullname']['lastname'] ?></p>
<p>Добавить пользователя:</p>
<form method="GET" action="handlerfile.php">
    <label for="ln">Фамилия:</label>
    <input type="text" name="lastname" id="ln"><br>

    <label for="fn">Имя:</label>
    <input type="text" name="firstname" id="fn"><br>

    <label for="lg">Логин:</label>
    <input type="text" name="login" id="lg"><br>

    <label for="pw">Пароль:</label>
    <input type="password" name="password" id="pw"><br>

    <label for="rl">Права:</label>
    <input type="radio" name="role" value="guest" id="rl" checked> Гость<br>
    <input type="radio" name="role" value="admin" id="rl"> Администратор<br>
    <button type="submit">Добавить</button>
</form>

<a href="destroy-session.php">Выйти</a>

</body>
</html>
