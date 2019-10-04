<?php
require_once('lib/bd/bd.class.php');
    
    // récupèrer toute les pathologies
    class pathoController
    {
        public static function getAllPatho()
        {
            $maBD = new BD();
            $resultat = $maBD->requete("SELECT `desc` FROM patho");
            return $resultat;
        }
    }

    // recupèrer tout les méridiens
    class meridienController
    {
        public static function getAllMeridiens()
        {
            $maBD = new BD();
            $resultat = $maBD->requete("SELECT `nom`,`code` FROM meridien");
            return $resultat;
        }
    }

    //recupèrer les symptones en fonction des patho

    class symptomeController
    {
        public static function getSymptome()
        {
            $maBD = new BD();
            $resultat = $maBD->requete("
                    SELECT symptome.desc FROM symptPatho 
                    inner join symptome on symptPatho.idS = symptome.idS
                    inner join patho on symptPatho.idP = patho.idP
                    WHERE patho.desc ='zang poumon froid' ");
            return $resultat;
        }
    }
?>