<div class="loginList">
       <ul>
<<<<<<< Updated upstream
        {foreach from=$arrayLogin item=login}
            <p> {$login.prenom} {$login.nom} {$login.pseudo}  </p>
        {/foreach}
=======
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
{if $arrayLogin == true}
  <p> Bonjour {$smarty.post.pseudoLog}, vous allez-bien aujourd'hui ? </p>
  <p> Cliquez <a href="http://localhost/appli/?action=accueil"> ici </a> pour revenir à la page d'accueil </p>
>>>>>>> Stashed changes
    </ul>
{else}
  <p> Mauvais nom d'utilsateur ou de mot de passe </p>
{/if}
{/if}
</div>
