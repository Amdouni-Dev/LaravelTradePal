<table class="container-xxl flex-grow-1 container-p-y">
  <tr>
    <td>
      <h4 class="fw-bold py-3 mb-4">
      <span class="text-muted fw-light">Articles /</span> Liste des articles</h4>
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
              <td>{{ $blog -> username}}</td>
              <td>{{ $blog -> title }}</td>
              <td><img src="/blogs/{{ $blog->featuredImage }}" alt="Avatar" class="rounded-circle" style="width:22px"></td>
              <td>{{ $blog -> created_at }}</td>
              <td>
                @if (!empty($blog->tags))
                  <?php $tags = substr($blog->tags, 1); ?>
                    [{{ $tags }}]
                @endif
              </td>
              <td>
                @if ($blog->status == "Publique")
                    <span class="badge bg-success me-1">{{ $blog->status }}</span>
                @else
                    <span class="badge bg-danger me-1">{{ $blog->status }}</span>
                @endif
              </td>
              <td>{{ $blog -> views }}</td>
              <td>{{ $blog -> likes }}</td>
              <td>
                <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                  <div class="dropdown-menu">
                  <a class="dropdown-item" href="../blog/{{$blog->id}}"><i class="bx bx-show-alt me-1"></i>Voir</a>  
                  <a class="dropdown-item" href="{{ route('blogs.edit', $blog) }}"><i class="bx bx-edit-alt me-1"></i>Modifier</a>
                  <form action="{{ route('blogs.destroy', $blog) }}" method="POST" onsubmit= "return confirm('Etes-vous sûr de vouloir supprimer?');">
                    @csrf
                    @method('DELETE')
                    <button class="dropdown-item" type="submit">
                      <i class="bx bx-trash me-1"></i>Supprimer
                    </button>
                  </form>
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
<div class="text-center mt-4">
  {{ $blogs->links() }}
</div>
