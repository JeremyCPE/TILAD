<!--?xml version="1.0" encoding="UTF-8"?-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>{$title}</title>
		<meta name="description" content="whatever"/>
		<link href="styles/style.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="js/pathos.js" charset="utf-8"></script>
		<aside>
			<div id="menu">
				<nav>
					<li><a href="http://localhost/appli/?action=accueil">Accueil</a></li>
					<li><a href="http://localhost/appli/?action=recherche_patho">Recherche par pathologie</a></li>
					<li><a href="http://localhost/appli/?action=recherche_symptome">Recherche par symptome</a></li>
					<li><a href="http://localhost/appli/?action=patho_prcp">Pathologie principales</a></li>
					{if isset($smarty.cookies.pseudo)}
					<li style="float:right"><a href="http://localhost/appli/?action=logout">Déconnexion</a></li>
					{else}
					<li style="float:right"><a href="http://localhost/appli/?action=register">Connexion/Inscription</a></li>
					{/if}
				<nav>
			</div>
		</aside>
<<<<<<< HEAD

		<div id="content">
		<div id="recap">
			{if isset($smarty.cookies.pseudo)}
			<p>Bienvenue {$smarty.cookies.pseudo} !</p>
			<form action="index.php?action=logout" method="post">
				<input type="submit" name="logout" value="Déconnexion"/>
			</form>
			{else}
			<p>Veuillez vous connecter ou vous inscrire pour acceder à toutes les fonctionnaliées</p>
			<form action="index.php?action=register" method="post">
				<input type="submit" name="register" value="Connexion"/>
			</form>
			{/if}
	</div>
	
	</head>
=======
	</head>
>>>>>>> 778d282d3f4c17200cf83452bb9a3a888b02316e
