<?php
include "inc/head.php";
include "inc/Header.php";
include "inc/left_pannel.php";

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des recettes et exercices</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/suggestion.css")?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/login.css")?>">
    <link rel="stylesheet" href="<?php echo site_url("assets/bootstrap/css/bootstrap.min.css")?>">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .response-card {
            text-align: center;
            margin-bottom: 20px;
        }

        .response-card h4 {
            margin-bottom: 10px;
        }

        .card {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 300px;
            margin-top: 20px;
            padding: 20px;
            border-radius: 5px;
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .card img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        .card h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .card p {
            font-size: 16px;
            color: #555555;
            margin-bottom: 10px;
        }

        .carac-regime {
            background-color: #f1f1f1;
            padding: 20px;
            border-radius: 5px;
            margin-top: 20px;
            text-align: center;
        }

        .carac-regime h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .carac-regime p {
            font-size: 16px;
            color: #555555;
            margin-bottom: 10px;
        }

        .export {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            background-color: green;
            color: #ffffff;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }
        .container-fluid{
            background-image: url(<?php echo base_url('assets/img/suggestion.jpg')?>);
            background-size: cover;
            background-attachment: fixed;
        }

    </style>
</head>

<body>
<div class="container-fluid">
    <div class="response-card">
        <h4>Liste des recettes</h4>
        <div class="recettes-container">
            <?php for($i=0;$i<count($recettes);$i++) { ?>
                <div class="card">
                    <img src="<?php echo base_url('uploads/img/recette/'); ?>/<?php echo $recettes[$i]->sary ?> " alt="Image">
                    <h2><?php echo $recettes[$i]->nom ?></h2>
                    <p><?php echo $recettes[$i]->details ?></p>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="response-card">
        <h4>Liste des exercices</h4>
        <div class="recettes-container">
            <?php for($i=0;$i<count($exercices);$i++) { ?>
                <div class="card">
                    <img src="<?php echo base_url('uploads/img/exercice/'); ?>/<?php echo $exercices[$i]->sary ?> " alt="Image">
                    <h2><?php echo $exercices[$i]->nom ?></h2>
                    <p><?php echo $exercices[$i]->details ?></p>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="carac-regime">
        <h2 class="carac-title">Durée : <?php echo $regime['duree'];?> jours</h2>
        <p class="carac-poids">Poids cible : <?php echo $regime['poids'];?> KG</p>
        <p class="carac-duree">Prix : <?php echo $regime['montant']?></p>
        <p class="carac-prix">Date debut : <?php echo $pro['daty']?></p>
    </div>
    <button class="export" onclick="generatePDF()">Exporter en PDF</button>
</div>

<script src="<?php echo site_url("assets/bootstrap/js/bootstrap.min.js")?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.3/jspdf.umd.min.js"></script>
<script>
    function generatePDF() {
        var recettes = <?php echo json_encode($recettes); ?>;
        var exercices = <?php echo json_encode($exercices); ?>;
        var doc = new jsPDF();

        // Liste des recettes
        doc.setFontSize(18);
        doc.text('Liste des recettes', 10, 10);
        doc.setFontSize(12);
        var yPos = 20;
        for (var i = 0; i < recettes.length; i++) {
            var recette = recettes[i];
            doc.text(recette.nom, 10, yPos);
            doc.text(recette.details, 10, yPos + 10);
            yPos += 20;
        }

        // Liste des exercices
        doc.setFontSize(18);
        doc.text('Liste des exercices', 10, yPos);
        doc.setFontSize(12);
        yPos += 10;
        for (var i = 0; i < exercices.length; i++) {
            var exercice = exercices[i];
            doc.text(exercice.nom, 10, yPos);
            doc.text(exercice.details, 10, yPos + 10);
            yPos += 20;
        }

        // Enregistrement du fichier PDF
        doc.save('liste_recettes_exercices.pdf');
    }
</script>
</body>

</html>