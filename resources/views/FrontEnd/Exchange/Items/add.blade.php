        
        <!DOCTYPE html>
        @extends('FrontEnd.section.header')
@section('pageTitle', 'Objets')


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<div id="main">



    <div id="animation-banner" class="web">
        <div id="could-banner" class="no-overflow">
            <div id="cloud1" class="cloud">
                <img src='static/image/1px.png' data-load='/image/sketch/nuage1.svg' alt='nuage'
                    class='svg'>
                <img src='static/image/1px.png' data-src='/static/image/sketch/nuage1.png' alt='nuage'
                    class='img'>
                <img src='static/image/1px.png' data-src='/static/image/sketch/nuage1@2x.png'
                    alt='nuage' class='retina'>
            </div>
            <div id="cloud2" class="cloud">
                <img src='static/image/1px.png' data-load='/image/sketch/nuage2.svg' alt='nuage'
                    class='svg'>
                <img src='static/image/1px.png' data-src='/static/image/sketch/nuage2.png' alt='nuage'
                    class='img'>
                <img src='static/image/1px.png' data-src='/static/image/sketch/nuage2@2x.png'
                    alt='nuage' class='retina'>

            </div>
            <div id="cloud3" class="cloud">
                <img src='static/image/1px.png' data-load='/image/sketch/nuage3.svg' alt='nuage'
                    class='svg'>
                <img src='static/image/1px.png' data-src='/static/image/sketch/nuage3.png' alt='nuage'
                    class='img'>
                <img src='static/image/1px.png' data-src='/static/image/sketch/nuage3@2x.png'
                    alt='nuage' class='retina'>

            </div>
            <div id="cloud4" class="cloud">
                <img src='static/image/1px.png' data-load='/image/sketch/nuage1.svg' alt='nuage'
                    class='svg'>
                <img src='static/image/1px.png' data-src='/static/image/sketch/nuage1.png' alt='nuage'
                    class='img'>
                <img src='static/image/1px.png' data-src='/static/image/sketch/nuage1@2x.png'
                    alt='nuage' class='retina'>

            </div>
            <div id="cloud5" class="cloud">
                <img src='static/image/1px.png' data-load='/image/sketch/nuage2.svg' alt='nuage'
                    class='svg'>
                <img src='static/image/1px.png' data-src='/static/image/sketch/nuage2.png' alt='nuage'
                    class='img'>
                <img src='static/image/1px.png' data-src='/static/image/sketch/nuage2@2x.png'
                    alt='nuage' class='retina'>

            </div>
        </div>
        <H1 class="title">Ajouter un troc </H1>

    </div>


    <div class="content">


        <article class="troc">
            <div class="form-add-troc form-troc top-sep">
            <form id="add-troc" action="{{ route('item.store') }}" method="POST" enctype="multipart/form-data">
              @csrf

                    <input type="hidden" name="mail" value="jenexistepas@jenexistepas.com">

                    <input id="onecub-troc" name="onecub-id" type="hidden" value="0">

                    <div class="add-top">

                        <div class="cols2 left">



                        </div>

                    </div>
                    <div id="container-add-content">
                        <div class="cols2 left">
                            <div id="annonce-form">
                               
                            <div>
                                    <H2>Image</h2>
                                </div>

                                <!-- form upload -->
                                <div class="upload-images-block">

                                    <div id="im1" class="square im-but">
                                  
                                    <label for="imageInput" class="upload-icon-label">
                                    <div class="square-content" style="display: flex; justify-content: center; align-items: center; background-color: #ebded5;">
                <img src="" alt="" id="imagePreview" style="max-width: 100%; max-height: 100%;">
            </div>
            <div class="upload-icon">
            <i class="fas fa-upload" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; font-size: 24px;"></i>

            </div>
        </label>
        <div id="upload-img-error-1" class="upload-img-error flash2" style="display:none"></div>
        <input type="file" name="image" id="imageInput" accept="image/*" onchange="afficherImage()" style="display: none;">
		  
   


                                        
                                    </div>
                                 
                                    @error('image')
<div class="w3-panel w3-pale-red w3-border" style="width: 74%;">{{ $message }}</div>
@enderror

                                </div>
                            </div>        

                              
                                <div class="troc-add-content">
                                    <H2>Général</h2>

                                    <div>
        <label for="name" class="main">Nom</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Nom">
    </div>

    @error('name')
    <div class="w3-panel w3-pale-red w3-border" style="width: 74%;">{{ $message }}</div>
    @enderror


                                    <div>
                                        <div class="valid-hint">Vous devez entrer une ville</div>
                                     

                                        <label for="category">Catégorie</label>
                                            <label class="select" style="">
                                                <select name="category" id="category" class="category level1">
                                                <option value="ELECTRONIQUE">Électronique</option>
            <option value="VETEMENTS">Vêtements</option>
            <option value="MEUBLES">Meubles</option>
            <option value="LIVRES">Livres</option>
            <option value="AUTRES">Autres</option>

                                                </select>
                                            </label>

                                            @error('category')

<div class="w3-panel w3-pale-red w3-border" style="width: 74%;">{{ $message }}</div>

@enderror
                                    </div>


                                    

                                </div>

                                <div>
                                    <H2>Détails</h2>
                                </div>

                              
                            <div class="troc-add-content">
                         



    <div class="troc-add-content">
    <label for="description">Description</label>
    <br></br>
    <textarea id="description" name="description" placeholder="La description de votre troc ici..." cols="4" rows="5"></textarea>

    @error('description')

    <div class="w3-panel w3-pale-red w3-border" style="width: 77%;">{{ $message }}</div>

@enderror
</div>


                                <div class="bar">

                                <div class="form-row">
        <label for="amount">Nombre de
        <div class='sprites icones'>
          
            <img src='../../static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg' class='svg nuts' alt='noisette'>
        </div>
        </label>
        <input type="text" name="amount" id="amount" class="form-control" placeholder="Nombre de noisettes demandé" >
       
  

@error('amount')

<div class="w3-panel w3-pale-red w3-border" style="width: 74%;">{{ $message }}</div>

@enderror



    </div>

    <div class="form-row">
        <label for="status">Statut</label>
        <input id="status-disponible" type="radio" name="status" class="troccategorytype" value="disponible">
        <label for="status-disponible">Disponible</label>
        <input id="status-non-disponible" type="radio" name="status" class="troccategorytype" value="nondisponible">
        <label for="status-non-disponible">Non</label>
        
@error('status')

<div class="w3-panel w3-pale-red w3-border" style="width: 74%;">{{ $message }}</div>

@enderror
    </div>

    <button type="submit" class="form-button">
    <div class="button valid-button">
        <div class="waves waves-prune">
            Ajouter
        </div>
    
        </button>
                                </div>
                                <div id="flash" class="flash" style="display:none"></div>

                            </div>

                        </div>

                        <div id="illustration-add-troc" class="web">
                            <div id="tree">

                                <img src='static/image/1px.png'
                                    data-load='/image/sketch/arbre_optim.svg' alt='arbre'
                                    class='svg'>
                                <img src='static/image/1px.png'
                                    data-src='/static/image/sketch/arbre_optim.png' alt='arbre'
                                    class='img'>
                                <img src='static/image/1px.png'
                                    data-src='/static/image/sketch/arbre_optim@2x.png' alt='arbre'
                                    class='retina'>

                            </div>

                            <div class="bubble">
                                Si tu ne sais pas combien mettre de noisettes pour troquer, regarde
                                <a href="/bareme">
                                    <div class=" waves waves-prune"> le bar&egrave;me&nbsp;!</div>
                                </a>
                            </div>
                            <div class="web illu-add-troc">

                                <img src='static/image/1px.png'
                                    data-load='/image/sketch/velo_bleu.svg' alt='velo' class='svg'>
                                <img src='static/image/1px.png'
                                    data-src='/static/image/sketch/velo_bleu.png' alt='velo'
                                    class='img'>
                                <img src='static/image/1px.png'
                                    data-src='/static/image/sketch/velo_bleu@2x.png' alt='velo'
                                    class='retina'>
                            </div>

                        </div>
                    </div>
                </form>
                <div class="dnone">			
											
											
											<form id="image-upload-1" method="post"   target="targetUpload"  enctype="multipart/form-data">						
												<input id="image-input-1" class="image-input" data-index="1" type="file" name="piix"  accept="image/*">
												<input type="hidden"  name="index"  value="1">
												<input type="hidden"  name="tid"  value="">

												<input type="hidden" name="MAX_FILE_SIZE" value="20000000" />
											</form>
											
											
											<form id="image-upload-2" method="post"   target="targetUpload"  enctype="multipart/form-data">						
												<input id="image-input-2" class="image-input" data-index="2" type="file" name="piix"  accept="image/*">
												<input type="hidden"  name="index"  value="2">
												<input type="hidden"  name="tid"  value="">

												<input type="hidden" name="MAX_FILE_SIZE" value="20000000" />
											</form>
											
											
											<form id="image-upload-3" method="post"   target="targetUpload"  enctype="multipart/form-data">						
												<input id="image-input-3" class="image-input" data-index="3" type="file" name="piix"  accept="image/*">
												<input type="hidden"  name="index"  value="3">
												<input type="hidden"  name="tid"  value="">

												<input type="hidden" name="MAX_FILE_SIZE" value="20000000" />
											</form>
											<iframe id="targetUpload" name="targetUpload"></iframe>
											
											<div id="hidden-waiter">
												<img src='../cf.mytroc.fr/image/wait.gif'  class=''>
											</div>
											
										</div> 
										
									</div>
									<script type="application/ld+json">
										{
											"@context": "http://schema.org",
											"@type": "BreadcrumbList",
											"itemListElement": [
											
											{
												"@type": "ListItem",
												"position": 0,
												"item": {
												"@id" : "/ajouter-un-troc",
												"name": "Ajouter un troc"
											}
										}
										
										]
									}
								</script>
								
							</article>		


							<noscript>
								Ce site utilise Javascript, vous devez activer Javascript pour que le site fonctionne correctement.				<div>&nbsp;</div><div>
									<a href="https://support.google.com/chrome/answer/114662?hl=fr" target="_blank" rel="external nofollow">
									Param&egrave;trer javascript dans Google Chrome &copy;					</a>
								</div><div>
									<a href="https://support.mozilla.org/fr/kb/parametres-javascript-pages-interactives" target="_blank" rel="external nofollow">
										Param&egrave;trer javascript dans Mozilla Firefox &copy;						
									</a>
								</div><div>
									<a href="http://support.microsoft.com/gp/howtoScript/fr" target="_blank" rel="external nofollow">
										Param&egrave;trer javascript dans Internet Explorer &copy;						
									</a>
								</div><div>
									<a href="http://support.apple.com/fr-fr/HT1677" target="_blank" rel="external nofollow">
									Param&egrave;trer javascript dans Apple Safari &copy;						</a>
								</div><div>
									<a href="http://help.opera.com/Windows/12.10/fr/javascript.html" target="_blank" rel="external nofollow">
										Param&egrave;trer javascript dans Opera de Opera Software &copy;						
									</a>																				
								</div> 
							</noscript>
						</div>

					</div> 
                    <script>
        function afficherImage() {
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
                @extends('FrontEnd.section.footer')

                </HTML>