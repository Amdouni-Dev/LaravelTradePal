!DOCTYPE html>
@extends('FrontEnd.section.header')
@section('pageTitle', 'Profile')
<style>
 .alignInput{
    position: relative;
    right: 15%;
    width: 62%;
 }
</style>
<div id="main">
    <div id="animation-banner" class="web">
        <div id="could-banner" class="no-overflow">
            <div id="cloud1" class="cloud">
                <img src='static/image/1px.png' data-load='/image/sketch/nuage1.svg' alt='nuage' class='svg'>
                <img src='static/image/1px.png' data-src='/static/image/sketch/nuage1.png' alt='nuage'
                    class='img'>
                <img src='static/image/1px.png' data-src='/static/image/sketch/nuage1@2x.png' alt='nuage'
                    class='retina'>
            </div>
            <div id="cloud2" class="cloud">
                <img src='static/image/1px.png' data-load='/image/sketch/nuage2.svg' alt='nuage' class='svg'>
                <img src='static/image/1px.png' data-src='/static/image/sketch/nuage2.png' alt='nuage'
                    class='img'>
                <img src='static/image/1px.png' data-src='/static/image/sketch/nuage2@2x.png' alt='nuage'
                    class='retina'>
            </div>
            <div id="cloud3" class="cloud">
                <img src='static/image/1px.png' data-load='/image/sketch/nuage3.svg' alt='nuage' class='svg'>
                <img src='static/image/1px.png' data-src='/static/image/sketch/nuage3.png' alt='nuage'
                    class='img'>
                <img src='static/image/1px.png' data-src='/static/image/sketch/nuage3@2x.png' alt='nuage'
                    class='retina'>
            </div>
            <div id="cloud4" class="cloud">
                <img src='static/image/1px.png' data-load='/image/sketch/nuage1.svg' alt='nuage' class='svg'>
                <img src='static/image/1px.png' data-src='/static/image/sketch/nuage1.png' alt='nuage'
                    class='img'>
                <img src='static/image/1px.png' data-src='/static/image/sketch/nuage1@2x.png' alt='nuage'
                    class='retina'>

            </div>
            <div id="cloud5" class="cloud">
                <img src='static/image/1px.png' data-load='/image/sketch/nuage2.svg' alt='nuage' class='svg'>
                <img src='static/image/1px.png' data-src='/static/image/sketch/nuage2.png' alt='nuage'
                    class='img'>
                <img src='static/image/1px.png' data-src='/static/image/sketch/nuage2@2x.png' alt='nuage'
                    class='retina'>

            </div>
        </div>
        <H1 class="title">Bar&egrave;me</H1>
    </div>
    <div class="content">
        <div class="my-profile top-sep">
            <div id="tree">
                <img src="./Troc et consommation responsable sur MyTroc.fr_files/arbre_optim.svg" alt="arbre"
                    class="svg">
            </div>
            <nav class="profile-menu">
                <ul>
                    <li class="   ">
                        <div class="pancarte even ">
                            <a href="/inbox">
                                <div class="pancarte-content">
                                    <img src="/image/sketch/oiseau_right_up.svg" alt="oiseau" class="bird web svg">
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
                            <a href="/mes-trocs">
                                <div class="pancarte-content">
                                    <div class="link waves">Mes trocs</div>
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
                            <a href="/mes-noisettes">
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
                            <a href="/agrandir-la-communaute-mytroc">
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
                            <a href="/parrainages">
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
                            <a href="/dons-aux-associations">
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
                    <li class=" active  ">
                        <div class="pancarte even ">
                            <a href="/modifier-mon-profil">
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
            <article class="profil-modify" style="max-width: 4096px;">
                <div class="container">
                    <div id="illustration-mod-profil">
                        <div id="tree" class="web">
                            <img src="/image/sketch/arbre_optim.svg" alt="arbre" class="svg">
                        </div>
                        <div id="bike" class="web illu-add-troc">
                            <img src="/image/sketch/velo_bleu.svg" alt="bike" class="svg">
                        </div>
                    </div>
                    <div>
                        <h2>Mes informations</h2>
                        <form method="PUT" action="{{route('profile.update')}}" id="update-description" class="update-description"
                            data-form-type="">
                            <table style="width:45rem">
                                <tr>
                                    <td>
                                        <label for="postal" class="main">Nom </label>
                                    </td>
                                    <td>
                                        <input id="postal" type="text" name="name" maxlength="5" class="alignInput"
                                            placeholder="nom" value="{{ auth()->user()->name }}"
                                            data-form-type="address,zip">
                                    </td>
                                </tr>
                                <td>
                                    <label for="postal" class="main">Nom d'uitilisateur</label>
                                </td>
                                <td>
                                    <input id="postal" type="text" name="username" maxlength="5" class="alignInput"
                                        placeholder="Nom d'uitilisateur" value="{{ auth()->user()->username }}"
                                        data-dashlane-rid="7cfdf5831a48389d">
                                </td>
                                </tr>
                                <td>
                                    <label for="postal" class="main">Adresse électronique</label>
                                </td>
                                <td>
                                    <input id="postal" type="text" name="email" maxlength="5" class="alignInput"
                                        placeholder="Adresse électronique" value="{{ auth()->user()->email }}"
                                        data-dashlane-rid="7cfdf5831a48389d">
                                </td>
                                </tr>
                                <td>
                                    <label for="postal" class="main">Télephone</label>
                                </td>
                                <td>
                                    <input id="Télephone" type="text" name="phone" maxlength="5" class="alignInput"
                                        placeholder="Adresse électronique" value="{{ auth()->user()->phone }}"
                                        data-dashlane-rid="7cfdf5831a48389d">
                                </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="postal" class="main">Description</label>
                                    </td>
                                    <td>
                                        <textarea id="description" name="bio" placeholder="Décrivez vous en quelque mot!" class="alignInput"
                                            data-dashlane-rid="41a69df59f5bea3f" data-form-type="">{{ auth()->user()->bio }}</textarea>
                                        <div class="flash"></div>
                                        <div class="tright">
                                            <div class="form-button">
                                                <div class="button valid-button">
                                                <button type="submit" class="button valid-button">
                                                    Modifier</button>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                <tr>
                            </table>
                        </form>
                    </div>
                    
                    <div>
                        <h2>Mon mot de passe</h2>
                        <form id="updatepassword" class="input-block" data-dashlane-rid="aa2eded5831184f2"
                            data-form-type="change_password">
                            <div>
                                <label for="old-password" class="main" class="alignInput">Ancien mot de passe : </label>
                                <input id="old-password" type="password" name="oldpass"
                                    placeholder="ancien mot de passe" data-dashlane-rid="9842692f8d3b7736"
                                    data-form-type="password">
                                <div class="valid-hint">Vous devez entrer votre ancien mot de passe</div>
                            </div>
                            <div>
                                <label for="password" class="main" class="alignInput">Nouveau mot de passe : </label>
                                <input id="password" type="password" name="password"
                                    placeholder="nouveau mot de passe" data-dashlane-rid="135e9aa8b598acc4"
                                    data-form-type="password,new">
                                <input id="password-force" type="hidden" name="force" value="">
                                <div class="valid-hint">Vous devez entrer votre ancien mot de passe</div>
                            </div>
                            <div class="form-info-pass">
                                <div class="rflex">
                                    <div class="f5 force-info ">
                                        <div>
                                            Force du mot de passe :
                                        </div>
                                    </div>
                                    <div class="f5">
                                        <div id="password-strength-validator" class="rflex ">
                                            <div class="f1 pass-strength pweak">faible</div>
                                            <div class="f1 pass-strength pmedium">moyen</div>
                                            <div class="f1 pass-strength pstrong">fort</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label for="password-repeat" class="main" class="alignInput">Nouveau mot de passe : </label>
                                <input id="password-repeat" type="password" name="password-repeat"
                                    placeholder="nouveau mot de passe" data-dashlane-rid="94cbabca3331f85d"
                                    data-form-type="password,confirmation">
                                <div class="valid-hint">Vous devez entrer votre nouveau mot de passe (minimum 6
                                    caratéres)</div>
                            </div>
                            <div class="flash"></div>
                            <div class="form-button">
                                <div class="button valid-button">
                                    Modifier
                                </div>
                            </div>
                        </form>
                    </div>
                    <div>
                        <h2>Paramètres du compte</h2>
                        <form id="modify-params">
                            <div class="form-button">
                                <div id="popup-compte-params" class="button valid-button popup-button">
                                    Modifier
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </article>
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
