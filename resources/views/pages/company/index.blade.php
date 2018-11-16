@extends('layouts.master')


@section('content')
    <!-- Find Job Section Start -->
    <section class="find-job section">
        <div class="container">
            <h2 class="section-title">Hot Jobs</h2>
            <div class="row">
                <div class="col-md-12">

                    @foreach($data as $item)
                        <div class="job-list">
                            <div class="thumb">
                                <a href="{{route('job-detail', $item->_id)}}"><img src="{{asset('images/'.$item->company_logo)}}" alt=""></a>
                            </div>
                            <div class="job-list-content">
                                <h4><a href="{{route('job-detail', $item->_id)}}">{{$item->job_title}}</a><span class="full-time">Full-Time</span></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quaerat aut veniam molestiae atque dolorum omnis temporibus consequuntur saepe. Nemo atque consectetur saepe corporis odit in dicta reprehenderit, officiis, praesentium?</p>
                                <div class="job-tag">
                                    <div class="pull-left">
                                        <div class="meta-tag">
                                            <span><a href="browse-categories.html"><i class="ti-brush"></i>Art/Design</a></span>
                                            <span><i class="ti-location-pin"></i>Washington, USA</span>
                                            <span><i class="ti-time"></i>60/Hour</span>
                                        </div>
                                    </div>
                                    <div class="pull-right">
                                        <div class="icon">
                                            <i class="ti-heart"></i>
                                        </div>
                                        <a href="{{route('job-detail', $item->slug_title)}}" class="btn btn-common btn-rm">Apply Job</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


                <div class="col-md-12">
                    {{$data->links()}}
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

@endsection
