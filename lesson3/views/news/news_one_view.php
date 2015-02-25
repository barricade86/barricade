<!doctype html>
<html lang="ru">
<head>
    <title>Просмотр новостей</title>
</head>
<body>
<main role="main">
        <section>
            <header><?= $item['Newsheader']; ?></header>
            <article>
                <?= $item['Newstext']; ?>
                <p>
                    <time datetime="<?= $item['publishdate']; ?>" pubdate="pubdate">
                        <b>PubDate:</b><?= $item['publishdate']; ?></time>
                </p>
                <p><a href="./index.php?ctrl=News&act=All">Back</a></p>
            </article>
        </section>
</main>
</body>
</html>