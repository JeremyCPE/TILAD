{include file='header.tpl'}

<body>
			<fieldset>
					<legend>Recherche des symptomes par mots-clé</legend>

					<div class="actionPatho">
						<p>Mode recherche</p>
						<form name=recherche action="index.php?action=keywords" method=POST>
							<input type="text" name="Entrez le mot clé"/>
							<input type="submit" value="Rechercher"/>
						</form>
					</div>	
			</fieldset>

			{include file='symptome.tpl'}

</body>
{include file='footer.tpl'}
</html>
