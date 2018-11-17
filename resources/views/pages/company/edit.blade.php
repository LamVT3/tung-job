@extends('layouts.master')

@section('top-banner')
    <!-- Page Header Start -->
    <div class="page-header" style="background: url({{asset('img/banner1.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Edit Company</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{route('home')}}"><i class="ti-home"></i> Home</a></li>
                            <li class="current">Edit Company</li>
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
                    <form id="form-create-company" method="POST" class="form-ad" action="#" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label">Company Logo</label>
                            <input id="company_logo" name="company_logo" type="file" class="form-control" placeholder="Enter the url logo  of the company" value="{{$data->company_logo}}">
                        </div>
                        <div class="form-group">
                            <label class="control-label require_field">Company Name</label>
                            <input name="company_name" type="text" class="form-control" placeholder="Enter the name of the company" value="{{$data->company_name}}">
                        </div>
                        <div class="form-group">
                            <label class="control-label require_field">Application email / URL</label>
                            <input name="email" type="text" class="form-control" placeholder="Enter an email address or website URL" value="{{$data->email}}">
                        </div>
                        <section id="editor">
                            <div name="description" id="description">
                                {!! $data->description !!}
                            </div>
                        </section>
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
                        <button type="submit" class="btn btn-common">Save your company</button>
                        <a href="{{route('manage-company')}}" class="btn btn-common">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>

    <input type="hidden" name="save-company-url" value="{{route('edit-company', $data->_id)}}">
    <input type="hidden" name="redirect-url" value="{{route('manage-company')}}">
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

            $('#form-create-company').validate({
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
                    description: {
                        required: true,
                        // alphanumeric: true
                    },
                    email: {
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

            $('#form-create-company').submit(function (e) {
                e.preventDefault();
                var data = new FormData($(this)[0]);
                var url             = $('input[name=save-company-url]').val();
                var redirect_url    = $('input[name=redirect-url]').val();
                data.append('description', $(this).find('[class=note-editable]').html());

                if(!$(this).valid()){
                    return false;
                }

                $.ajax({
                    url:url,
                    type: "POST",
                    data: data,
                    contentType:false,
                    cache: false,
                    processData:false,
                    success:function (rs) {
                        console.log(rs);
                        location.href = rs.url;
                    }
                });

            })


        });


    </script>
@endsection
