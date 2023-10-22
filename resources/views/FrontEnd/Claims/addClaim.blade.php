<!DOCTYPE html>

@extends('FrontEnd.section.header')
@section('pageTitle', 'Profile')
<div id="main">
    <div id="animation-banner" class="web">
        <div id="could-banner" class="no-overflow">
            <div id="cloud1" class="cloud">
                <img  src='static/image/1px.png' data-load='https://cf.mytroc.fr/image/sketch/nuage1.svg'  alt='nuage' class='svg'>
                <img  src='static/image/1px.png' data-src='https://mytroc.fr/static/image/sketch/nuage1.png'  alt='nuage' class='img' >
                <img  src='static/image/1px.png' data-src='https://mytroc.fr/static/image/sketch/nuage1@2x.png'  alt='nuage' class='retina' >
            </div>
            <div id="cloud2" class="cloud">
                <img  src='static/image/1px.png' data-load='https://cf.mytroc.fr/image/sketch/nuage2.svg'  alt='nuage' class='svg'>
                <img  src='static/image/1px.png' data-src='https://mytroc.fr/static/image/sketch/nuage2.png'  alt='nuage' class='img' >
                <img  src='static/image/1px.png' data-src='https://mytroc.fr/static/image/sketch/nuage2@2x.png'  alt='nuage' class='retina' >

            </div>
            <div id="cloud3" class="cloud">
                <img  src='static/image/1px.png' data-load='https://cf.mytroc.fr/image/sketch/nuage3.svg'  alt='nuage' class='svg'>
                <img  src='static/image/1px.png' data-src='https://mytroc.fr/static/image/sketch/nuage3.png'  alt='nuage' class='img' >
                <img  src='static/image/1px.png' data-src='https://mytroc.fr/static/image/sketch/nuage3@2x.png'  alt='nuage' class='retina' >

            </div>
            <div id="cloud4" class="cloud">
                <img  src='static/image/1px.png' data-load='https://cf.mytroc.fr/image/sketch/nuage1.svg'  alt='nuage' class='svg'>
                <img  src='static/image/1px.png' data-src='https://mytroc.fr/static/image/sketch/nuage1.png'  alt='nuage' class='img' >
                <img  src='static/image/1px.png' data-src='https://mytroc.fr/static/image/sketch/nuage1@2x.png'  alt='nuage' class='retina' >

            </div>
            <div id="cloud5" class="cloud">
                <img  src='static/image/1px.png' data-load='https://cf.mytroc.fr/image/sketch/nuage2.svg'  alt='nuage' class='svg'>
                <img  src='static/image/1px.png' data-src='https://mytroc.fr/static/image/sketch/nuage2.png'  alt='nuage' class='img' >
                <img  src='static/image/1px.png' data-src='https://mytroc.fr/static/image/sketch/nuage2@2x.png'  alt='nuage' class='retina' >

            </div>
        </div>
        <H1 class="title">Signalez Un Problème !</H1>

    </div>


    <div class="content">


        <article class="bareme top-sep" style="text-align: center; min-height: 1122px;">

            <div class="echelle web">
                <img src='/image/menu/scale_bird.png'  class='birdScale '>
                <div class= "mainScale"></div>
                <img src='/image/menu/scale_squirrel.png'  class='squirrelScale '>

            </div>

            <div class="curl-page" >
                <div class="curl"></div>


       <span class="c1"><div class="form-add-troc form-troc top-sep l2 noc">
<form id="add-troc" action="{{ route('claim.store') }}" method="POST" enctype="multipart/form-data" onsubmit="filterBadWords()">
    @csrf

    <div id="container-add-content" style="margin-top: 50px">
        <div class="cols2 left">

            <h2>Signalez Un Problème !</h2>

            <div class="upload-images-block">
                <div id="im1" class="square im-but">
                    <div class="square-content">
                        <div id="upload-im-button-1" class="upload-im-button" data-post="image-upload-1">
                            <label for="imageInput" class="button-img image-input">
                                <img src="" alt="" id="imagePreview" style="max-width: 300px; max-height: 300px;">
                                <div class='sprites icones'>
                                    <img src='../../static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg'
                                         class='svg ic-mat-pix' alt='camera'>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <input type="file" name="claimImage" id="claimImage" accept="image/*" onchange="afficherImage()">

            <div class="troc-add-content">
                <div id="troc-title" style="margin-left: 130px">
                    <label for="subject">Sujet de la réclamation</label><br>
                    <input type="text" name="subject" id="subject" class="form-control" placeholder="Sujet de la réclamation." required>
                    <div class="validator"></div>
                </div>
                <div class="troc-add-content" style="margin-left: 85px">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" placeholder="Faites-nous part de votre réclamation" cols="4" rows="5"></textarea>
                </div><br><br>

                <button type="submit" class="form-button" style="margin-right: 118px">
                    <div class="button valid-button">
                        <div class="waves waves-prune">
                            Soumettre
                        </div>
                    </div>
                </button><br><br>
            </div>
        </div>
    </div>
</form>

                            </div></span>

</div>
            <script>
                const Filter = require('bad-words');
                const filter = new Filter();

                function filterBadWords() {
                    console.log('Filtering bad words...');

                    const subjectInput = document.getElementById('subject');
                    const descriptionInput = document.getElementById('description');

                    console.log('Original Subject: ' + subjectInput.value);
                    console.log('Original Description: ' + descriptionInput.value);

                    subjectInput.value = filter.clean(subjectInput.value);
                    descriptionInput.value = filter.clean(descriptionInput.value);

                    console.log('Filtered Subject: ' + subjectInput.value);
                    console.log('Filtered Description: ' + descriptionInput.value);
                }

                document.getElementById('add-troc').addEventListener('submit', function (e) {
                    filterBadWords(); // Call the function to filter bad words before form submission
                });


                document.getElementById('add-troc').addEventListener('submit', function (e) {
                    filterBadWords(); // Call the function to filter bad words before form submission
                });
            </script>


            <script>
                function afficherImage() {
                    const input = document.getElementById('claimImage');
                    const preview = document.getElementById('imagePreview');

                    if (input.files && input.files[0]) {
                        const reader = new FileReader();

                        reader.onload = function (e) {
                            preview.src = e.target.result;
                        };

                        reader.readAsDataURL(input.files[0]);
                    } else {
                        preview.src = "";
                    }
                }

                </script>
</article>

</div>



    @extends('FrontEnd.Section.footer')

</div>


</HTML>
