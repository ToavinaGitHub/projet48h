<?php
include "inc/head.php";
include "inc/Header.php";
include "inc/left_pannel.php";
?>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails d'une personne</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/profil.css")?>">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f1f1f1;
        }

        .container {
            padding: 5%;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .person-photo {
            text-align: center;
            margin-bottom: 20px;
        }

        .person-photo img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 50%;
        }

        .person-details {
            text-align: center;
        }

        .detail {
            margin-bottom: 10px;
        }

        .label {
            font-weight: bold;
        }
        .container {
            background-image: url(<?php echo base_url('assets/img/profil.jpg')?>);
            background-size: cover;
            background-attachment: fixed;
        }
    </style>
</head>

<body>
<div class="container">
    <div class="person-photo">
        <img src="<?php echo base_url("uploads/img/user/user.png")?>" alt="Photo de la personne">
    </div>
    <div class="person-details">
        <div class="detail">
            <span class="label">Nom :</span>
            <span class="value"><?php echo $user['nom'] ?></span>
        </div>
        <div class="detail">
            <span class="label">Prénom :</span>
            <span class="value"><?php echo $user['prenom'] ?></span>
        </div>
        <div class="detail">
            <span class="label">Âge :</span>
            <span class="value"><?php echo $age ?> ans</span>
        </div>
        <div class="detail">
            <span class="label">Poids :</span>
            <span class="value"><?php echo $user['poids'] ?> Kg</span>
        </div>
        <div class="detail">
            <span class="label">Taille :</span>
            <span class="value"><?php echo $user['taille'] ?> cm</span>
        </div>
        <div class="detail">
            <span class="label">Sexe :</span>
            <span class="value"><?php echo ($user['sexe'] == 1) ? 'Masculin' : 'Féminin' ?></span>
        </div>
        <div class="detail">
            <span class="label">Objectif :</span>
            <span class="value"><?php echo $ob['nom'] ?></span>
        </div>
    </div>
</div>
</body>

</html>
