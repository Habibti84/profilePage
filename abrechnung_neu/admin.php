<?php
session_start();
include("dbConnect.php");


 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/abrechnung.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <title>Admin</title>
  </head>
  <body>
    <h1>Admin</h1>



    <form method="post" action="addData.php">      

      <input type="text" name="date" placeholder="Datum">
      <input type="text" name="time" placeholder="Time">
      <input type="text" name="ort" placeholder="Ort">
      <input type="text" name="bemerkungen" placeholder="Bemerkungen">

      <select name="kunde">
        <option>Beat Ursprung</option>
        <option>Michael Meier</option>
      </select>

      <div id="checkdiv">
        <input id="check" type="checkbox" name="last" value="true">letzter im Monat<br>
      </div>

      <!--<input type="text" name="kunde" placeholder="Kunde">-->



      <input id="btn" type="submit" name="submit" value="Add Time">
      <!--BUTTON EINBEZAHLT-->
      <input id="btn" type="submit" name="einbezahlt" value="Einbezahlt">

      <!--BUTTON NEUER KUNDE-->
    </form>
    <form action="neuerKunde.php" method="post">
      <input id="btn" type="submit" name="submit" value="Neuen Kunden hinzufügen">

    </form>
    <?php

      ?>

  </body>
</html>
