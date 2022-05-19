<!-- CODE HTML -->
<?php
    /* try {
        $db = new PDO('http://20.111.40.161/phpmyadmin/', 'autoplanning', 'passe_dev');
    } catch (PDOException $e) {
        print('Erreur : '.$e->getMessage()."<br>");
    } */ 
    
    
    if (isset($_POST['submit'])) {
        {
            // CONNEXION AU SERVEUR DE LA BDD // 
            $connexion = mysqli_connect('http://20.111.40.161/phpmyadmin/', 'autoplanning', 'passe_dev') ; 
            mysqli_select_db('autoplanning', $connexion) ;
        }
        
        
    }
    
    
    
    
     
    
    
?> 



