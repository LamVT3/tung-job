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
                <div class="col-md-12 mb15">
                    @foreach($data as $item)
                        @include('pages.company.list.list_item',['item'=>$item])
                    @endforeach
                </div>
                <div class="col-md-12 mb15">
                    {{$data->appends(request()->input())->links()}}
                </div>
                @else
                    <h4 style="margin-bottom: 10px" class="col-md-12 mb15">The company you're looking for doesn't exist</h4>
                @endif
        </div>
    </div>
@endsection