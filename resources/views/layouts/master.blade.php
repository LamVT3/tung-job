<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Jobboard">

    <title>JobBoard - Bootstrap HTML5 Job Portal Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/jasny-bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css" type="text/css">
    <!-- Material CSS -->
    <link rel="stylesheet" href="css/material-kit.css" type="text/css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="fonts/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="fonts/themify-icons.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="extras/animate.css" type="text/css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="extras/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="extras/owl.theme.css" type="text/css">
    <!-- Rev Slider CSS -->
    <link rel="stylesheet" href="extras/settings.css" type="text/css">
    <!-- Slicknav js -->
    <link rel="stylesheet" href="css/slicknav.css" type="text/css">
    <!-- Main Styles -->
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <!-- Responsive CSS Styles -->
    <link rel="stylesheet" href="css/responsive.css" type="text/css">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="css/colors/lightgreen.css" media="screen" />

</head>

<body>

@include('layouts.header')

@yield('content')

@include('layouts.footer')

<!-- Go To Top Link -->
<a href="#" class="back-to-top">
    <i class="ti-arrow-up"></i>
</a>

<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_one"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_four"></div>
            <div class="object" id="object_five"></div>
            <div class="object" id="object_six"></div>
            <div class="object" id="object_seven"></div>
            <div class="object" id="object_eight"></div>
        </div>
    </div>
</div>

@include('layouts.script')
</body>
</html>