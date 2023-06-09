<?php

// index.php fait office de controleur frontal
session_start(); // démarre ou reprend une session
ini_set('display_errors', 1); // affiche les erreurs (au cas où)
ini_set('display_startup_errors', 1); // affiche les erreurs (au cas où)
error_reporting(E_ALL); // affiche les erreurs (au cas où)
require('modele/modele.php'); // inclut le fichier modele
require('inc/includes.php'); // inclut des constantes et fonctions du site (nom, slogan)
require('inc/routes.php'); // fichiers de routes


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link href="css/style.css"  rel="stylesheet" media="all" type="text/css">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.png" />
	<meta name="viewport" content="width=device-width	">
</head>
<body>
<?php include('static/header.php'); ?>
<main>
		<?php
		$controleur = 'controleurAccueil'; // par défaut, on charge accueil.php
		$vue = 'vueAccueil'; // par défaut, on charge accueil.php
		if(isset($_GET['page'])) {
			$nomPage = $_GET['page'];
			if(isset($routes[$nomPage])) { // si la page existe dans le tableau des routes, on la charge
				$controleur = $routes[$nomPage]['controleur'];
				$vue = $routes[$nomPage]['vue'];
			}
		}
		include('controleurs/' . $controleur . '.php');
		include('vues/' . $vue . '.php');
		?>
		</main>
    <?php include('static/footer.php'); ?>
</body>
</html> 


