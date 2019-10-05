<?php
require_once('lib/bd/bd.class.php');
    
    
    class pathoController
    {
        // récupèrer les types de pathologies
        public static function getAllTypePatho()
        {
            $maBD = new BD();
            $resultat = $maBD->requete("SELECT `type`,`nom` FROM `typePatho`");
            return $resultat;
        }

        // récupérer la liste des pathologies en fonction des types sélectionner
        public static function getPathoEnFonctionType($arrayType)
        {
            $constructionString="SELECT `desc` FROM `patho`"; //cas ou arrayType vaut 0
            for($i=0;$i<count($arrayType);$i++)
            {
                if($i==0){//cas pour le premier aergument
                    $constructionString = $constructionString.' where type LIKE "%'.$arrayType[$i].'%"';
                }else{ //cas pour les autres arguments
                    $constructionString = $constructionString.' OR type LIKE "%'.$arrayType[$i].'%"';
                }
            }
            $maBD = new BD();
            $resultat = $maBD->requete($constructionString);
            return $resultat;
        }
    }

    
    class meridienController
    {
        // recupèrer tout les méridiens
        public static function getAllMeridiens()
        {
            $maBD = new BD();
            $resultat = $maBD->requete("SELECT `nom`,`code` FROM meridien");
            return $resultat;
        }
    }

    class symptomeController
    {
        //recupèrer les symptones en fonction des patho
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