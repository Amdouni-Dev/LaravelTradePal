
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>

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
        <h1 class="title">Détails Réclamation</h1>
        <div id="engine-in-progress">

        </div>

    </div>




    <div class="content">

        <article class="troc-details top-sep">
            <div id="reminder-login"></div>

            <div id="troc-detail-content">
                <div class="troc-content-container">

                    <div class='left-bar'>
                        <div class="preview-details square">
                            <div class="square-content">

                                <img src="/claims/{{$claim->claimImage}}" >

                            </div>
                        </div>

                    </div>

                    <div id= "lightBox" class='lightBox'>
                        <div class='previous nav-buttons'><div class='sprites s-arrows' >	<img src='https://mytroc.fr/static/image/1px.png' data-src='https://cf.mytroc.fr/image/sprites/arrows/gen/17b030fbd59a8d2faabfeef314a30b40.png' class='img sarrow-left-white' alt='arrow left white'>	<img src='https://mytroc.fr/static/image/1px.png' data-src='https://cf.mytroc.fr/image/sprites/arrows/gen/17b030fbd59a8d2faabfeef314a30b40@2x.png' class='retina sarrow-left-white' alt='arrow left white'>	<img src='https://cf.mytroc.fr/image/sprites/arrows/gen/17b030fbd59a8d2faabfeef314a30b40.svg'    class='svg sarrow-left-white' alt='arrow left white'></div></div>


                        <div class='next nav-buttons'><div class='sprites s-arrows' >	<img src='https://mytroc.fr/static/image/1px.png' data-src='https://cf.mytroc.fr/image/sprites/arrows/gen/17b030fbd59a8d2faabfeef314a30b40.png' class='img sarrow-right-white' alt='arrow right white'>	<img src='https://mytroc.fr/static/image/1px.png' data-src='https://cf.mytroc.fr/image/sprites/arrows/gen/17b030fbd59a8d2faabfeef314a30b40@2x.png' class='retina sarrow-right-white' alt='arrow right white'>	<img src='https://cf.mytroc.fr/image/sprites/arrows/gen/17b030fbd59a8d2faabfeef314a30b40.svg'    class='svg sarrow-right-white' alt='arrow right white'></div></div>
                    </div>


                    <div class="more">

                        <h1>{{$claim->subject}}</h1>

                        <ul class="fields">
                            <li>
                                <div class="field-desc"><b>Date Réclamation</b></div><div class="field-value">
                                   {{$claim->claim_date}}
                                </div>
                                <div class="clear"></div>
                            </li>

                            <li>
                                <div class="field-desc"><b>Description</b></div><div class="field-value">
                                    {{$claim->description}}
                                </div>
                                <div class="clear"></div>
                            </li>

                        </ul>
                        <div class="price left    price-nuts"  >
                            <div class="corner top">
                            </div>
                            <div class="inner">{{$claim->status}}<div class='sprites icones' >
                                    <img src='https://mytro.fr/static/image/1px.png' data-src='https://mytroc.fr/static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8.png' class='img nuts' alt='noisette'>	<img src='https://mytroc.fr/static/image/1px.png' data-src='https://mytroc.fr/static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8@2x.png' class='retina nuts' alt='noisette'>	<img src='https://mytroc.fr/static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg'    class='svg nuts' alt='noisette'></div></div>
                            <div class="corner bottom">
                            </div>
                            <div class="tail">
                                <div class="tail-body">
                                </div>
                            </div>
                        </div><br><br><br><hr>
                        <h1>Réponses :</h1><br>
                        @foreach ($claim->responses as $response)
                        <div class="response">
                            <p><i class="fas fa-comment"></i> {{ $response->content }} Le <b>{{ $response->response_date }}</b></p>
                        </div>
                        @endForeach
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
                                    "@id" : "https://mytroc.fr/les-trocs/",
                                    "name": "Troc"
                                }
                            }
                        ,
                            {
                                "@type": "ListItem",
                                "position": 1,
                                "item": {
                                    "@id" : "https://mytroc.fr/les-trocs/troc-de-biens",
                                    "name": "Echange de bien"
                                }
                            }
                        ,
                            {
                                "@type": "ListItem",
                                "position": 2,
                                "item": {
                                    "@id" : "https://mytroc.fr/les-trocs/troc-maison",
                                    "name": "Maison"
                                }
                            }
                        ,
                            {
                                "@type": "ListItem",
                                "position": 3,
                                "item": {
                                    "@id" : "https://mytroc.fr/les-trocs/troc-autre-maison",
                                    "name": "Autre"
                                }
                            }
                        ,
                            {
                                "@type": "ListItem",
                                "position": 4,
                                "item": {
                                    "@id" : "https://mytroc.fr/les-trocs/dinan-22100",
                                    "name": "Dinan"
                                }
                            }

                        ]
                    }
                </script>


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

    <footer>

        <nav class="footer-menu">
            <ul class="footer-column">
                <H2>Voir aussi</H2>
                <li class=" ">
                    <a href="https://mytroc.fr/temoignage" ><div class="waves" data-wave-scale="20">T&eacute;moignages</div></a>
                </li>
                <li class=" ">
                    <a href="https://mytroc.fr/boite-a-idees" ><div class="waves" data-wave-scale="20">Boite &agrave; id&eacute;es</div></a>
                </li>
                <li class=" ">
                    <a href="https://mytroc.fr/charte-du-bon-troqueur" ><div class="waves" data-wave-scale="20">La charte du bon troqueur</div></a>
                </li>
                <li class=" ">
                    <a href="https://mytroc.fr/machine-a-noisette" ><div class="waves" data-wave-scale="20">Machine &agrave; noisette</div></a>
                </li>
                <li class=" ">
                    <a href="https://mytroc.fr/remerciements-crowdfunding" ><div class="waves" data-wave-scale="20">Remerciements</div></a>
                </li>
            </ul>
            <ul class="footer-column">
                <H2>A propos</H2>
                <li class=" ">
                    <a href="https://mytroc.fr/qui-sommes-nous" ><div class="waves" data-wave-scale="20">Qui sommes nous ?</div></a>
                </li>
                <li class=" ">
                    <a href="https://mytroc.pro" ><div class="waves" data-wave-scale="20">Solutions Entreprises </div></a>
                </li>
                <li class=" ">
                    <a href="https://mytroc.fr/mentions-legales" ><div class="waves" data-wave-scale="20">Mentions L&eacute;gales</div></a>
                </li>
                <li class=" ">
                    <a href="https://mytroc.fr/cgu" ><div class="waves" data-wave-scale="20">C.G.U.</div></a>
                </li>
                <li class=" ">
                    <a href="https://mytroc.fr/cgv" ><div class="waves" data-wave-scale="20">C.G.V.</div></a>
                </li>
                <li class=" ">
                    <a href="https://mytroc.fr/gestion-des-donnees-personelles" ><div class="waves" data-wave-scale="20">Politique de gestion des données personnelles</div></a>
                </li>
                <li class=" ">
                    <a href="https://mytroc.fr/gestion-des-cookies" ><div class="waves" data-wave-scale="20">Politique de gestion des cookies</div></a>
                </li>
            </ul>
            <ul class="footer-column">
                <H2>Presse</H2>
                <li class=" ">
                    <a href="https://mytroc.fr/presse" ><div class="waves" data-wave-scale="20">On parle de nous</div></a>
                </li>
                <li class=" ">
                    <a href="https://mytroc.fr/kit-de-presse" ><div class="waves" data-wave-scale="20">Kit de presse</div></a>
                </li>
                <li class=" ">
                    <a href="https://mytroc.fr/presse/flyers-affiche-visuels" ><div class="waves" data-wave-scale="20">Flyers/Affiches/Visuels</div></a>
                </li>
                <li class=" ">
                    <a href="https://mytroc.fr/export-module/" ><div class="waves" data-wave-scale="20">Ajouter MyTroc à ma page</div></a>
                </li>
            </ul>
            <ul class="footer-column">
                <H2>Aide</H2>
                <li class=" ">
                    <a href="https://mytroc.fr/contactez-nous" ><div class="waves" data-wave-scale="20">Nous contacter</div></a>
                </li>
                <li class="show-popup-rgpd ">
                    <a href="#" ><div class="waves" data-wave-scale="20">Données personnelles</div></a>
                </li>
                <li class="show-popup-cookie ">
                    <a href="#" ><div class="waves" data-wave-scale="20">Paramétrage des Cookies</div></a>
                </li>
                <li class=" ">
                    <a href="https://mytroc.fr/bareme" ><div class="waves" data-wave-scale="20">Bar&egrave;me</div></a>
                </li>
            </ul>


            <div class="footer-social">
                <nav class="follow-social">
                    <div> Suivez nous sur les r&eacute;seaux sociaux&nbsp;: </div> <!--Suivez nous sur les réseaux sociaux :-->
                    <ul>
                        <li class="fb" class="waves" data-wave-scale="20">
                            <a href="https://www.facebook.com/mytroc.fr/" target="_blank" >
                                <div class='sprites icones' >	<img src='https://mytroc.fr/static/image/1px.png' data-src='https://mytroc.fr/static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8.png' class='img social fb white' alt='facebook'>	<img src='https://mytroc.fr/static/image/1px.png' data-src='https://mytroc.fr/static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8@2x.png' class='retina social fb white' alt='facebook'>	<img src='https://mytroc.fr/static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg'    class='svg social fb white' alt='facebook'></div>						</a>
                        </li>
                        <li class="gp" class="waves" data-wave-scale="20">
                            <a href="https://plus.google.com/u/0/101907471159985991169/" target="_blank" >
                                <div class='sprites icones' >	<img src='https://mytroc.fr/static/image/1px.png' data-src='https://mytroc.fr/static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8.png' class='img social gplus white' alt='google plus'>	<img src='https://mytroc.fr/static/image/1px.png' data-src='https://mytroc.fr/static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8@2x.png' class='retina social gplus white' alt='google plus'>	<img src='https://mytroc.fr/static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg'    class='svg social gplus white' alt='google plus'></div>						</a>
                        </li>
                        <li class="tw" class="waves" data-wave-scale="20">
                            <a href="https://twitter.com/MyTrocOfficiel" target="_blank">
                                <div class='sprites icones' >	<img src='https://mytroc.fr/static/image/1px.png' data-src='https://mytroc.fr/static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8.png' class='img social twitter white' alt='twitter'>	<img src='https://mytroc.fr/static/image/1px.png' data-src='https://mytroc.fr/static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8@2x.png' class='retina social twitter white' alt='twitter'>	<img src='https://mytroc.fr/static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg'    class='svg social twitter white' alt='twitter'></div>						</a>
                        </li>

                        <li class="instagram" class="waves" data-wave-scale="20">
                            <a href="https://www.instagram.com/mytroc.fr/" target="_blank">
                                <div class='sprites icones' >	<img src='https://mytroc.fr/static/image/1px.png' data-src='https://mytroc.fr/static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8.png' class='img social instagram white' alt='instagramm'>	<img src='https://mytroc.fr/static/image/1px.png' data-src='https://mytroc.fr/static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8@2x.png' class='retina social instagram white' alt='instagramm'>	<img src='https://mytroc.fr/static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg'    class='svg social instagram white' alt='instagramm'></div>
                            </a>
                        </li>

                        <li class="lilo" class="waves" data-wave-scale="20">
                            <a href="http://www.lilo.org/fr/mytroc/" target="_blank">
                                <div class='sprites icones' >	<img src='https://mytroc.fr/static/image/1px.png' data-src='https://mytroc.fr/static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8.png' class='img social lilo white' alt='lilo'>	<img src='https://mytroc.fr/static/image/1px.png' data-src='https://mytroc.fr/static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8@2x.png' class='retina social lilo white' alt='lilo'>	<img src='https://mytroc.fr/static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg'    class='svg social lilo white' alt='lilo'></div>						</a>
                        </li>

                    </ul>

                </nav>
            </div>
            <div class="esus">
                <img src='https://cf.mytroc.fr/image/logo/esus.png'  class='agrement-esus ' alt='agrement esus'>
                <p class="ess">MyTroc est une entreprise de l'Economie Sociale et Solidaire (ESS) agr&eacute;&eacute;e Entreprise Solidaire d'Utilit&eacute; Sociale (ESUS)</p>
                <div class="clear"></div>
            </div>

        </nav>
        <script type="application/ld+json">
            {
                "@context" : "http://schema.org",
                "@type" : "WebSite",
                "name" : "MyTroc",
                "alternateName" : "mytroc.fr",
                "url" : "https://mytroc.fr",
                "potentialAction":
                {
                    "@type": "SearchAction",
                    "target": "https://mytroc.fr/les-trocs/?req={search_term_string}",
                    "query-input": "required name=search_term_string"
                }
            }
        </script>
        <script type="application/ld+json"> { "@context" : "http://schema.org", "@type" : "Organization", "url"  : "https://MyTroc.fr", "logo": "https://mytroc.fr/static/image/logo/mytroc.png" } </script>
        <script type="application/ld+json"> { "@context" : "http://schema.org", "@type" : "Organization", "name" : "MyTroc", "url" : "https://MyTroc.fr", "sameAs" : [ "https://www.facebook.com/pages/MyTrocfr/1556250484625786", "https://plus.google.com/u/0/101907471159985991169/", "https://twitter.com/MyTrocOfficiel" ] } </script>
        <div style="display:none">
            <div class='sprites icones' >	<img src='https://mytroc.fr/static/image/1px.png' data-src='https://mytroc.fr/static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8.png' class='img nuts' alt='noisette'>	<img src='https://mytroc.fr/static/image/1px.png' data-src='https://mytroc.fr/static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8@2x.png' class='retina nuts' alt='noisette'>	<img src='https://mytroc.fr/static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg'    class='svg nuts' alt='noisette'></div>
        </div>
    </footer>

    <noscript><p><img src="//mytroc.fr/analytics/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
    <!-- end Piwik  Pixel Code -->
    <img style="opactiy:0" src="https://facebook.com/tr?id=1220149654723308&ev=PageView&noscript=1" />
</BODY>

<script type="text/javascript" charset="UTF-8" src="https://cf.mytroc.fr/js/84b266e67b3134f12fabf60a0f7d8546.js" async  defer  onload="jQueryReadyCB()" ></script>

</HTML>
