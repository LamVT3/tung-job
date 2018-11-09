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
                    <form id="form-create-job" method="POST" class="form-ad" action="#">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label require_field">Job Title</label>
                            <input name="job_title" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="control-label require_field">Location <span>(optional)</span></label>
                            <input id="" name="location" type="text" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="control-label require_field">Job Type</label>
                            <div name="job_type" class="search-category-container">
                                <label class="styled-select">
                                    <select class="dropdown-product selectpicker">
                                        <option value="">All</option>
                                        <option value="Product">Product</option>
                                        <option value="Outsource">Outsource</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label require_field">Experience </label>
                            <input name="exprience" type="text" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="control-label require_field">Amount </label>
                            <input name="amount" type="text" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="control-label require_field">Salary </label>
                            <input name="salary" type="text" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="control-label require_field" for="textarea">Job Tags <span>(optional)</span></label>
                            <input name="job_tag" type="text" class="form-control" placeholder="e.g.PHP,Social Media,Management">
                            <p class="note">Comma separate tags, such as required skills or technologies, for this job.</p>
                        </div>
                        <div class="form-group">
                            <label class="control-label require_field">Description</label>
                        </div>
                        <section id="editor">
                            <div name="description" id="description"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem quia aut modi fugit, ratione saepe perferendis odio optio repellat dolorum voluptas excepturi possimus similique veritatis nobis. Provident cupiditate delectus, optio?</p></div>
                        </section>
                        <div class="form-group">
                            <label class="control-label require_field">Application email / URL</label>
                            <input name="email" type="text" class="form-control" placeholder="Enter an email address or website URL">
                        </div>
                        <div class="form-group">
                            <label class="control-label require_field">Closing Date <span>(optional)</span></label>
                            <input name="expire_date" type="text" class="form-control" placeholder="yyyy-mm-dd">
                            <p class="note">Deadline for new applicants.</p>
                        </div>
                        <div class="divider"><h3>Company Details</h3></div>
                        <div class="form-group">
                            <label class="control-label require_field">Company Logo</label>
                            <input name="company_logo" type="text" class="form-control" placeholder="Enter the name of the company">
                        </div>
                        <div class="form-group">
                            <label class="control-label require_field">Company Name</label>
                            <input name="company_name" type="text" class="form-control" placeholder="Enter the name of the company">
                        </div>
                        <div class="form-group">
                            <label class="control-label require_field">Website <span>(optional)</span></label>
                            <input name="company_url" type="text" class="form-control" placeholder="http://">
                        </div>
                        <button type="submit" class="btn btn-common">Submit your job</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>

    <input type="hidden" name="save-job-url" value="{{route('save-job')}}">
    <input type="hidden" name="redirect-url" value="{{route('home')}}">
@endsection

@section('script')
    <link rel="stylesheet" href="{{asset('css/summernote.css')}}" type="text/css">

    <script type="text/javascript" src="{{asset('js/summernote.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('#description').summernote({
                height: 250,                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: false                  // set focus to editable area after initializing summernote
            });

            var errorClass = 'invalid';
            var errorElement = 'em';

            $.validator.addMethod( "alphanumeric", function( value, element ) {
                return this.optional( element ) || /^\w+$/i.test( value );
            }, "Letters, numbers, and underscores only please" );

            $('#form-create-job').validate({
                errorClass: errorClass,
                errorElement: errorElement,
                highlight: function (element) {
                    $(element).parent().removeClass('is-empty').addClass("has-error");
                    $(element).removeClass('valid');
                },
                unhighlight: function (element) {
                    $(element).parent().removeClass("has-error").addClass('is-empty');
                    $(element).addClass('valid');
                },

                // Rules for form validation
                rules: {
                    job_title: {
                        required: true,
                        // alphanumeric: true
                    },
                    location: {
                        required: true,
                        // alphanumeric: true
                    },
                    job_type: {
                        required: true,
                        // alphanumeric: true
                    },
                    exprience: {
                        required: true,
                        // alphanumeric: true
                    },
                    amount: {
                        required: true,
                        // alphanumeric: true
                    },
                    salary: {
                        required: true,
                        // alphanumeric: true
                    },
                    job_tag: {
                        required: true,
                        // alphanumeric: true
                    },
                    description: {
                        required: true,
                        // alphanumeric: true
                    },
                    email: {
                        required: true,
                        // alphanumeric: true
                    },
                    expire_date: {
                        required: true,
                        // alphanumeric: true
                    },
                    company_name: {
                        required: true,
                        // alphanumeric: true
                    },
                    company_url: {
                        required: true,
                        // alphanumeric: true
                    },
                },

                // Do not change code below
                errorPlacement: function (error, element) {
                    error.insertAfter(element);
                }
            });

            $('#form-create-job').submit(function (e) {
                e.preventDefault();
                var url = $('input[name=save-job-url]').val();
                var redirect_url = $('input[name=redirect-url]').val();
                var data = {};
                data._token = $(this).find('[name=_token]').val();
                data.job_title = $(this).find('[name=job_title]').val();
                data.location = $(this).find('[name=location]').val();
                data.job_type = $(this).find('[name=job_type]').val();
                data.exprience = $(this).find('[name=exprience]').val();
                data.amount = $(this).find('[name=amount]').val();
                data.salary = $(this).find('[name=salary]').val();
                data.job_tag = $(this).find('[name=job_tag]').val();
                data.description = $(this).find('[name=description]').val();
                data.email = $(this).find('[name=email]').val();
                data.expire_date = $(this).find('[name=expire_date]').val();
                data.company_logo = $(this).find('[name=company_logo]').val();
                data.company_name = $(this).find('[name=company_name]').val();
                data.company_url = $(this).find('[name=company_url]').val();

                if(!$(this).valid()){
                    return false;
                }

                $.post(url, data, function (data) {

                    console.log(data);
                    location.href = data.url;

                }).fail(
                    function (err) {
                        console.log(err);
                    });

            })


        });


    </script>
@endsection
