@extends('layouts.master')

@section('top-banner')
    <!-- Page Header Start -->
    <div class="page-header" style="background: url({{asset('img/banner1.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Manage Jobs</h2>
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="ti-home"></i> Home</a></li>
                            <li class="current">Manage Jobs</li>
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
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="right-sideabr">
                        <div class="inner-box">
                            <h4>Manage Account</h4>
                            <ul class="lest item">
                                <li><a href="notifications.html">Notifications <span class="notinumber">2</span></a></li>
                            </ul>
                            <h4>Manage Job</h4>
                            <ul class="lest item">
                                <li><a class="active" href="{{route('user-profile')}}">Manage Jobs</a></li>
                                <li><a href="manage-applications.html">Manage Applications</a></li>
                            </ul>
                            <ul class="lest">
                                <li><a href="change-password.html">Change Password</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="job-alerts-item candidates">
                        <h3 class="alerts-title">Manage Jobs</h3>
                        <div class="alerts-list">
                            <div class="row">
                                <div class="col-md-3">
                                    <p>Name</p>
                                </div>
                                <div class="col-md-3">
                                    <p>Keywords</p>
                                </div>
                                <div class="col-md-3">
                                    <p>Candidates</p>
                                </div>
                                <div class="col-md-3">
                                    <p>Featured</p>
                                </div>
                            </div>
                        </div>
                        <div class="alerts-content">
                            <div class="row">
                                <div class="col-md-3">
                                    <h3>Web Designer</h3>
                                    <span class="location"><i class="ti-location-pin"></i> Manhattan, NYC</span>
                                </div>
                                <div class="col-md-3">
                                    <p><span class="full-time">Full-Time</span></p>
                                </div>
                                <div class="col-md-3">
                                    <div class="can-img"><a href="#"><img src="assets/img/jobs/candidates.png" alt=""></a></div>
                                </div>
                                <div class="col-md-3">
                                    <p><i class="ti-star"></i></p>
                                </div>
                            </div>
                        </div>
                        <div class="alerts-content">
                            <div class="row">
                                <div class="col-md-3">
                                    <h3>Web Designer</h3>
                                    <span class="location"><i class="ti-location-pin"></i> Manhattan, NYC</span>
                                </div>
                                <div class="col-md-3">
                                    <p><span class="full-time">Full-Time</span></p>
                                </div>
                                <div class="col-md-3">
                                    <div class="can-img"><a href="#"><img src="assets/img/jobs/candidates.png" alt=""></a></div>
                                </div>
                                <div class="col-md-3">
                                    <p><i class="ti-star"></i></p>
                                </div>
                            </div>
                        </div>
                        <div class="alerts-content">
                            <div class="row">
                                <div class="col-md-3">
                                    <h3>Web Designer</h3>
                                    <span class="location"><i class="ti-location-pin"></i> Manhattan, NYC</span>
                                </div>
                                <div class="col-md-3">
                                    <p><span class="full-time">Full-Time</span></p>
                                </div>
                                <div class="col-md-3">
                                    <div class="can-img"><a href="#"><img src="assets/img/jobs/candidates.png" alt=""></a></div>
                                </div>
                                <div class="col-md-3">
                                    <p><i class="ti-star"></i></p>
                                </div>
                            </div>
                        </div>
                        <div class="alerts-content">
                            <div class="row">
                                <div class="col-md-3">
                                    <h3>Web Designer</h3>
                                    <span class="location"><i class="ti-location-pin"></i> Manhattan, NYC</span>
                                </div>
                                <div class="col-md-3">
                                    <p><span class="full-time">Full-Time</span></p>
                                </div>
                                <div class="col-md-3">
                                    <div class="can-img"><a href="#"><img src="assets/img/jobs/candidates.png" alt=""></a></div>
                                </div>
                                <div class="col-md-3">
                                    <p><i class="ti-star"></i></p>
                                </div>
                            </div>
                        </div>

                        <br>
                        <ul class="pagination">
                            <li class="active"><a href="#" class="btn btn-common"><i class="ti-angle-left"></i> prev</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li class="active"><a href="#" class="btn btn-common">Next <i class="ti-angle-right"></i></a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
