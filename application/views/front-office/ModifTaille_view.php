<?php
include "inc/head.php";
include "inc/Header.php";
include "inc/left_pannel.php";
?>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification de la taille</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/modifTaille.css")?>">
</head>

<body>
    <div class="container">
        <h1>Taille actuelle : <span id="current-height"><?php echo $user['taille']?></span> cm</h1>
        <div class="height-form">
            <label for="new-height">Nouvelle taille (cm) :</label>
            <form action="<?php echo base_url("Modiftaille_controller/updateTaille")?>" method="post"> 
            <input type="number" id="new-height" name="new-height" min="1" max="300">
            <input type="submit" id="update-btn" value="Mettre à jour"></input >
            </form>
        </div>
    </div>
</body>

</html>