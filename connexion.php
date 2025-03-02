<?php 
$server_name = "localhost";
$user_name = "root";
$password = "";
$dtb_name = "bibliotheque_electronique";

$connexion = new mysqli($server_name, $user_name, $password, $dtb_name);

if ($connexion->connect_error) {
    die("une erreur s'est produite lors de la tentative de connexion à la base de donnée: " . $connexion->connect_error);
}

// echo "connexion etablie avec succès";
?>