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
                    <div class="alert-box ss-notice hideit">
                        <p>@lang('You have forgotten your password, dont mind ! You can create a new one. But for your own security we want to be sure of your identity. So send us your email by filling this form. You will get a message with instruction to create your new password.')</p>
                        <i class="fa fa-times close"></i>
                    </div>
                    <h3>@lang('Reset Password')</h3>
                    <form class="form-signin" role="form" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}
                        @if ($errors->has('email'))
                            @component('front.components.error')
                                {{ $errors->first('email') }}
                            @endcomponent
                        @endif   
                        <input id="email" type="email" placeholder="@lang('Email')"  class="form-control"  name="email" value="{{ old('email') }}" required>
                         

                        <button class="btn btn-lg btn-primary btn-block" value="@lang('Send Password Reset Link')" type="submit">
                        @lang('Send Password Reset Link')</button>
                    </form>
                </div>
                
             </div>
        </div>
    </div>
    </section>
@endsection
