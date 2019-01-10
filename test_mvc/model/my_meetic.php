<?php
class member
{
// 1st step: créer constructeur 
// 2nd: link le controleur avec la vue
	public function __construct()
	{
		try{
    	$connexion = new PDO("mysql:host=localhost;dbname=Meetic",'root', 'root');
    	$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    		echo "connexion possible";
		}
		catch(PDOException $e)
		{
			echo "echec connexion". $e->getMessage();
		}
	}
	
	public function create()
	{
	$value = $connexion->query('INSERT INTO membre(nom, prenom, date_naissance, sexe, ville, email, mot_de_passe)VALUES(:nom, :prenom,:date,:sexe,:ville,:email,:password)');
	$value->bindValue('nom',$_POST['nom'],PDO::PARAM_STR);	
	$value->bindValue('prenom',$_POST['prenom'],PDO::PARAM_STR);
	$value->bindValue('date',$_POST['date'],PDO::PARAM_STR);
	$value->bindValue('sexe',$_POST['sexe'],PDO::PARAM_STR);
	$value->bindValue('ville',$_POST['ville'],PDO::PARAM_STR);
	$value->bindValue('email',$_POST['email'],PDO::PARAM_STR);
	$value->bindValue('password',$_POST['password'],PDO::PARAM_STR);
	$value->execute();

  return $value;
	}
}

	


