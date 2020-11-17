<html>
	<head>
	<link rel="stylesheet" type="text/css" href="unistyle.css" />
	<link rel="icon" type="image/png" href="icn/banana24.png" />
  <meta charset="utf-8" />
  <title>connexion</title>
	</head>

<body>
<?php
  session_start();
	include "header.php";
	
	// information serveur & connexion
	$serveur ="localhost";
  $logserv = "root";
  $passserv = "";
	$base = "bananaforum";
	$connexion = mysqli_connect($serveur,$logserv,$passserv,$base);
	
  //En cas de mesage d'erreur, affiche celui-ci
  echo mysqli_connect_error();
	
  if(isset($_POST['connexion'])){
		$pseudo = $_POST['pseudo'];
		$mdp = $_POST['mdp'];
		
    $requete = "SELECT * FROM utilisateurs WHERE pseudo='$pseudo'";
    
    //requete: trouve l'utilisateur
    $res = mysqli_query($connexion,$requete);
    $P = mysqli_fetch_array($res);
    
    //requete: trouve son mdp
    //~ if(hash('sha256', $mdp)==$P['MDP']){
    if($mdp == $P['MDP']){
      $_SESSION['utilisateur']=$P['IDBF'];
      $_SESSION['pseudo']=$P['pseudo'];
			header('Location: topic.php');
    }else{
      echo "L'identifiant ou le mot de passe est incorrect.";
    }
  }
  mysqli_close($connexion);
  ?>
</body>

</html>
