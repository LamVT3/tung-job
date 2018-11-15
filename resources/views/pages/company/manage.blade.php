@extends('layouts.master')

@section('top-banner')
    <!-- Page Header Start -->
    <div class="page-header" style="background: url({{asset('img/banner1.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Manage Companies</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{route('home')}}"><i class="ti-home"></i> Home</a></li>
                            <li class="current">Manage Companies</li>
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
                                    <p class="text-bold">Logo</p>
                                </div>
                                <div class="col-md-2">
                                    <p class="text-bold">Permalink</p>
                                </div>
                                <div class="col-md-2">
                                    <p class="text-bold">Status</p>
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
                                    <h4>{{$item->company_name}}</h4>
                                </div>

                                <div class="col-md-2">
                                    <img width="50px" height="50px" src="{{$item->company_logo}}" alt="{{$item->company_name}}">
                                </div>

                                <div class="col-md-2">
                                    <a class="text-info" href="{{route('company-detail', $item->slug_company_name)}}" target="_blank">Link</a>
                                </div>

                                @if($item->is_deleted == '1')
                                    <div class="col-md-2 status">
                                        <button type="button" class="btn btn-danger btn-sm">Deleted</button>
                                    </div>
                                @else
                                    <div class="col-md-2 status">
                                        <button type="button" class="btn btn-info status btn-sm">On-going</button>
                                    </div>
                                @endif

                                <div class="col-md-1">
                                    <a href="{{route('show-edit-company', $item->_id)}}" class="">
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

    <input type="hidden" name="delete-company-url" value="{{route('delete-company')}}">
    <input type="hidden" name="redirect-url" value="{{route('home')}}">

@endsection

@section('script')
    <link rel="stylesheet" href="{{asset('css/summernote.css')}}" type="text/css">

    <script type="text/javascript" src="{{asset('js/summernote.js')}}"></script>
    <script>
        $(document).ready(function() {

            $('a.delete_job').click(function (e) {
                e.preventDefault();
                var url = $('input[name=delete-company-url]').val();
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
