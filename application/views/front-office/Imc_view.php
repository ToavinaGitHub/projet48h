<?php
include "inc/head.php";
include "inc/Header.php";
include "inc/left_pannel.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Résultat IMC Moderne</title>
    <style>
        /* Styles CSS modernes */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 100px;
        }

        body{
            background-image: url(<?php echo base_url('assets/img/credit.jpg')?>);
            background-size: cover;
            background-attachment: fixed;
        }
        h1 {
            font-size: 24px;
            margin-top: 0;
        }

        .result {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .result span {
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Résultat de l'IMC</h1>

    <div class="result">
        <span>IMC:</span> <?php echo $imc; ?>
    </div>
    <div class="result">
        <span>Résultat:</span> <?php echo $resultat; ?>
    </div>
</div>
</body>
</html>
<script src="<?php echo site_url("assets/bootstrap/js/bootstrap.min.js")?>"></script>

