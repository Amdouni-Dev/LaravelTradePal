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

		                                    <div class="link waves">Mes objets</div>
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
		                            <!-- <a href="https://mytroc.fr/mes-trocs"> -->
									<a href="/requests/show-offer">
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
		                        <div class="pancarte even ">
		                            <!-- <a href="https://mytroc.fr/mes-trocs"> -->
									<a href="/requests/show-request">
		                                <div class="pancarte-content">

		                                    <div class="link waves">Mes Demandes</div>
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
							<div class="pancarte even ">
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
      
           
              <form  id="add-troc" action="{{ route('request.updateAll', $request->id) }}" method="POST" >
                        @csrf
                        @method('PUT')     

                  
                    <div id="container-add-content">
                        <div class="cols2 left">
        <div>
                                    <H2>Détails de la demande</h2>
                                </div>

                   <br></br>   <br></br>   <br></br>        



                         













<div class="troc-add-content">
    <div id="troc-title">
        <label for="name">Note</label>
        <input type="text" name="note" id="note" class="form-control"  value="{{ $request->note }}">
        <div class="validator"></div>
		
    </div>



  
    <div id="troc-title">
    <label for="name">Objet proposé</label>
    <label class="select" style="">
        <select id="exchangeable_id" name="exchangeable_id">
            <option value="">Sélectionnez un objet</option>
            @foreach ($items as $item)
                <option value="{{ $item->id }}" @if ($item->id == old('exchangeable_id', $request->exchangeable_id)) selected @endif>{{ $item->name }}</option>
            @endforeach
        </select>
    </label>
</div>


<div class="form-row">
    <label for="amount">Nombre de
        <div class='sprites icones'>
            <img src='../../static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg' class='svg nuts' alt='noisette'>
        </div>
    </label>
    <input id="amount" type="text" name="amount" maxlength="6" placeholder="échange par objet" 
           value="{{ $request->amount }}" @if(is_null($request->amount)) disabled @endif>
</div>

<br></br>   <br></br>   

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