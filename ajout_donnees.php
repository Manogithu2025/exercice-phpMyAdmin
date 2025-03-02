<?php 
require "connexion.php"; // Added semicolon
require "get_data.php"; // Added semicolon


$sql = "INSERT INTO beneficiaires(name, second_name, phone_number) VALUES ('$name', '$second_name', '$phone_number')";

if($connexion->query($sql) === TRUE)

{
    echo "Données inserés avec succès";
}
else
{
    echo "Erreur lors de l'insertion des donnés: " . $connexion->error;
}
?>