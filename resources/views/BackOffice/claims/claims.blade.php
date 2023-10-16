<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Claims Dashboard</title>
</head>
<body>

<table class="container-xxl flex-grow-1 container-p-y">
    <tr>
        <td>
            <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">RECLAMATION /</span> Liste Des Réclamations
            </h4>
        </td>
    <tr>
</table>

<div class="card">
    <div class="table-responsive text-nowrap">
        <form class="d-flex" action="{{ route('search') }}" method="GET">
            <div class="input-group">
                <input class="form-control me-2" type="search" name="search" placeholder="Search by subject"
                       aria-label="Search" value="{{ request('search') }}">
                <input class="form-control me-2" type="date" name="date" placeholder="Date"
                       value="{{ request('date') }}">
                <select class="form-select me-2" name="status">
                    <option value="" selected>Select Status</option>
                    <option value="PENDING" @if(request(
                    'status') === 'PENDING') selected @endif>Pending</option>
                    <option value="IN PROGRESS" @if(request(
                    'status') === 'IN PROGRESS') selected @endif>In Progress</option>
                    <option value="RESOLVED" @if(request(
                    'status') === 'RESOLVED') selected @endif>Resolved</option>
                    <option value="CLOSED" @if(request(
                    'status') === 'CLOSED') selected @endif>Closed</option>
                </select>
            </div>
            <button class="btn btn-outline-primary" type="submit">
                <i class="bx bx-search bx-tada"></i> Search
            </button>
            <a href="{{ route('clearFilters') }}" class="btn btn-outline-secondary">
                <i class="bx bx-reset bx-tada"></i> Clear Filters
            </a>
        </form>

        <table class="table">
            <thead>
            <tr>
                <th><b>Subject</b></th>
                <th><b>Claimant</b></th>
                <th><b>Description</b></th>
                <th><b>Image</b></th>
                <th><b>Claim Date</b></th>
                <th><b>Status</b></th>
                <th><b>Actions</b></th>
            </tr>
            </thead>
            <tbody class="table-border-bottom-0">

            @if(!empty($listClaims))
            @foreach ($listClaims as $claim)
            <tr>

                <td>{{ $claim->subject }}</td>
                <td></td>
                <td>{{ $claim->description }}</td>
                <td></td>
                <td>{{ $claim->claim_date }}</td>
                <td>
    <span class="badge @if($claim->status == 'PENDING') bg-label-danger
                      @elseif($claim->status == 'IN PROGRESS') bg-label-warning
                      @elseif($claim->status == 'RESOLVED') bg-label-success
                      @else bg-label-dark @endif">
        {{ $claim->status }}
    </span>
                </td>
                <td>
                    <div class="d-flex">
                        <button type="button" class="btn btn-icon me-2 btn-outline-primary" data-bs-toggle="modal" data-bs-target="#claimModal" data-claim-description="{{ $claim->description }}" data-claim-date="{{ $claim->claim_date }}" data-claim-status="{{ $claim->status }}">
                            <span class="bx bx-show-alt me-1 bx-tada"></span>
                        </button>

                        @if($claim->status != 'CLOSED')
                        @if($claim->status != 'RESOLVED')
                        <button type="button" class="btn btn-icon me-2 btn-outline-info">
                            <span class="bx bx-reply me-1 bx-tada"></span>
                        </button>
                        @endif

                        <button type="button" class="btn btn-icon me-2 btn-outline-success">
                            <span class="bx bx-edit-alt me-1 bx-tada"></span>
                        </button>
                        @endif
                        <form method="POST" action="{{ route('claims.destroy', $claim) }}">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-icon me-2 btn-outline-danger" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal">
                                <span class="bx bx-trash me-1 bx-tada"></span>
                            </button>
                        </form>
                        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete this claim?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel
                                        </button>
                                        <form method="POST" action="{{ route('claims.destroy', $claim) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </td>


            </tr>
            @endforeach
            @endif
            </tbody>
        </table>
                                                <!--Claim's Details Modal-->
        <div class="modal fade" id="claimModal" tabindex="-1" role="dialog" aria-labelledby="claimModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="claimModalLabel">{{ $claim->subject }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="max-height: 300px; overflow-y: auto;">
                        <p><b>Description:</b> {{ $claim->description }}</p>
                        <p><b>Claim Date:</b> {{ $claim->claim_date }}</p>
                        <p><b>Status:</b> {{ $claim->status }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">CLOSE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
<table class="container-xxl flex-grow-1 container-p-y">
    <tr>
        <td>
            <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">RECLAMATION /</span> Taux Réclamations-Clients
            </h4>
        </td>
    <tr>
</table>

<script>
    var claimModal = document.getElementById('claimModal');
    claimModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;

        var claimDescription = claimModal.querySelector('#claimDescription');
        var claimDate = claimModal.querySelector('#claimDate');
        var claimStatus = claimModal.querySelector('#claimStatus');

        claimDescription.textContent = 'Description: ' + button.getAttribute('data-claim-description');
        claimDate.textContent = 'Claim Date: ' + button.getAttribute('data-claim-date');
        claimStatus.textContent = 'Status: ' + button.getAttribute('data-claim-status');
    });
</script>
<style>
    .modal-lg .modal-body {
        max-height: calc(100vh - 200px);
        overflow-y: auto;
    }
</style>


<div class="chart-container">
    <canvas id="claimsChart"></canvas>
</div>


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

</body>
</html>
