<style>

    @import url('https://fonts.googleapis.com/css?family=Open+Sans');
    body{font-family: 'Open Sans', sans-serif;background:#f7f7f7}
    .single-feature-events-area {
        padding: 10px;
        margin-top:20px;
        position: relative;
        z-index: 1;
        background-color: #fff;
        margin-bottom: 50px;
        -webkit-transition-duration: 500ms;
        transition-duration: 500ms;
        background:#fff;
    }
    .single-feature-events-area:hover {
        background-color: #c299e1;
    }
    .single-feature-events-area:hover .feature-events-content h5, .single-feature-events-area:hover .feature-events-content p {
        color: #fff;
    }
    .single-feature-events-area .feature-events-thumb {
        position: relative;
        z-index: 1;
    }

    .feature-events-thumb {
        width: 170px;
        -webkit-box-flex: 0;
        -ms-flex: 0 0 170px;
        flex: 0 0 170px;
    }

    .feature-events-thumb img {
        width:100%;
        height:100%;

    }
    .feature-events-content {
        padding:10px 0;
        position: relative;
        z-index: 2;

    }
    .feature-events-content p {
        font-size: 14px;
        -webkit-transition-duration: 500ms;
        transition-duration: 500ms;
        margin-bottom: 0;
    }
    .feature-events-content h5 {
        font-size: 18px;
        text-transform: uppercase;
        font-weight: 800;
        margin-bottom: 5px;
        -webkit-transition-duration: 500ms;
        transition-duration: 500ms;
    }
    .feature-events-content h6 {
        font-size: 14px;
        font-weight: 400;
        color: #e3dbea;
        margin-bottom: 15px;
        -webkit-transition-duration: 500ms;
        transition-duration: 500ms;
    }
    .feature-events-details-btn > a {
        width: 65px;
        height: 50px;
        background-color: #0094ff;
        display: block;
        font-size: 24px;
        color: #fff;
        line-height: 50px;
        text-align: center;
        position: absolute;
        bottom: 0;
        right: 0;
        z-index: 99;
    }
    .date-map-area {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 9;
    }
    .date-map-area > a {
        padding: 8px 15px;
        font-size: 12px;
        width: 65px;
        font-weight: 800;
        color: #fff;
        height: 50px;
        background-color: #0094ff;
        text-align: center;
    }
    .container {
        margin: 50px auto 0;
        width: 700px;
    }

    .u-float-right {
        float: right;
    }

    .u-flex-center {
        display: -webkit-flex;
        display: flex;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-align-items: center;
        align-items: center;
    }

    .subtle {
        color: #888;
        font-size: 12px;
    }

    .card-media {
        border-radius: 2px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, .12);
        height: 125px;
        margin-bottom: 25px;
        transition: all 300ms ease-out;
        width: 100%;
    }

    .card-media:hover {
        box-shadow: 0 5px 14px rgba(0, 0, 0, .2);
    }

    .card-media-object-container {
        background: none;
        float: left;
        height: 100%;
        width: 35%;
        position: relative;
    }

    .card-media-object {
        background-position: center center;
        background-size: cover;
        height: 100%;
    }

    .card-media-object:after {
        content: " ";
        display: block;
        height: 100%;
        left: 0;
        opacity: 0;
        position: absolute;
        right: 0;
        top: 0;
        transition: all 300ms ease-out;
        z-index: 10;
    }

    .card-media:hover .card-media-object:after {
        background: -moz-linear-gradient(top,  rgba(0,0,0,0) 0%, rgba(0,0,0,0) 52%, rgba(0,0,0,0.4) 100%);
        background: -webkit-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0) 52%,rgba(0,0,0,0.4) 100%);
        background: linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,0) 52%,rgba(0,0,0,0.4) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#a6000000',GradientType=0 );
        opacity: 1;
    }

    .card-media-object-tag {
        background-color: #fff;
        border-radius: 2px;
        padding: 2px 7px;
        position: absolute;
        right: 10px;
        top: 10px;
    }

    .card-media-object-social-list {
        bottom: 4px;
        left: 10px;
        list-style-type: none;
        margin: 0;
        padding: 0;
        position: absolute;
        z-index: 20;
    }

    .card-media-object-social-list li {
        border-radius: 50%;
        display: inline-block;
        height: 30px;
        margin-right: 6px;
        opacity: 0;
        overflow: hidden;
        transform: translateY(5px);
        transition: all 300ms ease-out;
        width: 30px;
    }

    .card-media:hover .card-media-object-social-list li {
        opacity: 1;
        transform: translateY(0);
    }

    .card-media-object-social-list li:nth-child(1) {
        transition-delay: 0;
    }
    .card-media-object-social-list li:nth-child(2) {
        transition-delay: 75ms;
    }
    .card-media-object-social-list li:nth-child(3) {
        transition-delay: 150ms;
    }

    .card-media-object-social-list-item-additional {
        border: 1px solid #fff;
        color: #fff;
        font-size: 12px;
        padding-top: 7px;
        text-align: center;
    }

    .card-media-body {
        background-color: #fff;
        float: left;
        height: 100%;
        padding: 12px 15px;
        position: relative;
        width: 65%;
    }

    .card-media-body-top {
        display: block;
    }

    .card-media-body-top-icons {
        margin-top: -2px;
        opacity: 0;
        transition: all 300ms ease-out;
        transform: translateY(-5px);
    }

    .card-media:hover .card-media-body-top-icons {
        opacity: 1;
        transform: translateY(0);
    }

    .card-media-body-top-icons > svg {
        cursor: pointer;
        margin-left: 10px;
        transition: all 300ms ease-out;
    }

    .card-media-body-top-icons > svg:hover {
        fill: #444;
    }

    .card-media-body-heading {
        display: block;
        margin-top: 10px;
    }

    .card-media-body-supporting-bottom {
        position: absolute;
        bottom: 10px;
        left: 0;
        opacity: 1;
        padding: 0 15px;
        transition: all 300ms ease-out;
        width: 100%;
    }

    .card-media:hover .card-media-body-supporting-bottom {
        opacity: 0;
        transform: translateY(-8px);
    }

    .card-media-body-supporting-bottom-text {
        display: inline-block;
    }

    .card-media-body-supporting-bottom-reveal {
        opacity: 0;
        transform: translateY(8px);
        transition: all 300ms ease-out;
    }

    .card-media:hover .card-media-body-supporting-bottom-reveal {
        opacity: 1;
        transform: translateY(0);
    }

    .card-media-link {
        color: #41C1F2;
        text-decoration: none;
    }
</style>


{{--<table class="container-xxl flex-grow-1 container-p-y">--}}
{{--    <tr><td>--}}
{{--            <h4 class="fw-bold py-3 mb-4">--}}
{{--                <span class="text-muted fw-light">Evenement /</span> Detail d'evenement {{$event->nom}}--}}
{{--            </h4>--}}
{{--            <h4>Debug: {{ $event->image }}</h4>--}}
{{--            <img src="{{ asset( $event->image   )}}" alt="Image Description">--}}

{{--        <td>--}}
{{--            @php--}}
{{--                $imagePathParts = pathinfo($event->image_path);--}}
{{--                $imageName = $imagePathParts['basename'];--}}
{{--            @endphp--}}
{{--            <img width="50" height="50"  src="{{ asset('imagesForEvents/' . $imageName) }}" alt="Description de l'image">--}}


{{--        </td>--}}

{{--        </td>--}}
{{--    </tr>--}}
{{--        <td align="right">--}}
{{--            <a href="/dashboard/events/add"  class="btn btn-primary">Ajouter</a>--}}
{{--        </td>--}}
{{--    <tr>--}}
{{--</table>--}}

<div class="card">
    <div class="table-responsive text-nowrap">
</div>

    <div class="container">
        @foreach ($similarEvents as $event9)
        <div class="card-media">
            <!-- media container -->
            <div class="card-media-object-container">

                <div class="card-media-object"
                  >
                    @php
                        $imagePathParts = pathinfo($event9->image_path);
                        $imageName = $imagePathParts['basename'];
                    @endphp
                    <img width="100%" height="100%"  src="{{ asset('imagesForEvents/' . $imageName) }}" alt="Description de l'image">


                </div>
                <span class="card-media-object-tag subtle"> {{$event9->categorie}} </span>

                <ul class="card-media-object-social-list">
                    <li style="color: white">
                        @if ($event9->participations->count() == 1)
                            {{ $event9->participations->first()->user->name }}

                        @elseif ($event9->participations->count() > 1)
                            @foreach ($event9->participations as $particip)
                                {{ $particip->user->name }}
                            @endforeach
                                <li class="card-media-object-social-list-item-additional">
                                    +{{ $event9->participations->count() -1 }}
                                </li>
                        @else
                            Aucun participant
                        @endif
                    </li>

                </ul>

            </div>
            <!-- body container -->
            <div class="card-media-body">
                <div class="card-media-body-top">


   <span class="subtle">
       <i class="bx bx-time"></i>
@if($event9->start)
           {{ date('d F, H:i', strtotime($event9->start)) }} -
       @else
           Date inconnue -
       @endif

       @if($event9->end)
           {{ date('d F', strtotime($event9->end)) }}
       @else
           Fin inconnue
       @endif


</span>




                    <div class="card-media-body-top-icons u-float-right">
                        <svg fill="#888888" height="16" viewBox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none"/>
                            <path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92 1.61 0 2.92-1.31 2.92-2.92s-1.31-2.92-2.92-2.92z"/>
                        </svg>
                        <svg fill="#888888" height="16" viewBox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 3H7c-1.1 0-1.99.9-1.99 2L5 21l7-3 7 3V5c0-1.1-.9-2-2-2z"/>
                            <path d="M0 0h24v24H0z" fill="none"/>
                        </svg>
                    </div>
                </div>
                <span class="card-media-body-heading">

{{$event9->nom}}

                </span>
                <small class="subtle" style="font-size: 7px" >{{$event9->description}}</small>

                <br/>
                <br/>
                <div class="card-media-body-supporting-bottom">
                    <span class="card-media-body-supporting-bottom-text subtle"> <i class="bx bx-map"></i>
 {{$event9->Lieu}} </span>
{{--                    <span class="card-media-body-supporting-bottom-text subtle u-float-right">Free &ndash; $30</span>--}}
                </div>
                <div class="card-media-body-supporting-bottom card-media-body-supporting-bottom-reveal">
                    <span class="card-media-body-supporting-bottom-text subtle   " ># {{$event9->categorie}} </span>
                    <a href="#/" class="card-media-body-supporting-bottom-text card-media-link u-float-right">VIEW TICKETS</a>
                </div>
            </div>
        </div>
        @endforeach




            <div class="col-12 col-lg-12">
                <div class="single-feature-events-area" >
                    <div class="feature-events-thumb">
{{--                        <img width="0%" height="100%"  src="{{ asset('imagesForEvents/' . $imageName) }}" alt="Description de l'image">--}}
                        @php
                            $imagePathParts = pathinfo($event->image_path);
                            $imageName = $imagePathParts['basename'];
                        @endphp
                        <img class="col-lg-12" src="{{ asset('imagesForEvents/' . $imageName) }}" alt="">
                        <div class="date-map-area   ">
                            <a href="#">
                                {{ date('d F', strtotime($event->start)) }}
                            </a>


                        </div>
                    </div>
                    <div class="feature-events-content">
                        <h5>  {{$event->nom}} </h5>
                        <h6><i class="bx bx-map"></i>
                            {{$event->Lieu}} </h6>
                        <p> <i class="bx bxs-group"></i>
                            {{$event->participations->count()}} </p>
                        <p> {{$event->description}} </p>
                    </div>
                    <br/>
                    <br/>

                    @if(auth()->check())

                        @if($isParticipated)
                            <div class="feature-events-details">
                                <div class="alert alert-warning" style="text-align: center" >
                                    <strong>   Déjà Participé </strong>
                                </div>

                            </div>
                            @else
                                <div class="feature-events-details-btn">
                                    <div class="alert alert-success" style="text-align: center" >
                                    <a href="{{ route('participerEvent', ['event_id' => $event->id, 'user_id' => auth()->user()->id]) }}">
                                        Participer à l'événement
                                    </a>
                                    </div>
                                </div>

                        @endif

                    @else
                        <p>Connectez-vous pour participer à l'événement.</p>
                    @endif

                </div>
            </div>
    </div>







</div>

