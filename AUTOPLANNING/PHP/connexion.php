<!-- CODE HTML -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>ÉCRAN CONNEXION - PROJET AUTOPLANNING</title>
		<link rel="stylesheet" type="text/css" href="../CSS/connexion.css">
	</head>
		
	<body>
		<!-- MAIN -->
		<main>
			<!-- FORMULAIRE DE CONNEXION -->
			<div class="container">
				<img src="../IMAGES/logo_ajc.png" alt="logo_ajc" class="logo_ajc">
				<form action="tableaudebord.php" method="POST">
					<p>LOGIN : <input type="text" name="login" /></p>
					<p>MOT DE PASSE : <input type="password" name="mot_de_passe" /></p>
					
					<a href="mdp.php">Mot de passe oublié ? </a>
					<p><input id= "btn_connexion" type="submit" value="ME CONNECTER"></p>
				</form>
			</div>
		</main>
	</body>
</html>

<!-- CODE PHP -->
<?php 
	
	
	
	
	// FOOTER // 
	include '../INCLUDES/footer.php';
?>