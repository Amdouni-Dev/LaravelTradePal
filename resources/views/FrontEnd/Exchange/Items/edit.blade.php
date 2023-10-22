<!DOCTYPE html>
		@extends('FrontEnd.section.header')
		@section('pageTitle', 'Profile')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="stylesheet" href="{{ asset('css/style.css') }}">

		<div id="main">



		    <div id="animation-banner" class="web">
		        <div id="could-banner" class="no-overflow">
		            <div id="cloud1" class="cloud">
		                <img src="./Troc et consommation responsable sur MyTroc.fr_files/nuage1.svg"
		                    data-load="https://cf.mytroc.fr/image/sketch/nuage1.svg" alt="nuage" class="svg">


		            </div>
		            <div id="cloud2" class="cloud">
		                <img src="./Troc et consommation responsable sur MyTroc.fr_files/nuage2.svg"
		                    data-load="https://cf.mytroc.fr/image/sketch/nuage2.svg" alt="nuage" class="svg">



		            </div>
		            <div id="cloud3" class="cloud">
		                <img src="./Troc et consommation responsable sur MyTroc.fr_files/nuage3.svg"
		                    data-load="https://cf.mytroc.fr/image/sketch/nuage3.svg" alt="nuage" class="svg">



		            </div>
		            <div id="cloud4" class="cloud">
		                <img src="./Troc et consommation responsable sur MyTroc.fr_files/nuage1.svg"
		                    data-load="https://cf.mytroc.fr/image/sketch/nuage1.svg" alt="nuage" class="svg">



		            </div>
		            <div id="cloud5" class="cloud">
		                <img src="./Troc et consommation responsable sur MyTroc.fr_files/nuage2.svg"
		                    data-load="https://cf.mytroc.fr/image/sketch/nuage2.svg" alt="nuage" class="svg">



		            </div>
		        </div>
		        <h1 class="title">Mon Profil</h1>

		    </div>


		    <div class="content">

		        <div class="my-profile top-sep">

		            <div id="tree" class="web">
		                <img src="./Troc et consommation responsable sur MyTroc.fr_files/arbre_optim.svg" alt="arbre"
		                    class="svg">




		            </div>

		            <nav class="profile-menu">
		                <ul>
		                    <li class="   ">
		                        <div class="pancarte even ">
		                            <a href="https://mytroc.fr/inbox">
		                                <div class="pancarte-content">
		                                    <img src="/image/menu/oiseau_right_up.svg"
		                                        alt="oiseau" class="bird web svg">



		                                    <div class="link waves">Mes messages<span class="nUnreadMessage"></span></div>
		                                    <div class="dot tl"></div>
		                                    <div class="dot tr"></div>
		                                    <div class="dot bl"></div>
		                                    <div class="dot br"></div>

		                                </div>
		                            </a>
		                        </div>
		                        <div class="rope right">&nbsp;</div>
		                        <div class="rope left">&nbsp;</div>
		                    </li>
		                    <li class="   ">
		                        <div class="pancarte even ">
		                            <!-- <a href="https://mytroc.fr/mes-trocs"> -->
									<a href="/item/show">
		                                <div class="pancarte-content">

		                                    <div class="link waves">Mes offres</div>
		                                    <div class="dot tl"></div>
		                                    <div class="dot tr"></div>
		                                    <div class="dot bl"></div>
		                                    <div class="dot br"></div>

		                                </div>
		                            </a>
		                        </div>
		                        <div class="rope right">&nbsp;</div>
		                        <div class="rope left">&nbsp;</div>
		                    </li>
		                    <li class="   ">
		                        <div class="pancarte odd ">
		                            <a href="https://mytroc.fr/mes-noisettes">
		                                <div class="pancarte-content">

		                                    <div class="link waves">Mes noisettes</div>
		                                    <div class="dot tl"></div>
		                                    <div class="dot tr"></div>
		                                    <div class="dot bl"></div>
		                                    <div class="dot br"></div>

		                                </div>
		                            </a>
		                        </div>
		                        <div class="rope right">&nbsp;</div>
		                        <div class="rope left">&nbsp;</div>
		                    </li>
		                    <li class="   ">
		                        <div class="pancarte odd ">
		                            <a href="https://mytroc.fr/agrandir-la-communaute-mytroc">
		                                <div class="pancarte-content">

		                                    <div class="link waves">Agrandir la communauté</div>
		                                    <div class="dot tl"></div>
		                                    <div class="dot tr"></div>
		                                    <div class="dot bl"></div>
		                                    <div class="dot br"></div>

		                                </div>
		                            </a>
		                        </div>
		                        <div class="rope right">&nbsp;</div>
		                        <div class="rope left">&nbsp;</div>
		                    </li>
		                    <li class="   ">
		                        <div class="pancarte even ">
		                            <a href="https://mytroc.fr/parrainages">
		                                <div class="pancarte-content">

		                                    <div class="link waves">Parrainage</div>
		                                    <div class="dot tl"></div>
		                                    <div class="dot tr"></div>
		                                    <div class="dot bl"></div>
		                                    <div class="dot br"></div>

		                                </div>
		                            </a>
		                        </div>
		                        <div class="rope right">&nbsp;</div>
		                        <div class="rope left">&nbsp;</div>
		                    </li>
		                    <li class="   ">
		                        <div class="pancarte odd ">
		                            <a href="https://mytroc.fr/dons-aux-associations">
		                                <div class="pancarte-content">

		                                    <div class="link waves">Dons aux assos</div>
		                                    <div class="dot tl"></div>
		                                    <div class="dot tr"></div>
		                                    <div class="dot bl"></div>
		                                    <div class="dot br"></div>

		                                </div>
		                            </a>
		                        </div>
		                        <div class="rope right">&nbsp;</div>
		                        <div class="rope left">&nbsp;</div>
		                    </li>
		                    <li class="   ">
		                        <div class="pancarte even ">
		                            <a href="https://mytroc.fr/modifier-mon-profil">
		                                <div class="pancarte-content">

		                                    <div class="link waves">Modifier mon profil</div>
		                                    <div class="dot tl"></div>
		                                    <div class="dot tr"></div>
		                                    <div class="dot bl"></div>
		                                    <div class="dot br"></div>

		                                </div>
		                            </a>
		                        </div>
		                        <div class="rope right">&nbsp;</div>
		                        <div class="rope left">&nbsp;</div>
		                    </li>

		                </ul>
		            </nav>

                    <article class="profil-modify">
	
    <div class="container">	

        <div id="illustration-mod-profil">
                <div id="tree" class="web">
                     <img src='https://cf.mytroc.fr/image/sketch/arbre_optim.svg'  alt='arbre' class='svg'>
<img src='https://mytroc.fr/static/image/1px.png' data-src='https://cf.mytroc.fr/image/sketch/arbre_optim.png'  alt='arbre' class='img' >
<img src='https://mytroc.fr/static/image/1px.png' data-src='https://cf.mytroc.fr/image/sketch/arbre_optim@2x.png'  alt='arbre' class='retina' >

                </div>
                <div id="bike" class="web illu-add-troc">
                     <img src='https://cf.mytroc.fr/image/sketch/velo_bleu.svg'  alt='bike' class='svg'>
<img src='https://mytroc.fr/static/image/1px.png' data-src='https://cf.mytroc.fr/image/sketch/velo_bleu.png'  alt='bike' class='img' >
<img src='https://mytroc.fr/static/image/1px.png' data-src='https://cf.mytroc.fr/image/sketch/velo_bleu@2x.png'  alt='bike' class='retina' >

                </div>
                
        </div>					
      
           
              <form  id="add-troc" action="{{ route('item.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')     

                  
                    <div id="container-add-content">
                        <div class="cols2 left">
        <div>
                                    <H2>Détails de l'objet</h2>
                                </div>

                          



                         







<div class="upload-images-block">
    <div id="im1" class="square im-but">
        <label for="imageInput" class="upload-icon-label">
            <div class="square-content" style="display: flex; justify-content: center; align-items: center;">
                <img src="/echange/items/{{ $item->picture }}" alt="" id="imagePreview" style="max-width: 100%; max-height: 100%;">
            </div>
            <div class="upload-icon">
            <i class="fas fa-upload" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; font-size: 24px;"></i>

            </div>
        </label>
        <div id="upload-img-error-1" class="upload-img-error flash2" style="display:none"></div>
        <input type="file" name="image" id="imageInput" accept="image/*" onchange="afficherImage()" style="display: none;">
		
    </div>
	@error('image')

	<div class="w3-panel w3-pale-red w3-border" style="width: 62%;">{{ $message }}</div>

@enderror
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





<div class="troc-add-content">
    <div id="troc-title">
        <label for="name">Nom de l'objet</label>
        <input type="text" name="name" id="name" class="form-control"  value="{{ $item->name }}">
        <div class="validator"></div>
		@error('name')

		<div class="w3-panel w3-pale-red w3-border" style="width: 74%;">{{ $message }}</div>

@enderror
    </div>



 



    <div id="category-selector-1" class="category-selector">
                                        <div>
                                        <label for="category">Catégorie</label>
                                            <label class="select" style="">
                                                <select name="category" id="category" class="category level1">
                                                <option value="ELECTRONIQUE" {{ $item->category === 'ELECTRONIQUE' ? 'selected' : '' }}>Électronique</option>
                                <option value="VETEMENTS" {{ $item->categort === 'VETEMENTS' ? 'selected' : '' }}>Vêtements</option>
                                <option value="MEUBLES" {{ $item->category === 'MEUBLES' ? 'selected' : '' }}>Meubles</option>
                                <option value="LIVRES" {{ $item->category === 'LIVRES' ? 'selected' : '' }}>Livres</option>
                                <option value="AUTRES" {{ $item->category === 'AUTRES' ? 'selected' : '' }}>Autres</option>

                                                </select>
                                            </label>
											@error('category')

											<div class="w3-panel w3-pale-red w3-border" style="width: 74%;">{{ $message }}</div>

@enderror
                                        </div>
                                        <div>



                                      



   
       
   
    
    <div class="troc-add-content">
    <label for="description">Description</label>
    <textarea name="description" id="description" class="form-control" >{{ $item->description }}</textarea>
	@error('description')

		<div class="w3-panel w3-pale-red w3-border" style="width: 77%;">{{ $message }}</div>

@enderror
</div>
<div class="form-row">
        <label for="amount">Nombre de
        <div class='sprites icones'>
          
            <img src='../../static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg' class='svg nuts' alt='noisette'>
        </div>
        </label>
        <input id="amount" type="text" name="amount" maxlength="6" placeholder="noisettes" value="{{ $item->amount }}">
        @error('amount')

		<div class="w3-panel w3-pale-red w3-border" style="width: 74%;">{{ $message }}</div>

@enderror
    </div>
</div>
<div id="category-selector-1" class="category-selector">
                                        <div>
                                        <label for="category">Status</label>
                                            <label class="select" style="">
                                                <select name="status" id="status" class="category level1">
                                                <option value="DISPONIBLE" {{ $item->status === 'DISPONIBLE' ? 'selected' : '' }}>Disponible</option>
                                <option value="NONDISPONIBLE" {{ $item->status === 'NONDISPONIBLE' ? 'selected' : '' }}>NON Disponible</option>
                            </select>
                                            </label>
											@error('status')

											<div class="w3-panel w3-pale-red w3-border" style="width: 74%;">{{ $message }}</div>

@enderror
                                        </div>
                                        <div>
    <button type="submit" class="form-button">
    <div class="button valid-button">
        <div class="waves waves-prune">
            Modifier
        </div>
    
        </button>


</div>

                              
                            </div>

                        </div>

                        </form>
                        </div>
                    </div>
            
              
								         
             
                            
               
    </article>
		        </div>



		    </div>


		    
		</div>
       
		</HTML>