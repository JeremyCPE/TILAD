<div class="">
    <ul>
        {foreach from=$arraySymptome item=symptome}
            <li><p>{$symptome.name} : {$symptome.desc}</p></li>
        {foreachelse}
            <p>Aucun élément n'a été trouvé dans la recherche</p>
        {/foreach}
    </ul>
</div>
