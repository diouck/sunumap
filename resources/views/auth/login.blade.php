@extends('front.layout')

@section('main')
     <!--start wrapper-->
    <section class="wrapper">
        <section class="page_head">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="page_title">
                            <h2>Connexion</h2>
                        </div>
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a>/</li>
                                <li>Pages</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section class="content right_sidebar">
            

 


<div class="container">

        <div class="row">
           
                <div class="col-sm-6 col-md-4 col-md-offset-4">
                    @if (session('confirmation-success'))
                        @component('front.components.alert')
                            @slot('type')
                                success
                            @endslot
                            {!! session('confirmation-success') !!}
                        @endcomponent
                    @endif
                    @if (session('confirmation-danger'))
                        @component('front.components.alert')
                            @slot('type')
                                error
                            @endslot
                            {!! session('confirmation-danger') !!}
                        @endcomponent
                    @endif
                   
                    <form class="form-signin" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        @if ($errors->has('log'))
                            @component('front.components.error')
                                {{ $errors->first('log') }}
                            @endcomponent
                        @endif  


                        <input id="log" type="text" placeholder="@lang('Login')" class="form-control" name="log" value="{{ old('log') }}" required autofocus>
                        <input id="password" type="password" placeholder="@lang('Password')" class="form-control" name="password" required>
                        <button class="btn btn-lg btn-primary btn-block" value="@lang('Login')" type="submit">
                         @lang('Login')</button>
                        <label class="checkbox pull-left">
                        <input type="checkbox" >
                        @lang('Remember me')
                        </label>
                        <a href="{{ route('password.request') }}" class="pull-right need-help"> @lang('Forgot Your Password?') </a><span class="clearfix"></span>
                    
                    </form>
                    <a href="{{ route('register') }}" class="text-center new-account"> @lang('Not registered?') </a>
                </div>
                
             </div>
        </div>
    </div>
    </section>
@endsection
