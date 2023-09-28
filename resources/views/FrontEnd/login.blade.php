<HTML lang="fr-FR">
@extends('FrontEnd.section.header')
@section('pageTitle', 'Connexion')
<div id="main">
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
                <img src='static/image/1px.png' data-load='/image/sketch/arbre_optim.svg' alt='tree' class='web svg'>
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

                <div class="social-login">
                    <a
                        href="https://www.facebook.com/v2.12/dialog/oauth?client_id=1291031004295418&amp;state=807fbbac9ab2f718223bd5b72d27a4fc&amp;response_type=code&amp;sdk=php-sdk-5.6.2&amp;redirect_uri=https%3A%2F%2Fmytroc.fr%2Fcb%2Ffacebook&amp;scope=email%2Cpublic_profile%2Cuser_location">
                        <div id="login-facebook" class="ext-login">
                            <div class='sprites-container'>
                                <div class='sprites icones'> <img src='static/image/1px.png'
                                        data-src='/static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8.png'
                                        class='img social fb white' alt='facebook'> <img src='static/image/1px.png'
                                        data-src='/static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8@2x.png'
                                        class='retina social fb white' alt='facebook'> <img
                                        src='static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg'
                                        class='svg social fb white' alt='facebook'></div>
                            </div>
                            <div class="center">Connexion Facebook</div>
                        </div>
                    </a>
                    <a
                        href="https://accounts.google.com/o/oauth2/auth?response_type=code&amp;access_type=online&amp;client_id=273103550296-bprtdibuhoara97rl52aekfrrrrpbpps.apps.googleusercontent.com&amp;redirect_uri=https%3A%2F%2Fmytroc.fr%2Fcb%2Fgoogleplus&amp;state&amp;scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fplus.login%20https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email&amp;approval_prompt=auto">
                        <div id="login-google" class="ext-login">
                            <div class='sprites-container'>
                                <div class='sprites icones'> <img src='static/image/1px.png'
                                        data-src='/static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8.png'
                                        class='img social glogin' alt='google login'> <img src='static/image/1px.png'
                                        data-src='/static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8@2x.png'
                                        class='retina social glogin' alt='google login'> <img
                                        src='static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg'
                                        class='svg social glogin' alt='google login'></div>
                            </div>
                            <div class="center">Connexion Google</div>
                        </div>
                    </a>
                    <a href="https://www.messervices.etudiant.gouv.fr/Shibboleth.sso/Login?target=/mytroc">
                        <div id="login-mse" class="ext-login">
                            <div class='sprites-container'>
                                <div class='sprites icones'> <img src='static/image/1px.png'
                                        data-src='/static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8.png'
                                        class='img social mse' alt='messerviceetudiants'> <img
                                        src='static/image/1px.png'
                                        data-src='/static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8@2x.png'
                                        class='retina social mse' alt='messerviceetudiants'> <img
                                        src='static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg'
                                        class='svg social mse' alt='messerviceetudiants'></div>
                            </div>
                            <div class="center">Connexion etudiant</div>
                        </div>
                    </a>
                </div>

                <div class="form-login">

                    <form id="login">

                        <input type="hidden" name="mail" value="jenexistepas@jenexistepas.com">


                        <div>
                            <div class="valid-hint">Vous devez rentrer une adresse email valide </div>
                            <label for="email" class="main">Votre Email </label>
                            <input id="email" type="email" name="email" placeholder="email@ma-boite-email.fr">
                            <div class="validator"></div>
                        </div>

                        <div>
                            <div class="valid-hint"> Votre mot de passe doit contenir au moins 6 caract&egrave;res</div>
                            <label for="password" class="main">Mot de passe </label>
                            <input id="password" type="password" name="password" placeholder="mot de passe">
                            <input id="password-force" type="hidden" name="force" value="">
                            <div class="validator"></div>
                        </div>
                        <div class="remenber-me">
                            <input id="remember-me" type="checkbox" name="cgu">
                            <label for="remember-me">
                                se souvenir de moi </label>
                        </div>


                        <div id="flash" class="flash" style="display:none"> </div>


                        <div class="form-button">
                            <div class="button valid-button">Se connecter</div>
                            <div id="resendEmailValidator"></div>
                        </div>
                    </form>

                    <div id="forgotten-pass" class="forgotten-pass">Mot de passe oubli&eacute; ?</div>

                    <form id="forgotten-form" style="display:none">

                        <input type="hidden" name="mail" value="jenexistepas@jenexistepas.com">
                        <div>
                            <div class="valid-hint">Vous devez rentrer une adresse email valide</div>
                            <label for="email-forgotten" class="main">Votre Email </label>
                            <input id="email-forgotten" type="email" name="email" placeholder="email@ma-boite-email.fr">
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

                <div class="form-registration form-login">

                    <form id="registration">
                        <input type="hidden" name="mail" value="jenexistepas@jenexistepas.com">
                        <div>
                            <div class="valid-hint">
                                Vous devez rentrer une adresse email valide
                            </div>
                            <label for="email-register" class="main"> Votre Email<span class="required"></span></label>
                            <input id="email-register" type="email" name="email" placeholder="email@ma-boite-email.fr">
                            <div class="validator">
                            </div>
                        </div>
                        <div>
                            <div class="valid-hint">Votre pseudo doit contenir au moins 5 caract&egrave;res
                            </div>
                            <label for="email" class="main">Votre Pseudo<span class="required"></span></label>
                            <input id="pseudo" type="text" name="pseudo" placeholder="pseudo">
                            <div class="validator">
                            </div>
                        </div>


                        <div>
                            <div class="valid-hint">
                                Votre mot de passe doit contenir au moins 6 caract&egrave;res
                            </div>
                            <div class="relative">
                                <label for="password-init" class="main">Mot de passe <span
                                        class="required"></span></label>
                                <input id="password-init" type="password" name="password" placeholder="mot de passe">
                                <input id="password-force-register" type="hidden" name="force" value="">
                                <div class="validator">
                                </div>
                            </div>
                            <div class="form-info-pass">
                                <div class="rflex">

                                    <div class="f4 ">
                                        <div>
                                            Force du mot de passe
                                        </div>
                                    </div>
                                    <div class="f6">
                                        <div id="password-strength-validator" class="rflex ">
                                            <div class="f1 pass-strength pweak">faible</div>
                                            <div class="f1 pass-strength pmedium">moyen</div>
                                            <div class="f1 pass-strength pstrong">fort</div>

                                        </div>
                                        <div id="password-recommandation">

                                            <div class="vpad">Votre mode passe doit contenir 8 caractéres dont 1
                                                majuscules, 1 minuscule, 1 chiffre et un 1 caractére spécial.
                                                Voir les <a
                                                    href="https://www.cnil.fr/fr/authentification-par-mot-de-passe-les-mesures-de-securite-elementaires"
                                                    rel="noopener noreferrer" class='rgpd-link'
                                                    target="_blank">recommandations de la CNIL en matière de mots de
                                                    passe</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div>
                                <div class="valid-hint">
                                    La confirmation de votre mot de passe ne correspond pas
                                </div>
                                <label for="password-repeat" class="main">Confirmez le Mot de passe<span
                                        class="required"></span></label>
                                <input id="password-repeat" type="password" name="password-repeat"
                                    placeholder="mot de passe">
                                <div class="validator">
                                </div>
                            </div>

                            <div>
                                <div class="valid-hint">Vous devez entrer un code postal*</div>

                                <label for="postal" class="main">Votre code postal<span class='required'></span>
                                </label>

                                <input id="postal" type="text" name="postal" maxlength="5" placeholder="Code postal"
                                    value="">

                                <div class="validator">
                                </div>
                            </div>

                            <div>
                                <div>
                                    <div class="valid-hint">Vous devez entrer une ville</div>
                                    <label for="city" class="main">Votre ville<span class='required'></span> </label>

                                    <label for="city" class="select">
                                        <select id="city" name="city" disabled>
                                            <option value="enterPostcode">-- Entrez d'abord votre code postal --
                                            </option>
                                        </select>
                                    </label>

                                    <div class="validator"></div>
                                </div>

                                <div class="form-address">


                                    <div>
                                        <div class="valid-hint">Vous devez entrer un numero (sans bis/ter/etc...)</div>

                                        <label class="main">Votre adresse<span class='required'></span> </label>
                                        <input id="numero" type="text" name="numero" maxlength="7" placeholder="Numero"
                                            value="">
                                        <div class="validator"></div>

                                    </div>

                                    <div>


                                        <label class="main"> </label>

                                        <div class="autocomplete">
                                            <div class="valid-hint">Vous devez entrer une rue</div>
                                            <input id="street" type="text" name="street" maxlength="255"
                                                placeholder="votre rue" value="">
                                            <div id="streets" class="autocompleter" style="display:none"></div>
                                            <input id="streetid" type="hidden" name="streetid" value="">
                                            <div class="validator"></div>
                                        </div>

                                    </div>

                                    <div class="privacy">l'adresse ne sera pas visible pour les autres utilisateurs
                                    </div>
                                </div>



                            </div>







                            <div class="cgu">



                                <input id="cgu" type="checkbox" name="cgu">
                                <label for="cgu">
                                    J'ai lu et j'accepte les Conditions G&eacute;n&eacute;rales d'utilisation<span
                                        class='required'></span>
                                    <div class="cgu-right">(<a href="cgu.html" target="_blank">voir les cgu</a>)</div>


                                    <div class="validator">
                                    </div>
                                </label>



                            </div>

                            <div class="captcha-container">
                                <div class="g-recaptcha" data-sitekey="6LfhcwgTAAAAACvhL5shtor_gntjcxZSWM3aqb3a">
                                </div> <span class='required'></span>
                            </div>

                            <div>
                                <div class="valid-hint">
                                    Ce code semble invalide
                                </div>
                                <label for="code-promo" class="main">Code parrainage/promotion </label>
                                <input id="code-promo" type="text" name="code-promo" placeholder="votre code">
                                <div class="validator">
                                </div>
                            </div>

                            <div id="promotionDescription">
                            </div>

                            <div id="flash" class="flash" style="display:none">
                            </div>

                            <div class="form-button">
                                <div class="button valid-button">
                                    S'enregistrer
                                </div>
                            </div>
                            <div class="rgpdpad">
                                <span class='required'></span><span class="rgpd  italic">Données obligatoires</span>
                            </div>

                    </form>


                </div>


            </div>
            <div class="block-info-rgpd">
                Les donn&eacute;es à caract&egrave;re personnel collect&eacute;es font l'objet d'un traitement dont
                MyTroc est le responsable. <a id="show-popup-rgpd" class="rgpd-link show-popup-rgpd" href="#">En savoir
                    plus</a>
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
                <a href="https://support.google.com/chrome/answer/114662?hl=fr" target="_blank" rel="external nofollow">
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

<script type="text/javascript" charset="UTF-8" src="/js/script.js" async defer
    onload="jQueryReadyCB()"></script>


<!-- Mirrored from mytroc.fr/logout by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2023 15:18:21 GMT -->

</HTML>