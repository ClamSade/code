<?php
    $serveur = "localhost";
    $user = "email";
    $passe = "mdp";
    $encodage = "utf-8";

    $connexion = mysqli_connect($serveur, $user, $passe);
    mysqli_select_db($connexion, $user);

    
    
    
    
    $Email = htmlentities($_POST['email'], ENT_QUOTES, "UTF-8");
    $MDP = htmlentities($_POST['mdp'], ENT_QUOTES, "UTF-8");
    
    
    if(!$mysqli)
    {
        echo "Erreur de connexion à la base de données";
    }
    else
    {
        $requete = mysqli_query($mysqli,"SELECT * FROM connexion WHERE email = '".$Email."' AND mdp = '".$MDP."'");

        if(mysqli_num_rows($requete) == 0)
        {
            echo "Email ou mot de passe incorrect."
        }
        else
        {
            $_SESSION['email'] = $Email;
            echo "vous êtes connecté."
        }
    }
?>