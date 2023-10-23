  <!DOCTYPE html>
  @extends('FrontEnd.section.header')
  @section('pageTitle', 'Profile')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

  <div id="main">
      <div id="animation-banner" class="web">
          <div id="could-banner" class="no-overflow">
              <div id="cloud1" class="cloud">
                  <img src="./Troc et consommation responsable sur MyTroc.fr_files/nuage1.svg"
                      data-load="https://cf.mytroc.fr/image/sketch/nuage1.svg" alt="nuage" class="svg">
              </div>
              <div id="cloud2" class="cloud">
                  <img src="./Troc et consommation responsable sur MyTroc.fr_files/nuage2.svg"
                      data-load="https://cf.mytroc.fr/image/sketch/nuage2.svg" alt="nuage" class="svg">
              </div>
              <div id="cloud3" class="cloud">
                  <img src="./Troc et consommation responsable sur MyTroc.fr_files/nuage3.svg"
                      data-load="https://cf.mytroc.fr/image/sketch/nuage3.svg" alt="nuage" class="svg">
              </div>
              <div id="cloud4" class="cloud">
                  <img src="./Troc et consommation responsable sur MyTroc.fr_files/nuage1.svg"
                      data-load="https://cf.mytroc.fr/image/sketch/nuage1.svg" alt="nuage" class="svg">
              </div>
              <div id="cloud5" class="cloud">
                  <img src="./Troc et consommation responsable sur MyTroc.fr_files/nuage2.svg"
                      data-load="https://cf.mytroc.fr/image/sketch/nuage2.svg" alt="nuage" class="svg">
              </div>
          </div>
          <h1 class="title">Mon Profil</h1>
      </div>
      <div class="content">
          <div class="my-profile top-sep">
              <div id="tree" class="web">
                  <img src="./Troc et consommation responsable sur MyTroc.fr_files/arbre_optim.svg" alt="arbre"
                      class="svg">
              </div>
              <nav class="profile-menu">
                  <ul>
                      <li class="   ">
                          <div class="pancarte even ">
                              <a href="https://mytroc.fr/inbox">
                                  <div class="pancarte-content">
                                      <img src="/image/menu/oiseau_right_up.svg" alt="oiseau" class="bird web svg">
                                      <div class="link waves">Mes messages<span class="nUnreadMessage"></span></div>
                                      <div class="dot tl"></div>
                                      <div class="dot tr"></div>
                                      <div class="dot bl"></div>
                                      <div class="dot br"></div>
                                  </div>
                              </a>
                          </div>
                          <div class="rope right">&nbsp;</div>
                          <div class="rope left">&nbsp;</div>
                      </li>
                      <li class="   ">
                          <div class="pancarte even ">
                              <!-- <a href="https://mytroc.fr/mes-trocs"> -->
                              <a href="/item/show">
                                  <div class="pancarte-content">

                                      <div class="link waves">Mes objets</div>
                                      <div class="dot tl"></div>
                                      <div class="dot tr"></div>
                                      <div class="dot bl"></div>
                                      <div class="dot br"></div>

                                  </div>
                              </a>
                          </div>
                          <div class="rope right">&nbsp;</div>
                          <div class="rope left">&nbsp;</div>
                      </li>
                      <li class="   ">
                          <div class="pancarte odd ">
                              <!-- <a href="https://mytroc.fr/mes-trocs"> -->
                              <a href="/requests/show-offer">
                                  <div class="pancarte-content">

                                      <div class="link waves">Mes offres</div>
                                      <div class="dot tl"></div>
                                      <div class="dot tr"></div>
                                      <div class="dot bl"></div>
                                      <div class="dot br"></div>

                                  </div>
                              </a>
                          </div>
                          <div class="rope right">&nbsp;</div>
                          <div class="rope left">&nbsp;</div>
                      </li>
                      <li class="   ">
                          <div class="pancarte even ">
                              <!-- <a href="https://mytroc.fr/mes-trocs"> -->
                              <a href="/requests/show-request">
                                  <div class="pancarte-content">

                                      <div class="link waves">Mes Demandes</div>
                                      <div class="dot tl"></div>
                                      <div class="dot tr"></div>
                                      <div class="dot bl"></div>
                                      <div class="dot br"></div>

                                  </div>
                              </a>
                          </div>
                          <div class="rope right">&nbsp;</div>
                          <div class="rope left">&nbsp;</div>
                      </li>
                      <li class="   ">
                          <div class="pancarte odd ">
                              <a href="https://mytroc.fr/mes-noisettes">
                                  <div class="pancarte-content">
                                      <div class="link waves">Mes noisettes</div>
                                      <div class="dot tl"></div>
                                      <div class="dot tr"></div>
                                      <div class="dot bl"></div>
                                      <div class="dot br"></div>
                                  </div>
                              </a>
                          </div>
                          <div class="rope right">&nbsp;</div>
                          <div class="rope left">&nbsp;</div>
                      </li>
                      <li class="   ">
                          <div class="pancarte odd ">
                              <a href="https://mytroc.fr/agrandir-la-communaute-mytroc">
                                  <div class="pancarte-content">

                                      <div class="link waves">Agrandir la communauté</div>
                                      <div class="dot tl"></div>
                                      <div class="dot tr"></div>
                                      <div class="dot bl"></div>
                                      <div class="dot br"></div>
                                  </div>
                              </a>
                          </div>
                          <div class="rope right">&nbsp;</div>
                          <div class="rope left">&nbsp;</div>
                      </li>
                      <li class="   ">
                          <div class="pancarte even ">
                              <a href="https://mytroc.fr/parrainages">
                                  <div class="pancarte-content">

                                      <div class="link waves">Parrainage</div>
                                      <div class="dot tl"></div>
                                      <div class="dot tr"></div>
                                      <div class="dot bl"></div>
                                      <div class="dot br"></div>
                                  </div>
                              </a>
                          </div>
                          <div class="rope right">&nbsp;</div>
                          <div class="rope left">&nbsp;</div>
                      </li>
                      <li class="   ">
                          <div class="pancarte odd ">
                              <a href="https://mytroc.fr/dons-aux-associations">
                                  <div class="pancarte-content">

                                      <div class="link waves">Dons aux assos</div>
                                      <div class="dot tl"></div>
                                      <div class="dot tr"></div>
                                      <div class="dot bl"></div>
                                      <div class="dot br"></div>
                                  </div>
                              </a>
                          </div>
                          <div class="rope right">&nbsp;</div>
                          <div class="rope left">&nbsp;</div>
                      </li>
                      <li class="   ">
                          <div class="pancarte even ">
                              <a href="https://mytroc.fr/modifier-mon-profil">
                                  <div class="pancarte-content">

                                      <div class="link waves">Modifier mon profil</div>
                                      <div class="dot tl"></div>
                                      <div class="dot tr"></div>
                                      <div class="dot bl"></div>
                                      <div class="dot br"></div>
                                  </div>
                              </a>
                          </div>
                          <div class="rope right">&nbsp;</div>
                          <div class="rope left">&nbsp;</div>
                      </li>
                  </ul>
              </nav>
              <article class="profil mine top-sep" style="max-width: 4096px;">
                  <div class="container">

                      <h1 class="smart">
                          {{ auth()->user()->name }}
                      </h1>
                      <div class="profil-head">
                          <div class="profil-pix mine class_box_shadow">
                              <div class="square ">
                                  <div class="square-content">
                                      <img src="{{ auth()->user()->profile_picture }}"
                                          alt="troqueur aymen laroussi , sur mytroc">
                                      <form id="image-upload" method="post" target="targetUpload"
                                          enctype="multipart/form-data">
                                          <div class="file-with-style">
                                              <label for="image-input">
                                                  <div class="sprites icones"> <img
                                                          src="/static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg"
                                                          class="svg ic-mat-pix" alt="camera"></div>
                                              </label>
                                              <input id="image-input" type="file" name="piix"
                                                  accept="image/*">
                                          </div>
                                          <input type="hidden" name="MAX_FILE_SIZE" value="30000">
                                      </form>
                                      <div id="upload-img-error" class="flash" style="display:none"></div>
                                      <div class="dnone">
                                          <iframe id="targetUpload" name="targetUpload"
                                              src="./Troc et consommation responsable sur MyTroc.fr_files/saved_resource.html"></iframe>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="user-metas">
                              <h1 class="web">
                                  {{ auth()->user()->name }}
                              </h1>
                              <div class="city">#{{ auth()->user()->username }}</div>
                              <div class="postal">
                                  <br>
                                  Email : {{ auth()->user()->email }}
                                  <br>
                                  Télephone : {{ auth()->user()->phone }}
                                  <br>
                                  Crée le : {{ auth()->user()->created_at }}
                              </div>
                          </div>
                          <div id="animator" class=" web">
                          </div>
                      </div>
                      <!-- -->
                      <div>
                          <div class="profil-space">

                              <div class="smart-half">
                              </div>

                              <div class="smart-half">

                              </div>

                              <div class="smart smart-half">
                                  <div class="registration ">Membre depuis le 2023-09-18</div>
                              </div>

                              <div id="scoring" class="score smart-half">
                                  <span>
                                      <ul class="scoring" itemprop="reviewRating" itemscope=""
                                          itemtype="http://schema.org/Rating">

                                          <span itemprop="ratingValue" style="display:none">0</span>


                                          <li>
                                              <div class="sprites icones"> <img
                                                      src="./Troc et consommation responsable sur MyTroc.fr_files/21e0151d35abd56f1a6a8a5a712ec8b8.svg"
                                                      class="svg leaf inactive" alt="feuille inactive"></div>
                                          </li>


                                          <li>
                                              <div class="sprites icones"> <img
                                                      src="./Troc et consommation responsable sur MyTroc.fr_files/21e0151d35abd56f1a6a8a5a712ec8b8.svg"
                                                      class="svg leaf inactive" alt="feuille inactive"></div>
                                          </li>


                                          <li>
                                              <div class="sprites icones"> <img
                                                      src="./Troc et consommation responsable sur MyTroc.fr_files/21e0151d35abd56f1a6a8a5a712ec8b8.svg"
                                                      class="svg leaf inactive" alt="feuille inactive"></div>
                                          </li>


                                          <li>
                                              <div class="sprites icones"> <img
                                                      src="./Troc et consommation responsable sur MyTroc.fr_files/21e0151d35abd56f1a6a8a5a712ec8b8.svg"
                                                      class="svg leaf inactive" alt="feuille inactive"></div>
                                          </li>


                                          <li>
                                              <div class="sprites icones"> <img
                                                      src="./Troc et consommation responsable sur MyTroc.fr_files/21e0151d35abd56f1a6a8a5a712ec8b8.svg"
                                                      class="svg leaf inactive" alt="feuille inactive"></div>
                                          </li>


                                      </ul>
                                      <div id="popup-evaluations" class="open-popup">
                                          <p>(Toutes les évaluations)</p>
                                          <input type="hidden" class="uid" value="390165">
                                          <input type="hidden" class="gid" value="0">
                                      </div>
                                  </span>
                              </div>

                              <div id="private-messenger-popup" class="button-bar smart-half">

                              </div>

                              <div class="button-bar smart-half">
                              </div>



                              <div>
                                  <div class="measures">
                                      <div id="troc-done" class="smart-half">
                                          <div class="measure">
                                              <div class="sprites icones"> <img
                                                      src="/static/image/sprites/icones/gen/21e0151d35abd56f1a6a8a5a712ec8b8.svg"
                                                      class="svg icone-box" alt="carton"></div>
                                              <span>0</span>
                                          </div>
                                          <div class="label-hover">Troc réalisé</div>
                                      </div>

                                  </div>
                              </div>

                              <div>
                                  <div class="wallet smart-half">
                                      <a href="https://mytroc.fr/mes-noisettes">
                                          <div class="sprites icones"> <img src="/image/menu/noisette.png"
                                                  class="svg nuts" alt="noisette" style="width: 45px;"></div>
                                          {{ auth()->user()->hazelnuts }}
                                      </a>
                                  </div>

                              </div>

                              <div>
                              </div>

                              <div>
                              </div>


                          </div>
                          <div class="user-infos">
                              <div id="member-description">
                                  <h2>Description</h2>
                                  <p>{{ auth()->user()->bio }}</p>
                              </div>
                              <div>
                                  <div id="friendships">
                                      <div id="friends">
                                          <h2>
                                              Mes <span>troc'</span>
                                              <div class="sprites icones"> <img
                                                      src="./Troc et consommation responsable sur MyTroc.fr_files/21e0151d35abd56f1a6a8a5a712ec8b8.svg"
                                                      class="svg hearth" alt="terre"></div>
                                          </h2>
                                          <div id="list-friends">
                                              <p class="friends-list">Cet utilisateur n'a pas encore ajouté de
                                                  troc'coeurs.</p>
                                          </div>
                                      </div>

                                  </div>


                                  <div id="bookmarks">
                                      <h2><span>Mes Trocs favoris&nbsp;</span>
                                          <div class="sprites icones"> <img src="/image/menu/noisette.png"
                                                  class="svg icone-fav-yellow" alt="dans les favoris"></div>
                                      </h2>
                                      <div id="list-bookmarks">Vous n'avez pas encore de trocs favoris.</div>
                                      <div id="more-bookmarks" class="more-button" style="display: none;">
                                          <div class="button">
                                              Voir plus de favoris
                                          </div>
                                          <a href="https://mytroc.fr/mon-profil" class="infiniScroll">&nbsp;</a>
                                      </div>
                                  </div>
                              </div>


                          </div>
                      </div>
                  </div>


              </article>
          </div>



      </div>


      <noscript>
          Ce site utilise Javascript, vous devez activer Javascript pour que le site fonctionne correctement. <div>
              &nbsp;</div>
          <div>
              <a href="https://support.google.com/chrome/answer/114662?hl=fr" target="_blank"
                  rel="external nofollow">
                  Param&egrave;trer javascript dans Google Chrome &copy; </a>
          </div>
          <div>
              <a href="https://support.mozilla.org/fr/kb/parametres-javascript-pages-interactives" target="_blank"
                  rel="external nofollow">
                  Param&egrave;trer javascript dans Mozilla Firefox &copy;
              </a>
          </div>
          <div>
              <a href="http://support.microsoft.com/gp/howtoScript/fr" target="_blank" rel="external nofollow">
                  Param&egrave;trer javascript dans Internet Explorer &copy;
              </a>
          </div>
          <div>
              <a href="http://support.apple.com/fr-fr/HT1677" target="_blank" rel="external nofollow">
                  Param&egrave;trer javascript dans Apple Safari &copy; </a>
          </div>
          <div>
              <a href="http://help.opera.com/Windows/12.10/fr/javascript.html" target="_blank"
                  rel="external nofollow">
                  Param&egrave;trer javascript dans Opera de Opera Software &copy;
              </a>
          </div>
      </noscript>
  </div>
  @extends('FrontEnd.section.footer')

  </HTML>
