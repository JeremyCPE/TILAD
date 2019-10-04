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
        public static function getSymptome($pathologie)
        {
            $maBD = new BD();
            $resultat = $maBD->requete("
                    SELECT symptome.desc FROM symptPatho
                    inner join symptome on symptPatho.idS = symptome.idS
                    inner join patho on symptPatho.idP = patho.idP
                    WHERE patho.desc = ".$pathologie);
            return $resultat;
        }

        public static function searchKeywords()
        {
            $maBD = new BD();
            $resultat = $maBD->requete("
                    SELECT name,patho.desc FROM keywords
                    inner join keySympt on keySympt.idK = keywords.idK
                    inner join symptome on symptome.idS = keySympt.idS
                    inner join symptPatho on symptPatho.idS = symptome.ids
                    inner join patho on patho.idP = symptPatho.idP
                    WHERE keywords.name='abdomen' ");
            return $resultat;
        }
    }

    class logController
  {
      public static function getLogin()
      {
          $maBD = new BD();
          $resultat = $maBD->requete("SELECT `prenom`, `nom`, `password`, `pseudo`  FROM utilisateur");
          return $resultat;
      }

      public static function register($pseudo,$password)
      //TODO : RECUPERER $PSEUDO et $PASSWORD DEPUIS LE FORMULAIRE
      {
        try
        {
          $bdd = new PDO('mysql:host=localhost;dbname=tp;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
          //echo '<p> Connexion avec la BDD reussi </p>';
        }
        catch(Exception $e)
        {
                die('Erreur : '.$e->getMessage());
        }

        if(!empty($pseudo) && !empty($password)){
          $sql = "INSERT INTO utilisateur (`pseudo`,`password`) VALUES (:pseudo,:password)";
          $stmt = $bdd->prepare($sql);
          $stmt->bindParam(':pseudo', $pseudo,PDO::PARAM_STR, 255);
          $secure_password = password_hash($password, PASSWORD_BCRYPT);
          $stmt->bindParam(':password', $secure_password,PDO::PARAM_STR, 255);
          if( $stmt->execute() ):
            $message = 'Nouvel utilisateur créee';
          else:
            $message = 'Erreur sur lutilisateur';
          endif;

          return $message;

        }
      }
      
?>
