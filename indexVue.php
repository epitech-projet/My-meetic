<?php
require_once'classMeetic.php';
$membre_Connect = new Connect();
$moco = $membre_Connect->read();


if(isset($_POST['surname']) && !empty($_POST['surname']) && isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['date']) && !empty($_POST['date']) && isset($_POST['sexe']) && !empty($_POST['sexe']) && isset($_POST['ville']) && !empty($_POST['ville']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['password']) && !empty($_POST['password']))
    {
    	$membre_Connect->create($_POST);
    }
?>
<!DOCTYPE html>
<html lang="fr" >
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="my_style.css" />

    <title></title>
</head>

<body>

    <header>
        <h1> My Meetic </h1>
        <h4>Exigez des rencontres de qualité</h4>
        <h3>Site de rencontre serieux </h3>
        <a href="membre.php">CONNEXION</a>       
    </header>
    <article>
        <h1>Chaque rencontre est une nouvelle connaissance,
            une amitié qui peut être infinie,<br>
            un amour qui peut nous engager à vie.
            Ces relation nous enrichissent et nous<br>
            laissent des souvenirs qui restent 
            gravés dans notre mémoire</h1>
    </article>
    <section>
    	<!-- <?php foreach ($moco as $mocos); ?> -->
		
         <form method="POST" action="envoie.php" action="membre.php" id="envoie">
                <h4>Inscrivez-vous !!</h4>
                <div  class="info"></div>
                <div>
                    <label for="surname">Nom :</label>
                    <input type="text" id="surname" name="surname" required >
                </div>
                <div>
                   	<label for="name">Prenom :</label>
                   	<input type="text" id="name" name="name" required > 
                </div>
                <div>
                    <label for="date">Date de naissance </label>
                    <input type="date" id="date" name="date" min="1950-01-01" max="2000-01-01" required >
                </div>
                <div>
                   	<label for="sexe">Sexe :</label>
                   	<input type="checkbox" id="sexe" name="sexe" value="Femme"  /> Femme
                   	<input type="checkbox" id="sexe" name="sexe" value="Homme" /> Homme 
                </div>
                <div>
                   	<label for="ville">Ville :</label>
                   	<input type="text" id="ville" name="ville" required > 
                </div>
                <div>
                   	<label for="email">Email :</label>
                   	<input type="email" id="email" name="email" required >
                </div>
                <div>
                   <label for="login">Pseudo :</label> 
                    <input type="login" id="login" name="login" required /> 
                </div>
                <div>
                   <label for="password">Mot de Passe :</label> 
                    <input type="password" id="password" name="password"  required /> 
                </div>
               
                <div class="button">
                    <button type="submit" action='membre.php'>Validation :</button>
                </div>
        </form>
      
    </section>
</body>
</html>
