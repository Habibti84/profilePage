var counter = 0;
var winnerX = 0;
var winnerY = 0;
var tds = document.getElementsByClassName("colGame");
var elem;
var chosenEl;
var winner = "";

window.onload = function(e) {

  //Funktion, die auf geklicktes Element der Klasse "colGame" aufgerufen wird
  var myFunction = function() {
    elem = event.target;
    chosenEl = elem.innerHTML;

    //gerade Zahl, Spieler X ist an der Reihe, ungerade Zahl, Spieler Y ist an der Reihe
    if(counter % 2 == 0){

      //Funktion mit Parameter für Spieler X, zum setzen des Feldes, mit integrierter Funktion zum überprüfen auf einen Gewinner
      setField("x");
    }

    else {
      //Funktion mit Parameter für Spieler X, zum setzen des Feldes, mit integrierter Funktion zum überprüfen auf einen Gewinner
      setField("o");
    }
  }
  //Auf alle Elemente mit der entsprechenden Klasse wird geloopt und für das angeklickte, die Funktion aufgerufen
  var clickDivs = document.getElementsByClassName('colGame');
  for(var x=0; x<clickDivs.length; x++) {

    clickDivs[x].onclick = myFunction;
  }

  document.getElementById('empty').addEventListener("click", empty);
}

//checkt ob 1 Spieler gewonnen hat
function check(spieler) {

  //Gewinner ermitteln
  for(var i = 0; i < 3; i++) {

    //senkrecht
    if(tds[0 + i].id == spieler
      && tds[0 + i].id == tds[3 + i].id
      && tds[3 + i].id == tds[6 + i].id) {

        //we have a winner!
        winner = tds[0 + i].id;
        tds[0 + i].style.color = "#4c837a";
        tds[3 + i].style.color = "#4c837a";
        tds[6 + i].style.color = "#4c837a";
      }
      //waagrecht
      else if(tds[i * 3].id == spieler
        && tds[i * 3].id == tds[i * 3 + 1].id
        && tds[i * 3 + 1].id == tds[i * 3 + 2].id) {

          //we have a winner!
          winner = tds[i * 3].id;
          tds[i * 3].style.color = "#4c837a";
          tds[i * 3 + 1].style.color = "#4c837a";
          tds[i * 3 + 2].style.color = "#4c837a";
        }

        //diagonale links nach rechts
        else if(tds[0].id == spieler
          && tds[0].id == tds[4].id
          && tds[4].id == tds[8].id) {

            winner = tds[0].id;
            tds[0].style.color = "#4c837a";
            tds[4].style.color = "#4c837a";
            tds[8].style.color = "#4c837a";
          }

          //diagonale rechts nach links
          else if (tds[2].id == spieler
            && tds[2].id == tds[4].id
            && tds[4].id == tds[6].id) {

              winner = tds[2].id;
              tds[2].style.color = "#4c837a";
              tds[4].style.color = "#4c837a";
              tds[6].style.color = "#4c837a";
            }
          }

          if(winner == "x") {
            winnerX++;
            document.getElementById('player1').innerHTML = winnerX;
            document.getElementById('winner').innerHTML = "Spieler X hat gewonnen!";
            blockFields();
          }

          else if (winner == "o") {
            winnerY++;
            document.getElementById('player2').innerHTML = winnerY;
            document.getElementById('winner').innerHTML = "Spieler O hat gewonnen!";
            blockFields();
          }

          else if(counter == 8) {
            document.getElementById('winner').innerHTML = "Unentschieden!";
          }
        }

        //Feld über Button leeren
        var empty = function emptyFields() {
          for(var x = 0; x < tds.length; x++) {
            tds[x].innerHTML = 0;
            tds[x].style.color = "#f7f6ed";
            tds[x].id = "";
            winner = "";
            counter = 0;
            document.getElementById('winner').innerHTML = "";
          }
        }

        //Inhalt überprüfen, sichtbar machen und auf x/y stellen und das Element mit einer ID kennzeichnen
        //Funktion aufrufen um auf gewinner zu prüfen
        function setField(player) {

          if(chosenEl == 0) {
            elem.innerHTML = player;
            elem.style.color = "#3f4139";
            elem.id = player;
            check(player);
            counter++;
          }
        }

        //blockiert bei einem Gewinner alle noch freien Felder
        function blockFields() {
          if(winner != "") {
            for(var x = 0; x < tds.length; x++) {
              if(tds[x].innerHTML == 0) {
                tds[x].innerHTML = winner;
              }
            }
          }
        }
