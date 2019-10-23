<?php

session_start();

$userName = str_replace(" ", "", $_POST["userName"]);
$password = str_replace(" ", "", $_POST["password"]);
$_SESSION['username'] = $userName;

if($userName == null || $password == null) {
  header('Location: index.html');
}


if($userName == "NamicsAG" && $password == "1526") {
  header('Location: home.php');
}
else if($userName == "Herzlich" && $password == "willkommen") {
  header('Location: home.php');
}

else {
  echo "<SCRIPT type='text/javascript'>
  alert('Benutzername oder Passwort stimmt nicht');
  window.location.replace(\"index.html\");
  </SCRIPT>";
}



 ?>
