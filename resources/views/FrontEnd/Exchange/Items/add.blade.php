        
        <!DOCTYPE html>
        @extends('FrontEnd.section.header')
@section('pageTitle', 'Noisette')
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
                  

                  
                    <div id="container-add-content">
                        <div class="cols2 left">
                            <div id="annonce-form">
                                
                              
                                    
                                
                                    


                                    

                                        

                                </div>

                                <div>
                                    <H2>Détails de l'objet</h2>
                                </div>

                             <!-- form upload -->
                     
<div class="upload-images-block">
    <div id="im1" class="square im-but">
        <div class="square-content">
            
            <div id="upload-im-button-1" class="upload-im-button" data-post="image-upload-1">
          
                <label for="image-input-1" class="button-img image-input">
                <img src="" alt="" id="imagePreview" style="max-width: 300px; max-height: 300px;">
                    <div class='sprites icones'>
                       
                        <img src='../../static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg'
                            class='svg ic-mat-pix' alt='camera' >
                            
                    </div>
                </label>
              
            </div>

            <!-- Champ d'entrée de fichier pour l'image -->
        

          
        </div>
    </div>
</div>




    
        <input type="file"  name="image" id="imageInput" accept="image/*" onchange="afficherImage()">
      
   
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





<div class="troc-add-content">
    <div id="troc-title">
        <label for="name">Nom de l'objet</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Nom" required>
        <div class="validator"></div>
    </div>



 



    <div id="category-selector-1" class="category-selector">
                                        <div>
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

                                        </div>
                                        <div>



                                      



   
       
   
    <div class="form-row">
        <label for="amount">Nombre de
        <div class='sprites icones'>
          
            <img src='../../static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg' class='svg nuts' alt='noisette'>
        </div>
        </label>
        <input id="amount" type="text" name="amount" maxlength="6" placeholder="noisettes" value="">
        <div class="validator"></div>
    </div>
    <div class="troc-add-content">
    <label for="description">Description</label>
    <textarea id="description" name="description" placeholder="La description de votre troc ici..." cols="4" rows="5"></textarea>
</div>

</div>
<div class="form-row">
        <label for="status">Statut</label>
        <input id="status-disponible" type="radio" name="status" class="troccategorytype" value="disponible">
        <label for="status-disponible">Disponible</label>
        <input id="status-non-disponible" type="radio" name="status" class="troccategorytype" value="non-disponible">
        <label for="status-non-disponible">Non</label>
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
                                    data-load='../../image/sketch/arbre_optim.svg' alt='arbre'
                                    class='svg'>
                                <img src='../..static/image/1px.png'
                                    data-src='../../static/image/sketch/arbre_optim.png' alt='arbre'
                                    class='img'>
                                <img src='../..static/image/1px.png'
                                    data-src='../../static/image/sketch/arbre_optim@2x.png' alt='arbre'
                                    class='retina'>

                            </div>

                            <div class="bubble">
                                Si tu ne sais pas combien mettre de noisettes pour troquer, regarde
                                <a href="/bareme">
                                    <div class=" waves waves-prune"> le bar&egrave;me&nbsp;!</div>
                                </a>
                            </div>
                            <div class="web illu-add-troc">

                                <img src='../../static/image/1px.png'
                                    data-load='../../image/sketch/velo_bleu.svg' alt='velo' class='svg'>
                                <img src='../..static/image/1px.png'
                                    data-src='../../static/image/sketch/velo_bleu.png' alt='velo'
                                    class='img'>
                                <img src='../..static/image/1px.png'
                                    data-src='../../static/image/sketch/velo_bleu@2x.png' alt='velo'
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
								
								
							</article>		


						
						</div>

					</div> 
               

                </HTML>