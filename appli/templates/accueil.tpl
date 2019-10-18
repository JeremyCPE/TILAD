<!--?xml version="1.0" encoding="UTF-8"?-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>{$title}</title>
		<meta name="description" content="whatever"/>
		<link href="styles/style.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="js/pathos.js" charset="utf-8"></script>
	</head>
	<body>
	<div id="content">
		<aside>
			<div id="menu">
				<ul>
					<li><a href="http://localhost/appli/?action=accueil">Accueil</a></li>
					<li><a href="http://localhost/appli/?action=recherche_patho">Recherche par pathologie</a></li>
					<li><a href="http://localhost/appli/?action=recherche_symptome">Recherche par symptome</a></li>
					<li><a href="http://localhost/appli/?action=patho_prcp">Pathologie principales</a></li>
				</ul>
			</div>
		</aside>

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

		<h1>Pathologies en acupuncture</h1>
		<form action="" method="post">
			<fieldset id="fs_mer">
				<legend>Méridiens et Merveilleux Vaisseaux</legend>

				{include file='meridien.tpl'}

				<input type="button" value="Tout cocher" onclick="this.value=check('fs_mer')">
				</fieldset>

				{include file='pathologie.tpl'}

				<fieldset>
					<legend>Que souhaitez-vous?</legend>

					<div class="actionPatho">
						<p>Mode consultation</p>
						<ul>
							<li><input type="submit" name="a_filtrer" value="Afficher les pathologies sélectionnées"/></li>
							<li><input type="submit" name="a_tout" value="Tout afficher"/></li>
						</ul>
					</div>
					<div class="actionPatho">
						<p>Mode recherche</p>
						<form name=recherche action="index.php?action=keywords" method=POST>
							<input type="text" name="Entrez le mot clé"/>
							<input type="submit" value="Rechercher"/>
						</form>
					
					</div>
				</fieldset>

				{include file='symptome.tpl'}

			</form>
			<div id="footer">
				<p>Licence CC by-nc-sa - Bruno Mascret</p>
			</div>
		</div>

	</body>
</html>
