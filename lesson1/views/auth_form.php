<!doctype html>
<html lang="ru">
    <head>
		<meta charset="cp1251">
		<title>Аутентификация</title>
	</head>
	<body>
		    <p><b>Войдите на сайт под своим именем для получения расширенных возможностей:</b></p>
			<form action="<?=ROOT_DIR;?>controllers/login.php" method="POST">
			  <label for="login">логин:</label><input type="text" name="login" required>
			  <label for="pass">пароль:</label><input type="password" name="pass" required>
			  <label for="remember">Запомнить меня</label><input type="checkbox" name="remember">
			  <input type="submit" value="вход">
			</form>
			<h3>Лента новостей</h3>
  <?php
      if(isset($_SESSION['error']))
      {
          $ErrMess=$_SESSION['error'];
          echo $ErrMess;
      }
   ?>
	</body>
</html>