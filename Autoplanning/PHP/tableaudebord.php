<!-- CODE HTML -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>TABLEAU DE BORD - PROJET AUTOPLANNING</title>
		<link rel="stylesheet" type="text/css" href="../CSS/normalize.css">
		<link rel="stylesheet" type="text/css" href="../CSS/tableaudebord.css">
		
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
						<h1>TABLEAU DE BORD</h1>
					</li>
					
					<li>
						<!-- BOUTON DE DÉCONNEXION -->
						<button id="btn_deconnexion">
							<img src="../IMAGES/deconnexion1.png">
						</button>
					</li>
				</ul>
			</nav>
		</header>
		
		<hr>
		
		<!-- MAIN -->
		<main>
			<!-- BOUTON NOUVELLE FILIÈRE -->
			<a href="filiere.php">
				<button id="btn_filiere" type="button">+ NOUVELLE FILIÈRE</button>
			</a>
			
			<!-- SECTION 1 -->
			<section class="section1">
				<div class="fnow">	
					<h2>FILIÈRES D'AUJOURD'HUI</h2>
					<button class="filiere"> test </button>
					<button class="filiere"> test </button>
					<button class="filiere"> test </button>
					<button class="filiere"> test </button>
					<button class="filiere"> test </button>
					<button class="filiere"> test </button>
					<button class="filiere"> test </button>
				</div>
				
				<div class="fafter">
					<h2>FILIÈRES À VENIR</h2>
					<button class="filiere"> test </button>
					<button class="filiere"> test </button>
					<button class="filiere"> test </button>
					<button class="filiere"> test </button>
					<button class="filiere"> test </button>
					<button class="filiere"> test </button>
					<button class="filiere"> test </button>
				</div>
			</section>
		</main>
		
		<!--// FOOTER // -->
		<footer class="footer">
			<p>AJC FORMATION © 2022<br> ADDES Yasmine | DELATTE Sarah | GULER Adam | VENUTI Alexandre</p>
		</footer>
	</body>
</html>

<!-- CODE PHP -->
<?php
	if (isset($_SESSION['email'])) {
//		header("Location: connexion.php") ; 
		exit() ; 
	}
	
?>