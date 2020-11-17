<!DOCTYPE html>
<?php session_start();
include "header.php";
?>

<html>
 <head>
  <link rel="stylesheet" type="text/css" href="unistyle.css" />
  <link rel="icon" type="image/png" href="icn/banana24.png" />
  <meta charset="utf-8" />
  <title>compte</title>
 </head>
 
 <body>
		<script>
			var btn = document.querySelector('input');
		</script>
	 
		<h1>Mon compte</h1>
		<form><input type="submit" action="t-deconnexion.php" value="deconnexion"/></form>
		<button action="">Supprimer compte</button>
		
		<h1>Connexion</h1>
		<form method="post" action="t-connexion.php" autocomplete="on" >
			<input type="txt" name="pseudo"/>
			<input type="password" name="mdp"/>
			<input type="submit" name="connexion" value="fait de moi un brave!"/>
		</form>

		<h1>Inscription</h1>
		<form method="post" action="t-inscription.php" autocomplete="on" name="inscription">
			<p>Pseudo<input type="text" name="pseudo"/></p>
			<p>Mot de passe<input type="password" name="mdp"/></p>
			<p>Email<input type="email" name="mail"/></p>
			<p>nom<input type="text" name="nom"/></p>
			<p>prenom<input type="text"name="prenom"/></p>
			<input type="submit" value="ok"/>
		</form>
</body>
</html>
