<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Article /</span> Ajouter un article
</h4>
  <div class="col-xxl">
    <div class="card mb-4">
      <div class="card-body">
        <form method="post" action="{{ route('blogs.store') }}">
         @csrf
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Titre</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                <input name="title" type="text" class="form-control" id="basic-icon-default-fullname" placeholder="Titre de l'article" aria-label="Titre de l'article" aria-describedby="basic-icon-default-fullname2">
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Contenu</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <div id="div_editor1" name="div_editor1">
                    <p>Rediger votre article.</p>
                </div>
                <input type="hidden" id="editorValue" name="editorValue">
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Mot clé</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-comment"></i></span>
                <input type="text" name="tags" class="form-control" placeholder="Mot clé" aria-label="Mot clé" aria-describedby="button-addon2">
                <button class="btn btn-outline-primary" type="button" id="button-addon2">Ajouter</button>
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Image</label>
            <div class="col-sm-10">
              <div class="input-group">
                <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-image-alt"></i></span>
                <input type="file" class="form-control" id="inputGroupFile02">
                <label class="input-group-text" for="inputGroupFile02">Importer</label>
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-email" >Auteur</label>
            <div class="col-sm-10">
              <div class="input-group">
                <span class="input-group-text" id="basic-addon11">@</span>
                <input name="auteur" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon11">
              </div>
              <div class="form-text"> You can use letters, numbers &amp; periods </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Statut</label>
            <div class="col-sm-10">
              <div class="input-group">
                <div class="form-check form-switch mb-2">
                  <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" >
                  <label class="form-check-label" for="flexSwitchCheckChecked">Publier l'article</label>
                </div>
                <input value="false" type="hidden" id="statutEditor" name="status">

              </div>
            </div>
          </div>
          <div align ="right">   
            <button type="submit" class="btn btn-primary">Ajouter</button>
            <button type="reset" class="btn btn-secondary">Annuler</button>
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
      </div>
    </div>
  </div>
  <script>
    var checkbox = document.getElementById("flexSwitchCheckChecked");
    checkbox.addEventListener("click", function() {
        if(checkbox.checked){
            document.getElementById("statutEditor").value = "Publique";
        }else{
            document.getElementById("statutEditor").value = "Privé";
        }
    });
  </script>