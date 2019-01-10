<?php
include('part1.php');
require('menu_principal.php');
require('profil.php');
require('membre');

include('my_meetic.php');
include('contrôleur.php');

$kiki = new Controller();
$kiki->inscription();

?>