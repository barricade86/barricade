<?php
/**
 * Created by PhpStorm.
 * User: barricade
 * Date: 25.02.15
 * Time: 13:57
 */
?>
<!doctype html>
<html lang="ru">
<head>
    <title>Просмотр новостей</title>
</head>
<body>
<main role="main">
    <form action="./index.php?controller=NewsAdmin&action=Add" method="POST">
        <label for ="NewsHeader">Header:</label><br><input type="text" name="NewsHeader" required placeholder="Enter the header" size="58"><br>
        <label for ="NewsPreview">Preview Text:</label><br><textarea name="NewsPreview" required rows="20" cols="80"></textarea><br>
        <label for ="NewsText">Text:</label><br><textarea name="NewsText" required rows="20" cols="80"></textarea><br>
        <label for ="NewsTags">Tags:</label><br><input type="text" name="NewsTags" required placeholder="Enter the tags" size="58"><br>
        <input type="submit" value="Add">
    </form>
</main>
</body>
</html>