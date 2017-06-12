<?php
session_start();
?>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<h1><?php echo $_SESSION['login']?></h1>
<p>Пользователь: <?php echo $_SESSION['login'] ?></p>
<p>Имя: <?php echo $_SESSION['fullname']['firstname'] ?></p>
<p>Фамилия: <?php echo $_SESSION['fullname']['lastname'] ?></p>
<p>Редактировать:</p>
<form method="GET" action="handler.php">
    <label for="ln">Фамилия:</label>
    <input type="text" name="lastname" id="ln">

    <label for="fn">Имя:</label>
    <input type="text" name="firstname" id="fn">
    <input type="hidden" name="login" value = "<?php echo $_SESSION['fullname']['login']?>">
    <input type="hidden" name="password" value = "<?php echo $_SESSION['fullname']['password']?>">
    <button type="submit">Отправить</button>
</form>

<a href="destroy-session.php">Выйти</a>

</body>
</html>
