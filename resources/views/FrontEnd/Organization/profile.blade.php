<head>
    <link rel="stylesheet" href="/back/assets/vendor/fonts/boxicons076f.css?id=b821a646ad0904f9218f56d8be8f070c" />
</head>

<body>
    @extends('FrontEnd.section.header')
    <div id="main">
        <div id="animation-banner" class="web">
            <div id="could-banner" class="no-overflow">
                <div id="cloud1" class="cloud">
                    <img src="/image/sprites/icons/gen/nuage1.svg" data-load="https://cf.mytroc.fr/image/sketch/nuage1.svg" alt="nuage" class="svg">

                </div>
                <div id="cloud2" class="cloud">
                    <img src="/image/sprites/icons/gen/nuage2.svg" data-load="https://cf.mytroc.fr/image/sketch/nuage2.svg" alt="nuage" class="svg">

                </div>
                <div id="cloud3" class="cloud">
                    <img src="/image/sprites/icons/gen/nuage3.svg" data-load="https://cf.mytroc.fr/image/sketch/nuage3.svg" alt="nuage" class="svg">

                </div>
                <div id="cloud4" class="cloud">
                    <img src="/image/sprites/icons/gen/nuage1.svg" data-load="https://cf.mytroc.fr/image/sketch/nuage1.svg" alt="nuage" class="svg">

                </div>
                <div id="cloud5" class="cloud">
                    <img src="/image/sprites/icons/gen/nuage2.svg" data-load="https://cf.mytroc.fr/image/sketch/nuage2.svg" alt="nuage" class="svg">

                </div>
            </div>
            <div id="birdheader" class="birdheader">
                <img src="/image/sprites/icons/gen/oiseau_banniere.svg" data-load="https://cf.mytroc.fr/image/sketch/oiseau_banniere.svg" alt="bird" class="svg">
            </div>
        </div>

        <div class="content">

            <div id="reminder-login"></div>
            <article class="profil out top-sep">
                <div class="container">

                    <h1 class="smart">
                        {{$organization->name}}
                    </h1>
                    <div class="profil-head">
                        <div class="profil-pix out class_box_shadow">

                            <div class="square default">
                                <div class="square-content">
                                    <img src="/organization_logos/{{ $organization->logo }}" alt="troqueur cats city, sur mytroc">
                                </div>
                            </div>
                            <div class="stamp-asso"> {{$organization->name}}</div>
                        </div>

                        <div class="user-metas">

                            <h2>Visitez {{$organization->name}} :</h2>

                            <div class="website-partner">

                                <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-buildings"></i></span>

                                <a href="https://www.google.com/maps/search/{{ urlencode($organization->location) }}" target="_blank">
                                    {{ $organization->location }}
                                </a>
                            </div>

                            <h2>Retrouvez {{$organization->name}} sur : </h2>

                            <div class="website-partner">
                                <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-link"></i></span>

                                <a href="{{ $organization->website }}" rel="nofollow" target="_blank">{{ $organization->website }}</a>
                            </div>

                            <h2>Contactez {{$organization->name}} par email :</h2>

                            <div class="website-partner">
                                <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-link"></i></span>
                                <a href="mailto:{{ $organization->email }}">{{ $organization->email }}</a>
                            </div>

                        </div>


                    </div>
                    <!-- -->
                    <div>
                        <div class="profil-space">

                            <div class="smart-half">

                                <div class="donation-score smart-half">
                                    <span>7811</span>
                                    <div class="sprites icones"> <img src="/image/sprites/icons/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg" class="svg nuts" alt="noisette"></div>collectées
                                </div>
                            </div>

                            <div class="smart-half">
                                <div id="donation-popup">
                                    <form id="donation" class="donation-form">
                                        <input type="hidden" class="hidden-uid-donate" value="16898">
                                        <div class="flash"></div>
                                        <div class="form-button">
                                            <div class="button valid-button">

                                                <span>Donner des noisettes</span>
                                            </div>
                                            <div class="popup-button"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <div class="user-infos">
                            <div id="">
                                <h2>description </h2>
                                <p>{{$organization->description}}</p>
                            </div>

                            <div class="">
                                <h2>Date de fondation : </h2>
                                <ul class="asso-requirement">
                                    <li>le {{ \Carbon\Carbon::parse($organization->founding_date)->format('d-m-Y') }}</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

            </article>
        </div>
    </div>
</body>
@extends('FrontEnd.section.footer')

<noscript>
    Ce site utilise Javascript, vous devez activer Javascript pour que le site fonctionne correctement. <div>&nbsp;</div>
    <div>
        <a href="https://support.google.com/chrome/answer/114662?hl=fr" target="_blank" rel="external nofollow">
            Param&egrave;trer javascript dans Google Chrome &copy; </a>
    </div>
    <div>
        <a href="https://support.mozilla.org/fr/kb/parametres-javascript-pages-interactives" target="_blank" rel="external nofollow">
            Param&egrave;trer javascript dans Mozilla Firefox &copy;
        </a>
    </div>
    <div>
        <a href="http://support.microsoft.com/gp/howtoScript/fr" target="_blank" rel="external nofollow">
            Param&egrave;trer javascript dans Internet Explorer &copy;
        </a>
    </div>
    <div>
        <a href="http://support.apple.com/fr-fr/HT1677" target="_blank" rel="external nofollow">
            Param&egrave;trer javascript dans Apple Safari &copy; </a>
    </div>
    <div>
        <a href="http://help.opera.com/Windows/12.10/fr/javascript.html" target="_blank" rel="external nofollow">
            Param&egrave;trer javascript dans Opera de Opera Software &copy;
        </a>
    </div>
</noscript>