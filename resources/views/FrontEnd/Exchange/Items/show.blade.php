<!DOCTYPE html>

		@extends('FrontEnd.section.header')
		@section('pageTitle', 'Profile')
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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

                    <article class="profil mine top-sep" style="max-width: 4096px;">
    <div class="container">
    <div id="quick-access">
							<ul>
								<li>
									<a href="/item/create">
										<div class="waves waves-prune" data-wave-scale="20">
										Déposer un nouveau offre de troc !								</div>
									</a>
								</li>
</ul>
</div>


   
    <div class="row">
    @foreach ($items as $donneesItem)
    <div class="col-md-4 mb-4">
        <div class="card" style=" max-height: 550px; min-height: 550px;">
        
        <img class="card-img-top" src="/echange/items/{{ $donneesItem['picture'] }}" alt="Card image cap" style="width: 100%; height: 200px;">

        <div class="card-body">
        <div class="d-flex justify-content-between">
    <h5 class="card-title">{{ $donneesItem['name'] }}</h5>

          <h5>  {{ $donneesItem['amount'] }}
            <div class="sprites icones">
                <img src="/image/sprites/icons/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg" class="svg nuts" alt="noisette">
            </div>
</h5>
      
    </div>
    <p class="card-text">{{ $donneesItem['description'] }}</p>
    <ul class="list-group list-group-flush">
    <li class="list-group-item"> 
      
        <div>
            @if ($donneesItem['status'] === 'DISPONIBLE')
                <span style="color: green; font-size: 20px;">✔</span> Disponible
            @else
                <span style="color: red; font-size: 20px;">✘</span> Non disponible
            @endif
        </div>

</div></li>
   
  </ul>
   
  <div class="card-body">
<div class="d-flex justify-content-between">
<form action="{{ route('item.destroy', $donneesItem['id']) }}" method="POST">
        @csrf
        @method('DELETE')
    <button type="submit" class="form-button">
        <div class="button valid-button">
            <div class="waves waves-prune">
                Supprimer
            </div>
        </div>
    </button>
    </form>
    <form action="{{ route('item.edit', $donneesItem['id']) }}" method="GET">
        @csrf
    <button type="submit" class="form-button">
        <div class="button valid-button">
            <div class="waves waves-prune">
                Modifier
            </div>
        </div>
    </button>
    </form>
</div>
</div>

        </div>
    </div>
    @endforeach
</div>

    </div>
</article>









		        </div>



		    </div>


		 
		</div>
        @extends('FrontEnd.section.footer')
		</HTML>