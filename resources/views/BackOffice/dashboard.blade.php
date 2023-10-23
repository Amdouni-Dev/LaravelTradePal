<style>
    /* styles.css */
    .couleur-1 {
        background-color: rgba(255, 99, 132, 1);
    }

    .couleur-2 {
        background-color: rgba(54, 162, 235, 1);
    }

    .couleur-3 {
        background-color: rgba(255, 206, 86, 1);
    }

    .couleur-4 {
        background-color: rgba(75, 192, 192, 1);
    }

    .couleur-5 {
        background-color: rgba(153, 102, 255, 1);
    }
</style>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-8 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            @if (Auth::check())
                                <h2 class="card-title text-primary">Salut, {{ Auth::user()->username }} 🎉</h2>
                            @else
                                <p>You are not logged in.</p>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template-free/demo/assets/img/illustrations/man-with-laptop-light.png"
                                height="140" alt="View Badge User"
                                data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                data-app-light-img="illustrations/man-with-laptop-light.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 order-1">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template-free/demo/assets/img/icons/unicons/chart-success.png"
                                        alt="chart success" class="rounded">
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Utilisateurs</span>
                            <h3 class="card-title mb-2">{{ $countUsers }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template-free/demo/assets/img/icons/unicons/wallet-info.png"
                                        alt="Credit Card" class="rounded">
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Organisations</span>
                            <h3 class="card-title text-nowrap mb-1">{{ $countOrganizations }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Total Revenue -->
        <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
            <div class="card">
                <div class="row row-bordered g-0">
                    <div class="col-md-8">
                        <h5 class="card-header m-0 me-2 pb-3">Les demandes par categories</h5>
                        <div id="totalRevenueChart" class="px-2" style="min-height: 315px;">
                            <div id="mon-chart" style="height: 500px; width: 800px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Total Revenue -->
        <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
            <div class="row">
                <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template-free/demo/assets/img/icons/unicons/paypal.png"
                                        alt="Credit Card" class="rounded">
                                </div>
                            </div>
                            <span class="d-block mb-1">Evenements</span>
                            <h3 class="card-title text-nowrap mb-2">{{ $countEvents }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template-free/demo/assets/img/icons/unicons/cc-primary.png"
                                        alt="Credit Card" class="rounded">
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Articles</span>
                            <h3 class="card-title mb-2">{{ $countBlogs }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template-free/demo/assets/img/icons/unicons/paypal.png"
                                        alt="Credit Card" class="rounded">
                                </div>
                            </div>
                            <span class="d-block mb-1">Dons</span>
                            <h3 class="card-title text-nowrap mb-2">{{ $countDonations }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template-free/demo/assets/img/icons/unicons/paypal.png"
                                        alt="Credit Card" class="rounded">
                                </div>
                            </div>
                            <span class="d-block mb-1">Demandes</span>
                            <h3 class="card-title text-nowrap mb-2">{{ $countRequests }}</h3>
                        </div>
                    </div>
                </div>

                <!-- </div>
    <div class="row"> -->
                <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template-free/demo/assets/img/icons/unicons/cc-primary.png"
                                        alt="Credit Card" class="rounded">
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Réclamations</span>
                            <h3 class="card-title mb-2">{{ $countClaims }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template-free/demo/assets/img/icons/unicons/cc-primary.png"
                                        alt="Credit Card" class="rounded">
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Objets</span>
                            <h3 class="card-title mb-2">{{ $countItems }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <!-- First Column - Organisations -->
        <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4" style="width:48.5rem;">
            <div class="card h-150">
                <div class="card-header d-flex align-items-center justify-content-between pb-0">
                    <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Organisations</h5>
                    </div>
                    <div class="dropdown">
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                            <a class "dropdown-item" href="javascript:void(0);">Share</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3" style="position: relative;">
                        <canvas id="organization-chart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Second Column - Evenements -->
        <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4" style="width: 24rem;">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between pb-0">
                    <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Claims</h5>
                    </div>
                    <div class="dropdown">
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                            <a class="dropdown-item" href="javascript:void(0);">Share</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <br>
                    <div class="d-flex justify-content-between align-items-center mb-3" style="position: relative;">
                        <canvas id="claimsChart" height="300"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Order Statistics -->
    <div class="row">
        <!-- First Column - Organisations -->
        <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4" style="width:36.5rem;">
            <div class="card h-150">
                <div class="card-header d-flex align-items-center justify-content-between pb-0">
                    <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Articles</h5>
                    </div>
                    <div class="dropdown">
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                            <a class "dropdown-item" href="javascript:void(0);">Share</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3" style="position: relative;">
                        <canvas id="blogViewsByMonthChart" width="100" height="100"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Second Column - Evenements -->
        <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4" style="width: 34rem;">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between pb-0">
                    <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Evenements</h5>
                    </div>
                    <div class="dropdown">
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                            <a class="dropdown-item" href="javascript:void(0);">Share</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3" style="position: relative;">
                        <canvas id="eventCategoryChart1" width="400" height="400"></canvas>

                    </div>
                </div>
            </div>
        </div>
    </div>
















</div>


</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/js/bootstrap-select.min.js" charset="utf-8">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8"></script>
<script>
    var views = @json($views);
    var months = views.map(entry => entry.month);
    var counts = views.map(entry => entry.count);

    var ctx = document.getElementById('blogViewsByMonthChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: months,
            datasets: [{
                label: 'Blog PER Day',
                data: counts,
                backgroundColor: 'rgb(163 75 192 / 20%)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1,
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
<script>
    var url = "{{ route('organizations.chart') }}";

    var OrganizationTypes = new Array();
    var Counts = new Array();
    var Colors = [];

    var colorPalette = [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)'
    ];

    $(document).ready(function() {
        $.get(url, function(response) {
            response.forEach(function(data, index) {
                OrganizationTypes.push(data.type);
                Counts.push(data.count);

                var colorIndex = index % colorPalette.length;
                Colors.push(colorPalette[colorIndex]);
            });

            var ctx = document.getElementById("organization-chart").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: OrganizationTypes,
                    datasets: [{
                        label: 'Distribution des Organisations',
                        data: Counts,
                        backgroundColor: Colors,
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        });
    });
</script>
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
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        @php
            $categoryData = $itemsStat->groupBy('category')->map->sum(function ($item) {
                return $item->requests->count();
            });
        @endphp

        var data = google.visualization.arrayToDataTable([
            ['Catégorie', 'Demande'],
            @foreach ($categoryData as $category => $requestCount)
                ["{{ $category }}", {{ $requestCount }}],
            @endforeach
        ]);

        function convertRGBAtoHex(rgbaColor) {
            var parts = rgbaColor.match(/^rgba\((\d+),\s*(\d+),\s*(\d+),\s*(\d+\.\d+)\)$/);
            if (parts) {
                var r = parseInt(parts[1]);
                var g = parseInt(parts[2]);
                var b = parseInt(parts[3]);
                return '#' + ((1 << 24) | (r << 16) | (g << 8) | b).toString(16).slice(1);
            }
            return rgbaColor;
        }

        var customColors = [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)'
        ];
        var convertedColors = customColors.map(convertRGBAtoHex);

        var options = {
            title: '',
            is3D: true,
            backgroundColor: 'transparent',
            colors: convertedColors
        };



        var chart = new google.visualization.PieChart(document.getElementById('mon-chart'));

        chart.draw(data, options);
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var claimData = @json($claimsPerMonth);
    var months = claimData.map(entry => entry.month);
    var counts = claimData.map(entry => entry.count);

    var ctx = document.getElementById('claimsChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: months,
            datasets: [{
                label: 'CLAIMS PER MONTH',
                data: counts,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1,
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
