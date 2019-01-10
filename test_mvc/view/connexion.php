<?php
    
$serveur = 'localhost';
$user = 'root';
$password = 'root';

try{
    $connexion = new PDO("mysql:host=$serveur;dbname=Meetic",$user, $password);
    $connexion-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connexion possible";
    
}
catch(PDOException $e)
{
	echo "echec connexion". $e->getMessage();
}