<?php
include "inc/head.php";
include "inc/Header.php";
include "inc/left_pannel.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Graphique Clients par Mois</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

    <section class="col-12 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="card-body p-md-5 mx-md-4">
                                    <canvas id="graphique"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const data = <?php echo $donnees; ?>;

        const mois = [];
        const nombreClients = [];

        data.forEach(item => {
            mois.push(item.mois);
            nombreClients.push(item.nombre_clients);
        });

        const ctx = document.getElementById('graphique').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: mois,
                datasets: [{
                    label: 'Nombre de clients',
                    data: nombreClients,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        stepSize: 1
                    }
                }
            }
        });
    });
</script>
</body>
</html>
    <script src="<?php echo site_url("assets/bootstrap/js/bootstrap.min.js")?>"></script>
<?php include "inc/script.php"; ?>