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
					<li><a href="http://acupuncture.mascret.fr/index.php?action=accueil">Accueil</a></li>
					<li><a href="http://acupuncture.mascret.fr/index.php?action=truc">Truc</a></li>
					<li><a href="http://acupuncture.mascret.fr/index.php?action=pathos">pathologies</a></li>
				</ul>
			</div>
		</aside>
		
		<div id="recap">
			<p>Bienvenue {$userFirstName}!</p>
			<form action="index.php?action=logout" method="post">
				<input type="submit" name="logout" value="Déconnexion"/>
			</form>
		</div>
		
		<h1>Pathologies en acupuncture</h1>
		<form action="" method="post">
			<fieldset id="fs_mer">
				<legend>Méridiens et Merveilleux Vaisseaux</legend>
				
				<div class="inputMer">
					<ul>
						
						<li><input type="checkbox" name="f_P" id="f_P" checked="checked"/><label for="f_P">Poumon</label></li>
						
						<li><input type="checkbox" name="f_GI" id="f_GI"/><label for="f_GI">Gros Intestin</label></li>
						
						<li><input type="checkbox" name="f_E" id="f_E"/><label for="f_E">Estomac</label></li>
						
						<li><input type="checkbox" name="f_Rte" id="f_Rte"/><label for="f_Rte">Rate/Pancréas</label></li>
						
					</ul>
				</div>
				
				<div class="inputMer">
					<ul>
						
						<li><input type="checkbox" name="f_C" id="f_C"/><label for="f_C">Cœur</label></li>
						
						<li><input type="checkbox" name="f_IG" id="f_IG"/><label for="f_IG">Intestin grêle</label></li>
						
						<li><input type="checkbox" name="f_V" id="f_V"/><label for="f_V">Vessie</label></li>
						
						<li><input type="checkbox" name="f_R" id="f_R"/><label for="f_R">Rein</label></li>
						
					</ul>
				</div>
				
				<div class="inputMer">
					<ul>
						
						<li><input type="checkbox" name="f_MC" id="f_MC"/><label for="f_MC">Maître du cœur</label></li>
						
						<li><input type="checkbox" name="f_TR" id="f_TR"/><label for="f_TR">Triple réchauffeur</label></li>
						
						<li><input type="checkbox" name="f_VB" id="f_VB"/><label for="f_VB">Vésicule Biliaire</label></li>
						
						<li><input type="checkbox" name="f_F" id="f_F"/><label for="f_F">Foie</label></li>
						
					</ul>
				</div>
				
				<div class="inputMer">
					<ul>
						
						<li><input type="checkbox" name="f_DM" id="f_DM"/><label for="f_DM">Du Mai</label></li>
						
						<li><input type="checkbox" name="f_RM" id="f_RM"/><label for="f_RM">Ren Mai</label></li>
						
						<li><input type="checkbox" name="f_ChM" id="f_ChM"/><label for="f_ChM">Chong Mai</label></li>
						
						<li><input type="checkbox" name="f_DaiM" id="f_DaiM"/><label for="f_DaiM">Dai Mai</label></li>
						
					</ul>
				</div>
				
				<div class="inputMer">
					<ul>
						
						<li><input type="checkbox" name="f_+QM" id="f_+QM"/><label for="f_+QM">Yang Qiao Mai</label></li>
						
						<li><input type="checkbox" name="f_-QM" id="f_-QM"/><label for="f_-QM">Yin Qiao Mai</label></li>
						
						<li><input type="checkbox" name="f_+WM" id="f_+WM"/><label for="f_+WM">Yang Wei Mai</label></li>
						
						<li><input type="checkbox" name="f_-WM" id="f_-WM"/><label for="f_-WM">Yin Wei Mai</label></li>
						
					</ul>
				</div>
				
				<input type="button" value="Tout cocher" onclick="this.value=check('fs_mer')">
				</fieldset>
				
				<fieldset id="fs_patho" class="inputPatho">
					<legend>Pathologies</legend>
					<div class="inputPatho">
						
						<input type="checkbox" name="fp_me" id="fp_me" checked="checked"/><label for="fp_me">Méridien externe</label>
						
						<input type="checkbox" name="fp_mi" id="fp_mi"/><label for="fp_mi">Méridien interne</label>
						
						<input type="checkbox" name="fp_tf" id="fp_tf" checked="checked"/><label for="fp_tf">Zang/Fu</label>
						
						<input type="checkbox" name="fp_l" id="fp_l"/><label for="fp_l">Voie Luo</label>
						
						<input type="checkbox" name="fp_j" id="fp_j"/><label for="fp_j">Jin Jing</label>
						
						<input type="checkbox" name="fp_mv" id="fp_mv"/><label for="fp_mv">Merveilleux Vaisseaux</label>
						
					</div>
				</fieldset>
				
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
						<p class="dev">Mode recherche</p>
						<p class="dev">En cours de développement</p>
					</div>
				</fieldset>
				<h3>Poumon</h3><h4>méridien du poumon externe</h4><ul><li>Battement des ailes du nez</li><li>Dessèchement des phanères</li><li>Douleur lancinante au creux sus-claviculaire</li><li>Pouls superficiel</li><li>Symptômes thoraco-pulmonaires (toux continuelle, dyspnée, gonflement thoracique)</li><li>Transpiration avec pollakiurie et diminution de l'appétit</li><li>Vue floue dans les cas graves</li></ul><h4>zang poumon plein</h4><ul><li>Épaule et dos douloureux</li><li>Nausée</li><li>Plénitude douloureuse de la poitrine (emphysème) et des côtes entraînant dyspnée et toux avec mucosités purulentes</li></ul><h4>zang poumon vide</h4><ul><li>Alopécie</li><li>Asthénie et amaigrissement</li><li>Fièvre et transpiration brutale et intermittente</li><li>Gorge et peau sèches</li><li>Respiration faible</li><li>Toux avec envie d'uriner</li><li>Visage pâle et joues rouges</li><li>Voix faible</li></ul><h4>zang poumon chaud</h4><ul><li>Constipation, selles dures</li><li>Douleur thoracique aiguë comme un coup de poignard</li><li>Dysurie et hématurie</li><li>Épistaxis</li><li>Gorge irritée</li><li>Soif</li><li>Toux avec hémoptysie</li><li>Visage fiévreux</li></ul><h4>zang poumon froid</h4><ul><li>Absence de soif</li><li>Douleur thoracique sourde, dyspnée et toux</li></ul>
			</form>
			<div id="footer">
				<p>Licence CC by-nc-sa - Bruno Mascret</p>
			</div>
		</div>
		
	</body>
</html>
