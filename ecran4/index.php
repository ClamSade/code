<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="../normalize.css">
        <title>Ajouter une nouvelle filière</title>
    </head>
    <body>
        <table class="nav">
            <tr>
                <td class="menu">
                    <nav><ul><li><a href="#"><img src="menu.png"/></a>
                        <ul>
                        <li><a href="../ecran1/index.php">Connexion</a></li>
                            <li><a href="../ecran2/index.php">Tableau de bord</a></li>
                            <li><a href="../ecran3/index.php">Calendrier</a></li>
                            <li><a href="../ecran4/index.php">Nouvelle filière</a></li>
                            <li><a href="../ecran5/index.php">Nouvelle session</a></li>
                        </ul>
                    </li></ul></nav>  
                </td>
                <td class="retour"><a href="../ecran2/index.php"><img src="retour.png"></a></td>
                <td class="tdb">AJOUTER UNE NOUVELLE FILIERE</td>
                <td class="deco"><button><img src="déconnexion.png"></button></td>
            </tr>
        </table>
       
        <section>
            <table class="filiere">
               <tr>
                   <th colspan="2"><input type="text" name="libelle" id="libelle" placeholder="Libellé"></th>
                   <th colspan="2"><input type="text" name="nom" id="nom" placeholder="Nom"></th>
               </tr>
               <tr>
                   <th colspan="2"><input type="text" name="referent" id="referent" placeholder="Référent"></th>
                   <th colspan="2"><input type="text" name="suffixe" id="suffixe" placeholder="Suffixe"></th>
               </tr>
               <tr>
                   <td><input type="text" name="lieu" id="lieu" placeholder="Lieu"></td>
                   <td><input type="text" name="action" id="action" placeholder="Action"></td>
                   <td><input type="date" name="date" id="date" placeholder="Début"></td>
                   <td><input type="number" name="duree" id="duree" placeholder="Durée en jours"></td>
               </tr>
               <tr>
                   <th colspan="4"><input type="color" id="couleur" name="couleur" value="#e66465" placeholder="Couleur"><label for="couleur"></label></th>
               </tr>
               <tr>
                   <th colspan="4"><a href="../ecran3/index.php">VALIDER</a></th>
               </tr>
            </table>
        </section>
    </body>
</html>