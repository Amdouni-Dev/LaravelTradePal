<table class="container-xxl flex-grow-1 container-p-y">
    <tr><td>
            <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Evenement /</span> Detail d'evenement {{$event->nom}}
            </h4>
            <h4>Debug: {{ $event->image }}</h4>
            <img src="{{ asset( $event->image   )}}" alt="Image Description">

        </td>
        <td align="right">
            <a href="/dashboard/events/add"  class="btn btn-primary">Ajouter</a>
        </td>
    <tr>
</table>

<div class="card">
    <div class="table-responsive text-nowrap">
</div>
</div>

