<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Evenemnt /</span> Ajouter une participation
</h4>
<div class="row">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-4">
            <div class="card-body"><div>
                    <form action="{{ route('participations.store') }}" method="POST">
                        @csrf
                        <label for="defaultFormControlInput" class="form-label">Utilisateur</label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="nomUser" placeholder="nom de l'utilisateur " aria-describedby="defaultFormControlHelp" />
                        <br/>
                        <label for="defaultFormControlInput" class="form-label">Objet proposé</label>
                        <input type="text" class="form-control" id="defaultFormControlInput"  name="proposedObject" placeholder="Objet proposé" aria-describedby="defaultFormControlHelp" />
                        <br/>
                        <label for="defaultFormControlInput" class="form-label">Description D'objet</label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="descriptionObject" placeholder="decrivez l'objet" aria-describedby="defaultFormControlHelp" />
                        <br/>
                        <label for="defaultFormControlInput" class="form-label">Changé par</label>
                        <input type="date" class="form-control" id="defaultFormControlInput" name="changedBy" placeholder="objet changé par" aria-describedby="defaultFormControlHelp" />
                        <br/>
                        <label for="event_id" class="form-label">Événement</label>
                        <select class="form-select" id="event_id" name="event_id">
                            @foreach($events as $event)
                                <option value="{{ $event->id }}" name="event_id" >{{ $event->nom }}</option>
                            @endforeach
                        </select>
                        <button type="submit" class="btn btn-primary">Ajouter</button>








                    </form>
                </div>
            </div>
        </div>


    </div>
</div>
