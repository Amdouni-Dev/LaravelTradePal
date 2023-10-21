<!DOCTYPE html>
@extends('FrontEnd.section.header')
@section('pageTitle', 'TradePal - '  . $blog->title)
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<meta property="og:title" content="Your Page Title">
    <meta property="og:description" content="A description of your page">
    <meta property="og:image" content="https://example.com/path-to-thumbnail-image.jpg">
    <meta property="og:url" content="https://yourwebsite.com/page-url">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Your Website Name">
<link rel="stylesheet" href="/back/assets/vendor/fonts/boxicons076f.css?id=b821a646ad0904f9218f56d8be8f070c" />
<link href="/css/emoji.css" rel="stylesheet">
<meta charset="UTF-8">
<link href="/css/twemoji-basis.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
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
<div id="main">
	<div id="animation-banner" class="web">		
		<div id="could-banner" class="no-overflow">
			<div id="cloud1" class="cloud">	
				<img src="/image/sketch/nuage1.svg" data-load="/image/sketch/nuage1.svg" alt="nuage" class="svg">
			</div>
			<div id="cloud2" class="cloud">
				<img src="/image/sketch/nuage2.svg" data-load="/image/sketch/nuage2.svg" alt="nuage" class="svg">
			</div>
			<div id="cloud3" class="cloud">
				<img src="/image/sketch/nuage3.svg" data-load="/image/sketch/nuage3.svg" alt="nuage" class="svg">
			</div>
			<div id="cloud4" class="cloud">
				<img src="/image/sketch/nuage1.svg" data-load="/image/sketch/nuage1.svg" alt="nuage" class="svg">
			</div>
			<div id="cloud5" class="cloud">
				<img src="/image/sketch/nuage2.svg" data-load="/image/sketch/nuage2.svg" alt="nuage" class="svg">
			</div>
		</div>
		<div id="birdheader" class="birdheader">				
			<img src="/image/sketch/oiseau_banniere.svg" data-load="/image/sketch/oiseau_banniere.svg" alt="bird" class="svg">
		</div>
		<div class="content">
			<article class="testify" style="background-color:#bddde3">
				<div class="container top-sep" style="background-color: #bddde3;">
					<div class="thanks">
						<h2 style="font-size:2rem">{{ $blog->title}}</h2>
						<table>
							<tr><i class="bx bx-pen"> {{$blog->username}}</i><br></tr>
							<tr><i class="bx bx-calendar"> {{$blog->publicationDate}}</i><br></tr>
							<tr>
								<td><i class="bx bx-show-alt me-1">{{$blog->views}}</i></td>
								<td>⠀</td>
								<td>
										<i class="bx bx-like me-1">{{$likedCommentCount}}</i>
									
									</td>
								<td>⠀</td>
								<td><i class="menu-icon tf-icons bx bx-message-dots">{{$commentCount}}</i></td>
							</tr>
						</table>
						<br><br>
						<div> {!! $blog->content !!}</div>
						<br><br>
						<div><i style="font-size:3rem;color:#bfd578" class="bx bxs-purchase-tag-alt me-1"></i>
						@foreach (explode(',', $blog->tags) as $tag)
							@php
								$tag = trim($tag);
							@endphp
							<a href="{{ url('blog/tag/' . $tag) }}">{{ $tag }}</a>
						@endforeach
						
						<br><br><br></div>
						<div>
							<div class="third">
								<div>
								@auth
									<form action="{{ route('like.toggle', ['user_id' => Auth::user()->id, 'blog_id' => $blog->id]) }}" method="post">
										@csrf
										@if ($likedComments->isEmpty())
											<button type="submit" class="like-button">
												<i style="font-size: 3rem; color: #a54458" class="bx bx-heart me-1"></i>
											</button>
										@else
											<button type="submit" class="like-button">
												<i style="font-size: 3rem; color: #a54458" class="bx bxs-heart me-1"></i>
											</button>
										@endif
									</form>
								@else
									<form action="/login" method="get">
										<button type="submit" class="like-button">
											<i style="font-size: 3rem; color: #a54458" class="bx bx-heart me-1"></i>
										</button>
									</form>
								@endauth
								</div>
							</div>
							<div class="third">
								<div>
									<i style="font-size:3rem;color:#3c7aa9" class="bx bxs-share-alt me-1 btn facebook"></i>							
								</div>
							</div>
						</div>			 
					</div>
					<ul class="temoignages">
					@foreach($blog->comments as $comment)
						@if($comment->content !== null)
							<li>
								<div class="temoignage-pix square" style="width:80px">
									<div class="square-content">
										<img src="/image/profils/user.jpg" class="">
									</div>
								</div>
								<div class="temoignage-content">
									<table style="min-width: 100%;">
										<tr>
											<td  style="text-align: left;">
												<h2>{{ $comment->user->name }}</h2>
											</td>
											<td style="text-align: right;">
												<h2>{{ $comment->created_at }}</h2>
											</td>
										</tr>
									</table>
									<p style="font-size:20px">{{ $comment->content }}</p>
								</div>
							</li>
						@endif
					@endforeach
					@auth
						<form method="POST" action="{{ url('/storeComment') }}">
						@csrf
							<table>
								<tr>
									<td style="min-width: 45rem;">
										<p class="lead emoji-picker-container" style="background:white">
											<textarea name="content" style="min-height:0rem"  class="form-control textarea-control" rows="3" placeholder="Ecrire votre commentaire" data-emojiable="true"></textarea>
										</p>
										<input type="hidden" value="{{ $blog->id}}" name="blog_id">
										<input type="hidden" value="{{ Auth::user()->id}}" name="user_id">
									</td>
									<td>
										<button type="submit" style="background: transparent; border: none;">
											<i style="font-size:3rem;color:#a54458;" class="bx bxs-send me-1"></i>							
										</button>
									</td>
								</tr>
							</table>
						</form>
					@else
						<table>
								<tr>
									<td style="min-width: 45rem;">
										<p class="lead emoji-picker-container" style="background:white">
											<textarea name="content" style="min-height:0rem"  class="form-control textarea-control" rows="3" placeholder="Ecrire votre commentaire" data-emojiable="true"></textarea>
										</p>
										<input type="hidden" value="{{ $blog->id}}" name="blog_id">
									</td>
									<td>
										<button style="background: transparent; border: none;" onclick="window.location.href = '/login';">
											<i style="font-size:3rem;color:#a54458;" class="bx bxs-send me-1"></i>							
										</button>
									</td>
								</tr>
							</table>
					@endauth
				</ul>	
			</div>
		</article>
	</div>
</div>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="/js/config.min.js"></script>
<script src="/js/util.min.js"></script>
<script src="/js/jquery.emojiarea.min.js"></script>
<script src="/js/emoji-picker.min.js"></script>
<script>
  $(function() {
    window.emojiPicker = new EmojiPicker({
      emojiable_selector: '[data-emojiable=true]',
      assetsPath: '../lib/img/',
      popupButtonClasses: 'fa fa-smile-o'
  	});
    window.emojiPicker.discover();
	var elements = document.getElementsByClassName("emoji-picker-icon emoji-picker fa fa-smile-o");
	for (var i = 0; i < elements.length; i++) {
		var element = elements[i];
		element.style.fontSize = "2rem";
	}
	var textarea = document.querySelector(".textarea-control");
    textarea.style.backgroundColor = "white";
    });
</script>
<script>
	var text = encodeURIComponent("Follow JavaScript Jeep form Amazing JavaScript Tutorial");
	var url = "https://medium.com/@jagathishsaravanan/"; 
	var user_id = "jagathish1123";
	var hash_tags = "JS,JavaScript,100DaysOfCode,Programming";
	var params = "menubar=no,toolbar=no,status=no,width=570,height=570"; // for window

	var facebook = document.querySelector('.facebook');
	var twitter = document.querySelector('.twitter');

	facebook.addEventListener('click', function(ev) {
	console.log("hi");
	var tags = [];

		@foreach (explode(',', $blog->tags) as $tag)
			@php
				$tag = trim($tag);
			@endphp

			// Push each tag to the array
			tags.push("{{ $tag }}");
		@endforeach

		// Join the tags array into a single string
		var hashtags = tags.join('_');
		let shareUrl = `https://www.facebook.com/sharer.php?u=www.tradepal.tn/blog/{{$blog->id}}&hashtag=%23${hashtags}&quote=repository%20of%20amiga%20software`;
		window.open(shareUrl,"NewWindow" , params);  
	});
	twitter.addEventListener('click', function(ev) {
	let shareUrl = `https://twitter.com/intent/tweet?url=${url}&text=${text}&via=${user_id}&hashtags=${hash_tags}`;
	window.open(shareUrl,"NewWindow" , params);
	});
</script>
</HTML>    