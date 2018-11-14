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
                        <h3 class="alerts-title">Jobs Applied</h3>

                        @foreach($jobs as $job)
                            <div class="applications-content">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="thums">
                                            <img src="{{$job->company_logo}}" alt="{{$job->company_name}}">
                                        </div>
                                        <h3>{{$job->job_title}}</h3>
                                        <span>{{$job->job_tag}}</span>
                                    </div>
                                    <div class="col-md-3">
                                        <p><span class="full-time">Full-Time</span></p>
                                    </div>
                                    <div class="col-md-2">
                                        <p>{{$job->expire_date}}</p>
                                    </div>
                                    <div class="col-md-2">
                                        <p>Sent</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <br>
                        {{$jobs->links()}}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
