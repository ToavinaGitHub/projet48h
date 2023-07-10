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
</head>

<body>
    <div class="container">

        <div class="person-photo">
            <img src="<?php echo base_url("uploads/users/Capture.PNG")?>" alt="Photo de la personne">
        </div>
        <div class="person-details">
            <div class="detail">
                <span class="label">Nom :<?php echo $user['nom'] ?></span>
                <span class="value" id="nom"></span>
            </div>
            <div class="detail">
                <span class="label">Prénom :<?php echo $user['prenom'] ?></span>
                <span class="value" id="prenom"></span>
            </div>
            <div class="detail">
                <span class="label">Âge :<?php echo $age ?> ans</span>
                <span class="value" id="age"></span>
            </div>
            <div class="detail">
                <span class="label">Poids :<?php echo $user['poids'] ?>Kg</span>
                <span class="value" id="poids"></span>
            </div>
            <div class="detail">
                <span class="label">Taille :<?php echo $user['taille'] ?>cm</span>
                <span class="value" id="taille"></span>
            </div>
            <div class="detail">
                <span class="label">Sexe :<?php if ($user['sexe']==1){ ?> Masculin <?php } else { ?> Feminin <?php } ?> </span>
                <span class="value" id="sexe"></span>
            </div>
            <div class="detail">
                <span class="label">Objectif :<?php echo $ob['nom'] ?></span>
                <span class="value" id="objectif"></span>
            </div>
        </div>
    </div>
</body>

</html>