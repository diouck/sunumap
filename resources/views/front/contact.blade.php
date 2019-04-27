@extends('front.layout')
@section('scripts')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.2/dist/leaflet.css" />
        <script src="https://unpkg.com/leaflet@1.0.2/dist/leaflet.js"></script>
        <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyCTIn22N0OJ6j4PjvTkqi8ROqN_XhKZUyQ"></script>
        <script type="text/javascript" src="../../assets/lib/leaflet/leaflet-google-correct-v1.js"></script>

 
@endsection
@section('main')


<!--start wrapper-->
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
                            <li>Contact</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>

        <section class="contact_2">
            <div class="maps">
                
        <div id="page_maps"  ></div>
    

               
            </div>
            <div class="container">
                <div class="row sub_content">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="dividerHeading">
                            <h4><span>Contacter-nous </span></h4>
                        </div>
                        <p>Si vous préférez nous contacter par e-mail, nous ferons en sorte de vous répondre sous 24 heures. Nous ne vous enverrons des messages publicitaires. Chez SunuMAP, nous accordons une grande importance à vos préférences en matière de confidentialité. Veuillez consulter notre politique de confidentialité pour plus d’informations.</p>
                        <hr>
                        <div class="alert alert-success hidden alert-dismissable" id="contactSuccess">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Success!</strong> Nous accuserons réception de votre message par retour d’e-mail à l’adresse que vous nous avez communiquée. À noter : tous les e-mails envoyés par le service client de Bose proviennent de l’adresse contact@sunumap.fr. Il est donc possible que certains filtres anti-spam bloquent nos réponses, identifiées comme courrier indésirable. Si vous ne recevez pas d’e-mail de confirmation dans les heures qui suivent l’envoi de votre message, ajoutez l’adresse contact@sunumap.fr à la liste des expéditeurs de confiance de votre filtre anti-spam.
                        </div>

                        <div class="alert alert-error hidden" id="contactError">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Error!</strong> There was an error sending your message.
                        </div>

                        @if (session('ok'))
                            @component('front.components.alert')
                                @slot('type')
                                    success
                                @endslot
                                {!! session('ok') !!}
                            @endcomponent
                        @endif
                    <form method="post" action="{{ route('contacts.store') }}">
                      {{ csrf_field() }}
                            @if ($errors->has('name'))
                                @component('front.components.error')
                                    {{ $errors->first('name') }}
                                @endcomponent
                            @endif 
                        <div class="row">
                            <div class="form-group">
                                <div class="col-lg-6 ">
                                    <input type="text" id="name" name="name" class="form-control" maxlength="100" required autofocus value="{{ old('name') }}" placeholder="@lang('Your name')" >
                                </div> 
                                @if ($errors->has('email'))
                                    @component('front.components.error')
                                        {{ $errors->first('email') }}
                                    @endcomponent
                                @endif 


                                <div class="col-lg-6 ">
                                    <input type="email" id="email" name="email" class="form-control" maxlength="100"  value="{{ old('email') }}" placeholder="@lang('Your email')" required>
                                </div> 
                                @if ($errors->has('message'))
                                    @component('front.components.error')
                                        {{ $errors->first('message') }}
                                    @endcomponent
                                @endif 
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="text" id="subject" name="subject" class="form-control" maxlength="100" data-msg-required="Please enter the subject." value="" placeholder="Subject">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <textarea id="message" class="form-control" name="message" rows="10" cols="50"  maxlength="5000" placeholder="@lang('Your message')"></textarea>


                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" data-loading-text="Loading..." class="btn btn-default btn-lg" "placeholder="@lang('Your message')" >
                            </div>
                        </div>
                    </form>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="sidebar">
                            <div class="widget_info">
                                <div class="dividerHeading">
                                    <h4><span>Service clients</span></h4>
                                </div>
                                <p>Appelez ou planifiez un rendez-vous téléphonique.Assistance commerciale : du lundi au samedi de 8h à 22h. </p>
                                <ul class="widget_info_contact">
                                    <li><i class="fa fa-map-marker"></i><strong>Address</strong> <p>: 64, Rue Ibn Khamis, 13000 Tlemcen <br>Algérie</p></li>
                                    <li><i class="fa fa-envelope"></i><strong>Email</strong> <p>: <a href="#">webmaster@sunumap.fr</a></p> <p>: <a href="#">contact@sunumap.fr</a></p></li>
                                    <li><i class="fa fa-phone"></i><strong>Our Phone</strong> <p>: (+213) 43 27 57 90</p><p>: (+213) 5 49 83 88 97</p></li>
                                </p><p>: (+33) 6 89 09 42 61</p></li>
                                </ul>
                            </div>

                            <div class="widget_social">
                                <ul class="widget_social">
                                    <li><a class="fb" href="#." data-placement="bottom" data-toggle="tooltip" title="Facbook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twtr" href="#." data-placement="bottom" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="gmail" href="#." data-placement="bottom" data-toggle="tooltip" title="Google"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a class="dribbble" href="#." data-placement="bottom" data-toggle="tooltip" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a class="skype" href="#." data-placement="bottom" data-toggle="tooltip" title="Skype"><i class="fa fa-skype"></i></a></li>
                                    <li><a class="pinterest" href="#." data-placement="bottom" data-toggle="tooltip" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a class="instagram" href="#." data-placement="bottom" data-toggle="tooltip" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                                    <li><a class="youtube" href="#." data-placement="bottom" data-toggle="tooltip" title="Youtube"><i class="fa fa-youtube"></i></a></li>
                                    <li><a class="linkedin" href="#." data-placement="bottom" data-toggle="tooltip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a class="flickrs" href="#." data-placement="bottom" data-toggle="tooltip" title="Flickr"><i class="fa fa-flickr"></i></a></li>
                                    <li><a class="rss" href="#." data-placement="bottom" data-toggle="tooltip" title="RSS"><i class="fa fa-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </section>
<!--end wrapper-->




 
  
      
@endsection
