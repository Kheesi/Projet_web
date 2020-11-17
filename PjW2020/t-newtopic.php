<!DOCTYPE html>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="" />
		<meta charset="utf-8" />
		<title></title>
	</head>
	
<!-sécuriser les entrées avec " et ) pour éviter les entrées multiples->
<!- un utilisateur malin pourrait injecter du sql dans le formulaire et ainsi récupérer des informations sensibles->
<!- manuel: bind / requete préparer ->

<?php
	include "header.php";

	// information client
	$q = $_POST['question'];
	$c = $_POST['contenu'];
	$date = $_POST['date'];
	$nom = $_POST['nom'];
	
	// information serveur
	$serveur ="localhost";
	$logserv = "root";
	$passserv = "";
	
	// connexion & inscription bdd
	try {	//ceci test l'ouverture de la BDD
		
		//ouverure
		$dbflow = new PDO("mysql:host=$serveur;dbname=bananaforum",$logserv, $passserv);
		$dbflow->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		//formulation de la requete
		$insertion = "INSERT INTO questions(titre,contenu,auteur,date) VALUES ('$q','$c','$nom','$date')";
		
		//execution de la requete
		$dbflow->exec($insertion);
		echo "Votre question à bien été posté";
		
	} catch (PDOException $e) {
		echo "Erreur !: " . $e->getmessage() . "<br/>";
	}
	include "footer.php";
?>
</html>
