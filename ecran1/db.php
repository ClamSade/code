<?php
    try
    {
        $db = new PDO('http://20.111.40.161/phpmyadmin/', 'autoplanning', 'passe_dev');
    }
    catch (PDOException $e)
    {
        print('Erreur : '.$e->getMessage()."<br>");
    }
?>