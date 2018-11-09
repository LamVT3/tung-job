@extends('layouts.master')

@section('top-banner')
    <!-- Page Header Start -->
    <div class="page-header" style="background: url({{asset('img/banner1.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Post A Job</h2>
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="ti-home"></i> Home</a></li>
                            <li class="current">Post A Job</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
@endsection

@section('content')
    <section id="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-9 col-md-offset-2">
                <div class="page-ads box">
                    <form class="form-ad">
                        <div class="form-group">
                            <label class="control-label">Job Title</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Location <span>(optional)</span></label>
                            <input type="text" class="form-control" placeholder="e.g.London">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Experience </label>
                            <input type="text" class="form-control" placeholder="e.g.London">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Experience </label>
                            <input type="text" class="form-control" placeholder="e.g.London">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Salary </label>
                            <input type="text" class="form-control" placeholder="e.g.London">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="textarea">Job Tags <span>(optional)</span></label>
                            <input type="text" class="form-control" placeholder="e.g.PHP,Social Media,Management">
                            <p class="note">Comma separate tags, such as required skills or technologies, for this job.</p>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Description</label>
                        </div>
                        <section id="editor">
                            <div id="summernote"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem quia aut modi fugit, ratione saepe perferendis odio optio repellat dolorum voluptas excepturi possimus similique veritatis nobis. Provident cupiditate delectus, optio?</p></div>
                        </section>
                        <div class="form-group">
                            <label class="control-label">Application email / URL</label>
                            <input type="text" class="form-control" placeholder="Enter an email address or website URL">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Closing Date <span>(optional)</span></label>
                            <input type="text" class="form-control" placeholder="yyyy-mm-dd">
                            <p class="note">Deadline for new applicants.</p>
                        </div>
                        <div class="divider"><h3>Company Details</h3></div>
                        <div class="form-group">
                            <label class="control-label">Company Name</label>
                            <input type="text" class="form-control" placeholder="Enter the name of the company">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Website <span>(optional)</span></label>
                            <input type="text" class="form-control" placeholder="http://">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Tagline <span>(optional)</span></label>
                            <input type="text" class="form-control" placeholder="Briefly describe your company">
                        </div>
                        <a href="#" class="btn btn-common">Submit your job</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection

@section('script')
    <link rel="stylesheet" href="{{asset('css/summernote.css')}}" type="text/css">

    <script type="text/javascript" src="{{asset('js/summernote.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 250,                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: false                  // set focus to editable area after initializing summernote
            });
        });
    </script>
@endsection
