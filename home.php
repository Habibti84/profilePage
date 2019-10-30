<?php

session_start();
if(!isset($_SESSION['username'])) {
  header('Location: index.html');
}

$userName = $_SESSION['username'];


if($userName == 'NamicsAG') {
  $text = "Als ich mich über die Namics AG informiert habe, war ich begeistert. Die Projekte in Ihrem Portfolio entsprechen genau meinen Interessen. WebApps und ECommerce-Shops im grossen Stil, nach den neusten Standards und dazu eine Firmenpolitik, bei der das Wohlbefinden der Mitarbeiter ganz weit oben steht. Es ist ein Traum, bei einem solch professionellen Entwicklerteam meinen Horizont zu erweitern und in so einem Umfeld zu arbeiten. <br> Ausserdem hatten wir einen Match bei den wichtigsten Eigenschaften zur Firmenkultur <span id='smile'>☺</span>: Hilfsbereitschaft, Ehrgeiz und Mut.";
}

 ?>


<!DOCTYPE html>
<html lang="de" dir="ltr">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta charset="utf-8">
  <meta name="keywords" content="Jacqueline Motzer Profil Seite">
  <meta name="description" content="Lernen Sie mich etwas kennen">
  <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/13c7738e3b.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/main.css">
  <title>Jacqueline Motzer</title>
</head>
<body>
  <header id="header" class="containerCenter container-fluid jsContainer">
    <div class="center">
      <h1>Jacqueline Motzer</h1>
    </div>
    <div id="headerFoot" class="containerCenter container-fluid">
      <p class=""><a href="#first"><i class="fas fa-chevron-down"></i></a></p>
    </div>
  </header>

  <div id="first">
    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="#header">Top</a>
      <button id="btnToggle" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li id="prof" class="nav-item">
            <a class="nav-link" href="#profil">Profil <span class="sr-only">(current)</span></a>
          </li>
          <li id="ziel" class="nav-item">
            <a class="nav-link" href="#ziele">Ziele</a>
          </li>
          <li id="schu" class="nav-item">
            <a class="nav-link" href="#schule">Schule</a>
          </li>
          <li id="arbe" class="nav-item">
            <a class="nav-link" href="#arbeit">Arbeit</a>
          </li>
          <li id="fähi" class="nav-item">
            <a class="nav-link" href="#faehigkeit">Fähigkeiten</a>
          </li>
          <li id="proj" class="nav-item">
            <a class="nav-link" href="#projekte">Projekte</a>
          </li>
          <li id="kont" class="nav-item">
            <a class="nav-link" href="#kontakt">Kontakt</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>

  <div id="profil" class="container extraMarg ">
    <div class="container-fluid">
      <h2>Profil</h2>
      <p class="zitat">"Wähle einen Beruf den du liebst, und du brauchst keinen Tag mehr zu Arbeiten." <br> <span>-Konfuzius</span> </p>
    </div>
    <div class="container-fluid innerContainer">
      <div class="row noMarg">
        <div class="col-sm col-md-6">
          <h3>Über mich</h3>
          <p class="noMarg">Im April 2018 habe ich mich nach gründlichem Überlegen dazu entschieden, meine Selbständigkeit aufzugeben und nochmals einen ganz neuen Weg einzuschlagen und mich an der <a href="https://www.wiss.ch/de-CH" target="_blank">WISS St. Gallen</a> für den Lehrgang "Informatikerin EFZ – Applikationsentwicklung" eingeschrieben. Dieser Schritt hat mich viel Mut gekostet, da ich ein regelmässiges Einkommen, gegen eine unbekannte Zukunft getauscht habe.</p>
          <p id="noPad">Da ich mich aber zu dem Zeitpunkt schon seit über einem Jahr autodidakt mit PHP 7 und JavaScript beschäftigt habe und mir das wahnsinnig Spass gemacht hat, wollte ich den Schritt gehen.<br>Nun bin ich seit über einem Jahr in der Ausbildung und ich bereue keinen Tag, diese Entscheidung getroffen zu haben. Dieser Hintergrund und die Freude am Programmieren, wecken bei mir immer wieder den Ehrgeiz, vollen Einsatz zu geben.<br>Der nächste, wichtige Schritt für meine neue Zukunft steht nun an. Um diese Ausbildung abzuschliessen, brauche ich ab dem 1. August 2020 eine Praktikumstelle, wo ich das dritte und vierte Jahr meiner Ausbildung absolvieren kann.</p>

        </div>

        <div id="imgMe" class="col-sm col-md-3">

          <img src="img/me.jpg" class="rounded-circle" alt="Jacqueline Motzer">

        </div>

        <div class="col-sm col-md-3">
          <h3>Details</h3>

          <p>
            <strong>Name:</strong>
            <br>
            Jacqueline Motzer
            <br>
            <strong>Alter:</strong>
            <br>
            35
            <br>
            <strong>Wohnort:</strong>
            <br>
            Herisau
          </p>

        </div>

      </div>
    </div>
  </div>

  <div id="ziele" class="grey container-fluid extraMarg">
    <div class="container">
      <h2>Ziele</h2>
      <p class="zitat">"Wenn du ein glückliches Leben führen willst, konzentriere dich auf ein Ziel, nicht auf Menschen oder Gegenstände." <br> <span>-Albert Einstein</span> </p>
      <div class="container img">
        <div class="row edu">
          <div class="col-sm col-md-4">
            <img src="img/aim.jpg" class="rounded-circle" alt="">
          </div>
          <div class="col-sm col-md-8">
            <p>Diese Ausbildung bedeutet mir alles und ich will sie zu meinem Allerbesten nutzen. Mein Ziel ist es, eine qualifizierte und begeisterte Applikations-Entwicklerin zu werden. Der nächste Schritt zu diesem Ziel, ist eine Praktikumsstelle zu finden, die mir die Möglichkeit bietet, mich dahin gehend zu entwickeln.<br> <strong><?php echo $text ?></strong> <br>Wenn ich bei Ihnen mein Praktikum absolvieren kann, ist der nächste, riesige Schritt zu meinem Ziel getan. Ich bin bereit, vollen Einsatz zu geben und mich einzubringen, um mein Ziel zu erreichen und mich trotz meines Anfängerniveaus als Mehrwert für das Unternehmen zu erweisen.</p>
          </div>
        </div>
        </div>
      </div>
    </div>

  <div id="schule" class="container-fluid extraMarg ">
    <div class="container">
      <h2>Schule</h2>
      <p class="zitat">"Bildungshunger und Wissensdurst sind keine Dickmacher." <br> <span>-Lothar Schmidt</span> </p>
      <div class="container">
        <div class="row edu">
          <div class="col-sm">
            <p>
              <strong><a href="https://www.wiss.ch/de-CH" target="_blank">WISS St. Gallen</a>, Wirtschaftsinformatikschule</strong>
              <br>
              seit August 2018
            </p>
          </div>
          <div class="col-sm">
            <p>2. Jahr EFZ Informatikerin - Applikationsentwicklung</p>
          </div>
        </div>

        <div class="row edu">
          <div class="col-sm">
            <p>
              <strong>Selbststudium</strong>
              <br>
              seit Sommer 2017
            </p>
          </div>
          <div class="col-sm">
            <p>HTML 5, CSS 3, JavaScript, PHP 7</p>
          </div>
        </div>

        <div class="row edu">
          <div class="col-sm">
            <p>
              <strong>Fernstudium</strong>
              <br>
              August 2004 - Oktober 2005
            </p>
          </div>
          <div class="col-sm">
            <p>Privatdetektivin, ESARP, Paris</p>
          </div>
        </div>

        <div class="row edu">
          <div class="col-sm">
            <p>
              <strong>Kantonsschule Trogen</strong>
              <br>
              August 2001 - April 2002
            </p>
          </div>
          <div class="col-sm">
            <p>Handelsschule</p>
          </div>
        </div>

        <div class="row edu">
          <div class="col-sm">
            <p>
              <strong>Centre de formation du Sacré-Coeur, Estavayer-le-Lac</strong>
              <br>
              August 2000 - Juli 2001
            </p>
          </div>
          <div class="col-sm">
            <p>10. Schuljahr</p>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div id="arbeit" class="grey container-fluid extraMarg ">
    <div class="container">
      <h2>Arbeit</h2>
      <p class="zitat">"Für seine Arbeit muss man Zustimmung suchen, aber niemals Beifall." <br> <span>-Charles-Louis de Montesquieu</span> </p>
      <div class="container">
        <div class="row edu">
          <div class="col-sm">
            <p>
              <strong>Selbstständig als Reinigungskraft</strong>
              <br>
              seit April 2015
            </p>
          </div>
          <div class="col-sm">
            <p>Reinigungskraft in verschiedenen Privat- sowie Gewerberäumlichkeiten</p>
          </div>
        </div>

        <div class="row edu">
          <div class="col-sm">
            <p>
              <strong>Angestellte als Reinigungskraft</strong>
              <br>
              Mai 2005 - November 2016
            </p>
          </div>
          <div class="col-sm">
            <p>Reinigungskraft in verschiedenen Privat- sowie Gewerberäumlichkeiten</p>
          </div>
        </div>

        <div class="row edu">
          <div class="col-sm">
            <p>
              <strong>Lagerarbeiterin</strong>
              <br>
              Oktober 2005 - Juni 2008
            </p>
          </div>
          <div class="col-sm">
            <p>Eagle Import-Export GmbH, Herisau</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="faehigkeit" class="skills container-fluid extraMarg">
    <div class="container">
      <h2>Fähigkeiten</h2>
      <p class="zitat">"Niemand weiss, was er kann, bevor er es versucht." <br> <span>-Publilius Syrus</span></p>
      <div class="container innerContainer">
        <h3>Skills</h3>
        <div class="row edu">
          <div class="col-sm">
            <ul>
              <li><span class="faehigkeitBeschr">HTML 5</span><span class="faehigkeitRate"><i class="fas fa-star filled"></i><i class="fas fa-star filled"></i><i class="fas fa-star filled"></i><i class="fas fa-star filled"></i><i class="fas fa-star unfilled"></i></span></li>
              <li><span class="faehigkeitBeschr">CSS 3</span><span class="faehigkeitRate"><i class="fas fa-star filled"></i><i class="fas fa-star filled"></i><i class="fas fa-star unfilled"></i><i class="fas fa-star unfilled"></i><i class="fas fa-star unfilled"></i></span></li>
              <li><span class="faehigkeitBeschr">Bootstrap</span><span class="faehigkeitRate"><i class="fas fa-star filled"></i><i class="fas fa-star filled"></i><i class="fas fa-star filled"></i><i class="fas fa-star unfilled"></i><i class="fas fa-star unfilled"></i></span></li>
              <li><span class="faehigkeitBeschr">JavaScript</span><span class="faehigkeitRate"><i class="fas fa-star filled"></i><i class="fas fa-star filled"></i><i class="fas fa-star filled"></i><i class="fas fa-star unfilled"></i><i class="fas fa-star unfilled"></i></span></li>
            </ul>
          </div>
          <div class="col-sm">
            <ul>
              <li><span class="faehigkeitBeschr">JQuery</span><span class="faehigkeitRate"><i class="fas fa-star filled"></i><i class="fas fa-star filled"></i><i class="fas fa-star unfilled"></i><i class="fas fa-star unfilled"></i><i class="fas fa-star unfilled"></i></span></li>
              <li><span class="faehigkeitBeschr">PHP 7</span><span class="faehigkeitRate"><i class="fas fa-star filled"></i><i class="fas fa-star filled"></i><i class="fas fa-star filled"></i><i class="fas fa-star unfilled"></i><i class="fas fa-star unfilled"></i></span></li>
              <li><span class="faehigkeitBeschr">MySQL</span><span class="faehigkeitRate"><i class="fas fa-star filled"></i><i class="fas fa-star filled"></i><i class="fas fa-star filled"></i><i class="fas fa-star unfilled"></i><i class="fas fa-star unfilled"></i></span></li>
              <li><span class="faehigkeitBeschr">Java</span><span class="faehigkeitRate"><i class="fas fa-star filled"></i><i class="fas fa-star unfilled"></i><i class="fas fa-star unfilled"></i><i class="fas fa-star unfilled"></i><i class="fas fa-star unfilled"></i></span></li>

            </ul>
          </div>
        </div>
      </div>
    </div>


  <div id="sprachen" class="skills container-fluid ">
    <div class="container">
      <div class="container innerContainer">
        <h3>Sprachen</h3>
        <div class="row edu">
          <div class="col-sm">
            <ul>
              <li><span class="faehigkeitBeschr">Deutsch</span><span class="faehigkeitRate"><i class="fas fa-star filled"></i><i class="fas fa-star filled"></i><i class="fas fa-star filled"></i><i class="fas fa-star filled"></i><i class="fas fa-star filled"></i></span></li>
              <li><span class="faehigkeitBeschr">Englisch</span><span class="faehigkeitRate"><i class="fas fa-star filled"></i><i class="fas fa-star filled"></i><i class="fas fa-star filled"></i><i class="fas fa-star unfilled"></i><i class="fas fa-star unfilled"></i></span></li>
            </ul>
          </div>
          <div class="col-sm">
            <ul>
              <li><span class="faehigkeitBeschr">Französisch</span><span class="faehigkeitRate"><i class="fas fa-star filled"></i><i class="fas fa-star filled"></i><i class="fas fa-star unfilled"></i><i class="fas fa-star unfilled"></i><i class="fas fa-star unfilled"></i></span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="tools" class="skills container-fluid">
    <div class="container">
      <div class="container innerContainer">
        <h3>Tools</h3>
        <div class="row edu">
          <div class="col-sm">
            <ul>
              <li><span class="faehigkeitBeschr">Atom</span><span class="faehigkeitRate"><i class="fas fa-star filled"></i><i class="fas fa-star filled"></i><i class="fas fa-star filled"></i><i class="fas fa-star unfilled"></i><i class="fas fa-star unfilled"></i></span></li>
              <li><span class="faehigkeitBeschr">Git</span><span class="faehigkeitRate"><i class="fas fa-star filled"></i><i class="fas fa-star filled"></i><i class="fas fa-star unfilled"></i><i class="fas fa-star unfilled"></i><i class="fas fa-star unfilled"></i></span></li>
              <li><span class="faehigkeitBeschr">Eclipse</span><span class="faehigkeitRate"><i class="fas fa-star filled"></i><i class="fas fa-star filled"></i><i class="fas fa-star unfilled"></i><i class="fas fa-star unfilled"></i><i class="fas fa-star unfilled"></i></span></li>
              </ul>
            </div>
            <div class="col-sm">
              <ul>
                <li><span class="faehigkeitBeschr">Git Hub</span><span class="faehigkeitRate"><i class="fas fa-star filled"></i><i class="fas fa-star filled"></i><i class="fas fa-star unfilled"></i><i class="fas fa-star unfilled"></i><i class="fas fa-star unfilled"></i></span></li>
                <li><span class="faehigkeitBeschr">Xampp</span><span class="faehigkeitRate"><i class="fas fa-star filled"></i><i class="fas fa-star filled"></i><i class="fas fa-star unfilled"></i><i class="fas fa-star unfilled"></i><i class="fas fa-star unfilled"></i></span></li>
                <li><span class="faehigkeitBeschr">phpMyAdmin</span><span class="faehigkeitRate"><i class="fas fa-star filled"></i><i class="fas fa-star filled"></i><i class="fas fa-star filled"></i><i class="fas fa-star unfilled"></i><i class="fas fa-star unfilled"></i></span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>


    <div id="projekte" class="grey container-fluid extraMarg">
      <div class="container">
        <h2>Projekte</h2>
        <p class="zitat" >"Es ist nicht genug zu wissen, man muss es auch anwenden. Es ist nicht genug zu wollen, man muss es auch tun." <br> <span>-Johann Wolfgang von Goethe</span> </p>
        <div class="container">
          <div class="row edu">

            <div class="col-sm">
              <a href="ticTacToe/ticTacToe.html"><div class="containerCenter">
                <h4 class="center">Tic Tac Toe<br><span class="aside">Aus meiner Schulzeit</span></h4>
              </div></a>
            </div>

            <div class="col-sm">
              <a href="hangman/hangman.html"><div class="containerCenter">
                <h4 class="center">Hangman<br><span class="aside">Aus meiner Schulzeit</span></h4>
              </div></a>
            </div>



          </div>

          <div class="row edu">

            <div class="col-sm">
              <a href="spielcharts/index.php" target="_blank"><div class="containerCenter">
                <h4 class="center">Spiel Charts<br><span class="aside">PHP/MYSQL Playground</span></h4>
              </div></a>
            </div>

            <div class="col-sm">
              <a href="abrechnung_neu/index.php" target="_blank"><div class="containerCenter">
                <h4 class="center">Abrechnung, Jacqueline's Kunden<br><span class="aside">Vor meiner Schulzeit</span></h4>
              </div></a>
            </div>



          </div>

        </div>
      </div>
    </div>


    <div id="kontakt" class="container-fluid extraMarg">
      <div class="container">
        <h2>Kontakt</h2>
        <p class="zitat">"Wer nicht neugierig ist, erfährt nichts." <br> <span>-Johann Wolfgang von Goethe</span> </p>
        <div class="container">
          <div class="row edu">
            <div class="col-sm">
              <p>Jacquelie Motzer<br>Sonnenböhlstrasse 17<br>9100 Herisau<br>078 944 22 72<br><a href="mailto: jm@jmotzer.ch">jm@jmotzer.ch</a></p>
            </div>

          </div>
        </div>
      </div>
    </div>



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
</body>
</html>
