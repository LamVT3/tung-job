@extends('layouts.master')

@section('top-banner')
    <!-- Page Header Start -->
    <div class="page-header" style="background: url({{asset('img/banner1.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Edit Job</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{route('home')}}"><i class="ti-home"></i> Home</a></li>
                            <li class="current">Edit Job</li>
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
            <div class="col-sm-12 col-md-12">
                <div class="page-ads box">
                    <form id="form-create-job" method="POST" class="form-ad" action="#">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label require_field">Job Title</label>
                            <input name="job_title" type="text" class="form-control" placeholder="Enter the Job Title" value="{{$data->job_title}}">
                        </div>
                        <div class="form-group">
                            <label class="control-label require_field">Location <span>(optional)</span></label>
                            <input id="" name="location" type="text" class="form-control" placeholder="e.g.Ho Chi Minh" value="{{$data->location}}">
                        </div>
                        <div class="form-group">
                            <label class="control-label require_field">Job Type</label>
                            <div class="search-category-container">
                                <label class="styled-select">
                                    <select name="job_type"  class="dropdown-product selectpicker">
                                        <option value="Full-Time">Full-Time</option>
                                        <option value="Part-Time">Part-Time</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label require_field">Experience </label>
                            <input name="exprience" type="number" class="form-control" placeholder="Enter the number of years of experience" value="{{$data->exprience}}">
                        </div>
                        <div class="form-group">
                            <label class="control-label require_field">Amount </label>
                            <input name="amount" type="number" class="form-control" placeholder="Enter the number of position" value="{{$data->amount}}">
                        </div>
                        <div class="form-group" style="margin-bottom: 0px!important;">
                            <label class="control-label require_field">Salary (USD) </label>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="number" class="form-control" id="salary_from" name="salary_from" placeholder="From" value="{{$data->salary_from}}">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="number" class="form-control" id="salary_to" name="salary_to" placeholder="To" value="{{$data->salary_to}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label require_field" for="textarea">Job Tags </label>
                            <input name="job_tag" type="text" class="form-control" placeholder="e.g.PHP,Social Media,Management" value="{{$data->job_tag}}" >
                            <p class="note">Comma separate tags, such as required skills or technologies, for this job.</p>
                        </div>
                        <div class="form-group" style="margin-bottom: 0px!important;">
                            <label class="control-label require_field">Description</label>
                        </div>
                        <section id="editor">
                            <div name="description" id="description">
                                {!! $data->description !!}
                            </div>
                        </section>
                        <div class="form-group">
                            <label class="control-label require_field">Application email / URL</label>
                            <input name="email" type="text" class="form-control" placeholder="Enter an email address or website URL" value="{{$data->email}}">
                        </div>
                        <div class="form-group">
                            <label class="control-label require_field">Closing Date <span>(optional)</span></label>
                            <input name="expire_date" type="text" class="form-control" placeholder="yyyy-mm-dd" value="{{$data->expire_date}}">
                            <p class="note">Deadline for new applicants.</p>
                        </div>
                        <div class="divider"><h3>Company Details</h3></div>
                        <div class="form-group">
                            <label class="control-label require_field">Company Logo</label>
                            <input name="company_logo" type="text" class="form-control" placeholder="Enter the name of the company" value="{{$data->company_logo}}">
                        </div>
                        <div class="form-group">
                            <label class="control-label require_field">Company Name</label>
                            <input name="company_name" type="text" class="form-control" placeholder="Enter the name of the company" value="{{$data->company_name}}">
                        </div>
                        <div class="form-group">
                            <label class="control-label require_field">Company Location</label>
                            <input name="company_location" type="text" class="form-control" placeholder="e.g.Ho Chi Minh" value="{{$data->company_location}}">
                        </div>
                        <div class="form-group">
                            <label class="control-label require_field">Country</label>
                            <input name="company_country" type="text" class="form-control" placeholder="e.g.Viet Nam" value="{{$data->company_country}}">
                        </div>
                        <div class="form-group" style="margin-bottom: 0px!important;">
                            <label class="control-label require_field">Company Size </label>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="number" class="form-control" id="company_size_from" name="company_size_from" placeholder="From" value="{{$data->company_size_from}}">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="number" class="form-control" id="company_size_to" name="company_size_to" placeholder="To" value="{{$data->company_size_to}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label require_field">Website </label>
                            <input name="company_url" type="text" class="form-control" placeholder="http://" value="{{$data->company_url}}">
                        </div>
                        <button type="submit" class="btn btn-common">Save your job</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>

    <input type="hidden" name="save-job-url" value="{{route('edit-job', $data->_id)}}">
    <input type="hidden" name="redirect-url" value="{{route('manage-job')}}">
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
                    salary_from: {
                        required: true,
                        // alphanumeric: true
                    },
                    salary_to: {
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
                    company_logo: {
                        required: true,
                        // alphanumeric: true
                    },
                    company_name: {
                        required: true,
                        // alphanumeric: true
                    },
                    company_location: {
                        required: true,
                        // alphanumeric: true
                    },
                    company_country: {
                        required: true,
                        // alphanumeric: true
                    },
                    company_size_from: {
                        required: true,
                        // alphanumeric: true
                    },
                    company_size_to: {
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
                var url             = $('input[name=save-job-url]').val();
                var redirect_url    = $('input[name=redirect-url]').val();
                var data = {};
                data._token         = $(this).find('[name=_token]').val();

                data.job_title      = $(this).find('[name=job_title]').val();
                data.location       = $(this).find('[name=location]').val();
                data.job_type       = $(this).find('[name=job_type]').val();
                data.exprience      = $(this).find('[name=exprience]').val();
                data.amount         = $(this).find('[name=amount]').val();
                data.salary_from    = $(this).find('[name=salary_from]').val();
                data.salary_to      = $(this).find('[name=salary_to]').val();
                data.job_tag        = $(this).find('[name=job_tag]').val();
                data.description    = $(this).find('[name=description]').html();
                data.email          = $(this).find('[name=email]').val();
                data.expire_date    = $(this).find('[name=expire_date]').val();
                data.company_logo   = $(this).find('[name=company_logo]').val();
                data.company_name   = $(this).find('[name=company_name]').val();
                data.company_location   = $(this).find('[name=company_location]').val();
                data.company_country    = $(this).find('[name=company_country]').val();
                data.company_size_from  = $(this).find('[name=company_size_from]').val();
                data.company_size_to    = $(this).find('[name=company_size_to]').val();

                data.company_url    = $(this).find('[name=company_url]').val();

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
