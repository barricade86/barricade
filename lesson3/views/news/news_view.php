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
         foreach($items as $item)
         {
             extract($item);
             ?>
             <section>
                 <header><?= $Newsheader; ?></header>
                 <article>
                     <?= $NewsPreview; ?>
                     <p>
                         <time datetime="<?= $publishdate; ?>" pubdate="pubdate">
                             <b>PubDate:</b><?= $publishdate; ?></time>
                         <a href="./index.php?ctrl=News&act=One&id=<?=$NewsId;?>">Show Full Text</a>
                     </p>
                 </article>
             </section>
         <?php
         }
          ?>
    </main>
   </body>
  </html>