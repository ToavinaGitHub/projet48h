<?php
// Inclure le fichier de configuration de la base de données

// Fonction pour établir une connexion à la base de données
function connectDB() {
    $conn = new mysqli("localhost", "root", "", "48h");

    // Vérifier les erreurs de connexion
    if ($conn->connect_error) {
        die("Échec de la connexion à la base de données: " . $conn->connect_error);
    }

    return $conn;
}

// Fonction pour obtenir le régime le plus proche des paramètres de poids et de sexe
function getRegimeBy($poid, $sexe , $obj) {
    $conn = connectDB();

    // Requête pour récupérer le régime le plus proche
    $sql = "SELECT *
            FROM regime
            WHERE poids <= $poid
            AND sexe = $sexe
            AND idObjectif = $obj
            ORDER BY poids DESC
            LIMIT 1";

    $result = $conn->query($sql);

    // Vérifier s'il y a un résultat
    if ($result->num_rows > 0) {
        $regime = $result->fetch_assoc();
        return $regime;
    } else {
        return null;
    }
}

// Fonction pour obtenir les recettes d'un régime
function getRecettesByRegime($idRegime) {
    $conn = connectDB();

    // Requête pour récupérer les recettes du régime
    $sql = "SELECT r.*
            FROM recette r
            JOIN RegimeRecette rr ON r.idrecette = rr.idRecette
            WHERE rr.idRegime = $idRegime";


    $result = $conn->query($sql);

    // Vérifier s'il y a des recettes
    if ($result->num_rows > 0) {
        $recettes = array();

        while ($row = $result->fetch_assoc()) {
            $recettes[] = $row;
        }

        return $recettes;
    } else {
        return null;
    }
}

// Vérifier si une requête POST a été envoyée
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les données du formulaire
    $poids = $_POST['poids'];
    $sexe = 1;
    $obj = 1;
    // Appeler la fonction getRegimeBy
    $regime = getRegimeBy($poids, $sexe,$obj);

    if ($regime) {
        // Récupérer les recettes du régime
        $recettes = getRecettesByRegime($regime['idRegime']);
        $regime['recettes'] = $recettes;
    }

    // Retourner les résultats au format JSON
    header('Content-Type: application/json');
    echo json_encode($regime);
    exit;
}

?>
