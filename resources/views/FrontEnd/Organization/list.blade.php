<HTML lang="fr-FR">
@extends('FrontEnd.section.header')
@section('pageTitle', 'Organisations')
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
        <h1 class="title">Listes des organisations</h1>
        <div id="engine-in-progress">
        </div>
    </div>


    <!--Filters-->
    <div id="search-bar">
        <div class="search-bar-container top-sep">
            <form class="search-bar" data-dashlane-rid="d26e20a5b70074e5" data-form-type="search">

                <div class="search-fields">


                    <div class="buttons half">
                        <input id="request" type="search" placeholder="ENTREZ VOTRE RECHERCHE..." name="search" value="" data-dashlane-rid="9c8522c96583e812" data-form-type="query">
                        <div class="form-button ">
                            <div class="button valid-button" id="trigger-search">
                                <div class="waves waves-prune">
                                    <div class="sprites icones"> <img src="/image/sprites/icons/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg" class="svg ic-search" alt="recherche"></div> <span>valider</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="buttons quarter">
                        trier par <label id="sort-select" for="sort" class="select" data-dashlane-label="true">
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
                    <div>
                        <div>
                            <label for="search-type-troc" class="select" data-dashlane-label="true">
                                <select id="select-type-troc" name="typeTroc" data-dashlane-rid="288097ceca913e04" data-form-type="other">

                                    <option value="3" selected="">
                                        Offres et Recherches </option>

                                    <option value="1">
                                        Ils offrent </option>
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
                                        Biens/Services/Prêts/Dons </option>

                                    <option value="1">
                                        Biens </option>
                                    <option value="2">
                                        Services </option>
                                    <option value="3">
                                        Prêts </option>
                                    <option value="4">
                                        Dons </option>
                                </select>
                            </label>
                        </div>
                    </div>
                    <div>



                        <div id="category-selector-1" class="category-selector">
                            <div>
                                <label class="select" data-dashlane-label="true">
                                    <select id="CategoryLvl1" name="cat1-1" class="category level1" data-dashlane-rid="d0da3d428941869d" data-form-type="other">

                                        <option value="toute">Tous les secteurs d'activité</option>
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
                    </div>
                </div>
        </div>

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
            <div class="sprites s-arrows"> <img src="/image/univers/300x200/17b030fbd59a8d2faabfeef314a30b40.svg" class="svg sarrow-left-white" alt="arrow left white"></div>
        </div>
        <div id="search-results-container">

            <ul>
                @if(!empty($organizations))
                @foreach ($organizations as $organization)
                <li>
                    <div class="two-third waves">
                        <a href="{{ route('organizations.show', $organization) }}">
                            <div class="two-third-content">
                                <img src="/organization_logos/{{$organization->logo}}" alt="{{$organization->name}}">
                                <h3 class="first">{{$organization->name}}</h3>
                                <div class="caption">
                                    <h3>{{$organization->name}}</h3>
                                    <div>
                                        <p>{{$organization->description}}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                @endforeach
                @endif
            </ul>
        </div>
        <div class="next">
            <div class="sprites s-arrows"> <img src="/image/univers/300x200/17b030fbd59a8d2faabfeef314a30b40.svg" class="svg sarrow-right-white" alt="arrow right white"></div>
        </div>
    </div>
</div>

@extends('FrontEnd.section.footer')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#request').on('input', function() {
            var searchTerm = $(this).val();

            $.ajax({
                url: '/search-organizations',
                method: 'GET',
                data: {
                    search: searchTerm
                },
                success: function(data) {
                    displaySearchResults(data);
                },
                error: function(error) {
                    console.error(error);
                }
            });
        });
    });

    function displaySearchResults(results) {
        var resultsContainer = $('#search-results-container');
        resultsContainer.empty();

        if (results.length > 0) {
            var ul = $('<ul></ul>');

            results.forEach(function(organization) {
                var li = `
                <li>
                    <div class="two-third waves">
                        <a href="${organization.website}">
                            <div class="two-third-content">
                                <img src="/organization_logos/${organization.logo}" alt="${organization.name}">
                                <h3 class="first">${organization.name}</h3>
                                <div class="caption">
                                    <h3>${organization.name}</h3>
                                    <div>
                                        <p>${organization.description}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
            `;
                ul.append(li);
            });

            resultsContainer.append(ul);
        } else {
            resultsContainer.html('<p>No organizations found.</p>');
        }
    }
</script>
