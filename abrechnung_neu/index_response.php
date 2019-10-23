<?php
  session_start();
  include("dbConnect.php");
  $_SESSION['userName'] = $_POST['userName'];



?>

<link rel="stylesheet" href="style/main.css">

<?php

$userName = $_POST["userName"];
$password = $_POST["password"];

$_SESSION['userName'] = $_POST["userName"];

//BENUTZERNAME ÜBERPRÜFEN

if ($query = $connect->query("SELECT benutzername FROM kunde"))
{
  if ($query->num_rows > 0){
    while ($row = $query->fetch_object()){
      if($row->benutzername == $userName){
        //PASSWORT ÜBERPRÜFEN
        if ($query = $connect->query("SELECT passwort FROM kunde")){
          while($row = $query->fetch_object()){
            $pwd = $row->passwort;
            echo $pwd;
            if($userName == 'jac' && password_verify($password, $pwd)){
              header("Location: admin.php");
            }
            else if(password_verify($password, $pwd)) {
              header("Location: table.php");
            }
            else {
              echo "<SCRIPT type='text/javascript'> //not showing me this
              alert('Passwort falsch');
              window.location.replace(\"index.php\");
              </SCRIPT>";
            }
          }
        }
        else {
          echo $connect->error;
        }
      }
      else{
        echo "<SCRIPT type='text/javascript'>
        alert('Benutzername existiert nicht');
        window.location.replace(\"index.php\");
        </SCRIPT>";
      }
    }
  }
}
  else{
    echo $connect->error;
  }

?>
