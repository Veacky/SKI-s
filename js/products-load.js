var val;

$(document).ready(function(){


// --------------- choice ajax ::

  $(".brand-choice").click(function(){

    // get the value id of current selected item
    val = $(this).attr('id');
	  console.log(val);

    //send ajax request
    $.ajax({
      url: "products.php",
      type: "get", //send it through get method
      data:{name_brand: val},
      success: function(response) {
        console.log( "Got response: " + response );
        displayData(response);
      },
      error: function(xhr) {
       alert("something went wrong");
      }
    });
  });

  $(".cat-choice").click(function(){

    // get the value id of current selected item
    val = $(this).attr('id');
	  console.log(val);

    // send ajax request
    $.ajax({
      url: "products.php",
      type: "get", //send it through get method
      data:{name_cat: val},
      success: function(response) {
        console.log( "Got response: " + response );
        displayData(response);
      },
      error: function(xhr) {
       alert("something went wrong");
      }
    });
  });




// --------------- favoris ajax ::

  $(document).on('click', '.addFav', function(){

    // get the value id of current selected item
    val = $(this).closest('.product').attr('id');
	  console.log(val + " add");

    // send ajax request
    $.ajax({
      url: "fav.php",
      type: "get", //send it through get method
      data:{addFav: val},
      success: function(response) {
        console.log( "Got response: " + response );
      },
      error: function(xhr) {
       alert("something went wrong");
      }
    });
    $(this).children('span').toggleClass("glyphicon glyphicon-star-empty");
    $(this).children('span').toggleClass("glyphicon glyphicon-star");
    $(this).toggleClass("delFav");
    $(this).toggleClass("addFav");
  });


  $(document).on('click', '.delFav', function(){

    // get the value id of current selected item
    val = $(this).closest('.product').attr('id');
    console.log(val + " del");

    // send ajax request
    $.ajax({
      url: "fav.php",
      type: "get", //send it through get method
      data:{delFav: val},
      success: function(response) {
        console.log( "Got response: " + response );
      },
      error: function(xhr) {
       alert("something went wrong");
      }
    });
    $(this).children('span').toggleClass("glyphicon glyphicon-star");
    $(this).children('span').toggleClass("glyphicon glyphicon-star-empty");
    $(this).toggleClass("addFav");
    $(this).toggleClass("delFav");

  });

});





function displayData(data){
  $('.container.products').empty();
  $('.container.products').append('<div class="row content-title"><h2>Resultat pour ' + val + ' :</2></div><div class="row products"></div>');
	data = JSON.parse(data);
  console.log(data);
  $.each(data, function(i, item) {
    $(".row.products").append('<div class="col-sm-6 col-md-4"><div class="thumbnail product" id="' + data[i].id_ski + '"><!-- <img class="product-image" src="img/..." alt="Image du ski"> -->  <div class="caption">  <h3>'+ data[i].model + ' <small><span class="glyphicon glyphicon-minus"></span> ' + data[i].brand + '</small></h3><p><!--Description du ski--><br></p><p class="price inline"><b>' + data[i].price + '€</b></p>  <p class="boutons inline"><a href="product.php?id=' + data[i].id_ski + '" class="btn btn-default pull-right" role="button"><span class="glyphicon glyphicon-menu-right"></span> Consulter</a>   <button title="' + data[i].favTitle + '" class="btn btn-default pull-right ' + data[i].favClass + '" role="button"><span class="glyphicon ' + data[i].favGlyphicon + '"></span></button></p></div></div></div>');
  });
}
