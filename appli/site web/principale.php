<?php
// On démarre la session AVANT d'écrire du code HTML
//session_start();

// On s'amuse à créer quelques variables de session dans $_SESSION
//$_SESSION['pseudo'] = "Test";
setcookie('pseudo', 'Test', time() + 365*24*3600, null, null, false, true);
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style.css">
		<title>Page principale</title>
    </head>
	
	<header>
            <h1>Page principale</h1>
    </header>
		
	<menu>
		<nav>
			<a href="accueil.php" id="active">Accueil</a>
			<a href="principale.php" id="active">Pathologies principales</a>
			<a href="filtre.php" id="active">Recherche par critères</a>
				<?php
if($_COOKIE['pseudo'] == NULL) {

	echo '<a href="connexion.php" id="active"> Se Connecter </a>';
}
else
{
	echo '<a href="principale.php" id="active"> Se Deconnecter </a>';
	setcookie('pseudo', '', time() - 3600, null, null, false, true);
}
?>
			</a>
		</nav>
	</menu>
	
    <body>
    	<p>
<?php
if($_COOKIE['pseudo'] != NULL) echo "<p>Bienvenue ".$_COOKIE['pseudo']." !</p>";
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=tp;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query("SELECT patho.desc D , symptome.desc E
FROM patho
INNER JOIN symptPatho ON patho.idP = symptPatho.idP
INNER JOIN symptome ON symptPatho.idS = symptome.idS
WHERE patho.desc like 'Pathologie%'
GROUP BY patho.desc");




echo "<table>
    <thead>
        <tr>
            <th>Categorie de pathologie</th>
			<th>Caracteristiques possibles</th>
			<th>Exemple</th>
        </tr>
    </thead>
	    <tbody>";

while ($donnees = $reponse->fetch())
{
	echo "<tr>";
	echo  "<td>".$donnees['D']."</td>";
	echo  "<td>".$donnees['E']."</td>";
	echo "</tr>";
}
echo "
		</tbody>
</table>";
$reponse->closeCursor();

?>
		</p>
	</body>
	
	<footer>
		<a> site sur l'acupuncture </a>
		<a> 5A IRC </a>
		<a> CPE </a>
		<a> 2019 </a>
	</footer>
</html>
