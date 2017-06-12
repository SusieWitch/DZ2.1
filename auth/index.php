<?php
session_start();
?>
<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
<h1>Войдите</h1>
<p>Пользователь: <?php echo (isset($_SESSION['login']) ? ($_SESSION['login']) : 'Не выполнен вход' );
    ?></p>
<form method="GET" action="handler.php">
    <label for="ln">Фамилия:</label>
    <input type="text" name="lastname" id="ln">

    <label for="fn">Имя:</label>
    <input type="text" name="firstname" id="fn">

    <label for="lg">Логин:</label>
    <input type="text" name="login" id="lg">

    <label for="pw">Пароль:</label>
    <input type="password" name="password" id="pw">

    <button type="submit">Отправить</button>
</form>

<a href="destroy-session.php">Выйти</a>

</body>
</html>
