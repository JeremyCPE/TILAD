<?php

/**
* 
*/
require 'lib/smarty-3.1.33/libs/Smarty.class.php';
require 'lib/router/Router.class.php';
require 'lib/checkers/checkers.php';

$smarty = new Smarty();
//$smarty->force_compile = true;
$smarty->debugging = false;
$smarty->caching = true;//mettre à true pour la production; attention aux droits d'écriture sur le serveur pour le répertoire de cache!
$smarty->cache_lifetime = 0;//120

$action = "";
$api = false;
if(isset($_GET["action"]) && check($_GET["action"],"chaineAlpha")==1){
	$action = $_GET['action'];
}

if(isset($_GET["api"]) && check($_GET["api"],"chaineAlpha")==1){
	$action = $_GET['api'];
	$api = true;
}

$router = new Router($smarty,$action);

if ($api)
{
	$result =	$router->DisplayApi($action);
	echo $result;
}
else
{
	$tpl = $router->getTpl();
	$smarty->display($tpl);
}

?>
