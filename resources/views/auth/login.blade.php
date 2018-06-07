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
            

<!--
            <div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Sign in to continue to Bootsnipp</h1>
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
                <form class="form-signin">
                <input type="text" class="form-control" placeholder="Email" required autofocus>
                <input type="password" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign in</button>
                <label class="checkbox pull-left">
                    <input type="checkbox" value="remember-me">
                    Remember me
                </label>
                <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                </form>
            </div>
            <a href="#" class="text-center new-account">Create an account </a>
        </div>
    </div>
</div>
-->


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
                    <h3>@lang('Login')</h3>
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
                   

                       <!-- <label class="add-bottom">
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> 
                            <span class="label-text">@lang('Remember me')</span>
                        </label>

                        <input class="button-primary full-width-on-mobile" type="submit" value="@lang('Login')">
                        <label class="add-bottom pull-left">
                            <a href="{{ route('password.request') }}">
                                @lang('Forgot Your Password?')
                            </a>
                            <br>
                            <a href="{{ route('register') }}">
                                @lang('Not registered?')
                            </a>
                        </label>-->
                    </form>
                    <a href="{{ route('register') }}" class="text-center new-account"> @lang('Not registered?') </a>
                </div>
                
             </div>
        </div>
    </div>
    </section>
@endsection
