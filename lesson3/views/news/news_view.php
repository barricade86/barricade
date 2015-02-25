<!doctype html>
  <html lang="ru">
     <head>
        <title>Просмотр новостей</title>
     </head>
   <body>
     <main role="main">
         <a href="./index.php?ctrl=NewsAdmin&act=Main">Show Admin</a>
       <?php
         //print_r($news);
         foreach($news as $list)
         {
             ?>
             <section>
                 <header><?= $list['Newsheader']; ?></header>
                 <article>
                     <?= $list['NewsPreview']; ?>
                     <p>
                         <time datetime="<?= $list['publishdate']; ?>" pubdate="pubdate">
                             <b>PubDate:</b><?= $list['publishdate']; ?></time>
                         <a href="./index.php?ctrl=News&act=One&id=<?=$list['NewsId']?>">Show Full Text</a>
                     </p>
                 </article>
             </section>
         <?php
         }
          ?>
    </main>
   </body>
  </html>