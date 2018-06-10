@extends('front.layout')

@section('main') 
  <!--start wrapper-->
  <section class="wrapper">
        <section class="page_head">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="page_title">
                            <h2>Crédits et Mentions Légales</h2>
                        </div>
                        <nav id="breadcrumbs">
                            <ul>
                                 <li><a href="{{ route('home') }}">Accueil</a>/</li>
                                <li>Mentions Légales</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

    <section class="content not_found">
      <div class="container">
        <div class="row">
          <div class="col-sm-12  ">
            <div class=" ">
              <h2>Mentions Légales</h2> 
              
              <h3>Présentation</h3>
              <p>SunuMap est une entreprise spécialisée dans les solutions géomatiques, SunuMap se compose d’un groupe d’experts en SIG, Télédétection, Cartographie, Informatique, Webmapping, Topographie. Elle propose des solutions à la mise en place de bases de données, au traitement de l’information géographique, à la diffusion de données géographiques sur plusieurs plateformes. SunuMap offre un package de solutions adaptées à la gestion des collectivités locales : parcellaire, plans topographiques, réseaux urbains, foncier, etc.</p>

              <h3>Editeur du site</h3>
              <p>Abdou DIOUCK, 6 rue de l'indre 44800 Nantes, France.</p>
              <p>Téléphone : 0689094261</p>
              <p>Siret : 573 000 989  44926</p>

              <h3>Responsable de la publication</h3>
              <p>Abdou DIOUCK</p>

              <h3>Hébergeur</h3>
              <p>OVH, 2 rue Kellermann 59100 Roubaix – France.</p>


              <a href="{{ route('home') }}" class="btn btn-default btn-lg">
                <i class="fa fa-arrow-circle-o-left"></i>
                Accueil
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
 
  </section>
  <!--end wrapper--> 
      
@endsection