<!doctype html>
  <html lang="ru">
     <head>
        <title>Просмотр новостей</title>
     </head>
   <body>
     <main role="main">
         <a href="./index.php?block=NewsAdmin&action=Main">Show Admin</a>
       <?php
         foreach($items as $item)
         {
             extract($item);
             ?>
             <section>
                 <header><?= $NewsHeader; ?></header>
                 <article>
                     <?= $NewsPreview;?>
                     <p>
                         <time datetime="<?=$publishdate; ?>" pubdate="pubdate">
                             <b>PubDate:</b><?= $publishdate; ?></time>
                         <a href="./index.php?block=News&action=getOne&id=<?=$NewsId;?>">Show Full Text</a>
                     </p>
                 </article>
             </section>
         <?php
         }
          ?>
    </main>
   </body>
  </html>