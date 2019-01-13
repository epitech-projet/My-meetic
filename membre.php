<?php
require_once'classMeetic.php';

$membre_Connect = new Connect();
$moco = $membre_Connect->read();
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8"/>
			<link rel="stylesheet" type="text/css" href="my_style.css"/>
		<title>CONNEXION</title>
	</head>

	<body>
		<header>
        	<h1> My Meetic </h1>
        	<h4>Exigez des rencontres de qualité</h4>
        	<h3>Site de rencontre serieux </h3>
		</header>
		<article>
			<img src="giphy1.gif" alt="coeur mobile">
		</article>
		<article>
        <h1>Il suffit d'une seul rencontre <br>
        pour faire basculer toute une vie !</h1>
    </article>
		<center>
	
		<form method="post" action="menu_principal.php">
		<div>
			<label for="mail">Email:</label> 
			<input type="email" id="mail" name="mail" required />
		</div>
		<div>
			<label for="password">Mot de Passe :</label> 
			<input type="password" value="password" required /> 
		</div>
		<div class="button">
			<button type="submit">Validation</button>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		</center>
		</form>
	</body>
</html>