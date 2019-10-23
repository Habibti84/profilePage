<?php

  $userName = $_SESSION['userName'];
  $userNameTrimed = str_replace(" ", "", $userName);



  if ($userName == "Regina & Andi") {
    $datab1 = "Augartenstrasse";
    $datab2 = "TherapieOst";
    $table1 = "Augartenstrasse";
    $table2 = "TherapieOst";
    $adress = "Regina Villiger<br>Andi Vellini<br>Augartenstrasse 4<br>9402 Mörschwil";
  }

  else if ($userName == "Simon Vlachos") {
    $datab1 = "Käserenstrasse";
    $datab2 = "Lake Group Holding AG";
    $datab2Trimed = str_replace(" ", "", $datab2);
    $table1 = "Käserenstrasse";
    $table2 = "Lake Group Holding AG";
    $adress = "Simon Vlachos<br>Käserenstrasse 7<br>9404 Rorschacherberg";
    $id = 13;
  }

  else if ($userName == "Rufin Motzer") {
    $datab1 = "Rufin Motzer";
    $table1 = "Rufin Motzer";
    $adress = "Rufin Motzer<br>Johannes-Baumann-Strasse 5<br>9100 Herisau";
    $id = 11;
  }

  else if ($userName == "Beat Ursprung") {
    $datab1 = "beatursprung";
    $table1 = "Beat Ursprung";
    $adress = "Beat Ursprung<br>Schützenstrasse 63<br>9100 Herisau";
    $id = 14;
  }



  $datab1Alle = $datab1 . "Alle";
  if (isset($datab2)) {
  $datab2Alle = $datab2 . "Alle";
  $datab2Trimed = strtolower($datab2);
}


 ?>
