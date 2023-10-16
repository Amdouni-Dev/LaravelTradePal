<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Evenemnt /</span> Ajouter un evenement
</h4>
<div class="row">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-4">
            <div class="card-body"><div>
                    <form action="{{ route('events.store') }}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        <label for="defaultFormControlInput" class="form-label">Evenement</label>
                        <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Nom evenement"   name="nameEvent" aria-describedby="defaultFormControlHelp" />

                        @if ($errors->has('nameEvent'))
                            <div class="error">
                                {{ $errors->first('nameEvent') }}
                            </div>
                        @endif
                        <br/>
                        <label for="defaultFormControlInput" class="form-label">Lieu</label>
                        <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Nom evenement"   name="lieuEvent" aria-describedby="defaultFormControlHelp" />
                        @if ($errors->has('lieuEvent'))
                            <div class="error">
                                {{ $errors->first('lieuEvent') }}
                            </div>
                        @endif
                        <br/>
                        <label for="defaultFormControlInput" class="form-label">Description</label>
                        <textarea type="text" class="form-control" id="defaultFormControlInput" placeholder="Nom evenement"   name="descEvent" aria-describedby="defaultFormControlHelp"></textarea>
                        @if ($errors->has('descEvent'))
                            <div class="error">
                                {{ $errors->first('descEvent') }}
                            </div>
                        @endif

     <br/>
                        <label for="defaultFormControlInput" class="form-label">Date</label>
                        <input type="date" class="form-control" id="defaultFormControlInput" placeholder="Nom evenement"   name="dateEvent" aria-describedby="defaultFormControlHelp" />

                        @if ($errors->has('dateEvent'))
                            <div class="error">
                                {{ $errors->first('dateEvent') }}
                            </div>
                        @endif

                        <br/>
                        <label for="defaultFormControlInput" class="form-label">Heure Debut</label>
                        <input type="datetime-local" class="form-control" id="defaultFormControlInput" placeholder="Nom evenement"   name="start" aria-describedby="defaultFormControlHelp" />
                        @if ($errors->has('start'))
                            <div class="error">
                                {{ $errors->first('start') }}
                            </div>
                        @endif

                        <br/>
                        <label for="defaultFormControlInput" class="form-label">Heure fin</label>
                        <input type="datetime-local" class="form-control" id="defaultFormControlInput" placeholder="Nom evenement"   name="end" aria-describedby="defaultFormControlHelp" />

                        @if ($errors->has('end'))
                            <div class="error">
                                {{ $errors->first('end') }}
                            </div>
                        @endif

                        <br/>
                        <label for="defaultFormControlInput" class="form-label">Couleur</label>
                        <input type="color" class="form-control" id="defaultFormControlInput" name="color" />
<br/>


                        <label class="block mb-4">
                            <span class="sr-only">Choose File</span>
                            <input type="file" name="image"
                                   class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
{{--                            @error('image')--}}
{{--                            <span class="text-red-600 text-sm">{{ $message }}</span>--}}
{{--                            @enderror--}}
                        </label>
                        @if ($errors->has('image'))
                            <div class="error">
                                {{ $errors->first('image') }}
                            </div>
                        @endif
                        <br/>

                        <button type="submit" class="btn btn-primary">Ajouter</button>








                    </form>
                </div>
            </div>
        </div>


    </div>
</div>
