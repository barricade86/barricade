<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Добавление новости</title>
</head>
<body>
<main role="main">
    <form action="../components/AddNews.php" method="POST">
        <label for="header">Заголовок:</label><br><input type="text" name="header" required placeholder="Введите заголовок" size="78"><br>
        <label for="preview">Текст для превью:</label><br>
        <textarea name="preview" required rows="20" cols="80"></textarea><br>
        <label for="newstext">Полный текст:</label><br>
        <textarea name="newstext" required rows="20" cols="80"></textarea><br>
        <label for="tags">Теги:</label><br><input type="text" name="tags" required placeholder="теги" size="78"><br>
        <input type="submit" value="Отправить">
    </form>
    <?php
    /**
     * Created by PhpStorm.
     * User: Admin
     * Date: 21.02.2015
     * Time: 15:25
     */
    if(isset($msg) && !is_null($msg))
    {
        echo $msg;
    }
    if(count($news)<>0)
    {
        foreach($news as $article)
        {
            ?>
            <section>
                <header><b><?=$article['newsHeader'];?></b></header>
                <article>
                    <?=$article['NewsText'];?>
                    <p><time datetime="<?=$article['publishdate'];?>" pubdate="pubdate"><b>Дата публикации:</b><?=$article['publishdate'];?></time></p>
                    <p><a href="../public/index.php?id=<?=$article['NewsId'];?>">Просмотреть отдельно</a></p>
                </article>
            </section>
        <?php
        }
    }
    ?>
</main>
</body>
</html>

