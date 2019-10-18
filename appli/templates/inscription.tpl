

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Inscription</title>
</head>
	<header>
		<h1>Inscription</h1>
	</header>
	<body>
	<div id="title"><h2>S'inscrire</h2></div>
</form>
{if isset($smarty.post.pseudo) && isset($smarty.post.password)}
	{if $stateRegister == false}
<p> Le pseudo {$smarty.post.pseudo} est déjà utilisé </p>
	{/if}
	{/if}
{if isset($stateRegister) && ($stateRegister == true)}
<p> Inscription terminée {$smarty.post.pseudo} ! </p>
<p> Cliquez <a href="http://localhost/appli/?action=accueil"> ici </a> pour revenir à la page d'accueil </p>
{else}
{literal}
			<form action="index.php?action=register" method="POST">
				Pseudo:<br>
				<input type="pseudo" name="pseudo"  title="Pseudo" placeholder="Pseudo" required><br>
				Mot de passe:<br>
				<input type="password" name="password" pattern=".{6,}" title="Au moins six caractères" placeholder="Mot de passe" required><br>
				Nom de Famille<br>
				<input title="Nom" type="text" name="surname"  placeholder="Nom" required><br>
				Prenom<br>
				<input title="Prenom" type="text" name="name"  placeholder="Prenom" required><br>
				Adresse<br>
				<input title="Adresse" type="text" name="address" required><br>
				<input type="submit" name="Confirmer">
			</form>
{/literal}
{/if}
<div id="title"><h2>Se Connecter</h2></div>

<div class="loginList">
{literal}

         <form action="index.php?action=login" method="POST">
   				Pseudo:<br>
   				<input type="pseudo" name="pseudoLog"  title="Pseudo" placeholder="Pseudo" required><br>
   				Mot de passe:<br>
   				<input type="password" name="passwordLog" placeholder="Mot de passe" required><br>
   				<br>
          <input type="submit" name="Confirmer">
{/literal}
{if isset($smarty.post.pseudoLog) && isset($smarty.post.passwordLog)}
{if isset($arrayLogin) && $arrayLogin == true}
  <p> Bonjour {$smarty.post.pseudoLog}, vous allez-bien aujourd'hui ? </p>
  <p> Cliquez <a href="http://localhost/appli/?action=accueil"> ici </a> pour revenir à la page d'accueil </p>
{else}
  <p> Mauvais nom d'utilsateur ou de mot de passe </p>
{/if}
{/if}
</div>
		</body>
</html>
