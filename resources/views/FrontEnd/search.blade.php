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
    <div id="filtering-partner">
      <input type="checkbox" id="filter-partner" name="filter-partner" value="">
      <label for="filter-partner">				
       <img src="/image/univers/300x200/partenaire2.svg" class="svg">


     </label>

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
<div id="more-fields-unfold">+ Plus d'options</div>
<div id="more-fields" class="more-fields">
 <div class="clear">×</div>
 <div>
  <div>
   <label for="search-type-troc" class="select" data-dashlane-label="true">	
     <select id="select-type-troc" name="typeTroc" data-dashlane-rid="288097ceca913e04" data-form-type="other">	

      <option value="3" selected=""> 
      Offres et Recherches				</option>

      <option value="1">
      Ils offrent				</option>
      <option value="2">
       Ils recherchent 
     </option>								
   </select>
 </label>
 
</div>
<div>			
 <label for="search-category-type" class="select" data-dashlane-label="true">	
  <select id="select-categorytype" name="categorytype" data-dashlane-rid="f3c5093d42f80c22" data-form-type="other">	

   <option value="5" selected=""> 
   Biens/Services/Prêts/Dons					</option>

   <option value="1"> 
   Biens					</option>	
   <option value="2"> 
   Services				</option>	
   <option value="3"> 
   Prêts				</option>																				
   <option value="4"> 
   Dons				</option>																				
 </select>
</label>	
</div>					
</div>
<div>


	
  <div id="category-selector-1" class="category-selector">							
   <div>
    <label class="select" style="" data-dashlane-label="true">
     <select id="CategoryLvl1" name="cat1-1" class="category level1" data-dashlane-rid="d0da3d428941869d" data-form-type="other">			

      <option value="toute">Toutes les catégories</option> 
      <option disabled="">------------------</option>

      <option value="alimentation">Alimentation</option>

      <option value="animaux">Animaux</option>

      <option value="art-et-spectacles">Arts et spectacles</option>

      <option value="collections">Collectionneurs</option>

      <option value="service-et-coup-de-main">Coup de main</option>

      <option value="bricolage">Bricolage</option>

      <option value="beaute-et-bien-etre">Beauté / Bien être</option>

      <option value="enfance">Enfance</option>

      <option value="informatique-mutlimedia">Informatique / Multimédia</option>

      <option value="jardins-et-plantes">Jardin et Plantes</option>

      <option value="maison">Maison</option>

      <option value="vacances">Vacances / Week-end</option>

      <option value="livre-cd-dvd">Livre / CD / DVD</option>

      <option value="vetements-et-accessoires">Vêtements et accessoires</option>

      <option value="sport-et-loisir">Sports et Loisirs</option>

      <option value="transport-et-vehicule">Transport / Véhicules</option>

      <option value="vide-grenier">Tout à une noisette&nbsp;!</option>

      <option value="autre">Autre</option>

    </select>
  </label>		

</div>	
<div>
  <label class="select disabled" style="display:none">
   <select id="CategoryLvl2" name="cat2-1" class="category level2">			

   </select>
 </label>		
</div>
<div>
  <label class="select disabled" style="display:none">
   <select id="CategoryLvl3" name="cat3-1" class="category level3">			

   </select>
 </label>		
</div>
</div>				
</div>
<input id="community-cid" type="hidden" value="-1">

<div class="geo-filters">	
  <div>							

    <label for="region" class="select" data-dashlane-label="true">
      <select id="region" name="region" data-dashlane-rid="fcc8668deef09025" data-form-type="address,country" data-kwimpalastatus="dead">
       
	  <option value="0">Toute la Tunisie</option>
    <option disabled="">------------------</option>
      <optgroup label="Province 1">
        <option value="Bizerte">Bizerte</option>
        <option value="Béja">Béja</option>
        <option value="Jendouba">Jendouba</option>
        <option value="Kef">Kef</option>
      </optgroup>
      <optgroup label="Province 2">
        <option value="Ariana">Ariana</option>
        <option value="Ben Arous">Ben Arous</option>
        <option value="Manouba">Manouba</option>
        <option value="Zaghouan">Zaghouan</option>
        <option value="Nabeul">Nabeul </option>
      </optgroup>
      <optgroup label="Province 3">
        <option value="Siliana">Siliana</option>
        <option value="Sousse">Sousse</option>
        <option value="Monastir">Monastir</option>
        <option value="Mahdia">Mahdia</option>
        <option value="Kasserine">Kasserine</option>
        <option value="Kairouan">Kairouan</option>
      </optgroup>
      <optgroup label="Province 4">
        <option value="Tozeur">Tozeur</option>
        <option value="Gafsa">Gafsa </option>
        <option value="Sidi Bouzid">Sidi Bouzid</option>
        <option value="Sfax">Sfax</option>
      </optgroup>
      <optgroup label="Province 5">
        <option value="Tataouine">Tataouine</option>
        <option value="Gabès">Gabès</option>
        <option value="Kébili">Kébili</option>
        <option value="Médenine">Médenine</option>
      </optgroup>
     </select>
   </label>
 </div>
 <div>

   <label for="departement" class="select" data-dashlane-label="true">
    <select id="departement" name="departement" data-dashlane-rid="7b6a2206a7afbda7" data-form-type="date,day" data-kwimpalastatus="dead">
     <option value="0"> Tous les departements</option>
     <option disabled="">------------------</option>				
     <option value="1"> 01 - Ain</option>
     <option value="2"> 02 - Aisne</option>
     <option value="3"> 03 - Allier</option>
     <option value="4"> 04 - Alpes de hautes provence</option>
     <option value="5"> 05 - Hautes Alpes</option>
     <option value="6"> 06 - Alpes Maritimes</option>
     <option value="7"> 07 - Ardèche</option>
     <option value="8"> 08 - Ardennes</option>
     <option value="9"> 09 - Ariège</option>
     <option value="10"> 10 - Aube</option>
     <option value="11"> 11 - Aude</option>
     <option value="12"> 12 - Aveyron</option>
     <option value="13"> 13 - Bouches-du-Rhône</option>
     <option value="14"> 14 - Calvados</option>
     <option value="15"> 15 - Cantal</option>
     <option value="16"> 16 - Charente</option>
     <option value="17"> 17 - Charente Maritime</option>
     <option value="18"> 18 - Cher</option>
     <option value="19"> 19 - Corrèze</option>
     <option value="201"> 2A - Corse du Sud</option>
     <option value="202"> 2B - Haute Corse</option>
     <option value="21"> 21 - Côte d'Or</option>
     <option value="22"> 22 - Côtes d'Armor</option>
     <option value="23"> 23 - Creuse</option>
     <option value="24"> 24 - Dordogne</option>
     <option value="25"> 25 - Doubs</option>
     <option value="26"> 26 - Drôme</option>
     <option value="27"> 27 - Eure</option>
     <option value="28"> 28 - Eure et Loir</option>
     <option value="29"> 29 - Finistère</option>
     <option value="30"> 30 - Gard</option>
     <option value="31"> 31 - Haute-Garonne</option>
     <option value="32"> 32 - Gers</option>
     <option value="33"> 33 - Gironde</option>
     <option value="34"> 34 - Hérault</option>
     <option value="35"> 35 - Ille et Vilaine</option>
     <option value="36"> 36 - Indre</option>
     <option value="37"> 37 - Indre et Loire</option>
     <option value="38"> 38 - Isère</option>
     <option value="39"> 39 - Jura</option>
     <option value="40"> 40 - Landes</option>
     <option value="41"> 41 - Loir et Cher</option>
     <option value="42"> 42 - Loire</option>
     <option value="43"> 43 - Haute Loire</option>
     <option value="44"> 44 - Loire Atlantique</option>
     <option value="45"> 45 - Loiret</option>
     <option value="46"> 46 - Lot</option>
     <option value="47"> 47 - Lot et Garonne</option>
     <option value="48"> 48 - Lozère</option>
     <option value="49"> 49 - Maine et Loire</option>
     <option value="50"> 50 - Manche</option>
     <option value="51"> 51 - Marne</option>
     <option value="52"> 52 - Haute Marne</option>
     <option value="53"> 53 - Mayenne</option>
     <option value="54"> 54 - Meurthe et Moselle</option>
     <option value="55"> 55 - Meuse</option>
     <option value="56"> 56 - Morbihan</option>
     <option value="57"> 57 - Moselle</option>
     <option value="58"> 58 - Nièvre</option>
     <option value="59"> 59 - Nord</option>
     <option value="60"> 60 - Oise</option>
     <option value="61"> 61 - Orne</option>
     <option value="62"> 62 - Pas de Calais</option>
     <option value="63"> 63 - Puy de Dôme</option>
     <option value="64"> 64 - Pyrénées Atlantiques</option>
     <option value="65"> 65 - Hautes Pyrénées</option>
     <option value="66"> 66 - Pyrénées-Orientales</option>
     <option value="67"> 67 - Bas-Rhin</option>
     <option value="68"> 68 - Haut-Rhin</option>
     <option value="69"> 69 - Rhône</option>
     <option value="70"> 70 - Haute-Saône</option>
     <option value="71"> 71 - Saône-et-Loire</option>
     <option value="72"> 72 - Sarthe</option>
     <option value="73"> 73 - Savoie</option>
     <option value="74"> 74 - Haute-Savoie</option>
     <option value="75"> 75 - Paris</option>
     <option value="76"> 76 - Seine-Maritime</option>
     <option value="77"> 77 - Seine-et-Marne</option>
     <option value="78"> 78 - Yvelines</option>
     <option value="79"> 79 - Deux-Sèvres</option>
     <option value="80"> 80 - Somme</option>
     <option value="81"> 81 - Tarn</option>
     <option value="82"> 82 - Tarn-et-Garonne</option>
     <option value="83"> 83 - Var</option>
     <option value="84"> 84 - Vaucluse</option>
     <option value="85"> 85 - Vendée</option>
     <option value="86"> 86 - Vienne</option>
     <option value="87"> 87 - Haute-Vienne</option>
     <option value="88"> 88 - Vosges</option>
     <option value="89"> 89 - Yonne</option>
     <option value="90"> 90 - Territoire de Belfort</option>
     <option value="91"> 91 - Essonne</option>
     <option value="92"> 92 - Hauts-de-Seine</option>
     <option value="93"> 93 - Seine-Saint-Denis</option>
     <option value="94"> 94 - Val-de-Marne</option>
     <option value="95"> 95 - Val-d'Oise</option>
     <option value="971"> 971 - Guadeloupe</option>
     <option value="972"> 972 - Martinique</option>
     <option value="973"> 973 - Guyane</option>
     <option value="974"> 974 - Réunion</option>
     <option value="975"> 975 - Saint-Pierre-et-Miquelon</option>
     <option value="976"> 976 - Mayotte</option>

   </select>
 </label>

</div>
</div>

</div>					
					<!--div>				
												
				
						
					</div-->													
				</div>
				<div id="flash" class="flash" style="display:none"></div>			

        <div id="geo-shortcut">
          <input type="hidden" id="my-current-reg" value="0">
          <input type="hidden" id="my-current-dep" value="0">
          <input type="hidden" id="my-current-postal" value="0">				
          <input type="hidden" id="my-current-id" value="0">			
        </div>			

      </form>
    </div>			
  </div>
  <div id="universe-bar" class="web ">
   <div id="table-universe">
    <div class="previous">	
     <div class="sprites s-arrows">			<img src="/image/univers/300x200/17b030fbd59a8d2faabfeef314a30b40.svg" class="svg sarrow-left-white" alt="arrow left white"></div>				</div>
     <ul>			

      <li>

        <div class="two-third waves">
          <a href="https://mytroc.fr/les-trocs/troc-alimentation">
            <div class="two-third-content">							
             <img src="/image/univers/300x200/360ea47699ca2b980c2e5c51bd297215.jpg" alt="troc alimentation">
             <h3 class="first">Alimentation</h3>
             <div class="caption">
              <h3>Alimentation</h3>
              <div><p>Produits bio et du jardin  </p></div>
            </div>
          </div>
        </a>
      </div>

    </li>

    <li>

      <div class="two-third waves">
        <a href="https://mytroc.fr/les-trocs/troc-animaux">
          <div class="two-third-content">							
           <img src="/image/univers/300x200/1659e1009e584f8430bc4c2671851347.jpg" alt="troc animaux">
           <h3 class="first">Animaux</h3>
           <div class="caption">
            <h3>Animaux</h3>
            <div><p>Adoption, Accessoires, Garde, Promenade, Soin... </p></div>
          </div>
        </div>
      </a>
    </div>

  </li>

  <li>

    <div class="two-third waves">
      <a href="https://mytroc.fr/les-trocs/troc-art-et-spectacles">
        <div class="two-third-content">							
         <img src="/image/univers/300x200/aa5c5606449104032c2d825664f24ea5.jpg" alt="troc arts et spectacles">
         <h3 class="first">Arts et spectacles</h3>
         <div class="caption">
          <h3>Arts et spectacles</h3>
          <div><p>Billet, Cours/Coaching, Instruments, Matériel, Oeuvre d'art, Photographie... </p></div>
        </div>
      </div>
    </a>
  </div>

</li>

<li>

  <div class="two-third waves">
    <a href="https://mytroc.fr/les-trocs/troc-collections">
      <div class="two-third-content">							
       <img src="/image/univers/300x200/95b6cc169441f2d718860377ab651bbc.jpg" alt="troc collectionneurs">
       <h3 class="first">Collectionneurs</h3>
       <div class="caption">
        <h3>Collectionneurs</h3>
        <div><p>objets rares et de collection  </p></div>
      </div>
    </div>
  </a>
</div>

</li>

<li>

  <div class="two-third waves">
    <a href="https://mytroc.fr/les-trocs/troc-service-et-coup-de-main">
      <div class="two-third-content">							
       <img src="/image/univers/300x200/25a6cfdcae376caec8805dc4c749f121.jpg" alt="troc coup de main">
       <h3 class="first">Coup de main</h3>
       <div class="caption">
        <h3>Coup de main</h3>
        <div><p>Aide administrative , Aide ménagére, Compagnie, Cours scolaires, Courses, Couture, Cuisine, Gardiennage... </p></div>
      </div>
    </div>
  </a>
</div>

</li>

<li>

  <div class="two-third waves">
    <a href="https://mytroc.fr/les-trocs/troc-bricolage">
      <div class="two-third-content">							
       <img src="/image/univers/300x200/c56ff3c0aa8753b32951ab9d2141511e.jpg" alt="troc bricolage">
       <h3 class="first">Bricolage</h3>
       <div class="caption">
        <h3>Bricolage</h3>
        <div><p>Électricité, Maçonnerie, Matériel et outillage, Mécanique, Plomberie, Réparations diverses... </p></div>
      </div>
    </div>
  </a>
</div>

</li>

<li>

  <div class="two-third waves">
    <a href="https://mytroc.fr/les-trocs/troc-beaute-et-bien-etre">
      <div class="two-third-content">							
       <img src="/image/univers/300x200/f231738306f9a3f840cd0186a2f58c0e.jpg" alt="troc beauté / bien être">
       <h3 class="first">Beauté / Bien être</h3>
       <div class="caption">
        <h3>Beauté / Bien être</h3>
        <div><p>Coiffure, Coaching, Massage, Relaxation/Sophrologie, Soin... </p></div>
      </div>
    </div>
  </a>
</div>

</li>

<li>

  <div class="two-third waves">
    <a href="https://mytroc.fr/les-trocs/troc-enfance">
      <div class="two-third-content">							
       <img src="/image/univers/300x200/eecebdfe51311941615662a9ad658537.jpg" alt="troc enfance">
       <h3 class="first">Enfance</h3>
       <div class="caption">
        <h3>Enfance</h3>
        <div><p>Vêtements, Jeux / Jouets, Baby-sitting, Bébé... </p></div>
      </div>
    </div>
  </a>
</div>

</li>

<li>

  <div class="two-third waves">
    <a href="https://mytroc.fr/les-trocs/troc-informatique-mutlimedia">
      <div class="two-third-content">							
       <img src="/image/univers/300x200/a07c30d73217c57e75cb9e7f6906985a.jpg" alt="troc informatique / multimédia">
       <h3 class="first">Informatique / Multimédia</h3>
       <div class="caption">
        <h3>Informatique / Multimédia</h3>
        <div><p>Jeux Vidéo, Aide / assistance Informatique, Création Site / Appli, Graphisme, Matériel, Multimédia... </p></div>
      </div>
    </div>
  </a>
</div>

</li>

<li>

  <div class="two-third waves">
    <a href="https://mytroc.fr/les-trocs/troc-jardins-et-plantes">
      <div class="two-third-content">							
       <img src="/image/univers/300x200/2666cdd4b902ec31703ce1005c6a424e.jpg" alt="troc jardin et plantes">
       <h3 class="first">Jardin et Plantes</h3>
       <div class="caption">
        <h3>Jardin et Plantes</h3>
        <div><p>Cours/Conseils, Graines, Plantes, Jardinage, Jardin à partager... </p></div>
      </div>
    </div>
  </a>
</div>

</li>

<li>

  <div class="two-third waves">
    <a href="https://mytroc.fr/les-trocs/troc-maison">
      <div class="two-third-content">							
       <img src="/image/univers/300x200/1bdf41520b083d7947159affab021b6f.jpg" alt="troc maison">
       <h3 class="first">Maison</h3>
       <div class="caption">
        <h3>Maison</h3>
        <div><p>Electroménager, Décoration, Mobilier, Objets du quotidien, Vaisselle... </p></div>
      </div>
    </div>
  </a>
</div>

</li>

<li>

  <div class="two-third waves">
    <a href="https://mytroc.fr/les-trocs/troc-vacances">
      <div class="two-third-content">							
       <img src="/image/univers/300x200/039b5a49971a1162d6bdef4379ae78c9.jpg" alt="troc vacances / week-end">
       <h3 class="first">Vacances / Week-end</h3>
       <div class="caption">
        <h3>Vacances / Week-end</h3>
        <div><p>Appartement, Maison, Jardin, Faire visiter sa ville, Locaux... </p></div>
      </div>
    </div>
  </a>
</div>

</li>

<li>

  <div class="two-third waves">
    <a href="https://mytroc.fr/les-trocs/troc-livre-cd-dvd">
      <div class="two-third-content">							
       <img src="/image/univers/300x200/fccfc5dfc8bba7e69b93b5d8dbe40cd3.jpg" alt="troc livre / cd / dvd">
       <h3 class="first">Livre / CD / DVD</h3>
       <div class="caption">
        <h3>Livre / CD / DVD</h3>
        <div><p>Livre, CD, dvd... </p></div>
      </div>
    </div>
  </a>
</div>

</li>

<li>

  <div class="two-third waves">
    <a href="https://mytroc.fr/les-trocs/troc-vetements-et-accessoires">
      <div class="two-third-content">							
       <img src="/image/univers/300x200/de8189cfec8dabd74c0788e93e18513d.jpg" alt="troc vêtements et accessoires">
       <h3 class="first">Vêtements et accessoires</h3>
       <div class="caption">
        <h3>Vêtements et accessoires</h3>
        <div><p>Accessoires, Bijoux, Vêtements Femme, Vêtements Homme, Chaussures... </p></div>
      </div>
    </div>
  </a>
</div>

</li>

<li>

  <div class="two-third waves">
    <a href="https://mytroc.fr/les-trocs/troc-sport-et-loisir">
      <div class="two-third-content">							
       <img src="/image/univers/300x200/dcf5da4b7e501390f5fb0b08bddc7393.jpg" alt="troc sports et loisirs">
       <h3 class="first">Sports et Loisirs</h3>
       <div class="caption">
        <h3>Sports et Loisirs</h3>
        <div><p>Équipement, Matériel, Loisirs... </p></div>
      </div>
    </div>
  </a>
</div>

</li>

<li>

  <div class="two-third waves">
    <a href="https://mytroc.fr/les-trocs/troc-transport-et-vehicule">
      <div class="two-third-content">							
       <img src="/image/univers/300x200/ea78dc17adc769bad4c6ff5eb3ddfbe2.jpg" alt="troc transport / véhicules">
       <h3 class="first">Transport / Véhicules</h3>
       <div class="caption">
        <h3>Transport / Véhicules</h3>
        <div><p>Billet de train/bus/..., Covoiturage, Déménagement, Livraison, Vélo, Moto / Scooter, Voiture... </p></div>
      </div>
    </div>
  </a>
</div>

</li>

<li>

  <div class="two-third waves">
    <a href="https://mytroc.fr/les-trocs/troc-vide-grenier">
      <div class="two-third-content">							
       <img src="/image/univers/300x200/fd0395fa5d7e2c4359152f1d0c2b1b6f.jpg" alt="troc tout à une noisette !">
       <h3 class="first">Tout à une noisette&nbsp;!</h3>
       <div class="caption">
        <h3>Tout à une noisette&nbsp;!</h3>
        <div><p>vide grenier  </p></div>
      </div>
    </div>
  </a>
</div>

</li>

<li>

  <div class="two-third waves">
    <a href="https://mytroc.fr/les-trocs/troc-autre">
      <div class="two-third-content">							
       <img src="/image/univers/300x200/3d3728ed53d1bc0fd5c8c1185af52331.jpg" alt="troc autre">
       <h3 class="first">Autre</h3>
       <div class="caption">
        <h3>Autre</h3>
        <div><p>Insolite et autre services et objets  </p></div>
      </div>
    </div>
  </a>
</div>

</li>

<li>

</li>

<li>

</li>

</ul>	
<div class="next">
 <div class="sprites s-arrows">			<img src="/image/univers/300x200/17b030fbd59a8d2faabfeef314a30b40.svg" class="svg sarrow-right-white" alt="arrow right white"></div>				</div>
</div>
</div>
<article class="search">

  <div id="reminder-login"></div>

  <div class="tabs-display">
   <div class="tab waves waves-prune">
    <a id="showList" href="https://mytroc.fr/les-trocs#troc-list-result-search">
     Voir les annonces				
   </a>
 </div>
 <div class="tab waves waves-prune">
  <a id="showMap" href="https://mytroc.fr/les-trocs#map-container">
    Voir la carte
  </a>					
</div>
</div>
<div id="troc-list-result-search" class="troc-list">

 <div class="main-title">Résultat de la recherche : </div>



 <div class="pagination ">
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

<ul id="search-result"> 	 
  <li class="troc-resume ">	
   <div class="c1 square">
    <div class="square-content">
     <a href="https://mytroc.fr/trocs/3-livres-de-cuisine-650ec2c66797d094223" class="waves waves-prune"><img src="/image/univers/300x200/5537409e141e5c2ce2832dd02f277e0f.jpg">	</a>
   </div>					
 </div>
 <div class="c2">
   <h2><a href="https://mytroc.fr/trocs/3-livres-de-cuisine-650ec2c66797d094223" class="waves waves-prune"><span>3 grands livres de cuisine</span></a></h2> 

   <div class="fields">
    <div class="right">

      <div class="right relative ">
       <div class="price right    price-nuts">
        <div class="corner top">
        </div>					
        <div class="inner">123<div class="sprites icones">			<img src="/image/sprites/icons/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg" class="svg nuts" alt="noisette"></div></div>			
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
    Biens									</div>
    <div class="catBread">
     Livre / CD / DVD &gt;&nbsp;Livre									
   </div>							
 </div>

 <div class="author"> 
  <a href="https://mytroc.fr/troqueurs/annouk1" class="waves waves-prune"><span>Trokanik</span></a>
</div>
</div>

</div>				


<div class="troc-content">
  <a href="https://mytroc.fr/trocs/3-livres-de-cuisine-650ec2c66797d094223" class="waves waves-prune">
   <p>Les 3 premiers tomes de la collection. Faire offre mais envoi à vos frais ou remise en main propre à Dinan ou Paris</p>
 </a> 									
</div>
<div class="resume-footer">						
  <div class="date">
  Mis en ligne le 23/09/2023						</div>

  <div class="dist">
  Dinan							 5390 km													</div>				

</div>				

</div>

<div class="c1 favorite-button notFavorite" data-tid="342236">			
 <div class="icone-fav notFavorite"><div class="sprites icones">			<img src="/image/sprites/icons/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg" class="svg icone-fav-white" alt="ajouter aux favoris"></div> J'aime <span></span>	</div>
 <div class="icone-fav  isFavorite"><div class="sprites icones">			<img src="/image/sprites/icons/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg" class="svg icone-fav-yellow" alt="dans les favoris"></div>	J'aime  <span></span> </div>								
</div>


</li>



<li class="troc-resume ">	
 <div class="c1 square">
  <div class="square-content">
   <a href="https://mytroc.fr/trocs/50-vignettes-pyrex-super-u-650ec08b1d8d3091123" class="waves waves-prune"><img src="/image/univers/300x200/83ed2dbdc4c722298de797e8a6f7f420.jpg">	</a>
 </div>					
</div>
<div class="c2">
 <h2><a href="https://mytroc.fr/trocs/50-vignettes-pyrex-super-u-650ec08b1d8d3091123" class="waves waves-prune"><span>50 vignettes Pyrex Super U</span></a></h2> 

 <div class="fields">
  <div class="right">

    <div class="right relative ">
     <div class="price right    price-nuts">
      <div class="corner top">
      </div>					
      <div class="inner">123<div class="sprites icones">			<img src="/image/sprites/icons/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg" class="svg nuts" alt="noisette"></div></div>			
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
  Biens									</div>
  <div class="catBread">
   Maison &gt;&nbsp;Vaisselle									
 </div>							
</div>

<div class="author"> 
  <a href="https://mytroc.fr/troqueurs/annouk1" class="waves waves-prune"><span>Trokanik</span></a>
</div>
</div>

</div>				


<div class="troc-content">
  <a href="https://mytroc.fr/trocs/50-vignettes-pyrex-super-u-650ec08b1d8d3091123" class="waves waves-prune">
   <p>Faire offre</p>
 </a> 									
</div>
<div class="resume-footer">						
  <div class="date">
  Mis en ligne le 23/09/2023						</div>

  <div class="dist">
  Dinan							 5390 km													</div>				

</div>				

</div>

<div class="c1 favorite-button notFavorite" data-tid="342235">			
 <div class="icone-fav notFavorite"><div class="sprites icones">			<img src="/image/sprites/icons/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg" class="svg icone-fav-white" alt="ajouter aux favoris"></div> J'aime <span></span>	</div>
 <div class="icone-fav  isFavorite"><div class="sprites icones">			<img src="/image/sprites/icons/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg" class="svg icone-fav-yellow" alt="dans les favoris"></div>	J'aime  <span></span> </div>								
</div>


</li>



<li class="troc-resume ">	
 <div class="c1 square">
  <div class="square-content">
   <a href="https://mytroc.fr/trocs/jeu-labyrinthe-complet-bon-etat-650eb8ab74094093523" class="waves waves-prune"><img src="/image/univers/300x200/a15506df8ac9424f6fb8fbbb33746cad.jpg">	</a>
 </div>					
</div>
<div class="c2">
 <h2><a href="https://mytroc.fr/trocs/jeu-labyrinthe-complet-bon-etat-650eb8ab74094093523" class="waves waves-prune"><span>Jeu labyrinthe complet bon etat</span></a></h2> 

 <div class="fields">
  <div class="right">

    <div class="right relative ">
     <div class="price right    price-nuts">
      <div class="corner top">
      </div>					
      <div class="inner">20<div class="sprites icones">			<img src="/image/sprites/icons/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg" class="svg nuts" alt="noisette"></div></div>			
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
  Biens									</div>
  <div class="catBread">
   Enfance &gt;&nbsp;Jeux / Jouets									
 </div>							
</div>

<div class="author"> 
  <a href="https://mytroc.fr/troqueurs/sophie-delhaye" class="waves waves-prune"><span>sophie decamps</span></a>
</div>
</div>

</div>				


<div class="troc-content">
  <a href="https://mytroc.fr/trocs/jeu-labyrinthe-complet-bon-etat-650eb8ab74094093523" class="waves waves-prune">
   <p>Jeu labyrinthe complet
   Envoi mondial relay</p>
 </a> 									
</div>
<div class="resume-footer">						
  <div class="date">
  Mis en ligne le 23/09/2023						</div>

  <div class="dist">
  Colleret							 5600 km													</div>				

</div>				

</div>

<div class="c1 favorite-button notFavorite" data-tid="342234">			
 <div class="icone-fav notFavorite"><div class="sprites icones">			<img src="/image/sprites/icons/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg" class="svg icone-fav-white" alt="ajouter aux favoris"></div> J'aime <span></span>	</div>
 <div class="icone-fav  isFavorite"><div class="sprites icones">			<img src="/image/sprites/icons/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg" class="svg icone-fav-yellow" alt="dans les favoris"></div>	J'aime  <span></span> </div>								
</div>


</li>








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
