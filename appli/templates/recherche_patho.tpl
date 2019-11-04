{include file='header.tpl'}

<body>
{include file='nav.tpl'}
	<h1>Pathologies en acupuncture</h1>

		<form action="" method="post">

			<fieldset id="fs_mer">
				<legend>Méridiens et Merveilleux Vaisseaux</legend>

				{include file='meridien.tpl'}

				<input type="button" value="Tout cocher" onclick="this.value=check('fs_mer')">
			</fieldset>

			{include file='pathologie.tpl'}

			<input type="submit" value="Rechercher" onclick="rechercher(event)">
		</form>

</body>
<table>
  <thead>
    <tr>
      <th> Description </th>
      <th> Type </th>
      <th> Meridien </th>
      <th> Element </th>
      <th> Yin/Yang </th>
    </tr>
  </thead>

  <tbody  id = 'searchResult'>

  </tbody>

</table>
<script type="text/javascript" src="js/pathos.js" charset="utf-8"></script>
{include file='footer.tpl'}
</html>
