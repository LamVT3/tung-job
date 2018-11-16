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
                    <div class="header-detail">
                        <div class="header-content pull-left">
                            <h3><a href="#">{{$data->job_title}}</a></h3>
                            <p><span>Date Posted: {{date('M d, Y', strtotime($data->created_date))}}</span></p>
                            <p>Monthly Salary: <strong class="price">${{$data->salary_from}} - ${{$data->salary_to}}</strong></p>
                        </div>
                        <div class="detail-company pull-right text-right">
                            <div class="img-thum">
                                <img class="img-responsive" src="{{$data->company->company_logo}}" alt="">
                            </div>
                            <div class="name">
                                <h4>{{$data->company_name}}</h4>
                                <h5>{{$data->company->company_location}}</h5>
                                <p>{{$data->amount}} Current jobs openings</p>
                            </div>
                        </div>
                        <div class="clearfix">
                            <div class="meta">
                                @if ($data->job_tag != "")
		                            <?php $count = 1;?>
                                    @foreach(explode(',', $data->job_tag) as $tag)
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
                                {!! $data->description !!}
                                <div>
                                    <a href="#" class="btn btn-common" data-toggle="modal" data-target="#myModal">Apply for this Job Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2 class="medium-title">Related Jobs</h2>
                    <div class="job-post-wrapper">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="job-list">
                                    <div class="thumb">
                                        <a href="http://demo.graygrids.com/themes/jobboard-demo/job-details.html"><img src="http://demo.graygrids.com/themes/jobboard-demo/assets/img/jobs/img-1.jpg" alt=""></a>
                                    </div>
                                    <div class="job-list-content">
                                        <h4><a href="http://demo.graygrids.com/themes/jobboard-demo/job-details.html">We need a web designer</a><span class="full-time">Full-Time</span></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quaerat aut veniam molestiae atque dolorum omnis temporibus consequuntur saepe. Nemo atque consectetur saepe corporis odit in dicta reprehenderit, officiis, praesentium?</p>
                                        <div class="job-tag">
                                            <div class="pull-left">
                                                <div class="meta-tag">
                                                    <span><a href="http://demo.graygrids.com/themes/jobboard-demo/browse-categories.html"><i class="ti-brush"></i>Art/Design</a></span>
                                                    <span><i class="ti-location-pin"></i>Cupertino, CA, USA</span>
                                                    <span><i class="ti-time"></i>60/Hour</span>
                                                </div>
                                            </div>
                                            <div class="pull-right">
                                                <div class="icon">
                                                    <i class="ti-heart"></i>
                                                </div>
                                                <div class="btn btn-common btn-rm">Apply Job</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="job-list">
                                    <div class="thumb">
                                        <a href="http://demo.graygrids.com/themes/jobboard-demo/job-details.html"><img src="http://demo.graygrids.com/themes/jobboard-demo/assets/img/jobs/img-2.jpg" alt=""></a>
                                    </div>
                                    <div class="job-list-content">
                                        <h4><a href="http://demo.graygrids.com/themes/jobboard-demo/job-details.html">Front-end developer needed</a><span class="full-time">Full-Time</span></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quaerat aut veniam molestiae atque dolorum omnis temporibus consequuntur saepe. Nemo atque consectetur saepe corporis odit in dicta reprehenderit, officiis, praesentium?</p>
                                        <div class="job-tag">
                                            <div class="pull-left">
                                                <div class="meta-tag">
                                                    <span><a href="http://demo.graygrids.com/themes/jobboard-demo/browse-categories.html"><i class="ti-desktop"></i>Technologies</a></span>
                                                    <span><i class="ti-location-pin"></i>Cupertino, CA, USA</span>
                                                    <span><i class="ti-time"></i>60/Hour</span>
                                                </div>
                                            </div>
                                            <div class="pull-right">
                                                <div class="icon">
                                                    <i class="ti-heart"></i>
                                                </div>
                                                <div class="btn btn-common btn-rm">Apply Job</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="job-list">
                                    <div class="thumb">
                                        <a href="http://demo.graygrids.com/themes/jobboard-demo/job-details.html"><img src="http://demo.graygrids.com/themes/jobboard-demo/assets/img/jobs/img-3.jpg" alt=""></a>
                                    </div>
                                    <div class="job-list-content">
                                        <h4><a href="http://demo.graygrids.com/themes/jobboard-demo/job-details.html">Software Enginner</a><span class="part-time">Part-Time</span></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quaerat aut veniam molestiae atque dolorum omnis temporibus consequuntur saepe. Nemo atque consectetur saepe corporis odit in dicta reprehenderit, officiis, praesentium?</p>
                                        <div class="job-tag">
                                            <div class="pull-left">
                                                <div class="meta-tag">
                                                    <span><a href="http://demo.graygrids.com/themes/jobboard-demo/browse-categories.html"><i class="ti-desktop"></i>Technologies</a></span>
                                                    <span><i class="ti-location-pin"></i>Cupertino, CA, USA</span>
                                                    <span><i class="ti-time"></i>60/Hour</span>
                                                </div>
                                            </div>
                                            <div class="pull-right">
                                                <div class="icon">
                                                    <i class="ti-heart"></i>
                                                </div>
                                                <div class="btn btn-common btn-rm">Apply Job</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <aside>
                        <div class="sidebar">
                            <div class="box">
                                <h2 class="small-title">Job Details</h2>
                                <ul class="detail-list">
                                    <li>
                                        <a href="#">Location</a>
                                        <span class="type-posts">{{$data->location}}</span>
                                    </li>
                                    <li>
                                        <a href="#">Company</a>
                                        <span class="type-posts">{{$data->company_name}}</span>
                                    </li>
                                    <li>
                                        <a href="#">Type</a>
                                        <span class="type-posts">{{$data->job_type}}</span>
                                    </li>
                                    <li>
                                        <a href="#">Positions</a>
                                        <span class="type-posts">{{$data->amount}}</span>
                                    </li>
                                    <li>
                                        <a href="#">Experience</a>
                                        <span class="type-posts">{{$data->exprience}} Years</span>
                                    </li>
                                    <li>
                                        <a href="#">Nationality</a>
                                        <span class="type-posts">{{$data->company_country}}</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="box">
                                <h2 class="small-title">Featured Jobs</h2>
                                <div class="thumb">
                                    <a href="#"><img src="http://demo.graygrids.com/themes/jobboard-demo/assets/img/jobs/features-img-1.jpg" alt="img"></a>
                                </div>
                                <div class="text-box">
                                    <h4><a href="#">Web Development</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. maiores aperiam quam perspiciatis.</p>
                                    <a href="#" class="text"><i class="fa fa-map-marker"></i>Moorgate, London</a>
                                    <a href="#" class="text"><i class="fa fa-calendar"></i>Dec 22, 2017 - Mar 17, 2018 </a>
                                    <strong class="price"><i class="fa fa-money"></i>$4000 - $5000</strong>
                                    <a href="#" class="btn btn-common btn-sm">Apply for this Job</a>
                                </div>
                            </div>
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
                            <img width="100px" height="100px" style="margin: 0 auto" src="{{asset('images/'.$data->company->company_logo)}}" class="img-responsive" alt="{{$data->company_name}}">
                            <h3>{{$data->job_title}}</h3>
                            <p>{{$data->company_name}}</p>
                        </div>
                        <div class="page-login-form register">
                            <form class="login-form" method="post">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Your Email" required="">
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" placeholder="About You / Paste your CV"></textarea>
                                </div>

                                <div class="form-group">
                                    <span class="">Upload CV</span>
                                    <input type="file" class="form-control">
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
