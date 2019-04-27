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
                            <p>SunuMAP, est un blog dédié à l'information géographique (ananlyse spatiale et les solutions de datavizualisations open sources).</p>

                            <p>SunuMAP fournit des solutions et applications cartographiques, à forte valeur ajoutée.</p>

                             
              Depuis toujours l'information géographiques et sa diffusions est un enjeu majeur. Elle est au coeur de toute prise de décision et sa maîtrise est indispensable au fonctionnement du monde tel que nous le connaissons.</p>
 

                                        </div>
            
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="dividerHeading">
                <h4><span>Nos secteurs d'activités</span></h4>
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
          </div>
        </div>
  
          </div>
    </section>
  </section>
  <!--end wrapper-->



 
  
      
@endsection