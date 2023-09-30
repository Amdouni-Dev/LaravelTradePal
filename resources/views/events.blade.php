
<!DOCTYPE html>
{{--@extends('FrontEnd.section.header')--}}
{{--@section('pageTitle', 'Noisette')--}}
<head>
    @livewireStyles
</head>
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
        <H1 class="title">Evenements</H1>

    </div>
<h1>Mounaaaaaaaaaaaaaaaaa</h1>
    <livewire:calendar />
    @livewireScripts
    @stack('scripts')



    <h1>Mounaaaaaaaaaaaaaaa</h1>
    <div class="content">


        <article class="troc">
            <div class="form-add-troc form-troc top-sep">
                <form id="add-troc">

                    <input type="hidden" name="mail" value="jenexistepas@jenexistepas.com">

                    <input id="onecub-troc" name="onecub-id" type="hidden" value="0">

                    <div class="add-top">

                        <div class="cols2 left">



                        </div>

                    </div>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>

                    <h1>Test</h1>
{{--                    <livewire:calendar />--}}
{{--                    @livewireScripts--}}
{{--                    @stack('scripts')--}}
                    <h1>Test</h1>

                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>

                    <div id="container-add-content">
                        <div class="cols2 left">
                            <div id="annonce-form">
                                <div id="category-type-selector" class="half">
                                    <H2>Type de troc</h2>

                                    <div class="type">
                                        <input id="type-offer" type="radio" name="type" class="troctype" value="1"
                                               checked>
                                        <label for="type-offer">Je propose</label>
                                        <input id="type-demand" type="radio" name="type" class="troctype" value="2">
                                        <label for="type-demand">Je recherche</label>
                                    </div>

                                    <H2 class="smart">Sorte de troc</h2>

                                    <div class="category-type ">
                                        <input id="type-bien" type="radio" name="categorytype" class="troccategorytype"
                                               value="bien">
                                        <label for="type-bien">Bien</label>
                                        <input id="type-service" type="radio" name="categorytype"
                                               class="troccategorytype" value="service">
                                        <label for="type-service">Service</label>
                                        <input id="type-pret" type="radio" name="categorytype" class="troccategorytype"
                                               value="pret">
                                        <label for="type-pret">Pr&ecirc;t</label>
                                        <input id="type-don" type="radio" name="categorytype" class="troccategorytype"
                                               value="don">
                                        <label for="type-don">Don</label>
                                    </div>


                                </div>
                                <div id="category-selector" class="half">
                                    <H2>Cat&eacute;gories</h2>



                                    <div id="category-selector-1" class="category-selector">
                                        <div>
                                            <label class="select" style="">
                                                <select id="CategoryLvl1" name="cat1-1" class="category level1">
                                                    <option value="rien" selected disabled class="noval">Choisissez une
                                                        cat&eacute;gorie</option>

                                                    <option value="alimentation">Alimentation</option>

                                                    <option value="animaux">Animaux</option>

                                                    <option value="art-et-spectacles">Arts et spectacles</option>

                                                    <option value="collections">Collectionneurs</option>

                                                    <option value="service-et-coup-de-main">Coup de main</option>

                                                    <option value="bricolage">Bricolage</option>

                                                    <option value="beaute-et-bien-etre">Beaut&eacute; / Bien &ecirc;tre
                                                    </option>

                                                    <option value="enfance">Enfance</option>

                                                    <option value="informatique-mutlimedia">Informatique /
                                                        Multim&eacute;dia</option>

                                                    <option value="jardins-et-plantes">Jardin et Plantes</option>

                                                    <option value="maison">Maison</option>

                                                    <option value="vacances">Vacances / Week-end</option>

                                                    <option value="livre-cd-dvd">Livre / CD / DVD</option>

                                                    <option value="vetements-et-accessoires">V&ecirc;tements et
                                                        accessoires</option>

                                                    <option value="sport-et-loisir">Sports et Loisirs</option>

                                                    <option value="transport-et-vehicule">Transport / V&eacute;hicules
                                                    </option>

                                                    <option value="vide-grenier">Tout &agrave; une noisette&nbsp;!
                                                    </option>

                                                    <option value="autre">Autre</option>

                                                </select>
                                            </label>

                                        </div>
                                        <div>
                                            <label class="select" style="display:none">
                                                <select id="CategoryLvl2" name="cat2-1" class="category level2">

                                                </select>
                                            </label>
                                        </div>
                                        <div>
                                            <label class="select" style="display:none">
                                                <select id="CategoryLvl3" name="cat3-1" class="category level3">

                                                </select>
                                            </label>
                                        </div>
                                    </div>

                                    <div id="second-category">
                                        <div>
                                            <div id="addCategory2" class="category-button">+ Ajouter une
                                                cat&eacute;gorie </div>
                                            <div id="delCategory2" class="category-button">+ Supprimer une
                                                cat&eacute;gorie </div>
                                        </div>


                                        <div id="category-selector-2" class="category-selector">
                                            <div>
                                                <label class="select" style="">
                                                    <select id="CategoryLvl1" name="cat1-2" class="category level1">
                                                        <option value="rien" selected disabled class="noval">Choisissez
                                                            une cat&eacute;gorie</option>

                                                        <option value="alimentation">Alimentation</option>

                                                        <option value="animaux">Animaux</option>

                                                        <option value="art-et-spectacles">Arts et spectacles</option>

                                                        <option value="collections">Collectionneurs</option>

                                                        <option value="service-et-coup-de-main">Coup de main</option>

                                                        <option value="bricolage">Bricolage</option>

                                                        <option value="beaute-et-bien-etre">Beaut&eacute; / Bien
                                                            &ecirc;tre</option>

                                                        <option value="enfance">Enfance</option>

                                                        <option value="informatique-mutlimedia">Informatique /
                                                            Multim&eacute;dia</option>

                                                        <option value="jardins-et-plantes">Jardin et Plantes</option>

                                                        <option value="maison">Maison</option>

                                                        <option value="vacances">Vacances / Week-end</option>

                                                        <option value="livre-cd-dvd">Livre / CD / DVD</option>

                                                        <option value="vetements-et-accessoires">V&ecirc;tements et
                                                            accessoires</option>

                                                        <option value="sport-et-loisir">Sports et Loisirs</option>

                                                        <option value="transport-et-vehicule">Transport /
                                                            V&eacute;hicules</option>

                                                        <option value="vide-grenier">Tout &agrave; une noisette&nbsp;!
                                                        </option>

                                                        <option value="autre">Autre</option>

                                                    </select>
                                                </label>

                                            </div>
                                            <div>
                                                <label class="select" style="display:none">
                                                    <select id="CategoryLvl2" name="cat2-2" class="category level2">

                                                    </select>
                                                </label>
                                            </div>
                                            <div>
                                                <label class="select" style="display:none">
                                                    <select id="CategoryLvl3" name="cat3-2" class="category level3">

                                                    </select>
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                    <div id="third-category">
                                        <div>
                                            <div id="addCategory3" class="category-button">+ Ajouter une
                                                cat&eacute;gorie </div>
                                            <div id="delCategory3" class="category-button">+ Supprimer une
                                                cat&eacute;gorie </div>
                                        </div>


                                        <div id="category-selector-3" class="category-selector">
                                            <div>
                                                <label class="select" style="">
                                                    <select id="CategoryLvl1" name="cat1-3" class="category level1">
                                                        <option value="rien" selected disabled class="noval">Choisissez
                                                            une cat&eacute;gorie</option>

                                                        <option value="alimentation">Alimentation</option>

                                                        <option value="animaux">Animaux</option>

                                                        <option value="art-et-spectacles">Arts et spectacles</option>

                                                        <option value="collections">Collectionneurs</option>

                                                        <option value="service-et-coup-de-main">Coup de main</option>

                                                        <option value="bricolage">Bricolage</option>

                                                        <option value="beaute-et-bien-etre">Beaut&eacute; / Bien
                                                            &ecirc;tre</option>

                                                        <option value="enfance">Enfance</option>

                                                        <option value="informatique-mutlimedia">Informatique /
                                                            Multim&eacute;dia</option>

                                                        <option value="jardins-et-plantes">Jardin et Plantes</option>

                                                        <option value="maison">Maison</option>

                                                        <option value="vacances">Vacances / Week-end</option>

                                                        <option value="livre-cd-dvd">Livre / CD / DVD</option>

                                                        <option value="vetements-et-accessoires">V&ecirc;tements et
                                                            accessoires</option>

                                                        <option value="sport-et-loisir">Sports et Loisirs</option>

                                                        <option value="transport-et-vehicule">Transport /
                                                            V&eacute;hicules</option>

                                                        <option value="vide-grenier">Tout &agrave; une noisette&nbsp;!
                                                        </option>

                                                        <option value="autre">Autre</option>

                                                    </select>
                                                </label>

                                            </div>
                                            <div>
                                                <label class="select" style="display:none">
                                                    <select id="CategoryLvl2" name="cat2-3" class="category level2">

                                                    </select>
                                                </label>
                                            </div>
                                            <div>
                                                <label class="select" style="display:none">
                                                    <select id="CategoryLvl3" name="cat3-3" class="category level3">

                                                    </select>
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div id="legals">

                                    <div class="category-specials pets" data-category="adoption-animaux"
                                         style="display:none">
                                        <div class="intro-pet">
                                            Depuis le 1er janvier 2016, les règles concernant l'adoption des animaux
                                            sont renforcées pour garantir leur santé, leur bien-être et assurer une
                                            traçabilité dans la filière.

                                        </div>
                                        <div>
                                            <div>
                                                <label for="birth-date" class="pet-label">Date de naissance</label>
                                                <input id="birthdate" class="input-date" type="text" value="">
                                            </div>
                                            <div>
                                                <label for="identification" class="pet-label">N° Identification</label>
                                                <input id="identification" class="input" type="text"
                                                       placeholder="XXXXXXXXXX" value="">
                                            </div>
                                            <div>

                                                <label for="select-pedigree" class="pet-label">Pedigree</label>
                                                <label for="select-pedigree" class="select">
                                                    <select id="select-pedigree" name="pedigree">
                                                        <option value="1" selected>
                                                            Non - Aucun pedigree </option>

                                                        <option value="2">
                                                            LOF - ( Chiens ) </option>

                                                        <option value="3">
                                                            LOOF - ( Chats ) </option>

                                                        <option value="4">
                                                            Oui - Autre pedigree </option>


                                                    </select>
                                                </label>
                                            </div>
                                            <div>
                                                <label for="select-sibling" class="pet-label">B&eacute;b&eacute;s dans
                                                    la port&eacute;e</label>
                                                <label for="select-sibling" class="select">
                                                    <select id="select-sibling" name="sibling">

                                                        <option value='1' selected>1</option>

                                                        <option value='2'>2</option>

                                                        <option value='3'>3</option>

                                                        <option value='4'>4</option>

                                                        <option value='5'>5</option>

                                                        <option value='6'>6</option>

                                                        <option value='7'>7</option>

                                                        <option value='8'>8</option>

                                                        <option value='9'>9</option>

                                                        <option value='10'>10</option>

                                                        <option value='11'>11</option>

                                                        <option value='12'>12</option>

                                                        <option value='13'>13</option>

                                                        <option value='14'>14</option>
                                                    </select>
                                                </label>

                                            </div>
                                        </div>

                                        <div class="warning-pet">
                                            Seuls les animaux identifiés et âgés de plus de huit semaines peuvent être
                                            adopt&eacute;s, un certificat vétérinaire doit être fournit a l'adoptant.
                                        </div>

                                    </div>
                                    <div class="category-specials pets center" data-category="adoption-animaux"
                                         style="display:none">
                                        <a href="loi-animaux.html" target="_blank">Plus d'informations sur l'adoption
                                            ici</a>
                                    </div>
                                </div>
                                <div class="localisation">
                                    <H2>Localisation</h2>

                                    <div>
                                        <div class="valid-hint">Vous devez entrer un code postal*</div>

                                        <label for="postal" class="main">Code postal </label>

                                        <input id="postal" type="text" name="postal" maxlength="5"
                                               placeholder="Code postal" value="">

                                        <div class="validator">
                                        </div>
                                    </div>

                                    <div>
                                        <div class="valid-hint">Vous devez entrer une ville</div>
                                        <label for="city" class="main">ville </label>

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
                                            <div class="valid-hint">Vous devez entrer un numero (sans bis/ter/etc...)
                                            </div>

                                            <label class="main">N° </label>
                                            <input id="numero" type="text" name="numero" maxlength="7"
                                                   placeholder="Numero" value="">
                                            <div class="validator"></div>

                                        </div>

                                        <div>


                                            <label class="main">Rue </label>

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

                                <div>
                                    <H2>Annonce</h2>
                                </div>

                                <!-- form upload -->
                                <div class="upload-images-block">

                                    <div id="im1" class="square im-but">
                                        <div class="square-content">
                                            <div id="upload-im-button-1" class="upload-im-button"
                                                 data-post="image-upload-1">
                                                <label for="image-input-1" class="button-img image-input">
                                                    <div class='sprites icones'> <img src='static/image/1px.png'
                                                                                      data-src='/static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8.png'
                                                                                      class='img ic-mat-pix' alt='camera'> <img
                                                            src='static/image/1px.png'
                                                            data-src='/static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8@2x.png'
                                                            class='retina ic-mat-pix' alt='camera'> <img
                                                            src='static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg'
                                                            class='svg ic-mat-pix' alt='camera'></div>
                                                </label>
                                                <div id="upload-img-error-1" class="upload-img-error flash2"
                                                     style="display:none"></div>
                                            </div>

                                            <input id="img1" name="imgs[0]" type="hidden">

                                            <div id="previews-1" class="previews">
                                                <div id="preview-1" class="preview"> </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="im2" class="square im-but">
                                        <div class="square-content">
                                            <div id="upload-im-button-2" class="upload-im-button"
                                                 data-post="image-upload-2">
                                                <label for="image-input-2" class="button-img image-input">
                                                    <div class='sprites icones'> <img src='static/image/1px.png'
                                                                                      data-src='/static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8.png'
                                                                                      class='img ic-mat-pix' alt='camera'> <img
                                                            src='static/image/1px.png'
                                                            data-src='/static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8@2x.png'
                                                            class='retina ic-mat-pix' alt='camera'> <img
                                                            src='static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg'
                                                            class='svg ic-mat-pix' alt='camera'></div>
                                                </label>
                                                <div id="upload-img-error-2" class="upload-img-error flash2"
                                                     style="display:none"></div>
                                            </div>

                                            <input id="img2" name="imgs[1]" type="hidden">

                                            <div id="previews-2" class="previews">
                                                <div id="preview-2" class="preview"> </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="im3" class="square im-but">
                                        <div class="square-content">
                                            <div id="upload-im-button-3" class="upload-im-button"
                                                 data-post="image-upload-3">
                                                <label for="image-input-3" class="button-img image-input">
                                                    <div class='sprites icones'> <img src='static/image/1px.png'
                                                                                      data-src='/static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8.png'
                                                                                      class='img ic-mat-pix' alt='camera'> <img
                                                            src='static/image/1px.png'
                                                            data-src='/static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8@2x.png'
                                                            class='retina ic-mat-pix' alt='camera'> <img
                                                            src='static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg'
                                                            class='svg ic-mat-pix' alt='camera'></div>
                                                </label>
                                                <div id="upload-img-error-3" class="upload-img-error flash2"
                                                     style="display:none"></div>
                                            </div>

                                            <input id="img3" name="imgs[2]" type="hidden">

                                            <div id="previews-3" class="previews">
                                                <div id="preview-3" class="preview"> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="troc-add-content">
                                <div id="troc-title">
                                    <label for="title">Titre </label>
                                    <div class="fright">
                                        <input id="title" type="text" name="title" maxlength="65"
                                               placeholder="Titre du troc">
                                        <div class="validator"></div>
                                    </div>
                                    <div class="clear"></div>
                                </div>



                                <div id="troc-content">
                                    <label for="content">Description </label>
                                    <div class="fright">

                                        <textarea id="content"
                                                  placeholder="La description de votre troc ici..."></textarea>
                                        <div class="validator"></div>
                                    </div>
                                    <div class="clear"></div>
                                </div>


                                <div class="bar">

                                    <div id="troc-price">
                                        <label for="price">Nombre de </label>
                                        <div class='sprites icones'> <img src='static/image/1px.png'
                                                                          data-src='/static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8.png'
                                                                          class='img nuts' alt='noisette'> <img src='static/image/1px.png'
                                                                                                                data-src='/static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8@2x.png'
                                                                                                                class='retina nuts' alt='noisette'> <img
                                                src='static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg'
                                                class='svg nuts' alt='noisette'></div> <input id="price" type="text"
                                                                                              name="price" maxlength="6" placeholder="noisettes" value="">

                                        <div class="validator"></div>
                                    </div>

                                    <div class="form-button">
                                        <div class="button valid-button">
                                            <div class=" waves waves-prune">
                                                Ajouter
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="flash" class="flash" style="display:none"></div>

                            </div>

                        </div>

                        <div id="illustration-add-troc" class="web">
                            <div id="tree">

                                <img src='static/image/1px.png'
                                     data-load='/image/sketch/arbre_optim.svg' alt='arbre'
                                     class='svg'>
                                <img src='static/image/1px.png'
                                     data-src='/static/image/sketch/arbre_optim.png' alt='arbre'
                                     class='img'>
                                <img src='static/image/1px.png'
                                     data-src='/static/image/sketch/arbre_optim@2x.png' alt='arbre'
                                     class='retina'>

                            </div>

                            <div class="bubble">
                                Si tu ne sais pas combien mettre de noisettes pour troquer, regarde
                                <a href="/bareme">
                                    <div class=" waves waves-prune"> le bar&egrave;me&nbsp;!</div>
                                </a>
                            </div>
                            <div class="web illu-add-troc">

                                <img src='static/image/1px.png'
                                     data-load='/image/sketch/velo_bleu.svg' alt='velo' class='svg'>
                                <img src='static/image/1px.png'
                                     data-src='/static/image/sketch/velo_bleu.png' alt='velo'
                                     class='img'>
                                <img src='static/image/1px.png'
                                     data-src='/static/image/sketch/velo_bleu@2x.png' alt='velo'
                                     class='retina'>
                            </div>

                        </div>
                    </div>
                </form>
                <div class="dnone">


                    <form id="image-upload-1" method="post"   target="targetUpload"  enctype="multipart/form-data">
                        <input id="image-input-1" class="image-input" data-index="1" type="file" name="piix"  accept="image/*">
                        <input type="hidden"  name="index"  value="1">
                        <input type="hidden"  name="tid"  value="">

                        <input type="hidden" name="MAX_FILE_SIZE" value="20000000" />
                    </form>


                    <form id="image-upload-2" method="post"   target="targetUpload"  enctype="multipart/form-data">
                        <input id="image-input-2" class="image-input" data-index="2" type="file" name="piix"  accept="image/*">
                        <input type="hidden"  name="index"  value="2">
                        <input type="hidden"  name="tid"  value="">

                        <input type="hidden" name="MAX_FILE_SIZE" value="20000000" />
                    </form>


                    <form id="image-upload-3" method="post"   target="targetUpload"  enctype="multipart/form-data">
                        <input id="image-input-3" class="image-input" data-index="3" type="file" name="piix"  accept="image/*">
                        <input type="hidden"  name="index"  value="3">
                        <input type="hidden"  name="tid"  value="">

                        <input type="hidden" name="MAX_FILE_SIZE" value="20000000" />
                    </form>
                    <iframe id="targetUpload" name="targetUpload"></iframe>

                    <div id="hidden-waiter">
                        <img src='../cf.mytroc.fr/image/wait.gif'  class=''>
                    </div>

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
												"@id" : "/ajouter-un-troc",
												"name": "Ajouter un troc"
											}
										}

										]
									}
								</script>

        </article>


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
@extends('FrontEnd.section.footer')

</HTML>
