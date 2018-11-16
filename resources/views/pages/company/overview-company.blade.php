@extends('layouts.master')

@section('top-banner')
    <!-- Page Header Start -->
    <div class="page-header" style="background: url({{asset('img/banner1.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Review Company</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{route('home')}}"><i class="ti-home"></i> Home</a></li>
                            <li class="current">Review Company</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
@endsection
@section('content')


    <section class="job-detail section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="header-detail">
                        <div class="header-content pull-left">
                            <h1><a href="#">{{$data->company_name}}</a></h1>
                            <h5 style="margin-top: 5px"><i class="ti-user"></i><span> {{$data->company_size_from}} - {{$data->company_size_to}}</span></h5>
                            <h5 style="margin-top: 5px"><i class="ti-link"></i> <a href="{{$data->company_url}}">Visit Company</a></h5>
                        </div>
                        <div class="detail-company pull-right text-right">
                            <div class="img-thum">
                                <img class="img-responsive" width="100px" height="100px" src="{{asset('images/'.$data->company_logo)}}" alt="">
                            </div>
                            <div class="name">
                                <h4>{{$data->company_country}}</h4>
                                <h5>{{$data->company_location}}</h5>
                            </div>
                        </div>
                        <div class="clearfix">

                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="content-area">
                        <div class="clearfix">
                            <div class="box">
                                {!! $data->description !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="box">
                        <div id="fb-root"></div>
                        <div class="fb-comments" data-href="{{URL::current()}}" data-width="100%"  data-numposts="5"></div>
                    </div>

                </div>
            </div>
        </div>


        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=326695574782599&autoLogAppEvents=1';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    </section>
@endsection