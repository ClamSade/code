var clic=false; 
//Cette variable nous indique si l'utilisateur clique sur la barre.
 
var clic2=false;
//Cette variable nous indique si l'utilisateur clique sur le carré.
 
var r=255,g=0,b=0;
//Variables qui stockeront la couleur en rgb.
 
var r_1=255,g_1=0,b_1=0;
// Variables secondaires rgb.
 
var blanc=0,noir=1;
// Le pourcentage de noir et de blanc entre 0 et 1 appliqué à la couleur (ici, pour le noir, 1 signifie qu'il n'y en aura pas, et 0 totalement : c'est l'inverse)
 
var x=360,y=20;


function clique(objet)
{
 
	if(objet=="barre") // si l'utilisateur clique sur la barre ...
	{	
		clic=true; // ...alors on met true (vrai) à clic
	}
	else // sinon l'utilisateur clique sur le carré ...
	{ 
		clic2=true; // ...alors on met true (vrai) à clic2
	}
 
}

function position(axe,event)
{
	// event contient les évènements de la page (on s'en sert pour la position du curseur)
 
	var e = event || window.event; 
	// on copie les évènements dans e : il y a des manières différentes de récupérer les événements selon le navigateur
 
		if(axe=="x") //si on demande x
		{
			var rep=e.clientX; // position x de la souris.
		}
		else // sinon y 
		{
			var rep=e.clientY; // position y de la souris.
		}

	return rep;
	// on renvoie la valeur de rep.

}

document.onmousemove=calcul; 
// lorsque la souris bouge n'importe où dans le document, on appelle la fonction calcul.

document.onmousedown=calcul; 
// lorsque la souris clique n'importe où dans le document, on appelle la fonction calcul.
 
document.onmouseup=function() { clic=false;clic2=false; }
// si l'utilisateur relâche le bouton de la souris, alors les variables clic et clic2 redeviennent fausses (false)


function calcul(event) // event contient les événements de la page (on s'en sert pour la position du curseur).
{
 
	if(clic && position('y',event)<=320 && position('y',event)>=20) // on appelle position() pour connaître la position de la souris.
	{
		document.getElementById("curseur1").style.top=position('y',event)-7;
        //on change la position du curseur (top) en même temps que la souris.


        // c'est à partir d'ici qu'on regarde sur quel sixième la souris se trouve.

        if((position('y',event)-20)<=50) // 1/6 (50px)
        {

            r=255;
            g=0;
            b=Math.round((position('y',event)-20)*255/50);
        
        }
        else if((position('y',event)-20)<=100) // 2/6 (100px)
        {

            r=Math.round(255-((position('y',event)-70)*255/50));
            g=0;
            b=255;

        }
        else if((position('y',event)-20)<=150) // 3/6 (150px)
        {

            r=0;
            g=Math.round((position('y',event)-120)*255/50);
            b=255;

        }
        else if((position('y',event)-20)<=200) // 4/6 (200px)
        {

            r=0;
            g=255;
            b=Math.round(255-((position('y',event)-170)*255/50));

        }
        else if((position('y',event)-20)<=250) // 5/6 (250px)
        {

            r=Math.round((position('y',event)-220)*255/50);
            g=255;
            b=0;

        }
        else if((position('y',event)-20)<=300) // 6/6 (300px)
        {

            r=255;
            g=Math.round(255-((position('y',event)-270)*255/50));
            b=0;

        }

        document.getElementById("carre").style.backgroundColor="rgb("+r+","+g+","+b+")";
        // On change la couleur du carré. On voit après (grâce à degrade n-b.png) le dégradé de la couleur vers le blanc et le noir

		afficher(); // fonction permettant d'afficher la couleur courante dans le rectangle (input text) 'resultat'.
	}

	if(clic2) // si l'utilisateur clique sur le carré...
	{
	
		if(position('y',event)>20 && position('y',event)<320)
		{ 
			document.getElementById("curseur2").style.top=(position('y',event)-10)+"px";
            // on déplace curseur2 et on lui retire son milieu (comme pour curseur 1)
            
            y=position('y',event);
            // on enregistre la position y de la souris dans la variable 'y' pour que la fonction afficher() puisse faire ces calculs
		}

		if(position('x',event)>60 && position('x',event)<360)
		{
			document.getElementById("curseur2").style.left=(position('x',event)-10)+"px";
            // on déplace curseur2 et on lui retire son milieu (comme pour curseur 1)
            
            x=position('x',event);
            // on enregistre la position x de la souris dans la variable 'x' pour que la fonction afficher() puisse faire ces calculs
		}

		afficher(); // fonction permettant d'afficher la couleur courante dans le rectangle (input text) 'resultat'.
	}

}



function afficher()  // ici on gère l'affichage de la couleur
{ 
	noir=Math.round( (x-60)*100/300)/100; 
    // on calcule le pourcentage de noir appliqué à la couleur en divisant la position  'x' du curseur dans le carré par sa largeur (-60 car le carré commence à left:60px)

    blanc=Math.round((y-20)*100/300)/100; 
    // on calcule le pourcentage de blanc appliqué à la couleur en divisant la position  'y' du curseur dans le carré par sa hauteur (-20 car le carré commence à top:20px)




    //on applique le blanc aux 3 couleurs :
    r_1=Math.round((255-r)*blanc)+r;
    g_1=Math.round((255-g)*blanc)+g;
    b_1=Math.round((255-b)*blanc)+b;
    
    // on applique le noir aux 3 couleurs :
    r_1=Math.round(r_1*noir);
    g_1=Math.round(g_1*noir);
    b_1=Math.round(b_1*noir);
    
    //on affiche la couleur en rgb dans le champ resultat
    document.getElementById("resultat").value=r_1+","+g_1+","+b_1;
    
    //on applique la couleur rgb au champ resultat
    document.getElementById('resultat').style.backgroundColor="rgb("+r_1+","+g_1+","+b_1+")";
}

function valider()
{

	//on fait appel à une fonction dans la page principale pour transmettre le contenu de resultat.
	window.opener.valid_couleur(document.getElementById("resultat").value);
 
	window.close();
	//on ferme la palette
	
}


champ="";
formulaire="";

function ouvrir_palette(formulaire_recupere,champ_recupere)
{

	formulaire=formulaire_recupere;
	champ=champ_recupere;
 
	ma_palette=window.open("palette.html","Palette_de_couleur","height=380,width=400,status=0, scrollbars=0,,menubar=0");
	// on ouvre la palette

}
 
function valid_couleur(couleur) //fonction appelée lorsqu'on valide la palette. On récupère la couleur.
{

	document.forms[formulaire].elements[champ].value=couleur;

}