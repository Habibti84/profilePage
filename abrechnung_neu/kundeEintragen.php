<?php
  session_start();
  include("dbConnect.php");




  $vorname = $_POST['vorname'];
  $nachname = $_POST["nachname"];
  $firma = $_POST['firma'];
  $adresse = $_POST['adresse'];
  $plz = $_POST["plz"];
  $ort = $_POST["ort"];
  $email = $_POST["email"];
  $benutzername = $_POST["benutzername"];
  $passwort = $_POST["passwort"];

  // INSERT INTO kunde
  if (isset($_POST["submit"])) {
    $passwort = password_hash($passwort, PASSWORD_DEFAULT);
    if($query = $connect->query("INSERT INTO kunde (vorname, nachname, firma, adresse, plz, ort, email, benutzername, passwort)
      VALUES ('$vorname', '$nachname', '$firma', '$adresse', '$plz', '$ort', '$email', '$benutzername', '$passwort')")) {

    }
    else {
      echo $connect->error;
      echo "Kunde nicht eingefügt";
    }

    header("Location: neuerKunde.php");
  }
