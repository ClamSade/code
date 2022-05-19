

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Connexion Auto-planning</title>
</head>
<body>
    <div class="container">
        <form action="" method="post" class="connexion">
            <div class="logo">
                <img src="logo_AJC.png">
            </div>
            <div class="login">
                <label for="email">IDENTIFIANT : </label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="password">
                <label for="password">MOT DE PASSE : </label>
                <input type="password" name="password" id="password" required>
            </div>

            <div class="oubli">
                <span class="psw"><a href="mdp_oublie.php">mot de passe oublié ?</a></span>
            </div>

            <div class="submit">
                <input type="submit" value="CONNEXION">
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