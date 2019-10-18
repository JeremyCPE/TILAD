

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Inscription</title>
		<meta name="description" content="whatever"/>
		<link href="styles/style.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="js/pathos.js" charset="utf-8"></script>
</head>

	<header>
		<h1>Inscription</h1>
	</header>

	<body>
<<<<<<< Updated upstream
	<div id="title"><h1>S'inscrire</h1></div>

	{literal}
=======
	<div id="title"><h2>S'inscrire</h2></div>
</form>
{if isset($smarty.post.pseudo) && isset($smarty.post.password)}
	{if $stateRegister == false}
<p> Le pseudo {$smarty.post.pseudo} est déjà utilisé </p>
	{/if}
	{/if}
{if $stateRegister == true}
<p> Inscription terminée {$smarty.post.pseudo} ! </p>
<p> Cliquez <a href="http://localhost/appli/?action=accueil"> ici </a> pour revenir à la page d'accueil </p>
{else}

{literal}
>>>>>>> Stashed changes
			<form action="index.php?action=register" method="POST">
				Pseudo:<br>
				<input type="pseudo" name="pseudo"  title="Pseudo" placeholder="Pseudo" required><br>
				Mot de passe:<br>
				<input type="password" name="password" pattern=".{6,}" title="Au moins six caractères" placeholder="Mot de passe" required><br>
<<<<<<< Updated upstream
=======
				Nom de Famille<br>
				<input title="Nom" type="text" name="surname"  placeholder="Nom" required><br>
				Prenom<br>
				<input title="Prenom" type="text" name="name"  placeholder="Prenom" required><br>
				Adresse<br>
				<input title="Adresse" type="text" name="address" required><br>
>>>>>>> Stashed changes
				<input type="submit" name="Confirmer">
				<label>Se souvenir de moi ?</label><input type="checkbox" name="souvenir" /><br />
<!--
				Nom:<br>
				<input title="Nom" type="text" name="name"  placeholder="Nom" required><br>
				Prenom<br>
				<input title="Prenom" type="text" name="name"  placeholder="Prenom" required><br>
				Adresse email :<br>
				<input title ="mail" type="email" name="mail"  placeholder="blblabla@mail.com" required><br>
				N° téléphone :<br>
				<input title="Telephone" type="tel" name="tel" pattern="[0-9]{10}" placeholder="0123456789" required><br>
				Adresse<br>
				<input title="Adresse" type="text" name="address" required><br>
				Date de naissance<br>
				<input type="date" pattern="\d{1,2}/\d{1,2}/\d{4}" class="datepicker" name="date" value="" /><br>

			-->
{/literal}

			</form>
			{if isset($smarty.post.pseudo) && isset($smarty.post.password)}

			{assign var=pseudo value={$smarty.post.pseudo} scope=global}
			{assign var=password value={$smarty.post.password} scope=global}
			{assign var={$smarty.cookies.pseudo}  value={$smarty.post.pseudo} scope=global}
			<p> Inscription terminée {$smarty.post.pseudo} !</p>
			<p> Cliquez <a href="http://localhost/appli/"> ici </a> pour revenir à la page d'accueil </p>

			{/if}
			<script>
			if (isset($_POST['souvenir']))
		 {
			 $expire = time() + 365*24*3600;
			 setcookie('pseudo', $_SESSION['pseudo'], $expire);
		 }
			</script>
		</body>
</html>
