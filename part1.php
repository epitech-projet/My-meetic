<?php
require("connexion.php");
/*require("inscription.php");
$Connect = new Connect();
$inscription = new inscription($Connect);*/
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
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
    <article>
        <h1>INSCRIPTION</h1>
    </article>
    <section>
         <?/*= $inscription->getform();*/?>
         <form method="POST" action="envoie.php" name="identiter" id="envoie">
                <h4>Inscrivez-vous !!</h4>
                <div  class="info"></div>
                <div>
                    <label for="nom">Nom :</label>
                    <input class="border" type="text" id="nom" name="nom" required >
                </div>
                <div>
                   <label for="prenom">Prenom :</label>
                    <input type="text" id="prenom" name="prenom" required > 
                </div>
                <div>
                    <label for="date">Date de naissance </label>
                    <input type="date" id="date" name="date" min="1950-01-01" max="2000-01-01" required >
                </div>
                <div>
                   <label for="sexe">Sexe :</label>
                    <input type="checkbox" name="sexe" value="Femme"  /> Femme
                    <input type="checkbox" name="sexe" value="Homme" /> Homme 
                </div>
                <div>
                   <label for="ville">Ville :</label>
                    <input type="text" id="ville" name="ville" required > 
                </div>
                <div>
                    <label for="mail">Email :</label>
                    <input type="email" id="email" name="email" required >
                </div>
                <div>
                   <label for="password">Mot de Passe :</label> 
                    <input type="login" id="password" name="password" value="password" required /> 
                </div>
                <div>
                   <label for="pass">Mot de Passe :</label> 
                    <input type="password" id="pass" name="pass" value="pass" required /> 
                </div>
                

                <div class="button">
                    <button type="submit">Validation :</button>
                </div>
        </form>
    </section>
    <footer>       
    </footer>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
        <script type="text/javascript" src="envoie.js"></script>
</body>
</html>