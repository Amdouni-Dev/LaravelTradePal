<!DOCTYPE html>
@extends('FrontEnd.section.header')
@section('pageTitle', 'Articles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<style>
    .custom-textarea {
        height: 1.5rem;
    }

    .like-button {
        background-color: transparent;
        border: none;
        cursor: pointer;
    }
</style>
<link rel="stylesheet" href="/back/assets/vendor/fonts/boxicons076f.css?id=b821a646ad0904f9218f56d8be8f070c" />
<div id="main">
    <div class="content">
        <div class="center-div">
            <div class="communaute-bar">
                <div class="tright">
                    <div id="footer-mytroc-shop" style="float: initial; margin: 0; display: contents;">
                        @auth
                            <a href="/new-blog">
                                <div class="arrow-button purple">Rédiger un article</div>
                            </a>
                        @else
                            <a href="/login">
                                <div class="arrow-button purple">Rédiger un article</div>
                            </a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
        <div id="list">
            <ul id="group-list">
                @if (!@empty($blogs))
                    @foreach ($blogs->sortByDesc('publicationDate') as $blog)
                        @if ($blog->status === 'Publique')
                            <li class="card-group">
                                <div class="card-group-content">
                                    <a href="/blog/{{ $blog->id }}/">
                                        <div class="half-square">
                                            <div class="square-content">
                                                <img src="/blogs/{{ $blog->featuredImage }}" class="group-pix1"
                                                    style="height: 100%;width: 26rem;">
                                                <div class="mask background"></div>
                                                <img src="/image/group/bottom-mask.svg" class="svg">
                                            </div>

                                            <div class="square-content">
                                                @auth
                                                    @if (auth()->user()->id == $blog->user_id)
                                                        <form action="{{ route('blogs.delete', ['blog_id' => $blog->id]) }}"
                                                            method="POST"
                                                            onsubmit="return confirm('Etes-vous sûr de vouloir supprimer?');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="like-button"
                                                                style="right: 0%;position: absolute;">
                                                                <i style="font-size: 2rem; color: #a23b50"
                                                                    class="bx bx-trash me-1"></i>
                                                            </button>
                                                        </form>
                                                    @endif
                                                @endauth
                                                <h2>{{ $blog->title }}</h2>
                                                <i class="bx bx-calendar" style="color:white">
                                                    {{ $blog->publicationDate }}</i>
                                                <div class="square profil">
                                                    <div class="square-content">
                                                        <img src="/blogs/{{ $blog->featuredImage }}"
                                                            style="height: 5.1rem" class="group-pix">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="description">
                                        <a href="/blog/{{ $blog->id }}">
                                            <div class="text-description">
                                                <div class="text-description-content">
                                                    <p class="text-ellipsis">
                                                        {{ preg_replace('/&nbsp;/', ' ', substr(strip_tags($blog->content), 0, 200)) }}{{ strlen(strip_tags($blog->content)) > 200 ? '...' : '' }}
                                                    </p>
                                                </div>
                                                <div></div>
                                            </div>
                                        </a>
                                        <div class="syndication">
                                            <div class="button half-button group-more-details" style="width:90%">
                                                <a href="/blogs/author/{{ $blog->username }}">
                                                    <i class="bx bx-pen"> {{ $blog->nameuser }}</i>
                                                </a>
                                            </div>
                                        </div>
                                        <table class="metrics">
                                            <tbody>
                                                <tr>
                                                    <td class="bright">
                                                        <i style="font-size:2rem;color:#e8155a66"
                                                            class="bx bxs-user me-1"></i>
                                                        <div class="value">{{ $blog->views }} Visiteurs</div>
                                                    </td>
                                                    <td class="bright">
                                                        <i style="font-size:2rem;color:#e8155a66"
                                                            class="bx bxs-heart me-1"></i>
                                                        <div class="value">
                                                            @if ($blog->likes == 0)
                                                                {{ $blog->likes }} J'aime
                                                            @else
                                                                {{ $blog->likes }} J'aimes
                                                            @endif
                                                        </div>
                                                    </td>
                                                    <td class="bright">
                                                        <i style="font-size:2rem;color:#e8155a66"
                                                            class="bx bxs-comment me-1"></i>
                                                        <div class="value">
                                                            @if ($blog->likes == 0)
                                                                0 commentaire
                                                            @else
                                                                {{ $blog->countomments }} commentaires
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
