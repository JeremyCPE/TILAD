<div class="inputMer">
    <ul>
        {foreach from=$arrayMeridien item=meridien}
            <li><input class="meridienCheckbox" type="checkbox" name="f{$meridien.code}" id="f{$meridien.code}"/><label for="f{$meridien.code}">{$meridien.nom}</label></li>
        {/foreach}
    </ul>
</div>