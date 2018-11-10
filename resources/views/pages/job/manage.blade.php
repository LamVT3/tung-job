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
                        <h3 class="alerts-title">Manage Jobs</h3>
                        <div class="alerts-list">
                            <div class="row">
                                <div class="col-md-3">
                                    <p>Title</p>
                                </div>
                                <div class="col-md-3">
                                    <p>Status</p>
                                </div>
                                <div class="col-md-3">
                                    <p>Featured</p>
                                </div>
                                <div class="col-md-3">
                                    <p>Edit</p>
                                </div>
                            </div>
                        </div>

                        @foreach($data as $item)
                        <div class="alerts-content">
                            <div class="row">
                                <div class="col-md-3">
                                    <h3>{{$item->job_title}}</h3>
                                    <span class="location"><i class="ti-location-pin"></i> {{$item->location}}</span>
                                </div>
                                <div class="col-md-3">
                                    <p><span class="full-time">Full-Time</span></p>
                                </div>
                                @if($item->is_featured == '1')
                                <div class="col-md-3">
                                    <a href="#" class="set_featured" data-item-id="{{$item->_id}}"><i class="fa fa-toggle-on fa-3x" aria-hidden="true"></i></a>
                                </div>
                                @else
                                <div class="col-md-3">
                                    <a class="set_featured" data-item-id="{{$item->_id}}"><i class="fa fa-toggle-off fa-3x" aria-hidden="true"></i></a>
                                </div>
                                @endif
                                <div class="col-md-3">
                                    <div class="can-img"><a href="#"><img src="assets/img/jobs/candidates.png" alt=""></a></div>
                                </div>
                            </div>
                        </div>
                        @endforeach

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

                console.log(data);

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


        });


    </script>
@endsection
