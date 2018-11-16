@extends('layouts.master')
@section('top-banner')
    <!-- Page Header Start -->
    <div class="page-header" style="background: url({{asset('img/banner1.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Results</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{route('home')}}"><i class="ti-home"></i> Home</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
@endsection
@section('content')
    <div class="container">
        <h4 class="section-title" style="margin-top: 10px">Result</h4>
        <div class="row">
            @if(count($data) != 0)
                <div class="col-md-12">
                    @foreach($data as $item)
                        <div class="job-list" style="width: 100%;">
                            <div class="thumb">
                                <a href="{{route('company-detail', $item->slug_company_name)}}"><img width="100px" height="100px" src="{{asset('images/'.$item->company_logo)}}" alt=""></a>
                            </div>
                            <div class="job-list-content" id="list-company-review">
                                <h4><a href="{{route('company-detail', $item->slug_company_name)}}">{{$item->company_name}}</a></h4>
                                {!! $item->description !!}
                                <div class="pull-left">
                                    <div class="meta-tag">
                                        <span style="font-weight: bold"><i class="ti-location-pin"></i> {{$item->company_location}}</span>
                                    </div>
                                </div>
                                <div class="pull-right">
                                    <a href="{{route('company-detail', $item->slug_company_name)}}" class="btn btn-common btn-rm">Overview</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-md-12">
                    {{$data->appends(request()->input())->links()}}
                </div>
                @else
                    <h4 style="margin-bottom: 10px" class="col-md-12">The company you're looking for doesn't exist</h4>
                @endif
        </div>
    </div>
@endsection