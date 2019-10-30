<?php

session_start();
include("dbConnect.php");
include("NoGodCode/date.php");
include("NoGodCode/loginLanding.php");
$ende1 = "";
$ende2 = "";
$totalBetr = array();
$totalZeit = array();
$monatsTotalBetrag1 = array();
$monatsTotalZeit1 = array();
$monatsTotalBetrag2 = array();
$monatsTotalZeit2 = array();

$totalBetr = array();
$totalZeit = array();

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style/table.css">
    <script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <title>Abrechnung <?php echo $userName ?></title>
  </head>
  <body>

<!-- Menu links -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="logout.php">Logout</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <!--<ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Abrechnung aktuell</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a href="table1Alle.php"><?php echo $table1; ?></a>
            <?php if (isset($datab2)) {
              ?>
              <a href="table2Alle.php"><?php echo $table2; ?></a>
              <?php
            }
             ?>
        </div>
      </li>
    </ul>-->
  </div>
</nav>










    <div class="container">
      <div id="inHead">
        <h1>Abrechnung<br><?php datum(); ?></h1>
        <p id="adress"><?php echo $adress; ?></p>
      </div>
    </div>

    <div class="container">
      <h2><?php echo $table1; ?></h2>
      <table id="one">
        <thead>
      		<tr>
      			<th class="date">Datum</th>
            <th class = "time">Zeit</th>
            <th class = "bemerk">Bemerkungen</th>
            <th class = "total">Total</th>
      		</tr>
        </thead>
        <tbody>

          <?php

            if ($result1 = $connect->query("SELECT datum, stunden, bemerkung, letzter, total FROM auftraege where id_kunde = '$id' AND best_kunde = 0"))
            {
              if ($result1->num_rows > 0)
              {
                while ($row1 = $result1->fetch_object())
                {
                    echo "<tr>";
                      echo "<td class = 'date'>" . $row1->datum . "</td>";
                      echo "<td class = 'time'>" . $totalstd = $row1->stunden . "</td>";
                      array_push($monatsTotalZeit1, $totalstd);
                      echo "<td class = 'bemerk'>" . $row1->bemerkung . "</td>";
                      echo "<td>" . "Sfr. " . $total = $row1->total . ".-" . "</td>";
                      array_push($monatsTotalBetrag1, $total);
                    echo "<tr>";
                    echo "</tbody>";

                    //MONATSTOTAL ANZEIGEN
                    if ($row1->letzter == 1)
                    {
                      $ende1 = $row1->letzter;
                        $endbetrag = array_sum($monatsTotalBetrag1);
                        echo "<tfoot>";
                          echo "<tr>";
                            echo "<th>Total:</th>";
                            echo "<th>" . $endZeit = array_sum($monatsTotalZeit1) . "</th>";
                            echo "<th class='bemerk'></th>";
                            echo "<th>" . "Sfr. " . $formatEndbetr = number_format(
                            $endbetrag, // zu konvertierende zahl
                            2,     // Anzahl an Nochkommastellen
                            '.',   // Dezimaltrennzeichen
                            '`'    // 1000er-Trennzeichen
                        ) . '.-' . "</th>";
                            array_push($totalZeit, $endZeit);
                            array_push($totalBetr, $formatEndbetr);
                          echo "</tr>";
                        echo "</tfoot>";

                    }


}

                }

                //$connect->close();
              }
              else {
                echo 'Query nicht ok';
                echo $connect->error;
              }



          ?>




<?php

if (isset($datab2)) {

  echo '<h2 id="hTwo">' . $table2 . '</h2>';

  echo '<table id="two">';
    echo '<thead>';
     echo '<tr>';
        echo '<tr>';
         echo '<th class="date">Datum</th>';
          echo '<th class = "time">Zeit</th>';
          echo '<th class = "bemerk">Bemerkungen</th>';
          echo '<th class = "total">Total</th>';
       echo '<tr>';
     echo '<tr>';
    echo '</thead>';

    echo '<tbody>';

    if ($result2 = $connect->query("SELECT * FROM $datab2 ORDER BY id"))
    {
      if ($result2->num_rows > 0)
      {



        while ($row2 = $result2->fetch_object())
        {



              echo "<tr>";
                echo "<td class = 'date'>" . $row2->datum . "</td>";
                echo "<td class = 'time'>" . $totalstd = $row2->stunden . "</td>";
                array_push($monatsTotalZeit2, $totalstd);
                echo "<td class = 'bemerk'>" . $row2->bemerkung . "</td>";
                echo "<td>" . "Sfr. " . $total=$row2->stunden * 35 . ".-" . "</td>";
                array_push($monatsTotalBetrag2, $total);
              echo "<tr>";
              echo "</tbody>";




              //Letzter im Monat wird gekennzichnet um Button anzuzeigen

              if ($row2->letzter == 1)
              {
                $ende2 = $row2->letzter;
                $endbetrag = array_sum($monatsTotalBetrag2);
                echo "<tfoot>";
                  echo "<tr>";
                    echo "<th>Total:</th>";
                    echo "<th>" . $endZeit = array_sum($monatsTotalZeit2) . "</th>";
                    echo "<th class='bemerk'></th>";
                    echo "<th>" . "Sfr. " . $formatEndbetr = number_format(
    $endbetrag, // zu konvertierende zahl
    2,     // Anzahl an Nochkommastellen
    '.',   // Dezimaltrennzeichen
    '`'    // 1000er-Trennzeichen
    ) . '.-' . "</th>";
                    echo "</tr>";
                  echo "</tfoot>";
                  array_push($totalZeit, $endZeit);
                  array_push($totalBetr, $formatEndbetr);
          }
      }
    }

        $connect->close();
      }
  }
     ?>
</table>
</div>






 </div>


<div class="table">


 <?php


if(isset($datab2)){
 if ($ende1 == 1 && $ende2 == 1) {

   echo '</table>';

    echo '<table id="total">';
      echo '<tfoot>';
        echo '<tr>';
          echo '<th class = "date">Total ' . $datab1 . " & " . $datab2 . ':</th>';
          echo '<th class = "time">' . array_sum($totalZeit) . '</th>';
          echo '<td class = "bemerk"></td>';
          echo '<th class = "total">Sfr. ' . array_sum($totalBetr) . '.-</th>';
        echo '</tr>';
      echo '</tfoot>';
    echo '</table>';

      ?>

      <form action="einzahlung.php" method="post" onsubmit="return confirm('Einzahlung bestätigen?');">
        <button class="btn" id="hover" type="submit" name="submit">Einzahlung bestätigen</button>
      </form>

      <?php



 }
}
else {
  if ($ende1 == 1) {

    echo '</table>';

     echo '<table id="total">';
       echo '<tfoot>';
         echo '<tr>';
           echo '<th class = "date">Total ' . ':</th>';
           echo '<th class = "time">' . array_sum($totalZeit) . '</th>';
           echo '<td class = "bemerk"></td>';
           echo '<th class = "total">Sfr. ' . array_sum($totalBetr) . '.-</th>';
         echo '</tr>';
       echo '</tfoot>';
     echo '</table>';

       ?>

       <form action="einbezahlt.php" method="post" onsubmit="return confirm('Einzahlung bestätigen?');">
         <button class="btn" id="hover" type="submit" name="einbezahlt">Einzahlung bestätigen</button>
       </form>

       <?php



  }
}

 if ($ende2 == "undefined")
 {
   ?>

 <form action="einbezahlt.php" method="post" onsubmit="return confirm('Einzahlung bestätigen?');">
   <button class="btn" id="hover" type="submit" name="einbezahlt">Einzahlung bestätigen</button>
 </form>

<?php
}

  ?>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
