<?php
include "inc/head.php";
include "inc/Header.php";
include "inc/left_pannel.php";
$baseUrlRec = base_url('uploads/img/recette/');
$baseUrlEx = base_url('uploads/img/exercice/');
session_start();
?>
<link rel="stylesheet" href="<?php echo base_url("assets/css/suggestion.css")?>">
<link rel="stylesheet" href="<?php echo base_url("assets/css/login.css")?>">
</head>
<body>
<link rel="stylesheet" href="<?php echo site_url("assets/bootstrap/css/bootstrap.min.css")?>">
<link rel="stylesheet" href="<?php echo site_url("assets/css/styles.min.css")?>">
<script src="<?php echo site_url("assets/js/parsley.min.js")?>"></script>
<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .gradient-form {
            background: linear-gradient(to bottom, #eee, #fff);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: flex-end;
        }

        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .form-container input {
            width: 300px;
            padding: 10px;
            border: none;
            border-radius: 5px;
            margin-bottom: 10px;
            font-size: 16px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .form-container button {
            width: 300px;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            background-color: #353535;
            color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: #0056b3;
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

        .response-card .actSport {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            margin-top: 40px;
        }

        .recettes-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin: 0 -10px;
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

        .livrer-button {
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

        .livrer-button:hover {
            background-color: green;
        }


        .carac-title {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .carac-poids,
        .carac-duree,
        .carac-prix,
        .carac-description {
            font-size: 16px;
            color: #555555;
            margin-bottom: 10px;
        }

        .gradient-form {
            background-image: url(<?php echo base_url('assets/img/suggestion.jpg')?>);
            background-size: cover;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: flex-end;
            background-attachment: fixed;
        }


    </style>
</head>
<body style="background-color: white;">
<section class="col-12 gradient-form"   >
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-ng-12">
                <div class="container-fluid">
                    <div class="form-container" style="background-color: white;padding: 10%;">
                        VOTRE OBJECTIF
                        <form id="objectif-form">
                            <label for="poids-input">VOTRE OBJECTIF</label>
                            <input type="number" id="poids-input" placeholder="ex : +8kg">
                            <input type="hidden" id="idUser" value="<?php echo $_SESSION['user']->idUser;?>">
                            <button type="submit">OK</button>
                        </form>
                    </div>

                <div class="response-card">
                    <!-- Afficher les recettes ici -->
                </div>
                    <div class="actSport">

                    </div>

                    <div class="carac-regime">
                        <h2 class="carac-title"></h2>
                        <p class="carac-poids"></p>
                        <p class="carac-duree"></p>
                        <p class="carac-prix"></p>
                        <p class="carac-description"></p>
                    </div>

                    <button class="livrer-button">Livrer</button>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    var divDesc = document.getElementsByClassName("caracRegime")[0];
    $(document).ready(function() {
        $('#objectif-form').submit(function(event) {
            event.preventDefault(); // Empêche le comportement par défaut du formulaire

            var poids = $('#poids-input').val();
            var idUser = $('#idUser').val();

            $.ajax({
                url: '<?php echo base_url("json/suggestion.php")?>',
                method: 'POST',
                data: { poids: poids,idUser:idUser },
                success: function(response) {
                    console.log(response);

                    // Créer le contenu HTML des résultats principaux
                   // var html = '<h2>' + response.details + '</h2>';
                    //html += '<p>Poids: ' + response.poids + '</p>';
                    //html += '<p>Durée: ' + response.duree + '</p>';
                    //html += '<p>Montant: ' + response.montant + '</p>';

                    var html = "";
                    // Ajouter le contenu HTML à la div response-card principale
                    $('.response-card').html(html);
                    $('.actSport').html(html);

                    $('.caracRegime').html(html);

                    // Créer le contenu HTML des recettes du régime
                    var recettesHtml = '<div class="recettes-container">'; // Ajoutez cette ligne pour entourer les recettes

                    for (var i = 0; i < response.recettes.length; i++) {
                        recettesHtml += '<div class="card">';
                        recettesHtml += '<img src="<?php echo $baseUrlRec;?>/'+response.recettes[i].sary+' " alt="Image">';
                        recettesHtml += '<h2>' + response.recettes[i].nom + '</h2>';
                        recettesHtml += '<p>' + response.recettes[i].details + '</p>';
                        recettesHtml += '</div>';
                    }

                    var acti = '<div class="recettes-container">'; // Ajoutez cette ligne pour entourer les recettes

                    for (var i = 0; i < response.exercices.length; i++) {
                        acti += '<div class="card">';
                        acti += '<img src="<?php echo $baseUrlEx;?>/'+response.exercices[i].sary+' " alt="Image">';
                        acti += '<h2>' + response.exercices[i].nom + '</h2>';
                        acti += '<p>' + response.exercices[i].details + '</p>';
                        acti += '</div>';
                    }

                    acti += '</div>'; // Ajoutez cette ligne pour fermer le conteneur des recettes

                    $('.carac-title').text(response.details);
                    $('.carac-poids').text('POIDS CIBLE: ' + response.poids+' kg');
                    $('.carac-duree').text('DURÉE DU REGIME: ' + response.duree+" jours");
                    $('.carac-prix').text('PRIX DU REGIME: ' + response.montant+" Ar");
                    $('.carac-description').text(response.description);


                    // Ajouter le contenu HTML des recettes à la div response-card
                    $('.response-card').append(recettesHtml);
                    $('.actSport').append(acti);

                    var livrerButton = '<a href="<?php echo base_url('Suggestion_controller/livrer')?>?idRegime=' + response.idRegime + '&idActSport='+response.actSport.idActSport+'"><button class="livrer-button" style="padding: 10px 20px;border: none;border-radius: 5px;font-size: 16px;background-color: green;color: #ffffff;cursor: pointer;transition: background-color 0.3s ease;width: 100%;">Livrer</button></a>';
                    $('.livrer-button').replaceWith(livrerButton);
                },
                error: function() {
                    console.log('Une erreur s\'est produite lors de la requête AJAX.');
                }
            });
        });
    });
</script>

<script src="<?php echo site_url("assets/bootstrap/js/bootstrap.min.js")?>"></script>
</body>
</html>
