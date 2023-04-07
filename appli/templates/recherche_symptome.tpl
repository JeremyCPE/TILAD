	{include file='header.tpl'}

	<body>
	{include file='nav.tpl'}
		<fieldset>
				<legend>Recherche des symptomes par mots-clés</legend>

				<div class="actionPatho">
					<p>Mode recherche</p>
					<form action= "" method="POST">
						<datalist id="categoryname">
							{foreach from=$arrayKeys item=keywords}
								 <option value="{$keywords.name}"/>
							{/foreach}
							</datalist>
							<input type="text" name="keywords" id="pcategory" autocomplete="off" list="categoryname">
							 <input type="submit" value="Rechercher">
							 </form>
				</div>
		</fieldset>
		
		{include file='symptome.tpl'}

	</body>
	{include file='footer.tpl'}
</html>
