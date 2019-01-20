<?php 
require_once'classMeetic.php';
$membre_Connect = new Connect();
$moco = $membre_Connect->read();
$search_s = $membre_Connect->search_sex();
$search_l = $membre_Connect->search_local();
$search_ls = $membre_Connect->sex_local();
$villo = $membre_Connect->ville();
$perso = $membre_Connect->profil();

?>
<!DOCTYPE html>
<html lang="fr" dir="">

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
        <a href="menu_principal.php">Menu Principal</a>    
    </header>
    <table>
      
        <thead>
            <tr>
            	<?php 
            	foreach ($perso as $profil2) {
            	  	 ?>
                <th>BIENVENUE <br>
                <?php echo $profil2['login']; ?></th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php  echo $profil2['login']."\n"; ?></td>
                <td><?php echo $profil2['nom']."\n"; ?></td>
                <td><?php echo $profil2['prenom']."\n"; ?></td>
                <td><?php echo $profil2['ville']."\n"; ?></td>
                <td><?php echo $profil2['date_naissance']."\n";?></td>
                <td><?php echo $profil2['sexe']."\n";}?></td>
            </tr>
        
        </tbody>     
   </table>  
</body>
</html>