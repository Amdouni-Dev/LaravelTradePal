        
        <!DOCTYPE html>
        @extends('FrontEnd.section.header')
@section('pageTitle', 'Demandes')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

 
 
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
        <H1 class="title">Ajouter une demande </H1>

    </div>


    <div class="content">
    <form id="sendmsg" action="{{ route('request.store') }}" method="POST" enctype="multipart/form-data">
              @csrf		
    <div  style="overflow-y: scroll; display: block;">
	<div>
		<div class="popup popup-message">
			<!-- <div class="leafs">
				<img src="https://cf.mytroc.fr/image/menu/leafs.png">
			</div><h1>Envoyer un message privé</h1> -->
	<div class="popup-content">	
	<div id="inbox"></div>
	<div class="head">
		<div>Négocier le troc avec :  </div>
		<div class="author">
			<img src="/echange/items/{{ $desired->picture }}" width="90" height="90" >
			<div class="stack">
			<div class="author">{{$desired->user->name}}</div>
				<div class="troc"> Pour son troc : <span>{{$desired->name}}</span></div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
    <input type="hidden" name="desired_id" id="desired_id" value="{{ $desired->id }}">	
					
	<div id="popup-negociate-button">
		<ul id="choice-options" class="web">
			<a href="#" target="1" class="carroussel active choice-option">
				<li>
					<div class="container-title">
						<div class="title waves waves-prune">Proposer des <span class="token-plural">noisettes</span></div>
					</div>
					<div class="container-illu">
						<div class="illu-carrousel  waves waves-prune">
							<img src="https://cf.mytroc.fr/image/sketch/tas_noisettes_howto.svg" alt="tas de noisettes" class="svg">
<img src="https://mytroc.fr/static/image/1px.png" data-src="https://cf.mytroc.fr/image/sketch/tas_noisettes_howto.png" alt="tas de noisettes" class="img">
<img src="https://mytroc.fr/static/image/1px.png" data-src="https://cf.mytroc.fr/image/sketch/tas_noisettes_howto@2x.png" alt="tas de noisettes" class="retina">
	
						</div>
					</div>
				</li>
			</a>
			<a href="#" target="2" class="carroussel choice-option">
				<li>
					<div class="container-title">
						<div class="title waves waves-prune">Proposer autre chose</div>
					</div>
					<div class="container-illu">
						<div class="illu-carrousel  waves waves-prune">
							<img src="https://cf.mytroc.fr/image/sketch/chaussures.svg" alt="chaussures" class="svg">
<img src="https://mytroc.fr/static/image/1px.png" data-src="https://cf.mytroc.fr/image/sketch/chaussures.png" alt="chaussures" class="img">
<img src="https://mytroc.fr/static/image/1px.png" data-src="https://cf.mytroc.fr/image/sketch/chaussures@2x.png" alt="chaussures" class="retina">
						</div>
					</div>				
				</li>
			</a>
			<a href="#" target="3" class="carroussel choice-option">				
				<li>				
					<div class="container-title">				
						<div class="title waves waves-prune">Proposer autre chose et des <span class="token-plural">noisettes</span></div>
					</div>
					<div class="container-illu">
						<div class="illu-carrousel multiple  waves waves-prune">
								<img src="https://cf.mytroc.fr/image/sketch/chaussures.svg" alt="chaussures" class="svg">
<img src="https://mytroc.fr/static/image/1px.png" data-src="https://cf.mytroc.fr/image/sketch/chaussures.png" alt="chaussures" class="img">
<img src="https://mytroc.fr/static/image/1px.png" data-src="https://cf.mytroc.fr/image/sketch/chaussures@2x.png" alt="chaussures" class="retina">
								<span>+</span> 
								<img src="https://cf.mytroc.fr/image/sketch/tas_noisettes_howto.svg" alt="tas de noisettes" class="svg">
<img src="https://mytroc.fr/static/image/1px.png" data-src="https://cf.mytroc.fr/image/sketch/tas_noisettes_howto.png" alt="tas de noisettes" class="img">
<img src="https://mytroc.fr/static/image/1px.png" data-src="https://cf.mytroc.fr/image/sketch/tas_noisettes_howto@2x.png" alt="tas de noisettes" class="retina">
						</div>
					</div>						
				</li>
			</a>
		</ul>
	</div>
	<div id="field-offer">
		
		<label class="select smart">
		<select id="type-offer">
                    <option value="1">Proposer des noisettes</option>
                    <option value="3">Proposer autre chose et des noisettes</option>
                    <option value="2">Proposer autre chose</option>
                </select>
            </label>

            <div id="offer-nuts" style="display: block;">
    Faire une Offre de <input id="input-nuts" type="number" name="amount_nuts" class="tright"  > noisettes
</div>


			<div id="offer-object" style="display: none;">
    Proposer 
	<select id="input-object" name="input_object">
    <option value="">Sélectionnez un item</option>
    @foreach ($items as $item)
        <option value="{{ $item->id }}">{{ $item->name }}</option>
    @endforeach
</select>
</div>

            <div id="offer-object-and-nuts" style="display: none;">
			Proposer 
			<select id="exchangeable_id" name="exchangeable_id">
    <option value="">Sélectionnez un item    </option>
    @foreach ($items as $item)
        <option value="{{ $item->id }}">{{ $item->name }}</option>
    @endforeach
</select>
			
			et
                <input id="input-nuts-2" type="number"   name="amount_nuts_object" class="tright"> <span class="token-plural">noisettes</span>
            </div>										
	</div>	
   
			<div class="special-offer">
		</div>
      
	
  		
		<input id="msg-type" type="hidden" value="negociate-offer">
					
		<textarea id="note" name="note" placeholder="Votre remarque ici... "></textarea>
   			
      
        @foreach ($errors->all() as $error)
        <div class="w3-panel w3-pale-red w3-border" style="width: 100%;">{{ $error }}</div>
                @endforeach
              
		
		<div class="send-btn-bar">
    <button type="submit" id="button-send-button" class="button">
        Envoyer
    </button>
</div>

		
	
      


						
						</div>
                        </form>		
					</div> 
               
					<script>
  
    var choiceOptions = document.querySelectorAll(".choice-option");

   
    document.getElementById("type-offer").addEventListener("change", function () {
        var selectedValue = this.value;

       
        document.getElementById("offer-nuts").style.display = "none";
        document.getElementById("offer-object").style.display = "none";
        document.getElementById("offer-object-and-nuts").style.display = "none";

     
        if (selectedValue === "1") {
            document.getElementById("offer-nuts").style.display = "block";
        } else if (selectedValue === "2") {
            document.getElementById("offer-object").style.display = "block";
        } else if (selectedValue === "3") {
            document.getElementById("offer-object-and-nuts").style.display = "block";
        }

 
 choiceOptions.forEach(function (option) {
            if (option.getAttribute("target") === selectedValue) {
                option.classList.add("active");
            } else {
                option.classList.remove("active");
            }
        });


    });

    // Gérer les clics sur les liens <a> pour mettre à jour la sélection du menu déroulant
    choiceOptions.forEach(function (option) {
        option.addEventListener("click", function (e) {
            e.preventDefault(); // Empêcher la navigation par défaut

            // Récupérer la valeur cible à partir de l'attribut "target"
            var targetValue = option.getAttribute("target");

            // Mettre à jour la sélection du menu déroulant
            document.getElementById("type-offer").value = targetValue;

            // Déclencher un événement de changement pour mettre à jour les divs
            var changeEvent = new Event("change");
            document.getElementById("type-offer").dispatchEvent(changeEvent);
        });
    });
</script>
                </HTML>