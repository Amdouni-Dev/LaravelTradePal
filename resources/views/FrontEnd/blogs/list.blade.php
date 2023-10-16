<!DOCTYPE html>
@extends('FrontEnd.section.header')
@section('pageTitle', 'Profile')
<div id="main">

  <div class="content"> 
    <div class="center-div"> 
      <div id="popup-login-group"></div>
      <div class="communaute-bar">
        <div class="tright">
          <a href="https://mytroc.fr/group/create/">
            Vous pouvez désormais créer votre communauté privée sur MyTroc ! 

            <div id="add-button" class="ubutton">
              Créer ma communauté
            </div>
          </a>
        </div>
      </div>
      <div id="popup-apply-group"></div>
      <div id="list">       
        <ul id="group-list">
        @if(!@empty($blogs))
          @foreach ($blogs as $blog )
          <li class="card-group">
            <div class="card-group-content">
                <a href="https://mytroc.fr/group/montpel-39-lier-63f727ea5844b/">
                <div class="half-square"><div class="square-content">
                    <img src="./Troc et consommation responsable sur MyTroc.fr_files/7abd02d1226c4aabf0247e0156a9490b.jpg" class="group-pix">
                    <div class="mask background"></div>
                    <img src="./Troc et consommation responsable sur MyTroc.fr_files/bottom-mask.svg" class="svg">
                </div>
                <div class="square-content">
                    <h2>{{ $blog->title}}</h2>
                    <div class="square profil">
                        <div class="square-content">
                            <img src="./Troc et consommation responsable sur MyTroc.fr_files/8c0a09d0b4829d0aaffd85aa2b323b80.jpg" class="group-pix">
                        </div>
                    </div>
                </div>
                </div></a><div class="description">
                    <a href="https://mytroc.fr/group/montpel-39-lier-63f727ea5844b/">
                    <div class="text-description">
                        <div class="text-description-content">
                            <p class="text-ellipsis">{{ $blog->content }}</p>
                        </div>
                    </div></a>
                    <div class="syndication">
                        <div class="button half-button group-more-details">
                            <a href="https://mytroc.fr/group/montpel-39-lier-63f727ea5844b/">
            <div class="sprites group-icones">      
                <img src="/image/sprites/groups/gen/1ab094d311707c08f6204cdfa841a272.svg" class="svg eye-white" alt="">
            </div>     Détails</a></div>
            <div class="button half-button  group-apply" data-gid="10103">
              <div class="sprites group-icones">      
                <img src="/image/sprites/groups/gen/1ab094d311707c08f6204cdfa841a272.svg" class="svg add-white" alt="">
            </div>     Rejoindre</div></div>
            <table class="metrics">
                <tbody>
                    <tr>
                        <td class="bright">
                            
                            <div class="value">{{ $blog->views }} views

                            </div>
                        </td>
                        <td>
                            <div class="value">
                                <div class="sprites group-icones">      
                                    <img src="/image/sprites/groups/gen/1ab094d311707c08f6204cdfa841a272.svg" class="svg marker-blue" alt=""></div>     {{ $blog->likes }} likes
                                </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</li>

          @endforeach
        @endif
              </div>

            </div> 
          </div>
          </html>