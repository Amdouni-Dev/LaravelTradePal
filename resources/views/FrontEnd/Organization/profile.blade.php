<head>
    <link rel="stylesheet" href="/back/assets/vendor/fonts/boxicons076f.css?id=b821a646ad0904f9218f56d8be8f070c" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
@section('pageTitle', $organization->name)

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
                                    @if(filter_var($organization->logo, FILTER_VALIDATE_URL))
                                    <img src="{{ $organization->logo }}" alt="organization logo">
                                    @else
                                    <img src="/organization_logos/{{ $organization->logo }}" alt="organization logo">
                                    @endif
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
                    <div>
                        <div class="smart-half">
                            <div class="donation-score smart-half">
                                <span>{{ round($organization->total_donations) }}
                                </span>
                                <div class="sprites icones"> <img src="/image/sprites/icons/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg" class="svg nuts" alt="noisette"></div>collectées
                            </div>
                        </div>
                        @auth
                        <div class="profil-space">
                            <div class="smart-half">
                                <div>
                                    <form class="donation-form">
                                        <div class="form-button">
                                            <div class="button valid-button" id="open-popup-button">
                                                <span>Faire Un Don</span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @else
                        <form class="donation-form">
                            <div class="form-button">
                                <a href="{{ route('login') }}" class="button valid-button">
                                    <span>Faire Un Don</span>
                                </a>
                            </div>
                        </form>
                        @endauth
                        <div class="modal" id="donation-popup">
                            <div class="modal-content">
                                <span class="modal-close" id="close-popup-button">&times;</span>
                                <form id="donation-form" method="POST" action="/donations/add">
                                    @csrf
                                    <h3>Sélectionnez le type de votre don :</h3>
                                    <input type="radio" id="don_objet" name="donation_type" value="don_objet">
                                    <label for="don_objet">Don d'un objet</label>
                                    <input type="radio" id="don_noisettes" name="donation_type" value="don_noisettes">
                                    <label for="don_noisettes">Don de noisettes</label>
                                    <div id="don_objet_section" style="display: none;">
                                        <p>Liste de vos objets publiés :</p>
                                        <select name="object">
                                            <option value="0">Sélectionnez votre objet</option>
                                            @foreach($items as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div id="don_noisettes_section" style="display: none;">
                                        <label for="amount">Entrer le montant que vous souhaitez donner :</label>
                                        @if (auth()->check())
                                        <input type="number" name="amount" max="{{ auth()->user()->hazelnuts }}">
                                        @endif
                                    </div>
                                    <input type="hidden" name="user_id" value="1">
                                    <input type="hidden" name="organization_id" value="{{ $organization->id }}">
                                    <input type="hidden" id="category" name="category" value="">
                                    <button id="submit-button" type="submit" class="form-button">Soumettre le don</button>
                                </form>
                            </div>
                        </div>

                        <div class="user-infos">
                            <div id="">
                                <h2>Description :</h2>
                                <p>{{$organization->description}}</p>
                            </div>

                            <div class="">
                                <h2>Date de fondation :</h2>
                                <ul class="asso-requirement">
                                    <li>le {{ \Carbon\Carbon::parse($organization->founding_date)->format('d-m-Y') }}</li>
                                </ul>
                                @if(!($donations->isEmpty()))
                                <h2>Objets collectés:</h2>
                                @endif

                            </div>

                        </div>
                    </div>
                    <div>
                        <table>
                            @foreach ($donations as $donation)
                            @if ($loop->index % 4 === 0)
                            @if (!$loop->first)
                            </tr>
                            @endif
                            <tr>
                                @endif
                                <td style="padding: 15px; min-width: 25rem; max-width: 25rem;">
                                    <div class="row">
                                        <div class="col-md-4 mb-4">
                                            <div class="card" style="max-height: 550px; min-height: 550px;">

                                                <img class="card-img-top" src="/echange/items/{{ $donation['picture'] }}" alt="Card image cap" style="width: 100%; height: 200px;">

                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between">
                                                        <h5 class="card-title">{{ $donation['name'] }}</h5>
                                                    </div>
                                                    <p class="card-text">{{ $donation['description'] }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                @if ($loop->last || ($loop->index % 4 === 3))
                            </tr>
                            @endif
                            @endforeach
                        </table>
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
<style>
    .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        z-index: 1;
        overflow: auto;
    }

    .modal-content {
        position: absolute;
        top: 15%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        width: 70%;
        max-width: 600px;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        text-align: center;
        z-index: 2;
    }

    .modal-close {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
    }
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@auth
<script>
    $(document).ready(function() {
        var form = $('#donation-form');
        var donationTypeRadio = $('input[name="donation_type"]');
        var amountInput = $('input[name="amount"]');
        var objectSelect = $('select[name="object"]');
        var categoryInput = $('input[name="category"]');
        var objectInput = $('input[name="object"]');
        var modal = $('#donation-popup');

        $('#submit-button').prop('disabled', true);

        $('#open-popup-button').click(function() {
            modal.show();
            $('body').addClass('modal-open');
        });
        $('#close-popup-button').click(function() {
            modal.hide();
            $('body').removeClass('modal-open');
        });

        donationTypeRadio.change(function() {
            var selectedValue = donationTypeRadio.filter(':checked').val();

            if (selectedValue === 'don_objet') {
                $('#don_objet_section').show();
                $('#don_noisettes_section').hide();
                amountInput.val(0);
                categoryInput.val('object');
                objectInput.val('');
            } else if (selectedValue === 'don_noisettes') {
                $('#don_objet_section').hide();
                $('#don_noisettes_section').show();
                amountInput.val('');
                categoryInput.val('hazelnuts');
                objectInput.val(0);
            }
            if (objectInput === "Sélectionnez votre objet") {
                objectInput.val(0);
            }
            checkFormValidity();
        });

        function checkFormValidity() {
            var isValid = false;

            var selectedValue = donationTypeRadio.filter(':checked').val();

            if (selectedValue === 'don_objet') {
                isValid = objectSelect.val() !== null;
            } else if (selectedValue === 'don_noisettes') {
                var amountValue = amountInput.val();
                isValid = amountValue !== null && amountValue !== '' && amountValue > 0;
            }

            $('#submit-button').prop('disabled', !isValid);
        }

        form.on('input', function() {
            checkFormValidity();
        });
    });
</script>
@endauth