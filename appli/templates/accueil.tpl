{include file='header.tpl'}

<body>
{include file='nav.tpl'}
	<div id="content">
	</div>
	<h1>Pathologies en acupuncture</h1>
		<form action="" method="post">
			<fieldset id="fs_mer">
				<legend>Méridiens et Merveilleux Vaisseaux</legend>

				{include file='meridien.tpl'}

				<input type="button" value="Tout cocher" onclick="this.value=check('fs_mer')">
			</fieldset>

			{include file='pathologie.tpl'}

			</form>
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
					{if isset($smarty.cookies.pseudo)}
					<p>Mode recherche</p>
					<form name="recherche" action="index.php?action=keywords" method="POST">
						<input type="text" name="keyword"/>
						<input type="submit" value="Rechercher"/>
					</form>
					{else}
				<p>Connectez-vous pour accéder à cette fonctionnalité</p>
				<form name="recherche" action="index.php?action=keywords" method="POST">
						<input type="text" name="keyword" value="désactivée" disabled/>
						<input type="submit" value="Rechercher" disabled/>
				</form>
					{/if}
				</div>
			</fieldset>

			{include file='symptome.tpl'}

		</form>
{include file='footer.tpl'}
</body>

</html>
