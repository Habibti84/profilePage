var w = window.innerHeight;
console.log("windowheight: " + w);


window.addEventListener('load', function() {


  var elems = document.getElementsByClassName('jsContainer');

  for(var y = 0; y < elems.length; y++) {
    elems[y].style.height = w + "px";

  }


  window.addEventListener('scroll', function() {
    var lastKnownPos = window.scrollY;
    console.log(lastKnownPos);
    var header = document.getElementById('first');
    if(lastKnownPos >= w) {
      header.classList.add('fix');
    }

    else {
      header.classList.remove('fix');
    }


  })






});


$(document).ready(function(){

//beim Laden der Seite nach oben springen
$(this).scrollTop(0);



  $('#btnToggle').click(function(){

      $('#navbarNav').toggle();

  });

  $('li.nav-item').click(function(){
    $('#navbarNav').hide();

  });

  //Jeden Container mindest. windowsheight
  $('.extraMarg').each(function() {
    console.log("This height: " + $(this).height());
    if($(this).height() < w) {
      $(this).height(w);
    }
  });


})






/*window.addEventListener('scroll', function() {
var elems = document.getElementsByClassName('mark');
var navE = document.getElementsByClassName('nav-item');
console.log("elems: " + elems.length);
console.log("navE: " + navE.length);
for(var x = 0; x < elems.length; x++) {
var eId = elems[x].id;
console.log(eId);

var nId = navE[x].id;
console.log("nId: " + nId);
switch(eId) {
case 'profil':
nId.classList.add('background');
case 'ziele':
nId.classList.add('background');
}
}
})*/

//jQuery um bei Navbar aktiver bereich zu markieren
/*$(document).ready(function() {
  $(document).scroll(function() {
    console.log("Drin");
    var elTop = $('#profil').offset().top;
    var elHeight = $('#profil').outerHeight();





  })


})*/
