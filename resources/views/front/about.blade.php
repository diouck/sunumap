@extends('front.layout')

@section('main')          <!--start wrapper-->
  <section class="wrapper">
        <section class="page_head">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="page_title">
                            <h2></h2>
                        </div>
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="{{ route('home') }}">Accueil</a>/</li>
                                <li>A propos de nous</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
    
    <section class="content about">
      <div class="container">
        <div class="row sub_content">
          <div class="who">
            <div class="col-lg-8 col-md-8 col-sm-8">
              <div class="dividerHeading">
                <h4><span>Qui sommes nous?</span></h4>
              </div>
                <img style="width: 350px" class="left_img img-thumbnail" src="images/sunumap/info-carto.png" alt="about img">
                            <p>BESCI (Bureau d'Etude Solutions et Conseils en Informatique), est un bureau d'études spécialisé en géomatique (cartographie et SIG), et Webmapping.</p>

                            <p>BESCI fournit à ses clients des solutions et applications cartographiques, à forte valeur ajoutée.</p>

                            <p>Notre métier est d’accompagner nos clients dans l’acquisition et le traitement de la donnée, en ajoutant la composante géographique, mettant à leur disposition, ainsi un nouveau moyen d’analyse et un support de communication efficace.</p>
              Depuis toujours l'information géographiques et sa diffusions est un enjeu majeur. Elle est au coeur de toute prise de décision et sa maîtrise est indispensable au fonctionnement du monde tel que nous le connaissons.</p>

                            <p>De plus en plus utilisés dans différents domaines, la réussite d’un projet de mise en place d’un SIG, nécessite au préalable, comme tout SI (Système d’Information), le passage par des étapes essentielles, permettant ainsi d’identifier le périmètre du projet.
                            Utilisés dans différents secteurs, car représentant un outil utile d'aide à la décision, on retrouve les SIG dans :</p>


                                        </div>
            
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="dividerHeading">
                <h4><span>Nos secteurs d'activités</span></h4>
              </div>
              <!--<p>Nunc et magna nisi. lore Aliquam at erat in lorem purus aliquet mollis. Fusce elementum velit vel dolor iaculis. </p>-->
              <ul class="progress-skill-bar">
                <li>
                  <span class="lable">*</span>
                  <div class="progress_skill">
                    <div class="bar" data-value="100" role="progressbar" data-height="100">
                      Système d'information géographique
                    </div>
                  </div>
                </li>
                <li>
                  <span class="lable">*</span>
                  <div class="progress_skill">
                    <div class="bar" data-value="100" role="progressbar" data-height="100">
                      
                                    Traitement et extraction d'images satellite
 
                    </div>
                  </div>
                </li>
                <li>
                  <span class="lable">*</span>
                  <div class="progress_skill">
                    <div class="bar" data-value="90" role="progressbar" data-height="100">
                      Application cartographique interactive
                    </div>
                  </div>
                </li>
                <li>
                  <span class="lable">*</span>
                  <div class="progress_skill">
                    <div class="bar" data-value="80" role="progressbar" data-height="100">
                      Conseil et formation
                    </div>
                  </div>
                </li>
                <li>
                  <span class="lable">*</span>
                  <div class="progress_skill">
                    <div class="bar" data-value="70" role="progressbar" data-height="100">
                      Formation
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        
        <div class="row sub_content">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="dividerHeading">
              <h4><span>Pourquoi nous choisir?</span></h4>

            </div>
            <ul class="list_style circle">
              <li><a href="#"> Notre expertise au service de vos besoins</a></li>
              <li><a href="#"> La fiabilité et la qualité de nos solutions au service de votre performance</a></li>
              <li><a href="#"> L'innovation et la créativité : le moteur de notre développement</a></li>
              <li><a href="#"> La réactivité de nos services : la clé de votre satisfaction</a></li>
              <li><a href="#"> L'adaptabilité de nos solutions à l’évolution de vos exigences</a></li>
              <li><a href="#"> L’écoute de vos besoins : pour une prise en compte efficace de vos attentes</a></li>
              <li><a href="#"> Une éthique résolument durable</a></li>
            </ul>
          </div>
          
          <!-- TESTIMONIALS 
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="dividerHeading">
              <h4><span>Avis de nos partenaires</span></h4>

            </div>
            <div id="testimonial-carousel" class="testimonial carousel slide">
              <div class="carousel-inner">
                <div class="active item">
                  <div class="testimonial-item">
                    <div class="icon"><i class="fa fa-quote-right"></i></div>
                    <blockquote>
                      <p>Donec convallis, metus nec tempus aliquet, nunc metus adipiscing leo, a lobortis nisi dui ut odio. Nullam ultrices, eros accumsan vulputate faucibus, turpis tortor dictum.</p>
                    </blockquote>
                    <div class="icon-tr"></div>
                    <div class="testimonial-review">
                      <img src="images/testimonials/1.png" alt="testimoni">
                      <h1>Jonathan Dower,<small>Company Inc.</small></h1>
                    </div>
                  </div>
                </div>
                
                <div class="item">
                  <div class="testimonial-item">
                    <div class="icon"><i class="fa fa-quote-right"></i></div>
                    <blockquote>
                      <p>Nunc aliquet tincidunt metus, sit amet mattis lectus sodales ac. Suspendisse rhoncus dictum eros, ut egestas eros luctus eget. Nam nibh sem, mattis et feugiat ut, porttitor nec risus.</p>
                    </blockquote>
                    <div class="icon-tr"></div>
                    <div class="testimonial-review">
                      <img src="images/testimonials/2.png" alt="testimoni">
                      <h1>Jonathan Dower<small>Leopard</small></h1>
                    </div>
                  </div>
                </div>
                
              </div>
              <div class="testimonial-buttons"><a href="#testimonial-carousel" data-slide="prev"><i class="fa fa-chevron-left"></i></a>&#32;
              <a href="#testimonial-carousel" data-slide="next"><i class="fa fa-chevron-right"></i></a></div>
            </div>
          </div> TESTIMONIALS END -->

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="dividerHeading">
                            <h4><span>Notre équipe</span></h4>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="our-team">
                            <div class="pic">
                                <img src="images/sunumap/user.jpg" alt="profile img">
                                <div class="social_media_team">
                                    <ul class="team_social">
                                        <li><a class="fb" href="#." data-placement="top" data-toggle="tooltip" title="Facbook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="twtr" href="#." data-placement="top" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                       <li><a class="gmail" href="mailto:contact@info-carto.dz" data-placement="top" data-toggle="tooltip" title="Envoyer un email"><i class="fa fa-envelope"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team_prof">
                                <h3 class="post-title">El Mahfoud SEDJELMACI  <small>Web Developer</small></h3>
                                <hr>
                              <!--  <p class="description">Phasellus ac libero ac tellus pellentesque semper. Sed ac felis. Sed commo, magnase quis lacinia ornare, quam ante aliqua nisi, eu iaculis leo purus venenatis scelerisque. </p>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="our-team">
                            <div class="pic">
                                <img src="images/sunumap/user.jpg" alt="profile img">
                                <div class="social_media_team">
                                    <ul class="team_social">
                                        <li><a class="fb" href="#." data-placement="top" data-toggle="tooltip" title="Facbook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="twtr" href="#." data-placement="top" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="gmail" href="mailto:contact@info-carto.dz" data-placement="top" data-toggle="tooltip" title="Envoyer un email"><i class="fa fa-envelope"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team_prof">
                                <h3 class="post-title">Abdou DIOUCK<small>Ingénieure SIG/Web developpeur</small></h3><hr>
                               <!-- <p class="description">De formation SIGAT avec d’un Master de Télédétection, analyse spatiale et environnement (TASE) à l’Université de Rennes 2. Abdou Kâne maitrise les outils de géomatique, de solides expériences dans l’interprétation d’images satellites et photographies aériennes et le developpement d'applications cartographiques.  </p>-->
                            </div>
                        </div>
                    </div> 
                </div> 
          </div>
    </section>
  </section>
  <!--end wrapper-->



 
  
      
@endsection