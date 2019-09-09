<?php

/**
* 
*/
require 'lib/smarty-3.1.33/libs/Smarty.class.php';
require 'lib/router/Router.class.php';
require 'lib/checkers/checkers.php';

$smarty = new Smarty();
//$smarty->force_compile = true;
$smarty->debugging = true;
$smarty->caching = false;//mettre à true pour la production; attention aux droits d'écriture sur le serveur pour le répertoire de cache!
$smarty->cache_lifetime = 0;//120

$action = "";
if(isset($_GET["action"]) && check($_GET["action"],"chaineAlpha")==1){
	$action = $_GET['action'];
}

$router = new Router($smarty,$action);

$tpl = $router->getTpl();

$smarty->display($tpl);
?>
