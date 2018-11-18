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
            <div class="col-md-12 mb15">
                @foreach($data as $item)
                    @include('pages.company.list.list_item',['item'=>$item])
                @endforeach
            </div>
            <div class="col-md-12 mb15">
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