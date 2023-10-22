<HTML lang="fr-FR">
@extends('FrontEnd.section.header')
@section('pageTitle', 'Organisations')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<div id="main">
    <div id="animation-banner" class="web">
        <div id="could-banner" class="no-overflow">
            <div id="cloud1" class="cloud">
                <img src='static/image/1px.png' data-load='/image/sketch/nuage1.svg' alt='nuage' class='svg'>
                <img src='static/image/1px.png' data-src='https://mytroc.fr/static/image/sketch/nuage1.png' alt='nuage' class='img'>
                <img src='static/image/1px.png' data-src='https://mytroc.fr/static/image/sketch/nuage1@2x.png' alt='nuage' class='retina'>
            </div>
            <div id="cloud2" class="cloud">
                <img src='static/image/1px.png' data-load='/image/sketch/nuage2.svg' alt='nuage' class='svg'>
                <img src='static/image/1px.png' data-src='https://mytroc.fr/static/image/sketch/nuage2.png' alt='nuage' class='img'>
                <img src='static/image/1px.png' data-src='https://mytroc.fr/static/image/sketch/nuage2@2x.png' alt='nuage' class='retina'>

            </div>
            <div id="cloud3" class="cloud">
                <img src='static/image/1px.png' data-load='/image/sketch/nuage3.svg' alt='nuage' class='svg'>
                <img src='static/image/1px.png' data-src='https://mytroc.fr/static/image/sketch/nuage3.png' alt='nuage' class='img'>
                <img src='static/image/1px.png' data-src='https://mytroc.fr/static/image/sketch/nuage3@2x.png' alt='nuage' class='retina'>

            </div>
            <div id="cloud4" class="cloud">
                <img src='static/image/1px.png' data-load='/image/sketch/nuage1.svg' alt='nuage' class='svg'>
                <img src='static/image/1px.png' data-src='https://mytroc.fr/static/image/sketch/nuage1.png' alt='nuage' class='img'>
                <img src='static/image/1px.png' data-src='https://mytroc.fr/static/image/sketch/nuage1@2x.png' alt='nuage' class='retina'>

            </div>
            <div id="cloud5" class="cloud">
                <img src='static/image/1px.png' data-load='/image/sketch/nuage2.svg' alt='nuage' class='svg'>
                <img src='static/image/1px.png' data-src='https://mytroc.fr/static/image/sketch/nuage2.png' alt='nuage' class='img'>
                <img src='static/image/1px.png' data-src='https://mytroc.fr/static/image/sketch/nuage2@2x.png' alt='nuage' class='retina'>

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
                resultsContainer.html('<h2>Aucune organisation ne correspond à votre recherche.</h2>');
            }
        }
    </script>