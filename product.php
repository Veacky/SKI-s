<?php
require_once('smarty-master/libs/Smarty.class.php');
require_once('db.php');

$smarty = new Smarty();
$smarty->template_dir = 'views';
$smarty->compile_dir = 'tmp';

if(isset($_GET["id"])){
  $id_ski = $_GET["id"];
  $stmt = $db->query('SELECT * FROM skis where id_ski="'.$id_ski.'"');
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $smarty->assign("product", $result);
  var_dump($result);
}
else{
  header('Location: brands.php');
}

//derniere ligne :
$smarty->display('header.html');
$smarty->display('product.html');
$smarty->display('footer.html');
