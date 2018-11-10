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
                            <li><a class="" href="#0">LOGIN</a></li>
                            <li></li>
                        </ul>

                        <div id="cd-login" class="is-selected">
                            <div class="page-login-form">
                                <form role="form" class="login-form" method="POST" action="{{ route('login') }}">
                                    {{ csrf_field() }}
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <div class="input-icon">
                                            <i class="ti-user"></i>
                                            <input type="text" id="sender-email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                     <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <div class="input-icon">
                                            <i class="ti-lock"></i>
                                            <input type="password" class="form-control" placeholder="Password" name="password" required>
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <h4 class="text-center" style="margin-bottom: 10px">--- Or login with account ---</h4>
                                    <div class="row text-center bottom-social-icons social-icon">
                                        <div class="col-md-4 text-center">
                                            <a href="{{ url('oauth/facebook') }}" class="facebook" style="border-radius: 0; background-color: #3b5998">
                                                <i class="ti-facebook"></i>
                                            </a>
                                        </div>
                                        <div class="col-md-4 text-center">
                                            <a href="{{ url('oauth/google') }}" class="google" style="border-radius: 0; background-color: #CC181E">
                                                <i class="ti-google"></i>
                                            </a>
                                        </div>
                                        <div class="col-md-4 text-center">
                                            <a href="{{ url('oauth/linkedin') }}" class="linkedin" style="border-radius: 0; background-color: #007bb5">
                                                <i class="ti-linkedin"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <button class="btn btn-common log-btn" type="submit">Login</button>
                                    <div class="checkbox-item">
                                        <div class="checkbox">
                                            <label for="rememberme" class="rememberme">
                                                <input name="rememberme" id="rememberme" value="forever" type="checkbox" {{ old('remember') ? 'checked' : '' }}> Remember Me</label>
                                        </div>
                                        <p class="cd-form-bottom-message"><a href="{{ route('password.request') }}">Lost your password?</a></p>
                                        <span class="material-input"></span>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="page-login-form" id="cd-reset-password">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>
                            <form class="cd-form" method="POST" action="{{ route('password.email') }}">
                                {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <div class="input-icon">
                                        <i class="ti-email"></i>
                                        <input type="text" id="sender-email" class="form-control" name="email" placeholder="Email">
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <p class="fieldset">
                                    <button class="btn btn-common log-btn" type="submit">Reset password</button>
                                </p>
                            </form>
                            <p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
