

<table class="container-xxl flex-grow-1 container-p-y">
  
  <tr>
    <td>
      <h4 class="fw-bold py-3 mb-4">
      <span class="text-muted fw-light">Echange /</span> Liste des objets</h4>
      
    </td>
  
  <tr>
  

  




   
       
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
<div class="d-flex justify-content-center">
    {{ $items->links() }}
</div>

