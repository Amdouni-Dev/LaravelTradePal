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

<div class="card">
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
            <tr>
                <th>Personne</th>
                <th>Objet proposé</th>

                <th>Description Objet</th>
                <th>Changé par</th>


                <th>Actions</th>
            </tr>
            </thead>
            <tbody class="table-border-bottom-0">
            @foreach($listparticipations as $listparticipations)
                <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $listparticipations->nomUser }}</strong></td>
                    <td>{{ $listparticipations->proposedObject }}</td>
                    <td>{{ $listparticipations->descriptionObject }}</td>
                    <td>{{ $listparticipations->changedBy }}</td>
                    <td>{{ $listparticipations->description }}</td>

                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('participations.edit', $listparticipations->id) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>


                                <form action="{{ route('participation.destroy', $listparticipations->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="dropdown-item"><i class="bx bx-trash me-1"></i> Delete</button>
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
