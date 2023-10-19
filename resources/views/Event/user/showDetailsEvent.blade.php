<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<HTML lang="fr-FR">
@extends('FrontEnd.section.header')
@section('pageTitle', 'Connexion')
<style>

    @import url('https://fonts.googleapis.com/css?family=Open+Sans');
    body{font-family: 'Open Sans', sans-serif;background:#f7f7f7}
    .single-feature-events-area {
        padding: 10px;
        margin-top:20px;
        position: relative;
        z-index: 1;
        background-color: #fff;
        margin-bottom: 50px;
        -webkit-transition-duration: 500ms;
        transition-duration: 500ms;
        background:#fff;
    }
    .single-feature-events-area:hover {
        background-color: #c299e1;
    }
    .single-feature-events-area:hover .feature-events-content h5, .single-feature-events-area:hover .feature-events-content p {
        color: #fff;
    }
    .single-feature-events-area .feature-events-thumb {
        position: relative;
        z-index: 1;
    }

    .feature-events-thumb {
        width: 170px;
        -webkit-box-flex: 0;
        -ms-flex: 0 0 170px;
        flex: 0 0 170px;
    }

    /*.feature-events-thumb img {*/
    /*    width:100%;*/
    /*    height:100%;*/

    /*}*/
    .feature-events-content {
        padding:10px 0;
        position: relative;
        z-index: 2;

    }
    .feature-events-content p {
        font-size: 14px;
        -webkit-transition-duration: 500ms;
        transition-duration: 500ms;
        margin-bottom: 0;
    }
    .feature-events-content h5 {
        font-size: 18px;
        text-transform: uppercase;
        font-weight: 800;
        margin-bottom: 5px;
        -webkit-transition-duration: 500ms;
        transition-duration: 500ms;
    }
    .feature-events-content h6 {
        font-size: 14px;
        font-weight: 400;
        color: #e3dbea;
        margin-bottom: 15px;
        -webkit-transition-duration: 500ms;
        transition-duration: 500ms;
    }
    .feature-events-details-btn > a {
        width: 65px;
        height: 50px;
        background-color: #0094ff;
        display: block;
        font-size: 24px;
        color: #fff;
        line-height: 50px;
        text-align: center;
        position: absolute;
        bottom: 0;
        right: 0;
        z-index: 99;
    }
    .date-map-area {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 9;
    }
    .date-map-area > a {
        padding: 8px 15px;
        font-size: 12px;
        width: 65px;
        font-weight: 800;
        color: #fff;
        height: 50px;
        background-color: #0094ff;
        text-align: center;
    }
    .container {
        margin: 50px auto 0;
        width: 700px;
    }

    .u-float-right {
        float: right;
    }

    .u-flex-center {
        display: -webkit-flex;
        display: flex;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-align-items: center;
        align-items: center;
    }

    .subtle {
        color: #888;
        font-size: 12px;
    }

    .card-media {
        border-radius: 2px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, .12);
        height: 125px;
        margin-bottom: 25px;
        transition: all 300ms ease-out;
        width: 100%;
    }

    .card-media:hover {
        box-shadow: 0 5px 14px rgba(0, 0, 0, .2);
    }

    .card-media-object-container {
        background: none;
        float: left;
        height: 100%;
        width: 35%;
        position: relative;
    }

    .card-media-object {
        background-position: center center;
        background-size: cover;
        height: 100%;
    }

    .card-media-object:after {
        content: " ";
        display: block;
        height: 100%;
        left: 0;
        opacity: 0;
        position: absolute;
        right: 0;
        top: 0;
        transition: all 300ms ease-out;
        z-index: 10;
    }

    .card-media:hover .card-media-object:after {
        background: -moz-linear-gradient(top,  rgba(0,0,0,0) 0%, rgba(0,0,0,0) 52%, rgba(0,0,0,0.4) 100%);
        background: -webkit-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0) 52%,rgba(0,0,0,0.4) 100%);
        background: linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,0) 52%,rgba(0,0,0,0.4) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#a6000000',GradientType=0 );
        opacity: 1;
    }

    .card-media-object-tag {
        background-color: #fff;
        border-radius: 2px;
        padding: 2px 7px;
        position: absolute;
        right: 10px;
        top: 10px;
    }

    .card-media-object-social-list {
        bottom: 4px;
        left: 10px;
        list-style-type: none;
        margin: 0;
        padding: 0;
        position: absolute;
        z-index: 20;
    }

    .card-media-object-social-list li {
        border-radius: 50%;
        display: inline-block;
        height: 30px;
        margin-right: 6px;
        opacity: 0;
        overflow: hidden;
        transform: translateY(5px);
        transition: all 300ms ease-out;
        width: 30px;
    }

    .card-media:hover .card-media-object-social-list li {
        opacity: 1;
        transform: translateY(0);
    }

    .card-media-object-social-list li:nth-child(1) {
        transition-delay: 0;
    }
    .card-media-object-social-list li:nth-child(2) {
        transition-delay: 75ms;
    }
    .card-media-object-social-list li:nth-child(3) {
        transition-delay: 150ms;
    }

    .card-media-object-social-list-item-additional {
        border: 1px solid #fff;
        color: #fff;
        font-size: 12px;
        padding-top: 7px;
        text-align: center;
    }

    .card-media-body {
        background-color: #fff;
        float: left;
        height: 100%;
        padding: 12px 15px;
        position: relative;
        width: 65%;
    }

    .card-media-body-top {
        display: block;
    }

    .card-media-body-top-icons {
        margin-top: -2px;
        opacity: 0;
        transition: all 300ms ease-out;
        transform: translateY(-5px);
    }

    .card-media:hover .card-media-body-top-icons {
        opacity: 1;
        transform: translateY(0);
    }

    .card-media-body-top-icons > svg {
        cursor: pointer;
        margin-left: 10px;
        transition: all 300ms ease-out;
    }

    .card-media-body-top-icons > svg:hover {
        fill: #444;
    }

    .card-media-body-heading {
        display: block;
        margin-top: 10px;
    }

    .card-media-body-supporting-bottom {
        position: absolute;
        bottom: 10px;
        left: 0;
        opacity: 1;
        padding: 0 15px;
        transition: all 300ms ease-out;
        width: 100%;
    }

    .card-media:hover .card-media-body-supporting-bottom {
        opacity: 0;
        transform: translateY(-8px);
    }

    .card-media-body-supporting-bottom-text {
        display: inline-block;
    }

    .card-media-body-supporting-bottom-reveal {
        opacity: 0;
        transform: translateY(8px);
        transition: all 300ms ease-out;
    }

    .card-media:hover .card-media-body-supporting-bottom-reveal {
        opacity: 1;
        transform: translateY(0);
    }

    .card-media-link {
        color: #41C1F2;
        text-decoration: none;
    }
</style>
<div id="main">


    <script>

        setTimeout(function() {
            document.getElementById('success-alert').style.display = 'none';
            document.getElementById('error-alert').style.display = 'none';
        }, 5000);
    </script>
    @if (Session::has('success'))
        <div class="alert alert-warning alert-dismissible" role="alert" id="success-alert">
            {{--        <button type="button" class="close" data-dismiss="alert">--}}
            {{--            <i class="fa fa-times"></i>--}}
            {{--        </button>--}}
            <strong>warning !</strong> {{ session('success') }}
        </div>
    @endif

    @if (Session::has('error'))
        <div class="alert alert-danger alert-dismissible" role="alert" id="error-alert">
            <button type="button" class="close" data-dismiss="alert">
                <i class="fa fa-times"></i>
            </button>
            <strong>Error !</strong> {{ session('error') }}
        </div>
    @endif
    <div id="animation-banner" class="web">
        <div id="could-banner" class="no-overflow">
            <div id="cloud1" class="cloud">
                <img src='static/image/1px.png' data-load='/image/sketch/nuage1.svg' alt='nuage' class='svg'>
                <img src='static/image/1px.png' data-src='/image/sketch/nuage1.png' alt='nuage' class='img'>
                <img src='static/image/1px.png' data-src='/image/sketch/nuage1@2x.png' alt='nuage' class='retina'>
            </div>
            <div id="cloud2" class="cloud">
                <img src='static/image/1px.png' data-load='/image/sketch/nuage2.svg' alt='nuage' class='svg'>
                <img src='static/image/1px.png' data-src='/image/sketch/nuage2.png' alt='nuage' class='img'>
                <img src='static/image/1px.png' data-src='/image/sketch/nuage2@2x.png' alt='nuage' class='retina'>

            </div>
            <div id="cloud3" class="cloud">
                <img src='static/image/1px.png' data-load='/image/sketch/nuage3.svg' alt='nuage' class='svg'>
                <img src='static/image/1px.png' data-src='/image/sketch/nuage3.png' alt='nuage' class='img'>
                <img src='static/image/1px.png' data-src='/image/sketch/nuage3@2x.png' alt='nuage' class='retina'>

            </div>
            <div id="cloud4" class="cloud">
                <img src='static/image/1px.png' data-load='/image/sketch/nuage1.svg' alt='nuage' class='svg'>
                <img src='static/image/1px.png' data-src='/image/sketch/nuage1.png' alt='nuage' class='img'>
                <img src='static/image/1px.png' data-src='/image/sketch/nuage1@2x.png' alt='nuage' class='retina'>

            </div>
            <div id="cloud5" class="cloud">
                <img src='static/image/1px.png' data-load='/image/sketch/nuage2.svg' alt='nuage' class='svg'>
                <img src='static/image/1px.png' data-src='/image/sketch/nuage2.png' alt='nuage' class='img'>
                <img src='static/image/1px.png' data-src='/image/sketch/nuage2@2x.png' alt='nuage' class='retina'>

            </div>
        </div>
        <H1 class="title">@yield('pageTitle')</H1>

    </div>


    <div class="content">

        <article class="login-page top-sep">

            <div class="illu login-tree web">
                <img src='static/image/1px.png' data-load='/image/sketch/arbre_optim.svg' alt='tree'
                     class='web svg'>
                <img src='static/image/1px.png' data-src='/static/image/sketch/arbre_optim.png' alt='tree'
                     class='web img'>
                <img src='static/image/1px.png' data-src='/static/image/sketch/arbre_optim@2x.png' alt='tree'
                     class='web retina'>
            </div>

            <div class="ground top-sep"></div>

            <div class="login-block">
                <div class="illu illu-login web">

                    <img src='/image/sketch/oiseau_right_down.svg' alt='oiseau' class='login bird web svg'>
                    <img src='static/image/1px.png' data-src='/image/sketch/oiseau_right_down.png' alt='oiseau'
                         class='login bird web img'>
                    <img src='static/image/1px.png' data-src='/image/sketch/oiseau_right_down@2x.png' alt='oiseau'
                         class='login bird web retina'>


                    <div class="bubble-login">  Participer  !</div>
                </div>

                <div class="login-tab">

                    <div class="tab ">
                        <a id="blogin" href="#form-login">J'ai d&eacute;j&agrave; <span>un compte</span></a>
                    </div>

{{--                    <div class="tab ">--}}
{{--                        <a id="bregister" href="#form-register">Je cr&eacute;e <span>mon compte</span></a>--}}
{{--                    </div>--}}

                </div>
                <!-----------------------------------LOGIN---------------------------->

{{--                <div class="form-login">--}}

{{--                    <form id="login" method="POST" action="{{ route('login') }}">--}}
{{--                        @csrf--}}

{{--                        <!-- Email Address -->--}}
{{--                        <div>--}}
{{--                            <x-input-label for="username" :value="__('Nom d\'utilisateur')" />--}}
{{--                            <x-text-input id="username" class="block mt-1 w-full" type="text" name="username"--}}
{{--                                          :value="old('username')" required autofocus autocomplete="username" />--}}
{{--                            <x-input-error :messages="$errors->get('username')" class="error" />--}}
{{--                        </div>--}}

{{--                        <!-- Password -->--}}
{{--                        <div class="mt-4">--}}
{{--                            <x-input-label for="password" :value="__('Mot de passe')" />--}}

{{--                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"--}}
{{--                                          required autocomplete="current-password" />--}}

{{--                            <x-input-error :messages="$errors->get('password')" class="error" />--}}
{{--                        </div>--}}

{{--                        <!-- Remember Me -->--}}

{{--                        <div class="remenber-me">--}}
{{--                            <input id="remember-me" type="checkbox" name="remember">--}}
{{--                            <label for="remember-me">--}}
{{--                                {{ __('se souvenir de moi') }}</label>--}}
{{--                        </div>--}}
{{--                        <div class="flex items-center justify-end mt-4">--}}
{{--                            @if (Route::has('password.request'))--}}
{{--                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"--}}
{{--                                   href="{{ route('password.request') }}">--}}
{{--                                    {{ __('Forgot your password?') }}--}}
{{--                                </a>--}}
{{--                            @endif--}}
{{--                        </div>--}}
{{--                        <div class="form-button" onclick="submitForm()">--}}
{{--                            <x-primary-button class="ml-3" class="ml-3 custom-button">--}}
{{--                                {{ __('CONNEXION') }}--}}
{{--                            </x-primary-button>--}}
{{--                        </div>--}}
{{--                    </form>--}}

{{--                    <div id="forgotten-pass" class="forgotten-pass">Mot de passe oubli&eacute; ?</div>--}}

{{--                    <form id="forgotten-form" style="display:none">--}}

{{--                        <input type="hidden" name="mail" value="jenexistepas@jenexistepas.com">--}}
{{--                        <div>--}}
{{--                            <x-input-label for="username" :value="__('username')" />--}}
{{--                            <x-text-input id="username" class="block mt-1 w-full" type="text" name="username"--}}
{{--                                          :value="old('username')" required autofocus autocomplete="username" />--}}
{{--                            <x-input-error :messages="$errors->get('username')" class="error" />--}}

{{--                            <div class="valid-hint">Vous devez rentrer une adresse email valide</div>--}}
{{--                            <label for="email-forgotten" class="main">Votre Email </label>--}}
{{--                            <input id="email-forgotten" type="email" name="email"--}}
{{--                                   placeholder="email@ma-boite-email.fr">--}}
{{--                            <div class="validator"></div>--}}
{{--                        </div>--}}

{{--                        <div id="flash" class="flash" style="display:none"> </div>--}}

{{--                        <div class="form-button">--}}
{{--                            <div class="button valid-button">--}}
{{--                                R&eacute;initialiser mon mot de passe !--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}

{{--                </div>--}}

                <!-----------------------------REGISTER------------------------------>
                @foreach ($similarEvents as $event9)
                    <div class="card-media">
                        <!-- media container -->
                        <div class="card-media-object-container">

                            <div class="card-media-object"
                            >
                                @php
                                    $imagePathParts = pathinfo($event9->image_path);
                                    $imageName = $imagePathParts['basename'];
                                @endphp
                                <img width="100%" height="100%"  src="{{ asset('imagesForEvents/' . $imageName) }}" alt="Description de l'image">


                            </div>
                            <span class="card-media-object-tag subtle"> {{$event9->categorie}} </span>

                            <ul class="card-media-object-social-list">
                                <li style="color: white">
                                @if ($event9->participations->count() == 1)
                                    {{ $event9->participations->first()->user->name }}

                                @elseif ($event9->participations->count() > 1)
                                    @foreach ($event9->participations as $particip)
                                        {{ $particip->user->name }}
                                    @endforeach
                                    <li class="card-media-object-social-list-item-additional">
                                        +{{ $event9->participations->count() -1 }}
                                    </li>
                                @else
                                    Aucun participant
                                    @endif
                                    </li>

                            </ul>

                        </div>
                        <!-- body container -->
                        <div class="card-media-body">
                            <div class="card-media-body-top">


   <span class="subtle">
       <i class="bx bx-time"></i>
@if($event9->start)
           {{ date('d F, H:i', strtotime($event9->start)) }} -
       @else
           Date inconnue -
       @endif

       @if($event9->end)
           {{ date('d F', strtotime($event9->end)) }}
       @else
           Fin inconnue
       @endif


</span>




                                <div class="card-media-body-top-icons u-float-right">
                                    <svg fill="#888888" height="16" viewBox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92 1.61 0 2.92-1.31 2.92-2.92s-1.31-2.92-2.92-2.92z"/>
                                    </svg>
                                    <svg fill="#888888" height="16" viewBox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17 3H7c-1.1 0-1.99.9-1.99 2L5 21l7-3 7 3V5c0-1.1-.9-2-2-2z"/>
                                        <path d="M0 0h24v24H0z" fill="none"/>
                                    </svg>
                                </div>
                            </div>
                            <span class="card-media-body-heading">

{{$event9->nom}}

                </span>
                            <small class="subtle" style="font-size: 7px" >{{$event9->description}}</small>

                            <br/>
                            <br/>
                            <div class="card-media-body-supporting-bottom">
                    <span class="card-media-body-supporting-bottom-text subtle"> <i class="bx bx-map"></i>
 {{$event9->Lieu}} </span>
                                {{--                    <span class="card-media-body-supporting-bottom-text subtle u-float-right">Free &ndash; $30</span>--}}
                            </div>
                            <div class="card-media-body-supporting-bottom card-media-body-supporting-bottom-reveal">
                                <span class="card-media-body-supporting-bottom-text subtle   " ># {{$event9->categorie}} </span>
                                <a href="#/" class="card-media-body-supporting-bottom-text card-media-link u-float-right">VIEW TICKETS</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="single-feature-events-area" >
                    <div class="feature-events-thumb">
                        {{--                        <img width="0%" height="100%"  src="{{ asset('imagesForEvents/' . $imageName) }}" alt="Description de l'image">--}}
                        @php
                            $imagePathParts = pathinfo($event->image_path);
                            $imageName = $imagePathParts['basename'];
                        @endphp
                        <img class="col-lg-12" src="{{ asset('imagesForEvents/' . $imageName) }}" alt="">
                        <div class="date-map-area   ">
                            <a href="#">
                                {{ date('d F', strtotime($event->start)) }}
                            </a>


                        </div>
                    </div>
                    <div class="feature-events-content">
                        <h5>  {{$event->nom}} </h5>
                        <h6><i class="bx bx-map"></i>
                            {{$event->Lieu}} </h6>
                        <p> <i class="bx bxs-group"></i>
                            {{$event->participations->count()}} </p>
                        <p> {{$event->description}} </p>
                    </div>
                    <br/>
                    <br/>

                    @if(auth()->check())

                        @if($isParticipated)
                            <div class="feature-events-details">
                                <div class="alert alert-warning" style="text-align: center" >
                                    <strong>   Déjà Participé </strong>
                                </div>

                            </div>
                        @else
                            <div class="feature-events-details-btn">
                                <div class="alert alert-success" style="text-align: center" >
                                    <a href="{{ route('participerEvent', ['event_id' => $event->id, 'user_id' => auth()->user()->id]) }}">
                                        Participer à l'événement
                                    </a>
                                </div>
                            </div>

                        @endif

                    @else
                        <p>Connectez-vous pour participer à l'événement.</p>
                    @endif

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
                            "@id": "/mon-profil?_s=79512ed80254f037c49f273da53befdf",
                            "name": "connexion"
                        }
                    }

                ]
            }
            </script>


        </article>

        <noscript>
            Ce site utilise Javascript, vous devez activer Javascript pour que le site fonctionne correctement. <div>
                &nbsp;</div>
            <div>
                <a href="https://support.google.com/chrome/answer/114662?hl=fr" target="_blank"
                   rel="external nofollow">
                    Param&egrave;trer javascript dans Google Chrome &copy; </a>
            </div>
            <div>
                <a href="https://support.mozilla.org/fr/kb/parametres-javascript-pages-interactives" target="_blank"
                   rel="external nofollow">
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
                <a href="http://help.opera.com/Windows/12.10/fr/javascript.html" target="_blank"
                   rel="external nofollow">
                    Param&egrave;trer javascript dans Opera de Opera Software &copy;
                </a>
            </div>
        </noscript>
    </div>

</div>

@extends('FrontEnd.Section.footer')

<noscript>
    <p><img src="analytics/piwik0412.gif?idsite=1" style="border:0;" alt="" /></p>
</noscript>
<!-- end Piwik  Pixel Code -->
<img style="opactiy:0" src="https://facebook.com/tr?id=1220149654723308&amp;ev=PageView&amp;noscript=1" />
</BODY>

<script type="text/javascript" charset="UTF-8" src="/js/script.js" async defer onload="jQueryReadyCB()"></script>


<!-- Mirrored from mytroc.fr/logout by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2023 15:18:21 GMT -->

</HTML>
