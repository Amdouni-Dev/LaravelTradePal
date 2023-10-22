<table class="container-xxl flex-grow-1 container-p-y">
  <tr>
    <td>
      <h4 class="fw-bold py-3 mb-4">
      <span class="text-muted fw-light">Echange /</span> Liste des demandes</h4>
    </td>
    <!-- <td align="right">
      <a href="/dashboard/blog/add"  class="btn btn-primary">Ajouter</a>
    </td> -->
  <tr>
</table>
<form method="GET" action="{{ route('request.indexDash') }}">
<div class="form-group">
    <label for="list">Filtrer par statut :</label>
    <select name="list" id="list" class="form-control" onchange="this.form.submit()">
        <option value="" >Chercher par status</option>
        <option value="1" >En cours</option>
        <option value="2" >Confirmé</option>
        <option value="3" >Annulé</option>
    </select>
</div>
</form>
<br></br>


<div class="card">
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
         
        <th>User</th>
        <th>Objet recherché</th>
<th>Objet offert en échange</th>
            <th>Noisettes </th>
            <th>Remarque</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @if(!@empty($requests))
        @php $i=1; @endphp
        @foreach ($requests as $donneesRequest)
            <tr>
            <td>{{ $donneesRequest->user->name }}</td>
        

            <td><img src="/echange/items/{{ $donneesRequest->desired->picture }}" alt="Avatar" width="75" height="75" class="rounded-circle"></td>
            <td>
    @if ($donneesRequest->exchangeable && $donneesRequest->exchangeable->picture)
        <img src="/echange/items/{{ $donneesRequest->exchangeable->picture }}" alt="Avatar" width="75" height="75" class="rounded-circle">
    @else
    Ehange par noisettes
    @endif
</td>
<td>
    @if ($donneesRequest->amount )
       {{$donneesRequest->amount}}
    @else
    Echange par autre objet
    @endif
</td>



          
            <td>{{ $donneesRequest['note'] }}</td>
            
          
              <td>
                                @if ($donneesRequest['status'] == 'CONFIRME')
                                    <span class="badge bg-success me-1">{{ $donneesRequest['status'] }}</span>
                                @elseif ($donneesRequest['status'] == 'EN_COURS')
                                    <span class="badge bg-danger me-1">{{ $donneesRequest['status'] }}</span>
                                @else
                                <span class="badge bg-info me-1">{{ $donneesRequest['status'] }}</span>
                                @endif
                            </td>

<td>
                    <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                        <div class="dropdown-menu">
                         


                                          <form action="{{ route('request.destroyDash', $donneesRequest['id']) }}" method="POST">
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
    {{ $requests->links() }}
</div>
