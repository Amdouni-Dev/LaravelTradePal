
@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<table class="container-xxl flex-grow-1 container-p-y">
  
  <!-- <tr>
    <td>
      <h4 class="fw-bold py-3 mb-4">
      <span class="text-muted fw-light">Echange /</span> Liste des objets</h4>
      
    </td>
  
  <tr> -->
  

        <div class="d-flex justify-content-center">

<div id="mon-chart" style="height: 500px; width: 800px;"  ></div>
</div>



<div class="form-group">
            <input type="text" name="searchTerm" id="searchTerm" class="form-control"  placeholder="Rechercher pas utilisateur/catégorie" />
        </div>
        <br></br>
       
</table>
<div class="card">
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
         
        <th>User</th>
            <th>Nom</th>
            <th>Catégorie</th>
            <th>Description</th>
            <th>Image</th>
            <th>Status</th>
            <th>Noisettes</th>
            <th>Action</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
      @if(!@empty($items))
        @php $i=1; @endphp
        @foreach ($items as $donneesItem)
            <tr>
              <td>{{ $donneesItem->user->name }}</td>
              <td>{{ $donneesItem['name'] }}</td>
              <td>{{ $donneesItem['category'] }}</td>
              <td>{{ $donneesItem['description'] }}</td>
              <td><img src="/echange/items/{{ $donneesItem['picture'] }}" alt="Avatar" width="75" height="75" class="rounded-circle"></td>
           
              <td><span class="badge bg-label-primary me-1">{{ $donneesItem['status'] }}</span></td>
              <td>
  
   {{ $donneesItem['amount'] }}
   
</td>

<td>
                    <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                        <div class="dropdown-menu">
                         


                                          <form action="{{ route('item.destroyDash', $donneesItem['id']) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                              <button type="submit" class="dropdown-item"><i class="bx bx-trash me-1"></i> Delete</button>
                                </form>
                        </div>
                    </div>
                </td>
          </tr>
          @php $i++; @endphp
          @endforeach
        @endif
      </tbody>
  
    </table>

  </div>

</div>
<br></br>

<br></br>
<div class="d-flex justify-content-center">
    {{ $items->links() }}
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#searchTerm').on('input', function() {
        var searchTerm = $(this).val();
        if (searchTerm.length >= 3 || searchTerm === '') { 
            $.ajax({
                url: '{{ route('items.data') }}',
                method: 'GET',
                data: { searchTerm: searchTerm },
                success: function(data) {
                   
                    $('.table-border-bottom-0').html(data.map(function(item) {
                        return `<tr>
                            <td>${item.user.name}</td>
                            <td>${item.name}</td>
                            <td>${item.category}</td>
                            <td>${item.description}</td>
                            <td><img src="/echange/items/${item.picture}" alt="Avatar" width="75" height="75" class="rounded-circle"></td>
                            <td><span class="badge bg-label-primary me-1">${item.status}</span></td>
                            <td>${item.amount}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                    <div class="dropdown-menu">
                                        <form action="{{ route('item.destroyDash', '') }}/${item.id}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="dropdown-item"><i class="bx bx-trash me-1"></i> Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>`;
                    }).join(''));
                }
            });
        }
    });
});
</script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
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





    var options = {
      title: 'Statistiques des demandes par catégorie objet ', 
      is3D : true ,
      backgroundColor: 'transparent'
    };

    var chart = new google.visualization.PieChart(document.getElementById('mon-chart'));

    chart.draw(data, options);
  }
</script>
