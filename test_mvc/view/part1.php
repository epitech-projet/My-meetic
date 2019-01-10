<?php
include("connexion.php");
include("contrôleur.php");
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

        <form method="POST" action="part1.php" name="identiter">
                <h4>Inscrivez-vous !!</h4>
            
                <div  class="info"></div>
                    <label for="nom">Nom :</label>
                    <input class="border" type="text" id="nom" name="nom" required >
                    <?php var_dump($_POST['nom']); ?>
                </div>
                <div>
                    <label for="prenom">Prenom :</label>
                    <input type="text" id="prenom" name="prenom" required >
                    <?php var_dump($_POST['prenom']); ?>
                </div>
                 <div>
                    <label for="date">Date de naissance </label>
                    <input type="date" id="date" name="date" min="1950-01-01" max="2000-01-01" required >
                    <?php var_dump($_POST['date']); ?>
                </div>
                <div>
                <label for="sexe">Sexe :</label>
                <input type="checkbox" name="sexe" value="Femme"  /> Femme
                <input type="checkbox" name="sexe" value="Homme" /> Homme
                <?php var_dump($_POST['sexe']); ?>
                </div>
                <div>
                    <label for="ville">Ville :</label>
                    <input type="text" id="ville" name="ville" required >
                    <?php var_dump($_POST['ville']); ?>
                </div>
                <div>
                    <label for="mail">Email :</label>
                    <input type="email" id="email" name="email" required >
                    <?php var_dump($_POST['email']); ?>
                </div>
                <div>
            <label for="password">Mot de Passe :</label> 
            <input type="password" id="password" name="password" value="password" required />
            <?php var_dump($_POST['password']); ?> 
        </div>
                
            <div class="button">
                <button type="submit">Validation :</button>
            </div>
            <?php
            $value->closeCursor();
            ?>
        </form>
        

</body>
</html>