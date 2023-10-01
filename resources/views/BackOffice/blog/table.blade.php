<table class="container-xxl flex-grow-1 container-p-y">
  <tr>
    <td>
      <h4 class="fw-bold py-3 mb-4">
      <span class="text-muted fw-light">Article /</span> Liste des articles</h4>
    </td>
    <td align="right">
      <a href="/dashboard/blog/add"  class="btn btn-primary">Ajouter</a>
    </td>
  <tr>
</table>
<div class="card">
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>Id</th>
          <th>Auteur</th>
          <th>Titre</th>
          <th>Image</th>
          <th>Date Publication</th>
          <th>Mot clé</th>
          <th>Statut</th>
          <th>Visteur</th>
          <th>Reaction</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @if(!@empty($blogs))
        @php $i=1; @endphp
          @foreach ($blogs as $blog )
            <tr>
              <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $i }}</strong></td>
              <td>{{ $blog -> user_id }}</td>
              <td>{{ $blog -> title }}</td>
              <td><img src="{{ $blog->featuredImage }}" alt="Avatar" class="rounded-circle"></td>
              <td>{{ $blog -> created_at }}</td>
              <td>{{ $blog -> tags }}</td>
              <td><span class="badge bg-label-primary me-1">{{ $blog -> status }}</span></td>
              <td>{{ $blog -> views }}</td>
              <td>{{ $blog -> likes }}</td>
              <td>
                <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
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