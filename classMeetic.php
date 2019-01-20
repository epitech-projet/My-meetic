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
		$value = "SELECT * FROM membre WHERE sexe LIKE '%{$_POST['sexe']}%'";
		$value2 = $this->pdo->prepare($value);
		$value2->bindValue(':sexe',$_POST['sexe'], PDO::PARAM_STR);
		$value2->execute();
		
	}

	public function profil()
	{
		$value = "SELECT nom,prenom FROM membre WHERE login= :login AND mot_de_passe = :password";
		$value2 = $this->pdo->prepare($value);
		$value2->bindValue(':login',$_POST['login'], PDO::PARAM_STR);
    	$value2->bindValue(':password',$_POST['password'], PDO::PARAM_STR);
		$value2->execute();
		$profil = $value2->fetchall();
		return $profil;
	}

	public function age()
	{

	}

	public function ville()
	{
		$value = "SELECT ville from membre order by ville ASC";
		$value2 = $this->pdo->prepare($value);
		$value2->execute();
		$ville = $value2->fetchall(PDO::FETCH_ASSOC);
		return $ville;

	}

	public function sex_local()
	{
		$value = "SELECT * FROM membre WHERE ville = :ville AND sexe = :sexe ";
		$value2 = $this->pdo->prepare($value);
		$value2->bindValue(':sexe',$_POST['sexe'], PDO::PARAM_STR);
		$value2->bindValue(':ville',$_POST['ville'], PDO::PARAM_STR);
		$value2->execute();
		$sex_local=$value2->fetchall();
		return $sex_local;
	}

	public function search_sex()
	{
		$value ="SELECT*FROM membre WHERE sexe = :sexe ";
		$value2 = $this->pdo->prepare($value);
		$value2->bindValue(':sexe',$_POST['sexe'], PDO::PARAM_STR);
		$value2->execute();
		$search_sex= $value2->fetchall();
		return $search_sex;
	}

	public function search_local()
	{
		$value ="SELECT*FROM membre WHERE ville = :ville"; 
		$value2 = $this->pdo->prepare($value);
		$value2->bindValue(':ville',$_POST['ville'], PDO::PARAM_STR);
		$value2->execute();
		$search_local= $value2->fetchall();
		return $search_local;
	}

	public function display()
	{
		$value ="SELECT*FROM membre ";
		$value2 = $this->pdo->prepare($value);
		$value2->execute();
		$kiki= $value2->fetchall();
		//echo $kiki;	
		
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