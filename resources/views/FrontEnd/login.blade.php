<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<HTML lang="fr-FR">
@extends('FrontEnd.section.header')
@section('pageTitle', 'Connexion')
<style>
    .custom-button {
        border: none;
        border-radius: 0;
        font-weight: 400;
        font-size: 1.1em;
        color: #fff;
        background-color: #a23b50;
        HEIGHT: 1.6rem;
    }

    .error {
        position: relative;
        color: red;
    }
</style>
<div id="main">
@if ($errors->has('message'))
<div class="alert alert-danger">

        {{ $errors->first('message') }}
    </div>
@endif

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


                    <div class="bubble-login">connectez vous pour troquer !</div>
                </div>

                <div class="login-tab">

                    <div class="tab ">
                        <a id="blogin" href="#form-login">J'ai d&eacute;j&agrave; <span>un compte</span></a>
                    </div>

                    <div class="tab ">
                        <a id="bregister" href="#form-register">Je cr&eacute;e <span>mon compte</span></a>
                    </div>

                </div>
                <!-----------------------------------LOGIN---------------------------->

                <div class="form-login">

                    <form id="login" method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Address -->
                        <div>
                            <x-input-label for="username" :value="__('Nom d\'utilisateur')" />
                            <x-text-input id="username" class="block mt-1 w-full" type="text" name="username"
                                :value="old('username')" required autofocus autocomplete="username" />
                            
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Mot de passe')" />

                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                                required autocomplete="current-password" />

                            <x-input-error :messages="$errors->get('password')" class="error" />
                            <x-input-error :messages="$errors->get('username')" class="error" />
                            
                        </div>

                        <!-- Remember Me -->

                        <div class="remenber-me">
                            <input id="remember-me" type="checkbox" name="remember">
                            <label for="remember-me">
                                {{ __('se souvenir de moi') }}</label>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                        </div>
                        <div class="form-button" onclick="submitForm()">
                            <x-primary-button class="ml-3" class="ml-3 custom-button">
                                {{ __('CONNEXION') }}
                            </x-primary-button>
                        </div>
                    </form>

                    <div id="forgotten-pass" class="forgotten-pass">Mot de passe oubli&eacute; ?</div>

                    <form id="forgotten-form" style="display:none">

                        <input type="hidden" name="mail" value="jenexistepas@jenexistepas.com">
                        <div>
                            <x-input-label for="username" :value="__('username')" />
                            <x-text-input id="username" class="block mt-1 w-full" type="text" name="username"
                                :value="old('username')" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('username')" class="error" />

                            <div class="valid-hint">Vous devez rentrer une adresse email valide</div>
                            <label for="email-forgotten" class="main">Votre Email </label>
                            <input id="email-forgotten" type="email" name="email"
                                placeholder="email@ma-boite-email.fr">
                            <div class="validator"></div>
                        </div>

                        <div id="flash" class="flash" style="display:none"> </div>

                        <div class="form-button">
                            <div class="button valid-button">
                                R&eacute;initialiser mon mot de passe !
                            </div>
                        </div>
                    </form>

                </div>

                <!-----------------------------REGISTER------------------------------>
                <div class="form-registration form-login">

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div>
                            <x-input-label for="name" :value="__('Nom')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="error" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email')" required autocomplete="email" />
                            <x-input-error :messages="$errors->get('email')" class="error" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="username" :value="__('Nom d\'utilisateur')" />
                            <x-text-input id="username" class="block mt-1 w-full" type="text" name="username"
                                :value="old('username')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('username')" class="error" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="phone" :value="__('Téléphone')" />
                            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone"
                                :value="old('phone')" required />
                            <x-input-error :messages="$errors->get('phone')" class="error" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Mot de passe')" />

                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                                required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password')" class="error" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="password_confirmation" :value="__('Confirmer Mot de passe')" />

                            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                name="password_confirmation" required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password_confirmation')" class="error" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a style="left: 77%;
    position: relative;"
                                class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                href="{{ route('login') }}">
                                {{ __('Déjà connetcé?') }}
                            </a>
                            <div class="form-button" onclick="submitForm()">
                                <x-primary-button class="ml-4" class="ml-3 custom-button">
                                    {{ __('Crée mon compte') }}
                                </x-primary-button>
                            </div>
                        </div>
                    </form>


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
