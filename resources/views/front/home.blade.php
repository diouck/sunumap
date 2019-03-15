@extends('front.layout')

@section('main')

  <!--start wrapper-->
    <section class="wrapper">
    <!--Start Slider-->
        <div class="slider-wrapper">
            <div class="slider">
                <div class="fs_loader"></div>
                <div class="slide">
                    <img src="images/fraction-slider/base.jpg" width="1920" height="auto" data-in="fade" data-out="fade" />

                    <img src="images/fraction-slider/GIS_Softwares.png" width="600" height="400" data-position="30,1100" data-in="left" data-out="right" data-delay="700"/>

                    <p class="slide-1" data-position="50,610" data-in="fade" data-out="fade" data-delay="800">Bureau d’études </p>
                    <p class="slide-1" data-position="100,560" data-in="fade" data-out="fade" data-delay="1200"> en ingénierie géomatique  </p>
                    <p class="slide-1" data-position="150,500" data-in="fade" data-out="fade" data-delay="1600">spécialiste et innovant.</p>

                    <p class="slide-1a" data-position="220,770" data-in="bottom" data-out="bottom" data-delay="2000" data-ease-in="easeOutBounce">systèmes d'information géographique (SIG)</p>
                    <p class="slide-1a" data-position="267,698" data-in="bottom" data-out="bottom" data-delay="3200"  data-ease-in="easeOutBounce">cartographies interactives 2 D et 3 D</p>
                    <p class="slide-1a" data-position="314,760" data-in="bottom" data-out="bottom" data-delay="4200"  data-ease-in="easeOutBounce">base de données de projet et/ou d'exploitation,</p>
                    <p class="slide-1a" data-position="361,753" data-in="bottom" data-out="bottom" data-delay="5200"  data-ease-in="easeOutBounce">solutions client-serveur...</p>
                </div>

                <div class="slide">
                    <img src="images/fraction-slider/base_2.jpg" width="1920" height="auto" data-in="fade" data-out="fade" />

                    <img src="images/fraction-slider/urbanisme.jpg" width="600" height="545" data-position="20,400" data-in="right" data-0ut="bottom" data-delay="500"/>

                    <p class="slide-2 " data-position="120,900" data-in="bottom" data-out="top" data-delay="2000">SOLUTIONS POUR LES COLLECTIVITÉS</p>
                    <p class="slide-2a " data-position="210,900" data-in="left" data-out="right" data-delay="3000">Urbanisme, Habitat, Mobilité</p>
                    <p class="slide-2b " data-position="270,900" data-in="top" data-out="bottom" data-delay="4000" data-ease-in="easeOutBounce">Environnement, Energie, Réseaux</p>
                    <p class="slide-2b " data-position="330,900" data-in="bottom" data-out="top" data-delay="5000" data-ease-in="easeOutBounce">Dématérialisation de documents d'urbanisme</p>
                </div>

                <div class="slide">
                    <img src="images/fraction-slider/base_3.jpg"  width="1920" height="auto" data-in="fade" data-out="fade" />

                    <p class="slide-heading" data-position="130,370" data-in="top" data-out="top" data-ease-in="easeOutBounce" data-delay="1500">Open-Source et innovation</p>

                    <p class="sub-line" data-position="230,370" data-in="right" data-out="left" data-delay="2500">Développement d'applications métiers sur mesure</p>

                    <img src="images/fraction-slider/gadgets/laptop.png" width="456" height="272" data-position="115,1180" data-in="bottom" data-out="bottom" data-delay="400">

                    <img src="images/fraction-slider/gadgets/mack.png" width="357" height="313" data-position="90,1040" data-in="top" data-out="bottom" data-delay="200">

                    <img src="images/fraction-slider/gadgets/ipad.png" width="120" height="170" data-position="230,1030" data-in="left" data-out="left" data-delay="300">

                    <img src="images/fraction-slider/gadgets/smartphone.png" width="70" height="140" data-position="270,1320" data-in="right" data-out="right" data-delay="300">

                    <a href="/contacts/create"  class="btn btn-lg btn-default" data-position="320,370" data-in="bottom"  data-out="bottom" data-delay="3700" data-ease-in="easeOutBounce">Contactez-nous</a>
                </div>

            </div>
        </div>
    <!--End Slider-->
        <!--start info service-->
       <section class="info_service">
            <div class="container">
                <div class="row sub_content wow fadeIn">
                    <div class="col-md-3 col-sm-6">
                        <div class="serviceBox_2 green">
                            <div class="service-icon">
                                <i class="fa fa-globe"></i>
                            </div>
                            <div class="service-content">
                                <h3><a href="/category/sig-teledetection">SIG & Télédétéction</a></h3>
                                <p>Mise en place & implementation des SIG, Réalisation de bases données géographiques d'occupation et d'usage des sols.</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="serviceBox_2 purple">
                            <div class="service-icon">
                                <i class="fa fa-rocket"></i>
                            </div>
                            <div class="service-content">
                                <h3><a href="/category/conseils-communication"> Conseils & Communication</a></h3>
                                <p> Intégration, conseils et audits.</p>
                                 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="serviceBox_2 red">
                            <div class="service-icon">
                                <i class="fa fa-user-md"></i>
                            </div>
                            <div class="service-content">
                                <h3><a href="/category/formation"> Formation</a></h3>
                                <p> Se former aux métiers de l'informatique, de la cartographie, et du SIG,...</p>
                                 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="serviceBox_2 blue">
                            <div class="service-icon">
                                <i class="fa fa-twitter"></i>
                            </div>
                            <div class="service-content">
                                <h3 ><a href="/category/applications-cartographiques"> Applications en ligne</a></h3>
                                <p> Développement d'applications cartographiques interactives pour utiliser et valoriser vos données géographiques..</p>
                                 >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--end info service-->

        <section>
            <div class="container">
                <div class="row sub_content">
 
                    <div class="col-md-12 col-lg-12">
                        <div class="dividerHeading">
                            <h4><span>NOTRE EXPERTISE: </span></h4>
                            <p>Par un savoir-faire éprouvé et du pragmatisme, nos interventions de conseil sont destinées à apporter une valeur ajoutée pertinente et concrète, en amont ou en aval des projets de nos clients. Nous intervenons également sur des missions stratégiques à haute valeur ajoutée (PRA, PCA, Audit, Sécurité, Migration, Cloud, ITIL…).</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="serviceBox_3">
                            <div class="service-image">
                                <img src="images/services/sunumap-production-données.png"/>
                            </div>
                            <div class="service-content">
                                <h3>PRODUCTION DE DONNÉES GÉOGRAPHIQUES</h3>
                            </div>
                        </div>
                        <div class="panel-body">A partir d’outils mobiles (SIG Nomades et GPS) ; et de l’hybridation de données image (aérienne, pléiade, landsat, Modis), nous produisons des séries de données , fiables, à jour et riches  qui décrivent vos territoires de l’échelle régionale, à la grande échelle. Cœur de métier historique,  cette expertise unique est reconnue au plan national, et par de nombreuses régions.</div>
                    </div>
                    <div class="col-sm-4">
                        <div class="serviceBox_3">
                            <div class="service-content bg1">
                                <h3>ANALYSE SPATIALE</h3>
                            </div>
                            <div class="service-image">
                                <img src="images/services/isochrones-multi-modales-nantes-diouck.png"/>
                            </div>
                        </div>  
                       <div class="panel-body">Nous vous proposons des compétences pointues sur les outils d’analyse spatiales, complété d’une expertise métier ciblée, pour établir des portraits de territoire. Les supports cartographiques sont claires, accessibles, et ce à toutes les échelles. Les indicateurs établis sont robustes…et reproductibles !.</div>
                    </div>
                    <div class="col-sm-4">
                        <div class="serviceBox_3">
                            <div class="service-image">
                                <img src="images/services/communication.png"/>
                            </div>
                            <div class="service-content bg2">
                                <h3>DIFFUSION ET COMMUNICATION</h3>
                            </div>
                        </div>
                        <div class="panel-body">La diffusion de données peut être effectuée suivant une grande variété de supports : cartes papier, services de carte web, formats SIG, CD-ROM, serveurs de données. En quelques clics, vous pouvez accèdent à une source d’information précieuse et complète : points d’intérêts (institutions, commerces, loisirs, patrimoine historique et culturel…), températures, risques majeurs (inondations, incendies), information en 2D et en 3D, reliefs, photos aériennes.</div>
                    </div>

                     
                </div>
            </div>
        </section>
 
       
        <section class="feature-block">
            <div class="container">
                <div class="row super_sub_content">
                    <div class="col-lg-6 wow fadeInLeft">

                        <div class="text-center">
                            <img src="images/services/webmapping.png" alt="" width="99%" />
                        </div>
                        <hr>
                            <i class="fa fa-apple"></i>
                            <i class="fa fa-windows"></i>
                            <i class="fa fa-clock-o"></i>
                            <i class="fa fa-android"></i>
                            <i class="fa fa-paperclip"></i>
                            <i class="fa fa-skype"></i>
                        <hr>
                    </div>

                    <div class="col-lg-6 fadeInRight">
                        <h4>Développement d'applications cartographiques Open Source et Responsive Designs</h4>
                        <p>Les logiciels ne répondent pas à l’ensemble de vos attentes ?
Vous avez besoin d’une application sur mesure pour piloter votre activité et optimiser vos performances ?
Vous souhaitez une application cartographique intégrée à votre système d’information ?</p>
<p>
Confiez la réalisation de votre projet à des experts de la cartographie : l’entreprise INFOCARTO sait mettre au service de votre projet une équipe de spécialistes en géo-décisionnel : développeurs, consultants, géographes, formateurs.</p>
                         
                        <a href="" class="btn btn-default btn-md">En savoir plus</a>&nbsp; 
                    </div>
                </div>
            </div>
        </section>
 
        <!--
        <section class="clients">
            <div class="container">
                <div class="row sub_content">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="dividerHeading">
                            <h4><span>Nos Clients</span></h4>
                        </div>
                        
                        <div class="our_clients">
                            <ul class="client_items clearfix">
                                <li class="col-sm-3 col-md-3 col-lg-3"><a href="services.html"  data-placement="bottom" data-toggle="tooltip" title="Client 1" ><img src="images/clients/1.png" alt="" /></a></li>
                                <li class="col-sm-3 col-md-3 col-lg-3"><a href="services.html" data-placement="bottom" data-toggle="tooltip" title="Client 2" ><img src="images/clients/2.png" alt="" /></a></li>
                                <li class="col-sm-3 col-md-3 col-lg-3"><a href="services.html" data-placement="bottom" data-toggle="tooltip" title="Client 3" ><img src="images/clients/3.png" alt="" /></a></li>
                                <li class="col-sm-3 col-md-3 col-lg-3"><a href="services.html" data-placement="bottom" data-toggle="tooltip" title="Client 4" ><img src="images/clients/4.png" alt="" /></a></li>
                            </ul> 
                        </div>
                    </div>
                </div>
            </div>
        </section>-->

        <section class="promo_box wow bounce">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9 col-md-9 col-lg-9">
                        <div class="promo_content">
                            <h3>Vous avez un projet?.</h3>
                            <p>Confiez la réalisation de votre projet à des experts de la cartographie . </p>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3">
                        <div class="pb_action">
                            <a class="btn btn-lg btn-default" href="/contacts/create">
                                <i class="fa fa-envelope"></i>
                                Contactez-nous
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>  <!--end wrapper-->
    
           

        

       

       
   

@endsection
