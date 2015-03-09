<?php
  $ConnectionString='mysql:host=localhost;dbname=devastator';
$dbh=new PDO($ConnectionString,'barricade','AtFSkMJ11xZF19');
  $sth = $dbh->prepare("SELECT * FROM news");
  $sth->execute();
/* Извлечение всех оставшихся строк результирующего набора */
print("Извлечение всех оставшихся строк результирующего набора:\n");
$result = $sth->fetchAll();
print_r($result);