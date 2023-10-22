<!DOCTYPE html>
@extends('FrontEnd.section.header')
@section('pageTitle', 'TradePal - Nouveau Article')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="/back/assets/vendor/css/coredcac.css?id=7a74a9d0cfeabd283069bfaa3de33eaa" />
<link rel="stylesheet" href="/back/assets/vendor/css/theme-default6271.css?id=3d127db9612959fd1b1297d4adb3d55e" />
<link rel="stylesheet" href="/back/assets/css/rte_theme_default.css" />	
<link rel="stylesheet" href="/back/assets/vendor/fonts/boxicons076f.css?id=b821a646ad0904f9218f56d8be8f070c" />
<div id="main">
	<div id="animation-banner" class="web">		
		<div id="could-banner" class="no-overflow">
			<div id="cloud1" class="cloud">	
				<img src="/image/sketch/nuage1.svg" data-load="/image/sketch/nuage1.svg" alt="nuage" class="svg">
			</div>
			<div id="cloud2" class="cloud">
				<img src="/image/sketch/nuage2.svg" data-load="/image/sketch/nuage2.svg" alt="nuage" class="svg">
			</div>
			<div id="cloud3" class="cloud">
				<img src="/image/sketch/nuage3.svg" data-load="/image/sketch/nuage3.svg" alt="nuage" class="svg">
			</div>
			<div id="cloud4" class="cloud">
				<img src="/image/sketch/nuage1.svg" data-load="/image/sketch/nuage1.svg" alt="nuage" class="svg">
			</div>
			<div id="cloud5" class="cloud">
				<img src="/image/sketch/nuage2.svg" data-load="/image/sketch/nuage2.svg" alt="nuage" class="svg">
			</div>
		</div>
		<div id="birdheader" class="birdheader">				
			<img src="/image/sketch/oiseau_banniere.svg" data-load="/image/sketch/oiseau_banniere.svg" alt="bird" class="svg">
		</div>
		<div class="content">	
      		<img style="position:fixed;right:0%" src="/image/sketch/arbre_optim.svg" data-load="/image/sketch/arbre_optim.svg" alt="arbre" class="svg">
			<article class="testify" style="background-color:#bddde3">
				<div class="container top-sep" style="margin: 0em 3rem;background-color:#bddde300">
					<div class="thanks" style="background-color:#fff0;max-width: 85%;">
					<form style="position: relative;left: -7rem;width: 60rem;"action="{{ url('/storeBlog') }}" method="POST" enctype="multipart/form-data">
						@csrf
						@if(isset($blog))
							@method('PUT')
						@else
							@method('POST')
						@endif
						<div class="row mb-3">
							<label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Titre</label>
							<div class="col-sm-10">
							<div class="input-group">
								<span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
								<input value="{{ $blog->title ?? old('title') }}" name="title" type="text" class="form-control" id="basic-icon-default-fullname" placeholder="Titre de l'article" aria-label="Titre de l'article" aria-describedby="basic-icon-default-fullname2">
							</div>
							</div>
						</div>
						<div class="row mb-3">
							<label class="col-sm-2 col-form-label" for="basic-icon-default-company">Contenu</label>
							<div class="col-sm-10">
							<div class="input-group">
								<div id="div_editor1" name="div_editor1">
								</div>
								<input type="hidden" id="editorValue" name="content" value="{{ $blog->content ?? old('content') }}">
								<input type="hidden" id="editorValue1" value="{{ $blog->content ?? old('content') }}">
								<input type="radio" id="editEditor" name="editEditor" style="display: none;"
								@if(isset($blog))
									{{ $blog->content === '' ? '' : 'checked' }}
								@endif >
							</div>
							</div>
						</div>
						<div class="row mb-3">
							<label class="col-sm-2 col-form-label" for="basic-icon-default-company" id="tags-input">Mot clé</label>
							<div class="col-sm-10">
							<div class="input-group">
								<span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-comment"></i></span>
								<input value="" type="text" name="tags" class="form-control" id="tag-input" placeholder="Mot clé" aria-label="Mot clé" aria-describedby="button-addon2">
								<button class="btn btn-outline-primary" type="button" id="add-tag-button" style="margin-top: 0.5rem;height: 2.4rem;">Ajouter</button>
								<input type="hidden" id="tagsValue" name="tags" value="{{ $blog->tags ?? old('tags') }}" onchange="extractTags()">
							</div>
							<div id="tags-container"></div>
							</div>
						</div>
						<div class="row mb-3">
							<label class="col-sm-2 col-form-label" for="basic-icon-default-company">Image</label>
							<div class="col-sm-10">
							<div class="input-group">
								<span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-image-alt"></i></span>
								<input type="file" class="form-control" name="image" id="imageInput" accept="image/*" onchange="showImage()">
								<img src="" alt="" id="imagePreview" style="max-width: 80px;">
							</div>
							</div>
						</div>
						<input value="1" name="auteur" class="form-control" type="hidden">
						<div class="row mb-3">
							<label class="col-sm-2 col-form-label" for="basic-icon-default-email">Statut</label>
							<div class="col-sm-10">
							<div class="input-group">
								<div class="form-check form-switch mb-2">
								<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" 
									@if(isset($blog))
										{{ $blog->status === 'Publique' ? 'checked' : '' }}
									@endif>
								<label class="form-check-label" for="flexSwitchCheckChecked">Publier l'article</label>
								</div>
								<input value="{{ $blog->status ?? 'privé' }}" type="hidden" id="statutEditor" name="status">
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
			</article>
		</div>
	</div>
	
  <!-- Content Process !-->
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
      tagsArray.forEach(function (tag) {
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
        tagsValue.value = tagsValue.value + "," + tagValue ;
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
        reader.onload = function (e) {
          preview.src = e.target.result;
        };
        reader.readAsDataURL(input.files[0]);
      } else {
        preview.src = "";
      }
    }
  </script>
  <script type="text/javascript" src="/back/assets/js/rte.js"></script>
  <script type="text/javascript" src='/back/assets/js/all_plugins.js'></script>
  <script>
        var editor1 = new RichTextEditor("#div_editor1");
  </script>
</HTML>    