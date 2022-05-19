<?php
    include 'INCLUDES/bdd.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../CSS/mdp.css">
        <title>ÉCRAN MOT DE PASSE OUBLIÉ - PROJET AUTOPLANNING</title>
    </head>
    
    <body>
        <!-- MAIN -->
        <main>
            <!-- FORMULAIRE DE RÉCUPÉRATION -->
            <div class="container">
                <form method="POST">
                    <h1>RÉCUPÉRATION <br> DE VOTRE MOT DE PASSE</h1>
                    <img src="../IMAGES/logo_ajc.png" class="logo_ajc">
                    <p>EMAIL / LOGIN 
                        <input type="email" name="email" required/>
                    </p>
                    <input id = "btn_mdp" type="submit" value="Recevoir un nouveau mot de passe">
                </form>
            </div>
        </main>
    </body>
</html>

<?php
    // CONNEXION À LA BDD // 
    include '../INCLUDES/bdd.php'; 
    
    if (isset($_POST['email'])) {
            $password = uniqid();
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
            $subject = 'Mot de passe oublié';
            $message = "Bonjour, voici votre nouveau mot de passe : $password";
            $headers = 'Content-Type: text/plain; charset="UTF-8"';
    
            if (mail($_POST['email'], $subject, $message, $headers)) {
                $stmt = $connexion->prepare("UPDATE connexion SET passe = ? WHERE email = ?");
                $stmt->execute([$hashedPassword, $_POST['email']]);
                echo "<h2> E-mail envoyé </h2>";
            } else {
                echo "<h3>Une erreur est survenue. <br> Veuillez réessayer. </h3>";
            }
        }
        
    // FOOTER // 
    include '../INCLUDES/footer.php';

?>