<table class="container-xxl flex-grow-1 container-p-y">
    <tr>
        <td>
            <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Utilisateurs /</span> Liste des utilisateurs
            </h4>
        </td>
        <td align="right">
            <a href="" class="btn btn-primary">Ajouter</a>
        </td>
    <tr>
</table>
<div class="card">
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Username</th>
                    <th>Téléphone</th>
                    <th>Role</th>
                    <th>Noisette</th>
                    <th>Statut</th>
                    <th>Crée le</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @if (!@empty($users))
                    @php $i=1; @endphp
                    @foreach ($users as $user)
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                <strong>{{ $i }}</strong>
                            </td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>
                                @if ($user->role == 'admin')
                                    <span class="badge bg-success me-1">{{ $user->role }}</span>
                                @else
                                    <span class="badge bg-danger me-1">{{ $user->role }}</span>
                                @endif
                            </td>
                            <td>{{ $user->hazelnuts }}</td>
                            <td>
                                @if ($user->account_status == 'active')
                                    <span class="badge bg-success me-1">{{ $user->account_status }}</span>
                                @else
                                    <span class="badge bg-danger me-1">{{ $user->account_status }}</span>
                                @endif
                            </td>
                            <td>{{ $user->created_at }}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                    <div class="dropdown-menu">
                                        @csrf
                                        @if ($user->account_status == 'active')
                                            <form action="{{ route('blockUser', ['id' => $user->id]) }}"
                                                method="POST">
                                                @csrf
                                                <button type="submit" class="dropdown-item"><i
                                                        class="bx bx-lock me-1"></i> Bloquer</button>
                                            </form>
                                        @else
                                            <form action="{{ route('activateUser', ['id' => $user->id]) }}"
                                                method="POST">
                                                @csrf
                                                <button type="submit" class="dropdown-item"><i
                                                        class="bx bx-unlock me-1"></i> Activer</button>
                                            </form>
                                        @endif
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
<div class="text-center mt-4">
    {{ $users->links() }}
</div>
