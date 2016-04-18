<?php
require_once("db.php");

if(isset($_GET["addFav"])){
	$id = $_GET["addFav"];

	$query = ("UPDATE skis SET fav = 1 WHERE id_ski = :id");
  $req = $db->prepare($query);
  $req->execute(array(':id' => $id));
	echo "Ajoute aux favoris !";
}

if(isset($_GET["delFav"])){
	$id = $_GET["delFav"];

	$query = ("UPDATE skis SET fav = 0 WHERE id_ski = :id");
  $req = $db->prepare($query);
  $req->execute(array(':id' => $id));
	echo "Supprime des favoris !";
}
