<!-- CODE HTML -->
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../CSS/normalize.css">
        <link rel="stylesheet" href="../CSS/mdp.css">
        <title>ÉCRAN MOT DE PASSE OUBLIÉ - PROJET AUTOPLANNING</title>
    </head>
    
    <body>
        <!-- MAIN -->
        <main>
            <!-- FORMULAIRE DE RÉCUPÉRATION -->
            <div class="container">
                <form method="POST">
                    <img src="../IMAGES/logo_ajc.png" class="logo_ajc">
                    <p>EMAIL DE RÉCUPÉRATION</p>
                        <input id="input_email" type="email" name="email" required/>
                    <input id = "btn_mdp" type="submit" value="Recevoir un nouveau mot de passe">
                </form>
            </div>
        </main>
        
        <!--// FOOTER // -->
        <footer class="footer">
            <p>AJC FORMATION © 2022<br> ADDES Yasmine | DELATTE Sarah | GULER Adam | VENUTI Alexandre</p>
        </footer>
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
?>



    
    

