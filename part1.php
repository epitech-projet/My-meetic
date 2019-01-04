<?php
include('my_meetic.php');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="my_style.css" />
    <script type="text/javascript" href="my_script.js"></script>
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
        
    </article>

        <form method="post" action="membre.php" name="identiter" onsubmit="return checkForm()">
                <h4>Inscrivez-vous !!</h4>
            
                <div  class="info"></div>
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
                <input type="radio" name="sexe" value="Femme" /> Femme
                <input type="radio" name="sexe" value="Homme" /> Homme
                </div>
                <div>
                    <label for="ville">Ville :</label>
                    <input type="text" id="ville" name="ville" required >
                </div>
                <div>
                    <label for="mail">Email :</label>
                    <input type="email" id="mail" name="mail" required >
                </div>
                <div>
            <label for="password">Mot de Passe :</label> 
            <input type="password" id='password' name='password' value="password" required /> 
        </div>
                
            <div class="button">
                <button type="submit">Validation :</button>
            </div>
        </form>
</body>

</html>