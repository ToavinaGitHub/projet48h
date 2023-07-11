<!DOCTYPE html>
<html>
<head>
    <title>Graphique Clients par Mois</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<div>
    <canvas id="graphique"></canvas>
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
