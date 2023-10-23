<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Claims Dashboard</title>
    <script>
        function confirmDelete() {
            if (confirm("Voulez-vous vraiment supprimer cette réclamation ?")) {

                document.getElementById('delete-form').submit();
            } else {

                return false;
            }
        }
    </script>
</head>
<body>


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
@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
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
                <td>{{$claim->user_id}}</td>
                <td>{{ $claim->description }}</td>
                <td><img src="/claims/{{$claim->claimImage}}" width="150" height="150"></td>
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
                        <button type="button" class="btn btn-icon me-2 btn-outline-primary" data-bs-toggle="modal" data-bs-target="#claimModal-{{ $claim->id }}">
                            <span class="bx bx-show-alt me-1 bx-tada"></span>
                        </button>
                        <a href="{{ route('generatePdf', ['claim' => $claim->id]) }}" class="btn btn-icon me-2 btn-outline-warning">
                            <span class="bx bxs-file-pdf me-1 bx-tada"></span>
                        </a>

                        @if($claim->status != 'CLOSED')
                        @if($claim->status != 'RESOLVED')
                        @if($claim->status == 'PENDING')
                        <form action="{{ route('sendEmail', ['claim' => $claim->id]) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-icon me-2 btn-outline-success">
                                <span class="bx bx-mail-send me-1 bx-tada"></span>
                            </button>
                        </form>
                        @endif

                        @endif
                        @if($claim->status == 'IN PROGRESS')
                        <a href="{{ route('reply.create', ['claim_id' => $claim->id]) }}" class="btn btn-icon me-2 btn-outline-info">
                            <span class="bx bx-reply me-1 bx-tada"></span>
                        </a>
                        @endif

                        @endif
                        <form method="POST" id="delete-form" action="{{ route('supprimer',  $claim->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-icon me-2 btn-outline-danger" onclick="return confirmDelete();" >
                                <span class="bx bx-trash me-1 bx-tada"></span>
                            </button>
                        </form>




<!--                        <div class="modal fade" id="deleteModal" aria-labelledby="deleteModalLabel"-->
<!--                             aria-hidden="true">-->
<!--                            <div class="modal-dialog modal-dialog-centered">-->
<!--                                <div class="modal-content">-->
<!--                                    <div class="modal-header">-->
<!--                                        <h5 class="modal-title" id="claimModalLabel">Confirm Deletion</h5>-->
<!--                                        <button type="button" class="btn-close" data-bs-dismiss="modal"-->
<!--                                                aria-label="Close"></button>-->
<!--                                    </div>-->
<!--                                    <div class="modal-body">-->
<!--                                        Are you sure you want to delete this claim?-->
<!--                                    </div>-->
<!--                                    <div class="modal-footer">-->
<!--                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel-->
<!--                                        </button>-->
<!--                                        <form method="POST" action="{{ route('supprimer',  $claim->id) }}">-->
<!--                                            @csrf-->
<!--                                            @method('DELETE')-->
<!--                                            <button type="submit" class="btn btn-danger">Delete</button>-->
<!--                                        </form>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->

                    </div>
                </td>


            </tr>
            <div class="modal fade" id="claimModal-{{ $claim->id }}" tabindex="-1" role="dialog" aria-labelledby="claimModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="claimModalLabel">Subject : {{ $claim->subject }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="max-height: 300px; overflow-y: auto;">
                            <img src="/claims/{{$claim->claimImage}}">
                            <p><b>Description:</b><span id="shortDescription">{{ substr($claim->description, 0, 80) }} <span id="dots">...</span></span>
                                <span id="fullDescription" style="display: none;">{{ $claim->description }}</span>
                                <a href="#" id="showMore" onclick="toggleDescription()">Read More</a></p>
                            <p><b>Claim Date:</b> {{ $claim->claim_date }}</p>
                            <p><b>Status:</b> <span class="badge @if($claim->status == 'PENDING') bg-label-danger
                      @elseif($claim->status == 'IN PROGRESS') bg-label-warning
                      @elseif($claim->status == 'RESOLVED') bg-label-success
                      @else bg-label-dark @endif">
        {{ $claim->status }}
    </span></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>
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
<div class="text-center mt-4 mb-4">
  {{ $listClaims->links() }}
</div>
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
    var claimModal = new bootstrap.Modal(document.getElementById('claimModal'));

    claimModal._element.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;

        var claimDescription = document.getElementById('claimDescription');
        var claimDate = document.getElementById('claimDate');
        var claimStatus = document.getElementById('claimStatus');

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
<script>
    function toggleDescription() {
        var shortDescription = document.getElementById('shortDescription');
        var fullDescription = document.getElementById('fullDescription');
        var showMoreLink = document.getElementById('showMore');
        var dots = document.getElementById('dots');

        if (fullDescription.style.display === 'none') {
            shortDescription.style.display = 'none';
            fullDescription.style.display = 'inline';
            showMoreLink.innerHTML = 'Read Less';
            dots.style.display = 'none';
        } else {
            shortDescription.style.display = 'inline';
            fullDescription.style.display = 'none';
            showMoreLink.innerHTML = 'Read More';
            dots.style.display = 'inline';
        }
    }
</script>

