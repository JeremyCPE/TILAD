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
		"accueil" => "templates/accueil.tpl",
		"recherche_patho" =>"template/recherche_patho.tpl",
		"recherche_symptome" => "template/recherche_symptome",
		"patho_prcp" => "templates/patho_prcp.tpl",
		"pathologie" => "templates/pathologie.tpl",
		"meridien" => "templates/meridien.tpl",
		"symptome" => "templates/symptome.tpl",
		"keywords"	=> "templates/keywords.tpl",
		"login" => "templates/connexion.tpl",
		"logout" => "templates/deconnexion.tpl",
		"register" => "templates/inscription.tpl"
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
		if($this-> action="accueil")
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
			$symptome="test";
			$this->getSymptome($symptome);
		}
		if($this-> action="keywords")
		{
			$keywords="abdomen";
			$this->searchKeywords($keywords);
		}
		if($this-> action="login")
		{
			$this->getLogin();
		}
		if($this-> action="register")
		{
			$this->register();
		}
		return $ret;
	}

	function todo(){

		$this->smarty->assign("userFirstName",get_current_user());
		$this->smarty->assign("patho","test pathologies");

	}

	function getPatho()
	{
		$this->smarty->assign("arrayPatho",pathoController::getAllTypePatho());
	}

	function getTypePatho()
	{
		$type = array("me","mi");
		$this->smarty->assign("arrayPatho",pathoController::getPathoEnFonctionType($type));
	}

	function getMeridien()
	{
		$this->smarty->assign("arrayMeridien",meridienController::getAllMeridiens());
	}

	function getSymptome($symp)
	{
		$this->smarty->assign("arraySymptome",symptomeController::getSymptome($symp));
	}

	function searchKeywords($keywords)
	{
		$this->smarty->assign("arrayKeywords",symptomeController::searchKeywords($keywords));
	}
	function getLogin()
	{
		$this->smarty->assign("arrayLogin",logController::getLogin());
	}

	function register()
	{
		$whole_page = $this->smarty->fetch('templates/inscription.tpl');
		$pseudo =	$this->smarty->getTemplateVars('pseudo');
		$password =	$this->smarty->getTemplateVars('password');
		$this->smarty->assign("stateRegister",logController::register($pseudo,$password));
	}
}

?>
