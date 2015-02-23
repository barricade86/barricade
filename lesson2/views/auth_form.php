<?php
    //echo crypt('passbarricade','djdfjxcvv');
    if(!is_null($username))
    {
        ?>
        <p>Вы вошли как<?=$username;?></p>
    <?php
    }
    else
    {
     ?>
        <!doctype html>
            <html lang="ru">
            <head>
                <meta charset="cp1251">
                <title>Аутентификация</title>
            </head>
            <body>
            <p><b>Войдите на сайт под своим именем для получения возможности администрирования ленты:</b></p>
            <form action="./components/login.php" method="POST">
                <label for="login">логин:</label><input type="text" name="login" required>
                <label for="pass">пароль:</label><input type="password" name="pass" required>
                <label for="remember">Запомнить меня</label><input type="checkbox" name="remember">
                <input type="submit" value="вход">
            </form>
            <?php
              if(!is_null(Error::GetError()))
              {
                  echo Error::GetError();
              }
             ?>
            </body>
            </html>
     <?php
    }
 ?>
