<table><tbody><tr>
		<td class="header"><img src="icn/banana128.png" id="logo" /><img src="icn/questions128.png" id="logo" /></td>
		
		<td class="header"><a class="headers" href="topic.php">Accueil</a></td>		  
		
		<td class="header">
			<form action="recherche.php" method="post">
				<input type="text" name="recherche" value="rechercher parmis les questions/réponses"/>
			</form>
		</td>
		
		<td class="header"><a class="headers" href="newtopic.php"> Nouveau topic</a></td>
		
		<?php
		if(isset($_SESSION['pseudo'])){
			echo '<td class="header"><a href="moncompte.php">'.$_SESSION['pseudo'].'</a></td>';
		}else echo '<td class="header"><a href="moncompte.php">Mon compte</a></td>';
		?>
		
	</tr></tbody></table>
