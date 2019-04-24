<?php
require_once 'classMeetic.php';
$membre_Connect = new Connect();
$membre_Connect->verify_login();
if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['pseudo']) ){
    if ($_POST["nom"] == $nom && $_POST["prenom"] == $prenom && $_POST["pseudo"] == $pseudo ) {
        session_start();
        $_SESSION['nom'] = $nom;
        echo "Success";
    }
    else{
        echo " Failed";
    }   
}
