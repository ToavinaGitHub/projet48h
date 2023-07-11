<?php
include "inc/head.php";
include "inc/Header.php";
include "inc/left_pannel.php";
?>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recettes</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/recette.css")?>">
</head>

<body>
    <h1>Recettes</h1>

    <div class="container">
        <div class="form-container">
            <h2>Ajouter une recette</h2>
            <form action="<?php echo base_url("Modifob_controller/updateob") ?>" method="post" >
                <label for="recipe-name">Nom :</label>
                <input type="text" id="recipe-name" name="recipe-name" required>
                <label for="recipe-details">Détails :</label>
                <textarea id="recipe-details" name="recipe-details" required></textarea>
                <label for="recipe-photo">Photo :</label>
                <input type="file" id="recipe-photo" name="recipe-photo" accept="image/*" required>
                <button type="submit">Ajouter</button>
            </form>
        </div>

        <div class="recipes-list">
            <h2>Liste des recettes</h2>
            <ul>
                <li>
                    <div class="recipe-item">
                        <img src="recipe1.jpg" alt="Recette 1">
                        <div class="recipe-info">
                            <h3>Nom de la recette 1</h3>
                            <p>Détails de la recette 1</p>
                            <div class="actions">
                                <button class="edit-btn">Modifier</button>
                                <button class="delete-btn">Supprimer</button>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- Ajoutez ici d'autres éléments de recette -->
            </ul>
        </div>
    </div>

</body>

</html>