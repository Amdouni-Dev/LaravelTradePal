<table class="container-xxl flex-grow-1 container-p-y">
  <tr>
    <td>
      <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Dons /</span> Liste des dons
      </h4>
    </td>
    <td align="right">
      <a href="/dashboard/donation/add" class="btn btn-primary">Ajouter</a>
    </td>
  <tr>
</table>

<div class="card">
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>ID Utilisateur</th>
          <th>Catégorie</th>
          <th>Timestamp</th>
          <th>ID Organisation</th>
          <th>Montant</th>
          <th>Objet</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">

        @if(!empty($donations))
        @foreach ($donations as $donation)
        <tr>
          <td>{{ $donation->user_id }}</td>
          <td>{{ $donation->category }}</td>
          <td>{{ $donation->timestamp }}</td>
          <td>{{ $donation->organization_id }}</td>
          <td>{{ $donation->amount }}</td>
          <td>{{ $donation->object }}</td>

          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('donations.edit', $donation) }}"><i class="bx bx-edit-alt me-1"></i> Modifier</a>
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