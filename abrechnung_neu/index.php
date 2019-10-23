<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/main.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <title></title>
  </head>
  <body>

    <h1>Kunden Login<br>Reinigung - Jacqueline Motzer</h1>




    <form class="first" action="index_response.php" method="post">
      <input type="text" name="userName" placeholder="Benutzername">
      <input type="password" name="password" placeholder="Passwort">
      <input id="btn" type="submit" name="logIn" value="Login">
    </form>


  </body>
</html>
