@extends('layouts.master')

@section('top-banner')
    <!-- Page Header Start -->
    <div class="page-header" style="background: url({{asset('img/banner1.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Find Job</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{route('home')}}"><i class="ti-home"></i> Home</a></li>
                            <li class="current">Find Job</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
@endsection
@section('content')
    <!-- Find Job Section Start -->
    <section class="find-job section">
        <div class="container">
            <h2 class="section-title">Find good a Job</h2>
            <div class="row">
                <div class="col-md-12">

                    @foreach($data as $item)
                        <div class="job-list" style="width: 100%">
                            <div class="thumb">
                                <a href="{{route('job-detail', $item->slug_title)}}"><img width="100px" height="100px" src="{{$item->company->company_logo}}" alt=""></a>
                            </div>
                            <div class="job-list-content">
                                <h4><a href="{{route('job-detail', $item->slug_title)}}">{{$item->job_title}}</a><span class="full-time">Full-Time</span></h4>
                                <p>{!! strip_tags(substr($item->description, 0, 300)) . '...' !!}</p>
                                <div class="job-tag">
                                    <div class="pull-left">
                                        <div class="meta-tag">
                                            @if ($item->job_tag != "")
                                                <?php $count = 1;?>
                                                @foreach(explode(',', $item->job_tag) as $tag)
                                                    @if($count <= 3)
                                                        <span><a class="btn btn-border btn-sm" href="/job/job-tag?tag={{$tag}}">{{$tag}}</a></span>
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


                <div class="col-md-12">
                    {{$data->links()}}
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Find Job Section End -->

@endsection
