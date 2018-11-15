@extends('layouts.master')

@section('top-banner')
    <!-- Page Header Start -->
    <div class="page-header" style="background: url({{asset('img/banner1.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">My Profile</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{url('/')}}"><i class="ti-home"></i> Home</a></li>
                            <li class="current">My Profile</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
@endsection

@section('content')
    <div id="content">
        <div class="container">
            <div class="row">
                @include('layouts.side_left')
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="job-alerts-item">
                        <h3 class="alerts-title">Reset Password</h3>

                        <form role="form" class="login-form" method="POST" action="{{ route('user-reset-pwd') }}">
                            {{csrf_field()}}

                            @if (session('msg'))
                                <span class="help-block">
                                    <strong>{{ session('msg') }}</strong>
                                </span>
                            @endif

                            <div class="form-group is-empty">
                                <div class="input-icon">
                                    <i class="ti-user"></i>
                                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                                </div>
                                <span class="material-input"></span>
                            </div>
                            <div class="form-group is-empty">
                                <div class="input-icon">
                                    <i class="ti-lock"></i>
                                    <input type="password" class="form-control" name="password_confirm" placeholder="Password confirm" required>
                                </div>
                                <span class="material-input"></span>
                            </div>
                            <button class="btn btn-common log-btn">Reset</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
