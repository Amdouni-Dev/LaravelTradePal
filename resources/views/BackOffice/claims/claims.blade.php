
<table class="container-xxl flex-grow-1 container-p-y">
    <tr>
        <td>
            <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">RECLAMATION /</span> Liste Des Réclamations
            </h4>
        </td>
        <td align="right">
            <a href="/dashboard/organization/add" class="btn btn-primary">Ajouter</a>
        </td>
    <tr>
</table>

<div class="card">
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
            <tr>
                <th><b>Subject</b></th>
                <th><b>Description</b></th>
                <th><b>Claim Date</b></th>
                <th><b>Status</b></th>
                <th><b>Actions</b></th>
            </tr>
            </thead>
            <tbody class="table-border-bottom-0">

            @if(!empty($listClaims))
            @foreach ($listClaims as $claim)
            <tr>

                <td>{{ $claim->subject }}</td>
                <td>{{ $claim->description }}</td>
                <td>{{ $claim->claim_date }}</td>
                <td>
    <span class="badge @if($claim->status == 'PENDING') bg-label-danger
                      @elseif($claim->status == 'IN PROGRESS') bg-label-warning
                      @elseif($claim->status == 'RESOLVED') bg-label-success
                      @else bg-label-dark @endif">
        {{ $claim->status }}
    </span>
                </td>


                <td>
                    <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i
                                class="bx bx-dots-vertical-rounded"></i></button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item"><i class="bx bx-show-alt me-1 bx-tada bx-md"></i> Display</a>
                            <a class="dropdown-item"><i class="bx bx-reply bx-fade-up-hover bx-tada bx-md" ></i>Reply</a>

                            <a class="dropdown-item"><i class="bx bx-edit-alt me-1 bx-tada bx-md"></i> Edit</a>
                            <form method="POST"
                                  onsubmit="return confirm('Are you sure you want to delete this organization?');">
                                @csrf
                                @method('DELETE')
                                <button class="dropdown-item" type="submit">
                                    <i class="bx bx-trash me-1 bx-tada bx-md"></i> Delete
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


