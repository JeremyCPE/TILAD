<?php

require_once 'controller/dataController.php' ;
/**
	Routeur de base
	Mettre à jour la map mapTpl pour l'ajout d'une nouvelle vue
	Vous pouvez également créer d'autres classes spécifiant chaque routage particulier 
	ou plus simplement mais moins proprement commencer par gérer ici toutes les routes
*/

class Router
{
	private $smarty = null;
	private $action = "";
	const mapTpl = array(
		"test" => "templates/exemple.tpl",
		"recherche" => "templates/recherche.tpl",
		"meridien" => "templates/meridien.tpl"
	);
	
	function __construct($smarty,$action ){
		$this->smarty = $smarty;
		if(isset(Router::mapTpl[$action])){
				$this->action = $action;
		}
	}
	
	function getTpl(){
		$ret = "templates/defaut.tpl";
		if($this->action!=""){
			$ret = Router::mapTpl[$this->action];
			$this->todo();
		}
		if($this-> action="pathologie")
		{
			$this->smarty->assign("Test","Tsssst");
		}
		if($this-> action="recherche")
		{
			$this->getRecherche();
		}
		if($this-> action="meridien")
		{
			$this->getMeridien();
		}
		return $ret;
	}
	
	function todo(){

		$this->smarty->assign("userFirstName",get_current_user());
		$this->smarty->assign("patho","test pathologies");
		
	}

	function getRecherche()
	{
		$this->smarty->assign("arrayPatho",rechercheController::chercheAll());

	}

	function getMeridien()
	{
		$this->smarty->assign("arrayMeridien",meridienController::getAllMeridiens());
	}
}

?>
