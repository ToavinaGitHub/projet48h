<?php
include "inc/head.php";
include "inc/Header.php";
include "inc/left_pannel.php";
?>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activités sportives</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/sport.css")?>">
</head>

<body>
<h1> Modifier Activités sportives</h1>

<div class="container">
    <div class="form-container">
        <h2>Modifier une activité sportive</h2>
        <form action="<?php echo base_url("ModifSport_controller/update") ?>" method="post">
            <input type="hidden" value="<?php echo $spr['idActSport'] ?>" name="id">
            <label for="activity-name">Nom :</label>
            <input type="text" id="activity-name" name="nom" value="<?php echo $spr['nom']?>" required>
            <label for="activity-details">Détails :</label>
            <input type="text"id="activity-details" name="details" value="<?php echo $spr['details']?>" required></input>
            <label for="activity-weight">Poids à perdre/gagner (en kg) :</label>
            <input type="number" id="activity-weight" name="weight" value="<?php echo $spr['poids']?>" required>
            <label for="activity-goal">Objectif :</label>
            <select id="activity-goal" name="goal"  required>
                <?php for($i=0;$i<count($obj);$i++) { ?>
                    <option value="<?php echo $obj[$i]['idObjectif'] ?>"><?php echo $obj[$i]['nom'] ?></option>

                <?php } ?>
            </select>
            <label for="activity-gender">Sexe :</label>
            <select id="activity-gender" name="sexe"  required>
                <option value="1">Homme</option>
                <option value="0">Femme</option>

            </select>
            <label for="activity-height">Taille (en cm) :</label>
            <input type="number" id="activity-height" name="height" value="<?php echo $spr['taille']?>" required>
            <button type="submit">Ajouter</button>
        </form>
    </div>