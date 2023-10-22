<head>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
  <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
  <script>
    Pusher.logToConsole = true;

    var pusher = new Pusher('f8a9052143a0cc4f6c2d', {
      cluster: 'eu'
    });

    var channel = pusher.subscribe('donation-channel');
    channel.bind('donation-made', function(data) {
      toastr.success("Un nouveau don a été effectué");
    });
  </script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<table class="container-xxl flex-grow-1 container-p-y">
  <tr>
    <td>
      <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Dons /</span> Liste des dons
      </h4>
    </td>
    <td align="right">
      <a href="{{ route('donations.export') }}" class="btn btn-primary">Exporter</a>
    </td>
  <tr>
</table>

<div class="card">
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>Utilisateur</th>
          <th>Catégorie</th>
          <th>Timestamp</th>
          <th>Organisation</th>
          <th>Montant</th>
          <th>Objet</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">

        @if(!empty($donations))
        @foreach ($donations as $donation)
        <tr>
          <td>{{ $donation->donor->username }}</td>
          <td>{{ $donation->category }}</td>
          <td>{{ $donation->timestamp }}</td>
          <td>{{ $donation->organization->name }}</td>
          <td>{{ $donation->amount }}</td>
          <td>
            @if ($donation->item)
            {{ $donation->item->name }}
            @else
            Pas d'objet
            @endif
          </td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <form action="{{ route('donations.destroy', $donation) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this donation?');">
                  @csrf
                  @method('DELETE')
                  <button class="dropdown-item" type="submit">
                    <i class="bx bx-trash me-1"></i> Supprimer
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
<div class="text-center mt-4">
  {{ $donations->links() }}
</div>

@auth
<script>
  Echo.private('donation-made.{{ auth()->id() }}')
    .listen('DonationMade', (event) => {
      // Handle the new donation event and update the dashboard
    });
</script>
@endauth