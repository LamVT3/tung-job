@extends('layouts.master')

@section('top-banner')
    <!-- Page Header Start -->
    <div class="page-header" style="background: url({{asset('img/banner1.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Review Company</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{route('home')}}"><i class="ti-home"></i> Home</a></li>
                            <li class="current">Review Company</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
@endsection
@section('content')

    <section class="job-detail section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="header-detail">
                        <div class="header-content pull-left">
                            <h1><a href="#">{{$data->company_name}}</a></h1>
                            <p>Address: {{$data->company_location}}</p>
                            <p>Country: {{$data->company_country}}</p>
                        </div>
                        <div class="detail-company pull-right text-right">
                            <div class="img-thum">
                                <img class="img-responsive" width="100px" height="100px" src="{{asset('images/'.$data->company_logo)}}" alt="">
                            </div>
                            <div class="name">
                                <h5 style="margin-top: 5px"><i class="ti-user"></i><span> {{$data->company_size_from}} - {{$data->company_size_to}}</span></h5>
                                <h5 style="margin-top: 5px"><i class="ti-link"></i> <a href="{{$data->company_url}}">Visit Company</a></h5>
                            </div>
                        </div>
                        <div class="clearfix">

                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-sm-7 col-xs-7">
                    <div class="content-area">
                        <div class="clearfix">
                            <div class="box">
                                {!! $data->description !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-5 col-xs-5">
                    <div class="sidebar">
                    <div class="content-area">
                        <div class="clearfix">
                            <div class="box">
                                <form method="POST" action="{{action('CompanyController@updateRating')}}" >
                                    {{csrf_field()}}
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td width="70px" style="font-weight: bold; font-size: 18px">
                                                Rating
                                            </td>
                                            <td>
                                                <div id="rating" start="{{$total}}"></div>

                                            </td>
                                            <td><p style="text-align: center;font-size: 20px;margin-top: 23px; font-weight: bold;">{{$total}}/5</p></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td width="200px" style="font-weight: bold">
                                                Growth Opportunity
                                            </td>
                                            <td>
                                                @if(Auth::user() != null && $flag_user == false)
                                                    <div id="rating-1" start="{{$sub_rating['growth']}}"></div>
                                                    <input name="number-1" id="number-1" value="{{$sub_rating['growth']}}" hidden>
                                                @else
                                                    <div class="rating-disable" start="{{$sub_rating['growth']}}"></div>
                                                @endif
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td width="200px" style="font-weight: bold">
                                                Culture & Value
                                            </td>
                                            <td>
                                                @if(Auth::user() != null && $flag_user == false)
                                                    <div id="rating-2" start="{{$sub_rating['culture']}}"></div>
                                                    <input name="number-2" id="number-2" value="{{$sub_rating['culture']}}" hidden>
                                                @else
                                                    <div class="rating-disable" start="{{$sub_rating['culture']}}"></div>
                                                @endif
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td width="200px" style="font-weight: bold">
                                                Leadership
                                            </td>
                                            <td>
                                                @if(Auth::user() != null && $flag_user == false)
                                                    <div id="rating-3" start="{{$sub_rating['leader']}}"></div>
                                                    <input name="number-3" id="number-3" value="{{$sub_rating['leader']}}" hidden>
                                                @else
                                                    <div class="rating-disable" start="{{$sub_rating['leader']}}"></div>
                                                @endif
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td width="200px" style="font-weight: bold">
                                                Work & Life Quality
                                            </td>
                                            <td>
                                                @if(Auth::user() != null && $flag_user == false)
                                                    <div id="rating-4" start="{{$sub_rating['work']}}"></div>
                                                    <input name="number-4" id="number-4" value="{{$sub_rating['work']}}" hidden>
                                                @else
                                                    <div class="rating-disable" start="{{$sub_rating['work']}}"></div>
                                                @endif

                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td width="200px" style="font-weight: bold">
                                                Company Reputation
                                            </td>
                                            <td>
                                                @if(Auth::user() != null && $flag_user == false)
                                                    <div id="rating-5" start="{{$sub_rating['reputation']}}"></div>
                                                    <input name="number-5" id="number-5" value="{{$sub_rating['reputation']}}" hidden>
                                                @else
                                                    <div class="rating-disable" start="{{$sub_rating['reputation']}}"></div>
                                                @endif
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    @if(Auth::user() != null && $flag_user == false )
                                        <input hidden type="text" value="{{$data->_id}}"name="company_id">
                                        <button type="submit" class="btn btn-primary" style="margin-left: 30%;margin-top: 10px;">Submit Rating</button>
                                    @endif

                                </form>
                            </div>

                        </div>
                    </div>

                    @foreach($jobs as $item)
                        <div class="box">
                            <div class="thumb">
                                <a href="#"><img src="{{asset('images/'.$item->company->company_logo)}}" alt="img"></a>
                            </div>
                            <div class="text-box">
                                <h4><a href="{{route('job-detail', $item->slug_title)}}">{{$item->job_title}}</a></h4>
                                <p> </p>
                                <a href="#" class="text"><i class="fa fa-map-marker"></i>{{$item->location}}</a>
                                <a href="#" class="text"><i class="fa fa-calendar"></i>{{date('M d, Y', strtotime($item->created_date))}} - {{date('M d, Y', strtotime($item->expire_date))}} </a>
                                <strong class="price"><i class="fa fa-money"></i>${{$item->salary_from}} - ${{$item->salary_to}}</strong>
                                <a href="{{route('job-detail', $item->slug_title)}}" class="btn btn-common btn-sm">Apply for this Job</a>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="box">
                        <div id="fb-root"></div>
                        <div class="fb-comments" data-href="{{URL::current()}}" data-width="100%"  data-numposts="5"></div>
                    </div>

                </div>
            </div>
        </div>


        <script>
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=326695574782599&autoLogAppEvents=1';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));

        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    </section>
@endsection

@section('script')

    <script src="{{asset('/js/jsRapStar.js')}}"></script>
    <script>
        $(document).ready(function(){
            $('.rating-disable').jsDisableSubRating({enabled:false});
            $('#rating').jsRapStar({enabled:false});
            $('#rating-1').jsRapStar({colorFront:'#FFC300  ',length:5,starHeight:32,step:false,
                onClick:function(score){
                    $(this)[0].StarF.css({color:'#99c33b'});
                    score = Math.round(score * 10)/10
                    $('#number-1').val(score);
                },

            });

            $('#rating-2').jsRapStar({colorFront:'#FFC300  ',length:5,starHeight:32,step:false,
                onClick:function(score){
                    $(this)[0].StarF.css({color:'#99c33b'});
                    score = Math.round(score * 10)/10
                    $('#number-2').val(score);
                },

            });

            $('#rating-3').jsRapStar({colorFront:'#FFC300  ',length:5,starHeight:32,step:false,
                onClick:function(score){
                    $(this)[0].StarF.css({color:'#99c33b'});
                    score = Math.round(score * 10)/10
                    $('#number-3').val(score);
                },

            });

            $('#rating-4').jsRapStar({colorFront:'#FFC300  ',length:5,starHeight:32,step:false,
                onClick:function(score){
                    $(this)[0].StarF.css({color:'#99c33b'});
                    score = Math.round(score * 10)/10
                    $('#number-4').val(score);
                },

            });
            $('#rating-5').jsRapStar({colorFront:'#FFC300  ',length:5,starHeight:32,step:false,
                onClick:function(score){
                    $(this)[0].StarF.css({color:'#99c33b'});
                    score = Math.round(score * 10)/10
                    $('#number-5').val(score);
                },

            });
        });
    </script>
@endsection