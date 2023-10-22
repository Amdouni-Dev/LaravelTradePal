<table class="container-xxl flex-grow-1 container-p-y">
    <tr><td>
            <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Participation /</span> Liste des participations
            </h4>
        </td>
        <td align="right">
            <a href="/dashboard/participations/create"  class="btn btn-primary">Ajouter</a>
        </td>
    <tr>
</table>
@if (Session::has('success'))
    <div class="alert alert-success alert-dismissible" role="alert" id="success-alert">
        <strong>Success !</strong> {{ session('success') }}
    </div>
@endif

@if (Session::has('error'))
    <div class="alert alert-danger alert-dismissible" role="alert" id="error-alert">
        <button type="button" class="close" data-dismiss="alert">
            <i class="fa fa-times"></i>
        </button>
        <strong>Error !</strong> {{ session('error') }}
    </div>
@endif

<script>

    setTimeout(function() {
        document.getElementById('success-alert').style.display = 'none';
        document.getElementById('error-alert').style.display = 'none';
    }, 5000);
</script>
<div class="card">
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
            <tr>
                <th>Personne</th>
                <th>Date Participation</th>

                {{--                <th>Objet proposé</th>--}}

{{--                <th>Description Objet</th>--}}
{{--                <th>Changé par</th>--}}


                <th>Actions</th>
            </tr>
            </thead>
            <tbody class="table-border-bottom-0">
            @foreach($listparticipations as $participation)
                <tr>
                    <td><strong>  {{ $participation->user->name }} </strong></td>
                    <td>{{ $participation->created_at }}</td>


                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('participations.edit', $participation->id) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>


                                <form action="{{ route('participation.destroy', $participation->id) }}" method="POST" id="delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="dropdown-item" onclick="confirmDelete()"><i class="bx bx-trash me-1"></i> Delete</button>
                                </form>

                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="text-center mt-4">
  {{ $listparticipations->links() }}
</div>
<script>
    function confirmDelete() {
        if (confirm("Êtes-vous sûr de vouloir supprimer cet élément? La suppression est irréversible.")) {

            document.getElementById('delete-form').submit();
        } else {

        }
    }
</script>
