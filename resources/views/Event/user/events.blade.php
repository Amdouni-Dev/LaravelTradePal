
@extends('FrontEnd.section.header')
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
    <button type="button" class="btn btn-warning">Add Event</button>
    <div>
        <livewire:calendar />
        @livewireScripts
        @stack('scripts')
    </div>



</div>

{{--</div>--}}
</html>
