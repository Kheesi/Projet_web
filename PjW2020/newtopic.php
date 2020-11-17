<!DOCTYPE html>
<?php session_start();
include "header.php"; ?>

<html>
 <head>
  <link rel="stylesheet" type="text/css" href="" />
  <link rel="icon" type="image/png" href="icn/banana24.png" />
  <meta charset="utf-8" />
  <title></title>
 </head>

<!-formulaire d’inscription, sécuriser les entrées avec " et ) pour éviter les entrées multiples->
<!- un utilisateur malin pourrait injecter du sql dans le formulaire et ainsi récupérer des informations sensibles->
<!- manuel: bind / requete préparer ->

<body>
	<form method="post" action="t-newtopic.php" autocomplete="on" name="inscription">
		<p>
			Titre<input type="text"name="question"/>
		</p>
		<p>
			contenu<input type="text"name="contenu"/>
		</p>
		<p>
			date<input type="date"name="date"/>
		</p>
		<p>
			nom<input type="text"name="nom"/>
		</p>
		<input type="submit" value="ok"/>
	</form>
</body>
</html>
