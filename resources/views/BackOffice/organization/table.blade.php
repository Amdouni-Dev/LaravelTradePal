<table class="container-xxl flex-grow-1 container-p-y">
  <tr>
    <td>
      <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Organisation /</span> Liste des organisations
      </h4>
    </td>
    <td>
      <form action="{{ route('organizations.import') }}" method="POST" enctype="multipart/form-data">
        <div class="input-group">
          @csrf
          <input type="file" class="form-control" id="inputGroupFile02" name="file">
          <button type="submit" class="btn btn-primary">Importer</button>
        </div>
      </form>
    </td>
    <td align="right">
      <a href="{{ route('organizations.create') }}" style="top: -8px;position: relative;" class="btn btn-primary">Ajouter</a>
    </td>

  <tr>
</table>

<div class="card">
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>Nom</th>
          <th>Type</th>
          <th>Adresse</th>
          <th>Email</th>
          <th>Téléphone</th>
          <th>Site Web</th>
          <th>Date de fondation</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">

        @if(!empty($organizations))
        @foreach ($organizations as $organization)
        <tr>
          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $organization->name }}</strong></td>
          <td>{{ $organization->type }}</td>
          <td>{{ $organization->location }}</td>
          <td>{{ $organization->email }}</td>
          <td>{{ $organization->phone_number }}</td>
          <td>{{ $organization->website }}</td>
          <td>{{ $organization->founding_date }}</td>

          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('organizations.edit', $organization) }}"><i class="bx bx-edit-alt me-1"></i> Modifier</a>
                <a class="dropdown-item" href="{{ route('organizations.show', $organization) }}"><i class="bx bx-show me-1"></i> Voir</a>
                <form action="{{ route('organizations.destroy', $organization) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette organisation ?');">
                  @csrf
                  @method('DELETE')
                  <button class="dropdown-item" type="submit">
                    <i class="bx bx-trash me-1"></i> Supprimer
                  </button>
                </form>
              </div>
            </div>
          </td>
        </tr>
        @endforeach
        @endif
      </tbody>
    </table>
  </div>
</div>
<div class="text-center mt-4 mb-4">
  {{ $organizations->links() }}
</div>
<canvas id="organization-chart"></canvas>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/js/bootstrap-select.min.js" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8"></script>
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