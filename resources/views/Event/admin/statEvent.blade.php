<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>



    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Description du Graphique 1</h3>
                <p>Le graphique ci-dessous affiche le nombre de participations par événement.</p>

                <canvas id="participationChart" width="400" height="200"></canvas>
            </div>
        </div>
    </div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Description du Graphique 2</h3>
            <p>Le graphique ci-dessous montre le nombre d'événements par catégorie.</p>

            <canvas id="eventCategoryChart" width="400" height="200"></canvas>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Description du Graphique 3</h3>
            <p>Le graphique en camembert ci-dessous représente la répartition des événements par catégorie.</p>

            <canvas id="eventCategoryChart1" width="400" height="400"></canvas>
        </div>
    </div>
</div>
    <script>
        var ctx = document.getElementById('participationChart').getContext('2d');

        var data = {
            labels: @json($events->pluck('nom')),
            datasets: [{
                label: 'Nombre de Participations',
                data: @json($participationCountByEvent),
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }
            ]
        };

        var options = {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        };

        var myChart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: options
        });
    </script>
<script>
    var ctx = document.getElementById('eventCategoryChart').getContext('2d');

    var data = {
        labels: @json($categories->pluck('categorie')),
        datasets: [{
            label: 'Nombre d\'événements par catégorie',
            data: @json($categories->pluck('count')),
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    };

    var options = {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    };

    var myChart = new Chart(ctx, {
        type: 'bar',
        data: data,
        options: options
    });
</script>

<script>
    var ctx = document.getElementById('eventCategoryChart1').getContext('2d');

    var data = {
        labels: @json($categories->pluck('categorie')),
        datasets: [{
            data: @json($categories->pluck('count')),
            backgroundColor: [
                'rgba(255, 99, 132, 0.6)',
                'rgba(54, 162, 235, 0.6)',
                'rgba(255, 206, 86, 0.6)',
                'rgba(75, 192, 192, 0.6)',
                'rgba(153, 102, 255, 0.6)',
            ],
            borderWidth: 1
        }]
    };

    var options = {};

    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: data,
        options: options
    });
</script>


