<div class="col-xl">
    <div class="card mb-4">
        <div class="card-body">
            <p><b>Objet : </b> {{ $claim->subject }}</p>
            <p><b>De : </b> {{ strtoupper($user->name) }} {{ strtoupper($user->surname) }}</p>
            <p><b>Le : </b> {{ $claim->claim_date }}</p>

            <img src="/claims/{{$claim->claimImage}}" width="500" height="500"/><br><br>
            <p><b>Description : </b> {{ $claim->description }}</p>
            <p><b>Status : </b> <span class="badge @if($claim->status == 'PENDING') bg-label-danger
                      @elseif($claim->status == 'IN PROGRESS') bg-label-warning
                      @elseif($claim->status == 'RESOLVED') bg-label-success
                      @else bg-label-dark @endif">
        {{ $claim->status }}
    </span></p><br>
            <div class="response-section">
                <h3>Réponses :</h3>
                @foreach ($responses as $response)
                <div class="response">

                    <p><i class="bx bx-comment bx-tada"></i> {{ $response->content }} Le <b>{{$response->response_date}}</b></p>
                </div>
                <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                    <div class="dropdown-menu">

                        <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editResponseModal_{{ $response->id }}">
                            <i class="bx bx-edit-alt me-1"></i>Modifier
                        </a>


<!--------------------------------------------------------------------DELETE------------------------------------------------->

                        <form method="POST" id="delete-form" action="{{ route('reply.destroy', ['id' => $response->id]) }}">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-icon me-2 btn-outline-danger" onclick="return confirmDelete();">
                                <span class="bx bx-trash me-1"></span>
                            </button> Delete
                        </form>

                    </div>

                    <!--------------------------------------------------------------------UPDATE------------------------------------------------->
                    <div class="modal fade" id="editResponseModal_{{ $response->id }}" tabindex="-1" aria-labelledby="editResponseModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editResponseModalLabel">Modifier la réponse</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Response editing form -->
                                    <form method="POST" action="{{ route('responses.update', ['id' => $response->id]) }}">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="claim_id" value="{{ $claim->id }}">
                                        <input type="hidden" name="user_id" value="{{ $claim->user_id }}">
                                        <div class="form-group">
                                            <label for="responseContent">Contenu de la réponse</label>
                                            <textarea class="form-control" name="content" id="responseContent" rows="4">{{ $response->content }}</textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Mettre à jour la réponse</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    @if (!$loop->last)
                <div style="margin-bottom: 20px;"></div>
                @endif
                @endforeach
            </div>
<br>
                <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="claimModalLabel">Confirm Deletion</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to delete this claim?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel
                                </button>
                                <form method="POST" action="{{ route('claims.destroy', $claim) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <form method="POST" action="{{ route('reply.store') }}">
                @csrf

                <input type="hidden" name="claim_id" value="{{ $claim->id }}">

                <div class="mb-3">
                    <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bx-comment"></i></span>
                        <textarea name="content" id="basic-icon-default-company" class="form-control">Bonjour {{ strtoupper($user->name) }} {{ strtoupper($user->surname) }}, merci d'avoir contacté notre équipe TradePal. Nous avons bien étudié votre réclamation, nous sommes désolés que vous rencontriez un tel problème, nous souhaitions vous informer que notre agent récupérera votre troc cette semaine. Veuillez rester connecté, s'il vous plaît. Bonne journée ! </textarea>
                    </div>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-info ">Répondre</button>
                </div>
            </form>
        </div>
    </div>
</div>
    <style>
        .modal-lg .modal-body {
            max-height: calc(100vh - 200px);
            overflow-y: auto;
        }
    </style>

    <script>
        function confirmDelete() {
            if (confirm("Voulez-vous vraiment supprimer cette réclamation ?")) {

                document.getElementById('delete-form').submit();
            } else {

                return false;
            }
        }
    </script>
