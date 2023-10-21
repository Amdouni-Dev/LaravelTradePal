<!DOCTYPE html>
@extends('FrontEnd.section.header')
@section('pageTitle', 'Articles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
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
                    </div> <a href="/new-blog">Rediger un article</a>
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
                          <i class="bx bx-calendar" style="color:white"> {{$blog->publicationDate}}</i>
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
                          <a href="/blogs/author/{{$blog->username}}">
                            <i class="bx bx-pen"> {{$blog->nameuser}}</i>
                          </a>
                        </div>
                      </div>
                      <table class="metrics">
                        <tbody>
                          <tr>
                            <td class="bright">
                              <i style="font-size:2rem;color:#bf9471" class="bx bxs-user me-1"></i>
                              <div class="value">{{$blog->views}} Visiteurs</div>
                            </td>
                            <td class="bright">
                              <i style="font-size:2rem;color:#bf9471" class="bx bxs-heart me-1"></i>
                              <div class="value">
                                @if ($blog->likes == 0)
                                    {{$blog->likes}} J'aime
                                @else
                                    {{$blog->likes}} J'aimes
                                @endif
                              </div>
                            </td>
                            <td class="bright">
                              <i style="font-size:2rem;color:#bf9471" class="bx bxs-comment me-1"></i>
                              <div class="value">
                                @if ($blog->likes == 0)
                                    0 commentaire
                                @else
                                    {{$blog->countomments}} commentaires
                                @endif
                              </div>
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