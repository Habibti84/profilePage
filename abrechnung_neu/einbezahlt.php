<?php
  session_start();
  include("dbConnect.php");
  include("NoGodCode/loginLanding.php");

  if(isset($_POST["einbezahlt"])){
    if ($result2 = $connect->query("UPDATE auftraege
SET best_kunde = 1
WHERE id_kunde = $id")) {
              header("Location: table.php");
            }

            else {
              echo "nichts passiert";
              echo $connect->error;
            }
  }
  else {
    echo "is not set";
  }

  ?>
