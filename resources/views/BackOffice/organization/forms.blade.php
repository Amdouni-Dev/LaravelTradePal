<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Organisation /</span> Ajouter une organisation
</h4>


<!-- Form controls -->
<form action="{{ isset($organization) ? route('organizations.update', $organization) : route('organizations.store') }}" method="POST">
    @csrf
    @if(isset($organization))
    @method('PUT')
    @endif
    <div class="col-xl">
        <div class="card mb-4">
            <h5 class="card-header">Coordonnées</h5>
            <div class="card-body">

                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-company">Nom</label>
                    <div class="input-group input-group-merge">
                        <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
                        <input name="name" type="text" id="basic-icon-default-company" class="form-control" placeholder="Animaux sans toit.." aria-label="ACME Inc." aria-describedby="basic-icon-default-company2" value="{{ $organization->name ?? old('name') }}" />
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-email">Adresse E-mail</label>
                    <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                        <input name="email" type="text" id="basic-icon-default-email" class="form-control" placeholder="john.doe@example.com" aria-label="john.doe" aria-describedby="basic-icon-default-email2" value="{{ $organization->email ?? old('email') }}" />
                    </div>

                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-phone">Numéro de Téléphone</label>
                    <div class="input-group input-group-merge">
                        <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span>
                        <input name="phone_number" type="text" id="basic-icon-default-phone" class="form-control phone-mask" placeholder="99 999 999" aria-label="99 999 999" aria-describedby="basic-icon-default-phone2" value="{{ $organization->phone_number ?? old('phone_number') }}" />
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-website">Site Web</label>
                    <div class="input-group input-group-merge">
                        <span id="basic-icon-default-website" class="input-group-text"><i class="bx bx-link-external"></i></span>
                        <input name="website" type="text" id="basic-icon-default-website" class="form-control" placeholder="https://example.org/" aria-label="https://example.org/" aria-describedby="basic-icon-default-website" value="{{ $organization->website ?? old('website') }}" />
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-location">Adresse</label>
                    <div class="input-group input-group-merge">
                        <span id="basic-icon-default-location" class="input-group-text"><i class="bx bx-map"></i></span>
                        <input name="location" type="text" id="basic-icon-default-address" class="form-control" placeholder="18 rue l'artisanat, Ariana, 2073" aria-label="https://example.org/" aria-describedby="basic-icon-default-location" value="{{ $organization->location ?? old('location') }}" />
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl">
            <div class="card mb-4">
                <h5 class="card-header">Details</h5>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-phone">Date de fondation</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-calendar"></i></span>
                            <input name="founding_date" type="date" id="basic-icon-default-phone" class="form-control phone-mask" placeholder="https://example.org/" aria-label="https://example.org/" aria-describedby="basic-icon-default-phone2" value="{{ $organization->founding_date ?? old('founding_date') }}" />
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlSelect1" class="form-label">Secteur d'Activité</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-select-multiple"></i></span>
                            <select name="type" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                                <option value="1" {{ $organization->type == 1 ? 'selected' : '' }}>Education</option>
                                <option value="2" {{ $organization->type == 2 ? 'selected' : '' }}>Environnement</option>
                                <option value="3" {{ $organization->type == 3 ? 'selected' : '' }}>Santé</option>
                                <option value="4" {{ $organization->type == 4 ? 'selected' : '' }}>Droits de l'homme</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-detail"></i></span>
                            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="4">{{ $organization->description ?? old('description') }}</textarea>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <button type="reset" class="btn btn-secondary">Réinitialiser</button>
        <button type="submit" class="btn btn-primary">{{ isset($organization) ? 'Enregister' : 'Ajouter' }}</button>

    </div>
</form>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif