
<?php
include "inc/head.php";
include "inc/Header.php";
include "inc/left_pannel.php";
?>

<link rel="stylesheet" href="<?php echo base_url("assets/css/login.css")?>">
</head>
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
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Clients</th>
                                        <th>Regime</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php for ($i = 0; $i < count($clients); $i++) { ?>
                                        <tr>
                                            <td><?php echo $clients[$i]['nom_client']; ?></td>
                                            <td>
                                                <?php echo $clients[$i]['details_actSport']; ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
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
