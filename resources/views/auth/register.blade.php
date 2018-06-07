@extends('front.layout')

@section('main')
    <section class="wrapper">
        <section class="page_head">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="page_title">
                            <h2>@lang('Register')</h2>
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
                    <h3>@lang('Register')</h3>
                    <form class="form-signin" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        @if ($errors->has('name'))
                            @component('front.components.error')
                                {{ $errors->first('name') }}
                            @endcomponent
                        @endif 
                        <input id="name" placeholder="@lang('Name')" type="text" class="form-control"   name="name" value="{{ old('name') }}" required autofocus>
                        @if ($errors->has('email'))
                            @component('front.components.error')
                                {{ $errors->first('email') }}
                            @endcomponent
                        @endif                       
                        <input id="email" placeholder="@lang('Email')" type="email" class="form-control"   name="email" value="{{ old('email') }}" required>
                        @if ($errors->has('password'))
                            @component('front.components.error')
                                {{ $errors->first('password') }}
                            @endcomponent
                        @endif 
                        <input id="password" placeholder="@lang('Password')" type="password" class="form-control"   name="password" required>
                        <input id="password-confirm" placeholder="@lang('Confirm your password')" type="password" class="form-control"  name="password_confirmation" required>

                        <button class="btn btn-lg btn-primary btn-block" value="@lang('Register')" type="submit">
                         @lang('Register')</button>


                         
                    </form>
                </div></div>
        </div>
    </section>
     </section>
@endsection
