@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-3 col-sm-3"></div>
        <div class="col-md-6 col-sm-6">
            <div class="form-group">
                <input class="form-control" autocomplete="off">
            </div>
        </div>
        <div class="col-md-1 col-sm-6">
            <button type="submit " class="btn btn-search-icon"><i class="ti-search"></i></button>
        </div>
    </div>
    <div class="container">
        <h4 class="section-title">Những công ty nổi bật nhất</h4>
        <div class="row">
            <div class="col-md-12">
                    <div class="job-list">
                        <div class="thumb">
                            <a href="#"><img src="/img/jobs/img-1.jpg" alt=""></a>
                        </div>
                        <div class="job-list-content">
                            <h4><a href="{{route('overview')}}">Fpt Software</a><span class="full-time">Full-Time</span></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quaerat aut veniam molestiae atque dolorum omnis temporibus consequuntur saepe. Nemo atque consectetur saepe corporis odit in dicta reprehenderit, officiis, praesentium?</p>
                        </div>
                    </div>
            </div>
            <div class="col-md-12">
                <div class="job-list">
                    <div class="thumb">
                        <a href="#"><img src="/img/jobs/img-1.jpg" alt=""></a>
                    </div>
                    <div class="job-list-content">
                        <h4><a href="#">Fpt Software</a><span class="full-time">Full-Time</span></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quaerat aut veniam molestiae atque dolorum omnis temporibus consequuntur saepe. Nemo atque consectetur saepe corporis odit in dicta reprehenderit, officiis, praesentium?</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="job-list">
                    <div class="thumb">
                        <a href="#"><img src="/img/jobs/img-1.jpg" alt=""></a>
                    </div>
                    <div class="job-list-content">
                        <h4><a href="#">Fpt Software</a><span class="full-time">Full-Time</span></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quaerat aut veniam molestiae atque dolorum omnis temporibus consequuntur saepe. Nemo atque consectetur saepe corporis odit in dicta reprehenderit, officiis, praesentium?</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="job-list">
                    <div class="thumb">
                        <a href="#"><img src="/img/jobs/img-1.jpg" alt=""></a>
                    </div>
                    <div class="job-list-content">
                        <h4><a href="#">Fpt Software</a><span class="full-time">Full-Time</span></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quaerat aut veniam molestiae atque dolorum omnis temporibus consequuntur saepe. Nemo atque consectetur saepe corporis odit in dicta reprehenderit, officiis, praesentium?</p>
                    </div>
                </div>
            </div>
    </div>
@endsection