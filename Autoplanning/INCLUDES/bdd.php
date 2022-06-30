<!-- CODE PHP -->
<?php
//  $servername = 'http://20.111.40.161/phpmyadmin/';
//  $username = 'autoplanning';
//  $password = 'passe_dev';
//
//  $conn = mysqli_connect($servername, $username, $password);
//  mysqli_set_charset($conn, 'utf8');
//  mysqli_select_db($conn, 'autoplanning');
//  
//  // VÉRIFICATION DE LA CONNEXION // 
//  if(!$conn){
//      die('Erreur : ' .mysqli_connect_error());
//  }
//  echo 'Connexion réussie';  


    $servername = "127.0.0.1:3306";
    $username = "root";
    $password = "root";
    
    $bdd = mysqli_connect($servername, $username, $password);
    // $conn = new PDO('mysql:host=127.0.0.1;dbname=autoplanning', $username, $password); //
    mysqli_set_charset($bdd, 'utf8');
    mysqli_select_db($bdd, 'autoplanning');
    
    // VÉRIFICATION DE LA CONNEXION // 
    if(!$bdd){ 
        die('ERREUR BDD : '.mysqli_connect_error());
    } 
    echo 'CONNEXION BDD OK'; 
?> 
