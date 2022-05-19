<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title>Mot de passe</title>
</head>

<body>

    <div class="container2">
        <form method="post">
            <div class="logo">
                <img src="logo_AJC.png">
            </div>
            <h2>Mot de passe oublié</h2>
            <div class="mail">
                <label for="email">Email : </label>
                <input type="email" name="email" required>
            </div>
            <div class="submit">
                <input type="submit" value="Nouveau mot de passe">
            </div>
        </form>
    </div>
</body>

</html>

<?php

if (isset($_POST['email'])) 
    {
        $password = uniqid();
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $subject = 'Mot de passe oublié';
        $message = "Bonjour, voici votre nouveau mot de passe : $password";
        $headers = 'Content-Type: text/plain; charset="UTF-8"';

        if (mail($_POST['email'], $subject, $message, $headers)) 
        {
            $stmt = $db->prepare("UPDATE connexion SET passe = ? WHERE email = ?");
            $stmt->execute([$hashedPassword, $_POST['email']]);
            echo "E-mail envoyé";
        } 
        else 
        {
            echo "Une erreur est survenue";
        }
    }
?>