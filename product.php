<?php
require_once('smarty-master/libs/Smarty.class.php');
require_once('db.php');

$smarty = new Smarty();
$smarty->template_dir = 'views';
$smarty->compile_dir = 'tmp';

if(isset($_GET["id"])){
  $id_ski = $_GET["id"];
  $stmt = $db->query('SELECT * FROM skis s JOIN category c ON s.category = c.id_category where id_ski="'.$id_ski.'"');
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  if (count($result) == 0) {
    header('Location: brands.php');
  }
  else {
     if($result[0]["fav"] == 1){
       $result[0]["favTitle"] = "Supprimer des favoris";
       $result[0]["favClass"] = "delFav";
       $result[0]["favGlyphicon"] = "glyphicon-star";
     }
     else{
       $result[0]["favTitle"] = "Ajouter aux favoris";
       $result[0]["favClass"] = "addFav";
       $result[0]["favGlyphicon"] = "glyphicon-star-empty";
     }
   }
  $smarty->assign("p", $result[0]);
  // var_dump($result[0]);
}
else{
  header('Location: brands.php');
}

//derniere ligne :
$smarty->display('header.html');
$smarty->display('product.html');
$smarty->display('footer.html');
