<!doctype html>
  <html lang="ru">
     <head>
        <title>Просмотр новостей</title>
     </head>
   <body>
     <main role="main">
         <a href="./index.php?controller=NewsAdmin&action=Main">Show Admin</a>
       <?php
         foreach($items as $item)
         {
             ?>
             <section>
                 <header><?= $item->NewsHeader; ?></header>
                 <article>
                     <?= $item->NewsPreview;?>
                     <p>
                         <time datetime="<?=$item->publishdate; ?>" pubdate="pubdate">
                             <b>PubDate:</b><?= $item->publishdate; ?></time>
                         <a href="./index.php?controller=News&action=One&id=<?=$item->NewsId;?>">Show Full Text</a>
                     </p>
                     <p> <a href="./index.php?controller=NewsAdmin&action=Kill&id=<?=$item->NewsId;?>">Kill</a></p>
                     <p> <a href="./index.php?controller=NewsAdmin&action=Edit&id=<?=$item->NewsId;?>">Edit</a></p>
                 </article>
             </section>
         <?php
         }
          ?>
    </main>
   </body>
  </html>