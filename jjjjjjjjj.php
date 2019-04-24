<?php
$nom = "Adolphi";
$prenom = "Marjorie";
$pseudo = "Marjo";


?>

<!DOCTYPE html>
<html lang="fr" dir="">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="my_style.css" />

    <title></title>
</head>

<body>
    <button type="submit"></button>

<form method="POST" action="juste.php">
    <p>
        nom : <input type="text" name="nom" id="nom">
        prenom : <input type="text" name="prenom" id="prenom">
        pseudo : <input type="text" name="pseudo" id="pseudo">
        <input type="submit" value="Se connecter !" id="submit" >
    </p>
</form>
    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>

    $(document).ready(function(){
        $("#submit").click(function(e){
            e.preventDefault();

            $.post(
                'connexion.php',
                {
                    nom : $("#nom").val(),
                    prenom : $("#prenom").val(),
                    pseudo : $("#pseudo").val()
                },
                function(data){ 

                    if (data == 'Success') {
                        $("#resultat").html("<p>Vous avez été connecté avec succes ! </p>");
                    }
                    else{
                        $("#resultat").html("<p> Erreur lors de la connexion...</p>");
                    } 
                },
                'text'
                );
        });
    });

</script>


</body>
</html>
