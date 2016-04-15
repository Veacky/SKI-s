<?php
require_once('smarty-master/libs/Smarty.class.php');
require_once('db.php');

$smarty = new Smarty();
$smarty->template_dir = 'views';
$smarty->compile_dir = 'tmp';


$stmt = $db->query('SELECT * FROM category');
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
$smarty->assign("categories",$results);

//derniere ligne :
$smarty->display('header.html');
$smarty->display('categories.html');
$smarty->display('footer.html');


