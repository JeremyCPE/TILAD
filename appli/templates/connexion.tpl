<div class="loginList">
       <ul>
        {foreach from=$arrayLogin item=login}
            <p> {$login.prenom} {$login.nom} {$login.pseudo}  </p>
        {/foreach}
    </ul>
</div>
