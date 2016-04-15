var val;

$(document).ready(function(){
  
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

});





function displayData(data){
  $('.sub-container').empty();
  $('.sub-container').append('<div class="row content-title"><h2>Resultat pour ' + val + ' :</2></div><div class="row products"></div>');
	data = JSON.parse(data);
  $.each(data, function(i, item) {
    $(".products").append('<div class="col-sm-6 col-md-4"><div class="thumbnail product"><!-- <img class="product-image" src="img/..." alt="Image du ski"> -->  <div class="caption">  <h3>'+ data[i].model + ' <small><span class="glyphicon glyphicon-minus"></span> ' + data[i].brand + '</small></h3><p>Description du ski</p><p class="price inline"><b>' + data[i].price + '€</b></p>  <p class="boutons inline"><a href="product.php?id=' + data[i].id_ski + '" class="btn btn-default pull-right" role="button"><span class="glyphicon glyphicon-menu-right"></span> Consulter</a></p></div></div></div>');
  });
}
