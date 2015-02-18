<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Добавление новости</title>
</head>
<body>
<main role="main">
    <?php
    /**
     * Created by PhpStorm.
     * User: Admin
     * Date: 18.02.2015
     * Time: 19:13
     * */
    if(count($news)<>0)
    {
      ?>
       <section>
          <header><b><?=$news['newsHeader'];?></b></header>
                <article>
                    <?=$news['NewsText'];?>
                    <p><time datetime="<?=$news['publishdate'];?>" pubdate="pubdate"><b>Дата публикации:</b><?=$news['publishdate'];?></time></p>
                    <p><a href="../public/index.php">Назад</a></p>
                </article>
            </section>
        <?php
    }
    ?>
</main>
</body>
</html>