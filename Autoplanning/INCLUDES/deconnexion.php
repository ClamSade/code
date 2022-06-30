<!-- CODE PHP -->
<!-- INCLUDE / BOUTON DE DECONNEXION -->


<?php
	if(session_destroy()) {
		header('Location: connexion.php') ;
	} 

?>