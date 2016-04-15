<?php
require_once("db.php");

if(isset($_GET["name_brand"])){
	$name_brand = $_GET["name_brand"];

	$stmt = $db->query("SELECT * FROM skis WHERE brand = '".$name_brand."'");
	if($stmt !== false){
	    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	// var_dump($products);
}

if(isset($_GET["name_cat"])){
	$name_cat = $_GET["name_cat"];
	$stmt = $db->query("SELECT s.brand, s.model, s.category, s.price FROM skis s JOIN category c ON c.id_category = s.category WHERE c.name = '".$name_cat."'");
	if($stmt !== false){
	    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	  //var_dump($products);
}

echo json_encode($products);
