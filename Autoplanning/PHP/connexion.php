<!-- CODE HTML -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>ÉCRAN CONNEXION - PROJET AUTOPLANNING</title>
		<link rel="stylesheet" type="text/css" href="../CSS/normalize.css">
		<link rel="stylesheet" type="text/css" href="../CSS/connexion.css">
	</head>
		
	<body>
		<!-- MAIN -->
		<main>
			<!-- FORMULAIRE DE CONNEXION -->
			<div class="container">
				<img src="../IMAGES/logo_ajc.png" alt="logo_ajc" class="logo_ajc">
				
				<form action="tableaudebord.php" method="POST">
					<p>LOGIN : <input type="email" name="email" required/></p>
					<p>MOT DE PASSE : <input type="password" name="passe" required/></p>
					
					<a href="mdp.php">Mot de passe oublié ? </a>
					
					<p><input id= "btn_connexion" type="submit" value="ME CONNECTER" name="connexion" onclick=""></p>
					
					<!-- CODE PHP -->
					<?php
						
						
						
					?>
				</form>
			</div>
		</main>
		
		
		
		<!--// FOOTER // -->
		<footer class="footer">
			<p>AJC FORMATION © 2022<br> ADDES Yasmine | DELATTE Sarah | GULER Adam | VENUTI Alexandre</p>
		</footer>
	</body>
</html>



