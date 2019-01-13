<?php
class Connect
{
	public function __construct()
	{	
	    $this->pdo = new PDO("mysql:host=localhost;dbname=my_meetic",'root','root');
    	$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	echo "connexion possible";
	}

	public function read()
	{
		$value = "SELECT*FROM membre ORDER BY date_naissance";
		$value2 = $this->pdo->prepare($value);
		$value2->execute();
		/*return $value2->fetchall();*/
	}

	public function create()
	{
		$value ='INSERT INTO membre(nom,prenom,date_naissance,sexe,ville,email,login,mot_de_passe)VALUES(:surname, :name, :date, :sexe, :ville, :email, :login ,:password)';
    	$value2 = $this->pdo->prepare($value);
    	$value2->bindValue(':surname',$_POST['surname'], PDO::PARAM_STR);	
    	$value2->bindValue(':name',$_POST['name'], PDO::PARAM_STR);
    	$value2->bindValue(':date',$_POST['date'], PDO::PARAM_STR);
    	$value2->bindValue(':sexe',$_POST['sexe'], PDO::PARAM_STR);
    	$value2->bindValue(':ville',$_POST['ville'], PDO::PARAM_STR);
    	$value2->bindValue(':email',$_POST['email'], PDO::PARAM_STR);
    	$value2->bindValue(':login',$_POST['login'], PDO::PARAM_STR);
    	$value2->bindValue(':password',$_POST['password'], PDO::PARAM_STR);
    	return $value2->execute();
	}
}
?>