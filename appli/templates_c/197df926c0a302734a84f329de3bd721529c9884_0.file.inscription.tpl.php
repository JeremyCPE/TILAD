<?php
/* Smarty version 3.1.33, created on 2019-10-04 10:06:13
  from 'C:\wamp64\www\appli\templates\inscription.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d971995d87ac4_13171512',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '197df926c0a302734a84f329de3bd721529c9884' => 
    array (
      0 => 'C:\\wamp64\\www\\appli\\templates\\inscription.tpl',
      1 => 1570183566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d971995d87ac4_13171512 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Inscription</title>
		<meta name="description" content="whatever"/>
		<link href="styles/style.css" rel="stylesheet" type="text/css"/>
		<?php echo '<script'; ?>
 type="text/javascript" src="js/pathos.js" charset="utf-8"><?php echo '</script'; ?>
>
</head>

	<header>
		<h1>Inscription</h1>
	</header>

	<body>
	<div id="title"><h1>S'inscrire</h1></div>
	
			<form action="inscription.php" method="POST">
				Pseudo:<br>
				<input type="pseudo" name="pseudo"  title="Pseudo" placeholder="Pseudo" required><br>
				Mot de passe:<br>
				<input type="password" name="password" pattern=".{6,}" title="Au moins six caractères" placeholder="Mot de passe" required><br>
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
				<input type="submit" name="Confirmer">

			</form>
		</body>
</html>
<?php }
}
