<?php
include "inc/head.php";
include "inc/Header.php";
include "inc/left_pannel.php";
?>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification du poids</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/modifTaille.css")?>">
</head>

<body>
<div class="container">
    <h1>Poids actuel : <span id="current-weight"><?php echo $user['poids']?></span> kg</h1>
    <div class="weight-form">
        <label for="new-weight">Nouveau poids (kg) :</label>
        <form action="<?php echo base_url("Modifpoids_controller/updatePoids") ?>" method="post">
            <input type="number" id="new-weight" name="new-weight" min="1" max="500">
            <center>
                <input type="submit" id="update-btn" value="Mettre à jour"></input>
            </center>
        </form>
    </div>
</div>
</body>

</html>