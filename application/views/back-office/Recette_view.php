<?php
include "inc/head.php";
include "inc/Header.php";
include "inc/left_pannel.php";
?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/rec.css")?>">
</head>

<body>
    <h1>Recettes</h1>
<?php for ($i=0; $i < count($rec); $i++) { ?>
    <div class="recette">
        <img src="recette1.jpg" alt="Recette 1">
        <h2>Nom de la recette :<?php echo $rec[$i]['nom']?></h2>
        <p>Détails de la recette :<?php echo $rec[$i]['details'] ?></p>
        <button class="ajouter"><a href="<?php echo base_url("Recette_controller/index")?>?id=<?php echo $rec[$i]['idRecette'] ?>">Ajouter</a></button>
    </div>

<?php
} ?>
   

    
</body>

</html>