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
    <!-- Find Job Section Start -->
    <section class="find-job section">
        <div class="container">
            <h2 class="section-title">Results</h2>
            <div class="row">
                <div class="col-md-12">

                    @foreach($data as $item)
                        @include('pages.job.list.list_item',['item'=>$item])

                    @endforeach
                    <br>
                        {{$data->appends(request()->input())->links()}}
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </section>
@endsection

