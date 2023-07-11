<?php
include "inc/head.php";
include "inc/Header.php";
include "inc/left_pannel.php";
?>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regime</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/sport.css")?>">
</head>

<body>
<h1>REGIME</h1>

<div class="container">
    <div class="form-container">
        <h2>Ajouter Regime</h2>
        <form action="<?php echo base_url("Regime_controller/insert") ?>" method="post">
            <input type="hidden" value="<?php echo $spr['idRegime'] ?>" name="id">
            <label for="activity-name">Duree :</label>
            <input value="<?php echo $spr['duree']?>" type="text" id="activity-name" name="duree" required>

            <label for="activity-goal">Objectif :</label>
            <select id="activity-goal" name="goal" required>
                <?php for($i=0;$i<count($obj);$i++) { ?>
                    <option value="<?php echo $obj[$i]['idObjectif'] ?>"><?php echo $obj[$i]['nom'] ?></option>

                <?php } ?>
            </select>
            <label for="activity-weight">Poids à perdre/gagner (en kg) :</label>
            <input value="<?php echo $spr['poids']?>" type="number" id="activity-weight" name="poids" required>
            <label for="activity-details">Détails :</label>
            <input value="<?php echo $spr['details']?>" type="text"id="activity-details" name="detail" required>

            <label for="activity-gender">Sexe :</label>
            <select id="activity-gender" name="sexe" required>
                <option value="1">Homme</option>
                <option value="0">Femme</option>

            </select>
            <label for="activity-height">Montant :</label>
            <input value="<?php echo $spr['montant']?>" type="number" id="activity-height" name="montant" required>
            <label for="activity-weight">Poucentage viande  :</label>
            <input value="<?php echo $spr['pourcViande']?>" type="number" id="activity-weight" name="viande" required>
            <label for="activity-weight">Poucentage poisson :</label>
            <input value="<?php echo $spr['pourcPoisson']?>" type="number" id="activity-weight" name="poisson" required>
            <label for="activity-weight">Poucentage poulet :</label>
            <input value="<?php echo $spr['pourcVolaille']?>" type="number" id="activity-weight" name="poulet" required>
            <button type="submit">Ajouter</button>
        </form>
    </div>