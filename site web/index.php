<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=tp;charset=utf8','root','tp');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

?>