<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 17.02.2015
 * Time: 12:56
 */
  session_start();
  if((!empty($_SESSION) and isset($_SESSION['auth_result']) and ($_SESSION['auth_result']=='ok')) or isset($_COOKIE['usercookie']))
  {
      $username=null;
      if(isset($_COOKIE['usercookie']))
      {
          $username=$_COOKIE['usercookie'];
      }
      else
      {
          $username=$_SESSION['auth_name'];
      }
      echo 'Велкам ту хелл '.$username;
      ?>
      <a href="controllers/logout.php">Выйти</a>
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
			<form action="./controllers/login.php" method="POST">
			  <label for="login">логин:</label><input type="text" name="login" required>
			  <label for="pass">пароль:</label><input type="password" name="pass" required>
			  <label for="remember">Запомнить меня</label><input type="checkbox" name="remember">
			  <input type="submit" value="вход">
			</form>
			<?php
      if(isset($_SESSION['error']))
      {
          $ErrMess=$_SESSION['error'];
          echo $ErrMess;
      }
      ?>
		</body>
	  </html>
	  <?php
  }