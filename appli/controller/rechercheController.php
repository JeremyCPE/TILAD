<?php
require_once('lib/bd/bd.class.php');
    class rechercheController
    {
        public static function chercheAll()
        {
            $maBD = new BD();
            $resultat = $maBD->requete("SELECT `desc` FROM patho");
            return $resultat;
        }
    }
?>