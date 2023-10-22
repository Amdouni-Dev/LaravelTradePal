<table class="container-xxl flex-grow-1 container-p-y">
    <tr>
        <td>
            <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Commentaires /</span> Liste des commentaires
            </h4>
        </td>
        <td align="right">
            <a href="/dashboard/comment/add" class="btn btn-primary">Ajouter</a>
        </td>
    <tr>
</table>
<div class="card">
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Article</th>
                    <th>Utilisateur</th>
                    <th>Message</th>
                    <th>Date Commentaire</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @if (!@empty($comments))
                    @php $i=1; @endphp
                    @foreach ($comments as $comment)
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                <strong>{{ $i }}</strong>
                            </td>
                            <td>{{ $comment->user->username }}</td>
                            <td>{{ $comment->blog->title }}</td>
                            <td>{{ $comment->content }}</td>
                            <td>{{ $comment->created_at }}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('comments.edit', $comment) }}"><i
                                                class="bx bx-edit-alt me-1"></i>Modifier</a>
                                        <form action="{{ route('comments.destroy', $comment) }}" method="POST"
                                            onsubmit= "return confirm('Etes-vous sûr de vouloir supprimer?');">
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
    {{ $comments->links() }}
</div>
