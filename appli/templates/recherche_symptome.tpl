	{include file='header.tpl'}

	<body>
	{include file='nav.tpl'}
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

		{if isset($arraySympFctPatho)}
		<form>
			{include file='symptome_fctPatho.tpl'}
		</form>
		{/if}

		{include file='symptome.tpl'}

	</body>
	{include file='footer.tpl'}
</html>
