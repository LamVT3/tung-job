@extends('layouts.master')

@section('top-banner')
    <div class="search-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Find the job that fits your life</h1><br><h2>More than <strong>12,000</strong> jobs are waiting to Kickstart your career!</h2>
                    <div class="content">
                        @include('pages.job.search')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <!-- Find Job Section Start -->
    <section class="find-job section">
        <div class="container">

            <h2 class="section-title">Hot Jobs</h2>
            <div class="row">
                <div class="col-md-12">

                    @foreach($hot_jobs as $item)
                        <div class="job-list" style="width: 100%">
                            <div class="thumb">
                                <a href="{{route('job-detail', $item->slug_title)}}"><img width="100px" height="100px" src="{{asset('images/'.$item->company->company_logo)}}" alt=""></a>
                            </div>
                            <div class="job-list-content">
                                <h4><a href="{{route('job-detail', $item->slug_title)}}">{{$item->job_title}}</a>
                                    @if($item->job_type == 'Full-Time')
                                        <span class="full-time">Full-Time</span>
                                    @else
                                        <span class="part-time">Part-Time</span>
                                    @endif

                                </h4>
                                <p>{!! strip_tags(substr($item->description, 0, 300)) . '...' !!}</p>
                                <div class="job-tag">
                                    <div class="pull-left">
                                        <div class="meta-tag">
                                            @if ($item->job_tag != "")
                                                <?php $count = 1;?>
                                                @foreach(explode(',', $item->job_tag) as $tag)
                                                    @if($count <= 3)
                                                        <span><a class="btn btn-border btn-sm" href="{{route('result-search-tag')}}?tag={{$tag}}">{{$tag}}</a></span>
                                                        <?php $count++;?>
                                                    @endif
                                                @endforeach
                                            @endif
                                            <span><i class="ti-location-pin"></i>{{$item->location}}</span>
                                            <?php $difftime = strtotime(date('Y-m-d H:i:s')) - strtotime($item->created_at); ?>
                                            @if($difftime / 60 < 60)
                                                <span><i class="ti-time"></i>{{floor($difftime / 60)}} minute(s) ago</span>
                                            @elseif($difftime / 3600 < 60)
                                                <span><i class="ti-time"></i>{{floor($difftime / 3600)}} hour(s) ago</span>
                                            @else
                                                <span><i class="ti-time"></i>{{floor($difftime / 84600)}} day(s) ago</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{{route('job-detail', $item->slug_title)}}" class="btn btn-common btn-rm">Apply Job</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>
    <!-- Find Job Section End -->

    <!-- Start Purchase Section -->
    <section class="section purchase" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="section-content text-center">
                    <h1 class="title-text">
                        Looking for a Job
                    </h1>
                    <p>Join thousand of employers and earn what you deserve!</p>
                    <a href="{{ route('login') }}" class="btn btn-common">Get Started Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Purchase Section -->

    <section class="featured-jobs section">
        <div class="container">
            <h2 class="section-title">
                Featured Jobs
            </h2>
            <div class="row">
                @foreach($featured_jobs as $item)
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="featured-wrap">
                            <div class="featured-inner">
                                <figure class="item-thumb">
                                    <a class="hover-effect" href="{{route('job-detail', $item->slug_title)}}">
                                        <img width="350px" height="200px" src="{{asset('images/'.$item->company->company_logo)}}" alt="">
                                    </a>
                                </figure>
                                <div class="item-body">
                                    <h3 class="job-title"><a href="{{route('job-detail', $item->slug_title)}}">{{$item->job_title}}</a></h3>
                                    <div class="adderess"><i class="ti-location-pin"></i> {{$item->location}}</div>
                                </div>
                            </div>
                        </div>
                        <div class="item-foot">
                            <?php $difftime = strtotime(date('Y-m-d H:i:s')) - strtotime($item->created_at); ?>
                            @if($difftime / 60 < 60)
                                <span><i class="ti-calendar"></i>{{floor($difftime / 60)}} minute(s) ago</span>
                            @elseif($difftime / 3600 < 60)
                                <span><i class="ti-calendar"></i>{{floor($difftime / 3600)}} hour(s) ago</span>
                            @else
                                <span><i class="ti-calendar"></i>{{floor($difftime / 84600)}} day(s) ago</span>
                            @endif
                            <span><i class="ti-time"></i> {{$item->job_type}}</span>
                            <div class="view-iocn">
                                <a href="{{route('job-detail', $item->slug_title)}}"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="category section">
        <div class="container">
            <h2 class="section-title">B4usolution Ecosystem</h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-3 col-sm-3 col-xs-12 f-category" style="height: unset;">
                        <a href="//b4uconference.com/" target="_blank">
                            <img src="{{asset('img/hinh1.jpg')}}" alt="" style="height: unset;">
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 f-category" style="height: unset;">
                        <a href="//exam.b4usolution.com" target="_blank">
                            <img src="{{asset('img/hinh2.jpg')}}" alt="" style="height: unset;">
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 f-category" style="height: unset;">
                        <a href="//quiz.b4usolution.com/quiz" target="_blank">
                            <img src="{{asset('img/hinh3.jpg')}}" alt="" style="height: unset;">
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 f-category" style="height: unset;">
                        <a href="//b4usolution.com" target="_blank">
                            <img src="{{asset('img/hinh4.jpg')}}" alt="">
                        </a>
                    </div>
                    {{--<div class="col-md-3 col-sm-3 col-xs-12 f-category">--}}
                        {{--<a href="//jobs.b4usolution.com" target="_blank">--}}
                            {{--<img src="{{asset('img/hinh5.jpg')}}" alt="">--}}
                        {{--</a>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </section>

@endsection
