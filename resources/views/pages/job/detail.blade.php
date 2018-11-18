@extends('layouts.master')

@section('top-banner')
    <!-- Page Header Start -->
    <div class="page-header" style="background: url({{asset('img/banner1.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Job Details</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{route('home')}}"><i class="ti-home"></i> Home</a></li>
                            <li class="current">Job Details</li>
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
                    @if(session('msg_apply'))
                        <label for="" style="width: 100%" class="alert alert-dismissible alert-success">{{session('msg_apply')}}</label>
                    @elseif(session('msg_error'))
                        <label for="" style="width: 100%" class="alert alert-dismissible alert-danger">{{session('msg_error')}}</label>
                    @endif
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="header-detail">
                        <div class="header-content pull-left">
                            <h3><a href="#">{{$job->job_title}}</a></h3>
                            <p><span>Date Posted: {{date('M d, Y', strtotime($job->created_date))}}</span></p>
                            <p>Monthly Salary: <strong class="price">${{$job->salary_from}} - ${{$job->salary_to}}</strong></p>
                        </div>
                        <div class="detail-company pull-right text-right">
                            <div class="img-thum">
                                <img class="img-responsive" src="{{asset('images/'.$job->company->company_logo)}}" alt="">
                            </div>
                            <div class="name">
                                <h4>{{$job->company_name}}</h4>
                                <h5>{{$job->company->company_location}}</h5>
                                <p>{{$job->amount}} Current jobs openings</p>
                            </div>
                        </div>
                        <div class="clearfix">
                            <div class="meta">
                                @if ($job->job_tag != "")
		                            <?php $count = 1;?>
                                    @foreach(explode(',', $job->job_tag) as $tag)
                                        @if($count <= 3)
                                            <span><a class="btn btn-border btn-sm" href="{{route('result-search-tag')}}?tag={{$tag}}">{{$tag}}</a></span>
				                            <?php $count++;?>
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="content-area">
                        <div class="clearfix">
                            <div class="box">
                                {!! $job->description !!}
                                <div>
                                    <a href="#" class="btn btn-common" data-toggle="modal" data-target="#myModal">Apply for this Job Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if(count($related) > 0)
                        <h2 class="medium-title">Related Jobs</h2>
                        @foreach($related as $item)
                            <div class="job-post-wrapper">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="job-list" style="width: 100%">
                                            <div class="thumb">
                                                <a href="#"><img width="100px" height="100px" src="{{asset('images/'.$item->company->company_logo)}}" alt=""></a>
                                            </div>
                                            <div class="job-list-content">
                                                <h4><a href="{{route('job-detail', $item->slug_title)}}">{{$item->job_title}}</a>
                                                    @if($item->job_type == 'Full-Time')
                                                        <span class="full-time">Full-Time</span>
                                                    @else
                                                        <span class="part-time">Part-Time</span>
                                                    @endif
                                                </h4>
                                                {!! strip_tags(substr($item->description, 0, 300)) . '...' !!}
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
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <aside>
                        <div class="sidebar">
                            <div class="box">
                                <h2 class="small-title">Job Details</h2>
                                <ul class="detail-list">
                                    <li>
                                        <a href="#">Location</a>
                                        <span class="type-posts">{{$job->location}}</span>
                                    </li>
                                    <li>
                                        <a href="#">Company</a>
                                        <span class="type-posts">{{$job->company_name}}</span>
                                    </li>
                                    <li>
                                        <a href="#">Type</a>
                                        <span class="type-posts">{{$job->job_type}}</span>
                                    </li>
                                    <li>
                                        <a href="#">Positions</a>
                                        <span class="type-posts">{{$job->amount}}</span>
                                    </li>
                                    <li>
                                        <a href="#">Experience</a>
                                        <span class="type-posts">{{$job->exprience}} Years</span>
                                    </li>
                                    <li>
                                        <a href="#">Nationality</a>
                                        <span class="type-posts">{{$job->company_country}}</span>
                                    </li>
                                </ul>
                            </div>

                            @if($featured)
                            <div class="box">
                                <h2 class="small-title">Featured Jobs</h2>
                                <div class="thumb">
                                    <a href="#"><img src="{{asset('images/'.$featured->company->company_logo)}}" alt="img"></a>
                                </div>
                                <div class="text-box">
                                    <h4><a href="{{route('job-detail', $featured->slug_title)}}">{{$featured->job_title}}</a></h4>
                                    <p>{!! strip_tags(substr($featured->description, 0, 200)) . '...' !!}</p>
                                    <a href="#" class="text"><i class="fa fa-map-marker"></i>{{$featured->location}}</a>
                                    <a href="#" class="text"><i class="fa fa-calendar"></i>{{date('M d, Y', strtotime($featured->created_date))}} - {{date('M d, Y', strtotime($featured->expire_date))}} </a>
                                    <strong class="price"><i class="fa fa-money"></i>${{$featured->salary_from}} - ${{$featured->salary_to}}</strong>
                                    <a href="{{route('job-detail', $featured->slug_title)}}" class="btn btn-common btn-sm">Apply for this Job</a>
                                </div>
                            </div>
                            @endif

                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-body">
                        <div style="text-align: center; padding: 2em 0">
                            <img width="100px" height="100px" style="margin: 0 auto" src="{{asset('images/'.$job->company->company_logo)}}" class="img-responsive" alt="{{$job->company_name}}">
                            <h3>{{$job->job_title}}</h3>
                            <p>{{$job->company_name}}</p>
                        </div>
                        <div class="page-login-form register">
                            <form class="login-form" method="post" enctype="multipart/form-data" action="{{route('job-apply', $job->slug_title)}}">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Your Email" required="">
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" name="about" placeholder="About You / Paste your CV"></textarea>
                                </div>

                                <div class="form-group">
                                    <span class="">Upload CV</span>
                                    <input type="file" name="file_cv" class="form-control" required>
                                </div>
                                <div class="form-group center">
                                    <button type="submit" class="btn btn-common"> Apply Now </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <input type="hidden" name="set-featured-url" value="{{route('set-featured')}}">
    <input type="hidden" name="redirect-url" value="{{route('home')}}">
@endsection

@section('script')
    <link rel="stylesheet" href="{{asset('css/summernote.css')}}" type="text/css">

    <script type="text/javascript" src="{{asset('js/summernote.js')}}"></script>
    <script>
        $(document).ready(function() {

            $('a.set_featured').click(function (e) {
                e.preventDefault();
                var url = $('input[name=set-featured-url]').val();
                var item = this;
                var data = {};
                data.id = $(item).data('item-id');

                console.log(data);

                $.get(url, data, function (data) {
                    console.log(data);
                    $(item).find('i').remove();
                    if(data.is_featured == '1'){
                        $(item).append('<i class="fa fa-toggle-on fa-3x" aria-hidden="true">');
                    }else{
                        $(item).append('<i class="fa fa-toggle-off fa-3x" aria-hidden="true">');
                    }

                }).fail(
                    function (err) {
                        console.log(err);
                    });

            })


        });


    </script>
@endsection
