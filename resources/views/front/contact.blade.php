@extends('front.layout')

@section('main')


<!--start wrapper-->
<section class="wrapper">
    <section class="page_head">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="page_title">
                        <h2>Nous contacter</h2>
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
                <div id="page_maps"></div>
            </div>
            <div class="container">
                <div class="row sub_content">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="dividerHeading">
                            <h4><span>Get in Touch</span></h4>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet deleniti ducimus fuga quidem quisquam ut!</p>

                        <div class="alert alert-success hidden alert-dismissable" id="contactSuccess">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Success!</strong> Your message has been sent to us.
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
                                    <h4><span>Contact Info</span></h4>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet deleniti ducimus fuga quidem quisquam ut!</p>
                                <ul class="widget_info_contact">
                                    <li><i class="fa fa-map-marker"></i><strong>Address</strong> <p>: #2021 Lorem Ipsum<br>Delhi</p></li>
                                    <li><i class="fa fa-envelope"></i><strong>Email</strong> <p>: <a href="#">mail@example.com</a></p> <p>: <a href="#">mail@example.com</a></p></li>
                                    <li><i class="fa fa-phone"></i><strong>Our Phone</strong> <p>: (+91) 9000-12345</p><p>: (+91) 8000-54321</p></li>
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