<?php
class Connect
{
private $serveur = 'localhost';
private $base = 'Membre_meetic';
private $user = 'root';
private $password = 'root';
private $pass='';
private $Connect;

	public function __construct($serveur=null,$base=null,$user=null,$password=null)
	{
		if($serveur != null){
			$this->serveur=$serveur;
			$this->base=$base;
			$this->user=$user;
			$this->password=$password;
		}
		try{
	    $connexion = new PDO('mysql:host='.$this->serveur.';dbname='.$this->base, $this->user, $this->password array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
	    	echo "connexion possible";   
		}
		catch(PDOException $e)
		{
		echo "echec connexion". $e->getMessage();
		}
	}
}
?>

	


