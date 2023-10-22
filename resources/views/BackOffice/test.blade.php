<canvas id="blogViewsByMonthChart" width="400" height="400"></canvas>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/js/bootstrap-select.min.js" charset="utf-8"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8"></script>
<script>
    var url = "{{ url('blog-views-by-month') }}";
    var Months = [];
    var TotalViews = [];

    $(document).ready(function () {
        $.get(url, function (response) {
            response.forEach(function (data) {
                // Map the data to separate arrays for months and total views.
                Months.push(data.month);
                TotalViews.push(data.total_views);
            });

            var ctx = document.getElementById("blogViewsByMonthChart").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: Months,
                    datasets: [{
                        data: TotalViews,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.6)',
                            'rgba(54, 162, 235, 0.6)',
                            'rgba(255, 206, 86, 0.6)',
                            'rgba(75, 192, 192, 0.6)',
                            'rgba(153, 102, 255, 0.6)',
                        ],
                    }],
                },
            });
        });
    });
</script>
