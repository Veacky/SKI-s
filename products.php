<?php
require_once("db.php");

if(isset($_GET["name_brand"])){
	$name_brand = $_GET["name_brand"];

	$stmt = $db->query("SELECT * FROM skis WHERE brand = '".$name_brand."'");
	if($stmt !== false){
	    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

			foreach ($products as $k => $s) {
			   if($s["fav"] == 1){
			     $products[$k]["favTitle"] = "Supprimer des favoris";
			     $products[$k]["favClass"] = "delFav";
			     $products[$k]["favGlyphicon"] = "glyphicon-star";
			   }
			   else{
			     $products[$k]["favTitle"] = "Ajouter aux favoris";
			     $products[$k]["favClass"] = "addFav";
			     $products[$k]["favGlyphicon"] = "glyphicon-star-empty";
			   }
			}

	}
	// var_dump($products);
}

if(isset($_GET["name_cat"])){
	$name_cat = $_GET["name_cat"];
	$stmt = $db->query("SELECT s.id_ski, s.brand, s.model, s.category, s.price, s.fav FROM skis s JOIN category c ON c.id_category = s.category WHERE c.name = '".$name_cat."'");
	if($stmt !== false){
	    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

			foreach ($products as $k => $s) {
				 if($s["fav"] == 1){
					 $products[$k]["favTitle"] = "Supprimer des favoris";
					 $products[$k]["favClass"] = "delFav";
					 $products[$k]["favGlyphicon"] = "glyphicon-star";
				 }
				 else{
					 $products[$k]["favTitle"] = "Ajouter aux favoris";
					 $products[$k]["favClass"] = "addFav";
					 $products[$k]["favGlyphicon"] = "glyphicon-star-empty";
				 }
			}
	}
	  //var_dump($products);
}

echo json_encode($products);
