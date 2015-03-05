<?php
/**
 * Created by PhpStorm.
 * User: barricade
 * Date: 25.02.15
 * Time: 13:57
 */
 $NewsHeader=$item->NewsHeader;
 $NewsPreview=$item->NewsPreview;
 $NewsText=$item->NewsText;
 $NewsTags=$item->NewsTags;
 $NewsId=$item->NewsId;
?>
<!doctype html>
<html lang="ru">
<head>
    <title>Просмотр новостей</title>
</head>
<body>
<main role="main">
    <form action="./index.php?controller=NewsAdmin&action=Update&id=<?=$NewsId;?>" method="POST">
        <label for ="NewsHeader">Header:</label><br><input type="text" name="NewsHeader" required placeholder="Enter the header" size="58" value="<?=$NewsHeader;?>"><br>
        <label for ="NewsPreview">Preview Text:</label><br><textarea name="NewsPreview" required rows="20" cols="80"><?=$NewsPreview;?></textarea><br>
        <label for ="NewsText">Text:</label><br><textarea name="NewsText" required rows="20" cols="80"><?=$NewsText;?></textarea><br>
        <label for ="NewsTags">Tags:</label><br><input type="text" name="NewsTags" required placeholder="Enter the tags" size="58" value="<?=$NewsTags;?>"><br>
        <input type="submit" value="Edit">
    </form>
</main>
</body>
</html>