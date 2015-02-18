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
             * Date: 17.02.2015
             * Time: 21:32
             */
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