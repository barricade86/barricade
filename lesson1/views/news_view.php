<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 17.02.2015
 * Time: 18:06
 */
  //if((!empty($_SESSION) and isset($_SESSION['auth_result']) and ($_SESSION['auth_result']=='ok')) or isset($_COOKIE['usercookie']))
if((isset($_SESSION['auth_result']) and ($_SESSION['auth_result']=='ok')) or isset($_COOKIE['usercookie']))
{
    $username=GetLoginedUsername();
    /*if(isset($_COOKIE['usercookie']))
    {
        $username=$_COOKIE['usercookie'];
    }
    else
    {
        $username=$_SESSION['auth_name'];
    }*/
    echo 'Велкам ту хелл '.$username;
    ?>
    <a href="./logout.php">Выйти</a>
<?php
}
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="header">Заголовок:</label><br><input type="text" name="header" required placeholder="Введите заголовок" size="78"><br>
        <label for="preview">Текст для превью:</label><br>
        <textarea name="preview" required rows="20" cols="80"></textarea><br>
        <label for="newstext">Полный текст:</label><br>
        <textarea name="newstext" required rows="20" cols="80"></textarea><br>
        <label for="tags">Теги:</label><br><input type="text" name="tags" required placeholder="теги" size="78"><br>
        <input type="submit" value="Отправить">
    </form>
    <main role="main">
        <?php
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
                      </article>
                  </section>
              <?php
              }
          }
        ?>
    </main>
</body>
</html>