<?php
include "inc/head.php";
include "inc/Header.php";
include "inc/left_pannel.php";
$baseUrl = base_url('uploads/img/recette/obj2.jpg');
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

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .form-container {
            background-color: #f7f7f7;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .form-container form {
            display: flex;
            align-items: center;
        }

        .form-container input[type="text"] {
            flex-grow: 1;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        .form-container input[type="text"]:focus {
            outline: none;
            border-color: #007bff;
        }

        .form-container input[type="submit"] {
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            background-color: #353535;
            color: #ffffff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-container input[type="submit"]:hover {
            background-color: green;
        }

        h4 {
            margin-top: 20px;
            font-size: 24px;
            color: #555555;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .liste-code li {
            font-size: 16px;
            margin-bottom: 10px;
            background-color: #f7f7f7;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .liste-code li:last-child {
            margin-bottom: 0;
        }
        .gradient-form {
            background-image: url(<?php echo base_url('assets/img/credit.jpg')?>);
            background-size: cover;
            background-attachment: fixed;
        }
    </style>
</head>
<body>
<section class="col-12 gradient-form">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-ng-12">
                <div class="container-fluid">
                    <h2>Montant : <?php echo $pm['montant']?> Ar</h2>
                    <div class="form-container">
                        <form method="post" action="<?php echo base_url('Code_controller/insertVola')?>">
                            <label for="code-input">Entrez un code:</label>
                            <input type="text" id="code-input"  name="code" placeholder="Code à 14 chiffres...">
                            <input type="submit" value="Entrer">
                        </form>
                        <?php if (isset($erreur)){?>
                            <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                <span class="badge badge-pill badge-danger">!!!</span>
                                <?php echo $erreur;?>
                            </div>
                        <?php } ?>
                    </div>
                    <ul class="liste-code">
                        <?php for($i=0;$i<count($all);$i++){ ?>
                            <li><?php echo $all[$i]['valeur']; ?>________________________________________________________<?php echo $all[$i]['montant']; ?>Ar________<?php echo $all[$i]['etat']; ?></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

s
<script src="<?php echo site_url("assets/bootstrap/js/bootstrap.min.js")?>"></script>
<?php include "inc/script.php"; ?>
</body>
</html>
