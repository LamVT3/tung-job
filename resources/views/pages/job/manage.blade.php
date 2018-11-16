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
                            <li><a href="{{route('home')}}"><i class="ti-home"></i> Home</a></li>
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
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="job-alerts-item candidates">
                        <div class="alerts-list">
                            <div class="row">
                                <div class="col-md-4">
                                    <p class="text-bold">Title</p>
                                </div>
                                <div class="col-md-2">
                                    <p class="text-bold">Permalink</p>
                                </div>
                                <div class="col-md-2">
                                    <p class="text-bold">Status</p>
                                </div>
                                <div class="col-md-2">
                                    <p class="text-bold">Featured</p>
                                </div>
                                <div class="col-md-1">
                                    <p class="text-bold">Edit</p>
                                </div>
                                <div class="col-md-1">
                                    <p class="text-bold">Delete</p>
                                </div>
                            </div>
                        </div>

                        @foreach($data as $item)
                        <div class="alerts-content">
                            <div class="row">
                                <div class="col-md-4">
                                    <h3>{{$item->job_title}}</h3>
                                    <span class="location"><i class="ti-location-pin"></i> {{$item->company_name}}</span>
                                </div>

                                <div class="col-md-2">
                                    <a class="text-info" href="{{route('job-detail', $item->slug_title)}}" target="_blank">Link</a>
                                </div>

                                @if($item->is_deleted == '1')
                                    <div class="col-md-2 status">
                                        <button type="button" class="btn btn-danger btn-sm">Deleted</button>
                                    </div>
                                @elseif(strtotime(date('Y-m-d')) > strtotime($item->expire_date))
                                    <div class="col-md-2 expired">
                                        <button type="button" class="btn btn-warning btn-sm">Expired</button>
                                    </div>
                                @else
                                    <div class="col-md-2 status">
                                        <button type="button" class="btn btn-info status btn-sm">On-going</button>
                                    </div>
                                @endif

                                @if($item->is_featured == '1')
                                <div class="col-md-2">
                                    <a href="#" class="set_featured" data-item-id="{{$item->_id}}"><i class="fa fa-toggle-on fa-3x" aria-hidden="true"></i></a>
                                </div>
                                @else
                                <div class="col-md-2">
                                    <a class="set_featured" data-item-id="{{$item->_id}}"><i class="fa fa-toggle-off fa-3x" aria-hidden="true"></i></a>
                                </div>
                                @endif

                                <div class="col-md-1">
                                    <a href="{{route('show-edit-job', $item->_id)}}" class="">
                                    <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div class="col-md-1">
                                    <a class="delete_job" data-item-id="{{$item->_id}}"><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></a>
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
