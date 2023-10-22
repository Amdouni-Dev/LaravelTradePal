<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Article /</span> Ajouter un article
</h4>
<div class="col-xxl">
    <div class="card mb-4">
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ isset($blog) ? route('blogs.update', $blog) : route('blogs.store') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @if (isset($blog))
                    @method('PUT')
                @else
                    @method('POST')
                @endif
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Titre</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bx-user"></i></span>
                            <input value="{{ $blog->title ?? old('title') }}" name="title" type="text"
                                class="form-control" id="basic-icon-default-fullname" placeholder="Titre de l'article"
                                aria-label="Titre de l'article" aria-describedby="basic-icon-default-fullname2">
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
                            <input type="hidden" id="editorValue" name="content"
                                value="{{ $blog->content ?? old('content') }}">
                            <input type="hidden" id="editorValue1" value="{{ $blog->content ?? old('content') }}">
                            <input type="radio" id="editEditor" name="editEditor" style="display: none;"
                                @if (isset($blog)) {{ $blog->content === '' ? '' : 'checked' }} @endif>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-company" id="tags-input">Mot
                        clé</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-message2" class="input-group-text"><i
                                    class="bx bx-comment"></i></span>
                            <input value="" type="text" name="tags" class="form-control" id="tag-input"
                                placeholder="Mot clé" aria-label="Mot clé" aria-describedby="button-addon2">
                            <button class="btn btn-outline-primary" type="button" id="add-tag-button">Ajouter</button>
                            <input type="hidden" id="tagsValue" name="tags" value="{{ $blog->tags ?? old('tags') }}"
                                onchange="extractTags()">
                        </div>
                        <div id="tags-container"></div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Image</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <span id="basic-icon-default-message2" class="input-group-text"><i
                                    class="bx bx-image-alt"></i></span>
                            <input type="file" class="form-control" name="image" id="imageInput" accept="image/*"
                                onchange="showImage()">
                            <img src="" alt="" id="imagePreview" style="max-width: 80px;">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Auteur</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon11">@</span>
                            <input value="{{ $blog->user_id ?? old('user_id') }}" name="auteur" class="form-control"
                                list="datalistOptions" id="exampleDataList" placeholder="Tapez pour chercher...">
                            <datalist id="datalistOptions">
                                @if (!@empty($users))
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                @endif
                            </datalist>
                        </div>
                        <div class="form-text"> You can use letters, numbers &amp; periods </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Statut</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked"
                                    @if (isset($blog)) {{ $blog->status === 'Publique' ? 'checked' : '' }} @endif>
                                <label class="form-check-label" for="flexSwitchCheckChecked">Publier l'article</label>
                            </div>
                            <input value="{{ $blog->status ?? 'privé' }}" type="hidden" id="statutEditor"
                                name="status">
                        </div>
                    </div>
                </div>
                <div align ="right">
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                    <button type="reset" class="btn btn-secondary">Annuler</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Content Process !-->
<script>
    var checkbox = document.getElementById("flexSwitchCheckChecked");
    checkbox.addEventListener("click", function() {
        if (checkbox.checked) {
            document.getElementById("statutEditor").value = "Publique";
        } else {
            document.getElementById("statutEditor").value = "Privé";
        }
    });
</script>
<script>
    function updateEditorValue() {
        var editorValueInput = document.getElementById("editorValue");
        var htmlCode = editor1.getHTMLCode();
        editorValueInput.value = htmlCode;
    }
    setInterval(updateEditorValue, 1000);
</script>
<script>
    window.onload = function() {
        var editEditorRadio = document.getElementById("editEditor");
        var editorValueGrabbed = document.getElementById("editorValue1").value;
        if (editEditorRadio.checked) {
            editor1.setHTMLCode(editorValueGrabbed);
        }
    };
</script>

<!-- Tags Process !-->
<script>
    function addTag(tag) {
        var tagsContainer = document.getElementById("tags-container");
        var tagElement = document.createElement("span");
        var labelClasses = [
            "badge bg-label-primary",
            "badge bg-label-secondary",
            "badge bg-label-success",
            "badge bg-label-danger",
            "badge bg-label-warning",
            "badge bg-label-info",
            "badge bg-label-dark"
        ];
        var randomIndex = Math.floor(Math.random() * labelClasses.length);
        var randomLabelClass = labelClasses[randomIndex];
        tagElement.setAttribute("class", randomLabelClass);
        tagElement.textContent = tag;
        var deleteButton = document.createElement("button");
        deleteButton.textContent = "";
        deleteButton.classList.add("btn-close");
        deleteButton.addEventListener("click", function() {
            tagsContainer.removeChild(tagElement);
        });
        tagElement.appendChild(deleteButton);
        tagsContainer.appendChild(tagElement);
    }
    window.onload = function() {
        const tagsValue = document.getElementById('tagsValue').value;
        const tagsArray = tagsValue.split(",");
        console.log(tagsArray);
        tagsArray.forEach(function(tag) {
            if (tag.trim() !== "") {
                addTag(tag);
            }
        });
    }
    document.getElementById("add-tag-button").addEventListener("click", function() {
        var tagInput = document.getElementById("tag-input");
        var tagValue = tagInput.value.trim();
        if (tagValue !== "") {
            addTag(tagValue);
            tagsValue.value = tagsValue.value + "," + tagValue;
            tagInput.value = "";
        }
    });
</script>

<!-- Image Process !-->
<script>
    function showImage() {
        const input = document.getElementById('imageInput');
        const preview = document.getElementById('imagePreview');
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
            };
            reader.readAsDataURL(input.files[0]);
        } else {
            preview.src = "";
        }
    }
</script>

<!-- User Process !-->
<script>
    var form = document.querySelector('form');
    form.addEventListener('submit', function() {
        var userInput = document.getElementById('user-input');
        var userDatalist = document.getElementById('datalistOptions');
        var selectedOption = Array.from(userDatalist.options).find(function(option) {
            return option.text === userInput.value;
        });
        if (selectedOption) {
            document.getElementById('user-id').value = selectedOption.getAttribute('data-user-id');
        }
    });
</script>
