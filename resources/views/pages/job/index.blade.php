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
                                <a href="{{route('job-detail', $item->slug_title)}}"><img src="img/jobs/img-1.jpg" alt=""></a>
                            </div>
                            <div class="job-list-content">
                                <h4><a href="{{route('job-detail', $item->slug_title)}}">{{$item->job_title}}</a><span class="full-time">Full-Time</span></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quaerat aut veniam molestiae atque dolorum omnis temporibus consequuntur saepe. Nemo atque consectetur saepe corporis odit in dicta reprehenderit, officiis, praesentium?</p>
                                <div class="job-tag">
                                    <div class="pull-left">
                                        <div class="meta-tag">
                                            @if ($item->job_tag != "")
                                                <?php $count = 1;?>
                                                @foreach(explode(',', $item->job_tag) as $tag)
                                                    @if($count <= 3)
                                                        <span><a class="btn btn-border btn-sm" href="#">{{$tag}}</a></span>
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
                                        <div class="icon">
                                            <i class="ti-heart"></i>
                                        </div>
                                        <a href="{{route('job-detail', $item->slug_title)}}" class="btn btn-common btn-rm">Apply Job</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


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
