<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Article /</span> Ajouter un article
</h4>
  <div class="col-xxl">
    <div class="card mb-4">
      <div class="card-body">
        <form action="{{ isset($blog) ? route('blogs.update', $blog) : route('blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($blog))
            @method('PUT')
        @else
            @method('POST')
        @endif
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Titre</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                <input value="{{ $blog->content ?? old('content') }}" name="title" type="text" class="form-control" id="basic-icon-default-fullname" placeholder="Titre de l'article" aria-label="Titre de l'article" aria-describedby="basic-icon-default-fullname2">
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