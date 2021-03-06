<?php
require_once('smarty-master/libs/Smarty.class.php');
require_once('db.php');

$smarty = new Smarty();
$smarty->template_dir = 'views';
$smarty->compile_dir = 'tmp';



$stmt = $db->query('SELECT * FROM skis');
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

shuffle($results);
$suggest = array();
for ($i=0; $i <3; $i++) {
  $suggest[] = $results[$i];
}

foreach ($suggest as $k => $s) {
   if($s["fav"] == 1){
     $suggest[$k]["favTitle"] = "Supprimer des favoris";
     $suggest[$k]["favClass"] = "delFav";
     $suggest[$k]["favGlyphicon"] = "glyphicon-star";
   }
   else{
     $suggest[$k]["favTitle"] = "Ajouter aux favoris";
     $suggest[$k]["favClass"] = "addFav";
     $suggest[$k]["favGlyphicon"] = "glyphicon-star-empty";
   }
}

$smarty->assign("suggest", $suggest);


//derniere ligne :
$smarty->display('header.html');
$smarty->display('index.html');
$smarty->display('footer.html');
