$(document).ready(function(){

  //resize les divs pour les mettre toutes a la taille de la plus grande a l'origine
  heightDivs("brand-choice");
  heightDivs("cat-choice");
  $( window ).resize(function() {
    heightDivs("cat-choice");
    heightDivs("brand-choice");
  });


  //Met l'image correspondente en background de la div
  backgroundDivs("cat-choice");

  //change effet suivant position du scroll
  $(window).scroll(function (event) {
    var scroll = $(window).scrollTop();
    if (scroll >= 0 && scroll <= 50) {
      var opac = (1-scroll/100).toString();
      $(".navbar").css("background-color", "rgba(0,0,0," + opac + ")");
    }
    else if (scroll > 50) {
      $(".navbar").css("background-color", "rgba(0,0,0,0.5)");
    }
});


  //div slide from bottom on hover the parent
  $('.cat-choice').mouseleave(function() {
    var caption = "#" + $(this).attr('id') + " .caption";
    var hauteur = $(caption).height() - $(caption + " h3").height();
    $(caption).addClass('isDown', 1000, 'easeOutBounce');
    $(caption).removeClass('isUp');
  });
  $('.cat-choice').mouseenter(function() {
    var caption = "#" + $(this).attr('id') + " .caption";
    var hauteur = $(caption).height() - $(caption + " h3").height();
    $(caption).addClass('isUp', 1000, 'easeOutBounce');
    $(caption).removeClass('isDown');
  });

});




function heightDivs(classe){
  var max = 0;
  var caption;
  var hauteur;
  $( "."+classe ).each(function( i ) {
    caption = "#" + $(this).attr('id') + " .caption";
    hauteur = $(caption).height() - $(caption + " h3").height();
    $(caption).css('bottom', - hauteur +3);
      $(this).css("height","");
      if ( $(this).height() > max  ) {
        max = $(this).height()+10; //?????????????? WTF ?!
      }
      else {
        $(this).css("height", max);
      }
  });
}

function backgroundDivs(classe){
  var max = 0;
  $( "."+classe ).each(function( i ) {
    $(this).css('background','url("img/cat/' + $(this).attr('id') + '.jpg") no-repeat center center');
    $(this).css('background-size','cover');
  });
}
