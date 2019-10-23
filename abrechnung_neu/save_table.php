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
    <link rel="stylesheet" href="style/table.css">

    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <title>Abrechnung <?php echo $userName ?></title>
  </head>
  <body>

<div id="outerNav">
  <div id="innerNav">
    <div id="left">
      <nav id="dropDown">
        <ul id="outer">
          <a href="table<?php echo $userNameTrimed; ?>.php"><li>Abrechnung aktuell</li></a>
          <a id="klick" href="#" onclick="on()"><li>Übersicht 2018 <i id="icon" class="fas fa-angle-down"></i></li></a>
          <ul id="inner">
            <a href="table<?php echo $datab1; ?>Alle.php"><li><?php echo $datab1; ?></a>
            <a href="table<?php echo $datab2; ?>Alle.php"><li><?php echo $datab2; ?></a>
          </ul>

        </ul>
      </nav>
    </div>
    </div>
  </div>


    <div id="head">
      <div id="inHead">
        <h1>Abrechnung<br><?php datum(); ?></h1>
        <p id="adress"><?php echo $adress; ?></p>
      </div>
    </div>



    <div id="body">

      <h2><?php echo $datab1; ?></h2>



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



            if ($result1 = $connect->query("SELECT * FROM $datab1 ORDER BY id"))
            {
              if ($result1->num_rows > 0)
              {



                while ($row1 = $result1->fetch_object())
                {



                    echo "<tr>";
                      echo "<td class = 'date'>" . $row1->datum . "</td>";
                      echo "<td class = 'time'>" . $totalstd = $row1->zeit . "</td>";
                      array_push($monatsTotalZeit1, $totalstd);
                      echo "<td class = 'bemerk'>" . $row1->bemerkungen . "</td>";
                      echo "<td>" . "Sfr. " . $total = $row1->total . ".-" . "</td>";
                      array_push($monatsTotalBetrag1, $total);
                    echo "<tr>";

                    echo "</tbody>";








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
                    else
                    {

                    }

                }


                }
                //$connect->close();
              }



          ?>

</table>




<h2 id="hTwo"><?php echo $datab2;  ?></h2>

<table id="two">
  <thead>
   <tr>
      <tr>
       <th class="date">Datum</th>
        <th class = "time">Zeit</th>
        <th class = "bemerk">Bemerkungen</th>
        <th class = "total">Total</th>
     </tr>
   </tr>
  </thead>

  <tbody>

    <?php

    //Tabellenreihen werden ausgegeben, solange Daten zur Verfügung stehen

    if ($result2 = $connect->query("SELECT * FROM therapieost ORDER BY id"))
    {
      if ($result2->num_rows > 0)
      {



        while ($row2 = $result2->fetch_object())
        {



              echo "<tr>";
                echo "<td class = 'date'>" . $row2->datum . "</td>";
                echo "<td class = 'time'>" . $totalstd = $row2->zeit . "</td>";
                array_push($monatsTotalZeit2, $totalstd);
                echo "<td class = 'bemerk'>" . $row2->bemerkungen . "</td>";
                echo "<td>" . "Sfr. " . $total=$row2->zeit * 35 . ".-" . "</td>";
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
        else
        {

        }
        $connect->close();
      }





     ?>






</table>

 <table id="total">
   <tfoot>
     <tr>
       <th class = 'date'>Total <?php echo $datab1 . " & " . $datab2; ?>:</th>
       <th class = 'time'><?php echo array_sum($totalZeit); ?></th>
       <td class = 'bemerk'></td>
       <th class = 'total'>Sfr. <?php echo array_sum($totalBetr);  ?>.-</th>
     </tr>
   </tfoot>
 </table>

 </div>



 <?php

 if ($ende1 == 1 && $ende2 == 1 )
 {
   ?>

 <form action="einzahlung.php" method="post" onsubmit="return confirm('Einzahlung bestätigen?');">
   <button class="btn" id="hover" type="submit" name="submit">Einzahlung bestätigen</button>
 </form>

<?php
}

  ?>


<script src="NoGodCode/dropDown.js"></script>

  </body>
</html>
