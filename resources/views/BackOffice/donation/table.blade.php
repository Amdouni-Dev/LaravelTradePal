<table class="container-xxl flex-grow-1 container-p-y">
  <tr>
    <td>
      <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Dons /</span> Liste des dons
      </h4>
    </td>

  <tr>
</table>

<div class="card">
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>Utilisateur</th>
          <th>Catégorie</th>
          <th>Timestamp</th>
          <th>Organisation</th>
          <th>Montant</th>
          <th>Objet</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">

        @if(!empty($donations))
        @foreach ($donations as $donation)
        <tr>
          <td>{{ $donation->donor->username }}</td>
          <td>{{ $donation->category }}</td>
          <td>{{ $donation->timestamp }}</td>
          <td>{{ $donation->organization->name }}</td>
          <td>{{ $donation->amount }}</td>
          <td>
            @if ($donation->item)
            {{ $donation->item->name }}
            @else
            Pas d'objet
            @endif
          </td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <form action="{{ route('donations.destroy', $donation) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this donation?');">
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
<div class="text-center mt-4">
  {{ $donations->links() }}
</div>