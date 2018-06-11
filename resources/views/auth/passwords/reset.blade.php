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
                    @if (session('status'))
                        @component('front.components.alert')
                            @slot('type')
                                success
                            @endslot
                            <p>{{ session('status') }}</p>
                        @endcomponent
                    @endif
                    <h3>@lang('Reset Password')</h3>


                    <form class="form-signin" role="form" method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="token" value="{{ $token }}">
                        @if ($errors->has('email'))
                            @component('front.components.error')
                                {{ $errors->first('email') }}
                            @endcomponent
                        @endif                          
                        <input id="email" placeholder="@lang('Email')" type="email" class="form-control"  name="email" value="{{ old('email') }}" required>
                        @if ($errors->has('password'))
                            @component('front.components.error')
                                {{ $errors->first('password') }}
                            @endcomponent
                        @endif 
                        <input id="password" placeholder="@lang('Password')" type="password" class="form-control" name="password" required>
                        <input id="password-confirm" placeholder="@lang('Confirm your password')" type="password" class="form-control" name="password_confirmation" required>

                        <button class="btn btn-lg btn-primary btn-block" value="@lang('Reset Password')" type="submit">
                        @lang('Reset Password')</button>

                         
                    </form>
               </div>
                
             </div>
        </div>
    </div>
    </section>
@endsection
