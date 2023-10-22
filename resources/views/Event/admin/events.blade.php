<!-- Assurez-vous que jQuery est inclus avant Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<script>
    function toggleDescription() {
        var shortDescription = document.getElementById('short-description');
        var fullDescription = document.getElementById('full-description');
        var toggleLink = document.getElementById('toggle-link');

        if (shortDescription.style.display === 'none') {
            shortDescription.style.display = 'inline';
            fullDescription.style.display = 'none';
            toggleLink.innerHTML = 'Lire la suite';
        } else {
            shortDescription.style.display = 'none';
            fullDescription.style.display = 'inline';
            toggleLink.innerHTML = 'Lire moins';
        }
    }
</script>
<script>
    setTimeout(function() {
        document.getElementById('success-alert').style.display = 'none';
        document.getElementById('error-alert').style.display = 'none';
    }, 5000);
</script>

<script>
    function confirmDelete() {
        if (confirm("Voulez-vous vraiment supprimer cet événement ?")) {

            document.getElementById('delete-form').submit();
        } else {

            return false;
        }
    }
</script>

@if (Session::has('success'))
    <div class="alert alert-success alert-dismissible" role="alert" id="success-alert">
        {{--        <button type="button" class="close" data-dismiss="alert"> --}}
        {{--            <i class="fa fa-times"></i> --}}
        {{--        </button> --}}
        <strong>Success !</strong> {{ session('success') }}
    </div>
@endif

@if (Session::has('error'))
    <div class="alert alert-danger alert-dismissible" role="alert" id="error-alert">
        <button type="button" class="close" data-dismiss="alert">
            <i class="fa fa-times"></i>
        </button>
        <strong>Error !</strong> {{ session('error') }}
    </div>
@endif

<table class="container-xxl flex-grow-1 container-p-y">
    <tr>
        <td>
            <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Evenement /</span> Liste des evenements
            </h4>
        </td>
        <td align="right">
            <a href="/dashboard/events/add" class="btn btn-primary">Ajouter</a>

            <a href="/dashboard/stat/events" class="btn btn-primary"> <i class="bx bx-chart"></i> Voir les
                statistiques</a>
        </td>
    <tr>
</table>


{{--        <form action="{{ route('events.index') }}" method="GET" role="search"> --}}

{{--            <div class="input-group"> --}}
{{--                        <span class="input-group-btn mr-5 mt-1"> --}}
{{--                            <button class="btn btn-info" type="submit" title="Search events"> --}}
{{--                           <i class="bx bx-search fs-4 lh-0"></i> --}}
{{--                            </button> --}}
{{--                        </span> --}}
{{--                <input type="text" class="form-control mr-2" name="term" placeholder="Search projects" id="term"> --}}
{{--                <a href="{{ route('events.index') }}" class=" mt-1"> --}}
{{--                            <span class="input-group-btn"> --}}
{{--                                <button class="btn btn-danger" type="button" title="Refresh page"> --}}
{{--                                <i class="bx bx-refresh fs-4 lh-0"></i> --}}

{{--                                </button> --}}
{{--                            </span> --}}
{{--                </a> --}}
{{--            </div> --}}
{{--        </form> --}}




{{--            <form action="{{ route('events.rechercheParDate') }}" method="GET" role="search"> --}}

{{--                <div class="input-group"> --}}
{{--                        <span class="input-group-btn mr-5 mt-1"> --}}
{{--                            <button class="btn btn-info" type="submit" title="Search events"> --}}
{{--                         <i class="bx bx-search fs-4 lh-0"></i> --}}
{{--                            </button> --}}
{{--                        </span> --}}
{{--                    <input type="date" class="form-control mr-2" name="term" placeholder="Search projects" id="term"> --}}
{{--                    <a href="{{ route('events.rechercheParDate') }}" class=" mt-1"> --}}
{{--                            <span class="input-group-btn"> --}}
{{--                                <button class="btn btn-danger" type="button" title="Refresh page"> --}}

{{--                                        <i class="bx bx-refresh fs-4 lh-0"></i> --}}
{{--                                </button> --}}
{{--                            </span> --}}
{{--                    </a> --}}
{{--                </div> --}}
{{--            </form> --}}







<div class="input-group">
    <div class="input-group-btn search-panel" data-search="all">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            <span id="filterByLabel" class="search_by">Filter by</span>
        </button>

        <ul class="dropdown-menu" role="menu">
            <li><a data-search="all">All Events</a></li>
            <li><a data-search="category">Category</a></li>
            <li><a data-search="lieu">Lieu</a></li>
            <li><a data-search="date">Date</a></li>
            <li><a data-search="nom">Nom</a></li>
        </ul>
    </div>
    <input type="text" class="form-control" name="searchTerm" id="searchTerm" placeholder="Search term...">
    <span class="input-group-btn">
        <button class="btn btn-default" type="button" onclick="filterResults()">
            <span class="glyphicon glyphicon-search"></span> Search
        </button>
    </span>

    <a href="{{ route('events.index') }}" class="input-group-btn">
        <span class="input-group-btn">
            <button class="btn btn-danger" type="button" title="Refresh page">
                <i class="bx bx-refresh fs-4 lh-0"></i>

            </button>
        </span>
    </a>

</div>






<script>
    function filterResults() {
        var filterType = $('.search_by').text().toLowerCase();
        var searchTerm = $('#searchTerm').val().toLowerCase();

        $('tbody tr').each(function() {
            var row = $(this);
            var category = row.find('td:nth-child(4)').text().toLowerCase();
            var location = row.find('td:nth-child(8)').text().toLowerCase();
            var date = row.find('td:nth-child(5)').text().toLowerCase();
            var name = row.find('td:nth-child(2)').text().toLowerCase();

            if (filterType === 'filter by' || filterType === 'all events') {
                if (category.includes(searchTerm) || location.includes(searchTerm) || date.includes(
                    searchTerm) || name.includes(searchTerm)) {
                    row.show();
                    if (filterType === 'all events') {
                        $('#filterByLabel').text('All Events');
                    }
                } else {
                    row.hide();
                }
            } else if (filterType === 'category' && category.includes(searchTerm)) {
                row.show();
            } else if (filterType === 'lieu' && location.includes(searchTerm)) {
                row.show();
            } else if (filterType === 'date') {

                var dateInput = row.find('td:nth-child(5) input[type="date"]').val();
                if (dateInput === searchTerm) {
                    row.show();
                } else {
                    row.hide();
                }
            } else if (filterType === 'nom' && name.includes(searchTerm)) {
                row.show();
            } else {
                row.hide();
            }
        });
    }


    $('.dropdown-menu a').click(function() {
        var choice = $(this).text();
        $('.search_by').text(choice);


        if (choice.toLowerCase() === 'date') {
            $('#searchTerm').attr('type', 'date');
        } else {
            $('#searchTerm').attr('type', 'text');
        }
    });
</script>


<button type="button" class="btn btn-default" onclick="sortTableByDate()">
    <span class="glyphicon glyphicon-sort"></span> Sort by Date
</button>

<script>
    function sortTableByDate() {
        var table = $('table');
        var tbody = table.find('tbody');
        var rows = tbody.find('tr').get();

        rows.sort(function(a, b) {
            var dateA = new Date($(a).find('td:nth-child(5) input').val());
            var dateB = new Date($(b).find('td:nth-child(5) input').val());
            return dateA - dateB;
        });

        $.each(rows, function(index, row) {
            tbody.append(row);
        });
    }
</script>




<div class="card">
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>ID </th>
                    <th>Evenement</th>
                    <th>Description</th>
                    <th>Categorie</th>
                    <th>Date</th>
                    <th>Date Debut</th>
                    <th>Date Fin</th>
                    <th>Lieu</th>
                    <th>NB. Part.</th>
                    <th>couleur</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($listEvents as $listEvents)
                    <tr>
                        <td><strong># {{ $listEvents->id }}</strong></td>

                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                            <strong>{{ $listEvents->nom }}</strong></td>
                        <td>
                            @if (strlen($listEvents->description) > 100)
                                <span id="short-description">{{ substr($listEvents->description, 0, 100) }}...</span>
                                <span id="full-description" style="display: none;">{{ $listEvents->description }}</span>
                                <a href="javascript:void(0);" onclick="toggleDescription()" id="toggle-link">Lire la
                                    suite</a>
                            @else
                                {{ $listEvents->description }}
                            @endif
                        </td>

                        <td>{{ $listEvents->categorie }}</td>
                        <td><input type="date" class="date-input" value="{{ $listEvents->date }}" readonly></td>

                        <td> {{ date('H:i', strtotime($listEvents->start)) }}</td>
                        <td> {{ $listEvents->end }} {{ date('H:i', strtotime($listEvents->end)) }}</td>
                        <td>{{ $listEvents->Lieu }}</td>
                        <td>{{ $listEvents->participations->count() }} </td>
                        <td>
                            <div style="width: auto; height: 20px; background-color: {{ $listEvents->color }};"></div>
                        </td>

                        <td>
                            @php
                                $imagePathParts = pathinfo($listEvents->image_path);
                                $imageName = $imagePathParts['basename'];
                            @endphp
                            <img width="50" height="50" src="{{ asset('imagesForEvents/' . $imageName) }}"
                                alt="Description de l'image">
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('events.edit', $listEvents->id) }}"><i
                                            class="bx bx-edit-alt me-1"></i> Edit</a>
                                    <a class="dropdown-item"
                                        href="{{ route('events.generatePdf', ['id' => $listEvents->id]) }}"><i
                                            class="bx bxs-file-pdf me-1"></i> PDF</a>


                                    <form action="{{ route('events.destroy', $listEvents->id) }}" method="POST"
                                        id="delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="dropdown-item" onclick="return confirmDelete();">
                                            <i class="bx bx-trash me-1"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
<div class="text-center mt-4">
  {{ $listEvents2->links() }}
</div>