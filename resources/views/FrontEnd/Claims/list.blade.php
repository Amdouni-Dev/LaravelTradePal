<HTML lang="fr-FR">
<head>
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
        <h1 class="title">Signalez Un Problème !</h1>
        <div id="engine-in-progress">

        </div>

    </div>

    <div id="search-bar">
        <div class="search-bar-container top-sep">
            <form class="search-bar" data-dashlane-rid="d26e20a5b70074e5" data-form-type="search">
                <div class="search-fields">
                    <div class="buttons half">
                        <input id="request" type="search" placeholder="ENTREZ VOTRE RECHERCHE..." name="search" value="" data-dashlane-rid="9c8522c96583e812" data-form-type="query">
                        <div class="form-button">
                            <div class="button valid-button" id="trigger-search">
                                <div class="waves waves-prune">
                                    <div class="sprites icones">
                                        <img src="/image/sprites/icons/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg" class="svg ic-search" alt="recherche">
                                    </div>
                                    <span>valider</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="buttons quarter">

<!------------------------------------------------------------------ADD CLAIM-->
                       <div style="margin-bottom: 60px">
                        <label id="sort-select" for="sort" hidden="hidden" class="select" data-dashlane-label="true" >
                            <select id="sort" name="sort" data-dashlane-rid="f784bac106b2bca5" data-form-type="other">
                                <option value="1">les plus récentes</option>
                                <option value="2">par distance</option>
                            </select>
                        </label></div>
                </div>
                    <div class="buttons quarter">
                        <a class="log-button" href="{{ route('claim.create') }}" style="margin-top: 90px; margin-right: 215px">Ajouter</a>
                    </div>

                </div>
            </form><br><br>

        </div>
    </div>
</div>

<article class="search">

    <div id="reminder-login"></div>

    <div id="troc-list-result-search" class="troc-list">

        <div class="main-title">Liste Des Réclamations </div>

        <ul id="search-result">
            @if(!empty($userClaims) && $userClaims->count() > 0)
            @foreach ($userClaims as $claim)
            <li class="troc-resume ">
                <div class="c1 square">
                    <div class="square-content">
                        <a class="waves waves-prune">
                            <img src="/claims/{{$claim->claimImage}}" alt="{{$claim->subject}}">
                        </a>                    </div>
                </div>
                <div class="c2" style="margin-top: 25px; margin-left: 5px;position: relative;">
                    <form method="POST"  id="delete-form" action="{{ route('delete', $claim->id) }}">
                        @csrf
                        @method('DELETE')
                        <a class="delete-button" style="position: absolute; top: -15px; right: -1px; text-decoration: none; color: #ad1328; font-size: 35px;" onclick="return confirmDelete();">&times;</a>

                    </form>

                    <h2><a class="waves waves-prune" href="{{ route('claims.show', ['id' => $claim->id]) }}"><span>{{ $claim->subject }}</span></a></h2>

                    <div class="fields">
                        <div class="right">

                            <div class="right relative ">
                                <div class="price right    price-nuts">
                                    <div class="corner top">
                                    </div>
                                    <div class="inner">{{$claim->status}}<div class="sprites icones">
                                            <img src="/image/sprites/icons/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg" class="svg nuts" alt="noisette"></div></div>
                                    <div class="corner bottom">
                                    </div>
                                    <div class="tail">
                                        <div class="tail-body">
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="left">
                            <div>
                                <div class="catType">
                                    <div class="author">
                                        <a class="waves waves-prune"><span>Soumise à </span></a>
                                    </div>
                                   {{$claim->claim_date}}									</div>

                            </div>

                            <div class="author">
                                <a class="waves waves-prune"><span>Description</span></a>
                            </div>
                        </div>

                    </div>


                    <div class="troc-content">
                        <a class="waves waves-prune">
                            <p>{{$claim->description}}</p>
                        </a>
                    </div>
                </div>

            </li>
            @endforeach
            {{ $userClaims->links() }}
            @else
            <div class="main-title" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);font-size: 30px">Aucune réclamation à afficher !</div>
            @endif


        </ul>



        <div class="pagination bottom">
            {{ $userClaims->links() }}
        </div>


    </div>



</article><br><br><br><br><br><br><br>


@extends('FrontEnd.Section.footer')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

<script>
    function confirmDelete() {
        if (confirm("Voulez-vous vraiment supprimer cette réclamation ?")) {

            document.getElementById('delete-form').submit();
        } else {

            return false;
        }
    }
</script>



</body>
</HTML>

