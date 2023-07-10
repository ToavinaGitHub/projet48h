<?php
include "inc/head.php";
include "inc/Header.php";
include "inc/left_pannel.php";
?>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification de l'objectif</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/modifObjectif.css")?>">
</head>

<body>
    <div class="container">
        <h1>Objectif actuel : <span id="current-goal"><?php echo $ob['nom']?></span></h1>
        <div class="goal-form">
            <label for="new-goal">Nouvel objectif :</label>
            <form action="<?php echo base_url("Modifob_controller/updateob") ?>" method="post">
            <select id="new-goal" name="new-goal">
                 <?php for($i=0;$i<count($obj);$i++) { ?> 
                <option value="<?php echo $obj[$i]['idObjectif'] ?>"><?php echo $obj[$i]['nom'] ?></option>
                <?php } ?>
            </select>
            <input type="submit"id="update-btn" value="Mettre à jour"></input>
            </form>
        </div>
    </div>
</body>

</html>