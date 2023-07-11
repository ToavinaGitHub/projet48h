
<?php
include "inc/head.php";
include "inc/Header.php";
include "inc/left_pannel.php";
?>

<link rel="stylesheet" href="<?php echo base_url("assets/css/login.css")?>">
</head>
<style>
    /* Styles CSS modernes */
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 20px;
    }

    table {
        border-collapse: collapse;
        width: 100%;
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    th, td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f9f9f9;
        font-weight: bold;
    }

    tr:hover {
        background-color: #f5f5f5;
    }
</style>
<body>

<link rel="stylesheet" href="<?php echo site_url("assets/bootstrap/css/bootstrap.min.css")?>">
<link rel="stylesheet" href="<?php echo site_url("assets/css/styles.min.css")?>">
<script src="<?php echo site_url("assets/js/parsley.min.js")?>"></script>

<section class="col-12 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
                <div class="card rounded-3 text-black">
                    <div class="row g-0">
                        <div class="col-lg-12">
                            <div class="card-body p-md-5 mx-md-4">
                                <div class="text-center">
                                    <h4 class="mt-1 mb-5 pb-1">Programme des Clients</h4>
                                </div>
                                <table>
                                    <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Poids Actuel</th>
                                        <th>Objectif</th>
                                        <th>Poids Initial</th>
                                        <th>Durée de regime</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($rows as $row): ?>
                                        <tr>
                                            <td><?php echo $row['nom']; ?></td>
                                            <td><?php echo $row['prenom']; ?></td>
                                            <td><?php echo $row['poidActuel']; ?></td>
                                            <td><?php echo $row['obj']; ?></td>
                                            <td><?php echo $row['poidInitial']; ?></td>
                                            <td><?php echo $row['differenceJours']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="<?php echo site_url("assets/bootstrap/js/bootstrap.min.js")?>"></script>
<?php include "inc/script.php"; ?>
</body>
</html>