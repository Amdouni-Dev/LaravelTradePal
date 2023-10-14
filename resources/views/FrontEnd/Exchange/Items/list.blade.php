<HTML lang="fr-FR">
@extends('FrontEnd.section.header')
@section('pageTitle', 'Comment ça marche')
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


       <div class="buttons half">							
         <input id="request" type="search" placeholder="ENTREZ VOTRE RECHERCHE..." name="search" value="" data-dashlane-rid="9c8522c96583e812" data-form-type="query">			
         <div class="form-button ">
          <div class="button valid-button" id="trigger-search">
           <div class="waves waves-prune">						  
            <div class="sprites icones">			<img src="/image/sprites/icons/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg" class="svg ic-search" alt="recherche"></div>				  				 	<span>valider</span>
          </div> 
        </div>
      </div> 								
    </div>
   			
   <div class="buttons quarter">		
    trier par						<label id="sort-select" for="sort" class="select" data-dashlane-label="true">
     <select id="sort" name="sort" data-dashlane-rid="f784bac106b2bca5" data-form-type="other">																
      <option value="1">les plus récentes</option>
      <option value="2">par distance</option>
      <!--option value="3"  >pertinence</option-->
    </select>
  </label>				

</div>									


</div>


 
				
</div>
<div>


	
 







<article class="search">

  <div id="reminder-login"></div>

  
   
<div id="troc-list-result-search" class="troc-list">

 <div class="main-title">Résultat de la recherche : </div>





<ul id="search-result"> 
@foreach ($items as $donneesItem)	 
  <li class="troc-resume ">	
   <div class="c1 square">
    <div class="square-content">
     <a href="https://mytroc.fr/trocs/3-livres-de-cuisine-650ec2c66797d094223" class="waves waves-prune"><img src="/echange/items/{{ $donneesItem['picture'] }}">	</a>
   </div>
   				
 </div>
 
 <div class="c2">
   <h2><a href="https://mytroc.fr/trocs/3-livres-de-cuisine-650ec2c66797d094223" class="waves waves-prune"><span>{{ $donneesItem['name'] }}</span></a></h2> 

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


<div class="pagination bottom">
  <span>1</span>

  <a href="https://mytroc.fr/les-trocs/?n=1" role="next">2</a>					

  <a href="https://mytroc.fr/les-trocs/?n=2" role="next">3</a>					

  <a href="https://mytroc.fr/les-trocs/?n=3" role="next">4</a>					

  <a href="https://mytroc.fr/les-trocs/?n=4" role="next">5</a>					

  <a href="https://mytroc.fr/les-trocs/?n=5" role="next">6</a>					

  <a href="https://mytroc.fr/les-trocs/?n=6" role="next">7</a>					

  <a href="https://mytroc.fr/les-trocs/?n=7" role="next">8</a>					

  <a href="https://mytroc.fr/les-trocs/?n=8" role="next">9</a>					

  <a href="https://mytroc.fr/les-trocs/?n=9" role="next">10</a>					
</div>
</div>
</div>