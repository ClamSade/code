<!-- CODE HTML -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>ÉCRAN FILIÈRES - PROJET AUTOPLANNING</title>
		<link rel="stylesheet" type="text/css" href="../CSS/normalize.css">
		<link rel="stylesheet" type="text/css" href="../CSS/filiere.css">
	</head>
	
	<body>
		<!-- HEADER -->
		<header>
			<!-- NAVIGATION MENU -->
			<nav>
				<ul>
					<li class="deroulant">
						<a href="#"> 
							<img src="../IMAGES/menu1.png"/>
						</a>
						<ul class="sous">
							<li><a href="connexion.php">CONNEXION</a></li>
							<li><a href="tableaudebord.php">TABLEAU DE BORD</a></li>
							<li><a href="calendrier.php">CALENDRIER</a></li>
							<li><a href="filiere.php">NOUVELLE FILIÈRE</a></li>
							<li><a href="session.php">NOUVELLE SESSION</a></li>
						</ul>
					</li>
					
					<li>
						<h1>AJOUT D'UNE FILIÈRE</h1>
					</li>
					
					<li>
						<!-- BOUTON DE DÉCONNEXION -->
						<button id="btn_deconnexion">
								<a href="includes/deconnexion.php">
									<img src="../IMAGES/deconnexion1.png">
								</a>
						</button>
					</li>
				</ul>
			</nav>
		</header>
		
		<hr>
		
		<!-- MAIN -->
		<main>
			<!-- SECTION -->
			<section>
				<!-- TABLEAU FILIERE -->
				<table class="filiere">
					<tbody>
						<tr>
							<th colspan="2">
								<label>LIBELLÉ</label> <br>
								<input type="text" name="libelle" id="libelle" placeholder="LIBELLÉ"></th>
							<th colspan="2">
								<label>NOM</label> <br>
								<input type="text" name="nom" id="nom" placeholder="NOM"></th>
						</tr>
						
						<tr>
							<th colspan="2">
								<label>RÉFÉRENT</label> <br>
								<input type="text" name="referent" id="referent" placeholder="RÉFÉRENT"></th>
							<th colspan="2">
								<label>SUFFIXE</label> <br>
								<input type="text" name="suffixe" id="suffixe" placeholder="SUFFIXE"></th>
						</tr>
						
						<tr>
							<td>
								<label>LIEU</label> <br>
								<input type="text" name="lieu" id="lieu" placeholder="LIEU"></td>
							<td>
								<label>ACTION</label> <br>
								<input type="text" name="action" id="action" placeholder="ACTION"></td>
							<td>
								<label>DATE DE DÉBUT</label> <br>
								<input type="date" name="date" id="date" placeholder="DATE DE DÉBUT"></td>
							<td>
								<label>DURÉE /JOUR</label> <br>
								<input type="number" name="duree" id="duree" placeholder="DURÉE /JOUR"></td>
						</tr>
						
						<!-- PALETTE DE COULEUR -->
						<tr>
							<th colspan="4">
								<label>CHOISISSEZ LA COULEUR DE LA FILIÈRE CI-DESSOUS</label><br>
								<input type="color" id="palette" name="couleur" value="#000">
								<label for="couleur"></label>
							</th>
						</tr>
						
						<tr>
							<th colspan="4">
								<a href="calendrier.php" id="btn_valider">VALIDER</a>
							</th>
						</tr>
					</tbody>
				</table>
			</section>
		</main>
		
		<!--// FOOTER // -->
		<footer class="footer">
			<p>AJC FORMATION © 2022<br> ADDES Yasmine | DELATTE Sarah | GULER Adam | VENUTI Alexandre</p>
		</footer>
	</body>
</html>
	
<?php
	if (!isset($_SESSION['email'])) {
//		header("Location: connexion.php") ; 
		exit() ; 
	} else {
		echo $_SESSION ['email'] ; 
	}
	
	
?>