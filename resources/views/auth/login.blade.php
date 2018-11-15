@extends('layouts.master')

@section('top-banner')
    <!-- Page Header Start -->
    <div class="page-header" style="background: url({{asset('img/banner1.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">My Account</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{route('home')}}"><i class="ti-home"></i> Home</a></li>
                            <li class="current">My Account</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
@endsection

@section('content')
    <div id="content" class="my-account">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-6 cd-user-modal">
                    <div class="my-account-form">
                        <ul class="cd-switcher">
                            <li style="width: 100%;"><a href="#0" style="font-size: 22px">Sign in to Jobs</a></li>
                        </ul>

                        <div id="cd-login" class="is-selected">
                            <div class="page-login-form" style="font-size: 16px">
                                <form role="form" class="login-form" method="POST" action="{{ route('login') }}">
                                    {{csrf_field()}}

                                <div class="form-group is-empty">
                                    <div class="input-icon">
                                        <i class="ti-user"></i>
                                        <input type="email" id="sender-email" required value="{{ old('email') }}" class="form-control" name="email" placeholder="Username">
                                    </div>
                                    <span class="material-input"></span>
                                </div>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                    @endif
                                <div class="form-group is-empty">
                                    <div class="input-icon">
                                        <i class="ti-lock"></i>
                                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                                    </div>
                                    <span class="material-input"></span>
                                </div>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                    <button class="btn btn-common log-btn">Login</button>
                                </form>
                                <h5 class="text-center" style="margin-bottom: 10px"> --- Or sign in with ---</h5>
                                <div class="row text-center bottom-social-icons social-icon">
                                    <div class="col-md-4 text-center mb15">
                                        <a href="{{ url('oauth/facebook') }}" class="facebook" style="font-weight: bold; background-color: #3b5998; width: 100% !important">
                                            <i class="ti-facebook"></i> | Facebook
                                        </a>
                                    </div>
                                    <div class="col-md-4 text-center mb15">
                                        <a href="{{ url('oauth/google') }}" class="google" style="font-weight: bold; background-color: #CC181E; width: 100% !important">
                                            <i class="ti-google"></i> | Google
                                        </a>
                                    </div>
                                    <div class="col-md-4 text-center mb15">
                                        <a href="{{ url('oauth/linkedin') }}" class="linkedin" style="font-weight: bold; background-color: #007bb5; width: 100% !important">
                                            <i class="ti-linkedin"></i> | Linkedin
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
