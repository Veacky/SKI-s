<?php
require_once('smarty-master/libs/Smarty.class.php');
require_once('db.php');

$smarty = new Smarty();
$smarty->template_dir = 'views';
$smarty->compile_dir = 'tmp';


$stmt = $db->query('SELECT DISTINCT brand FROM skis');
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
$smarty->assign("brands",$results);


//derniere ligne :
$smarty->display('header.html');
$smarty->display('brands.html');
$smarty->display('footer.html');
