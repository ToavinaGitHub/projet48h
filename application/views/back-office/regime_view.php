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
                <label for="activity-name">Duree :</label>
                <input type="text" id="activity-name" name="duree" required>
               
                <label for="activity-goal">Objectif :</label>
                <select id="activity-goal" name="goal" required>
                <?php for($i=0;$i<count($obj);$i++) { ?> 
                    <option value="<?php echo $obj[$i]['idObjectif'] ?>"><?php echo $obj[$i]['nom'] ?></option>
                   
                    <?php } ?>
                </select>
                <label for="activity-weight">Poids à perdre/gagner (en kg) :</label>
                <input type="number" id="activity-weight" name="poids" required>
                <label for="activity-details">Détails :</label>
                <input type="text"id="activity-details" name="detail" required></input>
                
                <label for="activity-gender">Sexe :</label>
                <select id="activity-gender" name="sexe" required>
                    <option value="1">Homme</option>
                    <option value="0">Femme</option>
                    
                </select>
                <label for="activity-height">Montant :</label>
                <input type="number" id="activity-height" name="montant" required>
                <label for="activity-weight">Poucentage viande  :</label>
                <input type="number" id="activity-weight" name="viande" required>
                <label for="activity-weight">Poucentage poisson :</label>
                <input type="number" id="activity-weight" name="poisson" required>
                <label for="activity-weight">Poucentage poulet :</label>
                <input type="number" id="activity-weight" name="poulet" required>
                <button type="submit">Ajouter</button>
            </form>
        </div>

        <div class="activities-list">
            <h2>Liste des activités sportives</h2>
            <ul>
                <li>
                <?php for($i=0;$i<count($regime);$i++) { ?> 
                    <div class="activity-item">
                        <div class="activity-info">

                            <h3>Duree :<?php echo $regime[$i]['duree']?>j</h3>
                            <p>Ogjectif : <?php echo $regime[$i]['nomObj']?></p>
                            <p>Poids à perdre/gagner : <?php echo $regime[$i]['poids']?>Kg</p>
                            <p>details : <?php echo $regime[$i]['details']?></p>
                            <p>Sexe : <?php  if($regime[$i]['sexe']==0) { ?>Femme <?php } else { ?> Homme<?php } ?></p>
                            <p>Montant : <?php echo $regime[$i]['montant']?>ar</p>
                            <p>Pourcentage viande : <?php echo $regime[$i]['pourcViande']?>%</p>
                            <p>Pourcentage poisson  : <?php echo $regime[$i]['pourcPoisson']?>%</p>
                            <p>Pourcentage poulet : <?php echo $regime[$i]['pourcPoulet']?>%</p>
                            <div class="actions">
                                <button class="edit-btn"><a href="<?php echo base_url("ModifRegime_controller/index")?>?id=<?php echo $regime[$i]['idRegime'] ?>">Modifier</a></button>
                                <button class="delete-btn"><a href="<?php echo base_url("Regime_controller/delete")?>?id=<?php echo $regime[$i]['idRegime'] ?>">Supprimer</a></button>
                                    
                                <button class="edit-btn"><a href="<?php echo base_url("Recette_controller/index")?>?id=<?php echo $regime[$i]['idRegime'] ?>">Ajouter</a></button>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </li>
               
            </ul>
        </div>
    </div>

</body>

</html>