<?php
require_once'classMeetic.php';
$membre_Connect = new Connect();
$moco = $membre_Connect->read();
$search_s = $membre_Connect->search_sex();
$search_l = $membre_Connect->search_local();
$search_ls = $membre_Connect->sex_local();
$villo = $membre_Connect->ville();
       
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="page2.css">
    <link rel="stylesheet" type="text/css" href="my_style.css" />
    <title></title>
</head>

<body>
    <header>
         <h1> My Meetic </h1>
        <h4>Exigez des rencontres de qualité</h4>
        <h3>Site de rencontre serieux </h3>
        <a href="profil.php">Votre profil</a>    
    </header>
    <article>
    	<h1> Selectionnez un profil pour creer une nouvelle rencontre </h1>        
    </article>
    <form method="POST" id="envoie">
                <h4>Recherche</h4>
                <div  class="info"></div>
                <div>
                    <label for="sexe">Sexe :</label>
                    <input type="checkbox" id="sexe" name="sexe" value="Femme" /> Femme
                    <input type="checkbox" id="sexe" name="sexe" value="Homme" /> Homme 
                    <input type="checkbox" id="sexe" name="sexe" value="Mix">
                </div>
                <div>
                    <label for="ville">Localisation :</label>
                    <select name="ville" id="ville">
                        <option value="" selected="">---</option>
                        <?php 

                        $villo = array_unique($villo,SORT_REGULAR);
                        

                        foreach($villo as $localisation) { ?>

                        <option value="<?= $localisation['ville'] ?>"> <?= $localisation["ville"] ?></option>
                    <?php } ?>
                            
                    </select> 
                </div>

                <div class="button">
                    <button type="submit">Validation :</button>
                </div>
    </form>
   <table>
      
        <thead>
            <tr>
                <th>[ Pseudo ]</th>
                <th>[ Nom ]</th>
                <th>[ Prenom ]</th>
                <th>[ Ville ]</th>
                <th>[ date ]</th>
                <th>[ sexe ]</th>
            </tr>
        </thead>
         <?php
       foreach ($search_l as $local){
       ?>
        <tbody>
            <tr>
                <td><?php  echo $local['login']."\n"; ?></td>
                <td><?php echo $local['nom']."\n"; ?></td>
                <td><?php echo $local['prenom']."\n"; ?></td>
                <td><?php echo $local['ville']."\n"; ?></td>
                <td><?php echo $local['date_naissance']."\n";?></td>
                <td><?php echo $local['sexe']."\n";}?></td>
            </tr>
        <?php foreach ($search_s as $sex) {
           ?>
             <tr>
                <td><?php echo $sex['login']."\n"; ?></td>
                <td><?php echo $sex['nom']."\n"; ?></td>
                <td><?php echo $sex['prenom']."\n";?></td>
                <td><?php echo $sex['ville']."\n";?></td>
                <td><?php echo $sex['date_naissance']."\n"; ?></td>
                <td><?php echo $sex['sexe']."\n"; }?></td>
            </tr>

        <?php foreach ($search_ls as $ls) {
           ?>
             <tr>
                <td><?php echo $ls['login']."\n"; ?></td>
                <td><?php echo $ls['nom']."\n"; ?></td>
                <td><?php echo $ls['prenom']."\n";?></td>
                <td><?php echo $ls['ville']."\n";?></td>
                <td><?php echo $ls['date_naissance']."\n"; ?></td>
                <td><?php echo $ls['sexe']."\n"; }?></td>
            </tr>
        </tbody>     
   </table>  
      
        
</body>

</html>