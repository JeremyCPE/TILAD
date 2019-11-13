<?php
session_start();
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

        //retourne le type de la pathologie
        public static function getTypePatho($nom)
        {
            $maBD = new BD();
            $resultat = $maBD->requete("SELECT `type`,`nom` FROM `typePatho` where `nom`=".$nom);
            return $resultat;
        }

        public static Function GetAllPatho()
        {
          $maBD = new BD();
          $AllPatho = $maBD->requete("SELECT   distinct idP as 'id',   `desc` as 'desc',   type as 'type',   `code` as 'CodeMeridien',
            nom as MeridienNom,   element as MeridienElement,   yin as MeridienYin FROM `patho` p  join meridien m on m.code=p.mer ");
          return $AllPatho;
        }

        // récupérer la liste des pathologies en fonction des types sélectionner
        public static function getPathoEnFonctionType($arrayType)
        {
            $constructionString="SELECT `desc` FROM `patho`"; //cas ou arrayType vaut 0
            for($i=0;$i<count($arrayType);$i++)
            {
                if($i==0){//cas pour le premier argument
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
        //recupèrer les symptomes en fonction des patho
        public static function getSymptome($pathologie)
        {

            $maBD = new BD();
            $resultat = $maBD->requete('SELECT symptome.desc FROM symptPatho
            inner join symptome on symptPatho.idS = symptome.idS
            inner join patho on symptPatho.idP = patho.idP
            WHERE patho.desc = "'.$pathologie.'"');
            //$pathologie doit etre un string ici (et non un array, faire un fetch sinon)
            return $resultat;
        }

        public static function searchKeywords($key)
        {
            $maBD = new BD();
            $resultat = $maBD->requete("
                    SELECT DISTINCT keywords.name, patho.desc  FROM keywords
                    inner join keySympt on keySympt.idK = keywords.idK
                    inner join symptome on symptome.idS = keySympt.idS
                    inner join symptPatho on symptPatho.idS = symptome.ids
                    inner join patho on patho.idP = symptPatho.idP
                    WHERE keywords.name LIKE '%".$key."%'");

            return $resultat;
        }

        public static function searchKey($key)
        {
            $maBD = new BD();
            $resultat = $maBD->requete("
                    SELECT name FROM keywords
                    WHERE name LIKE '%".$key."%'");
            return $resultat;
        }
    }

    class logController
    {
        public static function getLogin($pseudoLog,$passwordLog)
        {
            $message="";
            try
            {
            $maBD = new PDO('mysql:host=localhost;dbname=tp;charset=utf8', 'tp', 'tp',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            //echo '<p> Connexion avec la BDD reussi </p>';
            }
            catch(Exception $e)
            {
                    die('Erreur : '.$e->getMessage());
            }
            $sql = "SELECT password, pseudo FROM utilisateur WHERE `pseudo` = :pseudo";
            $query=$maBD->prepare($sql);
            $query->bindValue(':pseudo',$pseudoLog, PDO::PARAM_STR);
            $query->execute();
            $data=$query->fetch();
            $password_verify = password_verify($passwordLog , $data['password']);

          if ($password_verify == true ) // Acces OK !
          {
            $log = true;
            $expire = time() + 365*24*3600;
            setcookie('pseudo', $pseudoLog, $expire);
          }
          else {
            $log = false;
          }

          return $log;
        }

        public static function register($pseudo,$password,$address,$surname,$name)
        {
          $message = true;
            try
            {
            $bdd = new PDO('mysql:host=localhost;dbname=tp;charset=utf8', 'tp', 'tp',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            //echo '<p> Connexion avec la BDD reussi </p>';
            }
            catch(Exception $e)
            {
                    die('Erreur : '.$e->getMessage());
            }
            //Check if pseudo is already used
            if(!empty($pseudo) && !empty($password)){
            $sql = "SELECT password, pseudo FROM utilisateur WHERE `pseudo` = :pseudo";
            $query=$bdd->prepare($sql);
            $query->bindValue(':pseudo',$pseudo, PDO::PARAM_STR);
            $query->execute();
            $data=$query->fetch();
            if( $data['pseudo'] == $pseudo ) {
              $message = false;
            }
            else {
            //insert element in database
            $sql = "INSERT INTO utilisateur (`pseudo`,`password`,`adresse`,`nom`,`prenom`) VALUES (:pseudo,:password,:adresse,:nom,:prenom)";
            $stmt = $bdd->prepare($sql);
            $stmt->bindParam(':pseudo', $pseudo,PDO::PARAM_STR, 255);
            $secure_password = password_hash($password, PASSWORD_BCRYPT);
            $stmt->bindParam(':password', $secure_password,PDO::PARAM_STR, 255);
            $stmt->bindParam(':adresse', $address,PDO::PARAM_STR, 255);
            $stmt->bindParam(':nom', $surname,PDO::PARAM_STR, 255);
            $stmt->bindParam(':prenom', $name,PDO::PARAM_STR, 255);
              if( $stmt->execute() ):
                  $message = true;
                  $expire = time() + 365*24*3600;
                  setcookie('pseudo', $pseudo, $expire);
              else:
                  $message = false;
              endif;
            }
            return $message;
            }
          }
    }
?>
