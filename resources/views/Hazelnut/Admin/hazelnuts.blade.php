<table class="container-xxl flex-grow-1 container-p-y">
    <tr><td>
            <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Hazelnuts /</span> Liste des hazelnuts
            </h4>
        </td>
        <td align="right">
            <a href="/dashboard/hazelnuts/add"  class="btn btn-primary">Ajouter</a>
        </td>
    <tr>
</table>

<div class="card">
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
            <tr>
                <th>Amount</th>

                <th>Status</th>
                <th>Expiration Date</th>

                <th>Actions</th>
            </tr>
            </thead>
            <tbody class="table-border-bottom-0">
            @foreach($listHazelnuts as $listHazelnuts)
            <tr>
                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $listHazelnuts->amount }}</strong></td>
                <td>{{ $listHazelnuts->status }}</td>
                <td>{{ $listHazelnuts->expiration_date }}</td>

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
<!--                            <a class="dropdown-item" href="{{ route('events.edit', $listHazelnuts->id) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>-->


<!--                            <form action="{{ route('events.destroy', $listHazelnuts->id) }}" method="POST">-->
<!--                                @csrf-->
<!--                                @method('DELETE')-->
<!--                                <button type="submit" class="dropdown-item"><i class="bx bx-trash me-1"></i> Delete</button>-->
<!--                            </form>-->
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
