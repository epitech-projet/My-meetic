<?php
class inscription(){
	private $Connect;
	public function __conctruct($Connect){
		$this->Connect = $Connect;
		}

public $nom /*= $_POST['nom']*/;
public $prenom /*= $_POST['prenom']*/;
public $date /*= $_POST['date']*/;
public $sexe /*= $_POST['sexe']*/;
public $ville /*= $_POST['ville']*/;
public $email /*= $_POST['email']*/;
public $password /*= $_POST['password']*/;
public $pass;
public $salt = 'Mymeetic';
public $active = 0;
public $token_mail = 'tockenmeetic';

	public function getform(){
	?>	<form method="POST" action="envoie.php" name="identiter" id="envoie">
                <h4>Inscrivez-vous !!</h4>
                <div  class="info"></div>
                <label for="nom">Nom :</label>
                <input class="border" type="text" id="nom" name="nom" required >
                <label for="prenom">Prenom :</label>
                <input type="text" id="prenom" name="prenom" required >
                <label for="date">Date de naissance </label>
                <input type="date" id="date" name="date" min="1950-01-01" max="2000-01-01" required >
                <label for="sexe">Sexe :</label>
                <input type="checkbox" name="sexe" value="Femme"  /> Femme
                <input type="checkbox" name="sexe" value="Homme" /> Homme
                <label for="ville">Ville :</label>
                <input type="text" id="ville" name="ville" required >
                <label for="mail">Email :</label>
                <input type="email" id="email" name="email" required >
                <label for="password">Mot de Passe :</label> 
                <input type="login" id="password" name="password" value="password" required />
                <label for="pass">Mot de Passe :</label> 
                <input type="password" id="pass" name="pass" value="pass" required />

                <div class="button">
                	<button type="submit">Validation :</button>
                </div>
        </form>
        <?php }

        public function proteger($pass)
        {
        	$this->pass = sha1($pass. $salt);
        }

        public function verifier_email($var)
        {
        	return (!empty($var))? filter_var($var,FILTER_SANITIZE_STRING):null;
        }

        public function verifier_password($var)
        {
        	$verifier_password = $Connect->Connect->prepare('SELECT password FROM membre WHERE password =?');
        	$verifier_password->execute(array($password));
        	if (!is_object($verifier_password)){}
        }

    	public function envoiform()
    	{
    		$membre = $Connect->Connect->prepare('INSERT INTO membre VALUES (:nom, :prenom, :date, :sexe, :ville, :email, :password, :pass, :token_mail, :active)');
    		$membre->execute(array(
    			":nom"=> $nom,
    			":prenom" => $prenom,
    			":date"=> $date,
    			":sexe"=> $sexe,
    			":ville" => $ville,
    			":email" => $email,
    			":password" => $password,
    			":pass" => $pass,
    			":token_mail" => $token_mail,
    			":active" => $active));

    	}
}







	/*$value = $connexion->prepare('INSERT INTO membre(nom, prenom, date_naissance, sexe, ville, email, mot_de_passe) VALUES(:nom,:prenom,:date,:sexe,:ville,:$email,:$password)');
	$value->bindValue(':nom',$nom,PDO::PARAM_STR);	
	$value->bindValue(':prenom',$prenom,PDO::PARAM_STR);
	$value->bindValue(':date',$date,PDO::PARAM_STR);
	$value->bindValue(':sexe',$sexe,PDO::PARAM_STR);
	$value->bindValue(':ville',$ville,PDO::PARAM_STR);
	$value->bindValue(':email',$email,PDO::PARAM_STR);
	$value->bindValue(':password',$password,PDO::PARAM_STR);
	$value->execute();
	echo $array;*/



?>

	


