<?php

require "connexion.php";

$sql = "CREATE TABLE IF NOT EXISTS Beneficiaires(
         id INT AUTO_INCREMENT PRIMARY KEY,
         name VARCHAR(50) NOT NULL,
         second_name VARCHAR(50) NOT NULL,
         phone_number INT(10) NOT NULL)";
        
if($connexion->query($sql) === TRUE){
    echo "table créée avec succès";
} 

else 
{
    echo "une erreur s'est produite lors de la création de la table: " . $connexion->error;
}
?>