<!DOCTYPE html>
        @extends('FrontEnd.section.header')
@section('pageTitle', 'Noisette')
<div id="main">
	


  <div id="animation-banner" class="web">		
    <div id="could-banner" class="no-overflow">
     <div id="cloud1" class="cloud">	
      <img src="https://cf.mytroc.fr/image/jackpot/nuage1.svg" data-load="https://cf.mytroc.fr/image/sketch/nuage1.svg" alt="nuage" class="svg">


    </div>
    <div id="cloud2" class="cloud">
      <img src="https://cf.mytroc.fr/image/jackpot/nuage2.svg" data-load="https://cf.mytroc.fr/image/sketch/nuage2.svg" alt="nuage" class="svg">



    </div>
    <div id="cloud3" class="cloud">
      <img src="https://cf.mytroc.fr/image/jackpot/nuage3.svg" data-load="https://cf.mytroc.fr/image/sketch/nuage3.svg" alt="nuage" class="svg">



    </div>
    <div id="cloud4" class="cloud">
      <img src="https://cf.mytroc.fr/image/jackpot/nuage1.svg" data-load="https://cf.mytroc.fr/image/sketch/nuage1.svg" alt="nuage" class="svg">



    </div>
    <div id="cloud5" class="cloud">
      <img src="https://cf.mytroc.fr/image/jackpot/nuage2.svg" data-load="https://cf.mytroc.fr/image/sketch/nuage2.svg" alt="nuage" class="svg">



    </div>
  </div>
  <h1 class="title">La machine à noisettes </h1>

</div>


<div class="content">

 <div id="jackpot-login"></div>
 <article id="jackpot">
   <div class="bg1 top-sep"></div>
   <div class="bg2"></div>
   <div class="inline-center">
    <!-- machine a noisette -->
    <div id="machine-a-noisettes">
     <div class="container">

      <img src="https://cf.mytroc.fr/image/jackpot/machine.svg" class="machine svg">



      <div class="sprites jackpot text" id="jack-text">			<img src="https://cf.mytroc.fr/image/jackpot/text/gen/3ac623aaf2a80ec911f23e0af04f556b.svg" class="svg t2" alt=""></div>												
      <div class="sprites jackpot manette" id="manette">			<img src="https://cf.mytroc.fr/image/jackpot/ff2cd83f3fc6589a33bd40bb96c56ebf.svg" class="svg m1" alt="jackpot noisette"></div>	
      <div class="sprites jackpot roll" id="roll1">	<img src="https://cf.mytroc.fr/image/jackpot/roll/gen/783b0b6103a451229d7df404e9fe47fa.png" class=" e3" alt="jackpot noisette"></div>						<div class="sprites jackpot roll" id="roll2">	<img src="https://cf.mytroc.fr/image/jackpot/783b0b6103a451229d7df404e9fe47fa.png" class=" e5" alt="jackpot noisette"></div>						<div class="sprites jackpot roll" id="roll3">	<img src="https://cf.mytroc.fr/image/jackpot/783b0b6103a451229d7df404e9fe47fa.png" class=" e1" alt="jackpot noisette"></div>							
      <div id="pleaseWaitTomorrow" style="display:none">
       <div>Vous avez déjà joué aujourd'hui,</div>
       <div>Vous pourrez retenter votre chance demain !</div>
     </div>			

     <div id="looser" style="display:none">
       <div>perdu</div>
     </div>			
     <div id="winner" style="display:none">							
       <div id="clonableNut" class="clonableNut"><div class="sprites icones">			<img src="https://cf.mytroc.fr/image/jackpot/21e0151d35abd56f1a6a8a5a712ec8b8.svg" class="svg nuts" alt="noisette"></div></div>
     </div>	

     <div id="winner-congrat" style="display:none">
       <div>Bravo</div>			
       <div id="win-share">
        Partager sur 	<div class="social-sharer">

          <ul>
           <li>
            <a class="share fb" href="http://www.facebook.com/sharer/sharer.php?u=winnerurl" target="_blank" rel="nofollow">
             <div class="sprites icones">			<img src="https://cf.mytroc.fr/image/jackpot/21e0151d35abd56f1a6a8a5a712ec8b8.svg" class="svg social fb white" alt="facebook"></div>				</a>						
           </li>
           <li>
            <a class="share gplus" href="https://plus.google.com/share?url=winnerurl" target="_blank" rel="nofollow">
             <div class="sprites icones">			<img src="https://cf.mytroc.fr/image/jackpot/21e0151d35abd56f1a6a8a5a712ec8b8.svg" class="svg social gplus white" alt="google plus"></div>					
           </a>						
         </li>
         <li>
          <a class="share twitter" href="https://twitter.com/share?url=winnerurl&amp;related=MyTrocOfficiel" target="_blank" rel="nofollow">
           <div class="sprites icones">			<img src="https://cf.mytroc.fr/image/jackpot/21e0151d35abd56f1a6a8a5a712ec8b8.svg" class="svg social twitter white" alt="twitter"></div>				</a>						
         </li>												
       </ul>
     </div>
   </div>							

 </div>
 <a href="https://mytroc.fr/mes-noisettes">
   <div id="badge-ribbon-shadow"></div>
   <div id="badge-ribbon">					
    <span>0</span> <div class="sprites icones">			<img src="https://cf.mytroc.fr/image/jackpot/21e0151d35abd56f1a6a8a5a712ec8b8.svg" class="svg nuts" alt="noisette"></div>							</div>
  </a>

</div>
</div>
<div id="win-table">
 <h2>Tableau des gains</h2>
 <div>
  <div class="sprites jackpot roll">	<img src="https://cf.mytroc.fr/image/jackpot/roll/gen/783b0b6103a451229d7df404e9fe47fa.png" class=" e5" alt="jackpot noisette"></div>						<div class="sprites jackpot roll">	<img src="https://cf.mytroc.fr/image/jackpot/roll/gen/783b0b6103a451229d7df404e9fe47fa.png" class=" e5" alt="jackpot noisette"></div>						<div class="sprites jackpot roll">	<img src="https://cf.mytroc.fr/image/jackpot/roll/gen/783b0b6103a451229d7df404e9fe47fa.png" class=" e5" alt="jackpot noisette"></div>						= <span>50 <div class="sprites icones">			<img src="https://mytroc.fr/static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg" class="svg nuts" alt="noisette"></div></span>		
</div>
<div>
  <div class="sprites jackpot roll">	<img src="https://cf.mytroc.fr/image/jackpot/783b0b6103a451229d7df404e9fe47fa.png" class=" e4" alt="jackpot noisette"></div>						<div class="sprites jackpot roll">	<img src="https://cf.mytroc.fr/image/jackpot/783b0b6103a451229d7df404e9fe47fa.png" class=" e4" alt="jackpot noisette"></div>						<div class="sprites jackpot roll">	<img src="https://cf.mytroc.fr/image/jackpot/783b0b6103a451229d7df404e9fe47fa.png" class=" e4" alt="jackpot noisette"></div>						= <span>10 <div class="sprites icones">			<img src="https://cf.mytroc.fr/image/jackpot/21e0151d35abd56f1a6a8a5a712ec8b8.svg" class="svg nuts" alt="noisette"></div></span>		
</div>
<div>
  <div class="sprites jackpot roll">	<img src="https://cf.mytroc.fr/image/jackpot/783b0b6103a451229d7df404e9fe47fa.png" class=" e3" alt="jackpot noisette"></div>						<div class="sprites jackpot roll">	<img src="https://cf.mytroc.fr/image/jackpot/783b0b6103a451229d7df404e9fe47fa.png" class=" e3" alt="jackpot noisette"></div>						<div class="sprites jackpot roll">	<img src="https://cf.mytroc.fr/image/jackpot/783b0b6103a451229d7df404e9fe47fa.png" class=" e3" alt="jackpot noisette"></div>						= <span>5 <div class="sprites icones">			<img src="https://cf.mytroc.fr/image/jackpot/21e0151d35abd56f1a6a8a5a712ec8b8.svg" class="svg nuts" alt="noisette"></div></span>		
</div>
<div>
  <div class="sprites jackpot roll">	<img src="https://cf.mytroc.fr/image/jackpot/783b0b6103a451229d7df404e9fe47fa.png" class=" e2" alt="jackpot noisette"></div>						<div class="sprites jackpot roll">	<img src="https://cf.mytroc.fr/image/jackpot/783b0b6103a451229d7df404e9fe47fa.png" class=" e2" alt="jackpot noisette"></div>						<div class="sprites jackpot roll">	<img src="https://cf.mytroc.fr/image/jackpot/783b0b6103a451229d7df404e9fe47fa.png" class=" e2" alt="jackpot noisette"></div>						= <span>3 <div class="sprites icones">			<img src="https://cf.mytroc.fr/image/jackpot/21e0151d35abd56f1a6a8a5a712ec8b8.svg" class="svg nuts" alt="noisette"></div></span>		
</div>
<div>
  <div class="sprites jackpot roll">	<img src="https://cf.mytroc.fr/image/jackpot/783b0b6103a451229d7df404e9fe47fa.png" class=" e1" alt="jackpot noisette"></div>						<div class="sprites jackpot roll">	<img src="https://cf.mytroc.fr/image/jackpot/783b0b6103a451229d7df404e9fe47fa.png" class=" e1" alt="jackpot noisette"></div>						<div class="sprites jackpot roll">	<img src="https://cf.mytroc.fr/image/jackpot/783b0b6103a451229d7df404e9fe47fa.png" class=" e1" alt="jackpot noisette"></div>						= <span>1 <div class="sprites icones">			<img src="https://cf.mytroc.fr/image/jackpot/21e0151d35abd56f1a6a8a5a712ec8b8.svg" class="svg nuts" alt="noisette"></div></span>		
</div>
<img src="https://cf.mytroc.fr/image/jackpot/oiseau_right_down.svg" id="jack-bird" class="svg">


</div>
</div>
<input id="am-i-connected" type="hidden" value="1">
<input id="can-i-play" type="hidden" value="1">

</article>
<div id="jack-desc" class="top-sep">

 <p class="large">Rien que pour vous, voici la machine à noisettes !</p>
 <p>Vous pouvez jouer une fois par jour et vous avez 1 chance sur 3 de gagner !</p>
 <p>Ce sont nos écureuils qui vont être contents </p>
</div>
<div id="jackpot-of-fame" class="top-sep">
 <div id="tree" class="web">				
  <img src="https://cf.mytroc.fr/image/jackpot/arbre_optim.svg" alt="arbre" class="svg">



</div>


<div class="center">
  <div class="banner banner-purple ">
    <div class="banner-inside waves waves-prune" data-wave-scale="30">

      <a href="https://mytroc.fr/machine-a-noisette#last-winner">		

       <div class="banner-content">Derniers gagnants</div>
     </a>
   </div>
   <div class="banner-shadows"></div>
 </div>	
</div>				
<ul>
 <li class="winner">
  <div class="details">
   <h3>fidjy</h3>

   <div class="date">
   Le 22/09					</div>
   <div class="sharing">
    <span>Partager sur </span>
    <div class="social-sharer">

      <ul>
       <li>
        <a class="share fb" href="http://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fmytroc.fr%2Fmachine-a-noisette%3Ffb%3D387144" target="_blank" rel="nofollow">
         <div class="sprites icones">			<img src="https://cf.mytroc.fr/image/jackpot/21e0151d35abd56f1a6a8a5a712ec8b8.svg" class="svg social fb white" alt="facebook"></div>				</a>						
       </li>
       <li>
        <a class="share gplus" href="https://plus.google.com/share?url=https%3A%2F%2Fmytroc.fr%2Fmachine-a-noisette%3Ffb%3D387144" target="_blank" rel="nofollow">
         <div class="sprites icones">			<img src="https://cf.mytroc.fr/image/jackpot/21e0151d35abd56f1a6a8a5a712ec8b8.svg" class="svg social gplus white" alt="google plus"></div>					
       </a>						
     </li>
     <li>
      <a class="share twitter" href="https://twitter.com/share?url=https%3A%2F%2Fmytroc.fr%2Fmachine-a-noisette%3Ffb%3D387144&amp;related=MyTrocOfficiel" target="_blank" rel="nofollow">
       <div class="sprites icones">			<img src="https://cf.mytroc.fr/image/jackpot/21e0151d35abd56f1a6a8a5a712ec8b8.svg" class="svg social twitter white" alt="twitter"></div>				</a>						
     </li>												
   </ul>
 </div>
</div>
<div class="gain">

  5 <div class="sprites icones">			<img src="https://cf.mytroc.fr/image/jackpot/21e0151d35abd56f1a6a8a5a712ec8b8.svg" class="svg nuts" alt="noisette"></div>					</div>

</div>			
<div class="square">
 <div class="square-content">
  <img src="https://cf.mytroc.fr/image/jackpot/f46606a6fb6686bdd584667d881aba9f.jpg" alt="fidjy">
</div>
</div>

</li>
<li class="winner">
  <div class="details">
   <h3>malabar</h3>

   <div class="date">
   Le 22/09					</div>
   <div class="sharing">
    <span>Partager sur </span>
    <div class="social-sharer">

      <ul>
       <li>
        <a class="share fb" href="http://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fmytroc.fr%2Fmachine-a-noisette%3Ffb%3D387143" target="_blank" rel="nofollow">
         <div class="sprites icones">			<img src="https://cf.mytroc.fr/image/jackpot/21e0151d35abd56f1a6a8a5a712ec8b8.svg" class="svg social fb white" alt="facebook"></div>				</a>						
       </li>
       <li>
        <a class="share gplus" href="https://plus.google.com/share?url=https%3A%2F%2Fmytroc.fr%2Fmachine-a-noisette%3Ffb%3D387143" target="_blank" rel="nofollow">
         <div class="sprites icones">			<img src="https://cf.mytroc.fr/image/jackpot/21e0151d35abd56f1a6a8a5a712ec8b8.svg" class="svg social gplus white" alt="google plus"></div>					
       </a>						
     </li>
     <li>
      <a class="share twitter" href="https://twitter.com/share?url=https%3A%2F%2Fmytroc.fr%2Fmachine-a-noisette%3Ffb%3D387143&amp;related=MyTrocOfficiel" target="_blank" rel="nofollow">
       <div class="sprites icones">			<img src="https://cf.mytroc.fr/image/jackpot/21e0151d35abd56f1a6a8a5a712ec8b8.svg" class="svg social twitter white" alt="twitter"></div>				</a>						
     </li>												
   </ul>
 </div>
</div>
<div class="gain">

  10 <div class="sprites icones">			<img src="https://cf.mytroc.fr/image/jackpot/21e0151d35abd56f1a6a8a5a712ec8b8.svg" class="svg nuts" alt="noisette"></div>					</div>

</div>			
<div class="square">
 <div class="square-content">
  <img src="https://cf.mytroc.fr/image/jackpot/3cc4452d26c13018656f66b0aec2eb50.jpg" alt="malabar">
</div>
</div>

</li>


</ul>
</div>		

<noscript>
  Ce site utilise Javascript, vous devez activer Javascript pour que le site fonctionne correctement.				<div>&nbsp;</div><div>
   <a href="https://support.google.com/chrome/answer/114662?hl=fr" target="_blank" rel="external nofollow">
   Param&egrave;trer javascript dans Google Chrome &copy;					</a>
 </div><div>
   <a href="https://support.mozilla.org/fr/kb/parametres-javascript-pages-interactives" target="_blank" rel="external nofollow">
    Param&egrave;trer javascript dans Mozilla Firefox &copy;						
  </a>
</div><div>
 <a href="http://support.microsoft.com/gp/howtoScript/fr" target="_blank" rel="external nofollow">
  Param&egrave;trer javascript dans Internet Explorer &copy;						
</a>
</div><div>
 <a href="http://support.apple.com/fr-fr/HT1677" target="_blank" rel="external nofollow">
 Param&egrave;trer javascript dans Apple Safari &copy;						</a>
</div><div>
 <a href="http://help.opera.com/Windows/12.10/fr/javascript.html" target="_blank" rel="external nofollow">
  Param&egrave;trer javascript dans Opera de Opera Software &copy;						
</a>																				
</div> 
</noscript>
</div>

</div> 



<noscript><p><img src="//mytroc.fr/analytics/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- end Piwik  Pixel Code -->
<img style="opactiy:0" src="https://cf.mytroc.fr/image/jackpot/tr">


<script type="text/javascript" charset="UTF-8" src="https://cf.mytroc.fr/image/jackpot/script.js.download" async="" defer="" onload="jQueryReadyCB()"></script>
@extends('FrontEnd.section.footer')
</HTML>