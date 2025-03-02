<?php

require "connexion.php";
$sql = "SELECT * FROM beneficiaires";

$resultat = $connexion->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        .container_utilisateur {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #faedcd;
            padding: 24px;
            border-radius: 24px;
            margin: 12px;
            width: 200px;
        }
        .grand_contenant {
            display: flex;
        }
    </style>
</head>
<body>
    <div class="grand_contenant">
        <?php
        while ($ligne = $resultat->fetch_object()) {
            $id = $ligne->id;
            $name = $ligne->name;
            $second_name = $ligne->second_name;
            $phone_number = $ligne->phone_number;
        ?>
            <div class="container_utilisateur">
                 <img src="images/avatardefault.png" alt="" height="180px">
                <p><?php echo "$name $second_name"; ?></p>
                <p style="color: #e76f51"><?php echo $phone_number; ?></p>
                <button onclick="supprimer_beneficiaire(<?php echo $id; ?>)">
                    <img src="images/Delete.png" alt="" height="50px">
                </button>
            </div>
        <?php
        }
        ?>
    </div>
    <script>
        async function supprimer_beneficiaire(id) {
            const confirme = confirm("Voulez-vous vraiment supprimer cet utilisateur ?");
            if (confirme) {

                console.log(id);
                
                await fetch(`supprimer.php?id=${id}`);
                location.reload();
            }
        }
    </script>