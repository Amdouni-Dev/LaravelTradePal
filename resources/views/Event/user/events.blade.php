

@section('pageTitle', 'Noisette')
<html lang="en" class="calender-page">
<head>


    @livewireStyles
    @section('calender-style')
        <link rel="stylesheet" type="text/css" href="/css/calender-style.css">

    @endsection


<style>
    /* Style pour la classe btn */
    .btn {
        display: inline-block;
        font-weight: 400;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        user-select: none;
        border: 1px solid transparent;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: 0.25rem;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    /* Style pour la classe btn-warning (bouton d'avertissement) */
    .btn-warning {
        color: #fff;
        background-color: #ffc107;
        border-color: #ffc107;
    }

    /* Style au survol pour la classe btn-warning */
    .btn-warning:hover {
        color: #fff;
        background-color: #e0a800;
        border-color: #d39e00;
    }

</style>

</head>
{{--<div id="main">--}}
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


<div class="content">
{{--    <button type="button" class="btn btn-warning">Add Event</button>--}}
    <div>
        <livewire:calendar />
        @livewireScripts
        @stack('scripts')
    </div>



</div>


{{--<div class="container">--}}
{{--    <div class="content-header">--}}
{{--        <h1 class="page-header">Community Events</h1>--}}
{{--    </div>--}}
{{--    <div class="content-column">--}}
{{--        <h2 class="list-title">Upcoming Events</h2>--}}
{{--        <div class="events-listings">--}}
{{--            <ul class="events-list">--}}
{{--                <li class="event-item clearfix">--}}
{{--                    <div class="day-column">--}}
{{--                        <h4 class="month-name">Aug 5</h4>--}}
{{--                        <p class="day-name">wednesday</p>--}}
{{--                    </div>--}}
{{--                    <div class="title-column">--}}
{{--                        <div class="event-title">--}}
{{--                            <h3 class="title-name">Gratiot Lake Road and Troy Graham to perform at Trust Fall Records</h3>--}}
{{--                        </div>--}}
{{--                        <div class="event-details">--}}
{{--                            <ul class="event-details-list">--}}
{{--                                <li class="event-details-item">--}}
{{--                                    <div>The Sinclair, Reed City</div>--}}
{{--                                </li>--}}
{{--                                <li class="event-details-item">--}}
{{--                                    <div>8:00 AM</div>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="event-category">--}}
{{--                            <div><span class="event-category-title">Category:</span> <a class="event-category-name" href="#">Community Events</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="event-item clearfix">--}}
{{--                    <div class="day-column">--}}
{{--                        <h4 class="month-name">Aug 5</h4>--}}
{{--                        <p class="day-name">wednesday</p>--}}
{{--                    </div>--}}
{{--                    <div class="title-column">--}}
{{--                        <div class="event-title">--}}
{{--                            <h3 class="title-name">Seward Park Audubon Birding Expedition Camp</h3>--}}
{{--                        </div>--}}
{{--                        <div class="event-details">--}}
{{--                            <ul class="event-details-list">--}}
{{--                                <li class="event-details-item">--}}
{{--                                    <div>Seeward Park, Ann Arbor</div>--}}
{{--                                </li>--}}
{{--                                <li class="event-details-item">--}}
{{--                                    <div>9:00 AM &ndash; 3:00 PM</div>--}}
{{--                                </li>--}}
{{--                                <li class="event-details-item">--}}
{{--                                    <div>Repeats Daily, August 1–6</div>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="event-category">--}}
{{--                            <div><span class="event-category-title">Category:</span> <a class="event-category-name" href="#">Community Events</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="event-item clearfix">--}}
{{--                    <div class="day-column">--}}
{{--                        <h4 class="month-name">Aug 5</h4>--}}
{{--                        <p class="day-name">wednesday</p>--}}
{{--                    </div>--}}
{{--                    <div class="title-column">--}}
{{--                        <div class="event-title">--}}
{{--                            <h3 class="title-name">Lake Hewlitt Annual Classical Music Festival</h3>--}}
{{--                        </div>--}}
{{--                        <div class="event-details">--}}
{{--                            <ul class="event-details-list">--}}
{{--                                <li class="event-details-item">--}}
{{--                                    <div>Lake Hewlitt Center, Hewlitt</div>--}}
{{--                                </li>--}}
{{--                                <li class="event-details-item">--}}
{{--                                    <div>5:00 PM</div>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="event-category">--}}
{{--                            <div><span class="event-category-title">Category:</span> <a class="event-category-name" href="#">Classical Music</a>, <a class="event-category-name" href="#">Community Events</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="event-item clearfix">--}}
{{--                    <div class="day-column">--}}
{{--                        <h4 class="month-name">Aug 5</h4>--}}
{{--                        <p class="day-name">wednesday</p>--}}
{{--                    </div>--}}
{{--                    <div class="title-column">--}}
{{--                        <div class="event-title">--}}
{{--                            <h3 class="title-name">Big Jazz in the Park presented by Jazz Night School</h3>--}}
{{--                        </div>--}}
{{--                        <div class="event-details">--}}
{{--                            <ul class="event-details-list">--}}
{{--                                <li class="event-details-item">--}}
{{--                                    <div>Columbia Park, Lewiston</div>--}}
{{--                                </li>--}}
{{--                                <li class="event-details-item">--}}
{{--                                    <div>5:00 PM</div>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="event-category">--}}
{{--                            <div><span class="event-category-title">Category:</span> <a class="event-category-name" href="#">Community Events</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="event-item clearfix">--}}
{{--                    <div class="day-column">--}}
{{--                        <h4 class="month-name">Aug 6</h4>--}}
{{--                        <p class="day-name">Thursday</p>--}}
{{--                    </div>--}}
{{--                    <div class="title-column">--}}
{{--                        <div class="event-title">--}}
{{--                            <h3 class="title-name">Seward Park Audubon Birding Expedition Camp</h3>--}}
{{--                        </div>--}}
{{--                        <div class="event-details">--}}
{{--                            <ul class="event-details-list">--}}
{{--                                <li class="event-details-item">--}}
{{--                                    <div>Seeward Park, Ann Arbor</div>--}}
{{--                                </li>--}}
{{--                                <li class="event-details-item">--}}
{{--                                    <div>9:00 AM &ndash; 3:00 PM</div>--}}
{{--                                </li>--}}
{{--                                <li class="event-details-item">--}}
{{--                                    <div>Repeats Daily, August 1–6</div>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="event-category">--}}
{{--                            <div><span class="event-category-title">Category:</span> <a class="event-category-name" href="#">Community Events</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="ad-column">--}}
{{--        <img class="ad" src="https://d3e54v103j8qbb.cloudfront.net/img/image-placeholder.svg" width="300" height="250">--}}
{{--        <img class="ad" src="https://d3e54v103j8qbb.cloudfront.net/img/image-placeholder.svg" width="300" height="250">--}}
{{--    </div>--}}
{{--</div>--}}


{{--</div>--}}
</html>
