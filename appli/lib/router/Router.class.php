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
		"pathologie" => "templates/pathologie.tpl",
		"meridien" => "templates/meridien.tpl",
		"symptome" => "templates/symptome.tpl",
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
		if($this-> action="test")
		{
			$this->smarty->assign("Test","Tsssst");
		}
		if($this-> action="pathologie")
		{
			$this->getPatho();
		}
		if($this-> action="meridien")
		{
			$this->getMeridien();
		}
		if($this-> action="symptome")
		{
			$this->getSymptome();
		}
		return $ret;
	}
	
	function todo(){

		$this->smarty->assign("userFirstName",get_current_user());
		$this->smarty->assign("patho","test pathologies");
		
	}

	function getPatho()
	{
		$this->smarty->assign("arrayPatho",pathoController::getAllPatho());

	}

	function getMeridien()
	{
		$this->smarty->assign("arrayMeridien",meridienController::getAllMeridiens());
	}

	function getSymptome()
	{
		$this->smarty->assign("arraySymptome",symptomeController::getSymptome());
	}
}

?>
