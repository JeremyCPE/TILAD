<fieldset id="fs_" class="inputPatho">
    <legend>Symptome</legend>
    <div class="inputPatho">
        {foreach from=$arraySympFctPatho item=patho}
           <input type="checkbox" name="fp_{$patho.type}" id="fp_{$patho.type}"/><label for="fp_{$patho.type}">{$patho.nom}</label>
        {/foreach}
    </div>
</fieldset>
