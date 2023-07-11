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
<h1>Activités sportives</h1>

<div class="container">
    <div class="form-container">
        <h2>Ajouter une activité sportive</h2>
        <form action="<?php echo base_url("Sport_controller/insert") ?>" method="post">
            <label for="activity-name">Nom :</label>
            <input type="text" id="activity-name" name="nom" required>
            <label for="activity-details">Détails :</label>
            <input type="text"id="activity-details" name="details" required></input>
            <label for="activity-weight">Poids à perdre/gagner (en kg) :</label>
            <input type="number" id="activity-weight" name="weight" required>
            <label for="activity-goal">Objectif :</label>
            <select id="activity-goal" name="goal" required>
                <?php for($i=0;$i<count($obj);$i++) { ?>
                    <option value="<?php echo $obj[$i]['idObjectif'] ?>"><?php echo $obj[$i]['nom'] ?></option>

                <?php } ?>
            </select>
            <label for="activity-gender">Sexe :</label>
            <select id="activity-gender" name="sexe" required>
                <option value="1">Homme</option>
                <option value="0">Femme</option>

            </select>
            <label for="activity-height">Taille (en cm) :</label>
            <input type="number" id="activity-height" name="height" required>
            <button type="submit">Ajouter</button>
        </form>
    </div>

    <div class="activities-list">
        <h2>Liste des activités sportives</h2>
        <ul>
            <li>
                <?php for($i=0;$i<count($sport);$i++) { ?>
                    <div class="activity-item">
                        <div class="activity-info">

                            <h3>Nom de l'activité :<?php echo $sport[$i]['nom']?></h3>
                            <p>Détails de l'activité : <?php echo $sport[$i]['details']?></p>
                            <p>Poids à perdre/gagner : <?php echo $sport[$i]['poids']?></p>
                            <p>Objectif : <?php echo $sport[$i]['nomObj']?></p>
                            <p>Sexe : <?php  if($sport[$i]['sexe']==0) { ?>Femme <?php } else { ?> Homme<?php } ?></p>
                            <p>Taille : <?php echo $sport[$i]['taille']?></p>
                            <div class="actions">
                                <button class="edit-btn"><a href="<?php echo base_url("ModifSport_controller/index")?>?id=<?php echo $sport[$i]['idActSport'] ?>">Modifier</a></button>
                                <button class="delete-btn"><a href="<?php echo base_url("Sport_controller/delete")?>?id=<?php echo $sport[$i]['idActSport'] ?>">Supprimer</a></button>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </li>
            <!-- Ajoutez ici d'autres éléments d'activité sportive -->
        </ul>
    </div>
</div>

</body>

</html>