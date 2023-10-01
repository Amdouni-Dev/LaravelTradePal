<table class="container-xxl flex-grow-1 container-p-y">
    <tr><td>
            <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Evenement /</span> Liste des evenements
            </h4>
        </td>
        <td align="right">
            <a href="/dashboard/events/add"  class="btn btn-primary">Ajouter</a>
        </td>
    <tr>
</table>

<div class="card">
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
            <tr>
                <th>Evenement</th>
                <th>Description</th>

                <th>Categorie</th>
                <th>Date</th>
                <th>Lieu</th>
                <th>couleur</th>

                <th>Actions</th>
            </tr>
            </thead>
            <tbody class="table-border-bottom-0">
            @foreach($listEvents as $listEvents)
            <tr>
                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $listEvents->nom }}</strong></td>
                <td>{{ $listEvents->description }}</td>
                <td>{{ $listEvents->categorie }}</td>
                <td>{{ $listEvents->date }}</td>
                <td>{{ $listEvents->Lieu }}</td>
                <td><div style="width: auto; height: 20px; background-color: {{ $listEvents->color }};"></div></td>

                {{--                <td>--}}
{{--                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">--}}
{{--                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">--}}
{{--                            <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">--}}
{{--                        </li>--}}
{{--                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">--}}
{{--                            <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle">--}}
{{--                        </li>--}}
{{--                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">--}}
{{--                            <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle">--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </td>--}}
{{--                <td><span class="badge bg-label-primary me-1">Active</span></td>--}}
                <td>
                    <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('events.edit', $listEvents->id) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>


                                          <form action="{{ route('events.destroy', $listEvents->id) }}" method="POST">
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
