<div class="">
       <ul>
        {foreach from=$arraySymptome item=symptome}
            <li><input type="checkbox" name="f{$symptome.code}" id="f{$symptome.code}" checked="checked"/><label for="f{$symptome.code}">{$symtome.desc}</label></li>
        {/foreach}
    </ul>
</div>