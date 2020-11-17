<html>
	<head>
	<link rel="stylesheet" type="text/css" href="unistyle.css" />
	<link rel="icon" type="image/png" href="icn/banana24.png" />
  <meta charset="utf-8" />
  <title>inscription</title>
	</head>

<?php
	include "header.php";
	// information serveur & connexion
	$serveur ="localhost";
  $logserv = "root";
  $passserv = "";
	$base = "bananaforum";
	$connexion = mysqli_connect($serveur,$logserv,$passserv,$base);

	//récupération des valeurs du formulaires
	$v1 = $_POST['pseudo'];
	$v2 = $_POST['mdp'];
	$v3 = $_POST['prenom'];
	$v4 = $_POST['nom'];
	$v5 = $_POST['mail'];
	
	//vérification de la validité des informations
	
	//Hachage du mot de passe
	
	//Execution d'une requete: insertion utilisateur
	$req = "INSERT INTO utilisateurs(pseudo,MDP,prenom,nom,mail,dinscri) VALUES('$v1','$v2','$v3','$v4','$v5',CURRENT_DATE)";
  $res = mysqli_query($connexion,$req);
  
  //fermeture
  mysqli_close($connexion);
?>

</html>
