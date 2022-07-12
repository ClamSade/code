<?php
    session_start();
    if(isset($_POST['email']) && isset($_POST['password']))
    {
        //connexion a la base de données
        $db_email ='root';
        $db_password = 'mdp';
        $db_name = 'nom_bdd';
        $db_host = 'localhost';
        $db = mysqli_connect($db_host, $db_email, $db_password, $db_name) or die('could not connect to database');

        //on applique les deux fonctions mysquli_real_escape_string et htmlspecialchars
        //pour éliminer toute attaque de type injection SQL et XSS

        $email = mysqli_real_escape_string($db, htmlspecialchars($_POST['email']));
        $password = mysqli_real_escape_string($db, htmlspecialchars($_POST['password']));

        if($email !== "" && $password !== "")
        {
            $requete = "SELECT count(*) FROM email where email = '".$email."' and passe = '".$password."' ";
            $exec_requete = mysqli_query($db, $requete);
            $reponse = mysqli_fetch_array($exec_requete);
            $count = $reponse['count(*)'];
            if($count != 0) // email et mdp correctes
            {
                $_SESSION['email'] = $email;
                header('Location: ecran3.php');
            }
            else
            {
                header('Location: index.php?erreur=1'); // email ou mdp incorrect
            }
        }
        else
        {
            header('Location : index.php?erreur=2'); //email ou mdp vide
        }
    }
    else
    {
        header('Location: login.php');
    }
    mysqli_close($db); //fermer la connexion

?>