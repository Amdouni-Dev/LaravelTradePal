<!DOCTYPE html>
@extends('FrontEnd.section.header')
@section('pageTitle', 'TradePal - '  . $blog->title)
<link rel="stylesheet" href="/back/assets/vendor/fonts/boxicons076f.css?id=b821a646ad0904f9218f56d8be8f070c" />
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
								<td><i class="bx bx-like me-1">{{$blog->likes}}</i></td>
								<td>⠀</td>
								<td><i class="menu-icon tf-icons bx bx-message-dots">{{$blog->likes}}</i></td>
							</tr>
						</table>
						<div> {!! $blog->content !!}</div>
						<br><br>
						<div><i style="font-size:3rem;color:#bfd578" class="bx bxs-purchase-tag-alt me-1"></i>{{ $blog->tags }}<br><br><br></div>
						<div>
							<div class="third">
								<div>
									<i style="font-size:3rem;color:#a54458" class="bx bx-heart me-1"></i>
									<i style="font-size:3rem;color:#a54458" class="bx bxs-heart me-1"></i>							
								</div>
							</div>
							<div class="third">
								<div>
									<i style="font-size:3rem;color:#3c7aa9" class="bx bxs-share-alt me-1"></i>							
								</div>
							</div>
						</div>			 
					</div>
					<ul class="temoignages">
						<li>
							<div class="temoignage-pix square" style="width:80px">
								<div class="square-content">
									<img src="/image/profils/user.jpg" class="">
								</div>		
							</div>
							<div class="temoignage-content">
								<h2>John Doe</h2>
									Hello World!					
							</div>
						</li>
					</ul>
				</div>
			</article>
		</div>
	</div>
</HTML>    