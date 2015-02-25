<!doctype html>
<html lang="ru">
<head>
    <title>Просмотр новостей</title>
</head>
<body>
<?php
  extract($this->PageData);
 ?>
<main role="main">
        <section>
            <header><?= $Newsheader; ?></header>
            <article>
                <?= $Newstext; ?>
                <p>
                    <time datetime="<?= $publishdate; ?>" pubdate="pubdate">
                        <b>PubDate:</b><?= $publishdate; ?></time>
                </p>
                <p><a href="./index.php?ctrl=News&act=All">Back</a></p>
            </article>
        </section>
</main>
</body>
</html>