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
                            <li><a href="{{route('home')}}"><i class="ti-home"></i> Home</a></li>
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
            <div class="col-sm-12 col-md-12">
                <div class="page-ads box">
                    <form id="form-create-job" method="POST" class="form-ad" action="#">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label require_field">Job Title</label>
                            <input name="job_title" type="text" class="form-control" placeholder="Enter the Job Title" value="">
                        </div>
                        <div class="form-group">
                            <label class="control-label require_field">Location <span>(optional)</span></label>
                            <select name="location" class="form-control">
                                <option value="ha-noi" @if(@$location == "Ha Noi") selected @endif>Ha Noi</option>
                                <option value="da-nang" @if(@$location == "Da Nang") selected @endif>Da Nang</option>
                                <option value="ho-chi-minh" @if(@$location == "Ho Chi Minh") selected @endif>Ho Chi Minh</option>
                            </select>
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
                            <input name="exprience" type="number" class="form-control" placeholder="Enter the number of years of experience">
                        </div>
                        <div class="form-group">
                            <label class="control-label require_field">Amount </label>
                            <input name="amount" type="number" class="form-control" placeholder="Enter the number of position">
                        </div>
                        <div class="form-group" style="margin-bottom: 0px!important;">
                            <label class="control-label require_field">Salary (USD) </label>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="number" class="form-control" id="salary_from" name="salary_from" placeholder="From">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="number" class="form-control" id="salary_to" name="salary_to" placeholder="To">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label require_field" for="textarea">Job Tags <span>(optional)</span></label>
                            <input name="job_tag" type="text" class="form-control" placeholder="e.g.PHP,Social Media,Management">
                            <p class="note">Comma separate tags, such as required skills or technologies, for this job.</p>
                        </div>
                        <div class="form-group" style="margin-bottom: 0px!important;">
                            <label class="control-label require_field">Description</label>
                        </div>
                        <section id="editor">
                            <div name="description" id="description">
                                <h4>Job Description</h4>
                                <p>LemonKids LLC. In marketing communications, we dream it and create it. All of the company’s promotional and communication ...</p>
                                <p>If you’re a dreamer, gather up your portfolio and show us your vision ...</p>
                                <h4>Qualification</h4>
                                <p>Qualified candidates for this role will possess the following education, experience and skills:</p>
                                <ul>
                                    <li><i class="ti-check-box"></i>Demonstrated strong and effective verbal, written, and interpersonal communication skills</li>
                                    <li><i class="ti-check-box"></i>...</li>
                                </ul>
                                <h4>Key responsibilities also include</h4>
                                <ul>
                                    <li><i class="ti-check-box"></i>Technical strategy and design, implementation as well as sector specific monitoring and evaluation.</li>
                                    <li><i class="ti-check-box"></i>...</li>
                                </ul>
                                <h4>Requirements</h4>
                                <ul>
                                    <li><i class="ti-check-box"></i>Must have minimum of 3 years experience running, maneuvering, driving...</li>
                                    <li><i class="ti-check-box"></i>...</li>
                                </ul>
                                <h4>Benefits</h4>
                                <ul>
                                    <li><i class="ti-check-box"></i>We provide a professional, fun and exciting work environment where innovation and creativity thrive!</li>
                                    <li><i class="ti-check-box"></i>...</li>
                                </ul>
                            </div>
                        </section>
                        <div class="form-group">
                            <label class="control-label require_field">Application email / URL</label>
                            <input name="email" type="text" class="form-control" placeholder="Enter an email address or website URL">
                        </div>
                        <div class="form-group">
                            <label class="control-label require_field">Closing Date <span>(optional)</span></label>
                            <input name="expire_date" type="text" class="form-control" placeholder="dd-mm-yyyy">
                            <p class="note">Deadline for new applicants.</p>
                        </div>
                        <div class="form-group">
                            <label class="control-label require_field">Company</label>
                            <div class="search-company-container">
                                <label class="styled-select">
                                    <select name="company"  class="dropdown-product selectpicker">
                                        <option value="">-- Select Company --</option>
                                        @foreach($companies as $company)
                                            <option value="{{$company->_id}}">{{$company->company_name}}</option>
                                        @endforeach
                                    </select>
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-common">Submit your job</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>

    <input type="hidden" name="save-job-url" value="{{route('save-job')}}">
    <input type="hidden" name="redirect-url" value="{{route('manage-company')}}">
@endsection

@section('script')
    <link rel="stylesheet" href="{{asset('css/summernote.css')}}" type="text/css">

    <script type="text/javascript" src="{{asset('js/summernote.js')}}"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css"/>
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
                    company: {
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
                data.description    = $(this).find('[class=note-editable]').html();
                data.email          = $(this).find('[name=email]').val();
                data.expire_date    = $(this).find('[name=expire_date]').val();
                data.company_id     = $(this).find('[name=company]').val();
                data.company_name   = $(this).find('[name=company] :selected').text();

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

            $('input[name="expire_date"]').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                minYear: 1901,
                maxYear: parseInt(moment().format('YYYY'),10),
                locale: {
                    format: 'DD-MM-YYYY'
                }
            }, function(start, end, label) {
            });
        });


    </script>
@endsection
