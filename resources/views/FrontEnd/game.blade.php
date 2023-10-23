<!DOCTYPE html>
@extends('FrontEnd.section.header')
@section('pageTitle', 'Machine à noisette')
<style>
    .slots {
        left: 15.1%;
        top: -19.5rem;
        position: relative;
        width: 21rem;
        height: 272px;
        display: flex;
        box-shadow: -2px 2px 3px rgba(0, 0, 0, 0.3);
        border-radius: 3px;
}
    }

    .slots::before,
    .slots::after {
        content: "";
        position: absolute;
        top: 50%;
        width: 10px;
        height: 2px;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .slots::before {
        left: 0;
        transform: translate(-200%, -50%);
    }

    .slots::after {
        right: 0;
        transform: translate(200%, -50%);
    }

    @-webkit-keyframes win1 {
        0% {
            background: linear-gradient(45deg, orange 0%, yellow 100%);
            box-shadow: 0 0 80px orange;
        }

        100% {
            background: linear-gradient(45deg, grey 0%, lightgrey 100%);
            box-shadow: -2px 2px 3px rgba(0, 0, 0, 0.3);
        }
    }

    @keyframes win1 {
        0% {
            background: linear-gradient(45deg, orange 0%, yellow 100%);
            box-shadow: 0 0 80px orange;
        }

        100% {
            background: linear-gradient(45deg, grey 0%, lightgrey 100%);
            box-shadow: -2px 2px 3px rgba(0, 0, 0, 0.3);
        }
    }

    @-webkit-keyframes win2 {
        0% {
            background: linear-gradient(45deg, lightblue 0%, lightgreen 100%);
            box-shadow: 0 0 80px lightgreen;
        }

        100% {
            background: linear-gradient(45deg, grey 0%, lightgrey 100%);
            box-shadow: -2px 2px 3px rgba(0, 0, 0, 0.3);
        }
    }

    @keyframes win2 {
        0% {
            background: linear-gradient(45deg, lightblue 0%, lightgreen 100%);
            box-shadow: 0 0 80px lightgreen;
        }

        100% {
            background: linear-gradient(45deg, grey 0%, lightgrey 100%);
            box-shadow: -2px 2px 3px rgba(0, 0, 0, 0.3);
        }
    }

    .slots.win1 {
        -webkit-animation: win1 200ms steps(2, end) infinite;
        animation: win1 200ms steps(2, end) infinite;
    }

    .slots.win2 {
        -webkit-animation: win2 200ms steps(2, end) infinite;
        animation: win2 200ms steps(2, end) infinite;
    }

    .slots .reel {
        position: relative;
        width: 79px;
        height: 237px;
        border-radius: 3px;
        overflow: hidden;
        background-image: url(https://i.ibb.co/0rRqV6Z/icons.webp);
        background-position: 0 0;
        background-repeat: repeat-y;
    }

    .slots .reel::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: linear-gradient(rgba(0, 0, 0, 0.4) 0%, transparent 30%, transparent 70%, rgba(0, 0, 0, 0.4) 100%);
        box-shadow: inset 0 0 6px 2px rgba(0, 0, 0, 0.3);
    }

    .slots p {
        position: absolute;
        bottom: 0;
        left: 50%;
        width: 100%;
        transform: translate(-50%, calc(100% + 30px));
        text-align: center;
        font-size: 0.8rem;
        color: #444;
    }

    .slots p a {
        color: red;
        font-weight: 700;
    }
</style>
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<script>
    window.csrfToken = "{{ csrf_token() }}";
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<div id="main">
    <div id="animation-banner" class="web">
        <div id="could-banner" class="no-overflow">
            <div id="cloud1" class="cloud">
                <img src="/image/jackpot/roll/gen/nuage1.svg" data-load="https://cf.mytroc.fr/image/sketch/nuage1.svg"
                    alt="nuage" class="svg">
            </div>
            <div id="cloud2" class="cloud">
                <img src="/image/jackpot/roll/gen/nuage2.svg" data-load="https://cf.mytroc.fr/image/sketch/nuage2.svg"
                    alt="nuage" class="svg">
            </div>
            <div id="cloud3" class="cloud">
                <img src="/image/jackpot/roll/gen/nuage3.svg" data-load="https://cf.mytroc.fr/image/sketch/nuage3.svg"
                    alt="nuage" class="svg">
            </div>
            <div id="cloud4" class="cloud">
                <img src="/image/jackpot/roll/gen/nuage1.svg" data-load="https://cf.mytroc.fr/image/sketch/nuage1.svg"
                    alt="nuage" class="svg">
            </div>
            <div id="cloud5" class="cloud">
                <img src="/image/jackpot/roll/gen/nuage2.svg" data-load="https://cf.mytroc.fr/image/sketch/nuage2.svg"
                    alt="nuage" class="svg">
            </div>
        </div>
        <h1 class="title">La machine à noisettes </h1>
    </div>
    <div class="content">
        <div id="jackpot-login"></div>
        <article id="jackpot">
            <div class="bg1 top-sep"></div>
            <div class="bg2"></div>
            <div class="inline-center">
                <!-- machine a noisette -->
                <div id="machine-a-noisettes">
                    <div class="container">

                        <img src="/image/jackpot/roll/gen/machine.png" class="machine svg"
                            style="z-index: 99;
    position: relative;">
                        @if (auth()->check())
                            <div class="sprites jackpot manette" id="manette"> <img
                                    src="/image/jackpot/roll/gen/ff2cd83f3fc6589a33bd40bb96c56ebf.svg" class="svg m1"
                                    alt="jackpot noisette"></div>
                        @else
                            <div class="sprites jackpot manette" id="manette1">
                                <img src="/image/jackpot/roll/gen/ff2cd83f3fc6589a33bd40bb96c56ebf.svg" class="svg m1"
                                    alt="jackpot noisette">
                            </div>
                        @endif
                        <div class="slots">
                            <div class="reel"></div>
                            <div class="reel"></div>
                            <div class="reel"></div>
                        </div>
                        <div id="looser" style="z-index:999">
                            <div>qsdq</div>
                        </div>
                        <div id="winner" style="display:none">
                            <div id="clonableNut" class="clonableNut">
                                <div class="sprites icones"> <img
                                        src="/image/jackpot/roll/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg"
                                        class="svg nuts" alt="noisette"></div>
                            </div>
                        </div>
                        <div id="winner-congrat" style="display:none">
                            <div>Bravo</div>
                            <div id="win-share">
                                Partager sur <div class="social-sharer">

                                    <ul>
                                        <li>
                                            <a class="share fb"
                                                href="http://www.facebook.com/sharer/sharer.php?u=winnerurl"
                                                target="_blank" rel="nofollow">
                                                <div class="sprites icones"> <img
                                                        src="/image/jackpot/roll/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg"
                                                        class="svg social fb white" alt="facebook"></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="share gplus" href="https://plus.google.com/share?url=winnerurl"
                                                target="_blank" rel="nofollow">
                                                <div class="sprites icones"> <img
                                                        src="/image/jackpot/roll/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg"
                                                        class="svg social gplus white" alt="google plus"></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="share twitter"
                                                href="https://twitter.com/share?url=winnerurl&amp;related=MyTrocOfficiel"
                                                target="_blank" rel="nofollow">
                                                <div class="sprites icones"> <img
                                                        src="/image//roll/gen/jackpot/21e0151d35abd56f1a6a8a5a712ec8b8.svg"
                                                        class="svg social twitter white" alt="twitter"></div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <a href="https://mytroc.fr/mes-noisettes">
                            <div id="badge-ribbon-shadow"></div>
                            <div id="badge-ribbon">
                                <span>0</span>
                                <div class="sprites icones"> <img
                                        src="/image/jackpot/roll/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg"
                                        class="svg nuts" alt="noisette"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div id="win-table">
                    <h2>Tableau des gains</h2>
                    <div>
                        <div class="sprites jackpot roll"> <img
                                src="/image/jackpot/roll/gen/783b0b6103a451229d7df404e9fe47fa.png" class=" e5"
                                alt="jackpot noisette"></div>
                        <div class="sprites jackpot roll"> <img
                                src="/image/jackpot/roll/gen/783b0b6103a451229d7df404e9fe47fa.png" class=" e5"
                                alt="jackpot noisette"></div>
                        <div class="sprites jackpot roll"> <img
                                src="/image/jackpot/roll/gen/783b0b6103a451229d7df404e9fe47fa.png" class=" e5"
                                alt="jackpot noisette"></div> = <span>50 <div class="sprites icones"> <img
                                    src="https://mytroc.fr/static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg"
                                    class="svg nuts" alt="noisette"></div></span>
                    </div>
                    <div>
                        <div class="sprites jackpot roll"> <img
                                src="/image/jackpot/roll/gen/783b0b6103a451229d7df404e9fe47fa.png" class=" e4"
                                alt="jackpot noisette"></div>
                        <div class="sprites jackpot roll"> <img
                                src="/image/jackpot/roll/gen/783b0b6103a451229d7df404e9fe47fa.png" class=" e4"
                                alt="jackpot noisette"></div>
                        <div class="sprites jackpot roll"> <img
                                src="/image/jackpot/roll/gen/783b0b6103a451229d7df404e9fe47fa.png" class=" e4"
                                alt="jackpot noisette"></div> = <span>10 <div class="sprites icones"> <img
                                    src="/image/jackpot/roll/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg"
                                    class="svg nuts" alt="noisette"></div></span>
                    </div>
                    <div>
                        <div class="sprites jackpot roll"> <img
                                src="/image/jackpot/roll/gen/783b0b6103a451229d7df404e9fe47fa.png" class=" e3"
                                alt="jackpot noisette"></div>
                        <div class="sprites jackpot roll"> <img
                                src="/image/jackpot/roll/gen/783b0b6103a451229d7df404e9fe47fa.png" class=" e3"
                                alt="jackpot noisette"></div>
                        <div class="sprites jackpot roll"> <img
                                src="/image/jackpot/roll/gen/783b0b6103a451229d7df404e9fe47fa.png" class=" e3"
                                alt="jackpot noisette"></div> = <span>5 <div class="sprites icones"> <img
                                    src="/image/jackpot/roll/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg"
                                    class="svg nuts" alt="noisette"></div></span>
                    </div>
                    <div>
                        <div class="sprites jackpot roll"> <img
                                src="/image/jackpot/roll/gen/783b0b6103a451229d7df404e9fe47fa.png" class=" e2"
                                alt="jackpot noisette"></div>
                        <div class="sprites jackpot roll"> <img
                                src="/image/jackpot/roll/gen/783b0b6103a451229d7df404e9fe47fa.png" class=" e2"
                                alt="jackpot noisette"></div>
                        <div class="sprites jackpot roll"> <img
                                src="/image/jackpot/roll/gen/783b0b6103a451229d7df404e9fe47fa.png" class=" e2"
                                alt="jackpot noisette"></div> = <span>3 <div class="sprites icones"> <img
                                    src="/image/jackpot/roll/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg"
                                    class="svg nuts" alt="noisette"></div></span>
                    </div>
                    <div>
                        <div class="sprites jackpot roll"> <img
                                src="/image/jackpot/roll/gen/783b0b6103a451229d7df404e9fe47fa.png" class=" e1"
                                alt="jackpot noisette"></div>
                        <div class="sprites jackpot roll"> <img
                                src="/image/jackpot/roll/gen/783b0b6103a451229d7df404e9fe47fa.png" class=" e1"
                                alt="jackpot noisette"></div>
                        <div class="sprites jackpot roll"> <img
                                src="/image/jackpot/roll/gen/783b0b6103a451229d7df404e9fe47fa.png" class=" e1"
                                alt="jackpot noisette"></div> = <span>1 <div class="sprites icones"> <img
                                    src="/image/jackpot/roll/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg"
                                    class="svg nuts" alt="noisette"></div></span>
                    </div>
                    <img src="/image/jackpot/roll/gen/oiseau_right_down.svg" id="jack-bird" class="svg">
                </div>
            </div>
            <input id="am-i-connected" type="hidden" value="1">
            <input id="can-i-play" type="hidden" value="1">
        </article>
        <button id="start-button" style="display:none">Start Game</button>
        <div id="win-message" style="display: none;"></div>
        <div id="jack-desc" class="top-sep">
            <p class="large">Rien que pour vous, voici la machine à noisettes !</p>
            <p>Vous pouvez jouer une fois par jour et vous avez 1 chance sur 3 de gagner !</p>
            <p>Ce sont nos écureuils qui vont être contents </p>
        </div>
        <div id="jackpot-of-fame" class="top-sep">
            <div id="tree" class="web">
                <img src="/image/sketch/arbre_optim.svg" alt="arbre" class="svg">
            </div>
            <div class="center">
                <div class="banner banner-purple ">
                    <div class="banner-inside waves waves-prune" data-wave-scale="30">
                        <a href="https://mytroc.fr/machine-a-noisette#last-winner">

                            <div class="banner-content">Derniers gagnants</div>
                        </a>
                    </div>
                    <div class="banner-shadows"></div>
                </div>
            </div>
            <ul>
                @foreach ($users as $user)
                    <li class="winner">
                        <div class="details">
                            <br>
                            <h3>{{ $user->username }}</h3>
                            <div class="sharing">
                            </div>
                            <div class="gain">
                                {{ $user->hazelnuts }} <div class="sprites icones"> <img
                                        src="/image/jackpot/roll/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg"
                                        class="svg nuts" alt="noisette"></div>
                            </div><br>
                            <h3>{{ $user->winDate }}</h3>
                        </div>
                        <div class="square">
                            <div class="square-content">
                                <img src="{{ $user->profile_picture }}" alt="fidjy">
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        <div id="debug" class="debug" style="display:none"></div>
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

<script>
    const manette = document.getElementById("manette");
    const image = manette.querySelector("img");
    const classNames = ["m1", "m4"];
    let currentClassIndex = 0;
    let incrementing = true;
    const debugEl = document.getElementById('debug');
    const startButton = document.getElementById('start-button');
    const slots = document.querySelector('.slots');
    const iconMap = ["banana", "seven", "cherry", "plum", "orange"];
    const icon_width = 79;
    const icon_height = 79;
    const num_icons = 5;
    const time_per_icon = 100;
    const indexes = [0, 0, 0];
    let tries = 0;

    document.addEventListener('DOMContentLoaded', function() {
        var manette1 = document.getElementById('manette1');
        manette1.addEventListener('click', function() {
            window.location.href = '/login';
        });
    });
    const roll = (reel, offset = 0) => {
        const delta = (offset + 2) * num_icons + Math.round(Math.random() * num_icons);

        return new Promise((resolve, reject) => {
            const style = getComputedStyle(reel);
            const backgroundPositionY = parseFloat(style["background-position-y"]);
            const targetBackgroundPositionY = backgroundPositionY + delta * icon_height;
            const normTargetBackgroundPositionY = targetBackgroundPositionY % (num_icons * icon_height);

            setTimeout(() => {
                reel.style.transition =
                    `background-position-y ${(8 + 1 * delta) * time_per_icon}ms cubic-bezier(.41,-0.01,.63,1.09)`;
                reel.style.backgroundPositionY = `${backgroundPositionY + delta * icon_height}px`;
            }, offset * 150);

            setTimeout(() => {
                reel.style.transition = `none`;
                reel.style.backgroundPositionY = `${normTargetBackgroundPositionY}px`;
                resolve(delta % num_icons);
            }, (8 + 1 * delta) * time_per_icon + offset * 150);
        });
    };

    function rollAll() {
        messageElement = document.getElementById('looser');
        messageElement.style.transform = '';
        tries++;
        debugEl.textContent = 'rolling...';
        startButton.disabled = true;

        Promise.all([...document.querySelectorAll('.reel')].map((reel, i) => roll(reel, i)))
            .then(deltas => {
                deltas.forEach((delta, i) => (indexes[i] = (indexes[i] + delta) % num_icons));
                debugEl.textContent = indexes.map(i => iconMap[i]).join(' - ');

                let messageElement = document.getElementById('win-message');
                let winMessage = '';

                if (indexes[0] === 0 && indexes[1] === 0 && indexes[2] === 0) {
                    winMessage = '10';
                } else if (indexes[0] === 1 && indexes[1] === 1 && indexes[2] === 1) {
                    winMessage = '50';
                } else if (indexes[0] === 2 && indexes[1] === 2 && indexes[2] === 2) {
                    winMessage = '1';
                } else if (indexes[0] === 3 && indexes[1] === 3 && indexes[2] === 3) {
                    winMessage = '3';
                } else if (indexes[0] === 4 && indexes[1] === 4 && indexes[2] === 4) {
                    winMessage = '5';
                } else if (indexes[0] === 5 && indexes[1] === 5 && indexes[2] === 5) {
                    winMessage = '1';
                } else if (tries === 3) {
                    winMessage = '50';

                } else {
                    winMessage = 'PERDU';
                }
                messageElement = document.getElementById('looser');
                messageElement.style.transform = 'scale(1) rotateZ(725deg)';
                messageElement.textContent = winMessage;
                messageElement.style.display = 'block';

                updateHazelnuts(winMessage);
                startButton.disabled = false;
                var imgElement = document.querySelector('#manette img');
        imgElement.classList.remove('svg', 'm4');
        imgElement.classList.add('svg', 'm1');
            });
        
    }
    manette.addEventListener("click", function() {
        image.classList.remove(classNames[currentClassIndex]);
        if (incrementing) {
            currentClassIndex = (currentClassIndex + 1) % classNames.length;
        }
        image.classList.add(classNames[currentClassIndex]);
        if (currentClassIndex === classNames.length - 1) {
            incrementing = false;
            currentClassIndex = (currentClassIndex - 1 + classNames.length) % classNames.length;
        } else if (currentClassIndex === 0) {
            currentClassIndex = (currentClassIndex - 1 + classNames.length) % classNames.length;
            incrementing = true;
        }
        image.classList.add(classNames[currentClassIndex]);
        rollAll();
        const winMessage = document.getElementById('looser').textContent;
    });

    function updateHazelnuts(winMessage) {
        if (winMessage !== "You lose!") {
            fetch('/game', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': window.csrfToken,
                    },
                    body: JSON.stringify({
                        winMessage
                    }),
                })
                .then((response) => response.json())
                .then((data) => {
                    console.log(data.message);
                })
                .catch((error) => {
                    console.error('Error:', error);
                });
        }
    }
</script>

@extends('FrontEnd.section.footer')

</HTML>
