@extends('layouts.master')

@section('top-banner')
    <!-- Page Header Start -->
    <div class="page-header" style="background: url({{asset('img/banner1.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Company Review</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{route('home')}}"><i class="ti-home"></i> Home</a></li>
                            <li class="current">Company Review</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
@endsection
@section('content')
    <form method="get" action="{{action('CompanyController@resultSearchCompany')}}">
        <div class="row" style="margin-top: 50px">
            <div class="col-md-3 col-sm-3"></div>
            <div class="col-md-6 col-sm-6">
                <div class="form-group" id="company-search">
                    <input class="form-control" autocomplete="off" placeholder="Searching company..." id="keyword_company" name="company_name">
                </div>
            </div>
            <div class="col-md-1 col-sm-6">
                <button type="submit" class="btn btn-search-icon"><i class="ti-search"></i></button>
            </div>
        </div>
    </form >
    <div class="container">
        <h4 class="section-title">Top Companies</h4>
        <div class="row">
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
                {{$data->links()}}
            </div>
        </div>
    </div>
@endsection

@section('script')

    <script>
        var url = "{{route('search-company')}}"
        $('#keyword_company').typeahead({
            source: function (query, process) {
                return $.get(url, { query: query }, function (data) {

                    return process(data);
                });
            }
        });
    </script>
@endsection