<?php
    try
    {
        $db = new PDO('mysql : host = ... ; dbname = autoplanning', 'autoplanning', 'passe_dev');
    }
    catch (PDOException $e)
    {
        print('Erreur : '.$e->getMessage()."<br>");
    }
?>