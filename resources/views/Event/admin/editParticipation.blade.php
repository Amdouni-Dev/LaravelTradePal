<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Evenemnt /</span> Modifier une participation
</h4>
<div class="row">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-4">
            <div class="card-body"><div>
                    <form action="{{route('participations.update',$participation->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <label for="defaultFormControlInput" class="form-label">Utilisateur</label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="nomUser" value=" {{$participation->nomUser}} " aria-describedby="defaultFormControlHelp" />
                        <br/>
                        <label for="defaultFormControlInput" class="form-label">Objet proposé</label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="proposedObject"   value=" {{$participation->proposedObject}} " aria-describedby="defaultFormControlHelp" />
                        <br/>
                        <label for="defaultFormControlInput" class="form-label">Description D'objet</label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="descriptionObject"  value=" {{$participation->descriptionObject}} " aria-describedby="defaultFormControlHelp" />
                        <br/>
                        <label for="defaultFormControlInput" class="form-label">Changé par</label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="changedBy" value=" {{$participation->changedBy}} "  aria-describedby="defaultFormControlHelp" />
                        <br/>
                        <label for="event_id" class="form-label">Événement</label>
                        <select class="form-select" id="event_id" name="event_id">
                            @foreach($events as $event)
                                <option value="{{ $event->id }}" @if($participation->event_id == $event->id) selected @endif>{{ $event->nom }}</option>
                            @endforeach
                        </select>

                        <button type="submit" class="btn btn-primary">Modifier</button>








                    </form>
                </div>
            </div>
        </div>


    </div>
</div>
