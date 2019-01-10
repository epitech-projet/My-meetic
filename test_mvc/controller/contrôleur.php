<?php
// INSERT INTO 

class Controller{

    public function inscription(){
            if(isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['prenom']) && !empty($_POST['prenom'])&& isset($_POST['date']) && !empty($_POST['date'])&& isset($_POST['sexe']) && !empty($_POST['sexe']) && isset($_POST['ville']) && !empty($_POST['ville']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])){
    $membre = new member();
    $membre->create();
    $connect->__conctruct(); 
            }   
    }
}

?> 

