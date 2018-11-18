@extends('layouts.master')

@section('top-banner')
    <!-- Page Header Start -->
    <div class="page-header" style="background: url({{asset('img/banner1.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Jobs Applied</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{route('home')}}"><i class="ti-home"></i> Home</a></li>
                            <li class="current">Jobs Applied</li>
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
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="job-alerts-item candidates">
                        <div class="alerts-list">
                            <div class="row">
                                <div class="col-md-4">
                                    <p class="text-bold">Title</p>
                                </div>
                                <div class="col-md-1">
                                    <p class="text-bold">Status</p>
                                </div>
                                <div class="col-md-2">
                                    <p class="text-bold">Apply Name</p>
                                </div>
                                <div class="col-md-2">
                                    <p class="text-bold">Apply Email</p>
                                </div>
                                <div class="col-md-3">
                                    <p class="text-bold">Apply About</p>
                                </div>
                            </div>
                        </div>
                        @foreach($data as $item)
                            <div class="applications-content">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="thums">
                                            <img src="{{asset('images/'.$item->job->company->company_logo)}}" alt="">
                                        </div>
                                        <h3><a href="{{route('job-detail', $item->job->slug_title)}}" target="_blank">
                                                {{$item->job->job_title}}
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="col-md-1">
                                        <button type="button" class="btn btn-success btn-sm">{{$item->status}}</button>
                                    </div>
                                    <div class="col-md-2">
                                        <p>{{$item->name}}</p>
                                    </div>
                                    <div class="col-md-2">
                                        <p>{{$item->email}}</p>
                                    </div>
                                    <div class="col-md-3">
                                        <p>{{$item->about}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <br>

                        {{$data->links()}}

                    </div>
                </div>
            </div>
        </div>
    </div>

    <input type="hidden" name="delete-job-url" value="{{route('delete-job')}}">
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

            $('a.delete_job').click(function (e) {
                e.preventDefault();
                var url = $('input[name=delete-job-url]').val();
                var item = this;
                var data = {};
                data.id = $(item).data('item-id');

                $.get(url, data, function (data) {
                    console.log(data);
                    $(item).parent().siblings('div.status').find('button').remove();
                    $(item).parent().siblings('div.status').append('<button type="button" class="btn btn-danger">Deleted</button>');

                    console.log( $(item).parent().siblings('div.status').find('button'));
                }).fail(
                    function (err) {
                        console.log(err);
                    });

            })


        });


    </script>
@endsection
