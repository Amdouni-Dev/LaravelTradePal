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