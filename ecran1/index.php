<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../normalize.css">
    <title>Connexion Auto-planning</title>
</head>
<body>
    <div class="container">
        <form action="verification.php" method="POST" class="connexion">
            <div class="logo">
                <img src="logo_AJC.png">
            </div>
            <div class="login">
                <label for="email">IDENTIFIANT : </label>
                <input type="email" name="email" id="email" >
            </div>
            <div class="password">
                <label for="password">MOT DE PASSE : </label>
                <input type="password" name="password" id="password">
            </div>

            <div class="oubli">
                <span class="psw"><a href="mdp_oublie.php">Mot de passe oublié ?</a></span>
            </div>

            <div class="submit">
                <input type="submit" id="submit" value="CONNEXION">
            </div>

           

        </form>

    </div>
</body>
</html>

<?php
    if (isset($_POST['email'], $_POST['passe']))
    {
        $stmt = $db->prepare('SELECT passe FROM connexion WHERE email = ?');
        $stmt->execute($_POST['email']);

        $hashedPassword = $stmt->fetchColumn();
    
        if (password_verify($_POST['passe'], $hashedPassword))
        {
            echo "connexion réussi";
        }
        else
        {
            echo "Mot de passe incorrect";
        }
    }
?>