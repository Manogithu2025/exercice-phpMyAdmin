<?php
require "connexion.php"; // Ajout du point-virgule

$id = $_GET["id"];

$sql = "DELETE FROM beneficiaires WHERE id = $id"; // Ajout du point-virgule et correction du nom de la table

if ($connexion->query($sql) === TRUE) {
    echo "Utilisateur supprimé avec succès";
} else {
    echo "Erreur lors de la suppression de l'utilisateur: " . $connexion->error;
}
?>