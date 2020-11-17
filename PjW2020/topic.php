<!DOCTYPE html>
<?php session_start(); include "header.php"; ?>

<html>
 <head>
  <link rel="stylesheet" type="text/css" href="unistyle.css" />
  <link rel="icon" type="image/png" href="icn/banana24.png" />
  <meta charset="utf-8" />
  <title>Acceuil</title>
 </head>
 
 <body>
	 <h1>Effectuer une recherche par titre ou mot clefs</h1>

	 <h1>Topics déjà créer</h1>
	 <table>
		 <?php
		 // information serveur
		 $serveur ="localhost";
		 $logserv = "root";
		 $passserv = "";
		 $base = "bananaforum";
		 
		 //connexion au serveur
		 $connexion = mysqli_connect($serveur,$logserv,$passserv,$base);
		 
		 //Execution d'une requete: recupération
		 $requete = "SELECT * FROM questions" ;
		 $res = mysqli_query($connexion,$requete);
		 
		 //recupération et affichage
		 while($topic = mysqli_fetch_array($res)){
			 echo "<tr><td><a href='templatequestion.php' id='titretopic' >"
						.$topic['titre']."</a></td></tr>";
		 }
		 //fermeture de la connexion au serveur
		 mysqli_close($connexion);
		 ?>
	 </table>
	 
	 <script>
		function click { $_SESSION['titre'] = this.innerHTML;} 
	  $("#titretopic").on("click",click);
	  console.log($_SESSION['titre']);
	 </script>
 </body>
</html>

<!--
Interface DOM et styles dynamiquesLe document et les éléments HTML en 
tant qu’objetsMéthodes des éléments HTML (2)setAttribute(nom, valeur)donne
 à l’attributnomde l’élémentcourant la valeurvaleurgetAttribute(nom)renvoie
  la valeur de l’attributnomde l’élémentcourant (on peut aussi accéder à
   la plupart des attributs parla syntaxeélément.attribut)
 
value valeur du champ (y compris le contenu d’un<textarea>-->
