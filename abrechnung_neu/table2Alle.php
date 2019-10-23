<?php

session_start();
include("dbConnect.php");
include("NoGodCode/date.php");
include("NoGodCode/loginLanding.php");
$monatsTotalBetrag1 = array();
$monatsTotalZeit1 = array();

 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/table.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <title>Übersicht <?php echo $datab2; ?> <?php echo date("Y"); ?></title>
  </head>
  <body>

    <nav class="phoneQuery">
      <div class="btnDrop">

        <!--<button class="dropLines">
          <i class="fas fa-bars"></i>
        </button>-->








        <div class="navbar">
          <div class="innerNav">



          <a href="table.php">Abrechnung aktuell</a>

          <div class="dropdown">
             <button class="dropbtn">Übersicht 2018
              <i id="icon" class="fas fa-angle-down"></i>
            </button>
             <div class="dropdown-content">
               <a href="table1Alle.php"><?php echo $table1; ?></a>
                 <?php if (isset($datab2)) {
                   ?>
                   <a href="table2Alle.php"><?php echo $table2; ?></a>
                   <?php
                 }
                  ?>
             </div>

           </div>

         </div>
       </div>



         <!-- Personal Button rechts -->

           <!--<div id="personal" class="dropdown">
             <button class="dropbtn"><?php echo $userName; ?>
              <i id="icon" class="fas fa-angle-down"></i>
            </button>
             <div class="dropdown-content">
               <a href="#">Passwort ändern</a>

                   <a href="#">E-Mail hinterlegen</a>

             </div>

           </div>

         </div>-->
    </nav>


    <div id="head">
      <div id="inHead">
        <h1>Übersicht <br><?php echo $table2; ?> <br> <?php echo date("Y"); ?></h1>
        <p id="adress"><?php echo $adress; ?></p>
      </div>
    </div>




    <div id="body">

      <h2><?php echo $datab2; ?></h2>



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



            if ($result1 = $connect->query("SELECT * FROM $datab2Alle ORDER BY id"))
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










              }
            }
          }
          $connect->close();



          ?>

</table>





 <table id="total">
   <tfoot>
     <tr>
       <th class = 'date'>Total:</th>
       <th class = 'time'><?php echo array_sum($monatsTotalZeit1); ?></th>
       <td class = 'bemerk'></td>
       <th>Sfr. <?php echo array_sum($monatsTotalBetrag1);  ?>.-</th>
     </tr>
   </tfoot>
 </table>

 </div>




  <script type="text/javascript" src="NoGodCode/dropDown.js">

  </script>












  </body>
</html>
