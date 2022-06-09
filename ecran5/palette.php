<script>
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
</script>


<form name="mon_formulaire">
    <input type="text" name="champ_recevant_la_couleur" id="couleur" placeholder="Couleur" />
    <br />
    <input type="button" value="Ouvrir la palette" onclick="ouvrir_palette('mon_formulaire','champ_recevant_la_couleur')" />
</form>