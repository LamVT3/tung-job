@extends('layouts.master')

@section('top-banner')
    <div class="search-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        @include('pages.job.search')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <!-- Find Job Section Start -->
    <section class="find-job section">
        <div class="container">
            <h2 class="section-title">Results</h2>
            <div class="row">
                <div class="col-md-12 mb15">
                    @if(count($data)==0)
                        <h4>The job you're looking for doesn't exist</h4>
                    @else
                    @foreach($data as $item)
                            @include('pages.job.list.list_item',['item'=>$item])

                    @endforeach
                    <div class="mb15">
                        {{$data->appends(request()->input())->links()}}
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </section>
@endsection

