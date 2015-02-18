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
                    if(!isset($_GET['id']))
                    {
                        $Url='../public/index.php?id='.$article['NewsId'];
                        $LinkText='Просмотреть отдельно';
                    }
                    else
                    {
                        $Url='../public/index.php';
                        $LinkText='Назад';
                    }
                    ?>
                    <section>
                        <header><b><?=$article['newsHeader'];?></b></header>
                        <article>
                            <?=$article['NewsText'];?>
                            <p><time datetime="<?=$article['publishdate'];?>" pubdate="pubdate"><b>Дата публикации:</b><?=$article['publishdate'];?></time></p>
                            <p><a href="<?=$Url;?>"><?=$LinkText;?></a></p>
                        </article>
                    </section>
                <?php
                }
            }
        ?>
    </main>
</body>
</html>