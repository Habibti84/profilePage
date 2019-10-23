<?php
session_start();
include("dbConnect.php");


 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/abrechnung.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <title>Kunde hinzufügen</title>
  </head>
  <body>
    

    <h1>Kunde hinzufügen</h1>



    <form method="post" action="kundeEintragen.php">

      <input type="text" name="vorname" placeholder="Vorname *" required>
      <input type="text" name="nachname" placeholder="Nachname *" required>
      <input type="text" name="firma" placeholder="Firma">
      <input type="text" name="adresse" placeholder="Adresse *" required>
      <input type="text" name="plz" placeholder="PLZ *" required>
      <input type="text" name="ort" placeholder="Ort *" required>
      <input type="text" name="email" placeholder="E-Mail">
      <input type="text" name="benutzername" placeholder="Benutzername *" required>
      <input type="text" name="passwort" placeholder="Passwort *" required>

      <input id="btn" type="submit" name="submit" value="Kunde eintragen">
      <a href="admin.php">Zurück</a>

    <?php

      ?>

  </body>
</html>
