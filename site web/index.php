<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=tp;charset=utf8','root','tp');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$reponse = $bdd->query('select code from meridien');
while ($donnees = $reponse->fetch())
{
?>
    <p>
        <?php echo $donnees['code']; ?><br />
    </p>

<?php

}


$reponse->closeCursor(); // Termine le traitement de la requête


?>