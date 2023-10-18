<!DOCTYPE html>
@extends('FrontEnd.section.header')
@section('pageTitle', 'Profile')
<link rel="stylesheet" href="/back/assets/vendor/fonts/boxicons076f.css?id=b821a646ad0904f9218f56d8be8f070c" />
<div id="main">
  <div class="content"> 
    <div class="center-div"> 
      <div class="communaute-bar">
        <div class="tright">
          <a href="https://mytroc.fr/group/create/">
            Vous pouvez désormais créer votre article sur TRADEPAL ! 
            <div class="button half-button  group-apply" data-gid="10077">
                    <div class="sprites group-icones">
                      <img src="/image/sprites/groups/gen/1ab094d311707c08f6204cdfa841a272.svg" class="svg add-white" alt="">
                    </div> Rediger un article
                  </div>
          </a>
        </div>
      </div>
      <div id="list">       
        <ul id="group-list">
          @if(!@empty($blogs))
            @foreach ($blogs -> sortByDesc('publicationDate') as $blog )
              @if ($blog->status === 'Publique')
                <li class="card-group">
                  <div class="card-group-content">
                    <a href="/blog/{{$blog->id}}/">
                      <div class="half-square">
                        <div class="square-content">
                          <img src="/blogs/{{ $blog->featuredImage }}" class="group-pix1" style="height: 100%;width: 26rem;">
                          <div class="mask background"></div>
                          <img src="/image/group/bottom-mask.svg" class="svg">
                        </div>
                        <div class="square-content">
                          <h2>{{$blog->title}}</h2>
                          <i class="bx bx-calendar" style="font-color:white"> {{$blog->publicationDate}}</i>
                          <div class="square profil">
                            <div class="square-content">
                              <img src="/blogs/{{ $blog->featuredImage }}" style="height: 5.1rem" class="group-pix" >
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                    <div class="description">
                      <a href="/blog/{{$blog->id}}">
                        <div class="text-description">
                          <div class="text-description-content">
                            <p class="text-ellipsis"> {{ substr(strip_tags($blog->content), 0, 200) }}{{ strlen(strip_tags($blog->content)) > 200 ? '...' : '' }}</p>        
                          </div>
                          <div></div>
                        </div>
                      </a>
                      <div class="syndication">
                        <div class="button half-button group-more-details" style="width:90%">
                          <a href="https://mytroc.fr/group/les-petits-poa-612fe7c3656c7/">
                            <i class="bx bx-pen"> {{$blog->username}}</i>
                          </a>
                        </div>
                      </div>
                      <table class="metrics">
                        <tbody>
                          <tr>
                            <td class="bright">
                              <i style="font-size:2rem;color:#a54458" class="bx bxs-user me-1"></i>
                              <div class="value">{{$blog->views}} Visiteurs</div>
                            </td>
                            <td class="bright">
                              <i style="font-size:2rem;color:#a54458" class="bx bxs-heart me-1"></i>
                              <div class="value">{{$blog->likes}} J'aimes</div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </li>
              @endif
            @endforeach
          @endif
        </ul>
      </div> 
  </div>
</div>
    </div>
        @extends('FrontEnd.Section.footer')
        
</html>