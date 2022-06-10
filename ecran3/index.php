<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="../normalize.css">
        <title>Tableau de bord</title>
    </head>
    <body>
        <table class="nav">
            <tr>
                <td class="menu">
                    <nav><ul><li><a href="#"><img src="menu.png"/></a>
                        <ul>
                        <li><a href="../ecran1/index.php">Connexion</a></li>
                            <li><a href="../ecran3/index.php">Tableau de bord</a></li>
                            <li><a href="../ecran4/index.php">Calendrier</a></li>
                            <li><a href="../ecran5/index.php">Nouvelle filière</a></li>
                            <li><a href="../ecran6/index.php">Nouvelle session</a></li>
                        </ul>
                    </li></ul></nav>  
                </td>
                <td class="tdb">TABLEAU DE BORD</td>
                <td class="deco"><button><img src="déconnexion.png"></button></td>
            </tr>
        </table>
        <div class="ajout_filiere">
            <a href="../ecran5/index.php">+ AJOUTER UNE NOUVELLE FILIERE</a>
        </div>
        <section>
            <table class="planning">
                <tr>
                    <td><h3 class="gauche">FILIERE DU JOUR</h3></td>
                    <td><h3 class="droite">FILIERE A VENIR</h3></td>
                </tr>
                <tr>
                    <td>
                        <ul class="gauche">
                            <li><button>Filière 1</button></li>
                            <li><button>Filière 2</button></li>  
                            <li><button>Filière 3</button></li>
                            <li><button>Filière 4</button></li>  
                            <li><button>Filière 5</button></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="droite">
                            <li><button>Filière 6</button></li>  
                            <li><button>Filière 7</button></li>
                            <li><button>Filière 8</button></li>
                            <li><button>Filière 9</button></li>  
                            <li><button>Filière 10</button></li>
                        </ul>
                    </td>
                </tr>
            </table>
        </section>
    </body>
</html>