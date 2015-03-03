<!doctype html>
<html lang="ru">
<head>
    <title>Просмотр новостей</title>
</head>
<body>
<?php
  extract($item);
 ?>
<main role="main">
        <section>
            <header><?= $NewsHeader; ?></header>
            <article>
                <?= $NewsText; ?>
                <p>
                    <time datetime="<?= $publishdate; ?>" pubdate="pubdate">
                        <b>PubDate:</b><?= $publishdate; ?></time>
                </p>
                <p><a href="./index.php?block=News&action=GetAll">Back</a></p>
            </article>
        </section>
</main>
</body>
</html>