<div id="overlay" onclick="closeImagePopup()"></div>
<HTML lang="fr-FR">
@extends('FrontEnd.section.header')
@section('pageTitle', 'Objets')

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  
 

<div id="main">
	


  <div id="animation-banner" class="web">		
    <div id="could-banner" class="no-overflow">
     <div id="cloud1" class="cloud">	
      <img src="/image/univers/300x200/nuage1.svg" data-load="/image/sketch/nuage1.svg" alt="nuage" class="svg">


    </div>
    <div id="cloud2" class="cloud">
      <img src="/image/univers/300x200/nuage2.svg" data-load="/image/sketch/nuage2.svg" alt="nuage" class="svg">



    </div>
    <div id="cloud3" class="cloud">
      <img src="/image/univers/300x200/nuage3.svg" data-load="/image/sketch/nuage3.svg" alt="nuage" class="svg">



    </div>
    <div id="cloud4" class="cloud">
      <img src="/image/univers/300x200/nuage1.svg" data-load="/image/sketch/nuage1.svg" alt="nuage" class="svg">



    </div>
    <div id="cloud5" class="cloud">
      <img src="/image/univers/300x200/nuage2.svg" data-load="/image/sketch/nuage2.svg" alt="nuage" class="svg">



    </div>
  </div>
  <h1 class="title">Rechercher un troc</h1>
  <div id="engine-in-progress">

  </div>

</div>



  <div id="search-bar">
    <div class="search-bar-container top-sep">
     <form class="search-bar" data-dashlane-rid="d26e20a5b70074e5" data-form-type="search">

      <div class="search-fields">


      <form method="GET" action="{{ route('item.index') }}">
    <div class="buttons half">
        <input id="request" type="search" placeholder="ENTREZ UNE CATEGORIE..." name="search" value="{{ request('search') }}">
        <div class="form-button">
            <button type="submit" class="button valid-button icon-button" id="trigger-search" style="border: none; background: none; padding: 0;">
                <div class="waves waves-prune">
                    <div class="sprites icones">
                        <img src="/image/sprites/icons/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg" class="svg ic-search" alt="recherche">
                    </div>
                </div>
            </button>
        </div>
    </div>



		
    <div class="buttons quarter">
        <label for="sort" class="select" data-dashlane-label="true">
            <select id="sort" name="sort" data-dashlane-rid="f784bac106b2bca5" data-form-type="other" onchange="this.form.submit()">
            <option value="">Trier par</option>   
            <option value="1">les plus récentes</option>
                <option value="2">par nombre de noisettes</option>
                <!--option value="3"  >pertinence</option-->
            </select>
        </label>
    </div>
</form>								


</div>


 
				
</div>
<div>


	
 






<article class="search">

  <div id="reminder-login"></div>

  
   
<div id="troc-list-result-search" class="troc-list">

 <div class="main-title">Résultat de la recherche : </div>





<ul id="search-result"> 
@foreach ($items as $donneesItem)	
<div id="imagePopup" class="popup">
  <img src="{{ asset('qrcodes/' . $donneesItem['qrCode']) }}" id="popupImage">
  <span class="close" onclick="closeImagePopup()">&times;</span>
</div> 
  <li class="troc-resume ">	
   <div class="c1 square">
    <div class="square-content">
    
    <img src="/echange/items/{{ $donneesItem['picture'] }}" width="100" height="130" >	
    

<div id="negociate-offer-popup">
@if (auth()->check() &&  $donneesItem['user_id'] !== auth()->user()->id)
    <a href="{{ route('request.new', $donneesItem['id']) }}">
        <div id="negociate-offer" class="button">
            <div class="title">
                <div class='sprites icones'>
                    <img src='https://mytroc.fr/static/image/1px.png' data-src='https://mytroc.fr/static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8.png' class='img nuts' alt='noisette'>
                    <img src='https://mytroc.fr/static/image/1px.png' data-src='https://mytroc.fr/static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8@2x.png' class='retina nuts' alt='noisette'>
                    <img src='https://mytroc.fr/static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg' class='svg nuts' alt='noisette'>
                </div>
                Echanger
            </div>
            <div class="popup-button"></div>
        </div>
    </a>
@endif

</div>	

   </div>
   				
 </div>
 
 <div class="c2">
   <h2><a  class="waves waves-prune"><span>{{ $donneesItem['name'] }}</span></a></h2> 

   <div class="fields">
    <div class="right">

      <div class="right relative ">
       <div class="price right    price-nuts">
        <div class="corner top">
        </div>					
        <div class="inner"> {{$donneesItem['amount']}}<div class="sprites icones">			<img src="/image/sprites/icons/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg" class="svg nuts" alt="noisette"></div></div>			
        <div class="corner bottom">
        </div>
        <div class="tail">
         <div class="tail-body">
         </div>				
       </div>
     </div>

   </div>

 </div>

 <div class="left">
   <div> 
    <div class="catType">
    Catégorie:									</div>
    <div class="catBread">
    {{$donneesItem['category']}}									
   </div>							
 </div>

 <div class="author"> 
  <a href="https://mytroc.fr/troqueurs/annouk1" class="waves waves-prune"><span>{{$donneesItem['status']}}</span></a>
</div>
</div>

</div>				


<div class="troc-content">
  <a href="https://mytroc.fr/trocs/3-livres-de-cuisine-650ec2c66797d094223" class="waves waves-prune">
   <p>{{$donneesItem['description']}}</p>
 </a> 									
</div>
<div class="resume-footer">						
  <div class="date">
  Date d'ajout : {{$donneesItem['created_at']}}						</div>

  <div class="dist">
    @if($donneesItem['qrCode'])
        <img src="{{ asset('qrcodes/' . $donneesItem['qrCode']) }}" width="40" height="40" id="qrCodeImage" onclick="showImagePopup(this)">
    @endif
</div>





 
  

			

</div>				

</div>





</li>

@endforeach














</ul> 

<div id="suggester-head">
  A voir aussi&nbsp;:
</div>

<div id="suggester" class="suggester">
	
</div>					

@if ($items->hasPages())
    <div class="pagination bottom">
       
        @if ($items->onFirstPage())
            <span>&laquo;</span>
        @else
            <a href="{{ $items->previousPageUrl() }}" rel="prev" role="prev">&laquo;</a>
        @endif

       
        @foreach ($items as $element)
         
            @if (is_string($element))
                <span>{{ $element }}</span>
            @endif

        
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $items->currentPage())
                        <span>{{ $page }}</span>
                    @else
                        <a href="{{ $url }}" role="next">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

     
        @if ($items->hasMorePages())
            <a href="{{ $items->nextPageUrl() }}" rel="next" role="next">&raquo;</a>
        @else
            <span>&raquo;</span>
        @endif
    </div>
@endif

</div>


</div>
<style>

.popup {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 70%;
  height: 70%;
  background-color: rgba(173, 216, 230, 0.7); /* Couleur bleu ciel transparente */
  z-index: 999;
  text-align: center;
}
#overlay {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.7); /* Couleur de l'arrière-plan semi-transparent */
  z-index: 1; /* Placez cette superposition au-dessus de tout le reste de la page */
}
#popupImage {
  max-width: 100%;
  max-height: 100%;
  margin: auto;
  position: absolute;
  top: 0; left: 0; right: 0; bottom: 0;
}

.close {
  position: absolute;
  top: 10px;
  right: 10px;
  color: #fff;
  font-size: 50px;
  cursor: pointer;
}

/* Style pour l'image dans la liste */
#qrCodeImage {
  cursor: pointer;
}

/* Lorsque l'utilisateur passe sa souris sur l'image, changez le curseur en main. */
#qrCodeImage:hover {
  cursor: pointer;
}



</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Inclure jQuery -->

<script>
   function showImagePopup(image) {
  var popup = document.getElementById("imagePopup");
  var popupImage = document.getElementById("popupImage");
  popupImage.src = image.src;
  popup.style.display = "block";
  document.getElementById("overlay").style.display = "block";

}

// Fonction pour fermer le popup
function closeImagePopup() {
  var popup = document.getElementById("imagePopup");
  popup.style.display = "none";
  document.getElementById("overlay").style.display = "none";

}
</script>
