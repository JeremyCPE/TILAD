<?php

define("MapCheck",array(
	"chaineAlpha" => "/[a-zA-Z]+$/",
	"entier" => "/[1-9][0-9]*$/"
	//à compléter
									));

/**
	renvoie 0 si la chaine ne correspond pas à l'expression régulière permettant de vérifier qu'elle est conforme.
	Les expressions régulières sont stockée dans la map $mapCheck et identifiée par la clef $chaine passée en paramètre 
*/
function check($chaine, $clef){
	$ret = 0;
	if(isset(MapCheck[$clef])){//la clef existe bien dans la map
		$ret = preg_match(MapCheck[$clef],$chaine);
	}
	return $ret;
}
?>
