@extends('layouts.master')

@section('top-banner')
    <!-- Page Header Start -->
    <div class="page-header" style="background: url({{asset('img/banner1.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Our Customers</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{route('home')}}"><i class="ti-home"></i> Home</a></li>
                            <li class="current">Our Customers</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
@endsection
@section('content')
    <div class="container" style="margin-top: 50px;margin-bottom: 50px">
        <section class="featured-jobs section">

            <div class="container clearfix row">

                <div class="heading-block" style="margin-bottom: 40px">
                    <h3>Want to post a job? Contact us at Ho Chi Minh: (+84) 0989214285 | Skype: hoa.lethibich | Email: hoale@b4usolution.com</h3>
                </div>

                <h2 class="section-title">Great IT companies</h2>
                <div class="row">
                    <div class="col-md-12">
                        @foreach($data as $item)
                            <div class="col-md-2 col-sm-2 col-xs-12 f-category" style="border: none">
                                <a href="{{route('company-detail', $item->slug_company_name)}}">
                                    <img width="150px" height="120px" src="{{asset('images/'. $item->company_logo)}}" alt="">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection
