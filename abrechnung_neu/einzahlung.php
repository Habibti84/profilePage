<?php
  session_start();
  include("dbConnect.php");
  include("NoGodCode/loginLanding.php");




      $sql2 = "INSERT INTO $datab1Alle (datum, zeit, bemerkungen, letzter, total) SELECT datum, zeit, bemerkungen, letzter, total FROM $datab1 ORDER BY id;";
      $sql2 .= "DELETE FROM $datab1 ORDER BY id;";
      $sql2 .= "INSERT INTO $datab2Alle (datum, zeit, bemerkungen, letzter, total) SELECT datum, zeit, bemerkungen, letzter, total FROM $datab2 ORDER BY id;";
      $sql2 .= "DELETE FROM $datab2 ORDER BY id";



      if (isset($_POST["submit"])) {

          if ($datab1 !== null && $datab2 !== null) {
            if (mysqli_multi_query($connect, $sql2)) {
              header("Location: einzahlung_bestätigung.php");
            }

            else {
              echo "Fehler: Query nicht ausgeführt";
            }

            //header("Location: table" . $kundeTrimed . ".php");

          }

          else if ($datab1 !== null && $datab2 == null) {
            mysqli_multi_query($connect, $sql1);
            header("Location: table" . $userNameTrimed . ".php");
          }



          else {

              echo "Multi query failed: (" . $connect->errno . ") " . $connect->error;
          }






      }

      else {
        echo "Submit Error";
      }



?>
