<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 17.02.2015
 * Time: 18:06
 */
    session_start();
    require_once '../functions/common.php';
    if((isset($_SESSION['auth_result']) and ($_SESSION['auth_result']=='ok')) or isset($_COOKIE['usercookie']))
    {
        echo 'Велкам ту хелл '.GetLoginedUsername();
        ?>
        <a href="../controllers/logout.php">Выйти</a>
    <?php
    }
    ?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Добавление новости</title>
</head>
<body>
    <form action="" method="POST">
        <label for="header">Заголовок:</label><br><input type="text" name="header" required placeholder="Введите заголовок" size="78"><br>
        <label for="preview">Текст для превью:</label><br>
        <textarea name="preview" required rows="20" cols="80"></textarea><br>
        <label for="newstext">Полный текст:</label><br>
        <textarea name="newstext" required rows="20" cols="80"></textarea><br>
        <label for="tags">Теги:</label><br><input type="text" name="tags" required placeholder="теги" size="78"><br>
        <input type="submit" value="Отправить">
    </form>
</body>
</html>