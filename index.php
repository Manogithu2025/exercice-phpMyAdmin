<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=m, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        .body_container {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #a3b7ca;
            /* background-color:rgb(240, 240, 240); */
            padding: 24px;
        }
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
<body class="body_container">
    <h1>MA PAGE</h1>
    <h3>NOUS SOMMES DES DEVELOPPEURS </h3>
    <H2>VOICI LES BENEFICIAIRES</H2>

    <?php include "recuperation_donnees.php" ?>
</body>
</html>